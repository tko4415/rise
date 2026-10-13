<?php
get_header();
?>
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
  <main class="lower news single">
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
        <p class="date"><?php the_time('Y/m/d'); ?></p>
        <h2 class="news_ttl"><?php the_title(); ?></h2>
        <div class="maintxt">
          <?php the_content(); ?>
        </div>
      </div>
      <div class="btn_wrapper"><a href="/news/" class="btn_reg">一覧へ戻る</a></div>
    </section>
    <div class="topicpath">
      <ul>
        <li><a href="/">TOP</a></li>
        <li><a href="../">お知らせ</a></li>
        <li><?php the_title(); ?></li>
      </ul>
    </div>
  </main>
<?php endwhile; endif; ?>
<?php
get_footer();
?>
