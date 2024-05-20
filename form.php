<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <meta name="description" content="事業を始めたばかりでホームページがない、またはリニューアルを考えている企業へ。おしゃれで機能的で安価なホームページ制作で、お客様のビジネスをより魅力的なものに！">
    <meta name="keywords" content="ホームページ">
    <script src="anime.js"></script>
    <link rel="stylesheet" href="form.css">
    <?php wp_head(); ?>
</head>

<body>
    <div class="modal-bg modal-section">
        <div class="modal-wrap">
            <div class="modal-contents">
                <div class="modal-header">
                    <header class="simulator-header">
                        <div class="simulator-header-inner">
                            <a href="<?php echo home_url('/'); ?>">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/homcri-logo.jpg" alt="ホームページ制作ならホムクリのロゴ">
                            </a>
                            <div class="simulator-indicator pl-1">
                                <div class="simulator-indicator-remaining">
                                    残り
                                    <span class="remaining-questions">6</span>
                                    問
                                </div>
                                <ul class="simulator-indicator-list">
                                    <li class="simulator-indicator-list-item"></li>
                                    <li class="simulator-indicator-list-item"></li>
                                    <li class="simulator-indicator-list-item"></li>
                                    <li class="simulator-indicator-list-item"></li>
                                    <li class="simulator-indicator-list-item"></li>
                                    <li class="simulator-indicator-list-item"></li>
                                    <li class="simulator-indicator-list-item"></li>
                                    <li class="simulator-indicator-list-item"></li>
                                </ul>
                            </div>
                        </div>
                    </header>
                    <button id="click_cancel_1stview" class="close-btn">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="simulator">
                        <main class="simulator-content">
                            <div class="simulator-content-inner">
                                <div class="simulator-step2 pb-0">
                                    <div>
                                        <p class="simulator-step2-title">
                                            制作したいホームページの用途を教えてください！
                                        </p>
                                        <div class="simulator-step2-choices">
                                            <div class="simulator-step2-choices-item">
                                                <div class="simulator-step2-choices-item-help">企業情報を紹介したい</div>
                                                <button class="simulator-step2-choices-item-btn">企業サイト</button>
                                            </div>
                                            <div class="simulator-step2-choices-item">
                                                <div class="simulator-step2-choices-item-help">採用希望者向けに情報発信したい</div>
                                                <button class="simulator-step2-choices-item-btn">採用サイト</button>
                                            </div>
                                            <div class="simulator-step2-choices-item">
                                                <div class="simulator-step2-choices-item-help">サービスや商品の魅力を伝えたい</div>
                                                <button class="simulator-step2-choices-item-btn">商品・サービスサイト</button>
                                            </div>
                                            <div class="simulator-step2-choices-item">
                                                <div class="simulator-step2-choices-item-help">広告で短期的に集客したい</div>
                                                <button class="simulator-step2-choices-item-btn">ランディングページ</button>
                                            </div>
                                            <div class="simulator-step2-choices-item">
                                                <div class="simulator-step2-choices-item-help">自社商品をネット上で販売したい</div>
                                                <button class="simulator-step2-choices-item-btn">ECサイト</button>
                                            </div>
                                            <div class="simulator-step2-choices-item">
                                                <div class="simulator-step2-choices-item-help">SEOを活用して中長期的に集客したい</div>
                                                <button class="simulator-step2-choices-item-btn">オウンドメディア</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </main>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal-bg modal-section">
        <div class="modal-wrap">
            <div class="modal-contents">
                <div class="modal-header">
                    <header class="simulator-header">
                        <div class="simulator-header-inner">
                            <a href="<?php echo home_url('/'); ?>">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/homcri-logo.jpg" alt="ホームページ制作ならホムクリのロゴ">
                            </a>
                            <div class="simulator-indicator pl-1">
                                <div class="simulator-indicator-remaining">
                                    残り
                                    <span class="remaining-questions">8</span>
                                    問
                                </div>
                                <ul class="simulator-indicator-list">
                                    <li class="simulator-indicator-list-item"></li>
                                    <li class="simulator-indicator-list-item"></li>
                                    <li class="simulator-indicator-list-item"></li>
                                    <li class="simulator-indicator-list-item"></li>
                                    <li class="simulator-indicator-list-item"></li>
                                    <li class="simulator-indicator-list-item"></li>
                                    <li class="simulator-indicator-list-item"></li>
                                    <li class="simulator-indicator-list-item"></li>
                                </ul>
                            </div>
                        </div>
                    </header>
                    <button id="click_cancel_1stview" class="close-btn">
                        <i class="fas fa-times"></i>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="simulator">
                        <main class="simulator-content">
                            <div class="simulator-content-inner">
                                <div class="simulator-step2 pb-0">
                                    <div>
                                        <p class="simulator-step2-title">
                                            ページ数はおよそ何ページくらいでしょうか？
                                        </p>
                                        <div class="simulator-step2-choices-odd">
                                            <div class="simulator-step2-choices-item">
                                                <button class="simulator-step2-choices-item-btn">
                                                    <span class="is-num">1~5</span>
                                                    ページ
                                                </button>
                                            </div>
                                            <div class="simulator-step2-choices-item">
                                                <button class="simulator-step2-choices-item-btn">
                                                    <span class="is-num">5~10</span>
                                                    ページ
                                                </button>
                                            </div>
                                            <div class="simulator-step2-choices-item">
                                                <button class="simulator-step2-choices-item-btn">
                                                    <span class="is-num">10~20</span>
                                                    ページ
                                                </button>
                                            </div>
                                            <div class="simulator-step2-choices-item">
                                                <button class="simulator-step2-choices-item-btn">
                                                    <span class="is-num">20~50</span>
                                                    ページ
                                                </button>
                                            </div>
                                            <div class="simulator-step2-choices-item">
                                                <button class="simulator-step2-choices-item-btn">
                                                    <span class="is-num">50</span>
                                                    ページ以上
                                                </button>
                                            </div>
                                        </div>
                                        <div class="simulator-step2-help">
                                            <img src="">
                                            <span>シンプルな企業サイトなら5ページ以下、一般的な企業サイトで5~20ページ程度です。コラムや記事の機能がついているサイトは50ページ以上になることも多いです。</span>
                                        </div>
                                    </div>
                                    <div class="simulator-step2-bar">
                                        <button class="simulator-step2-back">
                                            <i class="fas fa-chevron-left">
                                                前の質問に戻る
                                            </i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </main>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <div class="modal-bg modal-section">
        <div class="modal-wrap">
            <div class="modal-contents">
                <div class="modal-header">
                    <header class="simulator-header">
                        <div class="simulator-header-inner">
                            <a href="<?php echo home_url('/'); ?>">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/homcri-logo.jpg" alt="ホームページ制作ならホムクリのロゴ">
                            </a>
                            <div class="simulator-indicator pl-1">
                                <div class="simulator-indicator-remaining">
                                    残り
                                    <span class="remaining-questions">7</span>
                                    問
                                </div>
                                <ul class="simulator-indicator-list">
                                    <li class="simulator-indicator-list-item"></li>
                                    <li class="simulator-indicator-list-item"></li>
                                    <li class="simulator-indicator-list-item"></li>
                                    <li class="simulator-indicator-list-item"></li>
                                    <li class="simulator-indicator-list-item"></li>
                                    <li class="simulator-indicator-list-item"></li>
                                    <li class="simulator-indicator-list-item"></li>
                                    <li class="simulator-indicator-list-item"></li>
                                </ul>
                            </div>
                        </div>
                    </header>
                    <button id="click_cancel_1stview" class="close-btn">
                        <i class="fas fa-times"></i>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="simulator">
                        <div class="simulator-content">
                            <main class="simulator-content-inner">
                                <div class="simulator-step2 pb-0">
                                    <div>
                                        <p class="simulator-step2-title">
                                            各ページを自分で更新できる機能は必要ですか？CMSは導入しますか？
                                        </p>
                                        <div class="simulator-step2-choices is-2-choices">
                                            <div class="simulator-step2-choices-item">
                                                <button class="simulator-step2-choices-item-btn">
                                                    <img src="" alt="" class="is-yes">
                                                    はい
                                                </button>
                                            </div>
                                            <div class="simulator-step2-choices-item">
                                                <button class="simulator-step2-choices-item-btn">
                                                    <img src="" alt="" class="is-no">
                                                    いいえ
                                                </button>
                                            </div>
                                        </div>
                                        <div class="simulator-step2-help">
                                            <img src="">
                                            <span>CMSとは各ページに掲載する文章や画像を自分で編集できる機能のこと。1ヵ月に1回以上、自社サイトの編集を行う場合はCMSを導入した方がいいでしょう。</span>
                                        </div>
                                    </div>
                                    <div class="simulator-step2-bar">
                                        <button class="simulator-step2-back">
                                            <i class="fas fa-chevron-left">
                                                前の質問に戻る
                                            </i>
                                        </button>
                                    </div>
                                </div>
                            </main>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal-bg modal-section">
        <div class="modal-wrap">
            <div class="modal-contents">
                <div class="modal-header">
                    <header class="simulator-header">
                        <div class="simulator-header-inner">
                            <a href="<?php echo home_url('/'); ?>">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/homcri-logo.jpg" alt="ホームページ制作ならホムクリのロゴ">
                            </a>
                            <div class="simulator-indicator pl-1">
                                <div class="simulator-indicator-remaining">
                                    残り
                                    <span class="remaining-questions">6</span>
                                    問
                                </div>
                                <ul class="simulator-indicator-list">
                                    <li class="simulator-indicator-list-item"></li>
                                    <li class="simulator-indicator-list-item"></li>
                                    <li class="simulator-indicator-list-item"></li>
                                    <li class="simulator-indicator-list-item"></li>
                                    <li class="simulator-indicator-list-item"></li>
                                    <li class="simulator-indicator-list-item"></li>
                                    <li class="simulator-indicator-list-item"></li>
                                    <li class="simulator-indicator-list-item"></li>
                                </ul>
                            </div>
                        </div>
                    </header>
                    <button id="click_cancel_1stview" class="close-btn">
                        <i class="fas fa-times"></i>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="simulator">
                        <main class="simulator-content">
                            <div class="simulator-content-inner">
                                <div class="simulator-step2 pb-0">
                                    <div>
                                        <p class="simulator-step2-title">
                                            問い合わせ機能は必要ですか？
                                        </p>
                                        <div class="simulator-step2-choices is-2-choices">
                                            <div class="simulator-step2-choices-item">
                                                <button class="simulator-step2-choices-item-btn">
                                                    <img src="" alt="" class="is-yes">
                                                    はい
                                                </button>
                                            </div>
                                            <div class="simulator-step2-choices-item">
                                                <button class="simulator-step2-choices-item-btn">
                                                    <img src="" alt="" class="is-no">
                                                    いいえ
                                                </button>
                                            </div>
                                        </div>
                                        <div class="simulator-step2-help">
                                            <img src="">
                                            <span>お問い合わせフォームお作ることでマーケティングに利用できる顧客情報を得ることができます。集客が目的のホームページでは必須の機能です。</span>
                                        </div>
                                    </div>
                                    <div class="simulator-step2-bar">
                                        <button class="simulator-step2-back">
                                            <i class="fas fa-chevron-left">
                                                前の質問に戻る
                                            </i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </main>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal-bg modal-section">
        <div class="modal-wrap">
            <div class="modal-contents">
                <div class="modal-header">
                    <header class="simulator-header">
                        <div class="simulator-header-inner">
                            <a href="<?php echo home_url('/'); ?>">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/homcri-logo.jpg" alt="ホームページ制作ならホムクリのロゴ">
                            </a>
                            <div class="simulator-indicator pl-1">
                                <div class="simulator-indicator-remaining">
                                    残り
                                    <span class="remaining-questions">5</span>
                                    問
                                </div>
                                <ul class="simulator-indicator-list">
                                    <li class="simulator-indicator-list-item"></li>
                                    <li class="simulator-indicator-list-item"></li>
                                    <li class="simulator-indicator-list-item"></li>
                                    <li class="simulator-indicator-list-item"></li>
                                    <li class="simulator-indicator-list-item"></li>
                                    <li class="simulator-indicator-list-item"></li>
                                    <li class="simulator-indicator-list-item"></li>
                                    <li class="simulator-indicator-list-item"></li>
                                </ul>
                            </div>
                        </div>
                    </header>
                    <button id="click_cancel_1stview" class="close-btn">
                        <i class="fas fa-times"></i>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="simulator">
                        <main class="simulator-content">
                            <div class="simulator-content-inner">
                                <div class="simulator-step2 pb-0">
                                    <div>
                                        <p class="simulator-step2-title">
                                            原稿はご自身で用意されますか？
                                        </p>
                                        <div class="simulator-step2-choices">
                                            <div class="simulator-step2-choices-item">
                                                <button class="simulator-step2-choices-item-btn">全て用意できる</button>
                                            </div>
                                            <div class="simulator-step2-choices-item">
                                                <button class="simulator-step2-choices-item-btn">ライティングをお願いしたい</button>
                                            </div>
                                            <div class="simulator-step2-choices-item">
                                                <button class="simulator-step2-choices-item-btn">インタビューからお願いしたい</button>
                                            </div>
                                        </div>
                                        <div class="simulator-step2-help">
                                            <img src="">
                                            <span>自分で原稿を用意できない場合は、プロにライティングを依頼したり、インタビューから原稿を起こすことも可能です。その分費用も高くなります。</span>
                                        </div>
                                    </div>
                                    <div class="simulator-step2-bar">
                                        <button class="simulator-step2-back">
                                            <i class="fas fa-chevron-left">
                                                前の質問に戻る
                                            </i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </main>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal-bg modal-section">
        <div class="modal-wrap">
            <div class="modal-contents">
                <div class="modal-header">
                    <header class="simulator-header">
                        <div class="simulator-header-inner">
                            <a href="<?php echo home_url('/'); ?>">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/homcri-logo.jpg" alt="ホームページ制作ならホムクリのロゴ">
                            </a>
                            <div class="simulator-indicator pl-1">
                                <div class="simulator-indicator-remaining">
                                    残り
                                    <span class="remaining-questions">4</span>
                                    問
                                </div>
                                <ul class="simulator-indicator-list">
                                    <li class="simulator-indicator-list-item"></li>
                                    <li class="simulator-indicator-list-item"></li>
                                    <li class="simulator-indicator-list-item"></li>
                                    <li class="simulator-indicator-list-item"></li>
                                    <li class="simulator-indicator-list-item"></li>
                                    <li class="simulator-indicator-list-item"></li>
                                    <li class="simulator-indicator-list-item"></li>
                                    <li class="simulator-indicator-list-item"></li>
                                </ul>
                            </div>
                        </div>
                    </header>
                    <button id="click_cancel_1stview" class="close-btn">
                        <i class="fas fa-times"></i>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="simulator">
                        <main class="simulator-content">
                            <div class="simulator-content-inner">
                                <div class="simulator-step2 pb-0">
                                    <div>
                                        <p class="simulator-step2-title">
                                            写真はご自身で用意されますか？
                                        </p>
                                        <div class="simulator-step2-choices">
                                            <div class="simulator-step2-choices-item">
                                                <button class="simulator-step2-choices-item-btn">全て用意できる</button>
                                            </div>
                                            <div class="simulator-step2-choices-item">
                                                <button class="simulator-step2-choices-item-btn">写真がないので画像を購入してほしい</button>
                                            </div>
                                            <div class="simulator-step2-choices-item">
                                                <button class="simulator-step2-choices-item-btn">写真がないので撮影してほしい</button>
                                            </div>
                                        </div>
                                        <div class="simulator-step2-help">
                                            <img src="">
                                            <span>自分で画像を用意できない場合は、素材を購入したり、プロに撮影を依頼することも可能です。その分費用も高くなります。</span>
                                        </div>
                                    </div>
                                    <div class="simulator-step2-bar">
                                        <button class="simulator-step2-back">
                                            <i class="fas fa-chevron-left">
                                                前の質問に戻る
                                            </i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </main>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal-bg modal-section">
        <div class="modal-wrap">
            <div class="modal-contents">
                <div class="modal-header">
                    <header class="simulator-header">
                        <div class="simulator-header-inner">
                            <a href="<?php echo home_url('/'); ?>">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/homcri-logo.jpg" alt="ホームページ制作ならホムクリのロゴ">
                            </a>
                            <div class="simulator-indicator pl-1">
                                <div class="simulator-indicator-remaining">
                                    残り
                                    <span class="remaining-questions">3</span>
                                    問
                                </div>
                                <ul class="simulator-indicator-list">
                                    <li class="simulator-indicator-list-item"></li>
                                    <li class="simulator-indicator-list-item"></li>
                                    <li class="simulator-indicator-list-item"></li>
                                    <li class="simulator-indicator-list-item"></li>
                                    <li class="simulator-indicator-list-item"></li>
                                    <li class="simulator-indicator-list-item"></li>
                                    <li class="simulator-indicator-list-item"></li>
                                    <li class="simulator-indicator-list-item"></li>
                                </ul>
                            </div>
                        </div>
                    </header>
                    <button id="click_cancel_1stview" class="close-btn">
                        <i class="fas fa-times"></i>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="simulator">
                        <main class="simulator-content">
                            <div class="simulator-content-inner">
                                <div class="simulator-step2 pb-0">
                                    <div>
                                        <p class="simulator-step2-title">
                                            デザインはどのくらいこだわりますか？
                                        </p>
                                        <div class="simulator-step2-choices">
                                            <div class="simulator-step2-choices-item">
                                                <button class="simulator-step2-choices-item-btn">テンプレでOK</button>
                                            </div>
                                            <div class="simulator-step2-choices-item">
                                                <button class="simulator-step2-choices-item-btn">セミオーダー形式</button>
                                            </div>
                                            <div class="simulator-step2-choices-item">
                                                <button class="simulator-step2-choices-item-btn">フルオーダー形式</button>
                                            </div>
                                        </div>
                                        <div class="simulator-step2-help">
                                            <img src="">
                                            <span>簡単なホームページでOKという場合はテンプレで十分です。少しはオリジナリティを出したい場合はセミオーダー。しっかりとこだわったサイトにしたい場合はフルオーダーを選んでください。</span>
                                        </div>
                                    </div>
                                    <div class="simulator-step2-bar">
                                        <button class="simulator-step2-back">
                                            <i class="fas fa-chevron-left">
                                                前の質問に戻る
                                            </i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </main>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal-bg modal-section">
        <div class="modal-wrap">
            <div class="modal-contents">
                <div class="modal-header">
                    <header class="simulator-header">
                        <div class="simulator-header-inner">
                            <a href="<?php echo home_url('/'); ?>">
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/homcri-logo.jpg" alt="ホームページ制作ならホムクリのロゴ">
                            </a>
                            <div class="simulator-indicator pl-1">
                                <div class="simulator-indicator-remaining">
                                    残り
                                    <span class="remaining-questions">2</span>
                                    問
                                </div>
                                <ul class="simulator-indicator-list">
                                    <li class="simulator-indicator-list-item"></li>
                                    <li class="simulator-indicator-list-item"></li>
                                    <li class="simulator-indicator-list-item"></li>
                                    <li class="simulator-indicator-list-item"></li>
                                    <li class="simulator-indicator-list-item"></li>
                                    <li class="simulator-indicator-list-item"></li>
                                    <li class="simulator-indicator-list-item"></li>
                                    <li class="simulator-indicator-list-item"></li>
                                </ul>
                            </div>
                        </div>
                    </header>
                    <button id="click_cancel_1stview" class="close-btn">
                        <i class="fas fa-times"></i>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="simulator">
                        <main class="simulator-content">
                            <div class="simulator-content-inner">
                                <div class="simulator-step2 pb-0">
                                    <div>
                                        <p class="simulator-step2-title">
                                            スマホ対応も必要ですか？
                                        </p>
                                        <div class="simulator-step2-choices is-2-choices">
                                            <div class="simulator-step2-choices-item">
                                                <button class="simulator-step2-choices-item-btn">
                                                    <img src="" alt="" class="is-yes">
                                                    はい
                                                </button>
                                            </div>
                                            <div class="simulator-step2-choices-item">
                                                <button class="simulator-step2-choices-item-btn">
                                                    <img src="" alt="" class="is-no">
                                                    いいえ
                                                </button>
                                            </div>
                                        </div>
                                        <div class="simulator-step2-help">
                                            <img src="">
                                            <span>一般消費者向け(BtoC)のホームページの場合はスマホ対応は必須です。企業向け(BtoB)の場合もできればスマホ対応しておきたいところです。</span>
                                        </div>
                                    </div>
                                    <div class="simulator-step2-bar">
                                        <button class="simulator-step2-back">
                                            <i class="fas fa-chevron-left">
                                                前の質問に戻る
                                            </i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </main>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>