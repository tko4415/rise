<?php
$url = get_permalink();
$title = get_the_title();
$enc_url = rawurlencode($url);
$enc_title = rawurlencode($title);
$img = get_template_directory_uri() . '/images';
?>
<div class="nav_sns lp-hiseikyu-column__sns">
  <nav>
    <ul>
      <li class="item twitter">
        <div class="arrowBox">ツイート</div>
        <div class="btn-sns svg">
          <a href="https://twitter.com/intent/tweet?url=<?php echo esc_attr($enc_url); ?>&text=<?php echo esc_attr($enc_title); ?>" target="_blank" rel="noopener noreferrer">
            <img loading="lazy" src="<?php echo esc_url($img . '/tachinoki/common/icon_sns_twitter.svg'); ?>" alt="twitter">
          </a>
        </div>
      </li>
      <li class="item facebook">
        <div class="arrowBox">シェア</div>
        <div class="btn-sns svg">
          <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo esc_attr($enc_url); ?>" target="_blank" rel="noopener noreferrer">
            <img loading="lazy" src="<?php echo esc_url($img . '/tachinoki/common/icon_sns_facebook.svg'); ?>" alt="facebook">
          </a>
        </div>
      </li>
      <li class="item pocket">
        <div class="arrowBox">Pocket</div>
        <div class="btn-sns svg">
          <a href="https://getpocket.com/edit?url=<?php echo esc_attr($enc_url); ?>" target="_blank" rel="noopener noreferrer">
            <img loading="lazy" src="<?php echo esc_url($img . '/tachinoki/common/icon_sns_pocket.svg'); ?>" alt="Pocket">
          </a>
        </div>
      </li>
      <li class="item hatebu">
        <div class="arrowBox">はてブ</div>
        <div class="btn-sns svg">
          <a href="https://b.hatena.ne.jp/entry/<?php echo esc_attr($url); ?>" target="_blank" rel="noopener noreferrer">
            <img loading="lazy" src="<?php echo esc_url($img . '/tachinoki/common/icon_sns_hatena.svg'); ?>" alt="はてブ">
          </a>
        </div>
      </li>
      <li class="item line">
        <div class="btn-sns img">
          <a href="https://social-plugins.line.me/lineit/share?url=<?php echo esc_attr($enc_url); ?>" target="_blank" rel="noopener noreferrer">
            <img loading="lazy" src="<?php echo esc_url($img . '/lp/isyaryo/hiseikyu/icon_sns_line.svg'); ?>" alt="line">
          </a>
        </div>
      </li>
    </ul>
  </nav>
</div>
