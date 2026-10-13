    <aside>
      <div class="aside_inner">
      <section class="search">
          <h3>検索</h3>
          <div class="search"><form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
              <input type="text" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" id="s" placeholder="法律コラムを検索">
              <input type="hidden" name="post_type" value="column">
              <input type="submit" id="searchsubmit" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" /></form>
          </div>
        </section>
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
            <section class="article">

              <h3><?php echo esc_html( $term->name ); ?></h3>
              <ul>
              <?php if ( $query->have_posts() ) : ?>
                  <?php while ( $query->have_posts() ) : $query->the_post();?>
                      <li>
                          <a href="<?php the_permalink(); ?>">
                          <?php if (get_field('mainimg')) : ?>
                            <figure><img src="<?php the_field('mainimg'); ?>" alt="<?php the_title(); ?>""></figure>
                          <?php else : ?>
                            <figure><img src="/assets/images/column/logo.png" alt="<?php the_title(); ?>""></figure>
                          <?php endif; ?>
                            <div class="txt">
                            <?php 
                              $ttl = get_the_title();
                              $ttl = wp_trim_words($ttl,32,'...');
                            ?>
                              <h4><?php echo $ttl; ?></h4>
                              <p class="date"><?php the_time('Y/m/d'); ?></p>
                            </div>
                          </a>
                      </li>
                  <?php endwhile;?>
                  <?php wp_reset_postdata(); ?>
              <?php endif; ?>
              </ul>
            </section>
        <?php endforeach; ?>
        <section class="category">
          <h3>カテゴリー</h3>
          <ul>
            <?php
              $terms = get_terms( 'column_cat');
              foreach ( $terms as $term ){
              echo '<li><a href="'.get_term_link($term->slug, 'column_cat').'">'.$term->name.'</a></li>';
              }
            ?>
          </ul>
        </section>
        <section class="tag">
          <h3>注目キーワード</h3>
          <ul>
          <?php
              $taxonomy = 'column_tag';            
              $args = array( 'number' => 10, 'orderby' => 'count', 'order' => 'DESC' );
              $tax_terms = get_terms( $taxonomy, $args );
              foreach ( $tax_terms as $term ){
                echo '<li><a href="'.get_term_link($term->slug, 'column_tag').'">#'.$term->name.'</a><li>'; //タームのリンク
              }
            ?>
          </ul>
        </section>
      </div>
    </aside>