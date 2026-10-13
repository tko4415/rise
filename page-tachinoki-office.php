<?php
/*
Template Name: 立ち退き特設 - office
*/
?>

<?php
  get_template_part('template-parts/header', 'tachinoki');
?>

<?php
  $page = get_post(get_the_ID());
  $slug = $page->post_name;
?>
<main id="t-office" class="<?php echo "tachinoki-" . $slug; ?>">

  <h1 class="t-page-h1">事務所案内</h1>
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