<?php

/*
Template Name: thankyou
*/
get_header(); // ヘッダーの読み込み

?>



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

    </body>

    <?php
    get_footer(); // フッターの読み込み
    ?>