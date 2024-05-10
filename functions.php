<?php
function load_custom_styles_and_scripts()
{
    // CSSファイルの読み込み
    wp_enqueue_style('button-style', get_template_directory_uri() . '/css/button.css');
    wp_enqueue_style('deco-style', get_template_directory_uri() . '/css/deco.css');
    wp_enqueue_style('layout-style', get_template_directory_uri() . '/css/layout.css'); // ファイル名の綴りを確認してください
    wp_enqueue_style('responsive-style', get_template_directory_uri() . '/css/responsive.css');
    wp_enqueue_style('blog-style', get_template_directory_uri() . '/css/blog.css');

    // JavaScriptファイルの読み込み
    wp_enqueue_script('anime-js', get_template_directory_uri() . '/js/anime.js', array(), null, true); // trueを指定すると</body>の前にスクリプトを出力します

    // Googleフォントの読み込み
    wp_enqueue_style('google-font-noto-sans', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap');
    wp_enqueue_style('google-font-arbutus-slab', 'https://fonts.googleapis.com/css2?family=Arbutus+Slab&display=swap');

    // Font Awesomeの読み込み
    wp_enqueue_style('font-awesome', 'https://use.fontawesome.com/releases/v5.15.4/css/all.css');
}

add_action('wp_enqueue_scripts', 'load_custom_styles_and_scripts');


function create_post_type_news()
{
    register_post_type(
        'news',
        array(
            'labels' => array(
                'name' => __('お知らせ'),
                'singular_name' => __('お知らせ')
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'thumbnail'),
            'show_in_rest' => true, // Gutenbergエディタを使う場合は、 true にします。
        )
    );
}
add_action('init', 'create_post_type_news');


function custom_news_list_shortcode()
{
    ob_start();
    $query_args = array(
        'post_type'      => 'news', // ここにカスタム投稿タイプのスラッグを入れます。
        'posts_per_page' => 10,     // 表示したい投稿数
        'order'          => 'DESC', // 降順
        'orderby'        => 'date'  // 日付で並び替え
    );
    $the_query = new WP_Query($query_args);
    if ($the_query->have_posts()) {
        echo '<ul class="custom-news-list">';
        while ($the_query->have_posts()) {
            $the_query->the_post();
            echo '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
        }
        echo '</ul>';
    } else {
        echo '<p>お知らせはまだありません。</p>';
    }
    wp_reset_postdata();
    return ob_get_clean();
}
add_shortcode('news_list', 'custom_news_list_shortcode');

if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
}

function custom_excerpt_length($content, $length = 20) {
    $content = strip_tags($content); // HTMLタグを削除
    if (mb_strlen($content) > $length) {
        $content = mb_substr($content, 0, $length) . '...'; // 内容を指定の長さで切り取り
    }
    return $content;
}