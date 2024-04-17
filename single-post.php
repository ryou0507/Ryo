<?php get_header(); ?>

<div id="primary" class="blog-content">
    <main id="main" class="site-main">

    <?php
    while ( have_posts() ) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header">
                <h1 class="blog-tatile"><?php the_title(); ?></h1>
            </header><!-- .entry-header -->

            <div class="entry-content">
                <?php the_content(); ?>
            </div><!-- .entry-content -->
        </article><!-- #post-<?php the_ID(); ?> -->

    <?php endwhile; // End of the loop.
    ?>
    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
?>
