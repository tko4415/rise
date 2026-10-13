<?php
  get_template_part('template-parts/header', 'tachinoki');
?>

<?php
  $page = get_post(get_the_ID());
  $slug = $page->post_name;
?>

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
<?php 
	$taxonomy_slug = "tachinoki_column_cat";
	$taxonomy = get_the_terms($post->ID,$taxonomy_slug);
	$subcat_name = $taxonomy[0]->name;
	$subcat_slug = $taxonomy[0]->slug;//タームスラッグ
	$subcat_id = $taxonomy[0]->term_id;//タームスラッグ
?>
<main id="t-tachinoki-column" class="<?php echo "tachinoki-" . $slug; ?> t-tachinoki-column column single">
    <!-- <h1 class="t-page-h1"><?php the_title(); ?></h1> -->
    <?php get_template_part( 'template-parts/breadcrumb', 'tachinoki' ); ?>

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
              <li><a href="<?php home_url(); ?>/tachinoki/column/">＃立ち退き</a></li>
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

        // 2. CTAのHTMLを定義（tachinoki：オーナー様向けVer）
        $cta_html = <<<EOD
          <div class="column-cta">
            <div class="column-cta_inner">
              <p class="column-cta_ttl">突然の立ち退き通知で驚いた方へ</p>
              <p class="column-cta_txt">いまは「何をすればいいか分からない」<br class="sp">状態でも大丈夫です。<br>返答・署名の前に、状況整理と方針確認を<br class="sp">無料でサポートします。</p>
              <ul class="column-cta_list">
                <li class="column-cta_item">相談・着手金 0円</li>
                <li class="column-cta_item">全国対応・オンライン可</li>
                <li class="column-cta_item">相談件数 1.6万件／解決実績 3,000件</li>
              </ul>
              <div class="column-cta_btn-box">
                <p class="column-cta_btn"><a class="column-cta_link" href="tel:0120657001"><span>無料電話相談</span><span class="column-cta_small">9:00–21:00／土日祝も受付 </span></a></p>
                <p class="column-cta_btn"><a class="column-cta_link" href="/tachinoki/contact/"><span>お問い合わせ</span><span class="column-cta_small">フォームで簡単相談</span></a></p>
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
          <a href="/tachinoki/" target="_blank" class="btn_regular btn_band btn_bnr btn_column wire_white" rel="noopener">
            <span class="ul">
              <div class="txt tal">
                <span class="large">立退料交渉サービス</span><br>
                <span class="small">専用サイトはこちら</span>
              </div>
            </span>
            <div class="fig" style="background-image:url(/wp-content/uploads/2022/09/bnr_evacuation_ph.jpg);"></div>
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
          <a href="<?php home_url(); ?>/tachinoki/column/" class="btn_list">立ち退きの記事一覧へ</a></div>
        <?php
          $post_type = 'tachinoki_column'; //「ブログ」のカスタム投稿タイプ名
          $taxonomy = 'tachinoki_column_cat'; //「ブログ」のカスタム分類（タクソノミー）名
          $terms = get_the_terms($post->ID,$taxonomy);
          $this_term = $terms[0];

          $ancestors = get_ancestors($this_term ->term_id, $taxonomy );
          if($ancestors){
            $ancestor_id = end($ancestors); //先祖タームの最終要素IDをセット
          }else{
            $ancestor_id = $this_term->term_id; //自分自身のタームIDをセット
          }
          //当記事を除いて記事一覧を取得
          $posts = get_posts( array(
          'post_type' => $post_type,
          'tax_query' => array(
              array(
                'taxonomy' => $taxonomy,
                'field' => 'id',
                'terms' => $ancestor_id
              )
          ),
          'posts_per_page' => 3,
          'exclude' => get_the_ID()
          ));
          if (count($posts) > 0) :
        ?>
        <div class="related">
          <h4>関連記事</h4>
          <div class="frame">
            <ul>
            <?php
            foreach ($posts as $post) : ?>
              <li><a href="<?php the_permalink(); ?>">
                <p><?php the_title(); ?></p>
                <?php if (get_field('mainimg')) : ?>
                  <figure><img src="<?php the_field('mainimg'); ?>" alt=""></figure>
                <?php else : ?>
                  <figure><img src="/assets/images/column/logo.png" alt=""></figure>
                <?php endif; ?>
              </a></li>
            <?php endforeach; ?>
            </ul>
          </div>
        </div>
        <?php endif; ?>
      </div>
    </article>
    <?php get_template_part('column_aside_tachinoki');?>
    </div>
    <?php get_template_part('sns');?>
  </main>
<?php endwhile; endif; ?>

<?php
  get_template_part('template-parts/footer', 'tachinoki');
?>