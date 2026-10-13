<?php
get_header();
?>
  <main class="lower archive">
    <ul class="path">
      <li><a href="/">TOP</a></li>
      <li>学術集会・セミナー</li>
    </ul>
    <h2 class="lower-title">学術集会・セミナー</h2>
    <div class="main-inner">
      <ul class="list">
      <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
      <li>
          <?php 
            $link = get_field('link');
            if ( $link ):
              $link_target = $link['target'] ? $link['target'] : '_self';
              
          ?>
            <a href="<?php echo $link['url']; ?>" target="<?php echo esc_attr($link_target); ?>">
          <?php  else : ?>
            <a href="<?php the_permalink(); ?>">
          <?php  endif; ?>
              <p class="date"><?php the_field('date'); ?></p>
              <p class="title"><?php the_title(); ?></p>
            </a>
          </li>

      <?php endwhile; ?>
      <?php endif; ?>
      </ul>
      <nav class="pager">
        <ul>
        <?php if (get_previous_posts_link()):?>
          <li class="prev"><span class="arrow">&lt;</span><?php previous_posts_link('PREV'); ?></li>
        <?php else : ?>
          <li class="prev off"><span class="arrow">&lt;</span><span>PREV</span></li>
        <?php endif; ?>
          
        <?php if (get_next_posts_link()):?>
          <li class="next"><?php next_posts_link('NEXT'); ?><span class="arrow">&gt;</span></li>
        <?php else : ?>
          <li class="next off"><span>NEXT</span><span class="arrow">&gt;</span></li>
        <?php endif; ?>
        </ul>
      </nav>
    </div>
  </div>
  </main>
<?php
get_footer();
?>
