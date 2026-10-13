<?php

//define('WP_DEBUG',true);
//define('WP_THEMES_ROOT',get_template_directory_uri());

if (!defined('DS')) {
    define('DS', DIRECTORY_SEPARATOR);
}

if (!empty($_SERVER['DOCUMENT_ROOT']) && !defined('WWW_ROOT')) {
    define('WWW_ROOT', $_SERVER['DOCUMENT_ROOT'] . DS);
}
function wpinc($file) {
    include get_template_directory() . DS . $file;
}
function is_parent_slug() {
  global $post;
  if ($post->post_parent) {
      $post_data = get_post($post->post_parent);
      return $post_data->post_name;
  }
}
// --------------------------------------------------
// 投稿のURLを/news/にする
// --------------------------------------------------
function add_article_post_permalink( $permalink ) {
  $permalink = '/news' . $permalink;
  return $permalink;
}
add_filter( 'pre_post_link', 'add_article_post_permalink' );

function add_article_post_rewrite_rules( $post_rewrite ) {
  $return_rule = array();
  foreach ( $post_rewrite as $regex => $rewrite ) {
      $return_rule['news/' . $regex] = $rewrite;
  }
  return $return_rule;
}
add_filter( 'post_rewrite_rules', 'add_article_post_rewrite_rules' );
// --------------------------------------------------
// Change the label of post.
// --------------------------------------------------
function change_post_menu_label() {
  global $menu;
  global $submenu;
  $menu[5][0] = '新着情報';
  $submenu['edit.php'][5][0] = '新着情報一覧';
  $submenu['edit.php'][10][0] = '新しい新着情報';
  $submenu['edit.php'][16][0] = 'タグ';
  //echo ”;
}
function change_post_object_label() {
  global $wp_post_types;
  $labels = &$wp_post_types['post']->labels;
  $labels->name = '新着情報';
  $labels->singular_name = '新着情報';
  $labels->add_new = _x('追加', '新着情報');
  $labels->add_new_item = '新しい新着情報';
  $labels->edit_item = '新着情報の編集';
  $labels->new_item = '新しい新着情報';
  $labels->view_item = '新着情報を表示';
  $labels->search_items = '新着情報検索';
  $labels->not_found = '新着情報が見つかりませんでした';
  $labels->not_found_in_trash = 'ゴミ箱の新着情報にも見つかりませんでした';
}
add_action( 'init', 'change_post_object_label' );
add_action( 'admin_menu', 'change_post_menu_label' );

/*-----------------------------------------------------------------------------------*/
/* 管理ページ
/*-----------------------------------------------------------------------------------*/

function my_excerpt_more($more) {
	return '...<span class="more">→ read more</span>';
}
add_filter('excerpt_more', 'my_excerpt_more');
function remove_menus(){
  // remove_menu_page( 'edit.php' ); //投稿メニュー
  if( current_user_can( 'editor' ) ){
    //remove_menu_page( 'index.php' ); //ダッシュボード
    //remove_menu_page( 'edit.php' ); //投稿メニュー
    //remove_menu_page( 'upload.php' ); //メディア
    remove_menu_page( 'edit.php?post_type=page' ); //固定ページ
    remove_menu_page( 'edit-comments.php' ); //コメントメニュー
    remove_menu_page( 'themes.php' ); //外観メニュー
    remove_menu_page( 'plugins.php' ); //プラグインメニュー
    remove_menu_page( 'tools.php' ); //ツールメニュー
    remove_menu_page( 'options-general.php' ); //設定メニュー
    remove_menu_page( 'wpcf7'); //お問い合わせ contactform7
    remove_menu_page( 'customtaxorder'); //Term Order
  }
}
add_action( 'admin_menu', 'remove_menus' );


function custom_menu_order($menu_ord) {
	if (!$menu_ord) return true;
	return array(
		'index.php', // ダッシュボード
		'edit.php', // 投稿
		'edit.php?post_type=column', // カスタム投稿タイプ「法律コラム」
		'edit.php?post_type=tachinoki-column', // カスタム投稿タイプ「立ち退きコラム」
		'edit.php?post_type=akewatashi-column', // カスタム投稿タイプ「建物明け渡し請求コラム」
		'edit.php?post_type=saimu-column', // カスタム投稿タイプ「債務整理コラム」
		'edit.php?post_type=isharyo-column', // カスタム投稿タイプ「不倫慰謝料コラム」
		'edit.php?post_type=hiseikyu-column', // カスタム投稿タイプ「減額コラム」
		// 'edit.php??post=26&action=edit', // 固定ページ
		'edit.php?post_type=page', // 固定ページ
		'upload.php', // メディア
		'profile.php', // 設定
		'separator1', // 最初の区切り線
		'separator2', // 二つ目の区切り線
		'users.php', // ユーザー
		'options-general.php', // 設定
		'link-manager.php', // リンク
		'themes.php', // 外観
		'plugins.php', // プラグイン
		'tools.php', // ツール
		'separator-last', // 最後の区切り線
		'edit-comments.php', // コメント
	);
}
add_filter('custom_menu_order', 'custom_menu_order'); // Activate custom_menu_order
add_filter('menu_order', 'custom_menu_order');

// ==========================================================================
// Custom Field Suiteのループタイトルを変更
// ==========================================================================
function my_admin_script() {
  echo '<script>
  window.addEventListener("DOMContentLoaded", function(){
    jQuery(".loop_wrapper").each(function(index) {
      var target = jQuery(this).find(".cfs_text input").val();
      jQuery(this).find("span.label").text(target);
    });
  });
  </script>'.PHP_EOL;
  }
  add_action('admin_print_scripts', 'my_admin_script');
  
/*-----------------------------------------------------------------------------------*/
/* contactform 7 へ引き継ぎ
/*-----------------------------------------------------------------------------------*/

function my_form_tag_filter($tag){
  if ( ! is_array( $tag ) )
  return $tag;
  if(isset($_POST['ttl'])){
    $name = $tag['name'];
    if($name == 'ttl')
      $tag['values'] = (array) $_POST['ttl'];
  }
  return $tag;
}
add_filter('wpcf7_form_tag', 'my_form_tag_filter');

/*-----------------------------------------------------------------------------------*/
/* カスタム投稿のアーカイブ毎に表示件数を指定
/*-----------------------------------------------------------------------------------*/
add_action( 'pre_get_posts', 'my_custom_query_vars' );
function my_custom_query_vars( $query ) {
	/* @var $query WP_Query */
	if ( !is_admin() && $query->is_main_query()) {
		if ( is_post_type_archive('column_cat') ) {
			$query->set( 'posts_per_page' , 14 );//表示したい数
		}
	}
	return $query;
}

// ==========================================================================
// pタグ自動挿入禁止
// ==========================================================================
function wpautop_filter($content) {
  global $post;
  $remove_filter = false;
  $arr_types = array('page');
  $post_type = get_post_type( $post->ID );
  if (in_array($post_type, $arr_types)) $remove_filter = true;
  if ( $remove_filter ) {
    remove_filter('the_content', 'wpautop');
    remove_filter('the_excerpt', 'wpautop');
  }
  return $content;
}
add_filter('the_content', 'wpautop_filter', 9);

// ==========================================================================
// svgアップロード
// ==========================================================================
function arrow_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'arrow_mime_types');
// ==========================================================================
// 
// ==========================================================================
add_filter('redirect_canonical','my_disable_redirect_canonical');
function my_disable_redirect_canonical( $redirect_url ) {
    if ( is_single( 'case' ) )
    $redirect_url = false;
    return $redirect_url;
}
// ==========================================================================
// アーカイブページの時に表示件数を10件にセット
// ==========================================================================
function change_posts_per_page($query) {
  if ( is_admin() || ! $query->is_main_query() )
      return;
  /* アーカイブページの時に表示件数を10件にセット */
  if ( $query->is_archive() ) {
      $query->set( 'posts_per_page', '9' );
  }
  if ( $query->is_archive('column') ) {
      $query->set( 'posts_per_page', '9' );
  }
  /* ポストアーカイブの時に表示件数をセット */
  if ( $query->is_post_type_archive('colum_cat')|| $query->is_post_type_archive('colum_tag') ) {
      $query->set( 'posts_per_page', '9' );
  }
  /* 検索ページの時に表示件数を20件にセット */
  if ( $query->is_search() ) {
      $query->set( 'posts_per_page', '9' );
  }
}
add_action( 'pre_get_posts', 'change_posts_per_page' );
// ==========================================================================
// 
// ==========================================================================
add_filter( 'post_type_link', 'my_post_type_link', 1, 2 );
function my_post_type_link( $link, $post ){
  if ( 'news' === $post->post_type ) {
    return home_url( '/news/' . $post->ID );
  } else {
    return $link;
  }
}
add_filter( 'rewrite_rules_array', 'my_rewrite_rules_array' );
function my_rewrite_rules_array( $rules ) {
  $event_list = array( 
    'news/([0-9]+)/?$' => 'index.php?post_type=news&p=$matches[1]',
  );
  return $event_list + $rules;
}
// ==========================================================================
// 
// ==========================================================================

add_filter('next_posts_link_attributes', 'posts_link_attributes');
function posts_link_attributes() {
    return 'class="pager_btn "';
}
add_filter('previous_posts_link_attributes', 'posts_link_attributes_p');
function posts_link_attributes_p() {
    return 'class="pager_btn back"';
}

// ==========================================================================
// カスタムフィールド内検索対象に
// ==========================================================================

function cf_search_join( $join ) {
	global $wpdb;
	if ( is_search() ) {
		$join .= ' LEFT JOIN ' . $wpdb->postmeta . ' ON ' . $wpdb->posts . '.ID = ' . $wpdb->postmeta . '.post_id ';
	}
	return $join;
}
add_filter( 'posts_join', 'cf_search_join' );

function cf_search_where( $where ) {
	global $wpdb;
	if ( is_search() ) {
		$where = preg_replace(
			"/\(\s*" . $wpdb->posts . ".post_title\s+LIKE\s*(\'[^\']+\')\s*\)/",
			"(" . $wpdb->posts . ".post_title LIKE $1) OR (" . $wpdb->postmeta . ".meta_value LIKE $1)", $where );

		// 特定のカスタムフィールドを検索対象から外す（※１）
//		$where .= " AND (" . $wpdb->postmeta . ".meta_key NOT LIKE 'number')";
//		$where .= " AND (" . $wpdb->postmeta . ".meta_key NOT LIKE 'zip')";
//		$where .= " AND (" . $wpdb->postmeta . ".meta_key NOT LIKE 'access')";
	}
	return $where;
}
add_filter( 'posts_where', 'cf_search_where' );

function cf_search_distinct( $where ) {
	global $wpdb;
	if ( is_search() ) {
		return "DISTINCT";
	}
	return $where;
}
add_filter( 'posts_distinct', 'cf_search_distinct' );

// ==========================================================================
// contactform7 メール確認 
// ==========================================================================
add_filter( 'wpcf7_validate_email', 'wpcf7_validate_email_filter_confrim', 11, 2 );
add_filter( 'wpcf7_validate_email*', 'wpcf7_validate_email_filter_confrim', 11, 2 );
function wpcf7_validate_email_filter_confrim( $result, $tag ) {
    $type = $tag['type'];
    $name = $tag['name'];
    if ( 'email' == $type || 'email*' == $type ) {
        if (preg_match('/(.*)_confirm$/', $name, $matches)){ //確認用メルアド入力フォーム名を ○○○_confirm としています。
            $target_name = $matches[1];
                $posted_value = trim( (string) $_POST[$name] ); //前後空白の削除
                $posted_target_value = trim( (string) $_POST[$target_name] ); //前後空白の削除
            if ($posted_value != $posted_target_value) {
                $result->invalidate( $tag,"確認用のメールアドレスが一致していません");
            }
        }
    }
    return $result;
}
// ==========================================================================
// Contact Form 7 バリデーション
// ==========================================================================
/**
* contact-form-7でバリデーションを追加
*/
add_filter('wpcf7_validate_text', 'wpcf7_validate_post', 11, 2);
add_filter('wpcf7_validate_text*', 'wpcf7_validate_post', 11, 2);
function wpcf7_validate_post($result,$tag){
$tag = new WPCF7_Shortcode($tag);
$name = $tag->name;
$value = isset($_POST[$name]) ? trim(wp_unslash(strtr((string) $_POST[$name], "\n", " "))) : "";
//$nameはContactForm7のフォーム要素(input等)のname="この部分"
//$valueはユーザーが入力した(選択した)値
//
//ここから項目を指定してバリデーションの追加
//
/**
*名字のフリガナ 名前のフリガナ
**/
if ($name === "your-kana" || $name === "your-comkana") {
  //"your-lastname-kana"を適用したいフォーム項目の名前に書き換える
  if(!preg_match("/^[ア-ヶー]+$/u", $value)) {
  //if(!preg_match("カタカナ",$value))に当てはまらない(!)場合は
  // if(!preg_match("/^[ぁ-ん]+$/u", $value)) { ひらがなのふりがなを使用する場合はこのコードに置き変える。
  if (method_exists($result, 'invalidate')) {
  $result->invalidate( $tag,"全角カタカナで入力してください");
  } else {
  $result['valid'] = false;
  $result['reason'][$name] = '全角カタカナで入力してください';
  }
  }
  //条件を変えた場合は文言も書き換えておく。
  }
  
//
//ここまでバリデーションの追加
return $result;
}
// ==========================================================================
// 「イベント終了」カテゴリの記事タイトルに終了ラベルを追加
// ==========================================================================
function add_finished_label_to_title($title, $post_id = null) {
    // 新着情報の一覧表示の場合のみ処理（メインループ内であることを確認）
    if (in_the_loop() && !is_admin() && $post_id) {
        // 「event_finished」カテゴリに属しているか確認
        if (has_category('event_finished', $post_id)) {
            $title .= ' <span class="event-finished-label">終了しました</span>';
        }
    }
    return $title;
}
add_filter('the_title', 'add_finished_label_to_title', 10, 2);

// 必要なCSSをヘッダーに追加
function add_finished_label_css() {
    echo '<style>
        .event-finished-label {
            color: red;
            font-weight: bold;
            margin-left: 10px;
            display: inline-block;
        }
    </style>';
}
add_action('wp_head', 'add_finished_label_css');


// function maintenance_mode() {
//   if (!current_user_can('edit_themes') || !is_user_logged_in()) {
//       wp_die('メンテナンス中です。公開までしばらくお待ち下さい。');
//   }
// }
// add_action('get_header', 'maintenance_mode');

// ==========================================================================
// LP下層 減額コラム
// ==========================================================================
function rise_hiseikyu_home() {
  return '/hiseikyu/';
}

function rise_hiseikyu_lp_config($overrides = array()) {
  $nav = array(
    array('label' => '弁護士費用', 'url' => '/hiseikyu/price/'),
    array('label' => '解決までの流れ', 'url' => '/hiseikyu/flow/'),
    array('label' => '弁護士紹介', 'url' => '/hiseikyu/lawyer/'),
    array('label' => '事務所案内', 'url' => '/hiseikyu/office/'),
    array('label' => '不倫慰謝料減額コラム', 'url' => '/hiseikyu/column/'),
  );
  $base = array(
    'home' => '/hiseikyu/',
    'copy' => '不倫慰謝料の減額交渉を得意とする',
    'contact' => '/hiseikyu/contact/',
    'tel' => '0120-657-001',
    'tel_href' => '0120657001',
    'nav' => $nav,
    'footer_nav' => array_merge($nav, array(
      array('label' => 'お問い合わせ', 'url' => '/hiseikyu/contact/'),
    )),
    'lower' => true,
    'styles' => array(),
    'scripts' => array(),
  );
  return array_merge($base, $overrides);
}

function rise_hiseikyu_theme_support() {
  add_theme_support('post-thumbnails');
  add_post_type_support('hiseikyu-column', 'thumbnail');
}
add_action('after_setup_theme', 'rise_hiseikyu_theme_support');

function rise_hiseikyu_search_robots($robots) {
  if (is_search() && get_query_var('post_type') === 'hiseikyu-column') {
    $robots['noindex'] = true;
    $robots['nofollow'] = true;
    unset($robots['follow']);
  }
  return $robots;
}
add_filter('wp_robots', 'rise_hiseikyu_search_robots', 99);

function rise_hiseikyu_legacy_page_template($template) {
  $map = array(
    'page-lp-isyaryo-hiseikyu.php' => 'page-hiseikyu.php',
    'page-lp-isyaryo-hiseikyu-price.php' => 'page-hiseikyu-price.php',
    'page-lp-isyaryo-hiseikyu-flow.php' => 'page-hiseikyu-flow.php',
    'page-lp-isyaryo-hiseikyu-lawyer.php' => 'page-hiseikyu-lawyer.php',
    'page-lp-isyaryo-hiseikyu-office.php' => 'page-hiseikyu-office.php',
    'page-lp-isyaryo-hiseikyu-contact.php' => 'page-hiseikyu-contact.php',
  );
  $slug = (string) get_page_template_slug();
  if (!isset($map[$slug])) {
    return $template;
  }
  $located = locate_template($map[$slug]);
  return $located ? $located : $template;
}
add_filter('page_template', 'rise_hiseikyu_legacy_page_template');

function rise_hiseikyu_exclude_thanks_from_sitemap($args, $post_type) {
  if ($post_type !== 'page') {
    return $args;
  }
  $thanks = get_page_by_path('hiseikyu/contact/thanks');
  if (!$thanks) {
    return $args;
  }
  if (empty($args['post__not_in']) || !is_array($args['post__not_in'])) {
    $args['post__not_in'] = array();
  }
  $args['post__not_in'][] = (int) $thanks->ID;
  return $args;
}
add_filter('wp_sitemaps_posts_query_args', 'rise_hiseikyu_exclude_thanks_from_sitemap', 10, 2);

function rise_is_isharyo_page($which = 'top') {
  if (!is_page()) {
    return false;
  }
  $map = array(
    'top' => 'page-isharyo-top.php',
    'price' => 'page-isharyo-price.php',
    'flow' => 'page-isharyo-flow.php',
    'lawyer' => 'page-isharyo-lawyer.php',
    'office' => 'page-isharyo-office.php',
    'contact' => 'page-isharyo-contact.php',
    'thanks' => 'page-isharyo-contact.php',
  );
  $tpl = (string) get_page_template_slug();
  if (!isset($map[$which]) || $tpl !== $map[$which]) {
    return false;
  }
  $slug = get_post_field('post_name', get_queried_object_id());
  if ($which === 'thanks') {
    return $slug === 'thanks';
  }
  if ($which === 'contact') {
    return $slug === 'contact';
  }
  return true;
}

function rise_register_hiseikyu_column() {
  register_post_type('hiseikyu-column', array(
    'labels' => array(
      'name' => '不倫慰謝料減額コラム',
      'singular_name' => '減額コラム',
      'add_new' => '新規追加',
      'add_new_item' => '減額コラムを追加',
      'edit_item' => '減額コラムを編集',
      'new_item' => '新しい減額コラム',
      'view_item' => '減額コラムを表示',
      'search_items' => '減額コラムを検索',
      'not_found' => '減額コラムが見つかりませんでした',
      'not_found_in_trash' => 'ゴミ箱に減額コラムはありません',
      'all_items' => '減額コラム一覧',
      'menu_name' => '減額コラム',
    ),
    'public' => true,
    'has_archive' => 'hiseikyu/column',
    'rewrite' => array(
      'slug' => 'hiseikyu/column',
      'with_front' => false,
    ),
    'menu_position' => 8,
    'menu_icon' => 'dashicons-welcome-write-blog',
    'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
    'taxonomies' => array('column_pickup'),
    'show_in_rest' => true,
  ));

  register_taxonomy('hiseikyu_column_cat', 'hiseikyu-column', array(
    'labels' => array(
      'name' => '不倫慰謝料減額コラムカテゴリー',
      'singular_name' => '不倫慰謝料減額コラムカテゴリー',
    ),
    'public' => true,
    'hierarchical' => false,
    'rewrite' => array('slug' => 'hiseikyu/column/category'),
    'show_in_rest' => true,
  ));
}
add_action('init', 'rise_register_hiseikyu_column');

function rise_hiseikyu_column_attach_pickup() {
  if (taxonomy_exists('column_pickup') && post_type_exists('hiseikyu-column')) {
    register_taxonomy_for_object_type('column_pickup', 'hiseikyu-column');
  }
}
add_action('init', 'rise_hiseikyu_column_attach_pickup', 20);

function rise_flush_hiseikyu_column_rewrite() {
  if (get_option('rise_hiseikyu_column_rewrite') === '3') {
    return;
  }
  rise_register_hiseikyu_column();
  flush_rewrite_rules(false);
  update_option('rise_hiseikyu_column_rewrite', '3');
}
add_action('init', 'rise_flush_hiseikyu_column_rewrite', 99);

function rise_hiseikyu_column_image($post_id = null) {
  $post_id = $post_id ? $post_id : get_the_ID();
  $acf = rise_hiseikyu_column_field('mainimg', $post_id);
  if ($acf) {
    return $acf;
  }
  if (has_post_thumbnail($post_id)) {
    return get_the_post_thumbnail_url($post_id, 'medium_large');
  }
  return '';
}

function rise_hiseikyu_column_field($key, $post_id = null) {
  $post_id = $post_id ? $post_id : get_the_ID();
  $value = '';
  if (function_exists('get_field')) {
    $value = get_field($key, $post_id);
  }
  if (!$value) {
    $value = get_post_meta($post_id, $key, true);
  }
  if (is_array($value)) {
    if (!empty($value['url'])) {
      return $value['url'];
    }
    if (!empty($value['ID'])) {
      return wp_get_attachment_image_url($value['ID'], 'medium_large');
    }
  }
  return $value;
}

function rise_hiseikyu_attach_column_acf($group) {
  if (empty($group['location']) || !is_array($group['location'])) {
    return $group;
  }
  $siblings = array('isharyo-column', 'tachinoki-column', 'saimu-column', 'akewatashi-column');
  $has_sibling = false;
  $has_self = false;
  foreach ($group['location'] as $or_group) {
    if (!is_array($or_group)) {
      continue;
    }
    foreach ($or_group as $rule) {
      if (empty($rule['value'])) {
        continue;
      }
      if ($rule['value'] === 'hiseikyu-column') {
        $has_self = true;
      }
      if (in_array($rule['value'], $siblings, true)) {
        $has_sibling = true;
      }
    }
  }
  if ($has_sibling && !$has_self) {
    $group['location'][] = array(
      array(
        'param' => 'post_type',
        'operator' => '==',
        'value' => 'hiseikyu-column',
      ),
    );
  }
  return $group;
}
add_filter('acf/load_field_group', 'rise_hiseikyu_attach_column_acf');

function rise_hiseikyu_column_acf() {
  if (!function_exists('acf_add_local_field_group')) {
    return;
  }
  if (function_exists('acf_get_field_groups')) {
    $shared = acf_get_field_groups(array('post_type' => 'isharyo-column'));
    if (!empty($shared)) {
      return;
    }
  }
  acf_add_local_field_group(array(
    'key' => 'group_hiseikyu_column',
    'title' => '立ち退きコラムフィールド',
    'fields' => array(
      array(
        'key' => 'field_hiseikyu_outline',
        'label' => '概要',
        'name' => 'outline',
        'type' => 'textarea',
      ),
      array(
        'key' => 'field_hiseikyu_mainimg',
        'label' => 'メイン画像',
        'name' => 'mainimg',
        'type' => 'image',
        'return_format' => 'url',
        'preview_size' => 'medium',
        'library' => 'all',
      ),
      array(
        'key' => 'field_hiseikyu_bodycopy',
        'label' => '本文',
        'name' => 'bodycopy',
        'type' => 'wysiwyg',
        'tabs' => 'all',
        'toolbar' => 'full',
        'media_upload' => 1,
      ),
      array(
        'key' => 'field_hiseikyu_sv_name',
        'label' => '監修弁護士',
        'name' => 'sv_name',
        'type' => 'text',
      ),
      array(
        'key' => 'field_hiseikyu_sv_ph',
        'label' => '監修弁護士写真',
        'name' => 'sv_ph',
        'type' => 'image',
        'return_format' => 'url',
        'preview_size' => 'medium',
        'library' => 'all',
      ),
      array(
        'key' => 'field_hiseikyu_sv_txt',
        'label' => '監修弁護士紹介',
        'name' => 'sv_txt',
        'type' => 'textarea',
        'new_lines' => 'wpautop',
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'hiseikyu-column',
        ),
      ),
    ),
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => array('the_content'),
  ));
}
add_action('acf/init', 'rise_hiseikyu_column_acf');

function rise_hiseikyu_column_metabox() {
  if (function_exists('acf_add_local_field_group')) {
    return;
  }
  add_meta_box(
    'hiseikyu_column_fields',
    '立ち退きコラムフィールド',
    'rise_hiseikyu_column_metabox_html',
    'hiseikyu-column',
    'normal',
    'high'
  );
}
add_action('add_meta_boxes', 'rise_hiseikyu_column_metabox');

function rise_hiseikyu_column_metabox_html($post) {
  wp_nonce_field('rise_hiseikyu_column_meta', 'rise_hiseikyu_column_nonce');
  $fields = array(
    'outline' => array('概要', 'textarea'),
    'mainimg' => array('メイン画像URL', 'text'),
    'bodycopy' => array('本文', 'textarea'),
    'sv_name' => array('監修弁護士', 'text'),
    'sv_ph' => array('監修弁護士写真URL', 'text'),
    'sv_txt' => array('監修弁護士紹介', 'textarea'),
  );
  foreach ($fields as $key => $info) {
    $value = get_post_meta($post->ID, $key, true);
    echo '<p><label for="hiseikyu_' . esc_attr($key) . '"><strong>' . esc_html($info[0]) . '</strong></label><br>';
    if ($info[1] === 'textarea') {
      echo '<textarea id="hiseikyu_' . esc_attr($key) . '" name="hiseikyu_' . esc_attr($key) . '" rows="4" style="width:100%;">' . esc_textarea($value) . '</textarea></p>';
    } else {
      echo '<input type="text" id="hiseikyu_' . esc_attr($key) . '" name="hiseikyu_' . esc_attr($key) . '" value="' . esc_attr($value) . '" style="width:100%;"></p>';
    }
  }
}

function rise_hiseikyu_column_save_meta($post_id) {
  if (!isset($_POST['rise_hiseikyu_column_nonce']) || !wp_verify_nonce($_POST['rise_hiseikyu_column_nonce'], 'rise_hiseikyu_column_meta')) {
    return;
  }
  if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
    return;
  }
  if (!current_user_can('edit_post', $post_id)) {
    return;
  }
  foreach (array('outline', 'mainimg', 'bodycopy', 'sv_name', 'sv_ph', 'sv_txt') as $key) {
    if (!isset($_POST['hiseikyu_' . $key])) {
      continue;
    }
    $value = wp_kses_post(wp_unslash($_POST['hiseikyu_' . $key]));
    update_post_meta($post_id, $key, $value);
  }
}
add_action('save_post_hiseikyu-column', 'rise_hiseikyu_column_save_meta');
