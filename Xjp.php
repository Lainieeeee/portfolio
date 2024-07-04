<!DOCTYPE html>
<html lang="jp">
<head>
    <?php include 'layouts/head.php'; ?>
</head>
<body id="pagetop" class="ja">

    <!-- header -->
    <?php
        include 'layouts/header.php';
    ?>

    <!-- GeometricBg -->
    <div class="GeometricBg overflow-hidden bg-ivory">
        <div class="GeometricBgInner container detailInner row m-auto align-items-center inview fadeinUp">
            <div class="col-10 col-lg-5 col-xl-6 m-auto">
                <img src="/asset/images/index/banner01.webp" alt="mockup image" loading="lazy">
            </div>
            <div class="col-lg-7 col-xl-6 text-center text-md-end mt-5 mt-md-0">
                <h1 class="text-orange fw-bold mb-2">Welcome!<br>This is YU-LIN's portfolio.</h1>
                <p class="text-orange fs-2 fw-bold mb-5">
                    ポートフォリオを閲覧していただき、ありがとうございます。<br>
                    感謝您瀏覽我的作品集。
                </p>
            </div>
        </div>
    </div>

    <!-- main -->
    <main>
            
        <!-- indexAboutBox -->
        <div class="indexAboutBox container detailInner" id="about">

            <!-- titleBox -->
            <div class="titleBox mb-5 pb-5 text-center fw-bold text-orange inview fadeinUp">
                <p class="fs-3">私について</p>
                <h2 class="display-2 fw-bold">ABOUT</h2>
            </div>

            <div class="d-xl-flex justify-content-xl-between align-items-start">
                <!-- profileImg -->
                <div class="profileImg col-9 col-xl-3 mx-auto mb-5 mb-xl-0 inview fadeinLeft">
                    <img src="/asset/images/index/img02.webp" alt="profile" loading="lazy">
                </div>
                <!-- textBox -->
                <div class="textBox col-xl-8">
                    <div class="d-flex justify-content-start align-items-end mb-5 inview fadeinUp">
                        <p class="display-1">莊 又霖</p>
                        <p class="ps-3 display-4">CHUANG YU LIN</p>
                    </div>
                    <p class="mb-4 lh-lg inview fadeinUp">
                        はじめまして、莊と申します。<br>
                        台湾高雄市で生まれ、幼少期に日本に移住し、東京工科大学のデザイン学部デザイン学科を卒業後、フロントエンジニアとして計6年の実務経験を積んできました。
                    </p>
                    <p class="mb-4 lh-lg inview fadeinUp">
                        日本ではWeb制作会社にて4年半、商業施設の新規事業部や生命保険会社の営業デジタル部に常駐し、ユーザー体験を重視したWebサイトの設計と開発に従事しました。
                    </p>
                    <p class="mb-4 lh-lg inview fadeinUp">
                        台湾に帰国後は、高雄師範大学の語学学校で中国語を学び、台湾現地のWeb制作会社でショッピングサイトやコーポレートサイト、
                        ブランディングサイトなど複数のプロジェクトを手掛けました。
                        これらの経験を通じて、異文化におけるユーザーのニーズを理解し、対応するスキルを磨きました。
                    </p>
                    <p class="lh-lg inview fadeinUp">
                        デザインと技術の融合を追求し、ユーザーにとって魅力的で使いやすいWebサイトを作り続けることが私の目標です。
                    </p>
                    <dl class="mt-5 inview fadeinUp">
                        <dt class="fs-2 mb-2">
                            <i class="fa-regular fa-comments pe-2"></i>
                            言語 Language
                        </dt>
                        <dd class="fs-3">
                            日本語、台湾閩南語、中国標準語（HSK5級）
                        </dd>
                    </dl>
                </div>
            </div>

        </div>

        <!-- indexExperienceBox -->
        <div class="indexExperienceBox bg-ivory" id="experience">
            <div class="container detailInner row m-auto justify-content-lg-between">

                <div class="col-xl-5 col-xxl-3 text-center pe-0 pe-lg-5 mb-5 mb-xl-0 inview fadeinLeft">
                    <!-- titleBox -->
                    <div class="titleBox mb-5 fw-bold text-orange">
                        <p class="fs-3">職務経歴</p>
                        <h2 class="display-2 fw-bold">EXPERIENCE</h2>
                    </div>
                    <div class="col-10 col-xl-12 m-auto">
                        <picture>
                            <!-- tablet 〜1200px -->
                            <source srcset="/asset/images/index/img01-sp.webp" media="(max-width: 1200px)" loading="lazy">
                            <!-- desktop 1200px〜 -->
                            <img src="/asset/images/index/img01-pc.webp" alt="Experience image" loading="lazy">
                        </picture>
                    </div>
                </div>

                <div class="col-xl-7 col-xxl-8">
                    <dl class="px-4 inview fadeinUp">
                        <dt>2023/4~</dt>
                        <dd class="mt-2 mb-0">
                            <p class="fs-2">フロントエンジニア</p>
                            <p class="fs-2">瓦吉科技股份有限公司</p>
                            <p class="my-3">
                                フロントエンドエンジニアとしてバックエンドエンジニアと連携し、新規WEBサイトの開発に従事。<br>
                                ショッピングサイトやコーポレートサイトなど多岐にわたるプロジェクトに携わり、ゼロベースからサイト運営、ページ分析・レポート作成、SEO対策まで一貫して経験。
                            </p>
                            <ul class="d-flex justyfy-content-start align-items-center flex-wrap">
                                <li class="text-orange fs-4 me-4">#HTML5</li>
                                <li class="text-orange fs-4 me-4">#SCSS</li>
                                <li class="text-orange fs-4 me-4">#JavaScript/Jquery</li>
                                <li class="text-orange fs-4 me-4">#Vite</li>
                                <li class="text-orange fs-4 me-4">#Bootstrap5</li>
                                <li class="text-orange fs-4 me-4">#Visual Studio Code</li>
                                <li class="text-orange fs-4 me-4">#Git/Github</li>
                                <li class="text-orange fs-4 me-4">#Laravel</li>
                                <li class="text-orange fs-4 me-4">#Vmwear</li>
                                <li class="text-orange fs-4 me-4">#Ubuntu</li>
                                <li class="text-orange fs-4 me-4">#Linux</li>
                                <li class="text-orange fs-4 me-4">#GA/GTM</li>
                                <li class="text-orange fs-4 me-4">#PageSpeed Insights</li>
                                <li class="text-orange fs-4 me-4">#Figma</li>
                            </ul>
                        </dd>
                    </dl>
                    <dl class="mt-4 pt-4 px-4 inview fadeinUp">
                        <dt>2022/11~2023/2</dt>
                        <dd class="mt-2 mb-0">
                            <p>國立高雄師範大學　語学学校で中国語学習</p>
                        </dd>
                    </dl>
                    <dl class="mt-4 pt-4 px-4 inview fadeinUp">
                        <dt>2018/4~2022/10</dt>
                        <dd class="mt-2 mb-0">
                            <p class="fs-2">フロントエンジニア / Webデザイナー</p>
                            <p class="fs-2">株式会社あとらす二十一</p>
                            <p class="my-3">
                                商業施設の新規事業部や生命保険会社の営業デジタル部に常駐し、顧客先のプロジェクトにてフロントエンド開発に従事。<br>
                                Webサイトのデザインから構築、さらにはチラシ、ポスター、バナーなどデザイン販促ツールを制作。<br>
                                プロジェクトごとに異なる様々なCMSを使用することで、柔軟な対応力と広範な知識を習得。
                            </p>
                            <ul class="d-flex justyfy-content-start align-items-center flex-wrap">
                                <li class="text-orange fs-4 me-4">#HTML5</li>
                                <li class="text-orange fs-4 me-4">#SCSS</li>
                                <li class="text-orange fs-4 me-4">#JavaScript/Jquery</li>
                                <li class="text-orange fs-4 me-4">#Visual Studio Code</li>
                                <li class="text-orange fs-4 me-4">#Wordpress(CMS)</li>
                                <li class="text-orange fs-4 me-4">#楽天RMS(CMS)</li>
                                <li class="text-orange fs-4 me-4">#Sitecore(CMS)</li>
                                <li class="text-orange fs-4 me-4">#aishipR(CMS)</li>
                                <li class="text-orange fs-4 me-4">#イオンサイトdeつく～る(CMS)</li>
                                <li class="text-orange fs-4 me-4">#Illustrator</li>
                                <li class="text-orange fs-4 me-4">#Photoshop</li>
                                <li class="text-orange fs-4 me-4">#XAMPP</li>
                                <li class="text-orange fs-4 me-4">#GA/GTM</li>
                            </ul>
                        </dd>
                    </dl>
                    <dl class="mt-4 pt-4 px-4 inview fadeinUp">
                        <dt>2014/4~2018/3</dt>
                        <dd class="mt-2 mb-0">
                            <p>東京工科大学　デザイン学部デザイン学科</p>
                        </dd>
                    </dl>
                </div>

            </div>
        </div>

        <!-- indexProductsBox -->
        <div class="indexProductsBox container detailInner">

            <!-- titleBox -->
            <div class="titleBox mb-5 pb-5 text-center fw-bold text-orange inview fadeinUp">
                <p class="fs-3">作品一覧</p>
                <h2 class="display-2 fw-bold">PROJECTS</h2>
            </div>

            <!-- slickCenter02 -->
            <div class="slickCenter02 inview fadeinUp">

                <div class="projectItem">
                    <!-- projectName -->
                    <p class="projectName fs-2 fw-bold text-orange mb-2 firstLine">壹然 evernature</p><!-- fancyBox projectImages -->
                    <div id="gallery1" class="fancyBox imageZoomHorizontal projectImages"><!-- First image (visible) --><a
                            data-fancybox="gallery1" href="/asset/images/products/2024/evernature02/pc/index.webp" data-caption="">
                            <div class="img"><img src="/asset/images/products/2024/evernature02/pc/index.webp" width="" height=""
                                    alt=""></div>
                        </a><!-- Hidden images -->
                        <div style="display: none;"><a data-fancybox="gallery1"
                                href="/asset/images/products/2024/evernature02/pc/about.webp" data-caption=""><img
                                    src="/asset/images/products/2024/evernature02/pc/about.webp"></a><a data-fancybox="gallery1"
                                href="/asset/images/products/2024/evernature02/pc/404.webp" data-caption=""><img
                                    src="/asset/images/products/2024/evernature02/pc/404.webp"></a><a data-fancybox="gallery1"
                                href="/asset/images/products/2024/evernature02/pc/albums.webp" data-caption=""><img
                                    src="/asset/images/products/2024/evernature02/pc/albums.webp"></a><a data-fancybox="gallery1"
                                href="/asset/images/products/2024/evernature02/pc/albums02.webp" data-caption=""><img
                                    src="/asset/images/products/2024/evernature02/pc/albums02.webp"></a><a data-fancybox="gallery1"
                                href="/asset/images/products/2024/evernature02/pc/articles.webp" data-caption=""><img
                                    src="/asset/images/products/2024/evernature02/pc/articles.webp"></a><a data-fancybox="gallery1"
                                href="/asset/images/products/2024/evernature02/pc/articles02.webp" data-caption=""><img
                                    src="/asset/images/products/2024/evernature02/pc/articles02.webp"></a><a data-fancybox="gallery1"
                                href="/asset/images/products/2024/evernature02/pc/benefits.webp" data-caption=""><img
                                    src="/asset/images/products/2024/evernature02/pc/benefits.webp"></a><a data-fancybox="gallery1"
                                href="/asset/images/products/2024/evernature02/pc/cart01.webp" data-caption=""><img
                                    src="/asset/images/products/2024/evernature02/pc/cart01.webp"></a><a data-fancybox="gallery1"
                                href="/asset/images/products/2024/evernature02/pc/cart02.webp" data-caption=""><img
                                    src="/asset/images/products/2024/evernature02/pc/cart02.webp"></a><a data-fancybox="gallery1"
                                href="/asset/images/products/2024/evernature02/pc/cart03.webp" data-caption=""><img
                                    src="/asset/images/products/2024/evernature02/pc/cart03.webp"></a><a data-fancybox="gallery1"
                                href="/asset/images/products/2024/evernature02/pc/contact.webp" data-caption=""><img
                                    src="/asset/images/products/2024/evernature02/pc/contact.webp"></a><a data-fancybox="gallery1"
                                href="/asset/images/products/2024/evernature02/pc/contact02.webp" data-caption=""><img
                                    src="/asset/images/products/2024/evernature02/pc/contact02.webp"></a><a data-fancybox="gallery1"
                                href="/asset/images/products/2024/evernature02/pc/create.webp" data-caption=""><img
                                    src="/asset/images/products/2024/evernature02/pc/create.webp"></a><a data-fancybox="gallery1"
                                href="/asset/images/products/2024/evernature02/pc/favorite.webp" data-caption=""><img
                                    src="/asset/images/products/2024/evernature02/pc/favorite.webp"></a><a data-fancybox="gallery1"
                                href="/asset/images/products/2024/evernature02/pc/favorite02.webp" data-caption=""><img
                                    src="/asset/images/products/2024/evernature02/pc/favorite02.webp"></a><a data-fancybox="gallery1"
                                href="/asset/images/products/2024/evernature02/pc/fraud.webp" data-caption=""><img
                                    src="/asset/images/products/2024/evernature02/pc/fraud.webp"></a><a data-fancybox="gallery1"
                                href="/asset/images/products/2024/evernature02/pc/login.webp" data-caption=""><img
                                    src="/asset/images/products/2024/evernature02/pc/login.webp"></a><a data-fancybox="gallery1"
                                href="/asset/images/products/2024/evernature02/pc/news.webp" data-caption=""><img
                                    src="/asset/images/products/2024/evernature02/pc/news.webp"></a><a data-fancybox="gallery1"
                                href="/asset/images/products/2024/evernature02/pc/news02.webp" data-caption=""><img
                                    src="/asset/images/products/2024/evernature02/pc/news02.webp"></a><a data-fancybox="gallery1"
                                href="/asset/images/products/2024/evernature02/pc/orders.webp" data-caption=""><img
                                    src="/asset/images/products/2024/evernature02/pc/orders.webp"></a><a data-fancybox="gallery1"
                                href="/asset/images/products/2024/evernature02/pc/password.webp" data-caption=""><img
                                    src="/asset/images/products/2024/evernature02/pc/password.webp"></a><a data-fancybox="gallery1"
                                href="/asset/images/products/2024/evernature02/pc/password02.webp" data-caption=""><img
                                    src="/asset/images/products/2024/evernature02/pc/password02.webp"></a><a data-fancybox="gallery1"
                                href="/asset/images/products/2024/evernature02/pc/privacy.webp" data-caption=""><img
                                    src="/asset/images/products/2024/evernature02/pc/privacy.webp"></a><a data-fancybox="gallery1"
                                href="/asset/images/products/2024/evernature02/pc/products.webp" data-caption=""><img
                                    src="/asset/images/products/2024/evernature02/pc/products.webp"></a><a data-fancybox="gallery1"
                                href="/asset/images/products/2024/evernature02/pc/products02.webp" data-caption=""><img
                                    src="/asset/images/products/2024/evernature02/pc/products02.webp"></a><a data-fancybox="gallery1"
                                href="/asset/images/products/2024/evernature02/pc/profile.webp" data-caption=""><img
                                    src="/asset/images/products/2024/evernature02/pc/profile.webp"></a><a data-fancybox="gallery1"
                                href="/asset/images/products/2024/evernature02/pc/shopping.webp" data-caption=""><img
                                    src="/asset/images/products/2024/evernature02/pc/shopping.webp"></a><a data-fancybox="gallery1"
                                href="/asset/images/products/2024/evernature02/pc/signup.webp" data-caption=""><img
                                    src="/asset/images/products/2024/evernature02/pc/signup.webp"></a><a data-fancybox="gallery1"
                                href="/asset/images/products/2024/evernature02/sp/index.webp" data-caption=""><img
                                    src="/asset/images/products/2024/evernature02/sp/index.webp"></a><a data-fancybox="gallery1"
                                href="/asset/images/products/2024/evernature02/sp/about.webp" data-caption=""><img
                                    src="/asset/images/products/2024/evernature02/sp/about.webp"></a><a data-fancybox="gallery1"
                                href="/asset/images/products/2024/evernature02/sp/404.webp" data-caption=""><img
                                    src="/asset/images/products/2024/evernature02/sp/404.webp"></a><a data-fancybox="gallery1"
                                href="/asset/images/products/2024/evernature02/sp/albums.webp" data-caption=""><img
                                    src="/asset/images/products/2024/evernature02/sp/albums.webp"></a><a data-fancybox="gallery1"
                                href="/asset/images/products/2024/evernature02/sp/albums02.webp" data-caption=""><img
                                    src="/asset/images/products/2024/evernature02/sp/albums02.webp"></a><a data-fancybox="gallery1"
                                href="/asset/images/products/2024/evernature02/sp/articles.webp" data-caption=""><img
                                    src="/asset/images/products/2024/evernature02/sp/articles.webp"></a><a data-fancybox="gallery1"
                                href="/asset/images/products/2024/evernature02/sp/articles02.webp" data-caption=""><img
                                    src="/asset/images/products/2024/evernature02/sp/articles02.webp"></a><a data-fancybox="gallery1"
                                href="/asset/images/products/2024/evernature02/sp/benefits.webp" data-caption=""><img
                                    src="/asset/images/products/2024/evernature02/sp/benefits.webp"></a><a data-fancybox="gallery1"
                                href="/asset/images/products/2024/evernature02/sp/cart01.webp" data-caption=""><img
                                    src="/asset/images/products/2024/evernature02/sp/cart01.webp"></a><a data-fancybox="gallery1"
                                href="/asset/images/products/2024/evernature02/sp/cart02.webp" data-caption=""><img
                                    src="/asset/images/products/2024/evernature02/sp/cart02.webp"></a><a data-fancybox="gallery1"
                                href="/asset/images/products/2024/evernature02/sp/cart03.webp" data-caption=""><img
                                    src="/asset/images/products/2024/evernature02/sp/cart03.webp"></a><a data-fancybox="gallery1"
                                href="/asset/images/products/2024/evernature02/sp/contact.webp" data-caption=""><img
                                    src="/asset/images/products/2024/evernature02/sp/contact.webp"></a><a data-fancybox="gallery1"
                                href="/asset/images/products/2024/evernature02/sp/contact02.webp" data-caption=""><img
                                    src="/asset/images/products/2024/evernature02/sp/contact02.webp"></a><a data-fancybox="gallery1"
                                href="/asset/images/products/2024/evernature02/sp/create.webp" data-caption=""><img
                                    src="/asset/images/products/2024/evernature02/sp/create.webp"></a><a data-fancybox="gallery1"
                                href="/asset/images/products/2024/evernature02/sp/favorite.webp" data-caption=""><img
                                    src="/asset/images/products/2024/evernature02/sp/favorite.webp"></a><a data-fancybox="gallery1"
                                href="/asset/images/products/2024/evernature02/sp/favorite02.webp" data-caption=""><img
                                    src="/asset/images/products/2024/evernature02/sp/favorite02.webp"></a><a data-fancybox="gallery1"
                                href="/asset/images/products/2024/evernature02/sp/fraud.webp" data-caption=""><img
                                    src="/asset/images/products/2024/evernature02/sp/fraud.webp"></a><a data-fancybox="gallery1"
                                href="/asset/images/products/2024/evernature02/sp/login.webp" data-caption=""><img
                                    src="/asset/images/products/2024/evernature02/sp/login.webp"></a><a data-fancybox="gallery1"
                                href="/asset/images/products/2024/evernature02/sp/news.webp" data-caption=""><img
                                    src="/asset/images/products/2024/evernature02/sp/news.webp"></a><a data-fancybox="gallery1"
                                href="/asset/images/products/2024/evernature02/sp/news02.webp" data-caption=""><img
                                    src="/asset/images/products/2024/evernature02/sp/news02.webp"></a><a data-fancybox="gallery1"
                                href="/asset/images/products/2024/evernature02/sp/orders.webp" data-caption=""><img
                                    src="/asset/images/products/2024/evernature02/sp/orders.webp"></a><a data-fancybox="gallery1"
                                href="/asset/images/products/2024/evernature02/sp/password.webp" data-caption=""><img
                                    src="/asset/images/products/2024/evernature02/sp/password.webp"></a><a data-fancybox="gallery1"
                                href="/asset/images/products/2024/evernature02/sp/password02.webp" data-caption=""><img
                                    src="/asset/images/products/2024/evernature02/sp/password02.webp"></a><a data-fancybox="gallery1"
                                href="/asset/images/products/2024/evernature02/sp/privacy.webp" data-caption=""><img
                                    src="/asset/images/products/2024/evernature02/sp/privacy.webp"></a><a data-fancybox="gallery1"
                                href="/asset/images/products/2024/evernature02/sp/products.webp" data-caption=""><img
                                    src="/asset/images/products/2024/evernature02/sp/products.webp"></a><a data-fancybox="gallery1"
                                href="/asset/images/products/2024/evernature02/sp/products02.webp" data-caption=""><img
                                    src="/asset/images/products/2024/evernature02/sp/products02.webp"></a><a data-fancybox="gallery1"
                                href="/asset/images/products/2024/evernature02/sp/profile.webp" data-caption=""><img
                                    src="/asset/images/products/2024/evernature02/sp/profile.webp"></a><a data-fancybox="gallery1"
                                href="/asset/images/products/2024/evernature02/sp/shopping.webp" data-caption=""><img
                                    src="/asset/images/products/2024/evernature02/sp/shopping.webp"></a><a data-fancybox="gallery1"
                                href="/asset/images/products/2024/evernature02/sp/signup.webp" data-caption=""><img
                                    src="/asset/images/products/2024/evernature02/sp/signup.webp"></a></div>
                    </div><!-- projectCategories -->
                    <ul class="projectCategories mt-3">
                        <li class="category">台湾サイト</li>
                        <li class="category">ショッピングサイト</li>
                    </ul><!-- projectUrl -->
                    <p class="projectUrl mt-3 text-end"><a href="https://evernature-ys.com.tw/" target="_blank"> サイトを見る <i
                                class="fa-solid fa-arrow-up-right-from-square ps-2"></i></a></p>
                </div>
                <div class="projectItem">
                    <!-- projectName -->
                    <p class="projectName fs-2 fw-bold text-orange mb-2 firstLine">福樓 Fu Lou Restaurant</p>
                    <!-- fancyBox projectImages -->
                    <div id="gallery2" class="fancyBox imageZoomHorizontal projectImages"><!-- First image (visible) --><a
                            data-fancybox="gallery2" href="/asset/images/products/2023/fulou/pc/index.webp" data-caption="">
                            <div class="img"><img src="/asset/images/products/2023/fulou/pc/index.webp" width="" height="" alt=""></div>
                        </a><!-- Hidden images -->
                        <div style="display: none;"><a data-fancybox="gallery2" href="/asset/images/products/2023/fulou/pc/about.webp"
                                data-caption=""><img src="/asset/images/products/2023/fulou/pc/about.webp"></a><a
                                data-fancybox="gallery2" href="/asset/images/products/2023/fulou/pc/albums.webp" data-caption=""><img
                                    src="/asset/images/products/2023/fulou/pc/albums.webp"></a><a data-fancybox="gallery2"
                                href="/asset/images/products/2023/fulou/pc/albums02.webp" data-caption=""><img
                                    src="/asset/images/products/2023/fulou/pc/albums02.webp"></a><a data-fancybox="gallery2"
                                href="/asset/images/products/2023/fulou/pc/articles.webp" data-caption=""><img
                                    src="/asset/images/products/2023/fulou/pc/articles.webp"></a><a data-fancybox="gallery2"
                                href="/asset/images/products/2023/fulou/pc/articles02.webp" data-caption=""><img
                                    src="/asset/images/products/2023/fulou/pc/articles02.webp"></a><a data-fancybox="gallery2"
                                href="/asset/images/products/2023/fulou/pc/cart01.webp" data-caption=""><img
                                    src="/asset/images/products/2023/fulou/pc/cart01.webp"></a><a data-fancybox="gallery2"
                                href="/asset/images/products/2023/fulou/pc/cart02.webp" data-caption=""><img
                                    src="/asset/images/products/2023/fulou/pc/cart02.webp"></a><a data-fancybox="gallery2"
                                href="/asset/images/products/2023/fulou/pc/cart03.webp" data-caption=""><img
                                    src="/asset/images/products/2023/fulou/pc/cart03.webp"></a><a data-fancybox="gallery2"
                                href="/asset/images/products/2023/fulou/pc/contact.webp" data-caption=""><img
                                    src="/asset/images/products/2023/fulou/pc/contact.webp"></a><a data-fancybox="gallery2"
                                href="/asset/images/products/2023/fulou/pc/create.webp" data-caption=""><img
                                    src="/asset/images/products/2023/fulou/pc/create.webp"></a><a data-fancybox="gallery2"
                                href="/asset/images/products/2023/fulou/pc/faq.webp" data-caption=""><img
                                    src="/asset/images/products/2023/fulou/pc/faq.webp"></a><a data-fancybox="gallery2"
                                href="/asset/images/products/2023/fulou/pc/favorite.webp" data-caption=""><img
                                    src="/asset/images/products/2023/fulou/pc/favorite.webp"></a><a data-fancybox="gallery2"
                                href="/asset/images/products/2023/fulou/pc/favorite02.webp" data-caption=""><img
                                    src="/asset/images/products/2023/fulou/pc/favorite02.webp"></a><a data-fancybox="gallery2"
                                href="/asset/images/products/2023/fulou/pc/login.webp" data-caption=""><img
                                    src="/asset/images/products/2023/fulou/pc/login.webp"></a><a data-fancybox="gallery2"
                                href="/asset/images/products/2023/fulou/pc/menu.webp" data-caption=""><img
                                    src="/asset/images/products/2023/fulou/pc/menu.webp"></a><a data-fancybox="gallery2"
                                href="/asset/images/products/2023/fulou/pc/news.webp" data-caption=""><img
                                    src="/asset/images/products/2023/fulou/pc/news.webp"></a><a data-fancybox="gallery2"
                                href="/asset/images/products/2023/fulou/pc/news02.webp" data-caption=""><img
                                    src="/asset/images/products/2023/fulou/pc/news02.webp"></a><a data-fancybox="gallery2"
                                href="/asset/images/products/2023/fulou/pc/orders.webp" data-caption=""><img
                                    src="/asset/images/products/2023/fulou/pc/orders.webp"></a><a data-fancybox="gallery2"
                                href="/asset/images/products/2023/fulou/pc/orders02.webp" data-caption=""><img
                                    src="/asset/images/products/2023/fulou/pc/orders02.webp"></a><a data-fancybox="gallery2"
                                href="/asset/images/products/2023/fulou/pc/password.webp" data-caption=""><img
                                    src="/asset/images/products/2023/fulou/pc/password.webp"></a><a data-fancybox="gallery2"
                                href="/asset/images/products/2023/fulou/pc/privacy.webp" data-caption=""><img
                                    src="/asset/images/products/2023/fulou/pc/privacy.webp"></a><a data-fancybox="gallery2"
                                href="/asset/images/products/2023/fulou/pc/products.webp" data-caption=""><img
                                    src="/asset/images/products/2023/fulou/pc/products.webp"></a><a data-fancybox="gallery2"
                                href="/asset/images/products/2023/fulou/pc/products02.webp" data-caption=""><img
                                    src="/asset/images/products/2023/fulou/pc/products02.webp"></a><a data-fancybox="gallery2"
                                href="/asset/images/products/2023/fulou/pc/profile.webp" data-caption=""><img
                                    src="/asset/images/products/2023/fulou/pc/profile.webp"></a><a data-fancybox="gallery2"
                                href="/asset/images/products/2023/fulou/pc/search.webp" data-caption=""><img
                                    src="/asset/images/products/2023/fulou/pc/search.webp"></a><a data-fancybox="gallery2"
                                href="/asset/images/products/2023/fulou/pc/search02.webp" data-caption=""><img
                                    src="/asset/images/products/2023/fulou/pc/search02.webp"></a><a data-fancybox="gallery2"
                                href="/asset/images/products/2023/fulou/pc/signup.webp" data-caption=""><img
                                    src="/asset/images/products/2023/fulou/pc/signup.webp"></a><a data-fancybox="gallery2"
                                href="/asset/images/products/2023/fulou/sp/index.webp" data-caption=""><img
                                    src="/asset/images/products/2023/fulou/sp/index.webp"></a><a data-fancybox="gallery2"
                                href="/asset/images/products/2023/fulou/sp/about.webp" data-caption=""><img
                                    src="/asset/images/products/2023/fulou/sp/about.webp"></a><a data-fancybox="gallery2"
                                href="/asset/images/products/2023/fulou/sp/albums.webp" data-caption=""><img
                                    src="/asset/images/products/2023/fulou/sp/albums.webp"></a><a data-fancybox="gallery2"
                                href="/asset/images/products/2023/fulou/sp/albums02.webp" data-caption=""><img
                                    src="/asset/images/products/2023/fulou/sp/albums02.webp"></a><a data-fancybox="gallery2"
                                href="/asset/images/products/2023/fulou/sp/articles.webp" data-caption=""><img
                                    src="/asset/images/products/2023/fulou/sp/articles.webp"></a><a data-fancybox="gallery2"
                                href="/asset/images/products/2023/fulou/sp/articles02.webp" data-caption=""><img
                                    src="/asset/images/products/2023/fulou/sp/articles02.webp"></a><a data-fancybox="gallery2"
                                href="/asset/images/products/2023/fulou/sp/cart01.webp" data-caption=""><img
                                    src="/asset/images/products/2023/fulou/sp/cart01.webp"></a><a data-fancybox="gallery2"
                                href="/asset/images/products/2023/fulou/sp/cart02.webp" data-caption=""><img
                                    src="/asset/images/products/2023/fulou/sp/cart02.webp"></a><a data-fancybox="gallery2"
                                href="/asset/images/products/2023/fulou/sp/cart03.webp" data-caption=""><img
                                    src="/asset/images/products/2023/fulou/sp/cart03.webp"></a><a data-fancybox="gallery2"
                                href="/asset/images/products/2023/fulou/sp/contact.webp" data-caption=""><img
                                    src="/asset/images/products/2023/fulou/sp/contact.webp"></a><a data-fancybox="gallery2"
                                href="/asset/images/products/2023/fulou/sp/create.webp" data-caption=""><img
                                    src="/asset/images/products/2023/fulou/sp/create.webp"></a><a data-fancybox="gallery2"
                                href="/asset/images/products/2023/fulou/sp/faq.webp" data-caption=""><img
                                    src="/asset/images/products/2023/fulou/sp/faq.webp"></a><a data-fancybox="gallery2"
                                href="/asset/images/products/2023/fulou/sp/favorite.webp" data-caption=""><img
                                    src="/asset/images/products/2023/fulou/sp/favorite.webp"></a><a data-fancybox="gallery2"
                                href="/asset/images/products/2023/fulou/sp/favorite02.webp" data-caption=""><img
                                    src="/asset/images/products/2023/fulou/sp/favorite02.webp"></a><a data-fancybox="gallery2"
                                href="/asset/images/products/2023/fulou/sp/login.webp" data-caption=""><img
                                    src="/asset/images/products/2023/fulou/sp/login.webp"></a><a data-fancybox="gallery2"
                                href="/asset/images/products/2023/fulou/sp/menu.webp" data-caption=""><img
                                    src="/asset/images/products/2023/fulou/sp/menu.webp"></a><a data-fancybox="gallery2"
                                href="/asset/images/products/2023/fulou/sp/news.webp" data-caption=""><img
                                    src="/asset/images/products/2023/fulou/sp/news.webp"></a><a data-fancybox="gallery2"
                                href="/asset/images/products/2023/fulou/sp/news02.webp" data-caption=""><img
                                    src="/asset/images/products/2023/fulou/sp/news02.webp"></a><a data-fancybox="gallery2"
                                href="/asset/images/products/2023/fulou/sp/orders.webp" data-caption=""><img
                                    src="/asset/images/products/2023/fulou/sp/orders.webp"></a><a data-fancybox="gallery2"
                                href="/asset/images/products/2023/fulou/sp/orders02.webp" data-caption=""><img
                                    src="/asset/images/products/2023/fulou/sp/orders02.webp"></a><a data-fancybox="gallery2"
                                href="/asset/images/products/2023/fulou/sp/password.webp" data-caption=""><img
                                    src="/asset/images/products/2023/fulou/sp/password.webp"></a><a data-fancybox="gallery2"
                                href="/asset/images/products/2023/fulou/sp/privacy.webp" data-caption=""><img
                                    src="/asset/images/products/2023/fulou/sp/privacy.webp"></a><a data-fancybox="gallery2"
                                href="/asset/images/products/2023/fulou/sp/products.webp" data-caption=""><img
                                    src="/asset/images/products/2023/fulou/sp/products.webp"></a><a data-fancybox="gallery2"
                                href="/asset/images/products/2023/fulou/sp/products02.webp" data-caption=""><img
                                    src="/asset/images/products/2023/fulou/sp/products02.webp"></a><a data-fancybox="gallery2"
                                href="/asset/images/products/2023/fulou/sp/profile.webp" data-caption=""><img
                                    src="/asset/images/products/2023/fulou/sp/profile.webp"></a><a data-fancybox="gallery2"
                                href="/asset/images/products/2023/fulou/sp/search.webp" data-caption=""><img
                                    src="/asset/images/products/2023/fulou/sp/search.webp"></a><a data-fancybox="gallery2"
                                href="/asset/images/products/2023/fulou/sp/search02.webp" data-caption=""><img
                                    src="/asset/images/products/2023/fulou/sp/search02.webp"></a><a data-fancybox="gallery2"
                                href="/asset/images/products/2023/fulou/sp/signup.webp" data-caption=""><img
                                    src="/asset/images/products/2023/fulou/sp/signup.webp"></a></div>
                    </div><!-- projectCategories -->
                    <ul class="projectCategories mt-3">
                        <li class="category">台湾サイト</li>
                        <li class="category">ショッピングサイト</li>
                    </ul><!-- projectUrl -->
                    <p class="projectUrl mt-3 text-end"><a href="https://fulou.com.tw/" target="_blank"> サイトを見る <i
                                class="fa-solid fa-arrow-up-right-from-square ps-2"></i></a></p>
                </div>
                <div class="projectItem">
                    <!-- projectName -->
                    <p class="projectName fs-2 fw-bold text-orange mb-2 firstLine">小貸先生 MR. DAI</p><!-- fancyBox projectImages -->
                    <div id="gallery3" class="fancyBox imageZoomHorizontal projectImages"><!-- First image (visible) --><a
                            data-fancybox="gallery3" href="/asset/images/products/2023/mr-dai/pc/index.webp" data-caption="">
                            <div class="img"><img src="/asset/images/products/2023/mr-dai/pc/index.webp" width="" height="" alt="">
                            </div>
                        </a><!-- Hidden images -->
                        <div style="display: none;"><a data-fancybox="gallery3" href="/asset/images/products/2023/mr-dai/pc/about.webp"
                                data-caption=""><img src="/asset/images/products/2023/mr-dai/pc/about.webp"></a><a
                                data-fancybox="gallery3" href="/asset/images/products/2023/mr-dai/pc/404.webp" data-caption=""><img
                                    src="/asset/images/products/2023/mr-dai/pc/404.webp"></a><a data-fancybox="gallery3"
                                href="/asset/images/products/2023/mr-dai/pc/articles.webp" data-caption=""><img
                                    src="/asset/images/products/2023/mr-dai/pc/articles.webp"></a><a data-fancybox="gallery3"
                                href="/asset/images/products/2023/mr-dai/pc/articles02.webp" data-caption=""><img
                                    src="/asset/images/products/2023/mr-dai/pc/articles02.webp"></a><a data-fancybox="gallery3"
                                href="/asset/images/products/2023/mr-dai/pc/cases.webp" data-caption=""><img
                                    src="/asset/images/products/2023/mr-dai/pc/cases.webp"></a><a data-fancybox="gallery3"
                                href="/asset/images/products/2023/mr-dai/pc/cases02.webp" data-caption=""><img
                                    src="/asset/images/products/2023/mr-dai/pc/cases02.webp"></a><a data-fancybox="gallery3"
                                href="/asset/images/products/2023/mr-dai/pc/contact.webp" data-caption=""><img
                                    src="/asset/images/products/2023/mr-dai/pc/contact.webp"></a><a data-fancybox="gallery3"
                                href="/asset/images/products/2023/mr-dai/pc/contact02.webp" data-caption=""><img
                                    src="/asset/images/products/2023/mr-dai/pc/contact02.webp"></a><a data-fancybox="gallery3"
                                href="/asset/images/products/2023/mr-dai/pc/fraud.webp" data-caption=""><img
                                    src="/asset/images/products/2023/mr-dai/pc/fraud.webp"></a><a data-fancybox="gallery3"
                                href="/asset/images/products/2023/mr-dai/pc/privacy.webp" data-caption=""><img
                                    src="/asset/images/products/2023/mr-dai/pc/privacy.webp"></a><a data-fancybox="gallery3"
                                href="/asset/images/products/2023/mr-dai/pc/services.webp" data-caption=""><img
                                    src="/asset/images/products/2023/mr-dai/pc/services.webp"></a><a data-fancybox="gallery3"
                                href="/asset/images/products/2023/mr-dai/sp/index.webp" data-caption=""><img
                                    src="/asset/images/products/2023/mr-dai/sp/index.webp"></a><a data-fancybox="gallery3"
                                href="/asset/images/products/2023/mr-dai/sp/about.webp" data-caption=""><img
                                    src="/asset/images/products/2023/mr-dai/sp/about.webp"></a><a data-fancybox="gallery3"
                                href="/asset/images/products/2023/mr-dai/sp/404.webp" data-caption=""><img
                                    src="/asset/images/products/2023/mr-dai/sp/404.webp"></a><a data-fancybox="gallery3"
                                href="/asset/images/products/2023/mr-dai/sp/articles.webp" data-caption=""><img
                                    src="/asset/images/products/2023/mr-dai/sp/articles.webp"></a><a data-fancybox="gallery3"
                                href="/asset/images/products/2023/mr-dai/sp/articles02.webp" data-caption=""><img
                                    src="/asset/images/products/2023/mr-dai/sp/articles02.webp"></a><a data-fancybox="gallery3"
                                href="/asset/images/products/2023/mr-dai/sp/cases.webp" data-caption=""><img
                                    src="/asset/images/products/2023/mr-dai/sp/cases.webp"></a><a data-fancybox="gallery3"
                                href="/asset/images/products/2023/mr-dai/sp/cases02.webp" data-caption=""><img
                                    src="/asset/images/products/2023/mr-dai/sp/cases02.webp"></a><a data-fancybox="gallery3"
                                href="/asset/images/products/2023/mr-dai/sp/contact.webp" data-caption=""><img
                                    src="/asset/images/products/2023/mr-dai/sp/contact.webp"></a><a data-fancybox="gallery3"
                                href="/asset/images/products/2023/mr-dai/sp/contact02.webp" data-caption=""><img
                                    src="/asset/images/products/2023/mr-dai/sp/contact02.webp"></a><a data-fancybox="gallery3"
                                href="/asset/images/products/2023/mr-dai/sp/fraud.webp" data-caption=""><img
                                    src="/asset/images/products/2023/mr-dai/sp/fraud.webp"></a><a data-fancybox="gallery3"
                                href="/asset/images/products/2023/mr-dai/sp/privacy.webp" data-caption=""><img
                                    src="/asset/images/products/2023/mr-dai/sp/privacy.webp"></a><a data-fancybox="gallery3"
                                href="/asset/images/products/2023/mr-dai/sp/services.webp" data-caption=""><img
                                    src="/asset/images/products/2023/mr-dai/sp/services.webp"></a></div>
                    </div><!-- projectCategories -->
                    <ul class="projectCategories mt-3">
                        <li class="category">台湾サイト</li>
                        <li class="category">コーポレートサイト</li>
                    </ul><!-- projectUrl -->
                    <p class="projectUrl mt-3 text-end"><a href="https://mrdailoan.com/" target="_blank"> サイトを見る <i
                                class="fa-solid fa-arrow-up-right-from-square ps-2"></i></a></p>
                </div>
                <div class="projectItem">
                    <!-- projectName -->
                    <p class="projectName fs-2 fw-bold text-orange mb-2 firstLine">客製小姐</p><!-- fancyBox projectImages -->
                    <div id="gallery4" class="fancyBox imageZoomHorizontal projectImages"><!-- First image (visible) --><a
                            data-fancybox="gallery4" href="/asset/images/products/2024/custom-miss/pc/index.webp" data-caption="">
                            <div class="img"><img src="/asset/images/products/2024/custom-miss/pc/index.webp" width="" height="" alt="">
                            </div>
                        </a><!-- Hidden images -->
                        <div style="display: none;"><a data-fancybox="gallery4"
                                href="/asset/images/products/2024/custom-miss/pc/about.webp" data-caption=""><img
                                    src="/asset/images/products/2024/custom-miss/pc/about.webp"></a><a data-fancybox="gallery4"
                                href="/asset/images/products/2024/custom-miss/pc/articles.webp" data-caption=""><img
                                    src="/asset/images/products/2024/custom-miss/pc/articles.webp"></a><a data-fancybox="gallery4"
                                href="/asset/images/products/2024/custom-miss/pc/articles02.webp" data-caption=""><img
                                    src="/asset/images/products/2024/custom-miss/pc/articles02.webp"></a><a data-fancybox="gallery4"
                                href="/asset/images/products/2024/custom-miss/pc/contact.webp" data-caption=""><img
                                    src="/asset/images/products/2024/custom-miss/pc/contact.webp"></a><a data-fancybox="gallery4"
                                href="/asset/images/products/2024/custom-miss/pc/contact02.webp" data-caption=""><img
                                    src="/asset/images/products/2024/custom-miss/pc/contact02.webp"></a><a data-fancybox="gallery4"
                                href="/asset/images/products/2024/custom-miss/pc/fraud.webp" data-caption=""><img
                                    src="/asset/images/products/2024/custom-miss/pc/fraud.webp"></a><a data-fancybox="gallery4"
                                href="/asset/images/products/2024/custom-miss/pc/news.webp" data-caption=""><img
                                    src="/asset/images/products/2024/custom-miss/pc/news.webp"></a><a data-fancybox="gallery4"
                                href="/asset/images/products/2024/custom-miss/pc/news02.webp" data-caption=""><img
                                    src="/asset/images/products/2024/custom-miss/pc/news02.webp"></a><a data-fancybox="gallery4"
                                href="/asset/images/products/2024/custom-miss/pc/privacy.webp" data-caption=""><img
                                    src="/asset/images/products/2024/custom-miss/pc/privacy.webp"></a><a data-fancybox="gallery4"
                                href="/asset/images/products/2024/custom-miss/pc/service.webp" data-caption=""><img
                                    src="/asset/images/products/2024/custom-miss/pc/service.webp"></a><a data-fancybox="gallery4"
                                href="/asset/images/products/2024/custom-miss/pc/service02.webp" data-caption=""><img
                                    src="/asset/images/products/2024/custom-miss/pc/service02.webp"></a><a data-fancybox="gallery4"
                                href="/asset/images/products/2024/custom-miss/sp/index.webp" data-caption=""><img
                                    src="/asset/images/products/2024/custom-miss/sp/index.webp"></a><a data-fancybox="gallery4"
                                href="/asset/images/products/2024/custom-miss/sp/about.webp" data-caption=""><img
                                    src="/asset/images/products/2024/custom-miss/sp/about.webp"></a><a data-fancybox="gallery4"
                                href="/asset/images/products/2024/custom-miss/sp/articles.webp" data-caption=""><img
                                    src="/asset/images/products/2024/custom-miss/sp/articles.webp"></a><a data-fancybox="gallery4"
                                href="/asset/images/products/2024/custom-miss/sp/articles02.webp" data-caption=""><img
                                    src="/asset/images/products/2024/custom-miss/sp/articles02.webp"></a><a data-fancybox="gallery4"
                                href="/asset/images/products/2024/custom-miss/sp/contact.webp" data-caption=""><img
                                    src="/asset/images/products/2024/custom-miss/sp/contact.webp"></a><a data-fancybox="gallery4"
                                href="/asset/images/products/2024/custom-miss/sp/contact02.webp" data-caption=""><img
                                    src="/asset/images/products/2024/custom-miss/sp/contact02.webp"></a><a data-fancybox="gallery4"
                                href="/asset/images/products/2024/custom-miss/sp/fraud.webp" data-caption=""><img
                                    src="/asset/images/products/2024/custom-miss/sp/fraud.webp"></a><a data-fancybox="gallery4"
                                href="/asset/images/products/2024/custom-miss/sp/news.webp" data-caption=""><img
                                    src="/asset/images/products/2024/custom-miss/sp/news.webp"></a><a data-fancybox="gallery4"
                                href="/asset/images/products/2024/custom-miss/sp/news02.webp" data-caption=""><img
                                    src="/asset/images/products/2024/custom-miss/sp/news02.webp"></a><a data-fancybox="gallery4"
                                href="/asset/images/products/2024/custom-miss/sp/privacy.webp" data-caption=""><img
                                    src="/asset/images/products/2024/custom-miss/sp/privacy.webp"></a><a data-fancybox="gallery4"
                                href="/asset/images/products/2024/custom-miss/sp/service.webp" data-caption=""><img
                                    src="/asset/images/products/2024/custom-miss/sp/service.webp"></a><a data-fancybox="gallery4"
                                href="/asset/images/products/2024/custom-miss/sp/service02.webp" data-caption=""><img
                                    src="/asset/images/products/2024/custom-miss/sp/service02.webp"></a></div>
                    </div><!-- projectCategories -->
                    <ul class="projectCategories mt-3">
                        <li class="category">台湾サイト</li>
                        <li class="category">コーポレートサイト</li>
                        <li class="category">ブランディングサイト</li>
                    </ul><!-- projectUrl -->
                    <p class="projectUrl mt-3 text-end"><a href="https://demo-c.wagikgdemo.com.tw/" target="_blank"> サイトを見る <i
                                class="fa-solid fa-arrow-up-right-from-square ps-2"></i></a></p>
                </div>

            </div>

            <div class="text-center mt-5 inview fadeinUp">
                <a href="projects.php" class="moreButtonV2">
                    <span class="fs-2">作品一覧へ</span>
                    <i class="fa-solid fa-arrow-right ms-3 arrowIcon"></i>
                </a>
            </div>

        </div>

        <!-- indexExpertiseBox -->
        <div class="indexExpertiseBox bg-ivory" id="expertise">
            <div class="container detailInner">

                <!-- titleBox -->
                <div class="titleBox mb-5 pb-5 text-center fw-bold text-orange inview fadeinUp">
                    <p class="fs-3">専門知識</p>
                    <h2 class="display-2 fw-bold">EXPERTISE</h2>
                </div>

                <div class="ExpertiseList text-center row m-auto">
                    <div class="ExpertiseItem col-sm-6 col-lg-3 inview fadeinUp">
                        <dl class="fixHeight bg-white m-0 p-5 border border-2 border-black rounded-3">
                            <dt class="fs-2 mb-3">
                                <i class="fa-brands fa-js fs-1"></i><br>
                                JavaScript
                            </dt>
                            <dd class="d-inline-block text-start">
                                <p class="mb-2">jQueryを使ったインタラクティブなエフェクト実装経験</p>
                                <p>Viteを使用した高速で効率的なWeb開発</p>
                            </dd>
                        </dl>
                    </div>
                    <div class="ExpertiseItem col-sm-6 col-lg-3 mt-4 mt-sm-0 inview fadeinUp">
                        <dl class="fixHeight bg-white m-0 p-5 border border-2 border-black rounded-3">
                            <dt class="fs-2 mb-3">
                                <i class="fa-solid fa-code fs-1"></i><br>
                                Web Layout
                            </dt>
                            <dd class="d-inline-block text-start">
                                <p class="mb-2">HTML5、CSS3(SCSS)、Bootstrap5を用いたレスポンシブデザインの豊富な構築経験</p>
                                <p class="mb-2">CSSアニメーションやトランジションの実装</p>
                                <p>ページ速度最適化し、ユーザーエクスペリエンスを向上</p>
                            </dd>
                        </dl>
                    </div>
                    <div class="ExpertiseItem col-sm-6 col-lg-3 mt-4 mt-lg-0 inview fadeinUp">
                        <dl class="fixHeight bg-white m-0 p-5 border border-2 border-black rounded-3">
                            <dt class="fs-2 mb-3">
                                <i class="fa-solid fa-palette fs-1"></i><br>
                                Adobe / Figma
                            </dt>
                            <dd class="d-inline-block text-start">
                                <p class="mb-2">Illustratorを使ったデザイン販促ツールの制作</p>
                                <p class="mb-2">Potoshopを使ったWeb広告やサイトのデザイン</p>
                                <p>Figmaデザインを基に精密なコーディングを行い、デザインの意図を正確に反映</p>
                            </dd>
                        </dl>
                    </div>
                    <div class="ExpertiseItem col-sm-6 col-lg-3 mt-4 mt-lg-0 inview fadeinUp">
                        <dl class="fixHeight bg-white m-0 p-5 border border-2 border-black rounded-3">
                            <dt class="fs-2 mb-3">
                                <i class="fa-solid fa-circle-plus fs-1"></i><br>
                                その他
                            </dt>
                            <dd class="d-inline-block text-start">
                                <p class="mb-2">Git / GitHubを使用したバージョン管理と複数エンジニアとの共同作業</p>
                                <p class="mb-2">YouTrackを使用したチーム全体のタスクの進捗管理</p>
                                <p>Ubuntu(LinuxOS)を使用した開発環境で、フロント開発やターミナル操作</p>
                            </dd>
                        </dl>
                    </div>
                </div>

            </div>
        </div>

    </main>
    
    <!-- pagetopBtn -->
    <?php include 'layouts/pagetop.php'; ?>

    <!-- footer -->
    <?php include 'layouts/footer.php'; ?>

    <script src="/asset/js/slickCenter02.js"></script>
    <script src="/node_modules/jquery-match-height/dist/jquery.matchHeight-min.js"></script>
    <script src="/asset/js/fixHeight.js"></script>
    <script src="/node_modules/@fancyapps/ui/dist/fancybox/fancybox.umd.js"></script>
    <script src="/asset/js/fancyBox.js"></script>
    <script src="/asset/js/vendors/jquery.particleground.min.js"></script>
    <script src="/asset/js/GeometricBg.js"></script>
    
</body>
</html>