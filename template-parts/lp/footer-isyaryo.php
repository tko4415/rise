<?php
  $lp = wp_parse_args(get_query_var('lp_config', array()), array(
    'home' => '/hiseikyu/',
    'copy' => '不倫慰謝料の減額交渉を得意とする',
    'contact' => '/hiseikyu/contact/',
    'tel' => '0120-657-001',
    'tel_href' => '0120657001',
    'nav' => array(),
    'scripts' => array(),
    'contact_form' => false,
  ));
  $theme_uri = get_template_directory_uri();
  $footer_nav = !empty($lp['footer_nav']) ? $lp['footer_nav'] : array_merge($lp['nav'], array(
    array('label' => 'お問い合わせ', 'url' => $lp['contact']),
  ));
?>
<!-- footer-lp-isyaryo -->
<footer id="footer" class="footer-isharyo">
  <div class="upper">
    <div class="inner scrollin sc_regular">
      <div class="hgroup">
        <h2>お悩みをお聞かせください</h2>
        <p>弁護士法人ライズ綜合法律事務所は、ご依頼者様にとって最も良い解決方法を提案いたします。</p>
      </div>
      <ul class="method">
        <li class="block">
          <p class="icon"><img src="/assets_prev/images/common/icon_tel.svg" alt="" width="16" height="20" loading="lazy"></p>
          <h3 class="heading">お電話でのお問合せ</h3>
          <p class="num"><a href="tel:<?php echo esc_attr($lp['tel_href']); ?>"><?php echo esc_html($lp['tel']); ?></a></p>
        </li>
        <li class="block">
          <p class="icon"><img src="/assets_prev/images/common/icon_contact.svg" alt="" width="22" height="18" loading="lazy"></p>
          <h3 class="heading">メールでのお問合せ</h3>
          <a href="<?php echo esc_url($lp['contact']); ?>" class="btn btn_band_tp">ご相談フォーム</a>
        </li>
      </ul>
    </div>
  </div>
  <div class="lower">
    <div class="inner">
      <div class="logo">
        <a href="<?php echo esc_url($lp['home']); ?>">
          <p class="copy"><?php echo esc_html($lp['copy']); ?></p>
          <picture>
            <source srcset="/assets_prev/images/common/logo_white.webp" type="image/webp" width="682" height="114">
            <img src="/assets_prev/images/common/logo_white.png" alt="ライズ綜合法律事務所" width="682" height="114">
          </picture>
        </a>
      </div>
      <nav>
        <div class="block">
          <ul>
            <?php foreach ($footer_nav as $item) : ?>
              <li><a href="<?php echo esc_url($item['url']); ?>"><?php echo esc_html($item['label']); ?></a></li>
            <?php endforeach; ?>
          </ul>
        </div>
      </nav>
    </div>
    <p class="copyright">Copyright (C) 弁護士法人ライズ綜合法律事務所.<br>
      All Rights Reserved.
    </p>
  </div>
</footer>

<script src="<?php echo $theme_uri; ?>/js/tachinoki/jquery-3.6.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js" defer></script>
<?php if (!empty($lp['contact_form'])) : ?>
<script src="<?php echo $theme_uri; ?>/js/tachinoki/jquery.validationEngine.min.js" defer></script>
<script src="<?php echo $theme_uri; ?>/js/tachinoki/jquery.validationEngine-ja.js" defer></script>
<script src="<?php echo $theme_uri; ?>/js/tachinoki/ajaxzip3.js" defer></script>
<?php endif; ?>
<script src="<?php echo $theme_uri; ?>/js/tachinoki/t_common.js" defer></script>
<script src="<?php echo $theme_uri; ?>/js/akewatashi/common.js" defer></script>
<?php if (is_post_type_archive('hiseikyu-column') || is_singular('hiseikyu-column')) : ?>
<script src="/assets_prev/js/sam.js"></script>
<?php endif; ?>
<?php if (!empty($lp['contact_form'])) : ?>
<script>
  $(document).ready(function(){
    $("form").validationEngine();
  });
</script>
<?php endif; ?>
<?php foreach ((array) $lp['scripts'] as $script) :
  $script_rel = ltrim($script, '/');
  $script_path = get_template_directory() . '/' . $script_rel;
  $ver = file_exists($script_path) ? filemtime($script_path) : time();
?>
<script src="<?php echo esc_url($theme_uri . '/' . $script_rel . '?ver=' . $ver); ?>" defer></script>
<?php endforeach; ?>

</body>
<?php wp_footer(); ?>
</html>
