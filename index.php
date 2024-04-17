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






    <main>
        <div class="top-wrapper">
            <div class="centered-image1">
                <img src="http://localhost/wordpress/wp-content/uploads/2024/04/firstview.jpg">
                <h1>ホームページ制作なら<br><span>ホムクリ</span></h1>
                <p>お客様のご要望に合わせて<br>完全オリジナルデザインで制作。<br>結果につながるハイクオリティなホームページを<br>ホムクリのモットーである最速最短でご提供いたします。</p>
            </div>
        </div>
        <div class="main">
            <p class="text-sd">Have you ever thought about this?</p>
            <h2 class ="h2title">こんな事思ったことありませんか？</h2>
            <div class="main-logo1">

                <div class="text">
                    <div class="text-part"><span class="large-letter">ホ</span>ームページ制作って何から始めればいいんだろう？</div>
                    <div class="text-part"><span class="large-letter">今</span>使っているホームページが見づらい。</div>
                    <div class="text-part"><span class="large-letter">手</span>間はかけたくないけどなるべくコストを抑えたい。</div>
                </div>
                <div class="centered-image">
                    <img src="http://localhost/wordpress/wp-content/uploads/2024/04/main-logo1-background.png" alt="">
                </div>
            </div>


            <div class="container4">
                <a href="<?php echo home_url(); ?>/inquiry" class="btn_25"><span>無料相談はこちら</span></a>
            </div>


            <div class="main-logo2">
                <p class="text-sd">That's Different</p>
                <h2 class ="h2title">他とここが違う！</h2>
                <div class="content-box">
                    <div class="text-box1">
                        <h3>01/最低価格<span class="font_red">7万円</span>でサイトを作れる</h3>
                        <p>お手頃な価格で始める安心のホームページ制作。<br><br>
                            ホムクリでは、予算を気にせずに高品質なサイト制作が可能です。
                            妥協のない品質とコストのバランス、そしてお客様一人ひとりのニーズに合わせた柔軟なカスタマイズが魅力となっております。<br>
                            専門的な知識がない方でも、ご安心ください。
                            ホムクリはお客様の事業の個性を引き立て、ビジネスの成功を加速させる魅力的なホームページをお届けします。</p>
                    </div>
                    <div class="image-box1"><img src="http://localhost/wordpress/wp-content/uploads/2024/04/main-logo2-1.png" alt=""></div>
                </div>
                <div class="content-box">
                    <div class="image-box2"><img src="http://localhost/wordpress/wp-content/uploads/2024/04/main-logo2-2.png" alt=""></div>
                    <div class="text-box2">
                        <h3>02/<span class="font_red">最短7日</span>で納品が可能</h3>
                        <p>速さも、ホムクリの自慢です。<br><br>
                            緊急でホームページが必要なお客様にも、最短7日で高品質なホームページをお届けします。
                            ホムクリの効率的な制作フローとデザイナーチームが、お客様の緊急のご要望にも迅速に対応。
                            どんなタイトなスケジュールでも、ビジネスの流れを保ちながら、迅速かつスムーズに新しいホームページを立ち上げるお手伝いをします。</p>
                    </div>
                </div>
                <div class="content-box">
                    <div class="text-box1">
                        <h3>03/独自のデザイン<span class="font_red">提案が可能</span></h3>
                        <p>ホムクリでは、お客様の事業が輝くオーダーメイドのWebデザインを実現します。<br><br>
                            ホムクリは単にデザインを提供するだけでなく、お客様の事業の個性と目指す目標を深く理解し、それを活かした完全オリジナルのデザインを創出。
                            訪問者が忘れられない魅力的なサイトで、お客様のビジネスを際立たせることに注力し、お客様の想いと市場の最新動向を組み合わせ、他とは違うホームページを通じてビジネスの可能性を最大限に引き出します。
                        </p>
                    </div>
                    <div class="image-box1"><img src="http://localhost/wordpress/wp-content/uploads/2024/04/main-logo2-3.png" alt=""></div>
                </div>
                <div class="content-box">
                    <div class="image-box2"><img src="http://localhost/wordpress/wp-content/uploads/2024/04/main-logo2-4.png" alt=""></div>
                    <div class="text-box2">
                        <h3>04/SEOライティングで<span class="font_red">集客効果UP</span></h3>
                        <p>ホムクリのSEO対策サービスで、お客様のホームページの集客力を大幅に向上させましょう。<br><br>
                            ホムクリでは、検索エンジンでの高いランキングを実現し、目に見える形で訪問者数を増やすための戦略的なコンテンツ作成を得意としています。
                            市場調査に基づいたキーワードの選定と、読み手に価値を提供する質の高い記事で、お客様のホームページを競合他社よりも一歩先に進めます。
                            SEOライティングにより、検索結果での目立ちやすさを高め、より多くの潜在顧客にあなたのビジネスを知ってもらうことが可能です。</p>
                    </div>
                </div>
                <div class="content-box">
                    <div class="text-box1">
                        <h3>05/ホームページの運営をサポートする<span class="font_red">保守管理サービス</span></h3>
                        <p>ホームページを持つことは事業の成長への第一歩ですが、それを継続的に成長させるためには、定期的なメンテナンスとアップデートが不可欠です。<br><br>
                            ホムクリの保守管理サービスでは、お客様のホームページがいつも最新の状態を保てるよう、技術的なサポートとコンテンツの更新を提供します。
                            万が一トラブルが発生しても、ホムクリは最短翌日に対応し、お客様の活動がオンライン上で常に最高のパフォーマンスを発揮するよう支援します。
                            お客様一人ひとりの需要に合わせたきめ細やかなアドバイスで、ホームページの運営をよりスムーズにし、さらなる成長を促します。
                            ホームページを作った後も、心置きなく事業に専念できるよう全面的にバックアップします。</p>
                    </div>
                    <div class="image-box1"><img src="http://localhost/wordpress/wp-content/uploads/2024/04/main-logo2-5.png" alt=""></div>
                </div>
                <div class="content-box">
                    <div class="image-box2"><img src="http://localhost/wordpress/wp-content/uploads/2024/04/main-logo2-6.png" alt=""></div>
                    <div class="text-box2">
                        <h3>06/ホームページ公開後も<span class="font_red">安心のアフターサポート</span></h3>
                        <p>ホームページの公開後も、ホムクリはお客様をしっかりサポートします。<br><br>
                            公開後の問題や更新が必要な際に迅速かつ効果的に対応するホムクリのアフターサポートサービスでは、ホームページのセキュリティ維持から機能の追加、内容の最新化まで、お客様のあらゆるニーズに対応。
                            このサービスにより、お客様は技術的な懸念から解放され、事業に集中することができます。
                            ホムクリは、お客様のホームページが長期間にわたり成功を収め、常に最前線で活躍し続けるよう、確実なサポートを提供します。</p>
                    </div>
                </div>
            </div>

            <div class="container5">
                <a href="<?php echo home_url(); ?>/inquiry" class="btn_25"><span>無料相談はこちら</span></a>
            </div>

            <p class="text-sd">HomePage Sample</p>
            <h2 class ="h2title">ホームページのサンプル</h2>
            <div class="main-logo3">
                <p>ホムクリでは様々な業界や目的に合わせたホームページに対応可能です。<br><br>
                    こちらでは、ホムクリのデザインサンプルを一部ご紹介しています。<br>
                    これらのサンプルを通じて、ホムクリがお客様の理想をどのように形にし、魅力的なホームページを表現できるかの一端をご覧いただけます。<br><br>
                    他のホームページデザインにも興味がある方は、ぜひサンプル一覧をご覧ください。</p>
                <div class="sample-images">
                    <div class="image-group">
                        <img class="image-PC fadeInOnScroll" src="http://localhost/wordpress/wp-content/uploads/2024/04/kimono-PC.png" alt="着物レンタルホームページのパソコンでのサンプル">
                        <img class="image-phone fadeInOnScroll" src="http://localhost/wordpress/wp-content/uploads/2024/04/kimono-phone.png" alt="着物レンタルホームページのスマホでのサンプル">
                    </div>
                    <div class="image-group">
                        <img class="image-PC fadeInOnScroll" src="http://localhost/wordpress/wp-content/uploads/2024/04/cafe-PC.png" alt="カフェのホームページのパソコンでのサンプル">
                        <img class="image-phone fadeInOnScroll" src="http://localhost/wordpress/wp-content/uploads/2024/04/cafe-phone.png" alt="カフェのホームページのスマホでのサンプル">
                    </div>
                </div>
            </div>






            <div class="container7"><!-- サンプル一覧はこちら -->
                <div class="circle_btn05">
                    <a href="<?php echo home_url(); ?>/sample" class="circle_btn05-txt">サンプル一覧はこちら</a>
                    <div class="circle_btn05-icon">
                        <div class="circle_btn05-circle">
                            <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <mask id="644189">
                                    <path d="M43.7571 14.445C54.0966 36.6284 26.334 56.7459 8.47304 39.5132C-8.25498 22.2711 10.2249 -5.00596 32.2464 3.65796" stroke="#ffffff" stroke-width="2" stroke-linecap="round"></path>
                                </mask>
                                <foreignObject x="0" y="0" width="48" height="48" mask="url(#644189)">
                                    <div class="circle_btn05-circle-itm"></div><!-- 丸の色 -->
                                </foreignObject>
                            </svg>
                        </div>
                        <div class="circle_btn05-arrow">
                            <svg width="16" height="13" viewBox="0 0 16 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g>
                                    <path d="M0 6.5H14.6036" stroke="black" stroke-width="2" stroke-miterlimit="10">
                                    </path>
                                    <path d="M9.72588 11.5533L14.6036 6.5" stroke="black" stroke-width="2" stroke-miterlimit="10" stroke-linecap="square"></path>
                                    <path d="M9.72588 1.43652L14.6036 6.5" stroke="black" stroke-width="2" stroke-miterlimit="10" stroke-linecap="square"></path>
                                </g>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>






            <div class="main-logo4">
                <p class="text-sd">Pricing</p>
                <h2 class ="h2title">料金プラン</h2>
                <p>お客様のご要望に合わせて、最適なプランをご提案します。<br>
                    表示価格はすべて税込となっておりますので安心してお選びください。</p>
                <div class="shapes-set">
                    <div class="shape-container">
                        <div class="rectangle1">
                            <div class="plan-container1">
                                <h3>スタータープラン</h3>
                                <p>70,000円</p>
                            </div>
                            <div class="container8">
                                <p>ページ数:1ページ</p><br>
                                <span>動きなし</span>
                                <ul>
                                    <li>何度でも修正可能</li>
                                    <li>レスポンシブ対応</li>
                                    <li>SEO対策</li>
                                    <li>Googleマップ設置</li>
                                    <li>営業カレンダー設置</li>
                                    <li>SSL化</li>
                                    <li>SNS連携</li>
                                    <li>サーバー契約</li>
                                    <li>独自ドメイン取得</li>
                                </ul>
                            </div>
                            <div class="container6-1">
                                <a href="<?php echo home_url(); ?>/inquiry" class="btn_25"><span>無料相談はこちら</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="shape-container">
                        <div class="rectangle2">
                            <div class="plan-container2">
                                <h3>スタンダードプラン</h3>
                                <p>150,000円</p>
                            </div>
                            <div class="container8">
                                <p>ページ数:2~5ページ</p><br>
                                <span>動きなし</span>

                                <ul>
                                    <li>何度でも修正可能</li>
                                    <li>レスポンシブ対応</li>
                                    <li>SEO対策</li>
                                    <li>Googleマップ設置</li>
                                    <li>営業カレンダー設置</li>
                                    <li>SSL化</li>
                                    <li>SNS連携</li>
                                    <li>サーバー契約</li>
                                    <li>独自ドメイン取得</li>

                                </ul>
                            </div>
                            <div class="container6-2">
                                <a href="<?php echo home_url(); ?>/inquiry" class="btn_25"><span>無料相談はこちら</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="shape-container">
                        <div class="rectangle3">
                            <div class="plan-container3">
                                <h3>ビジネスプラン</h3>
                                <p>250,000円</p>
                            </div>
                            <div class="container9">
                                <p>ページ数:2~5ページ</p><br>
                                <span>動きあり</span>

                                <ul>
                                    <li>何度でも修正可能</li>
                                    <li>レスポンシブ対応</li>
                                    <li>SEO対策</li>
                                    <li>Googleマップ設置</li>
                                    <li>営業カレンダー設置</li>
                                    <li>SSL化</li>
                                    <li>SNS連携</li>
                                    <li>サーバー契約</li>
                                    <li>独自ドメイン取得</li>

                                </ul>
                            </div>
                            <div class="container6-3">
                                <a href="<?php echo home_url(); ?>/inquiry" class="btn_25"><span>無料相談はこちら</span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="plan-content">
                    <p>お客様一人ひとりのご要望に応じた豊富なサービスを提供するホムクリの各プラン。<br><br>
                        特にデザイン段階ではお客様の理想を形にするため、修正は何度でも可能です。<br>
                        過度でない範囲であれば、実装後も柔軟な修正に対応いたします。<br>
                        プラン内での追加ページは1ページにつき10,000円でご提供し、提供いただける画像がない場合は、お手頃なオプションサービスをご用意しております。<br>
                        保守管理サービスをご利用いただけない場合には、独自ドメインの取得やサーバー契約の費用をお客様にご負担いただく必要があります。<br><br>
                        これらの情報を踏まえ、最適なプランをお選びください。<br>
                        サービスの詳細やご不明な点がございましたら、いつでもお問い合わせをお待ちしております。<br>
                        ホムクリでは、お客様が完全に納得されるサービスを目指し、お客様のビジネスのさらなる発展のお手伝いをさせていただくことをお約束します。</p>
                </div>
                <div class="container7"><!-- 料金詳細はこちら -->
                    <div class="circle_btn05">
                        <a href="<?php echo home_url(); ?>/pricing" class="circle_btn05-txt">料金詳細はこちら</a>
                        <div class="circle_btn05-icon">
                            <div class="circle_btn05-circle">
                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <mask id="644189">
                                        <path d="M43.7571 14.445C54.0966 36.6284 26.334 56.7459 8.47304 39.5132C-8.25498 22.2711 10.2249 -5.00596 32.2464 3.65796" stroke="#ffffff" stroke-width="2" stroke-linecap="round"></path>
                                    </mask>
                                    <foreignObject x="0" y="0" width="48" height="48" mask="url(#644189)">
                                        <div class="circle_btn05-circle-itm"></div><!-- 丸の色 -->
                                    </foreignObject>
                                </svg>
                            </div>
                            <div class="circle_btn05-arrow">
                                <svg width="16" height="13" viewBox="0 0 16 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g>
                                        <path d="M0 6.5H14.6036" stroke="black" stroke-width="2" stroke-miterlimit="10">
                                        </path>
                                        <path d="M9.72588 11.5533L14.6036 6.5" stroke="black" stroke-width="2" stroke-miterlimit="10" stroke-linecap="square"></path>
                                        <path d="M9.72588 1.43652L14.6036 6.5" stroke="black" stroke-width="2" stroke-miterlimit="10" stroke-linecap="square"></path>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <p class="text-sd">Option</p>
                <h2 class ="h2title">対応可能なオプション</h2>
                <p>お客様のご要望に対応出来るように、様々なオプションをご用意しております。<br>
                    表示価格はすべて税込となっておりますので安心してお選びください。</p>
                <div class="container">
                    <div class="content-box-option">
                        <div class="text-box-option">
                            <h3>ロゴ制作</h3>
                            <p>50,000円～</p>
                        </div>
                        <div class="image-box-option">
                            <img src="http://localhost/wordpress/wp-content/uploads/2024/04/option-1.png" alt="ホームページのロゴ制作を現したロゴ">
                        </div>
                    </div>
                    <div class="content-box-option">
                        <div class="text-box-option">
                            <h3>LP制作</h3>
                            <p>40,000円～</p>
                        </div>
                        <div class="image-box-option">
                            <img src="http://localhost/wordpress/wp-content/uploads/2024/04/option-2.png" alt="LP制作を現したロゴ">
                        </div>
                    </div>
                    <div class="content-box-option">
                        <div class="text-box-option">
                            <h3>SEO記事代行</h3>
                            <p>10,000円/1記事</p>
                        </div>
                        <div class="image-box-option">
                            <img src="http://localhost/wordpress/wp-content/uploads/2024/04/option-3.png" alt="SEO記事代行を現したロゴ">
                        </div>
                    </div>
                    <div class="content-box-option">
                        <div class="text-box-option">
                            <h3>保守管理サービス</h3>
                            <p>月額5,000円</p>
                        </div>
                        <div class="image-box-option">
                            <img src="http://localhost/wordpress/wp-content/uploads/2024/04/option-4.jpg" alt="ホームページの保守管理サービスを現したロゴ">
                        </div>
                    </div>
                    <div class="content-box-option">
                        <div class="text-box-option">
                            <h3>画像制作</h3>
                            <p>1,000円/1画像</p>
                        </div>
                        <div class="image-box-option">
                            <img src="http://localhost/wordpress/wp-content/uploads/2024/04/option-5.png" alt="ホームページに使う画像の作成を現したロゴ">
                        </div>
                    </div>
                    <div class="content-box-option">
                        <div class="text-box-option">
                            <h3>アクセス解析ツール設置</h3>
                            <p>4,000円</p>
                        </div>
                        <div class="image-box-option">
                            <img src="http://localhost/wordpress/wp-content/uploads/2024/04/option-6.png" alt="ホームページのアクセス解析ツール設置を現したロゴ">
                        </div>
                    </div>
                    <div class="content-box-option">
                        <div class="text-box-option">
                            <h3>英語切り替え</h3>
                            <p>10,000円/1P</p>
                        </div>
                        <div class="image-box-option">
                            <img src="http://localhost/wordpress/wp-content/uploads/2024/04/option-7.png" alt="ホームページを英語切り替えを現したロゴ">
                        </div>
                    </div>

                </div>
                <section id="flow"></section>
                <div class="container5">
                    <a href="<?php echo home_url(); ?>/inquiry" class="btn_25"><span>無料相談はこちら</span></a>
                </div>


            </div>
            <p class="text-sd">HomePage Complete Flow</p>
            <h2 class ="h2title">お申込みからホームページ完成までの流れ</h2>
            <div class="main-logo5">

                <div class="timeline-container">
                    <!-- 各タイムライン項目 -->
                    <div class="timeline-item">
                        <div class="timeline-icon">
                            <!-- 最初の画像 -->
                            <img src="http://localhost/wordpress/wp-content/uploads/2024/04/flow-1.png" alt="お申込みを現したロゴ">
                        </div>
                        <div class="timeline-content">
                            <h3 class="timeline-title">①お申込み受付</h3>
                            <p>制作依頼のお申込み後、迅速に対応いたします。</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-icon">
                            <img src="http://localhost/wordpress/wp-content/uploads/2024/04/flow-2.png" alt="ミーティング、ヒアリングを現したロゴ">
                        </div>
                        <div class="timeline-content">
                            <h3 class="timeline-title">②初回ミーティング・<br class="mobile-break">ヒアリング</h3>
                            <p>お客様のご要望に沿うため詳細なヒアリングを行います。</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-icon">
                            <img src="http://localhost/wordpress/wp-content/uploads/2024/04/flow-3.png" alt="お見積りの提案、初期費用のお支払いを現したロゴ">
                        </div>
                        <div class="timeline-content">
                            <h3 class="timeline-title">③お見積りの提案・<br class="mobile-break">初期費用のお支払い</h3>
                            <p>お見積りをご提案させていただきます。<br>
                                合意後に初期費用お支払いの確認が取れ次第、制作開始いたします。</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-icon">
                            <img src="http://localhost/wordpress/wp-content/uploads/2024/04/flow-4.png" alt="ホームページ制作を現したロゴ">
                        </div>
                        <div class="timeline-content">
                            <h3 class="timeline-title">④ホームページ制作</h3>
                            <p>お客様のご要望に応じたホームページを制作いたします。</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-icon">
                            <img src="http://localhost/wordpress/wp-content/uploads/2024/04/flow-5.png" alt="内容確認を現したロゴ">
                        </div>
                        <div class="timeline-content">
                            <h3 class="timeline-title">⑤内容確認</h3>
                            <p>完成したホームページをお客様と共に確認し完璧に仕上げます。</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-icon">
                            <img src="http://localhost/wordpress/wp-content/uploads/2024/04/flow-6.png" alt="納品、残金の支払いを現したロゴ">
                        </div>
                        <div class="timeline-content">
                            <h3 class="timeline-title">⑥納品・残金のお支払い</h3>
                            <p>ホームページを納品。<br>
                                その際に使用した全ての素材もまとめてお渡しします。</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-icon">
                            <img src="http://localhost/wordpress/wp-content/uploads/2024/04/flow-7.png" alt="アフターサポートを現したロゴ">
                        </div>
                        <div class="timeline-content">
                            <h3 class="timeline-title">⑦アフターサポート</h3>
                            <p>ホームページ公開後も継続的にお客様をサポートいたします。</p>
                        </div>
                    </div>


                </div>
                <div class="container4">
                    <a href="<?php echo home_url(); ?>/inquiry" class="btn_25"><span>無料相談はこちら</span></a>
                </div>
            </div>

            <div class="main-logo6">
                <p class="text-sd">Q&A</p>
                <h2 class ="h2title">よくある質問</h2>
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



                    <!-- その他質問はこちらボタン -->
                    <div class="container7">
                        <div class="circle_btn05">
                            <a href="<?php echo home_url(); ?>/FAQ" class="circle_btn05-txt">その他質問はこちら</a>
                            <div class="circle_btn05-icon">
                                <div class="circle_btn05-circle">
                                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <mask id="644189">
                                            <path d="M43.7571 14.445C54.0966 36.6284 26.334 56.7459 8.47304 39.5132C-8.25498 22.2711 10.2249 -5.00596 32.2464 3.65796" stroke="#ffffff" stroke-width="2" stroke-linecap="round"></path>
                                        </mask>
                                        <foreignObject x="0" y="0" width="48" height="48" mask="url(#644189)">
                                            <div class="circle_btn05-circle-itm"></div><!-- 丸の色 -->
                                        </foreignObject>
                                    </svg>
                                </div>
                                <div class="circle_btn05-arrow">
                                    <svg width="16" height="13" viewBox="0 0 16 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <path d="M0 6.5H14.6036" stroke="black" stroke-width="2" stroke-miterlimit="10">
                                            </path>
                                            <path d="M9.72588 11.5533L14.6036 6.5" stroke="black" stroke-width="2" stroke-miterlimit="10" stroke-linecap="square"></path>
                                            <path d="M9.72588 1.43652L14.6036 6.5" stroke="black" stroke-width="2" stroke-miterlimit="10" stroke-linecap="square"></path>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </main>

    <?php
    get_footer(); 
    ?>