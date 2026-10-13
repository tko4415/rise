<?php
  get_template_part('template-parts/header', 'isharyo');
?>

<?php
  $page = get_post(get_the_ID());
  $slug = $page->post_name;
?>

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
<?php 
	$taxonomy_slug = "isharyo_column_cat";
	$taxonomy = get_the_terms($post->ID,$taxonomy_slug);
	// $subcat_name = $taxonomy[0]->name;
	// $subcat_slug = $taxonomy[0]->slug;
	// $subcat_id = $taxonomy[0]->term_id;
  // 移設時に「空の場合」を追加
  $subcat_name = isset($taxonomy[0]) ? $taxonomy[0]->name : '';
	$subcat_slug = isset($taxonomy[0]) ? $taxonomy[0]->slug : '';
	$subcat_id   = isset($taxonomy[0]) ? $taxonomy[0]->term_id : '';
?>
<main id="t-isharyo-column" class="<?php echo "isharyo-" . $slug; ?> t-tachinoki-column t-akewatashi-column column single">
    <!-- <h1 class="t-page-h1"><?php the_title(); ?></h1> -->
    <?php get_template_part( 'template-parts/breadcrumb', 'isharyo' ); ?>

    <div class="contents">
    <article class="article">
      <div class="article_inner">
        <div class="hgroup">
          <div class="spec">
            <p class="category">
              <span><?php echo $subcat_name; ?></span>
          </p>
            <p class="date"><?php the_time('Y/m/d'); ?></p>
          </div>

          <h1 class="column_ttl"><?php the_title(); ?></h1>
          <!-- <div class="tag">
            <span class="img"><img src="/assets/images/column/icon_tag.svg" alt=""></span>

            <ul>
              <li><a href="<?php home_url(); ?>/isharyo/column/">＃立ち退き</a></li>
            </ul>
          </div> -->
        </div>
        <?php if (get_field('outline')) : ?>
          <div class="outline">
            <?php the_field('outline'); ?>
          </div>
        <?php endif; ?>
        <?php if (get_field('mainimg')) : ?>
          <figure class="mainimg"><img src="<?php the_field('mainimg'); ?>" alt="<?php the_title(); ?>"></figure>
        <?php endif; ?>

        <div class="maintxt">
        <?php
        // 1. 本文を取得
        $content = get_field('bodycopy');

        // 2. CTAのHTMLを定義（isharyo：オーナー様向けVer）
        $cta_html = <<<EOD
          <div class="column-cta">
            <div class="column-cta_inner">
              <p class="column-cta_copy">不倫慰謝料を得意とする弁護士集団</p>
              <p class="column-cta_ttl">
                <span class="column-cta_sub-ttl">ライズ綜合法律事務所</span>
                浮気・不倫の慰謝料請求
              </p>
              <p class="column-cta_txt">弁護士があなたの代わりに<br class="sp">正当額を請求します</p>
              <ul class="column-cta_check-list">
                <li class="column-cta_check-item">浮気は明らかだけど何から始めればいいかわからない</li>
                <li class="column-cta_check-item">自分で請求したが1円も払ってもらえなかった</li>
                <li class="column-cta_check-item">不倫相手にしっかり責任を取らせたい</li>
              </ul>
              <ul class="column-cta_list">
                <li class="column-cta_item">相談料・着手金<span class="strong-red">0円</span>　完全成功報酬制</li>
                <li class="column-cta_item">解決実績 <span class="strong-red">5,000件</span>以上</li>
                <li class="column-cta_item">法律相談件数 累計<span class="strong-red">30万件</span>以上</li>
              </ul>
              <div class="column-cta_btn-box">
                <p class="column-cta_btn"><a class="column-cta_link" href="tel:0120657001"><span>無料電話相談</span><span class="column-cta_small">9:00–21:00／土日祝も受付</span></a></p>
                <p class="column-cta_btn"><a class="column-cta_link" href="/isharyo/contact/"><span>お問い合わせ</span><span class="column-cta_small">フォームで簡単相談</span></a></p>
              </div>
            </div>
          </div>
        EOD;

        // 3. 本文をH2タグで分割＋カウント
        $chunks = explode('<h2', $content);
        $h2_count = count($chunks) - 1;

        // 4. 挿入位置の設定
        $insert_positions = [];  // 通常の挿入位置
        $append_at_end = false;  // 記事の最後に追記するかどうかのフラグ

        if ($h2_count === 2) {
          // H2が2個：2個目の直前（特例ルール）
          $insert_positions = [2];
        } elseif ($h2_count >= 3) {
          // H2が3個以上：基本は3の倍数 (3, 6, 9, 12...) (無限ループにならないよう、現在のH2個数+1までチェック)
          for ($i = 3; $i <= $h2_count + 1; $i += 3) {
            if ($i <= $h2_count) {
                // そのH2が存在する場合（例：H2が6個ある時の「6」など）
                // → そのH2の直前に挿入
                $insert_positions[] = $i;
            } else {
                // そのH2が存在しないが、ループ条件に引っかかった場合 （例：H2が5個しかない時の「6」、H2が8個しかない時の「9」）
                // → 記事の最後に挿入
                $append_at_end = true;
            }
          }
        }

        // 5. ループで出力
        foreach ($chunks as $index => $chunk) {
          // 通常の挿入位置ならCTA出力
          if (in_array($index, $insert_positions)) {
            echo $cta_html;
          }
          // 本文出力（H2タグを復元）
          if ($index > 0) {
            echo '<h2' . $chunk;
          } else {
            echo $chunk;
          }
        }

        // 6. 「文章の最後」フラグが立っていれば、最後にもう一回CTA出力
        // （H2が5個や8個の時のための処理）
        if ($append_at_end) {
          echo $cta_html;
        }
        ?>
        </div>

        <div class="btn_wrapper tac">
          <a href="/isharyo/" target="_blank" class="btn_regular btn_band btn_bnr btn_column divorce wire_white evacuation" rel="noopener">
          <!-- <a href="/isharyo/" target="_blank" class="btn_regular btn_band btn_bnr btn_column wire_white" rel="noopener"> -->
            <span class="ul">
              <div class="txt tal">
                <span class="large">不倫慰謝料を請求したい方</span><br>
                <span class="small">専用サイトはこちら</span>
              </div>
            </span>
            <div class="fig" style="background-image:url(/assets_prev/images/common/bnr_divorce_ph.jpg);"></div>
          </a>
        </div>

        <?php if (get_field('sv_name')) : ?>
        <div class="sv">
          <h4>このページの監修弁護士</h4>
          <div class="body">
          <?php if (get_field('sv_ph')) : ?>
          <figure><img src="<?php the_field('sv_ph'); ?>" alt=""></figure>
          <?php endif; ?>
            <div class="txt">
              <div class="heading"><p class="position">弁護士</p><p class="name"><?php the_field('sv_name'); ?></p></div>
              <div class="honbun">
              <?php the_field('sv_txt'); ?>
            </div>
            </div>
          </div>
        <!-- lawyer --></div>
        <?php endif; ?>
        <div class="btn_list_wrapper">
          <a href="<?php home_url(); ?>/isharyo/column/" class="btn_list">不倫慰謝料の記事一覧へ</a></div>
        <?php
        // 変更
        // $post_type = 'isharyo_column';
          $post_type = 'isharyo-column'; //「ブログ」のカスタム投稿タイプ名
          $taxonomy = 'isharyo_column_cat'; //「ブログ」のカスタム分類（タクソノミー）名
          $terms = get_the_terms($post->ID, $taxonomy);
          $related_posts = array(); // 空の配列を用意
          // カテゴリーが設定されている場合のみタームIDをセットし、記事を取得する
          if ( $terms && ! is_wp_error( $terms ) ) {
            $this_term = reset($terms);

            $ancestors = get_ancestors($this_term ->term_id, $taxonomy );
            if($ancestors){
              $ancestor_id = end($ancestors); //先祖タームの最終要素IDをセット
            }else{
              $ancestor_id = $this_term->term_id; //自分自身のタームIDをセット
            }
            //当記事を除いて記事一覧を取得
              $related_posts = get_posts( array(
            'post_type' => $post_type,
            'tax_query' => array(
                array(
                  'taxonomy' => $taxonomy,
                    'field' => 'term_id',
                  'terms' => $ancestor_id
                )
            ),
            'posts_per_page' => 3,
            'exclude' => get_the_ID()
            ));
          }
          if (count($related_posts) > 0) :
        ?>
        <div class="related">
          <h4>関連記事</h4>
          <div class="frame">
            <ul>
            <?php
            foreach ($related_posts as $post) : setup_postdata($post); ?>
              <li><a href="<?php the_permalink(); ?>">
                <p><?php the_title(); ?></p>
                <?php if (get_field('mainimg')) : ?>
                  <figure><img src="<?php the_field('mainimg'); ?>" alt=""></figure>
                <?php else : ?>
                  <figure><img src="/assets_prev/images/column/logo.png" alt=""></figure>
                <?php endif; ?>
              </a></li>
            <?php endforeach;
            wp_reset_postdata();?>
            </ul>
          </div>
        </div>
        <?php endif; ?>
      </div>
    </article>
    <?php get_template_part('column_aside_isharyo');?>
    </div>
    <?php get_template_part('sns');?>
  </main>
<?php endwhile; endif; ?>

<?php
  get_template_part('template-parts/footer', 'isharyo');
?>