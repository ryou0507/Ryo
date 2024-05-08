<?php get_header(); ?>

<body <?php body_class('custom-single-post-class'); ?>>
    <div class="blog-container">
        <div class="blog-main">
            <div id="primary" class="blog-content">
                <main id="main" class="site-main">

                    <?php
                    while (have_posts()) : the_post(); ?>

                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <header class="entry-header">
                                <h1 class="blog-title"><?php the_title(); ?></h1>
                            </header><!-- .entry-header -->

                            <div class="entry-content">
                                <?php the_content(); ?>
                            </div><!-- .entry-content -->
                        </article><!-- #post-<?php the_ID(); ?> -->

                    <?php endwhile; // End of the loop.
                    ?>
                </main><!-- #main -->
            </div><!-- #primary -->
        </div>
        <!-- 関連記事 -->
        <aside class="related-post-wrap">

            <h3>関連記事</h3>

            <ul>
                <?php
                $catkwds = array();

                if (has_category()) {

                    $cats = get_the_category();

                    foreach ($cats as $cat) {
                        $catkwds[] = $cat->term_id;
                    }
                }
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => '4',
                    'post__not_in' => array($post->ID),
                    'category__in' => $catkwds,
                    'orderby' => 'rand'
                );
                $the_query = new WP_Query($args);
                if ($the_query->have_posts()) :
                    while ($the_query->have_posts()) : $the_query->the_post();
                ?>
                        <li class="related-post">
                            <a href="<?php the_permalink(); ?>">
                                <?php
                                if (has_post_thumbnail()) {

                                    the_post_thumbnail('medium');
                                } else {

                                    echo '<img src="' . get_template_directory_uri() . '/images/no-image.gif">';
                                }
                                ?>
                                <div class="text-wrap">
                                    <?php the_title(); ?>
                                </div>
                            </a>
                        </li>
                <?php
                    endwhile;
                endif;

                wp_reset_postdata();
                ?>
            </ul>
        </aside>

    </div>

    <?php
    get_footer();
    ?>