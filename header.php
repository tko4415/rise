<!doctype html>
<html class="no-js" lang="ja">
<head>
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-KK2MNBM9');</script>
  <!-- End Google Tag Manager -->
  <meta charset="utf-8">
  <?php if( is_front_page() ): ?>
    <title>弁護士法人ライズ綜合法律事務所</title>
    <meta property="og:title" content="弁護士法人ライズ綜合法律事務所">
    <meta name="description" content="<?php the_field('description') ?>">
    <meta property="og:description" content="<?php the_field('description') ?>">
  <?php elseif( is_archive('column') ): ?>
    <title>法律コラム | 弁護士法人ライズ綜合法律事務所</title>
    <meta property="og:title" content="法律コラム | 弁護士法人ライズ綜合法律事務所">
    <meta name="description" content="弁護士法人ライズ綜合法律事務所の法律コラムです。">
    <meta property="og:description" content="弁護士法人ライズ綜合法律事務所の法律コラムです。">
    <?php elseif( is_search() ): ?>
    <title>検索結果 | 法律コラム | 弁護士法人ライズ綜合法律事務所</title>
    <meta property="og:title" content="検索結果 | 法律コラム | 弁護士法人ライズ綜合法律事務所">
    <meta name="description" content="弁護士法人ライズ綜合法律事務所の法律コラムです。">
    <meta property="og:description" content="弁護士法人ライズ綜合法律事務所の法律コラムです。">
  <?php elseif( is_home() || is_archive() ): ?>
    <title>新着情報 | 弁護士法人ライズ綜合法律事務所</title>
    <meta name="description" content="弁護士法人ライズ綜合法律事務所の新着情報です。">
    <meta property="og:title" content="新着情報 | 弁護士法人ライズ綜合法律事務所">
    <meta property="og:description" content="弁護士法人ライズ綜合法律事務所の新着情報です。">
  <?php elseif( is_singular('column') ) : ?>
  <?php
      echo '<title>'. get_the_title() .' | 法律コラム | 弁護士法人ライズ綜合法律事務所</title>'.PHP_EOL;
      echo '  <meta property="og:title" content="'. get_the_title()  . ' | 法律コラム | 弁護士法人ライズ綜合法律事務所">'.PHP_EOL;
      $desc = '';
      if(get_field('outline')) {
        $desc = strip_tags(get_field('outline'));
      } else {
        $desc = strip_tags(get_field('bodycopy'));
      }
      $desc = str_replace(array("\r\n", "\r", "\n"), "", $desc);
      $desc = wp_trim_words($desc,116,'...');
    echo '  <meta name="description" content="'. $desc . '">'.PHP_EOL;
    echo '  <meta property="og:description" content="'. $desc . '>"'.PHP_EOL;
  ?>
  <?php elseif( is_page() ): ?>
  <?php
      $ttl = wp_trim_words( get_the_title(), 24, '...' ); // 現在の投稿のタイトルを字数制限して表示
      $flag_i = false;
      $flag_c = false;
      $flag_o = false;
      if( $post -> post_parent != 0 ){ // 投稿の親ページがあるかどうかを判別
        $ancestors = $post->ancestors; // 投稿の祖先ページの ID を配列として取得
        foreach($ancestors as $ancestor){
          $s = get_page_uri($ancestor);
          if($s == 'indivisual') { $flag_i = true; }
          elseif($s == 'corporate') { $flag_c = true; }
          elseif($s == 'office') { $flag_o = true;}
          $ttl = $ttl. ' | ' . get_the_title($ancestor); // 親ページの URL とタイトルを表示
        }
      }
      echo '<title>'.$ttl.' | 弁護士法人ライズ綜合法律事務所</title>'.PHP_EOL;
      echo '  <meta property="og:title" content="'.$ttl.' | 弁護士法人ライズ綜合法律事務所">'.PHP_EOL;
  ?>
  <meta name="description" content="<?php the_field('description') ?>">
  <meta property="og:description" content="<?php the_field('description') ?>">
  <?php endif; ?>
  <meta property="og:image" content="<?php bloginfo('url'); ?>/assets/images/column/logo.png">
  <meta property="og:site_name" content="弁護士法人ライズ綜合法律事務所">
  <meta property="og:locale" content="ja_JP">
  <meta property="og:url" content="<?php $http = is_ssl() ? 'https' : 'http' . '://';$url = $http . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];echo $url;?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="/favicon.png">
  <link rel="stylesheet" href="/assets/css/reset.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
  <link rel="stylesheet" href="/assets/lib/slick/slick.css">
  <link rel="stylesheet" href="/assets/lib/slick/slick-theme.css">
  <link rel="stylesheet" href="/assets/css/style.css?ver202608">
  <?php if( is_front_page() ): ?>
  <link rel="stylesheet" href="/assets/css/top.css?ver202608">
  <?php endif; ?>
  <?php if (is_page('service') || is_page('saiken') || is_parent_slug() === 'service' || is_parent_slug() === 'kojin'|| is_parent_slug() === 'hojin'): ?>
  <link rel="stylesheet" href="/assets/css/service.css?ver2026">
  <?php elseif (is_page('about') || is_parent_slug() === 'about'): ?>
  <link rel="stylesheet" href="/assets/css/about.css?ver2026">
  <?php elseif (is_page('lawyer')) : ?>
  <link rel="stylesheet" href="/assets/lib/remodal/remodal.css">
  <link rel="stylesheet" href="/assets/lib/remodal/remodal-default-theme.css">
  <?php endif; ?>
  <?php if( is_front_page() ): ?>
  <?php else: ?>
  <link rel="stylesheet" href="/assets/css/lower.css?ver2026">
  <?php endif; ?>

  <?php
/**
 * カテゴリ用のパンくずリストのカスタマイズ
 * @author: わいひら
 * @link: https://nelog.jp/schema-org-breadcrumblist
 * @license: http://www.gnu.org/licenses/gpl-2.0.html GPL v2 or later

if (is_single() || is_category() || is_singular('column')){
  $cats = get_the_category();
  $cat = ((is_single() || is_singular('column')) && isset($cats[0])) ? $cats[0] : get_category(get_query_var("cat"));
  if($cat && !is_wp_error($cat)){
    $echo = null;
    $root_text = 'ホーム';
    echo '<div id="breadcrumb" class="breadcrumb breadcrumb-categor" itemscope itemtype="https://schema.org/BreadcrumbList">';
    echo '<span class="breadcrumb-home" itemscope itemtype="https://schema.org/ListItem" itemprop="itemListElement"><span class="fa fa-home fa-fw" aria-hidden="true"></span><a href="'.esc_url(get_home_url()).'" itemprop="item"><span itemprop="name">'.esc_html($root_text).'</span></a><meta itemprop="position" content="1" /><span class="sp"><span class="fa fa-angle-right" aria-hidden="true"></span></span></span>';
    $count = 1;
    $par = get_category($cat->parent);
    //カテゴリ情報の取得
    $cats = array();
    while($par && !is_wp_error($par) && $par->term_id != 0){
      $cats[] = $par;
      $par = get_category($par->parent);
    }
    //カテゴリの順番入れ替え
    $cats = array_reverse($cats);
    //先祖カテゴリの出力
    foreach ($cats as $par) {
      ++$count;
      $echo .= '<span class="breadcrumb-item" itemscope itemtype="https://schema.org/ListItem" itemprop="itemListElement"><span class="fa fa-folder fa-fw" aria-hidden="true"></span><a href="'.esc_url(get_category_link($par->term_id)).'" itemprop="item"><span itemprop="name">'.esc_html($par->name).'</span></a><meta itemprop="position" content="'.$count.'" /><span class="sp"><span class="fa fa-angle-right" aria-hidden="true"></span></span></span>';
    }
    // 現カテゴリの出力
    ++$count;
    echo $echo.'<span class="breadcrumb-item" itemscope itemtype="https://schema.org/ListItem" itemprop="itemListElement"><span class="fa fa-folder fa-fw" aria-hidden="true"></span><a href="'.esc_url(get_category_link($cat->term_id)).'" itemprop="item"><span itemprop="name">'.esc_html($cat->name).'</span></a><meta itemprop="position" content="'.$count.'" />';
    echo '</span>';

    echo '</div><!-- /#breadcrumb -->';
  }
} //is_single */ ?>

<?php $rich_result = get_field('faq_rich_result'); if( $rich_result ){ echo $rich_result; }?>
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-NDHT8Z3');</script>
  <!-- End Google Tag Manager -->
  <?php wp_head(); ?>

  <?php if( is_front_page() ): ?>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "LegalService",
      "@id": "https://risesogo.jp/#organization",
      "name": "弁護士法人ライズ綜合法律事務所",
      "alternateName": "ライズ綜合法律事務所",
      "url": "https://risesogo.jp/",
      "logo": {
        "@type": "ImageObject",
        "url": "https://risesogo.jp/assets/images/common/logo.png"
      },
      "telephone": "0120-657-001",
      "areaServed": {
        "@type": "Country",
        "name": "JP"
      },
      "knowsAbout": [
        "債務整理",
        "任意整理",
        "自己破産",
        "個人再生",
        "過払い金請求",
        "不倫慰謝料請求",
        "離婚問題",
        "債権回収",
        "立退料交渉",
        "交通事故",
        "B型肝炎給付金請求"
      ],
      "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "0120-657-001",
        "contactType": "customer service",
        "areaServed": "JP",
        "availableLanguage": "Japanese"
      }
    }
    </script>
  <?php elseif (is_page('office')) : ?>
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "LegalService",
          "@id": "https://risesogo.jp/office/#tokyo-main",
          "name": "弁護士法人ライズ綜合法律事務所 東京本店事務所",
          "url": "https://risesogo.jp/office/",
          "telephone": "03-6630-7900",
          "faxNumber": "03-6630-7901",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "日本橋3-9-1 日本橋三丁目スクエア12階",
            "addressLocality": "中央区",
            "addressRegion": "東京都",
            "postalCode": "103-0027",
            "addressCountry": "JP"
          },
          "hasMap": "https://maps.app.goo.gl/8HVPRyDB96iUUr8r8",
          "parentOrganization": {
            "@id": "https://risesogo.jp/#organization"
          }
        },
        {
          "@type": "LegalService",
          "@id": "https://risesogo.jp/office/#tokyo-chuo",
          "name": "弁護士法人ライズ綜合法律事務所 東京中央事務所",
          "url": "https://risesogo.jp/office/",
          "telephone": "03-6633-8122",
          "faxNumber": "03-6633-8133",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "八丁堀3-12-8 HF八丁堀ビルディング2F",
            "addressLocality": "中央区",
            "addressRegion": "東京都",
            "postalCode": "104-0032",
            "addressCountry": "JP"
          },
          "parentOrganization": {
            "@id": "https://risesogo.jp/#organization"
          }
        },
        {
          "@type": "LegalService",
          "@id": "https://risesogo.jp/office/#osaka",
          "name": "弁護士法人ライズ綜合法律事務所 大阪事務所",
          "url": "https://risesogo.jp/office/",
          "telephone": "06-6393-3111",
          "faxNumber": "06-6393-3112",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "宮原4-1-45 新大阪八千代ビル5階",
            "addressLocality": "淀川区",
            "addressRegion": "大阪府",
            "postalCode": "532-0003",
            "addressCountry": "JP"
          },
          "hasMap": "https://maps.app.goo.gl/y5m6ujpuGveZ4BuQ9",
          "parentOrganization": {
            "@id": "https://risesogo.jp/#organization"
          }
        }
      ]
    }
    </script>
  <?php endif; ?>
</head>
<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KK2MNBM9"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NDHT8Z3"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <header id="header" <?php if(is_single('column') || is_archive('column')){echo 'class="column"';} ?><?php if(is_front_page()){echo 'class="sitetop"';} ?>>
    <h1 class="logo"><a href="/"><img src="/assets/images/common/logo.svg" alt="弁護士法人ライズ綜合法律事務所"></a></h1>
    <nav class="headerbtn">
      <div id="contactbutton"><span class="icon"><img src="/assets/images/common/icon_contact.svg" alt="お問合せ"></span><span class="txt">お問合せ</span></div>
      <div id="menubutton"><span></span><span></span></div>
    </nav>
    <nav id="gnav">
      <div class="main mainnav">
        <ul class="list lv1">
          <li>
            <a href="/about/">私たちの強み</a>
          </li>
          <li class="service">
            <a href="/service/">サービス紹介</a>
            <ul class=" lv2">
              <li class="indivisual"><a href="/service/kojin/"><span class="_pc">ー </span>個人のご相談</a>
                <ul class="lv3">
                  <li class="saimu"><a href="/service/kojin/saimu/">債務整理</a>
                    <ul class="lv4">
                      <li><a href="/service/kojin/saimu/seiri/">任意整理</a></li>
                      <li><a href="/service/kojin/saimu/kabarai/">過払い金</a></li>
                      <li><a href="/service/kojin/saimu/hasan/">自己破産</a></li>
                      <li><a href="/service/kojin/saimu/saisei/">民事再生</a></li>
                    </ul>
                  </li>
                  <li><a href="/service/kojin/isharyo/">不倫慰謝料/離婚問題</a></li>
                  <li><a href="/service/kojin/jiage/">地上げ交渉サービス</a></li>
                  <li><a href="/service/kojin/tachinoki/">立退料交渉サービス</a></li>
                  <li><a href="/service/kojin/kotsujiko/">交通事故</a></li>
                  <li><a href="/service/kojin/bkan/">B型肝炎給付金請求</a></li>
                </ul>
              </li>
            </ul>
            <ul class="lv2">
              <li>
                <a href="/service/hojin/"><span class="_pc">ー </span>法人のご相談</a>
                <ul class="lv3">
                  <li><a href="/service/hojin/tachinoki/">立退料交渉サービス（法人）</a></li>
                  <li><a href="/service/hojin/saiken/">債権回収</a>
                  <li><a href="/service/hojin/shikikin/">敷金保証金回収サービス（法人）</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="sub">
            <ul>
              <li><a href="/office/">事務所案内</a></li>
              <li><a href="/lawyer/">弁護士紹介</a></li>
              <li><a href="/price/">費用について</a></li>
              <li><a href="/column/">法律コラム</a></li>
              <li class="news"><a href="/news/">お知らせ</a></li>
              <li><a href="http://risesogo-recruit.jp/" target="_blank">採用情報</a></li>
              <li class="contact"><a class="btn_contact" href="/contact/"><span class="icon"><img src="/assets/images/common/icon_contact.svg" alt="お問合せ"></span><span class="txt">お問合わせ</span></a></li>
            </ul>
          </li>
        </ul>
      </div>
      <footer class="footer">
        <ul class="list">
          <ul>
            <li><a href="/privacy/">プライバシーポリシー</a></li>
            <li><a href="/cookie/">クッキーポリシー</a></li>
            <li><a href="/harassment/">ハラスメント防止に関する基本方針</a></li>
            <li><a href="/sitemap/">サイトマップ</a></li>
          </ul>
        </ul>
        <p class="copyright">Copyright © 弁護士法人ライズ綜合法律事務所 All rights reserved.</p>
      </footer>
    </nav>
    <nav id="contactnav">
      <div class="block">
        <p class="time _sp"><strong>受付時間</strong><span>9:00-21:00 ※土日祝も受付</span></p>
        <div class="frame">
          <h2>ご相談専用フリーダイヤル</h2>
          <a href="tel:0120-657-001" class="num"><span class="icon _sp"><img src="/assets/images/common/icon_tel_contactnav.svg" alt="電話"></span><span class="txt">0120-657-001</span></a>
        </div>
        <p class="note _pc">9:00-21:00 ※土日祝も受付</p>
      </div>
      <div class="block">
        <p class="time _sp"><strong>受付時間 債権管理部門</strong><span>平日9:00-19:00</span></p>
        <div class="frame">
          <h2>当法人から<br class="_pc">通知･メール･SMSが届いた皆様<span class="_pc"><br>※末尾の番号は8123</span></h2>
          <a href="tel:0120-657-001" class="num"><span class="icon _sp"><img src="/assets/images/common/icon_tel_contactnav.svg" alt="電話"></span><span class="txt">03-6633-8122</span></a>
        </div>
        <p class="matsubi _sp">※末尾の番号は8123</p>
        <p class="note _pc">【債権管理部門】平日9:00-19:00 </p>
      </div>
      <div class="btn"><a class="btn_contact" href="/contact/"><span class="icon"><img src="/assets/images/common/icon_contact.svg" alt="ご相談フォーム"></span><span class="txt">ご相談フォーム</span></a></div>
      <div class="close">close<span></span></div>
    </nav>
  </header>



