<?php
get_header();
?>
  <main class="sitetop">
    <section id="mv">
      <div class="slider">
        <div class="block block_1">
          <figure class="block_1">
            <div class="first"></div>
          </figure>
        </div>
        <div class="block block_2">
          <figure class="block_2">
            <div class="first"></div>
          </figure>
        </div>
        <div class="block block_3">
          <figure class="block_3">
            <div class="first"></div>
          </figure>
        </div>
      </div>
      <div class="scrolldown pc"></div>
    </section>
    <div class="multiply"></div>
    <section class="newsline">
      <h2>NEWS</h2>
      <div class="topnews swiper">
        <div class="swiper-wrapper">
        <?php query_posts('posts_per_page=4'); ?>
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
          <div class="swiper-slide"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
        <?php endwhile; ?>
        <?php endif; ?>
        </div>
        <div class="news-control">
          <div class="swiper-button-prev"></div>
          <div class="swiper-pagination"></div>
          <div class="swiper-button-next"></div>
        </div>
      </div>
    </section>
    <section id="toptxt">
      <div class="txt">
        <hgroup>
          <h2 class="heading"><img src="/assets/images/top/mv_h.svg" alt="安心の、その先へ。"></h2>
          <p class="en">Road to the Next</p>
        </hgroup>
      </div>
      <div class="scrolldown">Scroll</div>
    </section>
    <section id="message">
      <div class="inner scrollin sclist">
        <h2>あなたのお悩みを<br class="_sp"><span class="_sp">&nbsp;</span>お聞かせください｡</h2>
        <p>誰かに悩みや困り事を相談すること。<br>
          それは、とても勇気のいることです。</p>
        <p>私たちは、皆様が<sapan class="_ib">その一歩を踏み出しやすいよう、</sapan><br>そして、次のステップへと導けるよう<br><span class="_ib">心を込めてサポートいたします。</span></p>
        <p>是非、あなたの声をお聞かせください。</p>
        <div class="btn">
          <a href="https://risesogo.jp/conference/" class="btn_reg white"><span class="small">全国で開催しています！</span><span>出張相談会随時開催中</span></a>
        </div>
      </div>
    </section>
    <section id="about">
      <div class="inner">
        <div class="photo">
          <ul class="scrollin sclist">
            <li><img src="/assets/images/top/about_ph_1.jpg" alt="私たちの強み"></li>
            <li><img src="/assets/images/top/about_ph_2.jpg" alt="あなたのお悩みを､お聞かせください｡"></li>
          </ul>
        </div>
        <div class="txt scrollin sclist">
          <hgroup class="hg_reg scrollin sclist">
            <p class="en">About US</p>
            <h2>私たちの強み</h2>
          </hgroup>
          <h3>あなたのお悩みを､<span class="_ib">お聞かせください｡</span></h3>
          <p>弁護士法人ライズ綜合法律事務所は、平成23年の設立以来、「どんな方でも相談しやすい、身近な存在の弁護士事務所」として、借金問題や慰謝料請求、立ち退き問題など、幅広い分野で45万件以上の相談に対応してきました。豊富な経験を持つ弁護士が、一人ひとりに最適な解決策を丁寧にご提案しています。</p>
          <div class="btn"><a href="/about/" class="btn_reg">私たちの強み</a></div>
        </div>
      </div>
    </section>
    <section id="service">
      <div class="inner scrollin sclist">
        <hgroup class="hg_reg white">
          <p class="en">Service Lineup</p>
          <h2>サービス紹介</h2>
        </hgroup>
        <div class="lineup service_lineup">
          <nav class=" nav">
            <ul class="list scrollin sclist">
              <li class="btn current" data-target="kojin">個人のご相談</li>
              <li class="btn" data-target="houjin">法人のご相談</li>
            </ul>
          </nav>
          <div class="blocks">
            <div class="kojin block current">
              <ul class="units scrollin sclist">
                <li class="unit">
                  <a href="/service/kojin/saimu/" class="btn_detail">
                    <figure><img src="/assets/images/common/service_icon_1_1.svg" alt="債務整理"></figure>
                    <p>借金を抱え、苦しんでいる方へ</p>
                    <h3>債務整理</h3>
                    <p class="detail">詳しく見る</p>
                  </a>
                </li>
                <li class="unit">
                  <a href="/service/kojin/isharyo/" class="btn_detail">
                    <figure><img src="/assets/images/common/service_icon_1_2.svg" alt="不倫慰謝料/離婚問題理"></figure>
                    <p>悩みをご自身だけで抱えないでください</p>
                    <h3>不倫慰謝料/離婚問題理</h3>
                    <p class="detail">詳しく見る</p>
                  </a>
                </li>
                <li class="unit">
                  <a href="/service/kojin/tachinoki/" class="btn_detail">
                    <figure><img src="/assets/images/common/service_icon_1_3.svg" alt="立退料交渉サービス"></figure>
                    <p>立ち退きトラブルは弁護士がサポート</p>
                    <h3>立退料交渉サービス</h3>
                    <p class="detail">詳しく見る</p>
                  </a>
                </li>
                <li class="unit">
                  <a href="/service/kojin/jiage/" class="btn_detail">
                    <figure><img src="/assets/images/common/service_icon_1_4.svg" alt="地上げ交渉サービス"></figure>
                    <p>地上げ問題で困ったときは弁護士へご相談を</p>
                    <h3>地上げ交渉サービス</h3>
                    <p class="detail">詳しく見る</p>
                  </a>
                </li>
                <li class="unit">
                  <a href="/service/kojin/kotsujiko/" class="btn_detail">
                    <figure><img src="/assets/images/common/service_icon_1_5.svg" alt="交通事故"></figure>
                    <p>事故後の適切な対応でトラブルを最小限に</p>
                    <h3>交通事故</h3>
                    <p class="detail">詳しく見る</p>
                  </a>
                </li>
                <li class="unit">
                  <a href="/service/kojin/bkan/" class="btn_detail">
                    <figure><img src="/assets/images/common/service_icon_1_6.svg" alt="B型肝炎の給付金請求"></figure>
                    <p>給付金請求の期限は令和9年3月31日まで</p>
                    <h3>B型肝炎の給付金請求</h3>
                    <p class="detail">詳しく見る</p>
                  </a>
                </li>
              </ul>
              <div class="btn scrollin scregular"><a href="/service/kojin/" class="btn_reg white">個人のご相談一覧</a></div>
            </div>

            <div class="hojin block">
              <ul class="units scrollin sclist">
                <li class="unit">
                  <a href="/service/hojin/tachinoki/" class="btn_detail">
                    <figure><img src="/assets/images/common/service_icon_2_1.svg" alt="立退料交渉サービス"></figure>
                    <p>立ち退きトラブルは弁護士がサポート</p>
                    <h3>立退料交渉サービス</h3>
                    <p class="detail">詳しく見る</p>
                  </a>
                </li>
                <li class="unit">
                  <a href="/service/hojin/saiken/" class="btn_detail">
                    <figure><img src="/assets/images/common/service_icon_2_2.svg" alt="債権回収"></figure>
                    <p>未収問題でお悩みの法人向けサポート</p>
                    <h3>債権回収</h3>
                    <p class="detail">詳しく見る</p>
                  </a>
                </li>
                <li class="unit">
                  <a href="/service/hojin/shikikin/" class="btn_detail">
                    <figure><img src="/assets/images/common/service_icon_2_3.svg" alt="敷金保証金回収サービス"></figure>
                    <p>完全成功報酬制で安心の返還請求</p>
                    <h3>敷金保証金回収サービス</h3>
                    <p class="detail">詳しく見る</p>
                  </a>
                </li>
              </ul>
              <div class="btn scrollin scregular"><a href="/service/hojin/" class="btn_reg white">法人のご相談一覧</a></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="office">
      <div class="inner">
        <hgroup class="hg_reg scrollin scregular">
          <p class="en">Our Office</p>
          <h2>事務所紹介</h2>
        </hgroup>
        <ul class="list scrollin sclist">
          <li>
            <a href="/office/" class="btn_detail">
              <figure><img src="/assets/images/top/office_1.jpg" alt="事務所案内"></figure>
              <div class="txt">
                <h3>事務所案内</h3>
                <p class="en">Office Information</p>
                <p class="detail">詳しく見る</p>
              </div>
            </a>
          </li>
          <li>
            <a href="/lawyer/" class="btn_detail">
              <figure><img src="/assets/images/top/office_2.jpg" alt="弁護士紹介"></figure>
              <div class="txt">
                <h3>弁護士紹介</h3>
                <p class="en">Lawyer</p>
                <p class="detail">詳しく見る</p>
              </div>
            </a>
          </li>
          <li>
            <a href="/price/" class="btn_detail">
              <figure><img src="/assets/images/top/office_3.jpg" alt="費用について"></figure>
              <div class="txt">
                <h3>費用について</h3>
                <p class="en">Cost</p>
                <p class="detail">詳しく見る</p>
              </div>
            </a>
          </li>
        </ul>
      </div>
    </section>
    <section id="column">
      <div class="inner">
        <hgroup class="hg_reg white scrollin scregular">
          <p class="en">Column</p>
          <h2>法律コラム</h2>
        </hgroup>
        <div class="body">
          <div class="columslider">
            <ul class="columnlist swiper-wrapper scrollin sclist">

          <?php
            global $post;
            $args = array(
              'posts_per_page' => 20,
              'post_type'=> 'column'
            );
            $myposts = get_posts( $args );
            foreach ( $myposts as $post ) : setup_postdata( $post );
            $terms = get_the_terms($post->ID, 'column_cat');
          ?>
            <li class="swiper-slide slide">
                <a href="/column_cat/<?php
                  if ($terms) :
                    foreach ($terms as $term) {
                        echo $term->slug;
                    }
                  endif;
                ?>" class="category"><?php
                  if ($terms) :
                    foreach ($terms as $term) {
                        echo $term->name;
                    }
                  endif;
                ?></a>
                <a class="mainlink" href="<?php the_permalink(); ?>">
                <?php
                $post_time = get_the_time('U');
                  $days = 14; //New!を表示させる日数
                  $last = time() - ($days * 24 * 60 * 60);
                  if ($post_time > $last) {
                  echo '<p class="new">NEW</p>';
                }
                ?>
                  <?php if (get_field('mainimg')) : ?>
                  <figure><img src="<?php the_field('mainimg'); ?>" alt="<?php the_title(); ?>""></figure>
                  <?php else : ?>
                  <figure><img src="/assets/images/column/logo.png" alt="<?php the_title(); ?>""></figure>
                  <?php endif; ?>
                  <p class="heading"><?php echo get_the_title(); ?></p>
                </a>
                <div class="tag">
                  <ul>
                    <?php
                      $terms = get_the_terms($post->ID, 'column_tag');
                      if ($terms) :
                          foreach ($terms as $term) {
                            echo '<li><object><a href="'.get_term_link($term->slug, 'column_tag').'">＃'.$term->name.'</a></object></li>'; //タームのリンク
                          }
                      endif;
                    ?>
                  </ul>
                </div>
              </li>
          <?php
          endforeach;
          wp_reset_postdata();
          ?>
            </ul>
          </div>
          <div class="btn scrollin scregular"><a href="/column/" class="btn_reg">法律コラム一覧</a></div>
        </div>
      </div>
    </section>
    <section id="news">
      <div class="inner">
        <hgroup class="hg_reg white scrollin scregular">
          <p class="en">News</p>
          <h2>お知らせ</h2>
        </hgroup>
        <div class="list">
          <ul class="news_list scrollin sclist">
        <?php query_posts('posts_per_page=3'); ?>
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
          <li>
            <p class="date"><?php the_time('Y.m.d'); ?></p>
            <p class="main"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
          </li>
          <?php endwhile; ?>
          <?php endif; ?>
        </ul>
          <div class="btn scrollin sclist"><a href="/news/" class="btn_reg white">記事一覧</a></div>
        </div>
      </div>
    </section>
  </main>
  <div id="cookie" class="cookie-consent">
    <div class="inner">
      <div class="txt">
      当サイトでは、サービスレベルの向上および、お客様により適したサービスを提供するために、クッキー（Cookie）を利用しています。当サイトを利用される方にはクッキーの許可／拒否を選択する権利があります。<br>クッキーの設定は、当社の「<a href="/cookie/">クッキー（Cookie）について</a>」をご確認ください。
      </div>
      <div class="btns">
        <div class="cookie-agree">承認</div>
        <div class="cookie-deny">閉じる</div>
      </div>
    </div>
  </div>
<?php
get_footer();
?>
