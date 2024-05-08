<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <title>ホームページ制作ならホムクリ</title>

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-NLHZNZDS');
    </script>
    <!-- End Google Tag Manager -->

    <meta name="description" content="事業を始めたばかりでホームページがない、またはリニューアルを考えている企業へ。おしゃれで機能的で安価なホームページ制作で、お客様のビジネスをより魅力的なものに！">
    <meta name="keywords" content="ホームページ">
    <script src="anime.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arbutus+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <?php wp_head(); ?>
</head>

<body>
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
                            <li class="menu-option"><a href="<?php echo home_url(); ?>/news-list">お知らせ</a></li>
                            <li class="menu-option"><a href="<?php echo home_url(); ?>/blog">コラム</a></li>
                            <li class="menu-option"><a href="<?php echo home_url(); ?>/inquiry">お問い合わせ</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="center">
                <a href="index.html">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/homcri-logo.jpg" alt="ホームページ制作ならホムクリのロゴ">
                </a>
            </div>
            <div class="right">
                <!-- 電話アイコンとメールアイコンを含むコンテナ -->
                <!-- アイコンを横並びにするためのコンテナ -->
                <div class="icon-container">
                    <a href="https://twitter.com/homcri_web" class="icon-link x-icon">
                        <i class="fa-brands fa-x-twitter"></i>
                    </a>
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/instagram-icon.svg" alt="画像の説明">
                
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

        <header class="site-header">
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