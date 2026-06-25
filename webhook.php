<?php
# /var/www/myapp/webhook.php

$secret = 'ADFE9330_EFDF_33KDFD0_33DFD'; // đặt chuỗi bí mật

// Verify signature từ GitHub
$payload = file_get_contents('php://input');
$signature = $_SERVER['HTTP_X_HUB_SIGNATURE_256'] ?? '';
$expected = 'sha256=' . hash_hmac('sha256', $payload, $secret);

if (!hash_equals($expected, $signature)) {
    http_response_code(403);
    die('Forbidden');
}

$data = json_decode($payload, true);

// Chỉ deploy khi push vào branch main
if (($data['ref'] ?? '') !== 'refs/heads/main') {
    die('Not main branch');
}

// Chạy deploy script
$output = shell_exec('bash /var/www/aodieuhoa.tokyo/deploy.sh 2>&1');
echo $output;