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

    <div class="column-button">
        <div class="circle_btn05">
            <a href="<?php echo home_url(); ?>/blog" class="circle_btn05-txt">コラム一覧に戻る</a>
            <div class="circle_btn05-icon">
                <div class="circle_btn05-circle">
                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <mask id="644189">
                            <path d="M43.7571 14.445C54.0966 36.6284 26.334 56.7459 8.47304 39.5132C-8.25498 22.2711 10.2249 -5.00596 32.2464 3.65796" stroke="#ffffff" stroke-width="2" stroke-linecap="round"></path>
                        </mask>
                        <foreignObject x="0" y="0" width="48" height="48" mask="url(#644189)">
                            <div class="circle_btn05-circle-itm"></div><!-- 丸の色 -->
                        </foreignObject>
                    </svg>
                </div>
                <div class="circle_btn05-arrow">
                    <svg width="16" height="13" viewBox="0 0 16 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <path d="M0 6.5H14.6036" stroke="black" stroke-width="2" stroke-miterlimit="10">
                            </path>
                            <path d="M9.72588 11.5533L14.6036 6.5" stroke="black" stroke-width="2" stroke-miterlimit="10" stroke-linecap="square"></path>
                            <path d="M9.72588 1.43652L14.6036 6.5" stroke="black" stroke-width="2" stroke-miterlimit="10" stroke-linecap="square"></path>
                        </g>
                    </svg>
                </div>
            </div>
        </div>
    </div>
    </div>



    <?php
    get_footer();
    ?>