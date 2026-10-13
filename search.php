<?php
// 追記：エラー回避のためのダミーデータ生成（0件の時に$postが空になるのを防ぐ）
  global $post;
  if ( empty($post) ) {
    $post = new stdClass();
    $post->ID = 0;
    $post->post_parent = 0;
    $post->post_type = get_query_var('post_type', 'any');
  }

  $post_type = get_query_var('post_type', 'any');
  $page_ttl = "法律コラム";
  $bread_link = "/column/";

  if ($post_type === 'tachinoki-column'){
    $page_ttl = "立ち退きコラム";
    $bread_link = "/tachinoki/column/";

  } elseif ($post_type === 'akewatashi-column'){
    $page_ttl = "立ち退き交渉・<br class='sp'>建物明渡請求コラム";
    $bread_link = "/akewatashi/column/";

  } elseif ($post_type === 'saimu-column'){
    $page_ttl = "債務整理コラム";
    $bread_link = "/saimu/column/";

  } elseif ($post_type === 'isharyo-column'){
    $page_ttl = "不倫慰謝料コラム";
    $bread_link = "/isharyo/column/";

  } elseif ($post_type === 'hiseikyu-column'){
    $page_ttl = "不倫慰謝料減額コラム";
    $bread_link = "/hiseikyu/column/";

  }

  if ($post_type === 'tachinoki-column') {
    get_template_part('template-parts/header', 'tachinoki');
  } elseif ($post_type === 'akewatashi-column') {
    get_template_part('template-parts/header', 'akewatashi');
  } elseif ($post_type === 'saimu-column') {
    get_template_part('template-parts/header', 'saimu');
  } elseif ($post_type === 'isharyo-column') {
    get_template_part('template-parts/header', 'isharyo');
  } elseif ($post_type === 'hiseikyu-column') {
    $lp_config = rise_hiseikyu_lp_config(array(
      'title' => '不倫慰謝料減額コラム｜弁護士法人ライズ綜合法律事務所',
      'desc' => '',
      'noindex' => true,
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
  } else {
    get_header();
  }
?>

<?php
  // ====== ここで検索クエリを作り直す ======
  $paged = get_query_var('paged') ? get_query_var('paged') : 1;

  $args = [
    's'              => get_search_query(),
    'post_type'      => $post_type,
    'posts_per_page' => 9,
    'paged'          => $paged,
  ];

  $search_query = new WP_Query($args);
?>
<main class="column archive">
    <section id="mv"><h2 class="pagettl"><?php echo $page_ttl; ?></h2></section>

    <?php if ($post_type === 'tachinoki-column' || $post_type === 'akewatashi-column' || $post_type === 'saimu-column' || $post_type === 'isharyo-column' || $post_type === 'hiseikyu-column') : ?>
    <?php
    // 立ち退きコラム・建物明け渡し請求コラム・債務整理コラム・不倫慰謝料コラム用パンくず
      if ($post_type === 'tachinoki-column') {
        get_template_part('template-parts/breadcrumb', 'tachinoki');
      } elseif ($post_type === 'akewatashi-column') {
        get_template_part('template-parts/breadcrumb', 'akewatashi');
      } elseif ($post_type === 'saimu-column') {
        get_template_part('template-parts/breadcrumb', 'saimu');
      } elseif ($post_type === 'isharyo-column') {
        get_template_part('template-parts/breadcrumb', 'isharyo');
      } elseif ($post_type === 'hiseikyu-column') {
        ?>
    <nav class="t_breadcrumb">
      <ul>
        <li><a href="/hiseikyu/">不倫慰謝料減額トップ</a></li>
        <li>コラム一覧</li>
      </ul>
    </nav>
        <?php
      }
    ?>
    <?php else : ?>
    <!-- 法律コラム用パンくず -->
    <div class="topicpath">
      <div class="inner">
        <ul >
          <li><a href="/">TOP</a></li>
          <li><a href="<?php echo $bread_link;?>"><?php echo $page_ttl; ?></a></li>
          <li><?php echo '｢ '.$_GET['s'] .' ｣ の検索結果'; ?></li>
        </ul>
      </div>
    </div>
    <?php endif; ?>

    <div class="contents">
      <article class="article">
      <div class="article_inner archive">
        <h2>
          <?php
            if (isset($_GET['s']) && empty($_GET['s'])) {
              echo '検索キーワード未入力'; // 検索キーワードが未入力の場合のテキストを指定
            } else {
              echo '｢ '.$_GET['s'] .' ｣ の検索結果　'.$search_query->found_posts .'件'; // 検索キーワードと該当件数を表示
            }
          ?>
        </h2>
        <ul class="list">
          <?php if($search_query->have_posts()) : while($search_query->have_posts()) : $search_query->the_post(); ?>
          <li>
            <a href="<?php the_permalink(); ?>">
              <div class="hgroup">
                <?php
                  $post_time = get_the_time('U');
                  $days = 14; //New!を表示させる日数
                  $last = time() - ($days * 24 * 60 * 60);
                  if ($post_time > $last) {
                  echo '<p class="new">NEW</p>';
                  }
                ?>
                <p class="category">
                <?php
                  $terms = get_the_terms($post->ID, 'column_cat');
                  if ($post_type === 'tachinoki-column') {
                    $terms = get_the_terms($post->ID, 'tachinoki_column_cat');
                  } elseif ($post_type === 'akewatashi-column') {
                    $terms = get_the_terms($post->ID, 'akewatashi_column_cat');
                  } elseif ($post_type === 'saimu-column') {
                    $terms = get_the_terms($post->ID, 'saimu_column_cat');
                  } elseif ($post_type === 'isharyo-column') {
                    $terms = get_the_terms($post->ID, 'isharyo_column_cat');
                  } elseif ($post_type === 'hiseikyu-column') {
                    $terms = get_the_terms($post->ID, 'hiseikyu_column_cat');
                  }
                  if ($terms) :
                      foreach ($terms as $term) {
                          echo '<span>' . $term->name . '</span>';
                      }
                  endif;
                ?>
                </p>
                <?php
                  $search_img = '';
                  if ($post_type === 'hiseikyu-column' && function_exists('rise_hiseikyu_column_image')) {
                    $search_img = rise_hiseikyu_column_image();
                  } elseif (function_exists('get_field') && get_field('mainimg')) {
                    $search_img = get_field('mainimg');
                  }
                  if (!$search_img) {
                    $search_img = '/assets_prev/images/column/logo.png';
                  }
                ?>
                <figure><img src="<?php echo esc_url($search_img); ?>" alt="<?php the_title(); ?>"></figure>
              </div>
              <div class="txt">
                <?php
                  $ttl = get_the_title();
                  $ttl = wp_trim_words($ttl,38,'...');
                ?>
                <h3><?php echo $ttl; ?></h3>
                <!-- <div class="tag">
                  <ul>
                    <?php
                      $terms = get_the_terms($post->ID, 'column_tag');
                      if ($terms) :
                          foreach ($terms as $term) {
                            echo '<li><object><a href="'.get_term_link($term->slug, 'column_tag').'">＃'.$term->name.'</a></object></li>'; //タームのリンク
                          }
                      endif;
                    ?>
                  </ul>
                </div> -->
              </div>
            </a>
          </li>
          <?php endwhile; ?>
          <?php endif; ?>
        </ul>
        <nav class="pager">
          <?php
            if(function_exists('wp_pagenavi')) {
              wp_pagenavi(['query' => $search_query]);
            }
          ?>
        </nav>
      </div>
    </article>
    <?php wp_reset_postdata(); ?>
    <?php
      if ($post_type === 'tachinoki-column') {
        get_template_part('column_aside_tachinoki');
      } elseif ($post_type === 'akewatashi-column') {
        get_template_part('column_aside_akewatashi');
      } elseif ($post_type === 'saimu-column') {
        get_template_part('column_aside_saimu');
      } elseif ($post_type === 'isharyo-column') {
        get_template_part('column_aside_isharyo');
      } elseif ($post_type === 'hiseikyu-column') {
        get_template_part('template-parts/lp/hiseikyu-column', 'aside');
      } else {
        get_template_part('column_aside');
      };
    ?>
    </div>
</main>

<?php
  if ($post_type === 'tachinoki-column') {
    get_template_part('template-parts/footer', 'tachinoki');
  } elseif ($post_type === 'akewatashi-column') {
    get_template_part('template-parts/footer', 'akewatashi');
  } elseif ($post_type === 'saimu-column') {
    get_template_part('template-parts/footer', 'saimu');
  } elseif ($post_type === 'isharyo-column') {
    get_template_part('template-parts/footer', 'isharyo');
  } elseif ($post_type === 'hiseikyu-column') {
    get_template_part('template-parts/lp/footer', 'isyaryo');
  } else {
    get_footer();
  }
?>
