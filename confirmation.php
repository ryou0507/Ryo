<?php

/*
Template Name: confirmation
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
        <div class="top-container">
            <h1>入力内容の確認</h1>
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
                <div class="step-rectangle">
                    <p>Step2<br>
                        確認
                    </p>
                </div>
                <div class="step-circle">2</div>
            </div>
            <div class="step">
                <div class="step-rectangle1">
                    <p>Step3<br>
                        完了
                    </p>
                </div>
                <div class="step-circle1">3</div>
            </div>
        </div>

        <div class="confirmationDetails-container">
            <div id="confirmationDetails">
                <!-- ここにJavaScriptを使って入力内容を表示する -->
            </div>
        </div>

        <div class="confirmSubmit-container">
            <button id="confirmSubmit">入力完了</button>
        </div>
    </main>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // 送信ボタンのクリックイベントリスナーを追加
            document.getElementById('confirmSubmit').addEventListener('click', function() {
                // セッションストレージからフォームデータを取得
                var formData = JSON.parse(sessionStorage.getItem('formData'));

                // サーバーにフォームデータを送信する関数
                function sendFormData(formData) {
                    // フォームデータをサーバーに送信
                    fetch('https://homcri.com/proxy.php', {
                            method: 'POST', // 送信メソッド
                            headers: {
                                'Content-Type': 'application/json' // ヘッダー
                            },
                            body: JSON.stringify(formData) // ボディにフォームデータをJSON形式で設定
                        })
                        .then(response => {
                            if (response.ok) {
                                // 送信が成功した場合の処理
                                window.location.href = 'thankyou.html'; // 送信完了ページへのリダイレクト
                            } else {
                                throw new Error('Network response was not ok.');
                            }
                        })
                        .catch(error => console.error('Error:', error));
                }

                // フォームデータを送信
                sendFormData(formData);
            });

            // セッションストレージからフォームデータを取得
            var formData = JSON.parse(sessionStorage.getItem('formData'));

            // カテゴリー名を英語から日本語に変換するためのマッピング
            var categoryMapping = {
                'inquiry': 'お問い合わせ',
                'estimate': 'お見積もり依頼',
                'order': '依頼申し込み'
            };

            // 入力内容を表示するエレメントを取得
            var detailsDiv = document.getElementById('confirmationDetails');

            // フォームデータをHTMLに変換して表示
            // ここで、categoryMappingを使用してカテゴリー名を日本語に変換
            detailsDiv.innerHTML = `
                    <p>〇カテゴリー: ${categoryMapping[formData.category] || '選択されていません'}</p>
                    <p>〇貴社名: ${formData.companyName || '未入力'}</p>
                    <p>〇貴社名（フリガナ）: ${formData.companyNameKana || '未入力'}</p>
                    <p>〇担当者名: ${formData.contactName}</p>
                    <p>〇担当者名（フリガナ）: ${formData.contactNameKana}</p>
                    <p>〇電話番号: ${formData.phone}</p>
                    <p>〇メールアドレス: ${formData.email}</p>
                    <p>〇お問い合わせ内容の詳細: ${formData.inquiryDetails}</p>
                `;
        });
    </script>





    <?php
    get_footer(); // フッターの読み込み
    ?>