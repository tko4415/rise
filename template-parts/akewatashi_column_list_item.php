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
          $terms = get_the_terms($post->ID, 'akewatashi_column_cat');
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
        <figure><img src="/assets_prev/images/column/logo.png" alt="<?php the_title(); ?>"></figure>
      <?php endif; ?>
    </div>
    <div class="txt">
      <?php
        $ttl = get_the_title();
        $ttl = wp_trim_words($ttl,38,'...');
      ?>
      <h3><?php echo $ttl; ?></h3>
    </div>
  </a>
</li>