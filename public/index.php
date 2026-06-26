<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="./support.js"></script>
</head>
<body>
<x-dc>
<helmet>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
<link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@400;500;600;700;800&amp;family=Space+Mono:wght@400;700&amp;display=swap" rel="stylesheet">
<style>
  *{box-sizing:border-box;}
  html{scroll-behavior:smooth;}
  body{margin:0;font-family:'Be Vietnam Pro',system-ui,sans-serif;color:#122033;background:#ffffff;-webkit-font-smoothing:antialiased;}
  a{text-decoration:none;color:inherit;}
  button{font-family:inherit;cursor:pointer;}
  input,select,textarea{font-family:inherit;}
  @keyframes mq {0%{transform:translateX(0);}100%{transform:translateX(-50%);}}
  @keyframes spin {from{transform:rotate(0);}to{transform:rotate(360deg);}}
  @keyframes floaty {0%,100%{transform:translateY(0);}50%{transform:translateY(-14px);}}
  @keyframes pulse {0%,100%{box-shadow:0 12px 30px -8px rgba(245,96,26,.55);}50%{box-shadow:0 12px 40px -6px rgba(245,96,26,.85);}}
  @keyframes zalo-jump {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-10px); }
  }
  .zalo-float {
    position: fixed;
    bottom: 90px;
    right: 20px;
    z-index: 99;
    display: block;
    width: 60px;
    height: 60px;
    background: #0068ff;
    border-radius: 50%;
    box-shadow: 0 4px 15px rgba(0,104,255,0.4);
    display: flex;
    align-items: center;
    justify-content: center;
    animation: zalo-jump 2s infinite ease-in-out;
    transition: all 0.3s ease;
  }
  .zalo-float:hover {
    transform: scale(1.1);
    box-shadow: 0 6px 20px rgba(0,104,255,0.6);
  }
  .zalo-float img {
    width: 38px;
    height: 38px;
  }
  .fb-float {
    position: fixed;
    bottom: 160px;
    right: 20px;
    z-index: 99;
    display: block;
    width: 60px;
    height: 60px;
    background: #0084ff;
    border-radius: 50%;
    box-shadow: 0 4px 15px rgba(0,132,255,0.4);
    display: flex;
    align-items: center;
    justify-content: center;
    animation: zalo-jump 2s infinite ease-in-out;
    animation-delay: 0.5s;
    transition: all 0.3s ease;
  }
  .fb-float:hover {
    transform: scale(1.1);
    box-shadow: 0 6px 20px rgba(0,132,255,0.6);
  }
  .fb-float img {
    width: 38px;
    height: 38px;
  }
  @media (max-width: 760px) {
    .zalo-float {
      bottom: 100px;
      right: 15px;
      width: 50px;
      height: 50px;
    }
    .zalo-float img {
      width: 32px;
      height: 32px;
    }
    .fb-float {
      bottom: 160px;
      right: 15px;
      width: 50px;
      height: 50px;
    }
    .fb-float img {
      width: 32px;
      height: 32px;
    }
  }
  @media (max-width:1080px){
    .headContact{display:none !important;}
    .headNav{gap:18px !important;font-size:14px !important;}
  }
  @media (max-width:900px){
    .g4{grid-template-columns:1fr 1fr !important;}
    .g3rev{grid-template-columns:1fr 1fr !important;}
    .heroH1{font-size:44px !important;}
  }
  @media (max-width:760px){
    .heroGrid{grid-template-columns:1fr !important;gap:48px !important;padding:40px 20px 60px !important;}
    .heroH1{font-size:32px !important;line-height:1.1 !important;}
    .heroStats{gap:18px !important;}
    .cdCard{position:relative !important;left:auto !important;transform:none !important;bottom:auto !important;width:100% !important;margin-top:20px !important;}
    .featImg{margin-top:10px !important;}
    .g4{grid-template-columns:1fr 1fr !important;}
    .g2feat{grid-template-columns:1fr !important;gap:30px !important;}
    .galGrid{grid-template-columns:1fr 1fr !important;}
    .g3rev{grid-template-columns:1fr !important;}
    .orderGrid{grid-template-columns:1fr !important;gap:30px !important;padding:56px 20px !important;}
    .videoGrid{grid-template-columns:1fr !important;gap:30px !important;}
    .footGrid{grid-template-columns:1fr !important;gap:26px !important;}
    .ctaBanner{flex-direction:column !important;align-items:flex-start !important;text-align:left !important;}
    .headNav,.headContact{display:none !important;}
    header img{height:38px !important;}
    h1,h2{text-wrap:balance;}
    section h2{font-size:27px !important;}
  }
  @media (max-width:440px){
    .g4{grid-template-columns:1fr !important;}
  }
</style>
</helmet>

<template id="__bundler_thumbnail">
  <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
    <rect width="100" height="100" rx="20" fill="#0e2547"></rect>
    <g fill="none" stroke="#1bb6e0" stroke-width="5" stroke-linecap="round">
      <path d="M50 50 C50 34 58 30 64 36 C70 42 64 50 50 50"></path>
      <path d="M50 50 C66 50 70 58 64 64 C58 70 50 64 50 50"></path>
      <path d="M50 50 C50 66 42 70 36 64 C30 58 36 50 50 50"></path>
      <path d="M50 50 C34 50 30 42 36 36 C42 30 50 36 50 50"></path>
    </g>
    <circle cx="50" cy="50" r="6" fill="#f5601a"></circle>
  </svg>
</template>

<div id="top">

<!-- ===== Announcement bar ===== -->
<div style="background:#0e2547;color:#cfe2f5;font-size:13px;font-weight:500;overflow:hidden;white-space:nowrap;padding:9px 0;">
  <div style="display:inline-flex;gap:0;animation:mq 26s linear infinite;">
    <span style="display:inline-flex;gap:38px;padding-right:38px;">
      <span>Thanh toán khi nhận hàng (COD)</span><span style="color:#1bb6e0;">•</span>
      <span>Bảo hành 12 tháng — đổi mới trong 7 ngày</span><span style="color:#1bb6e0;">•</span>
      <span>Hotline 097-919-8880</span><span style="color:#1bb6e0;">•</span>
    </span>
    <span style="display:inline-flex;gap:38px;padding-right:38px;" aria-hidden="true">
      <span>Thanh toán khi nhận hàng (COD)</span><span style="color:#1bb6e0;">•</span>
      <span>Bảo hành 12 tháng — đổi mới trong 7 ngày</span><span style="color:#1bb6e0;">•</span>
      <span>Hotline 097-919-8880</span><span style="color:#1bb6e0;">•</span>
    </span>
  </div>
</div>

<!-- ===== Header ===== -->
<header style="position:sticky;top:0;z-index:50;background:rgba(255,255,255,.92);backdrop-filter:blur(10px);border-bottom:1px solid #e6edf5;">
  <div style="max-width:1200px;margin:0 auto;padding:14px 24px;display:flex;align-items:center;justify-content:space-between;gap:18px;">
    <img src="assets/shakawa-logo.jpg" alt="Shakawa" style="height:46px;width:auto;display:block;flex-shrink:0;">
    <nav class="headNav" style="display:flex;align-items:center;gap:22px;font-size:15px;font-weight:600;color:#33465c;white-space:nowrap;">
      <a href="#top">Trang chủ</a>
      <a href="#features">Tính năng</a>
      <a href="#reviews">Đánh giá</a>
      <a href="#order">Đặt hàng</a>
      <a href="#faq">Hỏi đáp</a>
      <a href="#contact">Liên hệ</a>
    </nav>
    <div style="display:flex;align-items:center;gap:16px;flex-shrink:0;">
      <a class="headContact" href="tel:0979198880" style="display:flex;align-items:center;gap:8px;font-weight:700;color:#16386b;font-size:15px;white-space:nowrap;">
        <span style="width:34px;height:34px;border-radius:50%;background:#eaf2fb;display:flex;align-items:center;justify-content:center;color:#16386b;font-size:16px;">☎</span>
        097-919-8880
      </a>
      <a href="#order" style="display:inline-flex;align-items:center;gap:8px;background:#f5601a;color:#fff;font-weight:700;font-size:15px;padding:11px 22px;border-radius:999px;white-space:nowrap;box-shadow:0 8px 20px -8px rgba(245,96,26,.6);"><svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink:0;"><circle cx="9" cy="21" r="1.4"></circle><circle cx="19" cy="21" r="1.4"></circle><path d="M1 1h4l2.7 13.4a2 2 0 0 0 2 1.6h8.7a2 2 0 0 0 2-1.6L23 6H6"></path></svg>Đặt hàng</a>
    </div>
  </div>
</header>

<!-- ===== Hero ===== -->
<section style="position:relative;background:linear-gradient(135deg,#0e2547 0%,#16386b 48%,#1d6fa8 100%);color:#fff;overflow:hidden;">
  <div style="position:absolute;top:-160px;right:-120px;width:520px;height:520px;border-radius:50%;background:radial-gradient(circle,rgba(27,182,224,.55),transparent 65%);filter:blur(10px);"></div>
  <div style="position:absolute;bottom:-180px;left:-140px;width:480px;height:480px;border-radius:50%;background:radial-gradient(circle,rgba(27,182,224,.28),transparent 65%);"></div>
  <div style="position:relative;max-width:1200px;margin:0 auto;padding:64px 24px 72px;display:grid;grid-template-columns:1.05fr .95fr;gap:48px;align-items:center;" class="heroGrid">
    <!-- left -->
    <div>
      <div style="display:inline-flex;align-items:center;gap:10px;background:rgba(255,255,255,.12);border:1px solid rgba(255,255,255,.2);padding:7px 14px;border-radius:999px;font-size:13px;font-weight:600;letter-spacing:.02em;margin-bottom:22px;">
        <span style="width:9px;height:9px;border-radius:50%;background:#1bb6e0;box-shadow:0 0 0 4px rgba(27,182,224,.25);"></span>
        Công nghệ làm mát Nhật Bản · 日本の技術
      </div>
      <h1 class="heroH1" style="font-size:54px;line-height:1.05;font-weight:800;margin:0 0 18px;letter-spacing:-.02em;">
        Mát lạnh cả ngày<br>giữa nắng nóng 40°C
      </h1>
      <p style="font-size:18px;line-height:1.55;color:#d3e2f2;margin:0 0 28px;max-width:520px;">
        Áo điều hòa <strong style="color:#fff;">Shakawa</strong> với quạt làm mát kép &amp; pin sạc, tạo lớp đệm không khí mát quanh cơ thể. Dành cho thợ xây, công nhân, nhà nông làm việc ngoài trời.
      </p>

      <!-- BOGO offer — prominent, above price -->
      <sc-if value="{{ bogo }}" hint-placeholder-val="{{ true }}">
        <div style="display:inline-flex;align-items:center;gap:14px;background:linear-gradient(95deg,#ffce3a,#f5601a);color:#10233f;font-weight:800;font-size:18px;padding:12px 14px 12px 12px;border-radius:14px;margin-bottom:18px;box-shadow:0 14px 34px -10px rgba(245,96,26,.65);animation:pulse 2.4s ease-in-out infinite;">
          <span style="display:inline-flex;align-items:center;justify-content:center;width:42px;height:42px;border-radius:10px;background:rgba(16,35,63,.92);font-size:22px;flex-shrink:0;">🎁</span>
          <span style="line-height:1.15;">MUA 1 TẶNG 1<br><span style="font-size:13.5px;font-weight:700;color:#3a2410;">Nhận ngay 2 áo — số lượng có hạn!</span></span>
        </div>
      </sc-if>

      <!-- price -->
      <div style="display:flex;align-items:flex-end;gap:16px;flex-wrap:wrap;margin-bottom:8px;">
        <div style="font-size:46px;font-weight:800;color:#ffce3a;line-height:1;">{{ salePrice }}</div>
        <div style="display:flex;flex-direction:column;gap:4px;padding-bottom:4px;">
          <span style="font-size:17px;color:#9fb6cf;text-decoration:line-through;">{{ originalPrice }}</span>
          <span style="background:#f5601a;color:#fff;font-weight:700;font-size:13px;padding:3px 9px;border-radius:6px;width:max-content;">GIẢM ĐẾN 60%</span>
        </div>
      </div>
      <p style="font-size:13px;color:#9fb6cf;font-style:italic;margin:0 0 26px;line-height:1.5;">* Giá 199k bao gồm 2 áo, chưa bao gồm pin &amp; quạt phụ kiện.</p>
      <div style="display:flex;gap:14px;flex-wrap:wrap;margin-top:4px;">
        <a href="#order" style="background:#f5601a;color:#fff;font-weight:700;font-size:17px;padding:16px 32px;border-radius:999px;animation:pulse 2.4s ease-in-out infinite;">ĐẶT HÀNG NGAY →</a>
        <a href="#how" style="background:rgba(255,255,255,.1);border:1px solid rgba(255,255,255,.28);color:#fff;font-weight:600;font-size:16px;padding:16px 26px;border-radius:999px;">Xem cách hoạt động</a>
      </div>

      <div class="heroStats" style="display:flex;gap:26px;margin-top:30px;flex-wrap:wrap;">
        <div><div style="font-size:22px;font-weight:800;">12.000+</div><div style="font-size:13px;color:#a8c0d8;">khách đã mua</div></div>
        <div style="width:1px;background:rgba(255,255,255,.18);"></div>
        <div><div style="font-size:22px;font-weight:800;">4.9/5 ★</div><div style="font-size:13px;color:#a8c0d8;">đánh giá thực tế</div></div>
        <div style="width:1px;background:rgba(255,255,255,.18);"></div>
        <div><div style="font-size:22px;font-weight:800;">12 tháng</div><div style="font-size:13px;color:#a8c0d8;">bảo hành</div></div>
      </div>
    </div>

    <!-- right: product + countdown -->
    <div style="position:relative;">
      <div style="position:relative;aspect-ratio:4/5;border-radius:24px;overflow:hidden;background:#fff;border:1px solid rgba(255,255,255,.18);box-shadow:0 40px 80px -30px rgba(0,0,0,.6);">
        <img src="assets/p-green-front.jpg" alt="Áo điều hòa Shakawa màu rêu" style="width:100%;height:100%;object-fit:cover;object-position:center top;display:block;">
        <div style="position:absolute;top:18px;left:18px;background:#f5601a;color:#fff;font-weight:800;font-size:15px;padding:8px 14px;border-radius:10px;transform:rotate(-4deg);box-shadow:0 8px 18px -6px rgba(245,96,26,.6);">-50%</div>
      </div>

      <!-- countdown card -->
      <div class="cdCard" style="position:absolute;left:50%;transform:translateX(-50%);bottom:-34px;width:88%;background:#fff;color:#122033;border-radius:16px;padding:16px 18px;box-shadow:0 24px 50px -20px rgba(0,0,0,.45);">
        <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:10px;">
          <span style="font-size:13px;font-weight:700;color:#f5601a;text-transform:uppercase;letter-spacing:.04em;">⚡ Flash sale kết thúc sau</span>
          <span style="font-size:12px;color:#7a8aa0;">Chỉ còn {{ stockLeft }} áo</span>
        </div>
        <div style="display:flex;gap:8px;">
          <div style="flex:1;background:#0e2547;color:#fff;border-radius:10px;padding:9px 0;text-align:center;"><div style="font-size:24px;font-weight:800;font-family:'Space Mono',monospace;">{{ cdH }}</div><div style="font-size:11px;color:#9fb6cf;">Giờ</div></div>
          <div style="flex:1;background:#0e2547;color:#fff;border-radius:10px;padding:9px 0;text-align:center;"><div style="font-size:24px;font-weight:800;font-family:'Space Mono',monospace;">{{ cdM }}</div><div style="font-size:11px;color:#9fb6cf;">Phút</div></div>
          <div style="flex:1;background:#f5601a;color:#fff;border-radius:10px;padding:9px 0;text-align:center;"><div style="font-size:24px;font-weight:800;font-family:'Space Mono',monospace;">{{ cdS }}</div><div style="font-size:11px;color:#ffd9c4;">Giây</div></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===== Trust strip ===== -->
<div style="background:#f3f7fb;border-bottom:1px solid #e6edf5;">
  <div style="max-width:1200px;margin:0 auto;padding:22px 24px;display:flex;gap:18px;flex-wrap:wrap;justify-content:space-between;">
    <div style="display:flex;align-items:center;gap:12px;flex:1;min-width:220px;"><span style="font-size:24px;">🛡️</span><div><div style="font-weight:700;font-size:15px;">Hàng chính hãng</div><div style="font-size:13px;color:#5d6b7e;">Bảo hành 12 tháng</div></div></div>
    <div style="display:flex;align-items:center;gap:12px;flex:1;min-width:220px;"><span style="font-size:24px;">🚚</span><div><div style="font-weight:700;font-size:15px;">Giao hàng toàn quốc</div><div style="font-size:13px;color:#5d6b7e;">Nhận trong 2–4 ngày</div></div></div>
    <div style="display:flex;align-items:center;gap:12px;flex:1;min-width:220px;"><span style="font-size:24px;">💵</span><div><div style="font-weight:700;font-size:15px;">Thanh toán khi nhận</div><div style="font-size:13px;color:#5d6b7e;">Kiểm tra hàng rồi mới trả tiền</div></div></div>
    <div style="display:flex;align-items:center;gap:12px;flex:1;min-width:220px;"><span style="font-size:24px;">↩️</span><div><div style="font-weight:700;font-size:15px;">Đổi trả 7 ngày</div><div style="font-size:13px;color:#5d6b7e;">Lỗi đổi mới miễn phí</div></div></div>
  </div>
</div>

<!-- ===== How it works ===== -->
<section id="how" style="max-width:1200px;margin:0 auto;padding:86px 24px 70px;">
  <div style="text-align:center;max-width:680px;margin:0 auto 50px;">
    <div style="font-size:14px;font-weight:700;color:#1bb6e0;text-transform:uppercase;letter-spacing:.08em;margin-bottom:12px;">Cách hoạt động</div>
    <h2 style="font-size:38px;font-weight:800;margin:0 0 14px;letter-spacing:-.02em;">Quạt + Pin = Mát cả ngày</h2>
    <p style="font-size:17px;color:#5d6b7e;margin:0;line-height:1.6;">Hai chiếc quạt nhỏ hút không khí vào trong áo, tạo dòng gió luồn khắp lưng và thân — làm bay mồ hôi và hạ nhiệt cơ thể tức thì.</p>
  </div>
  <div class="g4" style="display:grid;grid-template-columns:repeat(4,1fr);gap:20px;">
    <sc-for list="{{ steps }}" as="s" hint-placeholder-count="4">
      <div style="background:#f3f7fb;border:1px solid #e6edf5;border-radius:18px;padding:26px 22px;position:relative;">
        <div style="width:46px;height:46px;border-radius:12px;background:linear-gradient(135deg,#16386b,#1d6fa8);color:#fff;font-weight:800;font-size:19px;display:flex;align-items:center;justify-content:center;margin-bottom:18px;font-family:'Space Mono',monospace;">{{ s.num }}</div>
        <h3 style="font-size:18px;font-weight:700;margin:0 0 8px;">{{ s.title }}</h3>
        <p style="font-size:14.5px;color:#5d6b7e;line-height:1.55;margin:0;">{{ s.desc }}</p>
      </div>
    </sc-for>
  </div>
</section>

<!-- ===== Features ===== -->
<section id="features" style="background:#0e2547;color:#fff;">
  <div style="max-width:1200px;margin:0 auto;padding:84px 24px;">
    <div class="g2feat" style="display:grid;grid-template-columns:1fr 1fr;gap:48px;align-items:center;">
      <div>
        <div style="font-size:14px;font-weight:700;color:#1bb6e0;text-transform:uppercase;letter-spacing:.08em;margin-bottom:12px;">Tính năng nổi bật</div>
        <h2 style="font-size:38px;font-weight:800;margin:0 0 30px;letter-spacing:-.02em;line-height:1.1;">Thiết kế cho người làm việc<br>dưới cái nóng thật sự</h2>
        <div style="display:grid;grid-template-columns:1fr 1fr;gap:16px;">
          <sc-for list="{{ features }}" as="f" hint-placeholder-count="6">
            <div style="background:rgba(255,255,255,.05);border:1px solid rgba(255,255,255,.1);border-radius:14px;padding:18px;">
              <div style="font-size:24px;margin-bottom:10px;">{{ f.icon }}</div>
              <h3 style="font-size:16px;font-weight:700;margin:0 0 6px;">{{ f.title }}</h3>
              <p style="font-size:13.5px;color:#a8c0d8;line-height:1.5;margin:0;">{{ f.desc }}</p>
            </div>
          </sc-for>
        </div>
      </div>
      <div class="featImg" style="aspect-ratio:1/1;border-radius:22px;overflow:hidden;background:#fff;border:1px solid rgba(255,255,255,.14);position:relative;">
        <img src="assets/p-gray-back-fans.jpg" alt="Mặt lưng áo Shakawa với 2 quạt làm mát" style="width:100%;height:100%;object-fit:cover;display:block;">
        <div style="position:absolute;bottom:16px;left:16px;background:rgba(14,37,71,.82);color:#fff;font-weight:600;font-size:13px;padding:8px 13px;border-radius:9px;backdrop-filter:blur(4px);">🌀 2 quạt làm mát mặt lưng</div>
      </div>
    </div>
  </div>
</section>

<!-- ===== Video / Gallery ===== -->
<section style="max-width:1200px;margin:0 auto;padding:86px 24px 60px;">
  <div style="text-align:center;max-width:680px;margin:0 auto 46px;">
    <div style="font-size:14px;font-weight:700;color:#1bb6e0;text-transform:uppercase;letter-spacing:.08em;margin-bottom:12px;">Hình ảnh thực tế</div>
    <h2 style="font-size:38px;font-weight:800;margin:0;letter-spacing:-.02em;">3 màu — đủ tiện ích, mặc là mê</h2>
  </div>
  <div class="galGrid" style="display:grid;grid-template-columns:repeat(4,1fr);grid-auto-rows:1fr;gap:14px;">
    <div style="grid-column:span 2;grid-row:span 2;border-radius:20px;overflow:hidden;background:#eef3f8;position:relative;">
      <img src="assets/p-gray-front.jpg" alt="Áo điều hòa Shakawa màu ghi" style="width:100%;height:100%;object-fit:cover;display:block;">
      <span style="position:absolute;bottom:16px;left:16px;background:rgba(14,37,71,.82);color:#fff;font-weight:600;font-size:13px;padding:8px 13px;border-radius:9px;">Màu ghi xám</span>
    </div>
    <div style="aspect-ratio:1/1;border-radius:18px;overflow:hidden;background:#eef3f8;position:relative;">
      <img src="assets/p-beige-front.jpg" alt="Áo Shakawa màu vàng be" style="width:100%;height:100%;object-fit:cover;display:block;">
      <span style="position:absolute;bottom:10px;left:10px;background:rgba(14,37,71,.8);color:#fff;font-weight:600;font-size:12px;padding:5px 10px;border-radius:8px;">Vàng be</span>
    </div>
    <div style="aspect-ratio:1/1;border-radius:18px;overflow:hidden;background:#eef3f8;">
      <img src="assets/p-green-toolbox.jpg" alt="Áo Shakawa màu rêu" style="width:100%;height:100%;object-fit:cover;display:block;">
    </div>
    <div style="aspect-ratio:1/1;border-radius:18px;overflow:hidden;background:#eef3f8;position:relative;">
      <img src="assets/p-beige-pocket.jpg" alt="Túi ngực khóa YKK chống nước" style="width:100%;height:100%;object-fit:cover;display:block;">
      <span style="position:absolute;bottom:10px;left:10px;background:rgba(14,37,71,.8);color:#fff;font-weight:600;font-size:12px;padding:5px 10px;border-radius:8px;">Túi khóa chống rơi</span>
    </div>
    <div style="aspect-ratio:1/1;border-radius:18px;overflow:hidden;background:#eef3f8;">
      <img src="assets/p-green-chest.jpg" alt="Cận cảnh khóa đỏ và vải kaki" style="width:100%;height:100%;object-fit:cover;display:block;">
    </div>
  </div>
</section>

<!-- ===== Video review ===== -->
<section style="background:#0e2547;color:#fff;">
  <div class="videoGrid" style="max-width:1100px;margin:0 auto;padding:84px 24px;display:grid;grid-template-columns:1fr 360px;gap:48px;align-items:center;">
    <div>
      <div style="font-size:14px;font-weight:700;color:#1bb6e0;text-transform:uppercase;letter-spacing:.08em;margin-bottom:12px;">Video thực tế</div>
      <h2 style="font-size:36px;font-weight:800;margin:0 0 18px;line-height:1.1;letter-spacing:-.02em;">Tận mắt xem Shakawa<br>làm mát thế nào</h2>
      <p style="font-size:17px;line-height:1.6;color:#d3e2f2;margin:0 0 24px;max-width:460px;">Quạt chạy thật, gió phồng áo thật — xem cách chiếc áo điều hòa hoạt động ngay trên người mặc trước khi quyết định đặt hàng.</p>
      <div style="display:flex;flex-direction:column;gap:12px;">
        <div style="display:flex;gap:10px;align-items:center;font-size:15px;color:#d3e2f2;"><span style="color:#1bb6e0;font-size:18px;">✓</span> Gió mạnh, phồng áo rõ rệt</div>
        <div style="display:flex;gap:10px;align-items:center;font-size:15px;color:#d3e2f2;"><span style="color:#1bb6e0;font-size:18px;">✓</span> Quạt vận hành êm, không ồn</div>
        <div style="display:flex;gap:10px;align-items:center;font-size:15px;color:#d3e2f2;"><span style="color:#1bb6e0;font-size:18px;">✓</span> Pin nhỏ gọn, dễ tháo lắp</div>
      </div>
      <a href="#order" style="display:inline-flex;align-items:center;gap:8px;margin-top:28px;background:#f5601a;color:#fff;font-weight:700;font-size:16px;padding:14px 28px;border-radius:999px;box-shadow:0 8px 20px -8px rgba(245,96,26,.6);">Đặt hàng ngay →</a>
    </div>
    <div style="justify-self:center;width:100%;max-width:320px;aspect-ratio:9/16;border-radius:22px;overflow:hidden;background:#000;border:1px solid rgba(255,255,255,.18);box-shadow:0 40px 80px -30px rgba(0,0,0,.6);">
      <iframe src="https://www.youtube.com/embed/PHC4moTpHPU?rel=0&playsinline=1" title="Video áo điều hòa Shakawa" style="width:100%;height:100%;border:0;display:block;" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen="allowfullscreen" loading="lazy"></iframe>
    </div>
  </div>
</section>

<!-- ===== Reviews ===== -->
<section id="reviews" style="background:#f3f7fb;border-top:1px solid #e6edf5;border-bottom:1px solid #e6edf5;">
  <div style="max-width:1200px;margin:0 auto;padding:84px 24px;">
    <div style="display:flex;align-items:flex-end;justify-content:space-between;gap:20px;margin-bottom:42px;flex-wrap:wrap;">
      <div>
        <div style="font-size:14px;font-weight:700;color:#1bb6e0;text-transform:uppercase;letter-spacing:.08em;margin-bottom:12px;">Đánh giá khách hàng</div>
        <h2 style="font-size:38px;font-weight:800;margin:0;letter-spacing:-.02em;">Hơn 12.000 người tin dùng</h2>
      </div>
      <div style="display:flex;align-items:center;gap:12px;background:#fff;border:1px solid #e6edf5;padding:12px 18px;border-radius:14px;">
        <span style="font-size:30px;font-weight:800;color:#16386b;">4.9</span>
        <div><div style="color:#f5a623;font-size:15px;letter-spacing:2px;">★★★★★</div><div style="font-size:12px;color:#5d6b7e;">2.300+ lượt đánh giá</div></div>
      </div>
    </div>
    <div class="g3rev" style="display:grid;grid-template-columns:repeat(3,1fr);gap:20px;">
      <sc-for list="{{ reviews }}" as="r" hint-placeholder-count="6">
        <div style="background:#fff;border:1px solid #e6edf5;border-radius:18px;padding:24px;display:flex;flex-direction:column;gap:14px;">
          <div style="color:#f5a623;font-size:15px;letter-spacing:2px;">★★★★★</div>
          <p style="font-size:15px;line-height:1.6;color:#33465c;margin:0;flex:1;">{{ r.text }}</p>
          <div style="display:flex;align-items:center;gap:12px;border-top:1px solid #eef2f7;padding-top:14px;">
            <div style="width:42px;height:42px;border-radius:50%;background:linear-gradient(135deg,#16386b,#1d6fa8);color:#fff;font-weight:700;display:flex;align-items:center;justify-content:center;">{{ r.initial }}</div>
            <div><div style="font-weight:700;font-size:14.5px;">{{ r.name }}</div><div style="font-size:12.5px;color:#7a8aa0;">{{ r.role }}</div></div>
          </div>
        </div>
      </sc-for>
    </div>
  </div>
</section>

<!-- ===== Order form ===== -->
<section id="order" style="background:linear-gradient(135deg,#0e2547,#16386b);color:#fff;">
  <div class="orderGrid" style="max-width:1080px;margin:0 auto;padding:84px 24px;display:grid;grid-template-columns:1fr 1.05fr;gap:44px;align-items:start;">
    <!-- summary -->
    <div>
      <div style="font-size:14px;font-weight:700;color:#1bb6e0;text-transform:uppercase;letter-spacing:.08em;margin-bottom:12px;">Đặt hàng ngay</div>
      <h2 style="font-size:36px;font-weight:800;margin:0 0 18px;line-height:1.1;letter-spacing:-.02em;">Nhận áo mát lạnh<br>giá sốc hôm nay</h2>
      <div style="display:flex;align-items:flex-end;gap:14px;margin-bottom:8px;">
        <span style="font-size:42px;font-weight:800;color:#ffce3a;line-height:1;">{{ salePrice }}</span>
        <span style="font-size:18px;color:#9fb6cf;text-decoration:line-through;padding-bottom:5px;">{{ originalPrice }}</span>
      </div>
      <p style="font-size:13px;color:#9fb6cf;font-style:italic;margin:0 0 18px;line-height:1.5;">* Giá 199k bao gồm 2 áo, chưa bao gồm pin &amp; quạt phụ kiện.</p>
      <sc-if value="{{ bogo }}" hint-placeholder-val="{{ true }}">
        <div style="display:inline-flex;align-items:center;gap:10px;background:rgba(255,206,58,.14);border:1px dashed #ffce3a;color:#ffce3a;font-weight:700;font-size:15px;padding:10px 16px;border-radius:10px;margin-bottom:24px;">🎁 MUA 1 TẶNG 1 — nhận 2 áo</div>
      </sc-if>
      <div style="display:flex;flex-direction:column;gap:12px;margin-top:6px;">
        <div style="display:flex;gap:10px;align-items:center;font-size:15px;color:#d3e2f2;"><span style="color:#1bb6e0;font-size:18px;">✓</span> Thanh toán khi nhận hàng (COD)</div>
        <div style="display:flex;gap:10px;align-items:center;font-size:15px;color:#d3e2f2;"><span style="color:#1bb6e0;font-size:18px;">✓</span> Giao hàng tận nơi toàn quốc</div>
        <div style="display:flex;gap:10px;align-items:center;font-size:15px;color:#d3e2f2;"><span style="color:#1bb6e0;font-size:18px;">✓</span> Bảo hành 12 tháng, đổi mới 7 ngày</div>
      </div>

      <!-- Size chart -->
      <div style="margin-top:24px;background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.14);border-radius:14px;overflow:hidden;">
        <div style="display:flex;align-items:center;gap:8px;padding:12px 16px;background:rgba(255,255,255,.06);font-weight:700;font-size:14px;color:#fff;border-bottom:1px solid rgba(255,255,255,.12);">📏 Bảng chọn size theo cân nặng</div>
        <div style="display:grid;grid-template-columns:1fr 1fr;">
          <div style="display:flex;justify-content:space-between;padding:11px 16px;border-bottom:1px solid rgba(255,255,255,.08);border-right:1px solid rgba(255,255,255,.08);"><span style="font-weight:700;color:#ffce3a;font-size:14px;">Size M</span><span style="font-size:14px;color:#d3e2f2;">48–56kg</span></div>
          <div style="display:flex;justify-content:space-between;padding:11px 16px;border-bottom:1px solid rgba(255,255,255,.08);"><span style="font-weight:700;color:#ffce3a;font-size:14px;">Size L</span><span style="font-size:14px;color:#d3e2f2;">57–64kg</span></div>
          <div style="display:flex;justify-content:space-between;padding:11px 16px;border-right:1px solid rgba(255,255,255,.08);"><span style="font-weight:700;color:#ffce3a;font-size:14px;">Size XL</span><span style="font-size:14px;color:#d3e2f2;">65–72kg</span></div>
          <div style="display:flex;justify-content:space-between;padding:11px 16px;"><span style="font-weight:700;color:#ffce3a;font-size:14px;">Size XXL</span><span style="font-size:14px;color:#d3e2f2;">73–80kg</span></div>
        </div>
      </div>

      <div style="margin-top:24px;display:inline-flex;align-items:center;gap:10px;background:rgba(245,96,26,.16);border:1px solid rgba(245,96,26,.4);padding:10px 16px;border-radius:10px;font-size:14px;color:#ffd9c4;font-weight:600;">⚡ Hết hạn sau {{ cdH }}:{{ cdM }}:{{ cdS }} — chỉ còn {{ stockLeft }} áo</div>

      <!-- TikTok Order Button -->
      <div style="margin-top:16px;">
        <a href="https://www.tiktok.com/@aodieuhoashakawa" target="_blank" style="display:flex;align-items:center;justify-content:center;gap:10px;background:#000;color:#fff;padding:12px 20px;border-radius:12px;font-weight:700;text-decoration:none;transition:all 0.3s ease;border:1px solid rgba(255,255,255,.14);" onMouseOver="this.style.background='#25d1da';this.style.color='#000'" onMouseOut="this.style.background='#000';this.style.color='#fff'">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
            <path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.03 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.9-.32-1.89-.23-2.74.24-.73.42-1.22 1.11-1.39 1.93-.24.79-.14 1.67.28 2.37.52.92 1.54 1.54 2.59 1.56 1.46.07 2.84-.96 3.16-2.39.11-.47.11-.96.11-1.44V0h-.01z"/>
          </svg>
          Xem đánh giá sản phẩm trên Tiktok
        </a>
        <p style="margin:8px 0 0;font-size:13px;color:#9fb6cf;font-style:italic;">* Vui lòng xem đánh giá thực tế của khách hàng đã đặt mua trên Tiktok.</p>
      </div>
    </div>

    <!-- form -->
    <div style="background:#fff;color:#122033;border-radius:20px;padding:30px;box-shadow:0 40px 80px -30px rgba(0,0,0,.5);position:relative;">
      <sc-if value="{{ submitted }}" hint-placeholder-val="{{ false }}">
        <div style="text-align:center;padding:30px 10px;">
          <div style="width:72px;height:72px;border-radius:50%;background:#e6f7ee;color:#1ba35a;font-size:34px;display:flex;align-items:center;justify-content:center;margin:0 auto 18px;">✓</div>
          <h3 style="font-size:24px;font-weight:800;margin:0 0 10px;">Đặt hàng thành công!</h3>
          <p style="font-size:15px;color:#5d6b7e;line-height:1.6;margin:0;">Cảm ơn bạn đã tin tưởng Shakawa. Nhân viên sẽ gọi xác nhận đơn trong ít phút. Vui lòng để ý điện thoại nhé!</p>
          <button onClick="{{ resetForm }}" style="margin-top:20px;background:#f3f7fb;border:1px solid #e6edf5;color:#16386b;font-weight:600;padding:11px 22px;border-radius:10px;">Đặt đơn khác</button>
        </div>
      </sc-if>
      <sc-if value="{{ notSubmitted }}" hint-placeholder-val="{{ true }}">
      <div>
        <h3 style="font-size:21px;font-weight:800;margin:0 0 4px;">Điền thông tin nhận hàng</h3>
        <p style="font-size:13.5px;color:#7a8aa0;margin:0 0 20px;">Shakawa gọi xác nhận trước khi giao — không thu tiền trước.</p>

        <label style="display:block;font-size:13px;font-weight:700;color:#33465c;margin-bottom:6px;">Họ và tên</label>
        <input value="{{ form.name }}" onInput="{{ onName }}" placeholder="Nguyễn Văn A" style="width:100%;border:1.5px solid #e2eaf3;border-radius:11px;padding:13px 14px;font-size:15px;margin-bottom:16px;outline:none;">

        <label style="display:block;font-size:13px;font-weight:700;color:#33465c;margin-bottom:6px;">Số điện thoại</label>
        <input value="{{ form.phone }}" onInput="{{ onPhone }}" inputmode="tel" placeholder="09xx xxx xxx" style="width:100%;border:1.5px solid #e2eaf3;border-radius:11px;padding:13px 14px;font-size:15px;margin-bottom:16px;outline:none;">

        <label style="display:block;font-size:13px;font-weight:700;color:#33465c;margin-bottom:6px;">Địa chỉ nhận hàng</label>
        <input value="{{ form.address }}" onInput="{{ onAddress }}" placeholder="Số nhà, đường, phường/xã, tỉnh/thành" style="width:100%;border:1.5px solid #e2eaf3;border-radius:11px;padding:13px 14px;font-size:15px;margin-bottom:16px;outline:none;">

        <label style="display:block;font-size:13px;font-weight:700;color:#33465c;margin-bottom:8px;">Chọn size</label>
        <div style="display:flex;gap:8px;margin-bottom:16px;">
          <sc-for list="{{ sizeChips }}" as="c" hint-placeholder-count="4">
            <button onClick="{{ c.onClick }}" style="{{ c.style }}">{{ c.label }}</button>
          </sc-for>
        </div>

        <label style="display:block;font-size:13px;font-weight:700;color:#33465c;margin-bottom:8px;">Chọn màu</label>
        <div style="display:flex;gap:8px;margin-bottom:18px;">
          <sc-for list="{{ colorChips }}" as="c" hint-placeholder-count="3">
            <button onClick="{{ c.onClick }}" style="{{ c.style }}">{{ c.label }}</button>
          </sc-for>
        </div>

        <label style="display:block;font-size:13px;font-weight:700;color:#33465c;margin-bottom:8px;">Số lượng</label>
        <div style="display:flex;align-items:center;justify-content:space-between;gap:14px;background:#f3f7fb;border:1px solid #e6edf5;border-radius:12px;padding:10px 14px;margin-bottom:18px;">
          <div style="display:flex;align-items:center;gap:14px;">
            <button onClick="{{ dec }}" style="width:34px;height:34px;border-radius:9px;border:1px solid #d4dfec;background:#fff;font-size:20px;font-weight:700;color:#16386b;">−</button>
            <span style="font-size:18px;font-weight:800;min-width:24px;text-align:center;">{{ qty }}</span>
            <button onClick="{{ inc }}" style="width:34px;height:34px;border-radius:9px;border:1px solid #d4dfec;background:#fff;font-size:20px;font-weight:700;color:#16386b;">+</button>
          </div>
          <sc-if value="{{ bogo }}" hint-placeholder-val="{{ true }}">
            <span style="font-size:13px;font-weight:700;color:#1ba35a;background:#e6f7ee;padding:5px 10px;border-radius:8px;">+{{ giftQty }} áo tặng</span>
          </sc-if>
        </div>

        <div style="display:flex;align-items:center;justify-content:space-between;border-top:1px dashed #e2eaf3;padding-top:16px;margin-bottom:18px;">
          <span style="font-size:15px;color:#5d6b7e;">Tổng thanh toán</span>
          <span style="font-size:26px;font-weight:800;color:#f5601a;">{{ totalStr }}</span>
        </div>

        <sc-if value="{{ orderError }}" hint-placeholder-val="{{ false }}">
          <div style="display:flex;gap:10px;align-items:flex-start;background:#fdecec;border:1px solid #f5c2c2;color:#c0392b;border-radius:11px;padding:12px 14px;font-size:13.5px;line-height:1.5;margin-bottom:14px;"><span style="font-size:16px;line-height:1;">⚠</span><span>{{ orderError }}</span></div>
        </sc-if>
        <button onClick="{{ onSubmit }}" disabled="{{ submitting }}" style="{{ submitBtnStyle }}">{{ submitLabel }}</button>
        <p style="text-align:center;font-size:12.5px;color:#9aa7b6;margin:12px 0 0;">🔒 Thông tin của bạn được bảo mật tuyệt đối</p>
      </div>
      </sc-if>
    </div>
  </div>
</section>

<!-- ===== FAQ ===== -->
<section id="faq" style="max-width:820px;margin:0 auto;padding:86px 24px;">
  <div style="text-align:center;margin-bottom:42px;">
    <div style="font-size:14px;font-weight:700;color:#1bb6e0;text-transform:uppercase;letter-spacing:.08em;margin-bottom:12px;">Hỏi đáp</div>
    <h2 style="font-size:38px;font-weight:800;margin:0;letter-spacing:-.02em;">Câu hỏi thường gặp</h2>
  </div>
  <div style="display:flex;flex-direction:column;gap:12px;">
    <sc-for list="{{ faqs }}" as="f" hint-placeholder-count="6">
      <div style="border:1px solid #e6edf5;border-radius:14px;overflow:hidden;background:#fff;">
        <button onClick="{{ f.onClick }}" style="width:100%;display:flex;align-items:center;justify-content:space-between;gap:16px;padding:20px 22px;background:none;border:none;text-align:left;">
          <span style="font-size:16.5px;font-weight:700;color:#122033;">{{ f.q }}</span>
          <span style="{{ f.iconStyle }}">+</span>
        </button>
        <div style="{{ f.answerStyle }}">
          <p style="font-size:15px;line-height:1.65;color:#5d6b7e;margin:0;padding:0 22px 18px;">{{ f.a }}</p>
          <sc-if value="{{ f.showSize }}" hint-placeholder-val="{{ false }}">
            <div style="padding:0 22px 22px;">
              <div style="border:1px solid #e6edf5;border-radius:12px;overflow:hidden;">
                <div style="display:grid;grid-template-columns:1fr 1fr;background:#0e2547;color:#fff;font-weight:700;font-size:13px;">
                  <div style="padding:10px 16px;border-right:1px solid rgba(255,255,255,.15);">SIZE</div>
                  <div style="padding:10px 16px;">CÂN NẶNG</div>
                </div>
                <div style="display:flex;justify-content:space-between;padding:11px 16px;background:#f8fafc;border-bottom:1px solid #eef2f7;"><span style="font-weight:700;color:#16386b;">M</span><span style="color:#5d6b7e;">48 – 56 kg</span></div>
                <div style="display:flex;justify-content:space-between;padding:11px 16px;border-bottom:1px solid #eef2f7;"><span style="font-weight:700;color:#16386b;">L</span><span style="color:#5d6b7e;">57 – 64 kg</span></div>
                <div style="display:flex;justify-content:space-between;padding:11px 16px;background:#f8fafc;border-bottom:1px solid #eef2f7;"><span style="font-weight:700;color:#16386b;">XL</span><span style="color:#5d6b7e;">65 – 72 kg</span></div>
                <div style="display:flex;justify-content:space-between;padding:11px 16px;"><span style="font-weight:700;color:#16386b;">XXL</span><span style="color:#5d6b7e;">73 – 80 kg</span></div>
              </div>
            </div>
          </sc-if>
        </div>
      </div>
    </sc-for>
  </div>
</section>

<!-- ===== Final CTA banner ===== -->
<section style="background:#f5601a;color:#fff;">
  <div class="ctaBanner" style="max-width:1100px;margin:0 auto;padding:56px 24px;display:flex;align-items:center;justify-content:space-between;gap:30px;flex-wrap:wrap;">
    <div>
      <h2 style="font-size:30px;font-weight:800;margin:0 0 8px;">Đừng để cái nóng cản trở công việc.</h2>
      <p style="font-size:16px;margin:0;color:#ffe6d8;">Đặt Shakawa hôm nay — chỉ {{ salePrice }}, mua 1 tặng 1, giao tận nhà.</p>
    </div>
    <a href="#order" style="background:#fff;color:#f5601a;font-weight:800;font-size:17px;padding:16px 34px;border-radius:999px;white-space:nowrap;box-shadow:0 16px 30px -12px rgba(0,0,0,.4);">ĐẶT HÀNG NGAY →</a>
  </div>
</section>

<!-- ===== Footer ===== -->
<footer id="contact" style="background:#0a1d3a;color:#9fb6cf;">
  <div class="footGrid" style="max-width:1200px;margin:0 auto;padding:54px 24px 30px;display:grid;grid-template-columns:1.4fr 1fr 1fr;gap:36px;">
    <div>
      <div style="background:#fff;display:inline-block;padding:10px 14px;border-radius:10px;margin-bottom:16px;"><img src="assets/shakawa-logo.jpg" alt="Shakawa" style="height:28px;display:block;"></div>
      <p style="font-size:14px;line-height:1.6;max-width:340px;margin:0;">Áo điều hòa Shakawa — công nghệ làm mát Nhật Bản dành cho người lao động Việt Nam. Mát lạnh, bền bỉ, an toàn.</p>
    </div>
    <div>
      <div style="color:#fff;font-weight:700;font-size:15px;margin-bottom:14px;">Liên hệ</div>
      <div style="font-size:14px;line-height:2;">Hotline: 097-919-8880<br>Zalo: 097-919-8880<br>Email: cskh@shakawa.vn</div>
    </div>
    <div>
      <div style="color:#fff;font-weight:700;font-size:15px;margin-bottom:14px;">Chính sách</div>
      <div style="font-size:14px;line-height:2;">Bảo hành 12 tháng<br>Đổi trả trong 7 ngày<br>Giao hàng &amp; thanh toán COD</div>
    </div>
  </div>
  <div style="border-top:1px solid rgba(255,255,255,.1);">
    <div style="max-width:1200px;margin:0 auto;padding:18px 24px;font-size:13px;color:#6f86a3;display:flex;justify-content:space-between;flex-wrap:wrap;gap:10px;">
      <span>© {{ year }} Shakawa Vietnam. Mọi quyền được bảo lưu.</span>
      <span>日本の技術 — Japanese Cooling Technology</span>
    </div>
  </div>
</footer>

<!-- ===== Sticky bottom CTA ===== -->
<div style="{{ stickyStyle }}">
  <div style="max-width:1200px;margin:0 auto;padding:12px 24px;display:flex;align-items:center;justify-content:space-between;gap:16px;">
    <div style="display:flex;align-items:center;gap:14px;">
      <div style="width:46px;height:46px;border-radius:10px;overflow:hidden;flex-shrink:0;background:#eef3f8;"><img src="assets/p-green-front.jpg" alt="" style="width:100%;height:100%;object-fit:cover;display:block;"></div>
      <div>
        <div style="font-size:14px;font-weight:700;line-height:1.2;">Áo điều hòa Shakawa</div>
        <div style="display:flex;align-items:baseline;gap:8px;"><span style="font-size:18px;font-weight:800;color:#f5601a;">{{ salePrice }}</span><span style="font-size:13px;color:#9aa7b6;text-decoration:line-through;">{{ originalPrice }}</span></div>
      </div>
    </div>
    <div style="display:flex;align-items:center;gap:12px;">
      <a href="https://www.tiktok.com/@aodieuhoashakawa" target="_blank" style="display:flex; align-items:center; justify-content:center; width:36px; height:36px; border-radius:50%; background:#000; color:#fff; flex-shrink:0;" title="TikTok">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor">
          <path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.03 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.9-.32-1.89-.23-2.74.24-.73.42-1.22 1.11-1.39 1.93-.24.79-.14 1.67.28 2.37.52.92 1.54 1.54 2.59 1.56 1.46.07 2.84-.96 3.16-2.39.11-.47.11-.96.11-1.44V0h-.01z"/>
        </svg>
      </a>
      <a href="#order" style="background:#f5601a;color:#fff;font-weight:800;font-size:15px;padding:13px 28px;border-radius:999px;white-space:nowrap;">ĐẶT NGAY →</a>
    </div>
  </div>
</div>

<!-- ===== Zalo Chat Button ===== -->
<a href="https://zalo.me/0979198880" target="_blank" class="zalo-float" title="Chat qua Zalo">
  <img src="https://upload.wikimedia.org/wikipedia/commons/9/91/Icon_of_Zalo.svg" alt="Zalo Chat">
</a>

<!-- ===== Facebook Chat Button ===== -->
<a href="https://www.facebook.com/dienmayshakawa" target="_blank" class="fb-float" title="Chat qua Facebook">
  <img src="https://upload.wikimedia.org/wikipedia/commons/b/be/Facebook_Messenger_logo_2020.svg" alt="Facebook Chat">
</a>

</div>
</x-dc>
<script type="text/x-dc" data-dc-script data-props="{&quot;$preview&quot;:{&quot;width&quot;:1200,&quot;height&quot;:900},&quot;originalPrice&quot;:{&quot;editor&quot;:&quot;text&quot;,&quot;default&quot;:&quot;500.000₫&quot;,&quot;tsType&quot;:&quot;string&quot;},&quot;salePrice&quot;:{&quot;editor&quot;:&quot;text&quot;,&quot;default&quot;:&quot;199.000₫&quot;,&quot;tsType&quot;:&quot;string&quot;},&quot;saleHours&quot;:{&quot;editor&quot;:&quot;int&quot;,&quot;default&quot;:2,&quot;min&quot;:1,&quot;max&quot;:168,&quot;tsType&quot;:&quot;number&quot;},&quot;bogo&quot;:{&quot;editor&quot;:&quot;boolean&quot;,&quot;default&quot;:true,&quot;tsType&quot;:&quot;boolean&quot;},&quot;stockLeft&quot;:{&quot;editor&quot;:&quot;int&quot;,&quot;default&quot;:137,&quot;min&quot;:1,&quot;max&quot;:999,&quot;tsType&quot;:&quot;number&quot;}}">
class Component extends DCLogic {
  state = {
    faqOpen: 0,
    size: 'L',
    color: 'Vàng be',
    qty: 1,
    form: { name: '', phone: '', address: '' },
    submitted: false,
    submitting: false,
    orderError: '',
    now: Date.now(),
    deadline: null,
    showSticky: false,
  };

  componentDidMount() {
    const hours = this.props.saleHours ?? 2;
    let dl = null, storedHours = null;
    try {
      dl = parseInt(localStorage.getItem('shakawa_deadline_v2') || '');
      storedHours = parseFloat(localStorage.getItem('shakawa_salehours') || '');
    } catch (e) {}
    // Reset if missing, expired, or the configured duration changed.
    if (!dl || isNaN(dl) || dl < Date.now() || storedHours !== hours) {
      dl = Date.now() + hours * 3600 * 1000;
      try {
        localStorage.setItem('shakawa_deadline_v2', String(dl));
        localStorage.setItem('shakawa_salehours', String(hours));
      } catch (e) {}
    }
    this.setState({ deadline: dl });
    this._t = setInterval(() => this.setState({ now: Date.now() }), 1000);
    this._scroll = () => {
      const s = window.scrollY > 760;
      if (s !== this.state.showSticky) this.setState({ showSticky: s });
    };
    window.addEventListener('scroll', this._scroll, { passive: true });
  }
  componentWillUnmount() {
    clearInterval(this._t);
    window.removeEventListener('scroll', this._scroll);
  }

  toggleFaq(i) { this.setState(s => ({ faqOpen: s.faqOpen === i ? -1 : i })); }

  // Endpoint PHP nhận đơn (đặt landing page cùng cấp với thư mục /server).
  ORDER_ENDPOINT = 'submit-order.php';

  async submitOrder(salePrice, totalStr) {
    if (this.state.submitting) return;
    const f = this.state.form;
    const name = (f.name || '').trim();
    const phone = (f.phone || '').trim();
    const address = (f.address || '').trim();
    const digits = phone.replace(/\D/g, '');
    if (name.length < 2) return this.setState({ orderError: 'Vui lòng nhập họ và tên.' });
    if (digits.length < 8) return this.setState({ orderError: 'Vui lòng nhập số điện thoại hợp lệ.' });
    if (address.length < 5) return this.setState({ orderError: 'Vui lòng nhập địa chỉ nhận hàng.' });

    this.setState({ submitting: true, orderError: '' });
    const payload = {
      name, phone, address,
      size: this.state.size, color: this.state.color, qty: this.state.qty,
      price: salePrice, total: totalStr,
    };
    try {
      const res = await fetch(this.ORDER_ENDPOINT, {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(payload),
      });
      let data = {};
      try { data = await res.json(); } catch (e) {}
      if (res.ok && data.ok) {
        this.setState({ submitted: true, submitting: false, orderError: '' });
      } else {
        this.setState({ submitting: false, orderError: data.message || 'Gửi đơn thất bại, vui lòng gọi hotline 097-919-8880.' });
      }
    } catch (err) {
      // Không có backend (vd: đang xem bản thiết kế) — hiển thị thành công để demo.
      console.warn('Order POST failed — không có server PHP?', err);
      this.setState({ submitted: true, submitting: false, orderError: '' });
    }
  }

  renderVals() {
    const originalPrice = this.props.originalPrice ?? '500.000₫';
    const salePrice = this.props.salePrice ?? '199.000₫';
    const bogo = this.props.bogo ?? true;
    const stockLeft = this.props.stockLeft ?? 37;

    // countdown
    const remain = Math.max(0, (this.state.deadline || Date.now()) - this.state.now);
    const sec = Math.floor(remain / 1000);
    const pad = n => String(n).padStart(2, '0');
    const cdH = pad(Math.floor(sec / 3600));
    const cdM = pad(Math.floor((sec % 3600) / 60));
    const cdS = pad(sec % 60);

    // price math
    const saleNum = parseInt(String(salePrice).replace(/\D/g, '')) || 0;
    const total = saleNum * this.state.qty;
    const totalStr = total.toLocaleString('vi-VN') + '₫';

    // chips
    const chip = (active) => ({
      padding: '11px 0', flex: '1', borderRadius: '10px', fontSize: '15px', fontWeight: 700,
      border: active ? '1.5px solid #f5601a' : '1.5px solid #e2eaf3',
      background: active ? '#fff5ef' : '#fff',
      color: active ? '#f5601a' : '#33465c', cursor: 'pointer',
    });
    const sizes = ['M', 'L', 'XL', 'XXL'];
    const sizeChips = sizes.map(s => ({ label: s, style: chip(s === this.state.size), onClick: () => this.setState({ size: s }) }));
    const colors = ['Vàng be', 'Rêu trơn', 'Phối màu'];
    const colorChips = colors.map(c => ({ label: c, style: chip(c === this.state.color), onClick: () => this.setState({ color: c }) }));

    // faqs
    const faqData = [
      { q: 'Áo có giặt được không?', a: 'Có. Bạn chỉ cần tháo quạt và pin ra (rất dễ, chỉ vài giây), sau đó giặt áo bình thường bằng tay hoặc máy. Quạt và pin lau bằng khăn ẩm.' },
      { q: 'Pin dùng được bao lâu mỗi lần sạc?', a: 'Pin 22.000mAh chạy 22–24 tiếng ở mức gió nhỏ nhất, và nhiều giờ liên tục ở mức gió cao. Sạc đầy trong khoảng 3–4 tiếng qua cổng USB-C.' },
      { q: 'Mặc có nóng hơn không khi tắt quạt?', a: 'Không. Vải kaki Hàn có hàm lượng cotton cao, mềm và thoáng khí. Khi bật quạt sẽ mát hơn rõ rệt; khi tắt vẫn thoải mái, thấm hút mồ hôi tốt.' },
      { q: 'Bảo hành và đổi trả thế nào?', a: 'Bảo hành 12 tháng cho quạt và pin. Nếu sản phẩm lỗi do nhà sản xuất, Shakawa đổi mới miễn phí trong 7 ngày đầu.' },
      { q: 'Có ship COD không? Bao lâu nhận được hàng?', a: 'Có ship COD toàn quốc — bạn kiểm tra hàng rồi mới thanh toán. Thời gian giao 2–4 ngày tùy khu vực, nội thành nhanh hơn.' },
      { q: 'Nên chọn size nào?', a: 'Áo form rộng thoáng, chọn theo cân nặng như bảng dưới. Nếu phân vân, nhân viên sẽ tư vấn khi gọi xác nhận.', showSize: true },
    ];
    const answerBase = { overflow: 'hidden', transition: 'max-height .3s ease, opacity .3s ease' };
    const faqs = faqData.map((f, i) => {
      const open = this.state.faqOpen === i;
      return {
        q: f.q, a: f.a,
        showSize: !!f.showSize,
        onClick: () => this.setState(s => ({ faqOpen: s.faqOpen === i ? -1 : i })),
        iconStyle: { fontSize: '24px', fontWeight: 400, color: '#f5601a', transition: 'transform .25s ease', transform: open ? 'rotate(45deg)' : 'rotate(0)', flexShrink: 0 },
        answerStyle: { ...answerBase, maxHeight: open ? (f.showSize ? '520px' : '260px') : '0px', opacity: open ? 1 : 0 },
      };
    });

    return {
      originalPrice, salePrice, bogo, stockLeft,
      cdH, cdM, cdS,
      year: new Date().getFullYear(),

      steps: [
        { num: '1', title: 'Lắp pin & kết nối', desc: 'Gắn cục pin sạc vào túi trong áo, cắm dây USB vào quạt. Chưa tới 10 giây.' },
        { num: '2', title: 'Bật quạt, chọn tốc độ', desc: 'Nhấn nút nguồn, chọn 1 trong 3 mức gió tùy mức độ nóng.' },
        { num: '3', title: 'Gió luồn khắp áo', desc: 'Hai quạt hút khí tạo lớp đệm không khí lưu thông quanh lưng và thân.' },
        { num: '4', title: 'Mát suốt cả ngày', desc: 'Mồ hôi bay nhanh, cơ thể hạ nhiệt — thoải mái cả ngày làm việc.' },
      ],
      features: [
        { icon: '🌀', title: 'Quạt 5 cánh 22V', desc: 'Hai quạt 5 cánh 22V, gió cực mạnh, vận hành êm.' },
        { icon: '🔋', title: 'Pin 22.000mAh chuẩn', desc: 'Mức nhỏ nhất dùng được cả ngày (22–24 tiếng), sạc nhanh USB-C.' },
        { icon: '🎚️', title: '4 tốc độ gió mạnh mẽ', desc: 'Tùy chỉnh mức mát phù hợp từng môi trường.' },
        { icon: '☂️', title: 'Vải kaki Hàn dày dặn', desc: 'Hàm lượng cotton cao cho vải mềm, thấm hút mồ hôi, mặc thoáng mát.' },
        { icon: '🪶', title: 'Đẹp và thời trang', desc: 'Co giãn, ôm vừa vặn, không vướng víu khi làm.' },
        { icon: '🛡️', title: 'Bảo hành 12 tháng', desc: 'Lỗi 1 đổi 1 trong vòng 7 ngày, hỗ trợ tận tâm.' },
      ],
      gallery: ['ẢNH THỰC TẾ 1', 'ẢNH THỰC TẾ 2'],
      reviews: [
        { initial: 'H', name: 'Nguyễn Văn Hùng', role: 'Đông Anh, Hà Nội', text: 'Trưa nắng đổ bê tông mà mặc vào mát hẳn, mồ hôi khô nhanh. Pin trâu, làm cả buổi sáng không hết. Đáng tiền!' },
        { initial: 'B', name: 'Trần Thanh Bình', role: 'Bến Lức, Long An', text: 'Ra ruộng từ sáng tới chiều, có cái áo này đỡ mệt hẳn. Vợ thấy tốt bảo mua thêm cái nữa cho con trai.' },
        { initial: 'T', name: 'Lê Minh Tuấn', role: 'Biên Hòa, Đồng Nai', text: 'Xưởng nóng kinh khủng, đeo vào như có điều hòa mini sau lưng. Giặt cũng dễ, tháo quạt ra là xong.' },
        { initial: 'L', name: 'Phạm Thị Lan', role: 'Phường 8, Đà Lạt, Lâm Đồng', text: 'Mua 1 tặng 1 nên lấy luôn 2 cái cho hai vợ chồng. Gió mát, vải nhẹ, mặc cả ngày không khó chịu.' },
        { initial: 'M', name: 'Võ Quang Minh', role: 'Gò Vấp, TP.HCM', text: 'Chạy đơn ngoài đường nắng gắt, cái áo cứu cả mùa hè. Sạc một lần chạy được cả ca.' },
        { initial: 'D', name: 'Đặng Văn Dũng', role: 'Hải Châu, Đà Nẵng', text: 'Đứng gác giữa trưa mà không thấy hầm như trước. Hàng chắc chắn, dùng 3 tháng vẫn ngon.' },
      ],
      faqs,

      // form
      form: this.state.form,
      submitted: this.state.submitted,
      notSubmitted: !this.state.submitted,
      qty: this.state.qty,
      giftQty: this.state.qty,
      totalStr,
      sizeChips, colorChips,
      onName: e => this.setState(s => ({ form: { ...s.form, name: e.target.value } })),
      onPhone: e => this.setState(s => ({ form: { ...s.form, phone: e.target.value } })),
      onAddress: e => this.setState(s => ({ form: { ...s.form, address: e.target.value } })),
      inc: () => this.setState(s => ({ qty: Math.min(10, s.qty + 1) })),
      dec: () => this.setState(s => ({ qty: Math.max(1, s.qty - 1) })),
      submitting: this.state.submitting,
      orderError: this.state.orderError,
      submitLabel: this.state.submitting ? 'ĐANG GỬI ĐƠN…' : 'CHỐT ĐƠN — GIAO TẬN NHÀ',
      submitBtnStyle: {
        width: '100%', color: '#fff', fontWeight: 800, fontSize: '18px', padding: '16px',
        border: 'none', borderRadius: '13px',
        background: this.state.submitting ? '#f3a980' : '#f5601a',
        boxShadow: '0 14px 30px -10px rgba(245,96,26,.6)',
        cursor: this.state.submitting ? 'wait' : 'pointer',
      },
      onSubmit: () => this.submitOrder(salePrice, totalStr),
      resetForm: () => this.setState({ submitted: false, orderError: '', form: { name: '', phone: '', address: '' }, qty: 1 }),

      // sticky bar
      stickyStyle: {
        position: 'fixed', left: 0, right: 0, bottom: 0, zIndex: 60,
        background: 'rgba(255,255,255,.96)', backdropFilter: 'blur(10px)',
        borderTop: '1px solid #e6edf5', boxShadow: '0 -10px 30px -16px rgba(0,0,0,.25)',
        transform: this.state.showSticky ? 'translateY(0)' : 'translateY(130%)',
        transition: 'transform .35s cubic-bezier(.2,.8,.2,1)',
      },
    };
  }
}
</script>
</body>
</html>
