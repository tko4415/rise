    <aside>
      <div class="aside_inner">
        <section class="search">
          <h3>検索</h3>
          <div class="search">
            <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
              <input type="text" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" id="s" placeholder="立ち退きコラムを検索">
              <input type="hidden" name="post_type" value="tachinoki-column">
              <input type="submit" id="searchsubmit" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
            </form>
          </div>
        </section>

        <section class="article">
          <h3>新着記事</h3>
          <ul>
            <?php
              /**
               * 新着記事
               */
              $query = new WP_Query([
                'post_type'      => 'tachinoki-column',
                'posts_per_page' => 3,
                'orderby'        => 'date',
                'order'          => 'DESC',
                'post_status'    => 'publish',
                'no_found_rows'  => true,
              ]);
            ?>
            <?php if ( $query->have_posts() ) : ?>
              <?php while ( $query->have_posts() ) : $query->the_post();?>
                <li>
                  <a href="<?php the_permalink(); ?>">
                    <?php if (get_field('mainimg')) : ?>
                      <figure><img src="<?php the_field('mainimg'); ?>" alt="<?php the_title(); ?>"></figure>
                    <?php else : ?>
                      <figure><img src="/assets/images/column/logo.png" alt="<?php the_title(); ?>"></figure>
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

        <section class="article">
          <h3>人気記事</h3>
          <ul>
            <?php
              /**
               * 人気記事
               */
              $popular_query = new WP_Query([
                'post_type'      => 'tachinoki-column',
                'posts_per_page' => 3,
                'post_status'    => 'publish',
                'tax_query'      => [
                  [
                    'taxonomy' => 'column_pickup',
                    'field'    => 'slug',
                    'terms'    => 'popular',
                  ],
                ],
                'no_found_rows' => true,
              ]);
            ?>
            <?php if ( $popular_query->have_posts() ) : ?>
              <?php while ( $popular_query->have_posts() ) : $popular_query->the_post();?>
                <li>
                  <a href="<?php the_permalink(); ?>">
                    <?php if (get_field('mainimg')) : ?>
                      <figure><img src="<?php the_field('mainimg'); ?>" alt="<?php the_title(); ?>"></figure>
                    <?php else : ?>
                      <figure><img src="/assets/images/column/logo.png" alt="<?php the_title(); ?>"></figure>
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

        <section class="article">
          <h3>おすすめ記事</h3>
          <ul>
            <?php
              /**
               * おすすめ記事
               */
              $recommend_query = new WP_Query([
                'post_type'      => 'tachinoki-column',
                'posts_per_page' => 3,
                'post_status'    => 'publish',
                'tax_query'      => [
                  [
                    'taxonomy' => 'column_pickup',
                    'field'    => 'slug',
                    'terms'    => 'recommend',
                  ],
                ],
                'no_found_rows' => true,
              ]);
            ?>
            <?php if ( $recommend_query->have_posts() ) : ?>
              <?php while ( $recommend_query->have_posts() ) : $recommend_query->the_post();?>
                <li>
                  <a href="<?php the_permalink(); ?>">
                    <?php if (get_field('mainimg')) : ?>
                      <figure><img src="<?php the_field('mainimg'); ?>" alt="<?php the_title(); ?>"></figure>
                    <?php else : ?>
                      <figure><img src="/assets/images/column/logo.png" alt="<?php the_title(); ?>"></figure>
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

      </div>
    </aside>