<?php
get_header();
?>
<?php 
	$cat = get_the_terms($post->ID,"column_cat");
	$cat_name = $cat[0]->name;
	$cat_slug = $cat[0]->slug;//タームスラッグ
?>

<main class="column archive">
    <section id="mv" class="type1">
      <figure class="bg"><img class="_pc" src="/assets/images/column/mv.jpg" alt="法律コラム"><img class="_sp" src="/assets/images/column/mv.jpg" alt="法律コラム" style="object-position: 70% center;"></figure>
      <div class="inner">
        <h2 class="ttl">法律コラム</h2>
        <p class="en">column</p>
      </div>
    </section>

    <div class="contents">
      <article class="article">
        <div class="article_inner archive">
            <h2>｢ <?php echo(single_term_title()); ?> ｣ の記事一覧</h2>
            <ul class="list">
              <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
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
                  if ($terms) :
                      foreach ($terms as $term) {
                          echo '<span>' . $term->name . '</span>';
                      }
                  endif;
                ?>
              </p>
              <?php if (get_field('mainimg')) : ?>
                <figure><img src="<?php the_field('mainimg'); ?>" alt="<?php the_title(); ?>""></figure>
              <?php else : ?>
                <figure><img src="/assets/images/column/logo.png" alt="<?php the_title(); ?>""></figure>
              <?php endif; ?>
                </div>
                <div class="txt">
                  <?php 
                    $ttl = get_the_title();
                    $ttl = wp_trim_words($ttl,38,'...');
                  ?>
                    <h3><?php echo $ttl; ?></h3>
                    <div class="tag">
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
                    </div>
                  </div>
              </a>
            </li>
          <?php endwhile; ?>
          <?php endif; ?>
          </ul>
          <nav class="pager">
          <ul>
          <?php if (get_previous_posts_link()):?>
            <li class="prev"><?php previous_posts_link('前のページ'); ?></li>
          <?php else : ?>
            <li class="prev off"><span class="btn_regular arrow_before arrow_back">前のページ</span></li>
          <?php endif; ?>
            <li class="pagenum">
            <?php 
            // 現在のページ番号を取得
            $current_pgae = get_query_var( 'paged' ); 
            $current_pgae = $current_pgae == 0 ? '1' : $current_pgae;
            echo '<span class="current">' . $current_pgae . '</span><span class="line"></span>';
            // 全ページ数を取得
            $max_pages = $wp_query->max_num_pages ;
            echo '<span class="total">' .$max_pages . '</span>';
            ?>
            </li>
          <?php if (get_next_posts_link()):?>
            <li class="next"><?php next_posts_link('次のページ'); ?><span class="c_arrow"></span></li>
          <?php else : ?>
            <li class="next off"><span class="btn_regular">次のページ<span class="c_arrow"></span></span></li>
          <?php endif; ?>
          </ul>
        </nav>
        </div>
      </article>
    <?php get_template_part('column_aside');?>
    </div>
    <div class="topicpath">
      <ul >
        <li><a href="/">TOP</a></li>
        <li><a href="/column/">法律コラム</a></li>
        <li><?php echo(single_term_title()); ?></li>
      </ul>
    </div>
  </main>
<?php
get_footer();
?>
