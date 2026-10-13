<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Modaal/0.4.4/js/modaal.min.js" defer></script>
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/jquery.dualtab.js" defer></script>
<?php if ( is_front_page() ) : ?>
  <script src="<?php echo get_template_directory_uri(); ?>/js/TweenMax.min.js" defer></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/ScrollMagic.min.js" defer></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/plugins/animation.gsap.min.js" defer></script>
  <script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/home.js" defer></script>
<?php else: ?>
<?php endif; ?>
<?php if ( is_page_template( 'page-form.php' ) ) {
  echo '<script src="https://ajaxzip3.github.io/ajaxzip3.js" defer></script>';
  echo '<script src="'.esc_url(get_template_directory_uri()).'/js/form.js" defer></script>';
} ?>
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/common.js" defer></script>