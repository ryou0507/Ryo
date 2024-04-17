<?php

/*
Template Name: sample
*/
get_header(); // ヘッダーの読み込み

?>


  <main>
    <div class="main">
      <div class="top-container">
        <h1>ホームページサンプル一覧</h1>
      </div>



      <div class="sample-box">
        <div class="sample1">
          <p class="text-sd">Our homepage</p>
          <h2 class ="h2title">当ホームページ</h2>
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/homcri-PC.jpg" alt="ホームページ制作ならホムクリのパソコンでのサンプル" class="PC-img">
          <div class="sample-container">
            <div class="text-section">
              <p><b>制作期間：約10日<br>使用したプラン：ビジネスプラン</b></p>
              <p>専門的な業種の為、分かりやすさを重視。<br>シンプルかつスマートなデザイン。</p>
            </div>
            <div class="img-section">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/homcri-phone.jpg" alt="ホームページ制作ならホムクリのスマホでのサンプル">
            </div>
          </div>
        </div>
        <div class="sample1">
          <p class="text-sd">Izakaya homepage</p>
          <h2 class ="h2title">居酒屋ホームページ</h2>
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/izakaya-PC.jpg" alt="居酒屋ホームページのパソコンでのサンプル" class="PC-img">
          <div class="sample-container">
            <div class="text-section">
              <p><b>制作期間：約7日<br>使用したプラン：ビジネスプラン</b></p>
              <p>フォントで和を感じ取れるイメージに<br>暗めの色合いとグラデーションカラーを<br>使用し、シックで高級感のあるデザイン。</p>
            </div>
            <div class="img-section">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/izakaya-phone.jpg" alt="居酒屋ホームページのスマホでのサンプル">
            </div>
          </div>
        </div>
        <div class="sample1">
          <p class="text-sd">Kimono rental homepage</p>
          <h2 class ="h2title">着物レンタルホームページ</h2>
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/kimono-PC.jpg" alt="着物レンタルホームページのパソコンでのサンプル" class="PC-img">
          <div class="sample-container">
            <div class="text-section">
              <p><b>制作期間：約7日<br>使用したプラン：ビジネスプラン</b></p>
              <p>ピンク系の色合いをメインに使用することで<br>春らしさと華やかさを出し、<br>女性の目に止まるような可愛らしいデザイン。</p>
            </div>
            <div class="img-section">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/kimono-phone.jpg" alt="着物レンタルホームページのスマホでのサンプル">
            </div>
          </div>
        </div>
        <div class="sample1">
          <p class="text-sd">Bar homepage</p>
          <h2 class ="h2title">BARホームページ</h2>
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/bar-PC.jpg" alt="BARホームページのパソコンでのサンプル" class="PC-img">
          <div class="sample-container">
            <div class="text-section">
              <p><b>制作期間：約7日<br>使用したプラン：スタンダードプラン</b></p>
              <p>夜を想像させる黒メインの色合いで<br>フォントにネオンを使用したオシャレで<br>かっこいいデザイン。</p>
            </div>
            <div class="img-section">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/bar-phone.jpg" alt="BARホームページのスマホでのサンプル">
            </div>
          </div>
        </div>
        <div class="sample1">
          <p class="text-sd">Cafe homepage</p>
          <h2 class ="h2title">カフェホームページ</h2>
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/cafe-PC.jpg" alt="カフェのホームページのパソコンでのサンプル" class="PC-img">
          <div class="sample-container">
            <div class="text-section">
              <p><b>制作期間：約7日<br>使用したプラン：スタンダードプラン</b></p>
              <p>白背景に多くの写真を使用することで、<br>一目でイメージが湧きやすく、<br>シンプルで見やすいデザイン。</p>
            </div>
            <div class="img-section">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/cafe-phone.jpg" alt="カフェのホームページのスマホでのサンプル">
            </div>
          </div>
        </div>
        <div class="sample1">
          <p class="text-sd">Dog salon&hotel homepage</p>
          <h2 class ="h2title">ドッグSalon&Hotelホームページ</h2>
          <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/dog-PC.jpg" alt="ドッグSalon&Hotelホームページのパソコンでのサンプル" class="PC-img">
          <div class="sample-container">
            <div class="text-section">
              <p><b>制作期間：約7日<br>使用したプラン：スタンダードプラン</b></p>
              <p>暖色を使用し、丸みのあるフォントで表現した、<br>柔らかく可愛いらしいデザイン。</p>
            </div>
            <div class="img-section">
              <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/dog-phone.jpg" alt="ドッグSalon&Hotelホームページのスマホでのサンプル">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container5">
      <a href="inquiry.html" class="btn_25"><span>無料相談はこちら</span></a>
    </div>
  </main>

</body>

  <?php
  get_footer(); // フッターの読み込み
  ?>
