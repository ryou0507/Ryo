<?php

/*
Template Name: archive-news
*/
get_header(); // ヘッダーの読み込み

?>



<main id="main-content">
  <header class="archive-header">
    <h1><?php post_type_archive_title(); ?></h1>
  </header>
  <?php if (have_posts()) : ?>
    <div class="post-list">
      <?php while (have_posts()) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
          <div class="post-excerpt">
            <?php the_excerpt(); ?>
          </div>
        </article>
        <?php
        if (function_exists('get_the_last_modified_info')) {
          echo '<div class="post-date-last">最終更新日: ' . get_post_modified_time('Y年n月j日') . '</div>';
      }
        ?>
      <?php endwhile; ?>
    </div>
    <?php the_posts_navigation(); ?>
  <?php else : ?>
    <p><?php _e('お知らせはまだありません。', 'textdomain'); ?></p>
  <?php endif; ?>

</main>

</body>

<?php
get_footer();
?>