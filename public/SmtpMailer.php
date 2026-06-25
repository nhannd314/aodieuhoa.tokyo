<?php
/**
 * SmtpMailer — SMTP client tối giản, không cần thư viện ngoài.
 * Hỗ trợ Gmail qua STARTTLS (port 587) + AUTH LOGIN.
 * Gửi email HTML, hỗ trợ tiêu đề & nội dung UTF-8 (tiếng Việt có dấu).
 */
class SmtpMailer
{
    private $host;
    private $port;
    private $user;
    private $pass;
    private $timeout;
    private $conn;
    public $debug = false;
    private $log = [];

    public function __construct($host, $port, $user, $pass, $timeout = 20)
    {
        $this->host = $host;
        $this->port = (int) $port;
        $this->user = $user;
        $this->pass = $pass;
        $this->timeout = $timeout;
    }

    public function getLog()
    {
        return $this->log;
    }

    private function logLine($line)
    {
        $this->log[] = $line;
    }

    /** Đọc phản hồi (có thể nhiều dòng) từ server. */
    private function read()
    {
        $data = '';
        while ($str = fgets($this->conn, 515)) {
            $data .= $str;
            // Dòng cuối của 1 phản hồi: "250 ..." (ký tự thứ 4 là space)
            if (isset($str[3]) && $str[3] === ' ') {
                break;
            }
        }
        $this->logLine('S: ' . trim($data));
        return $data;
    }

    /** Gửi 1 lệnh và (tuỳ chọn) kiểm tra mã trả về mong đợi. */
    private function cmd($command, $expectedCode = null, $hideLog = false)
    {
        fwrite($this->conn, $command . "\r\n");
        $this->logLine('C: ' . ($hideLog ? '***' : $command));
        if ($expectedCode === null) {
            return true;
        }
        $response = $this->read();
        $code = (int) substr($response, 0, 3);
        $expected = is_array($expectedCode) ? $expectedCode : [$expectedCode];
        if (!in_array($code, $expected, true)) {
            throw new Exception('SMTP lỗi: chờ mã ' . implode('/', $expected)
                . ' nhưng nhận "' . trim($response) . '"');
        }
        return $response;
    }

    /**
     * Gửi email.
     * @throws Exception nếu thất bại ở bất kỳ bước nào.
     */
    public function send($fromEmail, $fromName, $toEmail, $toName, $subject, $htmlBody, $replyTo = null)
    {
        $context = stream_context_create([
            'ssl' => ['verify_peer' => true, 'verify_peer_name' => true],
        ]);
        $this->conn = @stream_socket_client(
            'tcp://' . $this->host . ':' . $this->port,
            $errno, $errstr, $this->timeout,
            STREAM_CLIENT_CONNECT, $context
        );
        if (!$this->conn) {
            throw new Exception('Không kết nối được tới ' . $this->host . ':' . $this->port . " ($errno $errstr)");
        }
        stream_set_timeout($this->conn, $this->timeout);

        $this->read();                              // greeting 220
        $ehlo = 'EHLO ' . $this->clientName();
        $this->cmd($ehlo, 250);

        // Nâng cấp TLS
        $this->cmd('STARTTLS', 220);
        if (!stream_socket_enable_crypto($this->conn, true, STREAM_CRYPTO_METHOD_TLS_CLIENT)) {
            throw new Exception('Không bật được mã hoá TLS (STARTTLS).');
        }
        $this->cmd($ehlo, 250);                      // EHLO lại sau khi TLS

        // Xác thực
        $this->cmd('AUTH LOGIN', 334);
        $this->cmd(base64_encode($this->user), 334, true);
        $this->cmd(base64_encode($this->pass), 235, true);

        // Phong bì
        $this->cmd('MAIL FROM:<' . $fromEmail . '>', 250);
        $this->cmd('RCPT TO:<' . $toEmail . '>', [250, 251]);
        $this->cmd('DATA', 354);

        $headers = $this->buildHeaders($fromEmail, $fromName, $toEmail, $toName, $subject, $replyTo);
        $body = $this->dotStuff($htmlBody);
        // Kết thúc DATA bằng dòng chỉ chứa dấu chấm
        $this->cmd($headers . "\r\n" . $body . "\r\n.", 250);

        $this->cmd('QUIT');
        fclose($this->conn);
        return true;
    }

    private function clientName()
    {
        $host = isset($_SERVER['SERVER_NAME']) ? $_SERVER['SERVER_NAME'] : 'localhost';
        // chỉ giữ ký tự hợp lệ
        return preg_replace('/[^a-zA-Z0-9.\-]/', '', $host) ?: 'localhost';
    }

    private function encodeHeader($text)
    {
        // Mã hoá UTF-8 cho tiêu đề / tên (RFC 2047)
        return '=?UTF-8?B?' . base64_encode($text) . '?=';
    }

    private function buildHeaders($fromEmail, $fromName, $toEmail, $toName, $subject, $replyTo)
    {
        $date = date('r');
        $messageId = '<' . bin2hex(random_bytes(12)) . '@' . $this->clientName() . '>';
        $h = [];
        $h[] = 'Date: ' . $date;
        $h[] = 'Message-ID: ' . $messageId;
        $h[] = 'From: ' . $this->encodeHeader($fromName) . ' <' . $fromEmail . '>';
        $h[] = 'To: ' . $this->encodeHeader($toName) . ' <' . $toEmail . '>';
        if ($replyTo) {
            $h[] = 'Reply-To: ' . $replyTo;
        }
        $h[] = 'Subject: ' . $this->encodeHeader($subject);
        $h[] = 'MIME-Version: 1.0';
        $h[] = 'Content-Type: text/html; charset=UTF-8';
        $h[] = 'Content-Transfer-Encoding: base64';
        return implode("\r\n", $h);
    }

    private function dotStuff($body)
    {
        // Nội dung đã encode base64 (an toàn, không có dòng bắt đầu bằng ".")
        return chunk_split(base64_encode($body));
    }
}
