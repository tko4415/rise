<?php
$ttl = isset($args['title']) ? $args['title'] : '';
$show_mv = !empty($args['mv']);
?>
<?php if ($show_mv) : ?>
<section id="mv" aria-hidden="true"></section>
<?php endif; ?>
<section id="title">
  <div class="t_inner">
    <div class="t_inner_inner">
      <h2 class="pagettl"><?php echo esc_html($ttl); ?></h2>
    </div>
  </div>
</section>
