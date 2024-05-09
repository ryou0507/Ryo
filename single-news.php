<?php

/*
Template Name: single-news
*/
get_header(); // ヘッダーの読み込み

?>


<main id="main-content">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="news-box">
          <h1><?php the_title(); ?></h1>
          <div class="post-content">
            <?php the_content(); ?>
          </div>
        </div>
      </article>
      <?php
      if (function_exists('get_the_last_modified_info')) {
        echo '<div class="date-last-news">' . get_post_modified_time('Y.n.j') . '</div>';
      }
      ?>
  <?php endwhile;
  endif; ?>

  <div class="news-button">
    <div class="circle_btn05">
      <a href="<?php echo home_url(); ?>/news-list" class="circle_btn05-txt">お知らせ一覧に戻る</a>
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

</main>

</body>

<?php
get_footer();
?>