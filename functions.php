<<<<<<< HEAD
<?php
function load_custom_styles_and_scripts() {
    // CSSファイルの読み込み
    wp_enqueue_style('button-style', get_template_directory_uri() . '/css/button.css');
    wp_enqueue_style('deco-style', get_template_directory_uri() . '/css/deco.css');
    wp_enqueue_style('layout-style', get_template_directory_uri() . '/css/layout.css'); // ファイル名の綴りを確認してください
    wp_enqueue_style('responsive-style', get_template_directory_uri() . '/css/responsive.css');

    // JavaScriptファイルの読み込み
    wp_enqueue_script('anime-js', get_template_directory_uri() . '/js/anime.js', array(), null, true); // trueを指定すると</body>の前にスクリプトを出力します

    // Googleフォントの読み込み
    wp_enqueue_style('google-font-noto-sans', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap');
    wp_enqueue_style('google-font-arbutus-slab', 'https://fonts.googleapis.com/css2?family=Arbutus+Slab&display=swap');

    // Font Awesomeの読み込み
    wp_enqueue_style('font-awesome', 'https://use.fontawesome.com/releases/v5.15.4/css/all.css');
}

add_action('wp_enqueue_scripts', 'load_custom_styles_and_scripts');

?>

<?php 
function create_post_type_news(){
    register_post_type( 
     'news',
     array(
      'labels' => array(
       'name' => 'お知らせ'
      ),
      'public' => true,
      'has_archive' => true,
      'supports' => array('title','editor','thumbnail','author'),
      'show_in_rest' => true,
     )
    );
   }
   add_action( 'init', 'create_post_type_news' );
?>

<?php 
function shortcode_news_list() {
    global $post;
    $args = array(
     'posts_per_page' => 3,  // 一覧に表示させる件数
     'post_type' => 'news',  // お知らせのスラッグ
     'post_status' => 'publish'
    );
    $the_query = new WP_Query( $args );
    // お知らせ一覧用HTMLコード作成
    if ( $the_query->have_posts() ) {
     $html .= '<ul>';
     while ( $the_query->have_posts() ) :
     $the_query->the_post();
     $url = get_permalink();
     $title = get_the_title();
     $date = get_the_date('Y/m/d');
     $html .= '<li>';
     $html .= '<a href="'.$url.'">';
     $html .= '<p class="news_date">'.$date.'</p>';
     $html .= '<h3 class="news_title">'.$title.'</h3>';
     $html .= '</a></li>';
     endwhile;
     $html .= '</ul>';
    }
    return $html;
   }
   add_shortcode("news_list", "shortcode_news_list");
?>
=======
<?php
function load_custom_styles_and_scripts() {
    // CSSファイルの読み込み
    wp_enqueue_style('button-style', get_template_directory_uri() . '/css/button.css');
    wp_enqueue_style('deco-style', get_template_directory_uri() . '/css/deco.css');
    wp_enqueue_style('layout-style', get_template_directory_uri() . '/css/layout.css'); // ファイル名の綴りを確認してください
    wp_enqueue_style('responsive-style', get_template_directory_uri() . '/css/responsive.css');

    // JavaScriptファイルの読み込み
    wp_enqueue_script('anime-js', get_template_directory_uri() . '/js/anime.js', array(), null, true); // trueを指定すると</body>の前にスクリプトを出力します

    // Googleフォントの読み込み
    wp_enqueue_style('google-font-noto-sans', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap');
    wp_enqueue_style('google-font-arbutus-slab', 'https://fonts.googleapis.com/css2?family=Arbutus+Slab&display=swap');

    // Font Awesomeの読み込み
    wp_enqueue_style('font-awesome', 'https://use.fontawesome.com/releases/v5.15.4/css/all.css');
}

add_action('wp_enqueue_scripts', 'load_custom_styles_and_scripts');

?>
>>>>>>> e0358ea7b3a353e8356b2a3280100540e9e9f1c3
