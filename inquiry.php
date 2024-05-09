<?php

/*
Template Name: inquiry
*/
get_header(); // ヘッダーの読み込み

?>


  <main>
    <div class="main">
      <div class="top-container">
        <h1>お問い合わせフォーム</h1>
        <p>サービスのお申し込み・ご依頼はお気軽に<br class="mobile-break">お問い合わせください。<br><br>
          フォーム送信完了後、確認次第担当者より<br class="mobile-break">ご連絡させて頂きます。<br><br>
          またお問い合わせ内容により、ご連絡までお時間を頂く場合がございますので前もってご了承下さい。
        </p>
      </div>
    </div>

    <div class="rectangle-container">
      <div class="step">
        <div class="step-rectangle">
          <p>Step01<br>
            入力
          </p>
        </div>
        <div class="step-circle">1</div>
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
        <div class="step-rectangle1">
          <p>Step3<br>
            完了
          </p>
        </div>
        <div class="step-circle1">3</div>
      </div>
    </div>

    <div class="main">
      <div class="input-container">
        <form id="contactForm">
          <div>
            <label for="category" class="text-area">〇カテゴリー <span>必須</span></label><br>
            <select name="category" id="category" required>
              <option value="">選択してください</option>
              <option value="inquiry">お問い合わせ</option>
              <option value="estimate">お見積もり依頼</option>
              <option value="order">依頼申し込み</option>
            </select>
          </div>
          <div>
            <label for="companyName" class="text-area">〇貴社名</label><br>
            <input class="input-area" type="text" id="companyName" name="companyName" placeholder="貴社のお名前を入力してください。">
          </div>

          <div>
            <label for="companyNameKana" class="text-area">〇貴社名（フリガナ）</label><br>
            <input class="input-area" type="text" id="companyNameKana" name="companyNameKana" placeholder="貴社のお名前（フリガナ）を入力してください。">
          </div>
          <div>
            <label for="contactName" class="text-area">〇担当者名 <span>必須</span></label><br>
            <input class="input-area" type="text" id="contactName" name="contactName" placeholder="担当者様のお名前を入力してください。" required>
          </div>

          <div>
            <label for="contactNameKana" class="text-area">〇担当者名（フリガナ） <span>必須</span></label><br>
            <input class="input-area" type="text" id="contactNameKana" name="contactNameKana" placeholder="担当者様のお名前（フリガナ）を入力してください。" 　required>
          </div>

          <div>
            <label for="phone" class="text-area">〇電話番号 <span>必須</span></label><br>
            <input class="input-area" type="tel" id="phone" name="phone" placeholder="ご連絡可能な電話番号を入力してください。" required>
          </div>

          <div>
            <label for="email" class="text-area">〇メールアドレス <span>必須</span></label><br>
            <input class="input-area" type="email" id="email" name="email" placeholder="ご連絡可能なメールアドレスを入力してください。" required>
          </div>

          <div>
            <label for="inquiryDetails" class="text-area">〇お問い合わせ内容の詳細 <span>必須</span></label><br>
            <textarea id="inquiryDetails" name="inquiryDetails" placeholder="例：ホームページが欲しいので無料相談したい。" required></textarea>
          </div>
        </form>
      </div>

      <div class="bottom-container">
        <p><a href="policy.html">個人情報に関する同意</a><br><br>
          上記をご確認の上で、同意頂けるお客様は下記の同意ボタンにチェックをお願い致します。</p>
      </div>
      <div class="agreement">
        <input type="checkbox" id="agree" name="agree">
        <label for="agree">同意する</label>
      </div>


      <div class="button1">
        <button type="button" id="goToConfirmation">入力確認へ</button>
      </div>
    </div>


    <script>
      document.getElementById('goToConfirmation').addEventListener('click', function() {
        var formElement = document.getElementById('contactForm');
        var agree = document.getElementById('agree').checked; // 同意がチェックされているか確認

        // フォームのバリデーションチェックと同意のチェック
        if (formElement.checkValidity() && agree) {
          // バリデーションと同意チェックが成功した場合の処理
          var formData = new FormData(formElement);
          var object = {};
          formData.forEach(function(value, key) {
            object[key] = value;
          });
          var json = JSON.stringify(object);

          // セッションストレージにJSONデータを保存
          sessionStorage.setItem('formData', json);

          // confirmation.htmlに移動
          window.location.href = 'confirmation.html';
        } else {
          // バリデーション失敗または同意がチェックされていない場合の処理
          alert('必須項目を全て入力し、利用規約に同意の上、再度お試しください。');
          // フォームの不正な入力を表示（ブラウザが自動で行う）
          formElement.reportValidity();
        }
      });
    </script>


  </main>

    </body>

  <?php
  get_footer(); // フッターの読み込み
  ?>