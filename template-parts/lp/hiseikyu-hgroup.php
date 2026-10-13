<?php
$en = isset($args['en']) ? $args['en'] : '';
$ja = isset($args['ja']) ? $args['ja'] : '';
$ja_tag = (!empty($args['ja_tag']) && preg_match('/^h[1-6]$/', $args['ja_tag'])) ? $args['ja_tag'] : 'h2';
?>
<div class="hgroup_regular">
  <?php if ($en !== '') : ?>
  <p class="h_en_ul"><?php echo esc_html(str_replace(' ', "\u{00A0}", $en)); ?></p>
  <?php endif; ?>
  <?php if ($ja !== '') : ?>
  <<?php echo $ja_tag; ?> class="h_ja"><?php echo esc_html($ja); ?></<?php echo $ja_tag; ?>>
  <?php endif; ?>
</div>
