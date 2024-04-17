<?php get_header();

/*
Template Name: blog
*/

?>

<div id="primary" class="content-area-blog">
    <main id="main" class="site-main">

        <header class="page-header">
            <h1 class="page-title">お役立ち情報</h1>
        </header><!-- .page-header -->

        <div class="entry-container"> <!-- コンテナをループの外に移動 -->
            <?php
            // カスタムクエリの設定
            $custom_query = new WP_Query(array(
                'post_type' => 'post', // 投稿タイプが通常の投稿
                'posts_per_page' => 10 // 1ページに表示する投稿数
            ));
            if ($custom_query->have_posts()) :
                while ($custom_query->have_posts()) : $custom_query->the_post();
            ?>

                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <header class="entry-header">
                            <!-- タイトルをリンクとして表示 -->
                            <h2 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                        </header><!-- .entry-header -->
                    </article><!-- #post-<?php the_ID(); ?> -->

            <?php
                endwhile; // End of the loop.
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

<?php
get_footer();
?>