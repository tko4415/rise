<!doctype html>
<?php
  $lp = wp_parse_args(get_query_var('lp_config', array()), array(
    'home' => '/hiseikyu/',
    'copy' => '不倫慰謝料の減額交渉を得意とする',
    'title' => '【無料相談】不倫・浮気の慰謝料減額交渉を得意とする弁護士法人ライズ綜合法律事務所',
    'desc' => '',
    'contact' => '/hiseikyu/contact/',
    'tel' => '0120-657-001',
    'tel_href' => '0120657001',
    'nav' => array(),
    'styles' => array('css/lp/hiseikyu-base.css', 'css/lp/hiseikyu.css'),
    'scripts' => array(),
    'footer_nav' => array(),
    'lower' => false,
    'contact_form' => false,
    'noindex' => false,
  ));
  $is_lower = !empty($lp['lower']);
  $page_styles = array();
  $chrome_styles = array(
    'css/lp/hiseikyu-header.css',
    'css/lp/hiseikyu-footer.css',
  );
  foreach ((array) $lp['styles'] as $style) {
    $style = ltrim($style, '/');
    if (in_array($style, array(
      'css/lp/hiseikyu-base.css',
      'css/lp/hiseikyu.css',
      'css/lp/hiseikyu-header.css',
      'css/lp/hiseikyu-footer.css',
    ), true)) {
      continue;
    }
    $page_styles[] = $style;
  }
  if ($is_lower) {
    $lp['styles'] = array_values(array_unique(array_merge(
      $page_styles,
      array('css/lp/hiseikyu.css'),
      $chrome_styles
    )));
  } else {
    $lp['styles'] = array_values(array_unique(array_merge(
      array('css/lp/hiseikyu-base.css'),
      $page_styles,
      array('css/lp/hiseikyu.css'),
      $chrome_styles
    )));
  }
  $t_title = $lp['title'];
  $t_desc = $lp['desc'];
  if (strpos($t_title, 'ライズ綜合法律事務所') === false) {
    $t_title .= '｜不倫慰謝料の減額交渉を得意とする弁護士法人ライズ綜合法律事務所';
  }
  $safe_title = wp_kses($t_title, array());
  $theme_uri = get_template_directory_uri();
?>
<html class="no-js<?php echo $is_lower ? ' lp-hiseikyu-lower' : ''; ?>" lang="ja">
<head>

<meta charset="utf-8">
<title><?php echo $safe_title; ?></title>
<meta property="og:title" content="<?php echo $safe_title; ?>">
<meta name="description" content="<?php echo esc_attr($t_desc); ?>">
<meta property="og:description" content="<?php echo esc_attr($t_desc); ?>">
<meta property="og:image" content="<?php bloginfo('url'); ?>/assets_prev/images/column/logo.png">
<meta property="og:site_name" content="ライズ綜合法律事務所">
<meta property="og:locale" content="ja_JP">
<meta property="og:url" content="<?php echo esc_url((is_ssl() ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php if (!empty($lp['noindex'])) : ?>
<meta name="robots" content="noindex, nofollow">
<?php endif; ?>

<link rel="icon" href="/favicon.png">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@400&family=Noto+Sans+JP:wght@350;400;500;700;900&family=Noto+Serif+JP:wght@400;700;900&family=Shippori+Mincho:wght@500;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
<?php if (!$is_lower) : ?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<?php endif; ?>

<link rel="stylesheet" href="<?php echo $theme_uri; ?>/css/style-tokusetu.css">
<link rel="stylesheet" href="<?php echo $theme_uri; ?>/css/style-isharyo.css">
<?php if (!$is_lower) : ?>
<link rel="stylesheet" href="<?php echo $theme_uri; ?>/css/tokusetu/t_common.css">
<?php endif; ?>
<?php foreach ((array) $lp['styles'] as $style) :
  $rel = ltrim($style, '/');
  $css_path = get_template_directory() . '/' . $rel;
  $ver = file_exists($css_path) ? filemtime($css_path) : time();
?>
<link rel="stylesheet" href="<?php echo esc_url($theme_uri . '/' . $rel . '?ver=' . $ver); ?>">
<?php endforeach; ?>
<?php if (!empty($lp['contact_form'])) : ?>
<link rel="stylesheet" href="<?php echo esc_url($theme_uri . '/css/saimu/validationEngine.jquery.css'); ?>">
<?php endif; ?>

<?php $rich_result = get_field('faq_rich_result'); if ($rich_result) { echo $rich_result; } ?>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KK2MNBM9');</script>
<!-- End Google Tag Manager -->

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NDHT8Z3');</script>
<!-- End Google Tag Manager -->

<?php wp_head(); ?>
</head>

<body <?php body_class($is_lower ? array('lp-isyaryo', 'page-child') : array('lp-isyaryo')); ?>>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MNG6GGZT');</script>
<!-- End Google Tag Manager -->

<header class="lp-isyaryo-header">
  <div id="spnav" class="spnav">
    <span class="spnav1"></span>
    <span class="spnav2"></span>
    <span class="spnav3"></span>
  </div>
  <div class="logo">
    <a href="<?php echo esc_url($lp['home']); ?>">
      <p class="copy"><?php echo esc_html($lp['copy']); ?></p>
      <picture>
        <img src="/assets_prev/images/common/logo.png" alt="ライズ綜合法律事務所" width="682" height="114">
      </picture>
    </a>
  </div>
  <nav id="gnav">
    <div class="main">
      <div class="upper">
        <div class="block freedial">
          <p class="bg-red">ご相談専用フリーダイヤル</p>
          <div class="body">
            <p class="tel"><a href="tel:<?php echo esc_attr($lp['tel_href']); ?>"><?php echo esc_html($lp['tel']); ?></a></p>
            <p class="small">9:00-21:00<br class="pc">土日祝も受付</p>
          </div>
        </div>
      </div>
      <div class="lower">
        <ul class="lv_1">
          <?php foreach ($lp['nav'] as $item) : ?>
            <li class="single"><a href="<?php echo esc_url($item['url']); ?>"><?php echo esc_html($item['label']); ?></a></li>
          <?php endforeach; ?>
          <li class="single sp"><a href="<?php echo esc_url($lp['contact']); ?>">お問い合わせ</a></li>
        </ul>
      </div>
    </div>
    <a href="<?php echo esc_url($lp['contact']); ?>" class="contact pc"><span class="icon"><img src="/assets_prev/images/common/icon_contact.svg" alt="" width="22" height="18" loading="lazy"></span><span class="txt">お問合せ</span></a>
  </nav>
  <ul class="c-fixed-cta">
    <li class="close"><img src="<?php echo $theme_uri; ?>/images/akewatashi/top/icon_cta_close.svg" width="26" height="26" alt="閉じるアイコン画像" class="icon"></li>
    <li class="c-fixed-cta__btn c-fixed-cta__btn--primary">
      <a href="<?php echo esc_url($lp['contact']); ?>">
        <span class="left">
          <img src="/assets_prev/images/common/icon_contact.svg" width="28" height="23" alt="メールのアイコン画像" class="icon">
          <span class="icon-txt">簡単5項目</span>
        </span>
        <span class="right">
          <span class="bold-txt">WEBで無料相談予約</span>
        </span>
      </a>
    </li>
    <li class="c-fixed-cta__btn c-fixed-cta__btn--secondary">
      <a href="tel:<?php echo esc_attr($lp['tel_href']); ?>">
        <span class="left">
          <img src="/assets_prev/images/common/icon_tel.svg" width="19" height="23" alt="電話のアイコン画像 <?php echo esc_attr($lp['tel_href']); ?>" class="icon">
          <span class="icon-txt">通話無料</span>
        </span>
        <span class="right">
          <span class="bold-txt">電話で無料相談予約</span>
          <span class="txt">9:00-21:00 土日祝も受付</span>
        </span>
      </a>
    </li>
  </ul>
</header>
<!-- header-lp-isyaryo -->
