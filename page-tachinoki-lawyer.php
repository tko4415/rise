<?php
/*
Template Name: 立ち退き特設 - 弁護士紹介
*/
?>

<?php
  get_template_part('template-parts/header', 'tachinoki');
?>

<?php
  $page = get_post(get_the_ID());
  $slug = $page->post_name;
?>
<main id="t-lawyer" class="<?php echo "tachinoki-" . $slug; ?>">

  <h1 class="t-page-h1">立ち退き料請求を得意とする弁護士紹介</h1>
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