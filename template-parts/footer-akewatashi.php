
<!-- footer-akewatashi -->
<footer id="footer" class="footer-akewatashi">
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
          <p class="copy">立ち退き交渉・建物明渡請求を得意とする</p>
          <picture>
            <source srcset="/assets_prev/images/common/logo_white.webp" type="image/webp" width="682" height="114">
            <img src="/assets_prev/images/common/logo_white.png" alt="ライズ綜合法律事務所" width="682" height="114">
          </picture>
        </a>
      </div>
      <nav>
        <div class="block">
          <ul>
            <li><a href="/akewatashi/price/">弁護士費用</a></li>
            <li><a href="/akewatashi/flow/">解決までの流れ</a></li>
            <li><a href="/akewatashi/lawyer/">弁護士紹介</a></li>
            <li><a href="/akewatashi/office/">事務所紹介</a></li>
            <li><a href="/akewatashi/column/">立ち退き交渉・建物明渡請求コラム</a></li>
            <li><a href="/akewatashi/contact/">お問い合わせ</a></li>
          </ul>
        </div>
      </nav>
    </div>
    <p class="copyright">Copyright (C) 弁護士法人ライズ綜合法律事務所.<br>
      All Rights Reserved.
    </p>
  </div>
</footer>

<!-- js読み込み -->
<!-- プラグイン -->
<script src="<?php echo get_template_directory_uri(); ?>/js/tachinoki/jquery-3.6.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js" defer></script>
<!-- フォーム系プラグイン -->
<script src="<?php echo get_template_directory_uri(); ?>/js/tachinoki/jquery.validationEngine.min.js" defer></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/tachinoki/jquery.validationEngine-ja.js" defer></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/tachinoki/ajaxzip3.js" defer></script>
<!-- 個別共通js（ハンバーガー含む） -->
<script src="<?php echo get_template_directory_uri(); ?>/js/tachinoki/t_common.js?ver1" defer></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/akewatashi/common.js" defer></script>

<!-- 建物明渡請求用js -->
<?php if( is_page( 'akewatashi') ): ?>
  <script src="<?php echo get_template_directory_uri(); ?>/js/akewatashi/common.js" defer></script>
<?php endif; ?>

<?php if( is_archive('akewatashi/column') || is_singular('akewatashi-column') ): ?>
  <script src="/assets_prev/js/sam.js?ver1"></script>
<?php endif; ?>


<!-- reCAPTCHA用API & 読み込み実行スクリプト -->
<!-- お問い合わせが入っているページのみ -->
<?php if( is_page( 'akewatashi/contact' ) ): ?>
  <script src="https://www.google.com/recaptcha/api.js?render=6LfgxUEqAAAAAOiLIN3O-5W45vznPcNDvrpA1fph"></script>
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

<!-- /js読み込み -->

</body>
<?php wp_footer(); ?>
</html>