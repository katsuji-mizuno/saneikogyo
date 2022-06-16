<?php

/* srcset　無効化 */
add_filter( 'wp_calculate_image_srcset_meta', '__return_null' );
add_filter( 'wp_calculate_image_srcset', '__return_false' );
remove_filter( 'the_content', 'wp_make_content_images_responsive' );

/* タイトルタグ */
add_theme_support( 'title-tag' );
/* タイトル区切り文字を変更 */
function change_title_separator( $sep ){
  $sep = '|';
  return $sep;
}
add_filter( 'document_title_separator', 'change_title_separator' );



/* アイキャッチ */
add_theme_support('post-thumbnails');

/* カスタム投稿画面でアイキャッチの設定を有効化
register_post_type(
  'staff',
  array(
  'supports' => array('title','editor','thumbnail')
));
*/

/*
 * 投稿にアーカイブ(投稿一覧)を持たせるようにします。
 * ※ 記載後にパーマリンク設定で「変更を保存」してください。
 */

function post_has_archive( $args, $post_type ) {
  if ( 'post' == $post_type ) {
    $args['rewrite'] = true;
    $args['has_archive'] = 'blog'; // ページ名
  }
  return $args;
}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );


/* アーカイブページの時に表示件数をセット */
function change_posts_per_page($query) {
    if ( is_admin() || ! $query->is_main_query() ) {
        return;
    }else{
      $query->set( 'posts_per_page', '12' );
    }
}
add_action( 'pre_get_posts', 'change_posts_per_page' );



/* 固定ページにカテゴリーを紐付 */
add_action('init','add_categories_for_pages');
function add_categories_for_pages(){
register_taxonomy_for_object_type('category', 'page');
}
add_action( 'pre_get_posts', 'nobita_merge_page_categories_at_category_archive' );
function nobita_merge_page_categories_at_category_archive( $query ) {
  if ( $query->is_category== true && $query->is_main_query() ) {
    $query->set('post_type', array( 'post', 'page', 'nav_menu_item'));
  }
}


/* 「年」をつけたアーカイブリストのアンカー調整 */
function my_archives_link($html){
  return preg_replace('@</a>(.+?)</li>@', '\1</a></li>', $html);
}
add_filter('get_archives_link', 'my_archives_link');


//投稿詳細ページの下部　投稿meta
if ( ! function_exists( 'twentytwelve_entry_meta' ) ) :
/**
 * Prints HTML with meta information for current post: categories, tags, permalink, author, and date.
 *
 * Create your own twentytwelve_entry_meta() to override in a child theme.
 *
 * @since Twenty Twelve 1.0
 */
function twentytwelve_entry_meta() {
  // Translators: used between list items, there is a space after the comma.
  $categories_list = get_the_category_list( __( ', ', 'twentytwelve' ) );

  // Translators: used between list items, there is a space after the comma.
  $tag_list = get_the_tag_list( '', __( ', ', 'twentytwelve' ) );

  $date = sprintf( '<a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s">%4$s</time></a>',
    esc_url( get_permalink() ),
    esc_attr( get_the_time() ),
    esc_attr( get_the_date( 'c' ) ),
    esc_html( get_the_date() )
  );

  $author = sprintf( '<span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s" rel="author">%3$s</a></span>',
    esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
    esc_attr( sprintf( __( 'View all posts by %s', 'twentytwelve' ), get_the_author() ) ),
    get_the_author()
  );

  // Translators: 1 is category, 2 is tag, 3 is the date and 4 is the author's name.
  if ( $tag_list ) {
    $utility_text = __( 'カテゴリー: %1$s and tagged %2$s | 投稿日: %3$s<span class="by-author"> | 投稿者: %4$s</span>.', 'twentytwelve' );
  } elseif ( $categories_list ) {
    $utility_text = __( 'カテゴリー: %1$s | 投稿日: %3$s<span class="by-author"> | 投稿者 %4$s</span>.', 'twentytwelve' );
  } else {
    $utility_text = __( '投稿日: %3$s<span class="by-author"> | 投稿者 %4$s</span>.', 'twentytwelve' );
  }

  printf(
    $utility_text,
    $categories_list,
    $tag_list,
    $date,
    $author
  );
}
endif;


////////////////////////////////////
//  抜粋の文字数変更
////////////////////////////////////
function twpp_change_excerpt_length( $length ) {
  return 40; 
}
add_filter( 'excerpt_length', 'twpp_change_excerpt_length', 999 );


////////////////////////////////////
//  検索バーのカスタマイズ
////////////////////////////////////
function custom_search($search, $wp_query  ) {
    //query['s']があったら検索ページ表示
    if ( isset($wp_query->query['s']) ) $wp_query->is_search = true;
    return $search;
}
add_filter('posts_search','custom_search', 10, 2);


function change_document_title_parts( $title_parts ){
 
    //デフォルトとしてタグラインとサイト名は表示しないようにセット
    //$title_parts['tagline'] = '';
    //$title_parts['site'] = '';
 
  $site_name = trim( get_bloginfo('name') );
  $title_parts['tagline'] = '';
  if(is_search()): //検索結果ページの場合
      $title_parts['title'] = '検索結果';
  elseif(is_404()): //404ページの場合
    $title_parts['title'] = 'お探しのページは見つかりませんでした';
  endif;
 
  return $title_parts;
}
add_filter( 'document_title_parts', 'change_document_title_parts' );



/* jQuery の読み込み */
function add_my_scripts() {
  if(is_admin()) return; //管理画面ではスクリプトは読み込まない

  wp_enqueue_scripts ( 'jquery'); //デフォルトの jQuery は読み込まない
  //CDN から読み込む
  wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js', array(), '1.10.2', false);
  wp_enqueue_script( 'jquery-mig', '//cdnjs.cloudflare.com/ajax/libs/jquery-migrate/1.2.1/jquery-migrate.min.js', array(), '1.2.1', false);
}
add_action('wp_print_scripts', 'add_my_scripts');


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

////////////////////////////////////
//  MW-WP-FORMの複合入力チェック
////////////////////////////////////
function my_required_phone( $validation, $data ) {
  $method = $data['contact_kbn'];
  if( isset( $method ) && $method === '電話で折り返してほしい' ) {
    $validation->set_rule( 'tel', 'noEmpty', array( 'message' => 'ご連絡について「電話で折り返してほしい」を選択した場合、電話番号は必須です。') );
  }
  return $Validation;
}
 
add_filter( 'mwform_validation_mw-wp-form-57', 'my_required_phone', 10, 2 );

//////////////////////////////////////////////////////////////////////



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



/* ###### 特定投稿タイプの余白を無効にする */
function CustomPostStyle($hook_suffix) {
   global $post;
   $my_post_type = "dctsche"; // カスタムタイプ名
   // 新規投稿 (initフック).
   if ( ( 'post-new.php' === $hook_suffix  && ( isset( $_GET['post_type'] ) === true && $my_post_type == $_GET['post_type']         ) ) || 
        ( 'post.php'     === $hook_suffix  && ( is_object( $post )                   && $my_post_type == get_post_type( $post->ID ) ) )   ) {
      echo '<style>#poststuff table td,#poststuff table th {padding:0} </style>';
   }
}
add_action( 'admin_enqueue_scripts', 'CustomPostStyle' );
//////////////////////////////////////////////////////////////////////

// 管理画面非表示
function remove_admin_menus() {

    // level10以外のユーザーの場合
    if (!current_user_can('level_10')) {

        global $menu;

        // unsetで非表示にするメニューを指定
        //unset($menu[2]);        // ダッシュボード
        //unset($menu[5]);        // 投稿
        //unset($menu[10]);       // メディア

        //unset($menu[20]);       // 固定ページ
        unset($menu[25]);       // コメント
        unset($menu[60]);       // 外観
        unset($menu[65]);       // プラグイン
        unset($menu[70]);       // ユーザー
        unset($menu[75]);       // ツール
        unset($menu[80]);       // 設定


        remove_menu_page('cptui_main_menu');//CPT
        remove_menu_page('edit.php?post_type=acf');//ACF
        remove_menu_page ('toolset-dashboard');//Types

    }
}


add_action('admin_menu', 'remove_admin_menus', 11);
//プラグイン非表示の場合「,11」にする（プライオリティを10以上を指定）

function add_jquery() {
  if ( !is_admin() ) {
   // jQueryを読み込まないようにする
   wp_deregister_script('jquery');
  }
}
add_action( 'wp_enqueue_scripts', 'add_jquery');


//unsetを使う場合は配列番号、remove_menu_pageを使う場合は、「2 =>」の箇所の値を指定
/*
 function remove_menus () {
     global $menu;
     var_dump($menu);
 }
 add_action('admin_menu', 'remove_menus');





