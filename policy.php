<?php

/*
Template Name: policy
*/
get_header(); // ヘッダーの読み込み

?>

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

    <main>
        <div class="main">
            <div class="top-container">
                <h1>プライバシーポリシー</h1>
            </div>
            <p>ホムクリは、ウェブサイトの訪問者のプライバシーを尊重し、個人情報の保護に努めています。</p>
            <br>
            <h2 class="policy" class="policy">1.個人情報の収集と利用目的</h2 class="policy">
            <p>当サイトでは、お問い合わせ時、サービス利用時などに、ユーザーの氏名、メールアドレス、
                電話番号などの個人情報を収集することがあります。<br><br>
                収集した個人情報は、お問い合わせへの回答、サービスの提供、改善、ユーザーからの要望に
                応じたサービス情報の提供などの目的で利用します。
            </p>

            <br>
            <h2 class="policy">2.個人情報の第三者への開示・提供の禁止</h2 class="policy">

            <p>当サイトは、ユーザーの個人情報を適切に管理し、以下のいずれかに該当する場合を除き、
                第三者に開示または提供しません。</p>
            <ul>
                <li>ユーザーの同意がある場合</li>
                <li>法令に基づく場合</li>
                <li>人の生命、身体または財産の保護のために必要があり、ユーザーの同意を得ることが困難
                    である場合</li>
            </ul>
            <br>

            <h2 class="policy">3.個人情報の安全管理</h2 class="policy">

            <p>当サイトは、収集した個人情報の紛失、破壊、改ざんおよび漏洩などを防ぐため、適切なセキ
                ュリティ対策を講じています。</p>
            <br>
            <h2 class="policy">4.免責事項</h2 class="policy">

            <p>当サイトからリンクされている他のウェブサイトにおける個人情報の保護については、当サイ
                トは責任を負いかねます。各ウェブサイトのプライバシーポリシーをご参照ください。</p>
            <br>
            <h2 class="policy">5.プライバシーポリシーの変更</h2 class="policy">

            <p>当サイトは、個人情報に関する法令の変更や自己の判断により、このプライバシーポリシーを
                改定することがあります。変更した場合には、ウェブサイト上で告知します。</p>
            <br><br>

            <p>お問い合わせ先</p>
            <p>電話番号：未定<br>
                メールアドレス：homcri.hpweb@gmail.com</p>

            <div class="right">
                制定日:[日付]<br>
                最終更新日:[日付]<br>
            </div>
        </div>
    </main>
    <?php
    get_footer(); // フッターの読み込み
    ?>