<?php 

/*
Template Name: single-news
*/
get_header(); // ヘッダーの読み込み

?>


<main id="main-content">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      <h1><?php the_title(); ?></h1>
      <div class="post-content">
        <?php the_content(); ?>
      </div>
    </article>
  <?php endwhile; endif; ?>
  
</main>  

</body>

<?php
  get_footer(); 
  ?>