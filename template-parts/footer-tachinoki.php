
  <footer id="footer">
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
            <p class="num"><a href="tel:0120657001">0120-657-001</a></p>
          </li>
          <li class="block">
            <p class="icon"><img src="/assets_prev/images/common/icon_contact.svg" alt="" width="22" height="18" loading="lazy"></p>
            <h3 class="heading">メールでのお問合せ</h3>
            <a href="/tachinoki/contact/" class="btn btn_band_tp">ご相談フォーム</a>
          </li>
        </ul>
      </div>
    </div>
    <div class="lower">
      <div class="inner">
        <div class="logo">
          <a href="/tachinoki/">
            <p class="copy">立ち退き料請求を得意とする</p>
            <picture>
              <source srcset="/assets_prev/images/common/logo.webp" type="image/webp" width="682" height="114">
              <img src="/assets_prev/images/common/logo.png" alt="ライズ綜合法律事務所" width="682" height="114">
            </picture>
          </a>
        </div>
        <nav>
          <div class="block">
            <ul>
              <li><a href="/tachinoki/price/">弁護士費用</a></li>
              <li><a href="/tachinoki/flow/">解決までの流れ</a></li>
              <li><a href="/tachinoki/lawyer/">弁護士紹介</a></li>
              <li><a href="/tachinoki/office/">事務所案内</a></li>
              <li><a href="/tachinoki/column/">立ち退きコラム</a></li>
              <li><a href="/tachinoki/contact/">お問い合わせ</a></li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </footer>

  <script src="<?php echo get_template_directory_uri(); ?>/js/tachinoki/jquery-3.6.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/tachinoki/t_common.js?ver1"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/tachinoki/jquery.validationEngine.min.js" defer></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/tachinoki/jquery.validationEngine-ja.js" defer></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/tachinoki/ajaxzip3.js" defer></script>
  <script src="https://www.google.com/recaptcha/api.js?render=6LfgxUEqAAAAAOiLIN3O-5W45vznPcNDvrpA1fph"></script>
  <?php if( is_archive('tachinoki/column') || is_singular('tachinoki-column') ): ?>
    <script src="/assets_prev/js/sam.js?ver1"></script>
  <?php endif; ?>
  

  <!-- reCAPTCHA用API & 読み込み実行スクリプト -->
  <!-- お問い合わせが入っているページのみ -->
  <?php if( is_page( 'akewatashi/contact' ) ): ?>
  <script>
    grecaptcha.ready(function() {
        grecaptcha.execute('6LfgxUEqAAAAAOiLIN3O-5W45vznPcNDvrpA1fph', {action: 'submit'}).then(function(token) {
            var recaptchaResponse = document.getElementById('recaptchaResponse');
            var recaptchaResponse2 = document.getElementById('recaptchaResponse2');
            recaptchaResponse.value = token;
            recaptchaResponse2.value = token;
        });
    });
    function btnSubmit_onclick(code){
      alert();
      if(code!=""){
      }
    }
  </script>
  <?php endif; ?>

</body>
<?php wp_footer(); ?>
</html>