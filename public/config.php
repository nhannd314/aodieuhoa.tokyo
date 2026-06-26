<?php
/**
 * =====================================================================
 *  CẤU HÌNH GỬI EMAIL ĐƠN HÀNG — SHAKAWA
 * =====================================================================
 *  ⚠ Gmail KHÔNG cho dùng mật khẩu đăng nhập thường để gửi SMTP.
 *    Bạn phải tạo "App Password" (Mật khẩu ứng dụng):
 *
 *    1. Bật xác minh 2 bước cho tài khoản Gmail:
 *       https://myaccount.google.com/security
 *    2. Vào: https://myaccount.google.com/apppasswords
 *    3. Tạo mật khẩu ứng dụng mới (chọn "Mail" / "Other").
 *    4. Google đưa 1 chuỗi 16 ký tự (vd: abcd efgh ijkl mnop).
 *       Dán chuỗi đó (bỏ dấu cách) vào SMTP_PASS bên dưới.
 * =====================================================================
 */

return [
    // ---- Tài khoản Gmail DÙNG ĐỂ GỬI (người gửi) ----
    'smtp_host' => 'smtp.gmail.com',
    'smtp_port' => 587,            // 587 = STARTTLS (khuyên dùng)
    'smtp_user' => 'nhannd314@gmail.com',   // địa chỉ Gmail đăng nhập SMTP
    'smtp_pass' => 'cdca cajt klab brjh',     // ⬅ DÁN APP PASSWORD 16 KÝ TỰ VÀO ĐÂY

    // ---- Người nhận đơn hàng ----
    'to_email'  => 'nhannd314@gmail.com',
    'to_name'   => 'Shakawa - Đơn hàng',

    // ---- Hiển thị người gửi ----
    'from_name' => 'Website Shakawa',

    // ---- Tuỳ chọn: gửi thêm email xác nhận cho khách (cần thu thập email) ----
    'send_customer_copy' => false,
];
