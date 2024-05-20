/********** ハンバーガーボタン　メニュー外クリックで閉じる **********/
document.addEventListener('DOMContentLoaded', function () {
  // 正しいID "menu__toggle" に修正
  var menuToggle = document.getElementById('menu__toggle'); 
  var menuBtn = document.querySelector('.menu__btn');
  var menuBox = document.querySelector('.menu__box');

  if (!menuToggle || !menuBtn || !menuBox) {
      console.error('必要な要素が見つかりません。HTMLを確認してください。');
      return; // 必要な要素がない場合は、ここで処理を中断します。
  }

  menuBtn.addEventListener('click', function (event) {
      // メニューの表示状態を切り替える
      menuToggle.checked = !menuToggle.checked;
      // イベントの伝播を止める
      event.stopPropagation();
  });

  menuBox.addEventListener('click', function (event) {
      // メニューボックス内でのクリックイベントがドキュメント全体に伝播しないようにする
      event.stopPropagation();
  });

  document.querySelectorAll('.menu__item').forEach(function (menuItem) {
      menuItem.addEventListener('click', function () {
          // メニュー項目をクリックしたらチェックボックスをオフにしてメニューを閉じる
          menuToggle.checked = false;
      });
  });

  document.addEventListener('click', function () {
      // ドキュメント全体をクリックしたときの挙動（メニュー外をクリックしたとき）
      if (menuToggle.checked) {
          menuToggle.checked = false;
      }
  });
});

/**********　ファーストビュー　更新時指定アニメーション　**********/
document.addEventListener("DOMContentLoaded", function () {
  // 'fadeInFromRight' と 'fadeInFromLeft' のクラスを適切な要素に追加
  var imageElements = document.querySelectorAll('.top-wrapper img');
  var textElements = document.querySelectorAll('.top-wrapper h1, .top-wrapper p');

  imageElements.forEach(function (element) {
    element.classList.add('fadeInFromRight');
  });

  textElements.forEach(function (element) {
    element.classList.add('fadeInFromLeft');
  });
});



/********** こんな事思ったことありませんか　アニメーション **********/
document.addEventListener("DOMContentLoaded", () => {
  const observerOptions = {
    root: null, // ビューポートを基準とする
    threshold: 0.1, // 要素が10%見えたらトリガー
  };

  const observerCallback = (entries, observer) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) { // 要素がビューポートに入った
        entry.target.classList.add('image-pop-in'); // アニメーション用クラスを追加
        observer.unobserve(entry.target); // 監視を解除
      }
    });
  };

  const observer = new IntersectionObserver(observerCallback, observerOptions);
  // スクロール時のアニメーション対象要素を選択
  const scrollAnimationTargets = document.querySelectorAll('.centered-image img'); // このセレクタはアニメーション対象の画像に合わせて調整してください

  scrollAnimationTargets.forEach(target => {
    observer.observe(target); // 対象の要素を監視
  });
});




/**********　他とここが違う　アニメーション　**********/
document.addEventListener("DOMContentLoaded", () => {
  // スクロールイベントを監視
  window.addEventListener('scroll', () => {
    const contentBoxes = document.querySelectorAll('.main-logo2 .content-box');

    contentBoxes.forEach((box, index) => {
      const boxTop = box.getBoundingClientRect().top;
      const windowHeight = window.innerHeight;

      // 要素がビューポート内に入るかどうかをチェック
      if (boxTop < windowHeight && boxTop > 0) {
        box.classList.add('animate-slide-in'); // 共通クラスを追加

        // 奇数番目のcontent-boxを左から、偶数番目を右からに変更
        if (index % 2 === 0) {
          box.style.animationName = 'slideInFromLeft'; // 偶数番目を左から
        } else {
          box.style.animationName = 'slideInFromRight'; // 奇数番目を右から
        }
      }
    });
  });
});


/**********　ホームページのサンプル　アニメーション　**********/
document.addEventListener("DOMContentLoaded", () => {
  window.addEventListener('scroll', () => {
    document.querySelectorAll('.fadeInOnScroll').forEach(element => {
      const rect = element.getBoundingClientRect();
      if (rect.top <= window.innerHeight) {
        element.style.opacity = 1;
      }
    });
  });
  
});



/**********プラン　アニメーション **********/
document.addEventListener("DOMContentLoaded", () => {
  const observerOptions = {
    root: null, // ビューポートを基準とする
    threshold: 0.1, // 10%の要素が見えた時点でcallbackをトリガー
  };

  const observerCallback = (entries, observer) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) { // 要素がビューポートに入ったかどうか
        entry.target.classList.add('circle-animate'); // アニメーション用のクラスを追加
        observer.unobserve(entry.target); // 一度アニメーションが完了したら監視をやめる
      }
    });
  };

  const observer = new IntersectionObserver(observerCallback, observerOptions);
  // 監視対象の要素を選択（プラン名と金額）
  const elements = document.querySelectorAll('.plan-container1 h3, .plan-container1 p, .plan-container2 h3, .plan-container2 p, .plan-container3 h3, .plan-container3 p');

  elements.forEach(element => {
    observer.observe(element); // 各要素を監視
  });
});



/**********　対応可能なオプション　アニメーション　**********/
document.addEventListener("DOMContentLoaded", () => {
  const options = document.querySelectorAll('.content-box-option');
  let delayIncrement = 0.2; // 各要素のアニメーション遅延を増加させる秒数

  const observerOptions = {
    root: null,
    threshold: 0.1,
  };

  const observerCallback = (entries, observer) => {
    entries.forEach((entry, index) => {
      if (entry.isIntersecting) {
        // 各要素に対して、インデックスに基づいて遅延を増加させる
        entry.target.style.animationDelay = `${index * delayIncrement}s`;
        entry.target.style.animationName = 'fadeIn';

        observer.unobserve(entry.target);
      }
    });
  };

  const observer = new IntersectionObserver(observerCallback, observerOptions);
  options.forEach(option => {
    observer.observe(option);
  });
});



/**********　完成までの流れ　アイコンアニメーション　**********/
window.addEventListener('scroll', () => {
  const icons = document.querySelectorAll('.timeline-icon');

  icons.forEach(icon => {
    const iconTop = icon.getBoundingClientRect().top;
    const iconHeight = icon.getBoundingClientRect().height;

    // アイコンがビューポート内にあるかどうかをチェック
    if (iconTop < window.innerHeight && iconTop + iconHeight > 0) {
      // ビューポート内にあれば 'in-view' クラスを追加
      icon.classList.add('in-view');
    } else {
      // ビューポート外であれば 'in-view' クラスを削除
      icon.classList.remove('in-view');
    }
  });
});





