<?php

/**
 * メインのテンプレートファイル
 *
 * これは WordPress テーマで最も一般的なテンプレートファイルであり、
 * テーマに必要なファイルの2つのうちの1つです（もう1つは style.css です）。
 * クエリによってより特定のファイルが一致しない場合に、ページを表示するために使用されます。
 * たとえば、home.php ファイルが存在しない場合にホームページをまとめます。
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Your_Theme_Name
 */

get_header(); // ヘッダーの読み込み

?>

<body>

    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NLHZNZDS"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
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
                <input class="menu-toggle" type="checkbox" id="menu-toggle"/>
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
        <div class="top-container">
            <h1>入力完了</h1>
        </div>

        <div class="rectangle-container">
            <div class="step">
                <div class="step-rectangle1">
                    <p>Step01<br>
                        入力
                    </p>
                </div>
                <div class="step-circle1">1</div>
            </div>
            <div class="step">
                <div class="step-rectangle1">
                    <p>Step2<br>
                        確認
                    </p>
                </div>
                <div class="step-circle1">2</div>
            </div>
            <div class="step">
                <div class="step-rectangle">
                    <p>Step3<br>
                        完了
                    </p>
                </div>
                <div class="step-circle">3</div>
            </div>
        </div>

        <div class="main">
            <div class="input-complete">
                <p>入力完了<br>
                    お問い合わせ内容を送信完了致しました。</p>
            </div>

            <div class="complete-text">
                <p>お問い合わせ頂きありがとうございます。<br><br>
                    お客様に(homcri.hpweb@gmail.com)より<br class="mobile-break">
                    自動送信メールを送信致しましたのでご確認下さい。<br><br>
                    万が一、自動送信メールが届かない場合がございましたら<br>
                    お手数ですがお電話にてお問い合わせ下さい。</p>
            </div>

            <div class="container6">
                <a href="index.html" class="button2">TOPページへ</a>
            </div>
        </div>
    </main>

    <?php
    get_footer(); // フッターの読み込み
    ?>