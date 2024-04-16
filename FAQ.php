<?php

/*
Template Name: FAQ
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
                <h1>よくある質問一覧</h1>
                <p>こちらに無い質問に関しましては、お問い合わせフォームよりお願いいたします。</p>
            </div>
        </div>
        <div class="FAQ-list">
            <div class="question-list">
                <div class="question-item">Q</div>
                <div class="question-text">ホームページ制作にかかる費用は？</div>
            </div>
            <div class="answer-list">
                <div class="answer-item">A．</div>
                <div class="answer-text">
                    ホームページ制作にかかる費用はお客様の目的やご要望に応じて様々です。<br>
                    ホムクリでは、スターターからビジネスプランまで、幅広いプランを用意しており、70,000円からお選びいただけます。<br>
                    各プランに含まれるサービスの詳細や、お客様の理想を実現するための追加オプションについては、<a href="pricing.html#plan">料金詳細はこちら</a>をご覧ください。
                </div>
            </div>
            <div class="question-list">
                <div class="question-item">Q</div>
                <div class="question-text">ホームページ制作にかかる時間は？</div>
            </div>
            <div class="answer-list">
                <div class="answer-item">A．</div>
                <div class="answer-text">
                    通常、基本的なホームページは7日間で完成しますが、ホームページの規模や特別な要望によっては時間が長くなることもあります。初期の打ち合わせで納期の目安をご相談させていただきます。
                </div>
            </div>
            <div class="question-list">
                <div class="question-item">Q</div>
                <div class="question-text">ホームページはスマートフォンに対応してますか？</div>
            </div>
            <div class="answer-list">
                <div class="answer-item">A．</div>
                <div class="answer-text">
                    はい、ホムクリで制作されるすべてのホームページは、スマートフォンを含むあらゆるデバイスに完全対応しています。<br>
                    レスポンシブデザインを標準で採用しており、どのデバイスからアクセスしても最適な表示でご覧いただけます。<br>
                    各プランにおける詳細な対応内容や、さらにカスタマイズしたい場合のオプションについては、<a href="pricing.html#plan">プラン詳細はこちら</a>をご確認ください。
                </div>
            </div>
            <div class="question-list">
                <div class="question-item">Q</div>
                <div class="question-text">ホームページの保守・管理サポートはありますか？</div>
            </div>
            <div class="answer-list">
                <div class="answer-item">A．</div>
                <div class="answer-text">はい、ホムクリでは、お客様のホームページを常に最適な状態に保つための包括的な保守・管理サポートを提供しています。<br>
                    トラブルが発生した場合の迅速な対応から、定期的な内容更新、セキュリティの強化まで、ホームページの運営に関わるあらゆるご要望に対応可能です。<br>
                    保守・管理サービス以外のオプションにも興味がある方は、<a href="pricing.html#option">対応可能オプションはこちら</a>でご確認ください。
                </div>
            </div>
            <div class="question-list">
                <div class="question-item">Q</div>
                <div class="question-text">ホームページ制作後のSEO対策はどうなっていますか？</div>
            </div>
            <div class="answer-list">
                <div class="answer-item">A．</div>
                <div class="answer-text">ホームページ制作時には、h1、h2タグでの見出し構造、メタディスクリプション、画像のalt属性、モバイルフレンドリー設計、キーワード配置を含むSEO基本対策を施します。<br>
                    制作後は、SEO記事執筆オプションを提供し、専門のライターがお客様のニーズに合わせた質の高いコンテンツを作成し、これによりウェブサイトの訪問者増加と検索エンジンでのランキング向上をサポートします。<br>
                    詳細やその他のオプションに興味のある方は、<a href="pricing.html#option">対応可能オプションはこちら</a>で確認できます。</div>
            </div>
            <div class="question-list">
                <div class="question-item">Q</div>
                <div class="question-text">ロゴ・画像制作も依頼できますか？</div>
            </div>
            <div class="answer-list">
                <div class="answer-item">A．</div>
                <div class="answer-text">
                    はい、ロゴや画像制作もホムクリで対応可能です。<br>
                    ホムクリのデザイナーによるオリジナルのロゴ制作は50,000円から、プラン対象外の画像制作は1,000円/1画像でご提供しております。<br>
                    事業のブランディングを強化し、理想のウェブサイトを目指したい方は、<a href="pricing.html#option">対応可能オプションはこちら</a>で詳細をご確認ください。
                </div>
                <section id="anime"></section>
            </div>

            <div class="question-list">
                <div class="question-item">Q</div>
                <div class="question-text">動きあり、動きなしとは何ですか？</div>
            </div>

            <div class="answer-list">
                <div class="answer-item">A．</div>
                <div class="answer-text">
                    「動きあり」と「動きなし」は、ホームページ上で使用されるアニメーション機能の有無を指します。<br>
                    具体的には、「動きあり」プランでは、画像やテキストなどにアニメーション効果を加えることができ、訪問者の注目を引く魅力的な動きをページ内に作り出すことが可能です。<br>
                    一方、「動きなし」プランでは、これらのアニメーション機能は使用されず、静的なページデザインになります。<br>
                    他に、プランの違いに興味のある方は<a href="pricing.html#plan">プラン詳細はこちら</a>をご覧ください。
                </div>
            </div>
        </div>

        <p class="last-text">まずはお気軽にご相談ください。</p>
        <div class="container5">
            <a href="inquiry.html" class="btn_25"><span>無料相談はこちら</span></a>
        </div>
    </main>

    <?php
    get_footer(); // フッターの読み込み
    ?>