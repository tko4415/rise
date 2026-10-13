<?php
get_header();
?>
<main class="lower news top">
    <section id="mv" class="type1">
      <figure class="bg"><img class="_pc" src="/assets/images/news/mv.jpg" alt="お知らせ"><img class="_sp" src="/assets/images/news/mv_sp.jpg" alt="お知らせ"></figure>
      <div class="inner">
        <p class="en _sp"><img src="/assets/images/news/ttl_en.svg" alt="News"></p>
        <h2 class="ttl">お知らせ</h2>
        <p class="en _pc">News</p>
      </div>
    </section>

    <section class="news">
      <div class="inner">
        <ul class="news_list scrollin sc_list">
          <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
          <li>
            <a href="<?php the_permalink(); ?>">
              <p class="date"><?php the_time('Y/m/d'); ?></p>
              <p class="main"><?php the_title(); ?></p>
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
    </section>
    <div class="topicpath">
      <ul>
        <li><a href="/">TOP</a></li>
        <li>お知らせ</li>
      </ul>
    </div>
  </main>
<?php
get_footer();
?>
