<li>
  <a href="<?php the_permalink(); ?>">
    <div class="hgroup">
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