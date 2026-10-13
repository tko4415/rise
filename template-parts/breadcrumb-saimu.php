<?php
// パンくず表示（表示用HTMLのみ）
?>

<nav class="t_breadcrumb">
  <ul>
    <!-- <li><a href="<?php echo esc_url(home_url('/')); ?>/saimu/">債務整理トップ</a></li> -->

    <?php if (is_page()): ?>
      <?php
      $parents = array_reverse(get_post_ancestors(get_the_ID()));
      foreach ($parents as $parent_id):
      ?>
        <li><a href="<?php echo get_permalink($parent_id); ?>">
          <?php echo get_the_title($parent_id); ?>
        </a></li>
      <?php endforeach; ?>
      <li><?php the_title(); ?></li>

    <?php elseif (is_post_type_archive()): ?>
      <li><a href="<?php echo esc_url(home_url()); ?>/saimu/">債務整理トップ</a></li>
      <li>
        <a href="<?php echo esc_url(get_post_type_archive_link('saimu-column')); ?>">
          コラム一覧
        </a>
      </li>

    <?php elseif (is_singular()): ?>
      <li><a href="<?php echo esc_url(home_url()); ?>/saimu/">債務整理トップ</a></li>
      <li>
        <a href="<?php echo esc_url(get_post_type_archive_link('saimu-column')); ?>">
          コラム一覧
        </a>
      </li>
      <li><?php the_title(); ?></li>

    <?php elseif (is_category()): ?>
      <li><?php single_cat_title(); ?></li>

    <?php endif; ?>
  </ul>
</nav>
