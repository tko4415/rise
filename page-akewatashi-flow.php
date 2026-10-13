<?php
/*
Template Name: 明け渡し特設 - 解決までの流れ
*/
?>

<?php
  get_template_part('template-parts/header', 'akewatashi');
?>

<?php
  $page = get_post(get_the_ID());
  $slug = $page->post_name;
?>
<main id="t-flow" class="<?php echo "akewatashi-" . $slug; ?>">

  <h1 class="t-page-h1">立ち退き交渉・建物明渡請求の解決までの流れ</h1>
  <?php get_template_part( 'template-parts/breadcrumb', 'akewatashi' ); ?>

  <?php if( have_posts() ) : ?>
    <?php while(have_posts()) : ?>
      <?php the_post(); ?>
      <?php the_content() ?>
    <?php endwhile; ?>
  <?php endif; ?>

</main>

<?php
  get_template_part('template-parts/footer', 'akewatashi');
?>