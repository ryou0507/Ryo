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
            'order'          => 'DSC',  // 降順で表示
            'orderby'        => 'modified'   // 日付で並び替え
        );
        $news_query = new WP_Query($args);

        if ($news_query->have_posts()) :
            echo '<ul class="news-list">';
            while ($news_query->have_posts()) : $news_query->the_post();
                // 各投稿の表示内容
                echo '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
                if (function_exists('get_the_last_modified_info')) {
                    echo '<div class="post-date-last">' . get_post_modified_time('Y.n.j') . '</div>';
                }
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