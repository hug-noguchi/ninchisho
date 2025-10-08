<?php
remove_action('wp_head', 'wp_generator');


/*	Register navigation
/*---------------------------------------------------------*/
register_nav_menus( array(
	'primary' => __('Main Navigation'),
	));
register_nav_menus( array(
	'footer01' => __('Footer Navigation01'),
	));
register_nav_menus( array(
  'footer02' => __('Footer Navigation02'),
  ));

/*	Register sidebars
/*---------------------------------------------------------*/
register_sidebar(array(
	'name' => __( 'sidebar' ),
  'before_widget' => '<section id="%1$s" class="widget %2$s">',
  'after_widget' => '</article></section>',
  'before_title' => '<h3 class="heading"><span>',
  'after_title' => '</span></h3><article>'
	));

add_filter( 'wp_list_categories', 'tpl_087_rwd_list_categories', 10, 2 );
function tpl_087_rwd_list_categories( $output, $args ) {
  $output = preg_replace('/<\/a>\s*\((\d+)\)/',' ($1)</a>',$output);
  return $output;
}

add_filter( 'get_archives_link', 'tpl_087_rwd_archives_link' );
function tpl_087_rwd_archives_link( $output ) {
  $output = preg_replace('/<\/a>\s*(&nbsp;)\((\d+)\)/',' ($2)</a>',$output);
  return $output;
}


/*	custom walker for the navigation
/*-------------------------------------------*/
class description_walker extends Walker_Nav_Menu
{
      function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
      {
           global $wp_query;
           $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

           $class_names = $value = '';

           $classes = empty( $item->classes ) ? array() : (array) $item->classes;

           $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
           $class_names = ' class="'. esc_attr( $class_names ) . '"';

           $output .= $indent . '<li id="menu-item-'. $item->ID . '"' . $value . $class_names .'>';

           $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
           $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
           $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
           $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';

           $prepend = '<strong>';
           $append = '</strong>';
           $description  = ! empty( $item->description ) ? '<span>'.esc_attr( $item->description ).'</span>' : '';

           if($depth != 0)
           {
                     $description = $append = $prepend = "";
           }

            $item_output = $args->before;
            $item_output .= '<a'. $attributes .'>';
            $item_output .= $args->link_before .$prepend.apply_filters( 'the_title', $item->title, $item->ID ).$append;
            $item_output .= $description.$args->link_after;
            $item_output .= '</a>';
            $item_output .= $args->after;

            $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
            }
}


/*	This is all for compatibility with versions of WordPress prior to 3.4.
/*---------------------------------------------------------*/
define( 'NO_HEADER_TEXT', true );
define( 'HEADER_TEXTCOLOR', true );
define('HEADER_IMAGE', '%s/images/banners/mainImg.jpg');
define('HEADER_IMAGE_WIDTH', 960);
define('HEADER_IMAGE_HEIGHT', 400);
add_theme_support('custom-header');
if (!function_exists('admin_header_style')) :
function admin_header_style() { }
endif;

if (!isset( $content_width ))$content_width = 625;


/*	This theme uses post thumbnails
/*---------------------------------------------------------*/
add_theme_support('post-thumbnails');


/*	Custom Excerpt "more" Link
/*---------------------------------------------------------*/
function change_excerpt_more($post) {
  return ' ...';
}
add_filter('excerpt_more', 'change_excerpt_more');


/*	Load up the theme options
/*---------------------------------------------------------*/
require( dirname( __FILE__ ) . '/inc/theme-options.php' );


/*	Add admin CSS
/*---------------------------------------------------------*/
function tpl_087_rwd_admin_css(){
	$adminCssPath = get_template_directory_uri().'/cTpl_admin.css';
	wp_enqueue_style( 'theme', $adminCssPath , false, '2012');
}
add_action('admin_head', 'tpl_087_rwd_admin_css', 11);


/*	Display navigation to next/previous pages when applicable
/*---------------------------------------------------------*/
function tpl_087_rwd_content_nav( $nav_id ) {
	global $wp_query;
	if ( $wp_query->max_num_pages > 1 ) : ?>
		<div class="pagenav">
			<div class="prev"><?php previous_posts_link('&laquo; 前のページ'); ?></div>
			<div class="next"><?php next_posts_link('次のページ &raquo;'); ?></div>
		</div>
	<?php endif;
	wp_reset_query();
}
/*  PC スマホ表示件数変更
/*---------------------------------------------------------*/
function is_mobile() {
    $useragents = array(
        'iPhone',          // iPhone
        'iPod',            // iPod touch
        '^(?=.*Android)(?=.*Mobile)', // 1.5+ Android
        'dream',           // Pre 1.5 Android
        'CUPCAKE',         // 1.5+ Android
        'blackberry9500',  // Storm
        'blackberry9530',  // Storm
        'blackberry9520',  // Storm v2
        'blackberry9550',  // Storm v2
        'blackberry9800',  // Torch
        'webOS',           // Palm Pre Experimental
        'incognito',       // Other iPhone browser
        'webmate'          // Other iPhone browser
    );
    $pattern = '/'.implode('|', $useragents).'/i';
    return preg_match($pattern, $_SERVER['HTTP_USER_AGENT']);
}

function change_post_types_admin_order($wp_query) {
  if (is_admin()) {
    $post_type_array = array('topics', 'works'); // カスタム投稿のスラッグ（post_type）
    $post_type = $wp_query->query['post_type'];
    $get_orderby = get_query_var('orderby');
    if ($post_type && $get_orderby) {
      if (in_array($post_type, $post_type_array) && $get_orderby === 'menu_order title') {
        $wp_query->set('orderby', 'date'); // data = 日付
        $wp_query->set('order', 'DESC'); // DESC = 降順
      }
    }
  }
}
add_filter('pre_get_posts', 'change_post_types_admin_order');

function SearchFilter($query) {
  if ($query->is_search) {
    $query->set('post_type', 'works');
  }
return $query;
}
add_filter('pre_get_posts','SearchFilter');



// 投稿日時を検索条件に含む
function custom_field_search($search, $query)
{
  // キーワードがなくても検索ページを表示させる
  if ( isset($wp_query->query['s']) )
    $wp_query->is_search = TRUE;

  // 検索ページ以外は変更しない
  if ( !$query->is_search )
    return;

  // 期間検索
  if ( !empty($_REQUEST['date_from']) && !empty($_REQUEST['date_to']) )
  {
    $from = "'". date('Y-m-d',  strtotime($_REQUEST['date_from'])). "'";
    $to   = "'". date('Y-m-d',  strtotime($_REQUEST['date_to'])). "'";

    $search .= " AND DATE(post_date) BETWEEN $from AND $to";
  }

  return $search;
}
add_filter('posts_search','custom_field_search', 10, 2);


/*
 * 各投稿一覧ページにアイキャッチ画像用の列を追加
 */
add_filter( 'manage_posts_columns', 'add_custom_post_columns');    //投稿 & カスタム投稿
add_filter( 'manage_pages_columns', 'add_custom_post_columns' );   //固定ページ
if ( !function_exists( 'add_custom_post_columns' ) ) {
    function add_custom_post_columns( $columns ) {
        global $post_type;
        if( in_array( $post_type, array('post', 'page','info') ) ) {
            $columns['thumbnail'] = $post_type.'アイキャッチ画像';    //カラム表示名
        }
        return $columns;
        return $columns;
    }
}
/**
 * サムネイル画像を表示
 */
add_action( 'manage_posts_custom_column', 'output_custom_post_columns', 10, 2 );  //投稿 & カスタム投稿(階層構造が無効)
add_action( 'manage_pages_custom_column', 'output_custom_post_columns', 10, 2 );  //固定ページ & カスタム投稿(階層構造が有効)
if ( !function_exists( 'output_custom_post_columns' ) ) {
    function output_custom_post_columns( $column_name, $post_id ) {
        if ( 'thumbnail' === $column_name ) {
            $thumb_id  = get_post_thumbnail_id( $post_id );
            if ( $thumb_id ) {
                $thumb_img = wp_get_attachment_image_src( $thumb_id, 'medium' );  //サイズはご自由に
                echo '<img src="',$thumb_img[0],'" width="100px">';
            } else {
                echo 'アイキャッチ画像が設定されていません';
            }
        }
    }
}
/**
 * MWWPフォーム　選択内容で送信先を変更
 */


function autoback_my_mail( $Mail_raw, $values, $Data ) {
    if ($Data->get( 'c_select' ) == 'お仕事に関するお問い合わせ'){
        $Mail_raw->to = 'geekinfo_tokyo@geekpictures.co.jp';
    } else if ($Data->get( 'c_select' ) == 'サービス全般に関するお問い合わせ'){
        $Mail_raw->to = 'geekinfo_tokyo@geekpictures.co.jp';
    } else if ($Data->get( 'c_select' ) == '採用に関するお問い合わせ'){
        $Mail_raw->to = 'kyu-jin@geekpictures.co.jp';
    } else if ($Data->get( 'c_select' ) == '経理に関するお問い合わせ'){
        $Mail_raw->to = 'geek_keiri@geekpictures.co.jp';
    }
    return $Mail_raw;
}
add_filter( 'mwform_admin_mail_mw-wp-form-11280', 'autoback_my_mail', 10, 3 );

function hook_pre_get_posts($query)
{
  if (is_admin() || !$query->is_main_query()) {
    return;
  }

  /**
   * works一覧に社外案件ポストを表示しない
   * works_external = 1 は非表示フラグ
   */
  if($query->is_post_type_archive('works')){
    $meta_query = [
      array(
        'key' => 'works_external',
        'value' => '1',
        'compare' => '!=',
      )
    ];
    $query->set('meta_query', $meta_query);
  }

}
add_action('pre_get_posts', 'hook_pre_get_posts');




function hook_pre_get_posts2($query)
{
  if (is_admin() || !$query->is_main_query()) {
    return;
  }

  /**
   * works一覧に社外案件ポストを表示しない
   * works_external = 1 は非表示フラグ
   */
  if($query->is_front_page()){
    $meta_query = [
      array(
        'key' => 'works_external',
        'value' => '1',
        'compare' => '!=',
      )
    ];
    $query->set('meta_query', $meta_query);
  }

}
add_action('pre_get_posts', 'hook_pre_get_posts2');







add_filter('posts_request', function ($query) {
  global $wpdb;


  /**
   * FE Advanced Search のクエリー対応
   * pre_get_posts内ではpost_metaが効かない(クエリ生成してる？)ので、SQLを直接書き換えで対応
   */
  if(isset($_GET['fe_form_no']) && $_GET['fe_form_no'] === '0'){
    $query = str_replace(
      "FROM {$wpdb->posts}",
      "FROM {$wpdb->posts} INNER JOIN {$wpdb->postmeta} ON ( {$wpdb->posts}.ID = {$wpdb->postmeta}.post_id )",
      $query,
    );
    $query = str_replace(
      "WHERE 1=1  AND",
      "WHERE 1=1 AND ( ( {$wpdb->postmeta}.meta_key = 'works_external' AND {$wpdb->postmeta}.meta_value != '1' ) ) AND",
      $query,
    );
  }
  return $query;
});

/*管理画面　カスタム投稿WORKS一覧　公開日*/
function my_add_columns($columns) {
  $columns['release_day'] = '公開日';
  return $columns;
}
add_filter( 'manage_edit-works_columns', 'my_add_columns' );


function my_add_columns_content($column_name, $post_id) {
  if( $column_name == 'release_day' ) {
    $metas = get_post_meta($post_id);
    $stitle = $metas['works_date'][0];
  }

  if ( isset($stitle) && $stitle ) {
    echo esc_attr($stitle);
  }
}
add_action( 'manage_works_posts_custom_column', 'my_add_columns_content', 10, 2 );

add_filter('post_type_link', 'custom_post_link', 1, 2);
function custom_post_link($link, $post) {
  if($post -> post_type === 'info') {
    // カスタム投稿名が"news"の投稿のパーマリンクを「/news/投稿ID/」の形に書き換え
    return home_url('/info/'.$post->ID);
  } else {
    return $link;
  }
}

//書き換えたパーマリンクに対応したリライトルールを追加
add_filter('rewrite_rules_array', 'custom_post_link_rewrite');
function custom_post_link_rewrite($rules) {
  $rewrite_rules = array(
    'info/([0-9]+)/?$' => 'index.php?post_type=info&p=$matches[1]',
  );
  return $rewrite_rules + $rules;
}

// srcsetを無効にする
add_filter('wp_calculate_image_srcset', '__return_false');

function change_post_tag_to_checkbox() {
  $args = get_taxonomy('post_tag');
  $args -> hierarchical = true;//Gutenberg用
  $args -> meta_box_cb = 'post_categories_meta_box';//Classicエディタ用
  register_taxonomy( 'post_tag', 'post', $args);
}
add_action( 'init', 'change_post_tag_to_checkbox', 1 );

?>
