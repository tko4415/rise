<?php
get_header();
?>

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
<?php 
	$taxonomy_slug = "column_cat";
	$taxonomy = get_the_terms($post->ID,$taxonomy_slug);
	$subcat_name = $taxonomy[0]->name;
	$subcat_slug = $taxonomy[0]->slug;//タームスラッグ
	$subcat_id = $taxonomy[0]->term_id;//タームスラッグ
?>
<main class="column single">
<section id="mv" class="type1">
      <figure class="bg"><img class="_pc" src="/assets/images/column/mv.jpg" alt="法律コラム"><img class="_sp" src="/assets/images/column/mv.jpg" alt="法律コラム" style="object-position: 70% center;"></figure>
      <div class="inner">
        <h2 class="ttl">法律コラム</h2>
        <p class="en">column</p>
      </div>
    </section>
      
    
    <div class="contents">
    <article class="article">
      <div class="article_inner">
        <div class="hgroup">
          <div class="spec">
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
            <p class="date"><?php the_time('Y/m/d'); ?></p>
          </div>

          <h1 class="column_ttl"><?php the_title(); ?></h1>
          <div class="tag">
            <ul>
            <?php
              $terms = get_the_terms($post->ID, 'column_tag');
              if ($terms) :
                  foreach ($terms as $term) {
                    echo '<li><a href="'.get_term_link($term->slug, 'column_tag').'">＃'.$term->name.'</a></li>'; //タームのリンク
                  }
              endif;
            ?>
            </ul>
          </div>
        </div>
        <?php if (get_field('outline')) : ?>
          <div class="outline">
            <?php the_field('outline'); ?>
          </div>
        <?php endif; ?>
        <?php if (get_field('mainimg')) : ?>
          <figure class="mainimg"><img src="<?php the_field('mainimg'); ?>" alt="<?php the_title(); ?>"></figure>
        <?php endif; ?>
        <div class="maintxt">
        <?php the_field('bodycopy'); ?>
        <!-- maintxt --></div>
        <div class="lp_banner">
        <?php if (get_field('url1','column_cat_'.$subcat_id) && get_field('banner1') != 'off') : ?>
          <a class="banner_lp navy" href="<?php echo strip_tags(get_field('url1','column_cat_'.$subcat_id)); ?>" target="_blank">
            <figure class="photo"><img class="_pc" src="<?php echo get_field('img1','column_cat_'.$subcat_id); ?>" alt="<?php echo strip_tags(get_field('txtl1','column_cat_'.$subcat_id)); ?>"><img class="_sp" src="<?php echo get_field('img1sp','column_cat_'.$subcat_id); ?>" alt="<?php echo strip_tags(get_field('txtl1','column_cat_'.$subcat_id)); ?>"></figure>
            <div class="body">
              <div class="txt">
                <p class="en"><?php echo strip_tags(get_field('texten1','column_cat_'.$subcat_id)); ?></p>
                <p class="ja"><span class="icon"><img src="<?php echo get_field('icon','column_cat_'.$subcat_id); ?>" alt="<?php echo strip_tags(get_field('txts1','column_cat_'.$subcat_id)); ?>"></span><?php echo get_field('txtl1','column_cat_'.$subcat_id); ?></p>
              </div>
            </div>
            <div class="arrow_extend"><?php echo get_field('txts1','column_cat_'.$subcat_id); ?></div>
          </a>
        <?php endif; ?>
        <?php if (get_field('url2','column_cat_'.$subcat_id) && get_field('banner2') != 'off') : ?>
          <a class="banner_lp navy" href="<?php echo strip_tags(get_field('url2','column_cat_'.$subcat_id)); ?>" target="_blank">
            <figure class="photo"><img class="_pc" src="<?php echo get_field('img2','column_cat_'.$subcat_id); ?>" alt="<?php echo strip_tags(get_field('txtl2','column_cat_'.$subcat_id)); ?>"><img class="_sp" src="<?php echo get_field('img2sp','column_cat_'.$subcat_id); ?>" alt="<?php echo strip_tags(get_field('txtl2','column_cat_'.$subcat_id)); ?>"></figure>
            <div class="body">
              <div class="txt">
                <p class="en"><?php echo strip_tags(get_field('texten2','column_cat_'.$subcat_id)); ?></p>
                <p class="ja"><span class="icon"><img src="/assets/images/service/kojin/isharyo/banner_icon.svg" alt="<?php echo strip_tags(get_field('txts2','column_cat_'.$subcat_id)); ?>"></span><?php echo get_field('txtl2','column_cat_'.$subcat_id); ?></p>
              </div>
            </div>
            <div class="arrow_extend"><?php echo get_field('txts2','column_cat_'.$subcat_id); ?></div>
          </a>
        <?php endif; ?>
        </div>

        <?php if (get_field('sv_name')) : ?>
        <div class="sv">
          <h4>このページの監修弁護士</h4>
          <div class="body">
              <div class="txt">
                <div class="heading"><p class="position">弁護士</p><p class="name"><?php the_field('sv_name'); ?></p></div>
                <div class="honbun">
                <?php the_field('sv_txt'); ?>
              </div>
            </div>
            <?php if (get_field('sv_ph')) : ?>
            <figure><img src="<?php the_field('sv_ph'); ?>" alt=""></figure>
            <?php endif; ?>
          </div>
        <!-- lawyer --></div>

        <?php endif; ?>
        <?php
          $terms = get_the_terms($post->ID, 'column_cat');
          if ($terms) :
              foreach ($terms as $term) {
                  echo '<div class="btn_list_wrapper"><a href="/column_cat/' .$term->slug. '/" class="btn_reg">' . $term->name . 'の記事一覧へ</a></div>';
              }
          endif;
        ?>
        <?php
          $post_type = 'column'; //「ブログ」のカスタム投稿タイプ名
          $taxonomy = 'column_cat'; //「ブログ」のカスタム分類（タクソノミー）名
          $terms = get_the_terms($post->ID,$taxonomy);
          $this_term = $terms[0];

          $ancestors = get_ancestors($this_term ->term_id, $taxonomy );
          if($ancestors){
            $ancestor_id = end($ancestors); //先祖タームの最終要素IDをセット
          }else{
            $ancestor_id = $this_term->term_id; //自分自身のタームIDをセット
          }
          //当記事を除いて記事一覧を取得
          $posts = get_posts( array(
          'post_type' => $post_type,
          'tax_query' => array(
              array(
                'taxonomy' => $taxonomy,
                'field' => 'id',
                'terms' => $ancestor_id
              )
          ),
          'posts_per_page' => 3,
          'exclude' => get_the_ID()
          ));
          if (count($posts) > 0) : 
        ?>
        <div class="related">
          <h4>関連記事</h4>
          <div class="frame">
            <ul>
            <?php
            foreach ($posts as $post) : ?>
              <li><a href="<?php the_permalink(); ?>">
                <p><?php the_title(); ?></p>
                <?php if (get_field('mainimg')) : ?>
                  <figure><img src="<?php the_field('mainimg'); ?>" alt=""></figure>
                <?php else : ?>
                  <figure><img src="/assets/images/column/logo.png" alt=""></figure>
                <?php endif; ?>
              </a></li>
            <?php endforeach; ?>
            </ul>
          </div>
        </div>
        <?php endif; ?>
      </div>
    </article>
    <?php get_template_part('column_aside');?>
    </div>
    <div class="topicpath">
      <ul >
          <li><a href="/">TOP</a></li>
          <li><a href="/column/">法律コラム</a></li>
          <?php
            $terms = get_the_terms($post->ID, 'column_cat');
            if ($terms) :
                foreach ($terms as $term) {
                    echo '<li><a href="/column_cat/' .$term->slug. '/" class="btn_list">' . $term->name . '</a></li>';
                }
            endif;
          ?>
                <?php 
                  $ttl = get_the_title();
                  $ttl = wp_trim_words($ttl,58,'...');
                ?>
                  <li><?php echo $ttl; ?></li>
        </ul>
    </div>
  </main>
<?php endwhile; endif; ?>
<?php
get_footer();
?>
