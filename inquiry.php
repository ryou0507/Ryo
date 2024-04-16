<<<<<<< HEAD
<?php

/*
Template Name: inquiry
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

  <?php
  get_footer(); // フッターの読み込み
  ?>
=======
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
            <input class="input-area" type="text" id="contactNameKana" name="contactNameKana" placeholder="担当者様のお名前（フリガナ）を入力してください。"
              　required>
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
            <textarea id="inquiryDetails" name="inquiryDetails" placeholder="例：ホームページが欲しいので無料相談したい。"
              required></textarea>
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
      document.getElementById('goToConfirmation').addEventListener('click', function () {
        var formElement = document.getElementById('contactForm');
        var agree = document.getElementById('agree').checked; // 同意がチェックされているか確認

        // フォームのバリデーションチェックと同意のチェック
        if (formElement.checkValidity() && agree) {
          // バリデーションと同意チェックが成功した場合の処理
          var formData = new FormData(formElement);
          var object = {};
          formData.forEach(function (value, key) {
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

  <?php
    get_footer(); // フッターの読み込み
    ?>
>>>>>>> e0358ea7b3a353e8356b2a3280100540e9e9f1c3
