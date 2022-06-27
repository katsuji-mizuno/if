<?php

/* マイナーアップグレードのみ有効化、開発版、メジャーアップグレードは無効化 */
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* バージョンアップ通知を非表示にする */
function update_nag_hide() {
    remove_action( 'admin_notices', 'update_nag', 3 );
}
add_action( 'admin_init', 'update_nag_hide' );
/* WordPressの自動更新チェックを停止する */
add_filter ('pre_site_transient_update_core','__return_zero');
remove_action ('wp_version_check','wp_version_check');
remove_action ('admin_init','_maybe_update_core');
/* 管理メニューから「更新」を消す */
function remove_admin_menu_items() {
    remove_submenu_page('index.php','update-core.php');
}
add_action('admin_menu','remove_admin_menu_items');
/* srcset　無効化 */
add_filter( 'wp_calculate_image_srcset_meta', '__return_null' );
add_filter( 'wp_calculate_image_srcset', '__return_false' );
remove_filter( 'the_content', 'wp_make_content_images_responsive' );
/* タイトルタグ */
add_theme_support( 'title-tag' );
/* アイキャッチ */
add_theme_support('post-thumbnails');
/* canonical出力 */
remove_action('wp_head', 'rel_canonical');
add_action( 'wp_head', 'add_canonical' );
function add_canonical() {
  $canonical = null;
  if( is_home() || is_front_page() ) {
    $canonical = home_url();
  } elseif ( is_category() ) {
    $canonical = get_category_link( get_query_var('cat') );
  } else if(is_tag()){
    $canonical = get_tag_link(get_queried_object()->term_id);
  } elseif ( is_search() ) {
    $canonical = get_search_link();
  } elseif ( is_page() || is_single() ) {
    $canonical = get_permalink();
  } else{
    $canonical = home_url();
  }
  echo '<link rel="canonical" href="'.$canonical.'">'."\n";
}
/* 固定ページにカテゴリーを紐付 */
add_action('init','add_categories_for_pages');
function add_categories_for_pages(){
register_taxonomy_for_object_type('category', 'page');
}

//管理画面CSS
function admin_css() {
  echo '<link rel="stylesheet" type="text/css" href="'.get_bloginfo("template_directory").'/admin.css">';
}
add_action('admin_head', 'admin_css');

//ダッシュボードタイトル
function adminTxtReplace(){
  echo'
<script type="text/javascript">
//<![CDATA[
window.onload=adminTxtReplace
function adminTxtReplace(){
  document.body.innerHTML = document.body.innerHTML.replace(/\<h1\>ダッシュボード\<\/h1\>/g, "\<h1\ style\=\"background\:\#000000\;\ text\-align\:center\; color\:\#fff\; padding\:200px 10px\;\"\>ダッシュボード\<br\>\<span style\=\"font-size\:12px\;\"\>content management system</span>\<\/h1\>");
}
//]]>
</script>';
}
add_action('admin_head-index.php', 'adminTxtReplace', 20);
// 管理画面非表示
function remove_admin_menus() {
    // level10以外のユーザーの場合
        global $menu;
        // unsetで非表示にするメニューを指定
        // unset($menu[2]);        // ダッシュボード
        // unset($menu[5]);        // 投稿
        // unset($menu[10]);       // メディア
        unset($menu[15]);       // リンク
        // unset($menu[20]);       // 固定ページ
        unset($menu[25]);       // コメント
        unset($menu[60]);       // 外観
        // unset($menu[65]);       // プラグイン
        // unset($menu[70]);       // ユーザー
        // unset($menu[75]);       // ツール
        // unset($menu[80]);       // 設定
        remove_menu_page('cptui_main_menu');//CPT
        remove_menu_page('edit.php?post_type=acf');//ACF
        remove_menu_page ('toolset-dashboard');//Types
}
add_action('admin_menu', 'remove_admin_menus', 11);


//  ----------------------------------------------------------------------------------
//  新規定義
//  ----------------------------------------------------------------------------------


// 検索機能の追加
function set_redirect_template() {
    if (isset($_GET['s']) && empty($_GET['s'])) {
        include(TEMPLATEPATH . '/search.php');
        exit;
    }
}
add_action('template_redirect', 'set_redirect_template');
 function my_excerpt_more($more) {
     return '…';
}
add_filter('excerpt_more', 'my_excerpt_more');




/* -------------------------- OGP出力 ------------------------- */
function my_meta_ogp() {
  if (is_front_page() || is_home() || is_singular()) {
    $ogp_image = 'https://int-f.co.jp/wp-content/themes/if-curtain/assets/images/og_image.jpg';
    $twitter_site = '';
    $twitter_card = 'summary_large_image';
    $facebook_app_id = '';
    global $post;
    $ogp_title = '株式会社イフ';
    $ogp_description = '小牧、浜松、富山に店舗があるオーダーカーテン専門店イフのホームページです。当店は、店舗で実際に見て触って生地を選べるのが特徴。世界のトレンドを押さえた良質な記事を直輸入して店内に陳列しています。カーテンに関するご相談がありましたら、お気軽にお声かけください。';
    $ogp_url = '';
    $html = '';
    if (is_singular()) {
      setup_postdata($post);
      $ogp_title = $post->post_title;
      $ogp_description = mb_substr(get_the_excerpt(), 0, 100);
      $ogp_url = get_permalink();
      wp_reset_postdata();
    } elseif (is_front_page() || is_home()) {
      $ogp_title = get_bloginfo('name');
      $ogp_description = get_bloginfo('description');
      $ogp_url = home_url();
    }
    $ogp_type = (is_front_page() || is_home()) ? 'website' : 'article';
    if (is_singular() && has_post_thumbnail()) {
      $ps_thumb = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
      $ogp_image = $ps_thumb[0];
    }
    $html = "\n";
    $html .= '<title>' . esc_attr($ogp_title) . '</title>' . "\n";
    $html .= '<meta name="description" content="' . esc_attr($ogp_description) . '">' . "\n";
    $html .= '<meta property="og:title" content="' . esc_attr($ogp_title) . '" />' . "\n";
    $html .= '<meta property="og:description" content="' . esc_attr($ogp_description) . '" />' . "\n";
    $html .= '<meta property="og:type" content="' . $ogp_type . '" />' . "\n";
    $html .= '<meta property="og:url" content="' . esc_url($ogp_url) . '" />' . "\n";
    $html .= '<meta property="og:image" content="' . esc_url($ogp_image) . '" />' . "\n";
    $html .= '<meta property="og:site_name" content="' . esc_attr(get_bloginfo('name')) . '" />' . "\n";
    $html .= '<meta name="twitter:card" content="' . $twitter_card . '" />' . "\n";
    $html .= '<meta name="twitter:site" content="' . $twitter_site . '" />' . "\n";
    $html .= '<meta name="twitter:title" content="' . esc_attr($ogp_title) . '" />' . "\n";
    $html .= '<meta name="twitter:url" content="' . esc_url($ogp_url) . '" />' . "\n";
    $html .= '<meta name="twitter:description" content="' . esc_attr($ogp_description) . '">' . "\n";
    $html .= '<meta name="twitter:image" content="' . esc_url($ogp_image) . '" />' . "\n";
    $html .= '<meta property="og:locale" content="ja_JP" />' . "\n";
    $html .= '<meta property="article:publisher" content="https://www.facebook.com/@@@">' . "\n";
    if ($facebook_app_id != "") {
      $html .= '<meta property="fb:app_id" content="' . $facebook_app_id . '">' . "\n";
    }
    echo $html;
  }
}
add_action('wp_head', 'my_meta_ogp');





//カスタム投稿タイプの追加
add_action( 'init', 'create_post_type' );
function create_post_type() {
//カスタム投稿タイプ１（ここから）
register_post_type(
'product',
array(
'labels' => array(
'name' => __( '取り扱い製品' ),
'singular_name' => __( '取り扱い製品' )
),
'public' => true,
'menu_position' =>5,
)
);
//カスタム投稿タイプ１（ここまで）
}


//カスタム投稿タイプ (News)
add_action('init', 'custom_news_init');
function custom_news_init()
{
	$labels = array(
		'name' => _x('お知らせ', 'post type general name'),
		'singular_name' => _x('お知らせ', 'post type singular name'),
		'all_items' => __('投稿一覧'),
	);
	$args = array(
		'labels' => $labels,
		'public' => true,//管理画面・サイトへの表示の有無
		'publicly_queryable' => true,
		'show_ui' => true, //管理画面のメニューへの表示の有無
		'menu_position' => 5,//管理メニューでの表示位置
		'query_var' => true,
		'rewrite' => true,//パーマリンク設定
		'capability_type' => 'post',//権限タイプ
		'map_meta_cap' => true,//デフォのメタ情報処理を利用の有無
		'hierarchical' => false,//階層(親)の有無
		'menu_icon' => 'dashicons-admin-customizer',//アイコン画像
		'supports' => array('title','editor','custom-fields'),
		'has_archive' => true//アーカイブの有無
	);
	register_post_type('news',$args);
}

//カスタム分類(カスタムタクソノミー)
function custom_news_taxonomies() {
	//タクソノミー1
	$labels = array(
		"name" => _x( "newsカテゴリー", "taxonomy general name" ),
		"singular_name" => _x( "newsカテゴリー", "taxonomy singular name" ),
	);

	$args = array(
		"labels" => $labels,
		"public" => true,
		"hierarchical" => true,//true:カテゴリー・false:タグ
		"show_ui" => true,//管理画面のメニューへの表示の有無
		"show_in_menu" => true,
		"show_in_nav_menus" => true,//「外観」＞「メニュー」への表示の有無
		"query_var" => true,//wp_queryでの使用の可否
		"rewrite" => array( 'slug' => 'news_cat', 'with_front' => true, ),//パーマリンクの設定
		"show_admin_column" => false,//管理画面の投稿一覧への表示の有無
		"show_in_rest" => false,
		"rest_base" => "",
		"show_in_quick_edit" => false,//クイック編集への表示の可否
	);
	register_taxonomy( "news_cat", array( "news" ), $args );

	//タクソノミー2
	$labels = array(
		"name" => _x( "newsタグ", "taxonomy general name" ),
		"singular_name" => _x( "newsタグ", "taxonomy singular name" ),
	);

	$args = array(
		"labels" => $labels,
		"public" => true,
		"hierarchical" => false,//true:カテゴリー・false:タグ
		"show_ui" => true,//管理画面のメニューへの表示の有無
		"show_in_menu" => true,
		"show_in_nav_menus" => true,//「外観」＞「メニュー」への表示の有無
		"query_var" => true,//wp_queryでの使用の可否
		"rewrite" => array( 'slug' => 'news_tag', 'with_front' => true, ),//パーマリンクの設定
		"show_admin_column" => false,//管理画面の投稿一覧への表示の有無
		"show_in_rest" => false,
		"rest_base" => "",
		"show_in_quick_edit" => false,//クイック編集への表示の可否
	);
	register_taxonomy( "news_tag", array( "news" ), $args );
}

add_action( 'init', 'custom_news_taxonomies' );


//下記を入れる事でお知らせのページングができるようになる。

function custom_query( $query ) {
  if ( is_admin() || ! $query->is_main_query() )
      return;

  if ( $query->is_post_type_archive( 'news' ) ) {
      $query->set( 'posts_per_page', '6' );
      return;
  }
}
add_action( 'pre_get_posts', 'custom_query' );

function my_manage_posts_columns_news_cat($columns) {
  $columns['news_cat'] = "カテゴリー";
  return $columns;
}
function my_add_column_news_cat($column_name, $post_id) {
  if( $column_name == 'news_cat' ) {
    $tax = wp_get_object_terms($post_id, 'news_cat');
    $stitle = $tax[0]->name;
  }

  if ( isset($stitle) && $stitle ) {
    echo esc_attr($stitle);
  }
}
function my_add_post_taxonomy_restrict_filter() {
  global $post_type;
  if ( 'news' == $post_type ) {
?>
    <select name="news_cat">
      <option value="">カテゴリー指定なし</option>
<?php
      $terms = get_terms('news_cat');
      foreach ($terms as $term) { ?>
        <option value="<?php echo $term->slug; ?>" <?php if ( $_GET['news_cat'] == $term->slug ) { print 'selected'; } ?>><?php echo $term->name; ?></option>
<?php
      }
?>
    </select>

<?php
  }
}
add_filter( 'manage_edit-news_columns', 'my_manage_posts_columns_news_cat' );
add_action( 'manage_news_posts_custom_column', 'my_add_column_news_cat', 10, 2 );
add_action( 'restrict_manage_posts', 'my_add_post_taxonomy_restrict_filter' );



function Change_menulabel() {
	global $menu;
	global $submenu;
	$name = '施工実績';
	$menu[5][0] = $name;
	$submenu['edit.php'][5][0] = $name.'一覧';
	$submenu['edit.php'][10][0] = '新しい'.$name;
}
function Change_objectlabel() {
	global $wp_post_types;
	$name = '施工実績';
	$labels = &$wp_post_types['post']->labels;
	$labels->name = $name;
	$labels->singular_name = $name;
	$labels->add_new = _x('追加', $name);
	$labels->add_new_item = $name.'の新規追加';
	$labels->edit_item = $name.'の編集';
	$labels->new_item = '新規'.$name;
	$labels->view_item = $name.'を表示';
	$labels->search_items = $name.'を検索';
	$labels->not_found = $name.'が見つかりませんでした';
	$labels->not_found_in_trash = 'ゴミ箱に'.$name.'は見つかりませんでした';
}
add_action( 'init', 'Change_objectlabel' );
add_action( 'admin_menu', 'Change_menulabel' );



function my_unregister_taxonomies()
{
    global $wp_taxonomies;

    /*
     * 投稿機能から「カテゴリー」を削除

    if (!empty($wp_taxonomies['category']->object_type)) {
        foreach ($wp_taxonomies['category']->object_type as $i => $object_type) {
            if ($object_type == 'post') {
                unset($wp_taxonomies['category']->object_type[$i]);
            }
        }
    }
     */

    /*
     * 投稿機能から「タグ」を削除
     */
    if (!empty($wp_taxonomies['post_tag']->object_type)) {
        foreach ($wp_taxonomies['post_tag']->object_type as $i => $object_type) {
            if ($object_type == 'post') {
                unset($wp_taxonomies['post_tag']->object_type[$i]);
            }
        }
    }

    return true;
}

add_action('init', 'my_unregister_taxonomies');



//予約フォームの自動返信から「人数」を非表示にする
function form_date_number($title, $param) {
  if ($param === 'mail') {
      return '';
  }
  return $title;
}
add_filter('booking_form_date_number', 'form_date_number', 10, 2);




add_filter( 'mwform_admin_mail_mw-wp-form-424', 'mwform_change_mail_recipient', 10, 3 );
function mwform_change_mail_recipient( $Mail, $values, $Data ) {
  $data_type = $Data->get( 'shop' );
  switch ( $data_type ) {
    case '小牧店':
     $Mail->to = 'honten@int-f.co.jp';

      break;
    case '浜松店':
      $Mail->to = 'hamamatsu@int-f.co.jp';
   //   $Mail->to = 'mizuno@mavericks09.com';

      break;
    case '富山店':
      $Mail->to = 'toyama@int-f.co.jp';
      break;
  }
  return $Mail;
}
