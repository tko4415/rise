<?php
get_header();
?>
<main class="topics top">
    <div id="page_heading">
      <div class="inner">
        <h2 class="category"><span class="en">Service</span></h2>
        <h1 class="page_ttl">お知らせ</h1>
      </div>
    </div>
    <section id="nav">
      <div class="inner">
        <ul class="category">
          <li><a href="/topics/">ALL</a></li>
          <li<?php if(is_category('case')){ echo ' class="current"'; } ?>><a href="/topics/category/case/">事例の紹介</a></li>
          <li<?php if(is_category('news')){ echo ' class="current"'; } ?>><a href="/topics/category/news/">国土ニュース</a></li>
          <li<?php if(is_category('workshop')){ echo ' class="current"'; } ?>><a href="/topics/category/workshop/">研修会情報</a></li>
          <li<?php if(is_category('publication')){ echo ' class="current"'; } ?>><a href="/topics/category/publication/">出版物</a></li>
        </ul>
        <p class="tagname">#<?php single_tag_title(); ?></p></div>
    </section>
    <section id="list">
      <div class="inner">
        <ul class="article scrollin list">
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
          <li>
          <?php
            $category = get_the_category();
            $cat_id   = $category[0]->cat_ID;
            $cat_name = $category[0]->cat_name;
            $cat_slug = $category[0]->category_nicename;
          ?>
            <p class="category"><?php echo  $cat_name; ?></p>
            <p class="date"><?php the_time('Y/m/d'); ?></p>
            <p class="heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
          </li>
          <?php endwhile; ?>
          <?php endif; ?>
        </ul>
        <nav class="pager">
          <ul>
          <?php if (get_previous_posts_link()):?>
            <li class="prev"><?php previous_posts_link(); ?></li>
          <?php else : ?>
            <li class="prev off"><span>前の記事</span></li>
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
            <li class="next"><?php next_posts_link(); ?></li>
          <?php else : ?>
            <li class="next off"><span>次の記事</span></li>
          <?php endif; ?>
          </ul>
        </nav>
      </div>
    </section>
    <div class="topicpath">
      <div class="inner">
        <ul>
          <li><a href="/">HOME</a></li>
          <li>お知らせ</li>
        </ul>
      </div>
    </div>
  </main>
<?php 
get_footer();
?>
