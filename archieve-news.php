<?php

/*
Template Name: archive-news
*/
get_header(); // ヘッダーの読み込み

?>

 <!-- Google Tag Manager (noscript) -->
 <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NLHZNZDS" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- ページの最上部にアンカーを設置 -->
    <a id="top"></a>
    <!-- コンテンツなど -->

    <!-- トップに戻るボタン -->
    <a href="#top" class="top-link">トップに戻る</a>

    <div class="header">
        <div class="head-wrapper">
            <div class="left">
                <div class="hamburger-menu-container">
                    <input class="menu-toggle" type="checkbox" id="menu-toggle" />
                    <label for="menu-toggle" class="menu-icon">
                        <span class="menu-icon-line"></span>
                    </label>
                    <nav class="menu">
                        <ul>
                            <li class="menu-option-top"><a></a></li>
                            <li class="menu-option"><a href="<?php echo home_url(); ?>/info">運営者概要</a></li>
                            <li class="menu-option"><a href="#お知らせ">お知らせ</a></li>
                            <li class="menu-option"><a href="#お役立ち情報">お役立ち情報</a></li>
                            <li class="menu-option"><a href="<?php echo home_url(); ?>/inquiry">お問い合わせ</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="center">
                <a href="index.html">
                    <img src="https://lh3.googleusercontent.com/pw/AP1GczPpPBJdDHhE-08tnyv3KNgp6l_E1TuspfIxyhw3zIMNSIiZvRMawqtJyS6D2RkzLq7_dXx8UvivUm7ZHS0lFFeWxPb9eSTCenIEZACeMowrstsnqjEI2xaqp3KN62tRy9ZvmrYqMXo5o4KT0Knu87PC=w500-h500-s-no-gm?authuser=0" alt="ホームページ制作ならホムクリのロゴ">
                </a>
            </div>
            <div class="right">
                <!-- 電話アイコンとメールアイコンを含むコンテナ -->
                <!-- アイコンを横並びにするためのコンテナ -->
                <div class="icon-container">
                    <!-- 電話アイコン -->
                    <a href="tel:08083874545" class="icon-link phone-icon">
                        <i class="fas fa-phone"></i>
                    </a>
                    <!-- メールアイコン -->
                    <a href="<?php echo home_url(); ?>/inquiry" class="icon-link email-icon">
                        <i class="fas fa-envelope"></i>
                    </a>
                </div>

            </div>
        </div>

        <header>
            <nav class="header-bottom">
                <ul>
                    <li><a href="index.html">TOP </a></li>
                    <li><a href="#flow">依頼の流れ </a></li>
                    <li><a href="<?php echo home_url(); ?>/pricing">料金表</a></li>
                    <li><a href="<?php echo home_url(); ?>/sample">サンプル一覧 </a></li>
                    <li><a href="<?php echo home_url(); ?>/FAQ">よくある質問 </a></li>
                </ul>
            </nav>
        </header>
    </div>

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
      <?php endwhile; ?>
    </div>
    <?php the_posts_navigation(); ?>
  <?php else : ?>
    <p><?php _e('お知らせはまだありません。', 'textdomain'); ?></p>
  <?php endif; ?>
</main>

<?php
  get_footer(); 
  ?>