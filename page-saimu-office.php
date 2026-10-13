<?php
/*
Template Name: 債務整理特設 - office
*/
?>

<?php
  get_template_part('template-parts/header', 'saimu');
?>

<?php
  $page = get_post(get_the_ID());
  $slug = $page->post_name;
?>
<main id="t-office" class="<?php echo "saimu-" . $slug; ?> <?php echo "akewatashi-" . $slug; ?> office">

  <h1 class="t-page-h1">事務所案内</h1>
  <?php get_template_part( 'template-parts/breadcrumb', 'saimu' ); ?>

  <?php if( have_posts() ) : ?>
    <?php while(have_posts()) : ?>
      <?php the_post(); ?>
      <?php the_content() ?>
    <?php endwhile; ?>
  <?php endif; ?>

</main>

<?php
  get_template_part('template-parts/footer', 'saimu');
?>