<?php
/*
Template Name: 債務整理特設 - 弁護士紹介
*/
?>

<?php
  get_template_part('template-parts/header', 'saimu');
?>

<?php
  $page = get_post(get_the_ID());
  $slug = $page->post_name;
?>
<main id="t-lawyer" class="<?php echo "saimu-" . $slug; ?> <?php echo "akewatashi-" . $slug; ?>">

  <h1 class="t-page-h1">債務整理を得意とする弁護士紹介</h1>
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