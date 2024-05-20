<?php

/*
Template Name: news-list
*/
get_header(); // ヘッダーの読み込み

?>

<div class="top-container">
    <h1>お知らせ一覧</h1>
</div>


<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php
        // WP_Queryを使用してnews投稿を取得
        $args = array(
            'post_type'      => 'news',  // 投稿タイプ
            'posts_per_page' => 10,      // 1ページに表示する投稿数
            'order'          => 'DESC',  // 降順で表示
            'orderby'        => 'modified'   // 日付で並び替え
        );
        $news_query = new WP_Query($args);

        if ($news_query->have_posts()) :
            echo '<ul class="news-list">';
            while ($news_query->have_posts()) : $news_query->the_post();
                echo '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a>';
                // カスタム抜粋関数を使用してコンテンツの一部を表示
                echo '<p>' . custom_excerpt_length(get_the_content(), 25) . '</p></li>';
                if (function_exists('get_the_last_modified_info')) {
                    echo '<div class="post-date-last">' . get_post_modified_time('Y.n.j') . '</div>';
                }
                echo '<div class="column_btn">';
                echo '<div class="circle_btn05">';
                echo '<a href="' . get_permalink() . '" class="circle_btn05-txt"></a>';
                echo '<div class="circle_btn05-icon">';
                echo '<div class="circle_btn05-circle">';
                echo '<svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">';
                echo '<mask id="644189">';
                echo '<path d="M43.7571 14.445C54.0966 36.6284 26.334 56.7459 8.47304 39.5132C-8.25498 22.2711 10.2249 -5.00596 32.2464 3.65796" stroke="#ffffff" stroke-width="2" stroke-linecap="round"></path>';
                echo '</mask>';
                echo '<foreignObject x="0" y="0" width="48" height="48" mask="url(#644189)">';
                echo '<div class="circle_btn05-circle-itm"></div>';
                echo '</foreignObject>';
                echo '</svg>';
                echo '</div>';
                echo '<div class="circle_btn05-arrow">';
                echo '<svg width="16" height="13" viewBox="0 0 16 13" fill="none" xmlns="http://www.w3.org/2000/svg">';
                echo '<g>';
                echo '<path d="M0 6.5H14.6036" stroke="black" stroke-width="2" stroke-miterlimit="10"></path>';
                echo '<path d="M9.72588 11.5533L14.6036 6.5" stroke="black" stroke-width="2" stroke-miterlimit="10" stroke-linecap="square"></path>';
                echo '<path d="M9.72588 1.43652L14.6036 6.5" stroke="black" stroke-width="2" stroke-miterlimit="10" stroke-linecap="square"></path>';
                echo '</g>';
                echo '</svg>';
                echo '</div>';
                echo '</div>';
                echo '</div>'; // circle_btn05の終了タグ
                echo '</div>';
            endwhile;
            echo '</ul>';
            // ページネーション
            echo paginate_links(array('total' => $news_query->max_num_pages));
        else :
            // 投稿が存在しない場合
            echo '<p>No news posts found.</p>';
        endif;

        // メインループをリセット
        wp_reset_postdata();
        ?>


    </main><!-- #main -->
</div><!-- #primary -->

<?php
// カスタムクエリ
$news_query = new WP_Query(array('post_type' => 'news'));
if ($news_query->have_posts()) :
    while ($news_query->have_posts()) : $news_query->the_post();
    // ここに各お知らせの表示内容を記述
    endwhile;
endif;
?>

</body>

<?php
get_footer();
?>