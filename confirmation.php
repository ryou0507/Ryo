<?php

/*
Template Name: confirmation
*/
get_header(); // ヘッダーの読み込み

?>


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

    </body>





    <?php
    get_footer(); // フッターの読み込み
    ?>