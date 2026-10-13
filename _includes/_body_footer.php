<footer id="global_footer" class="global_footer" itemscope itemtype="https://schema.org/WPFooter">
  <div class="gf_links-wrap">
    <ul class="gf_links-01 module_menu-01">
      <?php if(have_rows('common-menu-01', 'option')): ?>
        <?php while(have_rows('common-menu-01', 'option')): the_row(); ?>
          <?php
          $title01 = get_sub_field('title-01');
          $url01 = get_sub_field('url-01');
          $target01 = get_sub_field('target-01');
          $footer = get_sub_field('hide-footer');
          $select01 = get_sub_field('select-01');
          ?>
          <?php if( $footer ): //フッター出力あり ?>
            <?php if( $select01 ): //3階層目あり ?>
              <li>
                <button class="gfl_button mm_button" type="button"><span>開閉</span></button>
                <a class="gfl_title mm_title" href="<?php echo $url01; ?>" <?php if( $target01 ): ?>target="_blank"<?php endif; //外部リンク ?>><?php echo $title01; ?></a>
                <div class="gfl_wrapper mm_wrapper-01">
                  <div class="gfl_inner mm_inner-01">
                    <ul>
                      <?php if(have_rows('hierarchy-02', 'option')): //3階層目出力開始 ?>
                        <?php while(have_rows('hierarchy-02', 'option')): the_row(); ?>
                          <?php
                          $title02 = get_sub_field('title-02');
                          $url02 = get_sub_field('url-02');
                          $target02 = get_sub_field('target-02');
                          $select02 = get_sub_field('select-02'); //4階層目なしの場合削除し、if( $select02 )内の4階層目なし<li>のみwhile内に残す
                          ?>
                          <?php if( $select02 ): //4階層目あり ?>
                            <li>
                              <button class="gfl_button mm_button-01" type="button"><span>開閉</span></button>
                              <a class="gfl_title mm_title-01" href="<?php echo $url02; ?>" <?php if( $target02 ): ?>target="_blank"<?php endif; //外部リンク ?>><?php echo $title02; ?></a>
                              <div class="gfl_wrapper mm_wrapper-02">
                                <div class="gfl_inner mm_inner-02">
                                  <ul>
                                    <?php if(have_rows('hierarchy-03', 'option')): //4階層目出力開始 ?>
                                      <?php while(have_rows('hierarchy-03', 'option')): the_row(); ?>
                                        <?php
                                        $title03 = get_sub_field('title-03');
                                        $url03 = get_sub_field('url-03');
                                        $target03 = get_sub_field('target-03');
                                        ?>
                                        <li><a class="gfl_title mm_title-02" href="<?php echo $url03; ?>" <?php if( $target03 ): ?>target="_blank"<?php endif; //外部リンク ?>><?php echo $title03; ?></a></li>
                                      <?php endwhile; ?>
                                    <?php endif; //4階層目出力終了 ?>
                                  </ul>
                                </div><!-- /global_inner -->
                              </div><!-- /gfl_inner -->
                            </li>
                          <?php else: //4階層目なし ?>
                            <li><a class="gfl_title mm_title-01" href="<?php echo $url02; ?>" <?php if( $target02 ): ?>target="_blank"<?php endif; //外部リンク ?>><?php echo $title02; ?></a></li>
                          <?php endif; //4階層目分岐終了 ?>
                        <?php endwhile; ?>
                      <?php endif; //3階層目出力終了 ?>
                    </ul>
                  </div><!-- /global_inner -->
                </div><!-- /gfl_inner -->
              </li>
            <?php else: //3階層目なし ?>
              <li>
                <a class="gfl_title mm_title" href="<?php echo $url01; ?>" <?php if( $target01 ): ?>target="_blank"<?php endif; //外部リンク ?>><?php echo $title01; ?></a>
              </li>
            <?php endif; //3階層目分岐終了 ?>
          <?php endif; //フッター出力分岐終了 ?>
        <?php endwhile; ?>
      <?php endif; //common-menu-01 ?>
    </ul>
    <ul class="gf_links-02 module_menu-02">
      <?php if(have_rows('common-submenu-01', 'option')): ?>
        <?php while(have_rows('common-submenu-01', 'option')): the_row(); ?>
          <?php
          $title = get_sub_field('title');
          $url = get_sub_field('url');
          $target = get_sub_field('target');
          $footer = get_sub_field('hide-footer');
          ?>
          <?php if( $footer ): //フッター出力あり ?>
            <li><a href="<?php echo $url; ?>" <?php if( $target ): ?>target="_blank"<?php endif; //外部リンク ?>><?php echo $title; ?></a></li>
          <?php endif; //フッター出力分岐終了 ?>
        <?php endwhile; ?>
      <?php endif; //common-submenu-01 ?>
    </ul>
  </div><!-- /gf_links -->
  <div class="gf_information">
    <div class="global_inner">
      <p class="gf_logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/common/logo.svg" alt=""></a></p>
      <address>
        <p class="gf_address"><a href="https://goo.gl/maps/uVP6AdzGHXC2" target="_blank">〒170-0004<br>東京都豊島区北大塚1-22-3-402</a></p>
        <p class="gf_tel">TEL:<a href="tel:0358446435">03-5844-6435</a></p>
      </address>
    </div><!-- /global_inner -->
  </div><!-- /gf_information -->
  <p class="gf_pageTop"><a href="#"><span>ページトップへ戻る</span></a></p>
  <p class="gf_copyright"><span>&copy; 2019 Codia Corporation.</span></p>
</footer>
