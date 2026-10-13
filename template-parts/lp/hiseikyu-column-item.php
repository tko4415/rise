<?php
$cats = get_the_terms(get_the_ID(), 'hiseikyu_column_cat');
$img = rise_hiseikyu_column_image();
if (!$img) {
  $img = '/assets_prev/images/column/logo.png';
}
$post_time = get_the_time('U');
$last = time() - (14 * 24 * 60 * 60);
?>
<li>
  <a href="<?php the_permalink(); ?>">
    <div class="hgroup">
      <?php if ($post_time > $last) : ?>
      <p class="new">NEW</p>
      <?php endif; ?>
      <p class="category">
        <?php
          if ($cats && !is_wp_error($cats)) {
            foreach ($cats as $term) {
              echo '<span>' . esc_html($term->name) . '</span>';
            }
          }
        ?>
      </p>
      <figure><img src="<?php echo esc_url($img); ?>" alt="<?php the_title(); ?>"></figure>
    </div>
    <div class="txt">
      <h3><?php echo esc_html(wp_trim_words(get_the_title(), 38, '...')); ?></h3>
    </div>
  </a>
</li>
