<!doctype html>
<html class="no-js" lang="ja">
<head>

<meta charset="utf-8">
<?php
  if (rise_is_isharyo_page('top')):
    $t_title = "【無料相談】不倫・浮気の慰謝料請求を得意とする弁護士法人ライズ綜合法律事務所";
    $t_desc = "";
  elseif (rise_is_isharyo_page('price')):
    $t_title = "不倫慰謝料請求の弁護士費用";
    $t_desc = "";
  elseif (rise_is_isharyo_page('flow')):
    $t_title = "不倫慰謝料請求の解決までの流れ";
    $t_desc = "";
  elseif (rise_is_isharyo_page('lawyer')):
    $t_title = "不倫慰謝料請求を得意とする弁護士紹介";
    $t_desc = "";
  elseif (rise_is_isharyo_page('office')):
    $t_title = "事務所案内";
    $t_desc = "";
  elseif( is_archive( 'isharyo/column') ):
    $t_title = "不倫慰謝料請求コラム";
    $t_desc = "";
  elseif( is_singular( 'isharyo-column' ) ):
    $t_title = get_the_title();
    $t_desc = "";
  elseif (rise_is_isharyo_page('contact')):
    $t_title = "お問い合わせ";
    $t_desc = "";
  elseif (rise_is_isharyo_page('thanks')):
    $t_title = "お問合せを受け付けました。（不倫慰謝料請求）";
    $t_desc = "";
  endif;
?>
<!-- titleタグ -->
<!-- $titleに「弁護士法人ライズ綜合法律事務所」が含まれていないときだけ、「｜弁護士法人ライズ綜合法律事務所」を末尾に付与 -->
<?php
  if (strpos($t_title, '弁護士法人ライズ綜合法律事務所') === false) {
    if (rise_is_isharyo_page('contact') || rise_is_isharyo_page('office')) {
      $t_title .= '｜不倫慰謝料請求を得意とする弁護士法人ライズ綜合法律事務所';
    } else {
      $t_title .= '｜弁護士法人ライズ綜合法律事務所';
    }
  }
  $safe_title = wp_kses($t_title, array());
?>
<title><?php echo $safe_title; ?></title>
<meta property="og:title" content="<?php echo $safe_title; ?>">
<meta name="description" content="<?php echo $t_desc; ?>">
<meta property="og:description" content="<?php echo $t_desc; ?>">
<meta property="og:image" content="<?php bloginfo('url'); ?>/assets_prev/images/column/logo.png">
<meta property="og:site_name" content="ライズ綜合法律事務所">
<meta property="og:locale" content="ja_JP">
<meta property="og:url" content="<?php $http = is_ssl() ? 'https' : 'http' . '://';$url = $http . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];echo $url;?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php if (is_search( 'isharyo/search')): ?>
  <meta name="robots" content="noindex">
<?php endif; ?>

<link rel="icon" href="/favicon.png">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&family=Oswald:wght@300;500;600;700&family=Shippori+Mincho:wght@500;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

<!-- 立ち退き・明け渡し共通CSS -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style-tokusetu.css">
<!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style-akewatashi.css"> -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style-isharyo.css">

<!-- ページ別CSS -->
<?php if (rise_is_isharyo_page('top')): ?>
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"> -->
  <!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style-tokusetu.css"> -->
  <!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/akewatashi/common.css"> -->
  <!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/akewatashi/page.css"> -->
  <!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/akewatashi/add.css"> -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Mulish:wght@700&family=Tenor+Sans&family=Zen+Kaku+Gothic+New:wght@400;500;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/isharyo/top/reset.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/isharyo/top/style.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/tokusetu/t_common.css">
<?php elseif (rise_is_isharyo_page('price')): ?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/tokusetu/t_03_lower.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/tokusetu/t_common.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/tokusetu/t_child-common.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/tokusetu/t_price.css">
<?php elseif (rise_is_isharyo_page('flow')): ?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/tokusetu/t_03_lower.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/tokusetu/t_common.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/tokusetu/t_child-common.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/tokusetu/t_flow.css">
<?php elseif (rise_is_isharyo_page('lawyer')): ?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/tokusetu/t_03_lower.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/tokusetu/t_common.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/tokusetu/t_child-common.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/tokusetu/t_lawyer.css">
<?php elseif (rise_is_isharyo_page('office')): ?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/tokusetu/t_03_lower.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/tokusetu/t_common.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/tokusetu/t_child-common.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/tokusetu/t_office.css">
<?php elseif( is_archive('isharyo/column') || is_singular('isharyo-column') ): ?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/tokusetu/t_03_lower.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/tokusetu/t_06_column.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/tokusetu/t_common.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/tokusetu/t_child-common.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/tokusetu/t_column.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/tokusetu/t_search.css">
<?php elseif( is_search()): ?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/tokusetu/t_03_lower.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/tokusetu/t_06_column.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/tokusetu/t_common.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/tokusetu/t_child-common.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/tokusetu/t_column.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/tokusetu/t_search.css">
<?php elseif (rise_is_isharyo_page('contact') || rise_is_isharyo_page('thanks')): ?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/tokusetu/t_child-common.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/tokusetu/t_contact.css">
  <link rel="stylesheet" href="css/validationEngine.jquery.css">
<?php endif; ?>

<?php $rich_result = get_field('faq_rich_result'); if( $rich_result ){ echo $rich_result; } ?>

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

<body <?php body_class(); ?>>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MNG6GGZT');</script>
<!-- End Google Tag Manager -->

<header>
  <div id="spnav" class="spnav">
    <!-- <p class="spnav-txt">メニュー</p> -->
    <span class="spnav1"></span>
    <span class="spnav2"></span>
    <span class="spnav3"></span>
  </div>
  <div class="logo">
    <a href="/isharyo/">
      <p class="copy">不倫慰謝料請求を得意とする</p>
      <picture>
        <source srcset="/assets_prev/images/common/logo.webp" type="image/webp" width="682" height="114">
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
            <p class="tel">0120-657-001</p>
            <p class="small">9:00-21:00<br class="pc">土日祝も受付</p>
          </div>
        </div>
      </div>
      <div class="lower">
        <ul class="lv_1">
          <li class="single"><a href="/isharyo/price/">弁護士費用</a></li>
          <li class="single"><a href="/isharyo/flow/">解決までの流れ</a></li>
          <li class="single"><a href="/isharyo/lawyer/">弁護士紹介</a></li>
          <li class="single"><a href="/isharyo/office/">事務所案内</a></li>
          <li class="single"><a href="/isharyo/column/">不倫慰謝料コラム</a></li>
          <li class="single"><a href="/isharyo/contact/">お問い合わせ</a></li>
        </ul>
      </div>
    </div>
    <a href="/isharyo/contact/" class="contact pc"><span class="icon"><img src="/assets_prev/images/common/icon_contact.svg" alt="" width="22" height="18" loading="lazy"></span><span class="txt">お問合せ</span></a>
  </nav>
  <!-- <nav id="cnav" class="pc">
    <ul>
      <li class="block">
        <a href="/isharyo/contact/"><img src="/assets_prev/images/common/icon_contact.svg" alt="" width="22" height="18" loading="lazy"></a>
      </li>
      <li class="block">
        <a href="tel:0120657001"><img src="/assets_prev/images/common/icon_tel.svg" alt="" width="16" height="20" loading="lazy"></a>
      </li>
    </ul>
  </nav> -->
  <ul class="c-fixed-cta">
    <li class="close"><img src="<?php echo get_template_directory_uri(); ?>/images/akewatashi/top/icon_cta_close.svg" width="26" height="26" alt="閉じるアイコン画像" class="icon"></li>
    <li class="c-fixed-cta__btn c-fixed-cta__btn--primary">
      <a href="/isharyo/contact/">
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
      <a href="tel:0120657001">
        <span class="left">
          <img src="/assets_prev/images/common/icon_tel.svg" width="19" height="23" alt="電話のアイコン画像 0120657001" class="icon">
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
<!-- header-isharyo -->