<?php
$lp_config = rise_hiseikyu_lp_config(array(
  'title' => '不倫慰謝料減額コラム',
  'desc' => '不倫慰謝料の減額交渉に関するコラム一覧。慰謝料請求の条件や相場、注意点などを解説しています。',
  'styles' => array(
    'css/tokusetu/t_03_lower.css',
    'css/tokusetu/t_06_column.css',
    'css/tokusetu/t_common.css',
    'css/tokusetu/t_child-common.css',
    'css/tokusetu/t_column.css',
    'css/tokusetu/t_search.css',
  ),
));
set_query_var('lp_config', $lp_config);
get_template_part('template-parts/lp/header', 'isyaryo');
?>

<main id="t-akewatashi-column" class="isharyo-archive column archive">
  <h1 class="t-page-h1">不倫慰謝料減額コラム</h1>
  <nav class="t_breadcrumb">
    <ul>
      <li><a href="/hiseikyu/">不倫慰謝料減額トップ</a></li>
      <li>不倫慰謝料減額コラム</li>
    </ul>
  </nav>

  <div class="contents">
    <article class="article">
      <div class="article_inner archive">
        <?php
        $paged = get_query_var('paged') ? get_query_var('paged') : 1;
        $new_query = new WP_Query([
          'post_type'      => 'hiseikyu-column',
          'posts_per_page' => 9,
          'orderby'        => 'date',
          'order'          => 'DESC',
          'post_status'    => 'publish',
          'paged'          => $paged,
        ]);
        ?>
        <div class="article_block">
          <h2 class="pickup">新着記事</h2>
          <ul class="list">
            <?php if ($new_query->have_posts()) : ?>
              <?php while ($new_query->have_posts()) : $new_query->the_post(); ?>
                <?php get_template_part('template-parts/lp/hiseikyu-column', 'item'); ?>
              <?php endwhile; ?>
            <?php endif; ?>
          </ul>
          <nav class="pager">
            <?php
              if (function_exists('wp_pagenavi')) {
                wp_pagenavi(['query' => $new_query]);
              }
            ?>
          </nav>
          <?php wp_reset_postdata(); ?>
        </div>
      </div>
    </article>
    <?php get_template_part('template-parts/lp/hiseikyu-column', 'aside'); ?>
  </div>
  <?php get_template_part('sns'); ?>
</main>

<?php get_template_part('template-parts/lp/footer', 'isyaryo'); ?>
