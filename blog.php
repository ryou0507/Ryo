<?php get_header();

/*
Template Name: blog
*/

?>

<div id="primary" class="content-area-blog">
    <main id="main" class="site-main">

        <div class="top-container">
            <h1>コラム一覧</h1>
        </div>

        <div class="entry-container"> <!-- コンテナをループの外に移動 -->
            <?php
            // カスタムクエリの設定
            $custom_query = new WP_Query(array(
                'post_type' => 'post', // 投稿タイプが通常の投稿
                'posts_per_page' => 10, // 1ページに表示する投稿数
                'orderby' => 'modified', // 最終更新日順に並べ替え
                'order' => 'DESC' // 降順
            ));
            if ($custom_query->have_posts()) :
                $post_count = 0; // 追加したカウンター
                while ($custom_query->have_posts()) : $custom_query->the_post();
                    if ($post_count % 2 == 0) : ?>
                        <div class="row"> <!-- 新しい行の開始 -->
                        <?php endif; ?>

                        <div class="column">
                            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                <?php if (has_post_thumbnail()) : ?>
                                    <div class="post-thumbnail">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_post_thumbnail('custom-size'); ?>
                                        </a>
                                    </div>
                                <?php endif; ?>
                                <div class="entry-box">
                                    <header class="entry-header">
                                        <?php
                                        if (function_exists('get_the_last_modified_info')) {
                                            echo '<div class="column-date-last">' . get_post_modified_time('Y.n.j') . '</div>';
                                        }
                                        ?>
                                        <h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                                    </header><!-- .entry-header -->
                                    <div class="entry-content">
                                        <?php echo wp_trim_words(get_the_content(), 40, '...'); ?>
                                    </div>
                                </div>
                            </article><!-- #post-<?php the_ID(); ?> -->
                        </div><!-- .column -->

                        <?php if ($post_count % 2 == 1 || $custom_query->current_post + 1 == $custom_query->post_count) : ?>
                        </div> <!-- 行の終了 -->
            <?php endif;
                        $post_count++;
                    endwhile;
                    the_posts_navigation(); // 投稿のページネーション
                else :
                    get_template_part('template-parts/content', 'none');
                endif;

                // メインクエリのリセット
                wp_reset_postdata();
            ?>
        </div> <!-- コンテナの終了 -->

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>