<?php
function load_custom_styles_and_scripts() {
    // CSSファイルの読み込み
    wp_enqueue_style('button-style', get_template_directory_uri() . '/css/button.css');
    wp_enqueue_style('deco-style', get_template_directory_uri() . '/css/deco.css');
    wp_enqueue_style('layout-style', get_template_directory_uri() . '/css/layuot.css'); // ファイル名の綴りを確認してください
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
