# Shakawa — Backend gửi đơn hàng qua Gmail SMTP

Bộ mã PHP nhận đơn đặt hàng từ landing page và **gửi email về `nhannd314@gmail.com`** qua SMTP của Gmail. Không cần cài thư viện ngoài (không cần Composer/PHPMailer) — chỉ cần PHP 7.2+ có bật `openssl`.

## 📁 File
- `index.php` — landing page (trang bán hàng) — mở khi vào website.
- `submit-order.php` — endpoint nhận POST, kiểm tra dữ liệu, gửi mail, ghi `orders.csv`.
- `SmtpMailer.php` — client SMTP tối giản (STARTTLS + AUTH LOGIN).
- `config.php` — khai báo tài khoản Gmail gửi + email nhận.

## 🔑 Bước 1 — Tạo App Password cho Gmail
Gmail **không** cho dùng mật khẩu thường để gửi SMTP. Phải tạo "Mật khẩu ứng dụng":

1. Bật **Xác minh 2 bước**: https://myaccount.google.com/security
2. Vào https://myaccount.google.com/apppasswords
3. Tạo mật khẩu mới (chọn *Mail* / *Other*).
4. Google đưa chuỗi **16 ký tự** (vd `abcd efgh ijkl mnop`).

## ⚙️ Bước 2 — Điền `config.php`
```php
'smtp_user' => 'nhannd314@gmail.com',   // Gmail dùng để GỬI
'smtp_pass' => 'abcdefghijklmnop',        // App Password 16 ký tự (bỏ dấu cách)
'to_email'  => 'nhannd314@gmail.com',    // nơi NHẬN đơn
```
> Có thể dùng 1 Gmail khác để gửi và vẫn nhận về `nhannd314@gmail.com` — chỉ cần `to_email` trỏ đúng.

## 🚀 Bước 3 — Triển khai (deploy)
Chỉ cần **upload toàn bộ các file trong thư mục này** vào thư mục gốc website (vd `public_html/`) của hosting có PHP — là chạy. Không cần cấu hình gì thêm.
   ```
   /public_html/
   ├── index.php          ← landing page (tự mở khi vào web)
   ├── submit-order.php   ← nhận & gửi đơn
   ├── SmtpMailer.php
   └── config.php
   ```
Form trong `index.php` gửi tới `submit-order.php` cùng thư mục nên không cần chỉnh gì.

## 🧪 Bước 4 — Kiểm tra
- Mở landing page trên hosting, điền form, bấm **CHỐT ĐƠN**.
- Kiểm tra hộp thư `nhannd314@gmail.com` (cả mục **Spam**).
- Nếu lỗi: xem file `server/order-errors.log` (ghi chi tiết hội thoại SMTP).

## 🛟 Lưu ý
- Mỗi đơn còn được lưu vào `server/orders.csv` để phòng email lỗi.
- Bảo vệ file nhạy cảm: thêm vào `.htaccess` (Apache):
  ```
  <FilesMatch "\.(csv|log)$">
    Require all denied
  </FilesMatch>
  ```
- Nếu host chặn port 587, đổi sang SSL: `'smtp_port' => 465` và sửa `SmtpMailer` dùng `ssl://` thay vì STARTTLS (liên hệ mình để chỉnh).
- Endpoint **chỉ chạy trên server PHP thật** — không chạy trong khung xem trước thiết kế.
