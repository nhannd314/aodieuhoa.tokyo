<?php
/**
 * submit-order.php — Nhận đơn đặt hàng từ landing page và gửi về email qua Gmail SMTP.
 * Phương thức: POST (JSON hoặc form-urlencoded).
 * Trả về: JSON { ok: bool, message: string }
 */

header('Content-Type: application/json; charset=utf-8');

// ---- CORS (cho phép gọi từ cùng domain; chỉnh nếu front-end ở domain khác) ----
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(204);
    exit;
}

function respond($ok, $message, $code = 200)
{
    http_response_code($code);
    echo json_encode(['ok' => $ok, 'message' => $message], JSON_UNESCAPED_UNICODE);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    respond(false, 'Phương thức không hợp lệ.', 405);
}

// ---- Lấy dữ liệu (hỗ trợ cả JSON lẫn form) ----
$raw = file_get_contents('php://input');
$data = [];
if ($raw) {
    $json = json_decode($raw, true);
    if (is_array($json)) {
        $data = $json;
    }
}
if (empty($data)) {
    $data = $_POST;
}

function field($data, $key, $max = 500)
{
    $v = isset($data[$key]) ? trim((string) $data[$key]) : '';
    $v = preg_replace('/[\r\n]+/', ' ', $v); // chống header injection
    return mb_substr($v, 0, $max);
}

$name    = field($data, 'name', 120);
$phone   = field($data, 'phone', 30);
$address = field($data, 'address', 400);
$size    = field($data, 'size', 20);
$color   = field($data, 'color', 30);
$qty     = (int) (isset($data['qty']) ? $data['qty'] : 1);
$total   = field($data, 'total', 40);
$price   = field($data, 'price', 40);

// ---- Kiểm tra hợp lệ ----
$errors = [];
if (mb_strlen($name) < 2)    $errors[] = 'họ tên';
if (!preg_match('/[0-9]{8,}/', preg_replace('/\D/', '', $phone))) $errors[] = 'số điện thoại';
if (mb_strlen($address) < 5) $errors[] = 'địa chỉ';
if ($errors) {
    respond(false, 'Vui lòng nhập đúng: ' . implode(', ', $errors) . '.', 422);
}
if ($qty < 1) $qty = 1;

// ---- Tải cấu hình + mailer ----
$config = require __DIR__ . '/config.php';
require __DIR__ . '/SmtpMailer.php';

// ---- Soạn nội dung email ----
$safe = function ($s) {
    return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
};
$time = date('H:i d/m/Y');
$ip   = $safe($_SERVER['REMOTE_ADDR'] ?? '');

$rows = [
    ['Họ và tên',  $name],
    ['Điện thoại', $phone],
    ['Địa chỉ',    $address],
    ['Size',       $size],
    ['Màu',        $color],
    ['Số lượng',   $qty . ' áo'],
    ['Đơn giá',    $price],
    ['Tổng tiền',  $total],
    ['Thời gian',  $time],
];
$rowsHtml = '';
foreach ($rows as $r) {
    $rowsHtml .= '<tr>'
        . '<td style="padding:10px 14px;border-bottom:1px solid #eef2f7;color:#5d6b7e;font-size:14px;white-space:nowrap;">' . $safe($r[0]) . '</td>'
        . '<td style="padding:10px 14px;border-bottom:1px solid #eef2f7;color:#122033;font-size:15px;font-weight:600;">' . $safe($r[1]) . '</td>'
        . '</tr>';
}

$html = '<!DOCTYPE html><html><body style="margin:0;background:#f3f7fb;padding:24px;font-family:Arial,Helvetica,sans-serif;">'
    . '<div style="max-width:560px;margin:0 auto;background:#fff;border-radius:14px;overflow:hidden;border:1px solid #e6edf5;">'
    . '<div style="background:#0e2547;color:#fff;padding:22px 24px;">'
    . '<div style="font-size:13px;letter-spacing:.08em;color:#1bb6e0;text-transform:uppercase;font-weight:bold;">Đơn hàng mới</div>'
    . '<div style="font-size:22px;font-weight:bold;margin-top:4px;">🛒 Áo điều hòa Shakawa</div>'
    . '</div>'
    . '<table style="width:100%;border-collapse:collapse;">' . $rowsHtml . '</table>'
    . '<div style="padding:16px 24px;background:#fff5ef;color:#f5601a;font-weight:bold;font-size:15px;">'
    . '⚡ Gọi xác nhận cho khách càng sớm càng tốt.</div>'
    . '<div style="padding:14px 24px;color:#9aa7b6;font-size:12px;">Gửi tự động từ website · IP ' . $ip . '</div>'
    . '</div></body></html>';

$subject = '🛒 Đơn mới: ' . $name . ' - ' . $phone . ' (' . $qty . ' áo)';

// ---- Gửi ----
$mailer = new SmtpMailer(
    $config['smtp_host'],
    $config['smtp_port'],
    $config['smtp_user'],
    $config['smtp_pass']
);

try {
    $mailer->send(
        $config['smtp_user'],          // from email (phải là tài khoản Gmail đăng nhập)
        $config['from_name'],
        $config['to_email'],
        $config['to_name'],
        $subject,
        $html,
        $name . ' <' . $config['smtp_user'] . '>' // reply-to hiển thị tên khách
    );
} catch (Exception $e) {
    // Ghi log lỗi ra file để dễ debug (không lộ cho khách)
    @file_put_contents(__DIR__ . '/order-errors.log',
        date('c') . ' | ' . $e->getMessage() . ' | ' . implode(' >> ', $mailer->getLog()) . "\n",
        FILE_APPEND);
    respond(false, 'Hệ thống đang bận, vui lòng gọi hotline 097-919-8880 để đặt hàng.', 500);
}

// ---- Lưu thêm 1 bản sao vào file CSV (phòng khi email lỗi) ----
$csvLine = [date('c'), $name, $phone, $address, $size, $color, $qty, $total];
@file_put_contents(__DIR__ . '/orders.csv',
    '"' . implode('","', array_map(function ($v) {
        return str_replace('"', '""', $v);
    }, $csvLine)) . '"' . "\n",
    FILE_APPEND);

respond(true, 'Đặt hàng thành công! Shakawa sẽ gọi xác nhận trong ít phút.');
