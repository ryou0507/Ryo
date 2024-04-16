<?php 

/*
Template Name: news-list
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

    <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php
        // WP_Queryを使用してnews投稿を取得
        $args = array(
            'post_type'      => 'news',  // 投稿タイプ
            'posts_per_page' => 10,      // 1ページに表示する投稿数
            'order'          => 'DESC',  // 降順で表示
            'orderby'        => 'date'   // 日付で並び替え
        );
        $news_query = new WP_Query($args);

        if ($news_query->have_posts()) : 
            echo '<ul class="news-list">';
            while ($news_query->have_posts()) : $news_query->the_post();
                // 各投稿の表示内容
                echo '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
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

<?php
  get_footer(); 
  ?>