<?php

/*
Template Name: info
*/
get_header(); // ヘッダーの読み込み

?>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NLHZNZDS" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
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
                            <li class="menu-option"><a href="info.html">運営者概要</a></li>
                            <li class="menu-option"><a href="#お知らせ">お知らせ</a></li>
                            <li class="menu-option"><a href="#お役立ち情報">お役立ち情報</a></li>
                            <li class="menu-option"><a href="inquiry.html">お問い合わせ</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="center">
                <a href="index.html">
                    <img src="https://lh3.googleusercontent.com/pw/AP1GczPpPBJdDHhE-08tnyv3KNgp6l_E1TuspfIxyhw3zIMNSIiZvRMawqtJyS6D2RkzLq7_dXx8UvivUm7ZHS0lFFeWxPb9eSTCenIEZACeMowrstsnqjEI2xaqp3KN62tRy9ZvmrYqMXo5o4KT0Knu87PC=w500-h500-s-no-gm?authuser=0"
                        alt="ホームページ制作ならホムクリのロゴ">
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
                    <a href="inquiry.html" class="icon-link email-icon">
                        <i class="fas fa-envelope"></i>
                    </a>
                </div>

            </div>
        </div>

        <header>
            <nav class="header-bottom">
                <ul>
                    <li><a href="index.html">TOP </a></li>
                    <li><a href="index.html#flow">依頼の流れ </a></li>
                    <li><a href="pricing.html">料金表 </a></li>
                    <li><a href="sample.html">サンプル一覧 </a></li>
                    <li><a href="FAQ.html">よくある質問 </a></li>
                </ul>
            </nav>
        </header>
    </div>

    <main>
        <div class="main">
            <div class="top-container">
                <h1>事業・運営者概要</h1>
            </div>

            <div class="table-container">
                <table class="info-table">
                    <tr>
                        <th>事業名</th>
                        <td>ホームページ制作代行サービス<br>ホムクリ</td>
                    </tr>
                    <tr>
                        <th>代表者</th>
                        <td>山下　凌治</td>
                    </tr>
                    <tr>
                        <th>営業部・デザイン部担当</th>
                        <td>上野　純弥</td>
                    </tr>
                    <tr>
                        <th>開発部担当</th>
                        <td>大谷　高史</td>
                    </tr>
                    <tr>
                        <th>営業部連絡先</th>
                        <td>080-8387-4545<br>
                            <span class="contact-spacing">
                                <a href="mailto:homcri.hpweb@gmail.com">homcri.hpweb@gmail.com</a>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <th>事業内容</th>
                        <td>Webサービス<br>Webサイトのデザイン<br>開発<br>運営<br>ロゴ制作<br>SEO設計</td>
                    </tr>
                </table>
            </div>


        </div>
    </main>

    <?php
    get_footer(); // フッターの読み込み
    ?>