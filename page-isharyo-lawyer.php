<?php
/*
Template Name: 不倫慰謝料請求 - 弁護士紹介
*/
?>

<?php
  get_template_part('template-parts/header', 'isharyo');
?>

<?php
  $page = get_post(get_the_ID());
  $slug = $page->post_name;
?>
<main id="t-lawyer" class="<?php echo "isharyo-" . $slug; ?> <?php echo "akewatashi-" . $slug; ?>">

  <h1 class="t-page-h1">不倫慰謝料請求を得意とする弁護士紹介</h1>
  <?php get_template_part( 'template-parts/breadcrumb', 'isharyo' ); ?>

  <?php if( have_posts() ) : ?>
    <?php while(have_posts()) : ?>
      <?php the_post(); ?>
      <?php the_content() ?>
    <?php endwhile; ?>
  <?php endif; ?>

</main>

<?php
  get_template_part('template-parts/footer', 'isharyo');
?>