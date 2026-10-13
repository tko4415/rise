<?php
/*
Template Name: 立ち退き特設 - 解決までの流れ
*/
?>

<?php
  get_template_part('template-parts/header', 'tachinoki');
?>

<?php
  $page = get_post(get_the_ID());
  $slug = $page->post_name;
?>
<main id="t-price" class="<?php echo "tachinoki-" . $slug; ?>">

  <h1 class="t-page-h1">立ち退き請求から解決までの交渉・裁判の流れ</h1>
  <?php get_template_part( 'template-parts/breadcrumb', 'tachinoki' ); ?>

  <?php if( have_posts() ) : ?>
    <?php while(have_posts()) : ?>
      <?php the_post(); ?>
      <?php the_content() ?>
    <?php endwhile; ?>
  <?php endif; ?>

</main>

<?php
  get_template_part('template-parts/footer', 'tachinoki');
?>