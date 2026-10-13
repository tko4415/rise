<?php
get_header();
?>

<main class="column archive">
    <section id="mv" class="type1">
      <figure class="bg"><img class="_pc" src="/assets/images/column/mv.jpg" alt="お知らせ"><img class="_sp" src="/assets/images/column/mv_sp.jpg" alt="お知らせ"></figure>
      <div class="inner">
        <h2 class="ttl">法律コラム</h2>
        <p class="en">column</p>
      </div>
    </section>
    <div class="contents">
    <article class="article">
    <div class="article_inner archive">
    <?php // タクソノミー(カテゴリ)別に記事を一覧出力
    $terms = get_terms( 'column_pickup' );
    foreach ( $terms as $term ) :
        $args = array(
            'post_type' => 'column',
            'taxonomy' => 'column_pickup',
            'term' => $term->slug,
            'posts_per_page' => 3,
            'no_found_rows' => true,
        );
        $query = new WP_Query($args); ?>
        <div class="article_block">
            <h2 class="pickup"><?php echo esc_html( $term->name ); ?></h2>
            <ul class="list">

              <?php if ( $query->have_posts() ) : ?>
                  <?php while ( $query->have_posts() ) : $query->the_post();?>
                  <li><a href="<?php the_permalink(); ?>">
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
              <figure><img src="<?php the_field('mainimg'); ?>" alt="<?php the_title(); ?>"></figure>
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
              </a></li>
                  <?php endwhile;?>
                  <?php wp_reset_postdata(); ?>
              <?php endif; ?>
            </ul>
        </div>
        <?php endforeach; ?>
    
        <?php // タクソノミー(カテゴリ)別に記事を一覧出力
          $terms = get_terms( 'column_cat' );
          foreach ( $terms as $term ) :
            $args = array(
                'post_type' => 'column',
                'taxonomy' => 'column_cat',
                'term' => $term->slug,
                'posts_per_page' => 3,
                'no_found_rows' => true,
            );
            $query = new WP_Query($args);
            $slug = $term->slug;
            $cat = esc_html( $term->name );
        ?>
        <div class="article_block">
        <?php if (get_field('icon',$term)) : ?>
          <h2 class="category"><span style="background-image:url(<?php echo get_field('icon',$term); ?>"></span><?php echo $cat; ?></h2>
        <?php else : ?>
          <h2 class="category"><span style="background-image:url(/assets/images/column/icon_<?php echo esc_html( $term->slug ); ?>.svg"></span><?php echo $cat; ?></h2>
          <?php endif; ?>
            <ul class="list">
              <?php if ( $query->have_posts() ) : ?>
                  <?php while ( $query->have_posts() ) : $query->the_post();?>
                  <li><a href="<?php the_permalink(); ?>">
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
              <figure><img src="<?php the_field('mainimg'); ?>" alt="<?php the_title(); ?>"></figure>
            <?php else : ?>
              <figure><img src="/assets/images/column/logo.png" alt="<?php the_title(); ?>"></figure>
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
              </a></li>
              <?php endwhile;?>
              <?php wp_reset_postdata(); ?>
              <?php endif; ?>
            </ul>
            <div class="btn_list_wrapper"><a href="/column_cat/'<?php echo $slug; ?>'/" class="btn_reg"><?php echo $cat; ?>の記事一覧へ</a></div>
        </div>
        <?php endforeach; ?>
        <section class="keyword">
            <div class="keyword_inner">
              <h3>注目キーワード</h3>
              <ul>
                <?php
              $taxonomy = 'column_tag';            
              $args = array( 'number' => 10, 'orderby' => 'count', 'order' => 'DESC' );
              $tax_terms = get_terms( $taxonomy, $args );
              foreach ( $tax_terms as $term ){
                echo '<li><a href="'.get_term_link($term->slug, 'column_tag').'">＃'.$term->name.'</a></li>'; //タームのリンク
              }
            ?>
              </ul>
            </div>
          </section>
        </div>
    </article>
    <?php get_template_part('column_aside');?>
    </div>
    <div class="topicpath">
      <ul>
        <li><a href="/">TOP</a></li>
        <li>法律コラム</li>
      </ul>
    </div>
  </main>
<?php
get_footer();
?>
