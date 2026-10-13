<?php
  get_template_part('template-parts/header', 'isharyo');
?>

<?php
  $page = get_post(get_the_ID());
  $slug = $page->post_name;
?>
<main id="t-akewatashi-column" class="<?php echo "akewatashi-" . $slug; ?> <?php echo "isharyo-" . $slug; ?> column archive isharyo-archive">

  <h1 class="t-page-h1">不倫慰謝料請求コラム</h1>
  <?php get_template_part( 'template-parts/breadcrumb', 'isharyo' ); ?>

  <!-- <section id="mv"><h2 class="pagettl">立ち退きコラム</h2></section> -->

  <div class="contents">
    <article class="article">
      <div class="article_inner archive">

        <?php
        /**
         * 新着記事 9件ずつ表示
         */
        $paged = get_query_var('paged') ? get_query_var('paged') : 1;
        $new_query = new WP_Query([
          'post_type'      => 'isharyo-column',
          'posts_per_page' => 9,
          'orderby'        => 'date',
          'order'          => 'DESC',
          'post_status'    => 'publish',
          'paged'          => $paged
        ]);
        ?>
        <div class="article_block">
          <h2 class="pickup">新着記事</h2>
          <ul class="list">
            <?php if ($new_query->have_posts()) : ?>
              <?php while ($new_query->have_posts()) : $new_query->the_post(); ?>
                <?php get_template_part('template-parts/isharyo_column_list_item'); ?>
              <?php endwhile; ?>
            <?php endif; ?>
          </ul>
          <nav class="pager">
            <?php
              if(function_exists('wp_pagenavi')) {
                wp_pagenavi(['query' => $new_query]);
              }
            ?>
          </nav>
          <?php wp_reset_postdata(); ?>
        </div>
      </div>
    </article>
    <?php get_template_part('column_aside_isharyo');?>
  </div>
  <?php get_template_part('sns');?>
</main>

<?php
  get_template_part('template-parts/footer', 'isharyo');
?>
