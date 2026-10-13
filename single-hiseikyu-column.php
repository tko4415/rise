<?php
if (have_posts()) {
  the_post();
}

$lp_config = rise_hiseikyu_lp_config(array(
  'title' => get_the_title() . '｜弁護士法人ライズ綜合法律事務所',
  'desc' => wp_trim_words(wp_strip_all_tags(get_field('outline') ? get_field('outline') : (get_the_excerpt() ? get_the_excerpt() : get_field('bodycopy'))), 80, ''),
  'styles' => array(
    'css/tokusetu/t_03_lower.css',
    'css/tokusetu/t_06_column.css',
    'css/tokusetu/t_common.css',
    'css/tokusetu/t_child-common.css',
    'css/tokusetu/t_column.css',
    'css/tokusetu/t_search.css',
  ),
));
set_query_var('lp_config', $lp_config);
get_template_part('template-parts/lp/header', 'isyaryo');

$column_post = get_post(get_the_ID());
$slug = $column_post ? $column_post->post_name : '';
$taxonomy_slug = 'hiseikyu_column_cat';
$taxonomy = get_the_terms(get_the_ID(), $taxonomy_slug);
$subcat_name = isset($taxonomy[0]) ? $taxonomy[0]->name : '';
$archive = get_post_type_archive_link('hiseikyu-column');
?>
<main id="t-isharyo-column" class="<?php echo 'hiseikyu-' . $slug; ?> t-tachinoki-column t-akewatashi-column column single">
    <?php get_template_part('template-parts/lp/hiseikyu-column', 'breadcrumb'); ?>

    <div class="contents">
    <article class="article">
      <div class="article_inner">
        <div class="hgroup">
          <div class="spec">
            <p class="category">
              <span><?php echo esc_html($subcat_name); ?></span>
          </p>
            <p class="date"><?php the_time('Y/m/d'); ?></p>
          </div>

          <h1 class="column_ttl"><?php the_title(); ?></h1>
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
        $content = function_exists('get_field') ? get_field('bodycopy') : '';
        if (!$content && $column_post) {
          $content = $column_post->post_content;
        }

        $cta_html = <<<EOD
          <div class="column-cta">
            <div class="column-cta_inner">
              <p class="column-cta_copy">不倫慰謝料の減額交渉を得意とする弁護士集団</p>
              <p class="column-cta_ttl">
                <span class="column-cta_sub-ttl">ライズ綜合法律事務所</span>
                浮気・不倫の慰謝料減額
              </p>
              <p class="column-cta_txt">弁護士があなたの代わりに<br class="sp">適正額での解決を目指します</p>
              <ul class="column-cta_check-list">
                <li class="column-cta_check-item">請求された金額が妥当か分からない</li>
                <li class="column-cta_check-item">自分で対応したが減額できなかった</li>
                <li class="column-cta_check-item">会社や家族に知られずに解決したい</li>
              </ul>
              <ul class="column-cta_list">
                <li class="column-cta_item">相談料<span class="strong-red">0円</span>　何度でも無料</li>
                <li class="column-cta_item">解決実績 <span class="strong-red">5,000件</span>以上</li>
                <li class="column-cta_item">法律相談件数 累計<span class="strong-red">45万件</span>以上※</li>
              </ul>
              <p class="column-cta_right-txt">※2018年6月～2026年6月時点</p>
              <div class="column-cta_btn-box">
                <p class="column-cta_btn"><a class="column-cta_link" href="tel:0120657001"><span>無料電話相談</span><span class="column-cta_small">9:00–21:00／土日祝も受付</span></a></p>
                <p class="column-cta_btn"><a class="column-cta_link" href="/hiseikyu/contact/"><span>お問い合わせ</span><span class="column-cta_small">フォームで簡単相談</span></a></p>
              </div>
            </div>
          </div>
        EOD;

        $chunks = explode('<h2', (string) $content);
        $h2_count = count($chunks) - 1;

        $insert_positions = [];
        $append_at_end = false;

        if ($h2_count === 2) {
          $insert_positions = [2];
        } elseif ($h2_count >= 3) {
          for ($i = 3; $i <= $h2_count + 1; $i += 3) {
            if ($i <= $h2_count) {
                $insert_positions[] = $i;
            } else {
                $append_at_end = true;
            }
          }
        }

        foreach ($chunks as $index => $chunk) {
          if (in_array($index, $insert_positions)) {
            echo $cta_html;
          }
          if ($index > 0) {
            echo '<h2' . $chunk;
          } else {
            echo $chunk;
          }
        }

        if ($append_at_end) {
          echo $cta_html;
        }
        ?>
        </div>

        <div class="btn_wrapper tac">
          <a href="/hiseikyu/" target="_blank" class="btn_regular btn_band btn_bnr btn_column divorce wire_white evacuation" rel="noopener">
            <span class="ul">
              <div class="txt tal">
                <span class="large">不倫慰謝料を請求された方</span><br>
                <span class="small">専用サイトはこちら</span>
              </div>
            </span>
            <div class="fig" style="background-image:url(/assets/images/service/kojin/isharyo/banner_ph_2.jpg);"></div>
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
          <a href="<?php echo esc_url($archive); ?>" class="btn_list">不倫慰謝料減額の記事一覧へ</a></div>
        <?php
          $post_type = 'hiseikyu-column';
          $taxonomy = 'hiseikyu_column_cat';
          $terms = get_the_terms($post->ID, $taxonomy);
          $related_posts = array();
          if ( $terms && ! is_wp_error( $terms ) ) {
            $this_term = reset($terms);

            $ancestors = get_ancestors($this_term ->term_id, $taxonomy );
            if($ancestors){
              $ancestor_id = end($ancestors);
            }else{
              $ancestor_id = $this_term->term_id;
            }
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
    <?php get_template_part('template-parts/lp/hiseikyu-column', 'aside'); ?>
    </div>
    <?php get_template_part('sns'); ?>
  </main>

<?php get_template_part('template-parts/lp/footer', 'isyaryo'); ?>
