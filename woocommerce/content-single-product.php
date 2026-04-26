<div class="esim-hero-bg">
<div class="esim-product-wrapper">
  <!-- Product Layout -->
  <div class="esim-product-layout">

  
    <!-- LEFT: Product Info -->

    <div class="esim-product-info">
              <!-- Breadcrumb -->
    <nav class="esim-breadcrumb">
    <p><a href="#">首頁</p></a><span>/</span>
    <?php
$terms = get_the_terms(get_the_ID(), 'product_cat');

if (!empty($terms) && !is_wp_error($terms)) {
  $term = $terms[0]; // 第一個分類
  echo '<p><a href="' . esc_url(get_term_link($term)) . '">' . esc_html($term->name) . '</a></p>';
}
?><span>/</span>
    <p>  <?php the_title(); ?></p>
  </nav>
      <div class="esim-product-title-row">
      <?php
$img = get_field('country_img', get_the_ID());
?>
    <div class="esim-flag">
  <?php if ($img): ?>
    <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
  <?php endif; ?>
</div>
        <h1 class="esim-product-title">  <?php the_title(); ?></h1>
        <span class="esim-badge esim-badge--safe esim-badge--label">品質認證服務</span>
      </div>
 
      <p class="esim-product-desc">
        購買當地利 eSIM，專為不想煩惱的旅客設計，選擇好天數，即可享受 eSIM 無限流量服務，即買即用，出國上網就該這麼輕鬆。
      </p>
 
      <div class="esim-badges">
        <div class="esim-badge esim-badge--hot esim-badge--dot">熱點支援</div>
        <div class="esim-rating-row">
        <div class="esim-stars">
          <span>★</span><span>★</span><span>★</span><span>★</span><span>★</span>
        </div>
        <span class="esim-rating-score">(5.0)</span>
        <span>基於 120+ 用戶評價</span>
      
      </div>
      </div>


      <div class="esim-meta">
  <div class="device-checker">
    <?php echo do_shortcode('[device_checker]'); ?>
  </div>

  <p class="esim-carriers">
    <span><?php echo get_field('esim_tc', get_the_ID()); ?></span>
   
  </p>
</div>

</div>


  <!-- /.esim-product-info -->

        <!-- RIGHT: Purchase Card -->
        <div class="esim-card-shell">
        <div class="esim-purchase-card">
        <div class="esim-card-header">
  <div class="esim-card-title">
    <span class="esim-flag">  <?php if ($img): ?>
    <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>">
  <?php endif; ?></span>
    <span class="esim-title-text"><?php the_title(); ?></p></span>
  </div>

  <?php echo do_shortcode('[custom_esim_slider]'); ?>

  </div>
</div><!-- /.esim-purchase-card -->

</div><!-- /.esim-product-layout -->

</div><!-- /.esim-product-wrapper -->
</div><!-- /.esim-hero-bg -->
<div class="esim-slider-isolate">

</div>
<!-- ===== Product Tabs Section ===== -->

 
<section class="esim-tabs-section">
  <div class="esim-tabs-card">

    <!-- Tab Nav -->
    <nav class="esim-tab-nav">
      <button class="esim-tab-btn active" onclick="switchTab(this, 'tab-desc')">商品說明</button>
      <button class="esim-tab-btn" onclick="switchTab(this, 'tab-features')">商品特點</button>
      <button class="esim-tab-btn" onclick="switchTab(this, 'tab-specs')">商品規格</button>
    </nav>
 
    <!-- 商品說明 -->
    <div class="esim-tab-panel active" id="tab-desc">
      <p>OceanEsim 與其他 eSIM 品牌不一樣，我們徹底簡化旅客的購買流程，我們提供的是<strong>蒙古 eSIM 吃到飽方案</strong>，您不需要再煩惱每日用量、也不用擔心用完沒網路，只需選擇旅行數，下單安裝後就可以安心出發，旅行就是應該要這麼簡單。</p>
      <p>為了確保每位用戶在旅途中享有最穩定順暢的連線品質，我們只使用蒙古 當地最頂級的原生電信商網絡，不與廉價電信商合作，拒絕犧牲品質換價格。因此，無論您身處蒙古市區還是郊區，都能使用到最穩定流暢的 4G/5G 上網速度，不怕卡頓、不怕斷線。</p>
    </div>
 
    <!-- 商品特點 -->
    <div class="esim-tab-panel" id="tab-features">
      <p>· 免換實體 SIM 卡，掃碼即裝即用</p>
      <p>· 支援熱點分享，多台裝置同時使用</p>
      <p>· 使用當地頂級電信商，4G/5G 穩定覆蓋</p>
      <p>· 吃到飽無限流量，不限每日用量</p>
      <p>· 購買後即時收到安裝 QR Code</p>
    </div>
 
    <!-- 商品規格 -->
    <div class="esim-tab-panel" id="tab-specs">
      <p><strong>適用裝置：</strong>支援 eSIM 的 iOS / Android 手機</p>
      <p><strong>網路制式：</strong>4G LTE / 5G</p>
      <p><strong>電信商：</strong>China Mobile 5G（當地原生電信）</p>
      <p><strong>有效期限：</strong>購買後 180 天內啟用，啟用後依所選天數計算</p>
      <p><strong>熱點分享：</strong>支援</p>
      <p><strong>安裝方式：</strong>掃描 QR Code 或手動輸入啟用碼</p>
    </div>
 
  </div>
</div>


<!-- ===== Instant Delivery Banner ===== -->
<div class="esim-delivery-section">
<div class="esim-delivery-banner"
     style="background-image: url('<?php echo wp_upload_dir()['baseurl']; ?>/2026/04/mail-bg.png');">

    <div class="esim-delivery-content">
      <!-- Icon: envelope with 5G badge -->
      <div class="esim-delivery-icon-wrap">
      <img src="<?php echo wp_upload_dir()['baseurl']; ?>/2026/04/mail.png" alt="mail-icon">
      </div>
 
      <h2 class="esim-delivery-title">無需等待，下單即寄！</h2>
      <p class="esim-delivery-desc">我們保證 eSIM 將在 1~3 分鐘內發送到您的電子郵件。</p>
    </div>
 
  </div>
</div>


<!-- ===== App Logos Marquee Section ===== -->
<div class="esim-apps-section">
  <h2 class="esim-apps-title">一張<?php echo get_field('esim_country', get_the_ID()); ?> <span>eSIM</span> 滿足你出行所有需求</h2>
  <p class="esim-apps-desc">我們的蒙古 eSIM 可以讓你在旅遊中與世界各地親友保持聯繫。</p>
 
  <div class="esim-marquee-outer">
    <div class="esim-marquee-track" id="marqueeTrack">
 
    <?php
$app_icons = [
  ['class' => 'line', 'file' => 'Line-icon.png', 'alt' => 'LINE'],
  ['class' => 'spotify', 'file' => 'sporticy-icon.png', 'alt' => 'Spotify'],
  ['class' => 'netflix', 'file' => 'netflix-icon.png', 'alt' => 'Netflix'],
  ['class' => 'klook', 'file' => 'klook-icon.png', 'alt' => 'Klook'],
  ['class' => 'kkday', 'file' => 'kkday-icon.png', 'alt' => 'KKday'],
  ['class' => 'telegram', 'file' => 'tg-icon.png', 'alt' => 'Telexgram'],
  ['class' => 'trip', 'file' => 'trip-icon.png', 'alt' => 'Trip'],
  ['class' => 'grab', 'file' => 'grab-icon.png', 'alt' => 'Grab'],
  ['class' => 'facebook', 'file' => 'Facebook-icon.png', 'alt' => 'Facebook'],
  ['class' => 'uber', 'file' => 'Ubereats-icon.png', 'alt' => 'Uber'],
  ['class' => 'youtube', 'file' => 'youtube-icon.png', 'alt' => 'YouTube'],
  ['class' => 'whatsapp', 'file' => 'whatsapp-icon.png', 'alt' => 'WhatsApp'],
  ['class' => 'instagram', 'file' => 'Instergram-icon.png', 'alt' => 'Instagram'],
  ['class' => 'theads', 'file' => 'thread-icon.png', 'alt' => 'threads'],
];

$upload_url = wp_upload_dir()['baseurl'];
?>

<div class="esim-app-wrapper">
  <div class="esim-app-track" id="sliderTrack">
    <?php foreach ($app_icons as $icon): ?>
      <div class="esim-app-icon esim-app-icon--<?php echo esc_attr($icon['class']); ?>">
        <img 
          src="<?php echo esc_url($upload_url . '/2026/04/' . $icon['file']); ?>" 
          alt="<?php echo esc_attr($icon['alt']); ?>"
          loading="lazy"
        >
      </div>
    <?php endforeach; ?>
  </div>
</div>

    </div><!-- /.esim-marquee-track -->
  </div><!-- /.esim-marquee-outer -->
</div><!-- /.esim-apps-section -->

<!-- ===== Why Choose Us ===== -->
<div class="esim-why-section">
  <h2 class="esim-section-heading">為什麼選擇我們的<?php echo get_field('esim_country', get_the_ID()); ?> eSIM？</h2>
  <div class="esim-features-grid">
 
    <!-- 1 -->
    <div class="esim-feature-item">
      <div class="esim-feature-icon">
      <img src="<?php echo wp_upload_dir()['baseurl']; ?>/2026/04/002-speedometer.png" alt="speed">
      </div>
      <div class="esim-feature-title">極快的 4G/5G 網路速度</div>
      <div class="esim-feature-desc">我們的 eSIM 可以讓您在中國 99% 時間裏享受最高速的 4G/5G 網路。</div>
    </div>
 
    <!-- 2 -->
    <div class="esim-feature-item">
      <div class="esim-feature-icon">
      <img src="<?php echo wp_upload_dir()['baseurl']; ?>/2026/04/001-infinity.png" alt="volume">
      </div>
      <div class="esim-feature-title">流量吃到飽</div>
      <div class="esim-feature-desc">每天無限流量任用，當您決定好需要的上網天數就可以直接出發。</div>
    </div>
 
    <!-- 3 -->
    <div class="esim-feature-item">
      <div class="esim-feature-icon">
      <img src="<?php echo wp_upload_dir()['baseurl']; ?>/2026/04/001-tower.png" alt="tc">
      </div>
      <div class="esim-feature-title">使用當地電訊公司</div>
      <div class="esim-feature-desc">使用中國當地主流電信網路，無論您在偏遠地區或是旅遊景點，都能享有穩定連線。</div>
    </div>
 
    <!-- 4 -->
    <div class="esim-feature-item">
      <div class="esim-feature-icon">
      <img src="<?php echo wp_upload_dir()['baseurl']; ?>/2026/04/002-email.png" alt="get-esim">
      </div>
      <div class="esim-feature-title">下單後立即收貨</div>
      <div class="esim-feature-desc">無需等待，下單後我們將會立即將 eSIM 發送到您電子郵件中。</div>
    </div>
 
    <!-- 5 -->
    <div class="esim-feature-item">
      <div class="esim-feature-icon">
      <img src="<?php echo wp_upload_dir()['baseurl']; ?>/2026/04/002-destination.png" alt="support-country">
      </div>
      <div class="esim-feature-title">支援 170 多個國家與地區</div>
      <div class="esim-feature-desc">只需點擊一下，走到哪用到哪！我們的 eSIM 在全球各大洲、熱門旅遊地點皆有支援。</div>
    </div>
 
    <!-- 6 -->
    <div class="esim-feature-item">
      <div class="esim-feature-icon">
      <img src="<?php echo wp_upload_dir()['baseurl']; ?>/2026/04/001-invoice.png" alt="fee">
      </div>
      <div class="esim-feature-title">極高性價比</div>
      <div class="esim-feature-desc">告別傳統電信公司昂貴漫遊費用，並且我們保證沒有隱藏額外收費。</div>
    </div>
 
  </div>
</div>
 
<!-- ===== How to Buy ===== -->
<div class="esim-howto-section">
  <h2 class="esim-section-heading">如何購買<?php echo get_field('esim_country', get_the_ID()); ?> eSIM</h2>
  <p class="esim-howto-subtitle">購買到安裝快至 1 分鐘即可上網。</p>
 
  <div class="esim-steps-grid">
 
    <!-- Step 1 -->
    <div class="esim-step-card">
      <span class="esim-step-badge">步驟 1</span>
      <div class="esim-step-img">
        <svg viewBox="0 0 160 200" fill="none" xmlns="http://www.w3.org/2000/svg">
          <!-- Phone shell -->
          <rect x="30" y="10" width="100" height="180" rx="16" fill="#1a1a2e"/>
          <rect x="36" y="20" width="88" height="160" rx="10" fill="#f0f6ff"/>
          <!-- Notch -->
          <rect x="58" y="14" width="44" height="10" rx="5" fill="#2A7BF5"/>
          <!-- Calendar card -->
          <rect x="50" y="50" width="60" height="60" rx="8" fill="#ffffff" stroke="#d8e4f5" stroke-width="1.5"/>
          <rect x="50" y="50" width="60" height="16" rx="8" fill="#2A7BF5"/>
          <rect x="50" y="58" width="60" height="8" fill="#2A7BF5"/>
          <line x1="66" y1="46" x2="66" y2="56" stroke="#2A7BF5" stroke-width="3" stroke-linecap="round"/>
          <line x1="94" y1="46" x2="94" y2="56" stroke="#2A7BF5" stroke-width="3" stroke-linecap="round"/>
          <!-- Grid -->
          <text x="80" y="84" font-size="9" fill="#666" text-anchor="middle" font-family="Arial">M T W T F</text>
          <text x="80" y="95" font-size="9" fill="#333" text-anchor="middle" font-family="Arial">1  2  3  4  5</text>
          <text x="80" y="106" font-size="9" fill="#333" text-anchor="middle" font-family="Arial">6  7  8  9 10</text>
          <!-- 7 DAYS badge -->
          <rect x="56" y="125" width="48" height="20" rx="6" fill="#2A7BF5"/>
          <text x="80" y="139" font-size="10" font-weight="700" fill="white" text-anchor="middle" font-family="Arial">7 DAYS</text>
          <!-- Home bar -->
          <rect x="68" y="172" width="24" height="4" rx="2" fill="#d0d8e8"/>
        </svg>
      </div>
      <div class="esim-step-body">
        <div class="esim-step-title">選擇旅行天數</div>
        <div class="esim-step-desc">選擇適合您旅遊天數的吃到飽方案並下單。</div>
      </div>
    </div>
 
    <!-- Step 2 -->
    <div class="esim-step-card">
      <span class="esim-step-badge">步驟 2</span>
      <div class="esim-step-img">
        <svg viewBox="0 0 160 200" fill="none" xmlns="http://www.w3.org/2000/svg">
          <rect x="30" y="10" width="100" height="180" rx="16" fill="#1a1a2e"/>
          <rect x="36" y="20" width="88" height="160" rx="10" fill="#f0f6ff"/>
          <rect x="58" y="14" width="44" height="10" rx="5" fill="#2A7BF5"/>
          <!-- QR Code frame -->
          <rect x="48" y="48" width="64" height="64" rx="6" fill="white" stroke="#d8e4f5" stroke-width="1.5"/>
          <!-- QR corner marks -->
          <rect x="54" y="54" width="18" height="18" rx="2" fill="none" stroke="#1a1a2e" stroke-width="2.5"/>
          <rect x="57" y="57" width="12" height="12" rx="1" fill="#1a1a2e"/>
          <rect x="88" y="54" width="18" height="18" rx="2" fill="none" stroke="#1a1a2e" stroke-width="2.5"/>
          <rect x="91" y="57" width="12" height="12" rx="1" fill="#1a1a2e"/>
          <rect x="54" y="88" width="18" height="18" rx="2" fill="none" stroke="#1a1a2e" stroke-width="2.5"/>
          <rect x="57" y="91" width="12" height="12" rx="1" fill="#1a1a2e"/>
          <!-- QR dots middle -->
          <rect x="88" y="88" width="4" height="4" fill="#1a1a2e"/>
          <rect x="94" y="88" width="4" height="4" fill="#1a1a2e"/>
          <rect x="100" y="88" width="4" height="4" fill="#1a1a2e"/>
          <rect x="88" y="94" width="4" height="4" fill="#1a1a2e"/>
          <rect x="100" y="100" width="4" height="4" fill="#1a1a2e"/>
          <!-- Scan line -->
          <line x1="48" y1="80" x2="112" y2="80" stroke="#2A7BF5" stroke-width="1.5" stroke-dasharray="3,2" opacity="0.7"/>
          <!-- Label -->
          <text x="80" y="130" font-size="9" fill="#888" text-anchor="middle" font-family="Arial">掃描 QR Code</text>
          <rect x="68" y="172" width="24" height="4" rx="2" fill="#d0d8e8"/>
        </svg>
      </div>
      <div class="esim-step-body">
        <div class="esim-step-title">掃描 QR Code</div>
        <div class="esim-step-desc">出發前安裝電子郵件中的 QR Code。</div>
      </div>
    </div>
 
    <!-- Step 3 -->
    <div class="esim-step-card">
      <span class="esim-step-badge">步驟 3</span>
      <div class="esim-step-img">
        <svg viewBox="0 0 160 200" fill="none" xmlns="http://www.w3.org/2000/svg">
          <rect x="30" y="10" width="100" height="180" rx="16" fill="#1a1a2e"/>
          <rect x="36" y="20" width="88" height="160" rx="10" fill="#f0f6ff"/>
          <rect x="58" y="14" width="44" height="10" rx="5" fill="#2A7BF5"/>
          <!-- WiFi arcs -->
          <path d="M80 100 m-36 0 a36 36 0 0 1 72 0" stroke="#2A7BF5" stroke-width="3" stroke-linecap="round" fill="none" opacity="0.25"/>
          <path d="M80 100 m-24 0 a24 24 0 0 1 48 0" stroke="#2A7BF5" stroke-width="3.5" stroke-linecap="round" fill="none" opacity="0.5"/>
          <path d="M80 100 m-13 0 a13 13 0 0 1 26 0" stroke="#2A7BF5" stroke-width="4" stroke-linecap="round" fill="none"/>
          <circle cx="80" cy="100" r="5" fill="#2A7BF5"/>
          <!-- Connected badge -->
          <rect x="50" y="118" width="60" height="20" rx="6" fill="#2A7BF5"/>
          <text x="80" y="132" font-size="9" font-weight="700" fill="white" text-anchor="middle" font-family="Arial">CONNECTED</text>
          <rect x="68" y="172" width="24" height="4" rx="2" fill="#d0d8e8"/>
        </svg>
      </div>
      <div class="esim-step-body">
        <div class="esim-step-title">享受旅程</div>
        <div class="esim-step-desc">當您到達當地後啟用上網即自動連線。</div>
      </div>
    </div>
 
  </div>
</div>
<!-- ===== Comparison Table ===== -->
<div class="esim-compare-section">
  <h2 class="esim-section-heading">我們與其他 eSIM 的比較</h2>
  <p class="esim-compare-subtitle">看看我們優勝其他 eSIM 品牌的地方。</p>
 
  <div class="esim-compare-table-wrap">
    <table class="esim-compare-table">
      <thead>
        <tr>
          <th></th>
          <!-- OceanEsim -->
          <th class="esim-th-brand col-us">
            <div class="esim-brand-icon esim-brand-icon--ocean">O</div>
            <div class="esim-brand-name">OceanEsim</div>
          </th>
          <!-- Saily -->
          <th class="esim-th-brand">
            <div class="esim-brand-icon esim-brand-icon--saily">S</div>
            <div class="esim-brand-name">Saily</div>
          </th>
          <!-- HolaFly -->
          <th class="esim-th-brand">
            <div class="esim-brand-icon esim-brand-icon--hola">H</div>
            <div class="esim-brand-name">HolaFly</div>
          </th>
          <!-- Airalo -->
          <th class="esim-th-brand">
            <div class="esim-brand-icon esim-brand-icon--airalo">
              <svg width="28" height="28" viewBox="0 0 28 28" fill="none"><path d="M14 4 L22 22 H6 Z" fill="#FF6B35"/><path d="M14 10 L19 22 H9 Z" fill="#FF9A6C"/></svg>
            </div>
            <div class="esim-brand-name">Airalo</div>
          </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>支援多個目的地</td>
          <td class="col-us"><span class="esim-check">✓</span></td>
          <td><span class="esim-check">✓</span></td>
          <td><span class="esim-check">✓</span></td>
          <td><span class="esim-check">✓</span></td>
        </tr>
        <tr>
          <td>彈性無限流量方案</td>
          <td class="col-us"><span class="esim-check">✓</span></td>
          <td><span class="esim-cross">✕</span></td>
          <td><span class="esim-check">✓</span></td>
          <td><span class="esim-cross">✕</span></td>
        </tr>
        <tr>
          <td>一鍵安裝啟用 eSIM</td>
          <td class="col-us"><span class="esim-check">✓</span></td>
          <td><span class="esim-check">✓</span></td>
          <td><span class="esim-check">✓</span></td>
          <td><span class="esim-cross">✕</span></td>
        </tr>
        <tr>
          <td>中文客服支援</td>
          <td class="col-us"><span class="esim-check">✓</span></td>
          <td><span class="esim-cross">✕</span></td>
          <td><span class="esim-cross">✕</span></td>
          <td><span class="esim-cross">✕</span></td>
        </tr>
        <tr>
          <td>性值比</td>
          <td class="col-us"><span class="esim-val-badge esim-val-best">最高</span></td>
          <td><span class="esim-val-badge esim-val-mid">一般</span></td>
          <td><span class="esim-val-badge esim-val-low">低</span></td>
          <td><span class="esim-val-badge esim-val-low">低</span></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
 
<!-- ===== CTA Banner ===== -->
<div class="esim-cta-section">
  <div class="esim-cta-banner">
    <div class="esim-cta-text">
      <div class="esim-cta-title">最好的<?php echo get_field('esim_country', get_the_ID()); ?> eSIM 是哪一個？</div>
      <p class="esim-cta-desc">最好的<?php echo get_field('esim_country', get_the_ID()); ?> eSIM 是 OceanEsim，這張 eSIM 可以獲得<strong>無限吃到飽流量</strong>，而且提供極快的網路速度與穩定訊號，即買即用，一鍵快速安裝啟用，無論你是到旅遊景點還是偏遠地區，我們的 eSIM 都能隨時讓你保持連線。</p>
    </div>
    <button class="esim-cta-btn">立即購買 eSIM</button>
  </div>
</div>

<div class="container">
      <div class="section-heading">
        <h2>旅客對我們 eSIM 的評價</h2>
        <p>看看其他旅客對我們 eSIM 的評價。</p>
      </div>

      <div class="slider-wrap">
        <div class="slider-track" id="sliderTrack">
          <div class="review-card">
            <div class="review-header">
              <div class="avatar">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                  <path d="M12 12a5 5 0 1 0-5-5 5 5 0 0 0 5 5Zm0 2c-4.418 0-8 2.239-8 5 0 .552.448 1 1 1h14c.552 0 1-.448 1-1 0-2.761-3.582-5-8-5Z"/>
                </svg>
              </div>
              <div>
                <div class="reviewer-name">Lynn <span>🇺🇸</span></div>
                <div class="stars">★★★★★</div>
              </div>
            </div>
            <p class="review-text">幾乎沒有遇到網路問題，在大阪各處都能穩定上網，信號穩定、速度也很不錯。</p>
          </div>

          <div class="review-card">
            <div class="review-header">
              <div class="avatar">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                  <path d="M12 12a5 5 0 1 0-5-5 5 5 0 0 0 5 5Zm0 2c-4.418 0-8 2.239-8 5 0 .552.448 1 1 1h14c.552 0 1-.448 1-1 0-2.761-3.582-5-8-5Z"/>
                </svg>
              </div>
              <div>
                <div class="reviewer-name">曉雯 <span>🇹🇼</span></div>
                <div class="stars">★★★★★</div>
              </div>
            </div>
            <p class="review-text">這趟去澳門，完全沒有遇到網路斷線不順的問題，連導航和訊息都一路很順！</p>
          </div>

          <div class="review-card">
            <div class="review-header">
              <div class="avatar">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                  <path d="M12 12a5 5 0 1 0-5-5 5 5 0 0 0 5 5Zm0 2c-4.418 0-8 2.239-8 5 0 .552.448 1 1 1h14c.552 0 1-.448 1-1 0-2.761-3.582-5-8-5Z"/>
                </svg>
              </div>
              <div>
                <div class="reviewer-name">怡君 <span>🇹🇼</span></div>
                <div class="stars">★★★★★</div>
              </div>
            </div>
            <p class="review-text">這是我第一次用 eSIM 出國，真的太方便了，出發前就設定好，到機場開通後就能直接上網，方便又好用，會再回購！</p>
          </div>

          <div class="review-card">
            <div class="review-header">
              <div class="avatar">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                  <path d="M12 12a5 5 0 1 0-5-5 5 5 0 0 0 5 5Zm0 2c-4.418 0-8 2.239-8 5 0 .552.448 1 1 1h14c.552 0 1-.448 1-1 0-2.761-3.582-5-8-5Z"/>
                </svg>
              </div>
              <div>
                <div class="reviewer-name">Jason <span>🇹🇼</span></div>
                <div class="stars">★★★★★</div>
              </div>
            </div>
            <p class="review-text">操作很簡單！謝謝客服耐心協助！</p>
          </div>
        </div>
      </div>
    </div>


  <!-- FAQ Section -->
  <section class="faq-section">
    <div class="container">
      <div class="section-heading">
        <h2>關於<?php echo get_field('esim_country', get_the_ID()); ?> eSIM 的常見問題</h2>
        <p>還有其他疑問？聯繫我們的客服！</p>
      </div>

      <div class="faq-list">
        <div class="faq-item">
          <button class="faq-question">如何知道我的手機是否支援 eSIM？<span>+</span></button>
          <div class="faq-answer">您可以至手機設定中查看是否有「行動方案」或「eSIM」選項，或查詢官方支援清單。</div>
        </div>

        <div class="faq-item">
          <button class="faq-question">你們的 eSIM 可以撥打電話嗎？<span>+</span></button>
          <div class="faq-answer">大多數 eSIM 為數據方案，僅提供上網功能，不包含語音通話與簡訊。</div>
        </div>

        <div class="faq-item">
          <button class="faq-question">什麼時候該安裝我的 eSIM？<span>+</span></button>
          <div class="faq-answer">建議出發前先安裝，抵達目的地後再開啟使用，避免提前計算使用天數。</div>
        </div>

        <div class="faq-item">
          <button class="faq-question">你們的 eSIM 會降速嗎？<span>+</span></button>
          <div class="faq-answer">部分方案在達到一定流量後可能會降速，請參考商品頁說明。</div>
        </div>

        <div class="faq-item">
          <button class="faq-question">如何查詢我的 eSIM 數據使用量？<span>+</span></button>
          <div class="faq-answer">可透過手機系統內建的數據使用量統計查看，或使用我們提供的查詢方式。</div>
        </div>

        <div class="faq-item">
          <button class="faq-question">我可以與其他裝置共享網路數據嗎？<span>+</span></button>
          <div class="faq-answer">多數 eSIM 支援熱點分享，但仍需依各國與方案限制為準。</div>
        </div>

        <div class="faq-item">
          <button class="faq-question">購買 eSIM 後多久會收到 QR Code？<span>+</span></button>
          <div class="faq-answer">通常付款完成後幾分鐘內會寄送至您的電子郵件。</div>
        </div>

        <div class="faq-item">
          <button class="faq-question">我沒有收到 QR Code 怎麼辦？<span>+</span></button>
          <div class="faq-answer">請先檢查垃圾郵件，若仍未收到請聯繫客服協助處理。</div>
        </div>
      </div>
    </div>
<script>
  // ===== Base price per day =====
  const BASE_PRICE_PER_DAY = 2064;
  let currentQty = 1;
  let currentDays = 1;
 
  function calcPrice(days) {
    // Simple linear pricing: NT$2064 for 1 day, scale slightly
    return Math.round(BASE_PRICE_PER_DAY + (days - 1) * 180);
  }
 
  function formatNT(n) {
    return 'NT$' + n.toLocaleString('zh-TW');
  }
 
  function updateSlider(input) {
    const days = parseInt(input.value);
    currentDays = days;
    const min = parseInt(input.min);
    const max = parseInt(input.max);
    const pct = (days - min) / (max - min);
 
    // Move bubble
    const wrapper = document.getElementById('sliderWrapper');
    const sliderW = input.offsetWidth;
    const thumbW = 20;
    const pos = pct * (sliderW - thumbW) + thumbW / 2;
    const bubble = document.getElementById('sliderBubble');
    bubble.style.left = pos + 'px';
    bubble.textContent = days;
 
    // Gradient fill
    input.style.background = `linear-gradient(to right, var(--primary) 0%, var(--primary) ${pct*100}%, var(--border) ${pct*100}%)`;
 
    // Update plan summary
    document.getElementById('planDayDisplay').textContent = days + ' 天';
    const price = calcPrice(days);
    document.getElementById('unitPrice').textContent = formatNT(price);
    updateSubtotal(price);
  }
 
  function updateSubtotal(unitPrice) {
    document.getElementById('subtotalDisplay').textContent = formatNT(unitPrice * currentQty);
  }
 
  function changeQty(delta) {
    currentQty = Math.max(1, currentQty + delta);
    document.getElementById('qtyDisplay').textContent = currentQty;
    const price = calcPrice(currentDays);
    updateSubtotal(price);
  }
 
  function selectPlan(btn) {
    document.querySelectorAll('.esim-plan-btn').forEach(b => b.classList.remove('active'));
    btn.classList.add('active');
    // Update badge label
    document.querySelector('.esim-plan-badge-unlimited').textContent =
      btn.textContent === '吃到飽' ? '∞ 吃到飽' : '📶 總流量';
  }
 
  // Init slider position on load
  window.addEventListener('load', () => {
    updateSlider(document.getElementById('daySlider'));
  });
 
  // Tab switching
  function switchTab(btn, panelId) {
    document.querySelectorAll('.esim-tab-btn').forEach(b => b.classList.remove('active'));
    document.querySelectorAll('.esim-tab-panel').forEach(p => p.classList.remove('active'));
    btn.classList.add('active');
    document.getElementById(panelId).classList.add('active');
  }

  // slider
  const sliderTrack = document.getElementById('sliderTrack');

if (sliderTrack && !sliderTrack.dataset.duplicated) {
  sliderTrack.innerHTML += sliderTrack.innerHTML;
  sliderTrack.dataset.duplicated = 'true';
}

   

    // FAQ toggle
    const faqItems = document.querySelectorAll('.faq-item');
    faqItems.forEach(item => {
      const btn = item.querySelector('.faq-question');
      btn.addEventListener('click', () => {
        item.classList.toggle('active');
      });
    });
  
</script>

