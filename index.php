<!DOCTYPE html>
<html lang="zh-tw">
<head>
    <?php include 'layouts/head.php'; ?>
</head>
<body id="pagetop">

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

            <div class="d-flex justify-content-start align-items-end">
                <p class="display-1">莊 又霖</p>
                <p class="ps-3 display-4">CHUANG YU LIN</p>
            </div>

            <p>
                はじめまして。私は莊と申します。<br>
                私は台湾の高雄市で生まれ、幼少期に日本に移住し、東京工科大学のデザイン学部デザイン学科を卒業後、フロントエンジニアとして計6年の実務経験を積みました。<br>
                <br>
                日本ではWeb制作会社にて4年半の間、商業施設の新規事業部や生命保険会社の営業デジタル部に常駐し、多岐にわたるプロジェクトに携わりました。特に、ユーザー体験を重視したWebサイトの設計と開発に力を入れてきました。<br>
                <br>
                その後、台湾に帰国し、高雄師範大学の語学学校で中国語を学びました。<br>
                台湾現地のWeb制作会社では1年3か月の間、ブランドサイトやショッピングサイト、ランディングページなど複数のプロジェクトを手がけました。これらの経験を通じて、異文化におけるユーザーのニーズを理解し、対応するスキルを磨きました。<br>
                <br>
                デザインと技術の融合を追求し、ユーザーにとって使いやすく魅力的なWebサイトを作り続けることが私の目標です。どうぞよろしくお願いいたします。
            </p>

            <dl>
                <dt>
                    言語 Language
                    <i class="fa-regular fa-comments ps-2"></i>
                </dt>
                <dd>
                    日本語、台湾語、中国語（HSK5級）
                </dd>
            </dl>


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
                    <dl class="inview fadeinUp">
                        <dt>2023/4~</dt>
                        <dd class="mt-2 mb-0">
                            <p>フロントエンジニア</p>
                            <p>瓦吉科技股份有限公司</p>
                            <p class="my-3">
                                文章文章文章文章文章文章文章文章文章文章文章文章文章文章文章文章文章文章文章文章文章文章文章文章文章文章文章文章文章文章文章文章文章
                            </p>
                            <ul class="d-flex justyfy-content-start align-items-center flex-wrap">
                                <li class="bg-orange text-white rounded-3 fs-4 py-2 px-4 me-3">Category</li>
                                <li class="bg-orange text-white rounded-3 fs-4 py-2 px-4 me-3">Category</li>
                                <li class="bg-orange text-white rounded-3 fs-4 py-2 px-4">Category</li>
                            </ul>
                        </dd>
                    </dl>
                    <dl class="mt-5 inview fadeinUp">
                        <dt>2022/11~2023/2</dt>
                        <dd class="mt-2 mb-0">
                            <p>國立高雄師範大學　語学学校で中国語学習</p>
                        </dd>
                    </dl>
                    <dl class="mt-5 inview fadeinUp">
                        <dt>2018/4~2022/10</dt>
                        <dd class="mt-2 mb-0">
                            <p>フロントエンジニア / Webデザイナー</p>
                            <p>株式会社あとらす二十一</p>
                            <p class="my-3">
                                商業施設の新規事業部で.…等の新規開発、生命保険会社の営業デジタル部でソリシター(保険販売員)に向けたwebサイトによる販売業務の支援
                            </p>
                            <ul class="d-flex justyfy-content-start align-items-center flex-wrap">
                                <li class="bg-orange text-white rounded-3 fs-4 py-2 px-4 me-3">Category</li>
                                <li class="bg-orange text-white rounded-3 fs-4 py-2 px-4 me-3">Category</li>
                                <li class="bg-orange text-white rounded-3 fs-4 py-2 px-4">Category</li>
                            </ul>
                        </dd>
                    </dl>
                    <dl class="mt-5 inview fadeinUp">
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
                    <p class="projectName fs-2 fw-bold text-orange mb-2">壹然 evernature</p>
                    <!-- projectCategories -->
                    <ul class="projectCategories mb-3">
                        <li class="category">category01</li>
                        <li class="category">category02</li>
                    </ul>
                    <!-- fancyBox projectImages -->
                    <div class="fancyBox imageZoomHorizontal projectImages" id="gallery1">
                        <a data-fancybox="gallery1" href="/asset/images/products/2024/evernature02/pc/index.webp" data-caption="">
                            <div class="img">
                                <img src="/asset/images/products/2024/evernature02/pc/index.webp" width="" height="" alt="">
                            </div>
                        </a>
                        <div style="display:none">
                            <a data-fancybox="gallery1" href="https://lipsum.app/id/61/1600x1200" data-caption="">
                                <img src="https://lipsum.app/id/61/1600x1200">
                            </a>
                            <a data-fancybox="gallery1" href="https://lipsum.app/id/62/1600x1200">
                                <img src="https://lipsum.app/id/62/1600x1200">
                            </a>
                            <a data-fancybox="gallery1" href="https://lipsum.app/id/63/1600x1200">
                                <img src="https://lipsum.app/id/63/1600x1200">
                            </a>
                        </div>
                    </div>
                    <!-- projectUrl -->
                    <p class="projectUrl mt-3 text-end">
                        <a href="https://evernature-ys.com.tw/" target="_blank">
                            サイトを見る
                            <i class="fa-solid fa-arrow-up-right-from-square ps-2"></i>
                        </a>
                    </p>
                </div>
                <div class="projectItem">
                    <!-- projectName -->
                    <p class="projectName fs-2 fw-bold text-orange mb-2">福樓 Fu Lou Restaurant</p>
                    <!-- projectCategories -->
                    <ul class="projectCategories mb-3">
                        <li class="category">category01</li>
                        <li class="category">category02</li>
                    </ul>
                    <!-- fancyBox projectImages -->
                    <div class="fancyBox imageZoomHorizontal projectImages" id="gallery2">
                        <a data-fancybox="gallery2" href="/asset/images/products/2023/fulou/pc/index.webp" data-caption="">
                            <div class="img">
                                <img src="/asset/images/products/2023/fulou/pc/index.webp" width="" height="" alt="">
                            </div>
                        </a>
                        <div style="display:none">
                            <a data-fancybox="gallery2" href="https://lipsum.app/id/61/1600x1200" data-caption="">
                                <img src="https://lipsum.app/id/61/1600x1200">
                            </a>
                            <a data-fancybox="gallery2" href="https://lipsum.app/id/62/1600x1200">
                                <img src="https://lipsum.app/id/62/1600x1200">
                            </a>
                            <a data-fancybox="gallery2" href="https://lipsum.app/id/63/1600x1200">
                                <img src="https://lipsum.app/id/63/1600x1200">
                            </a>
                        </div>
                    </div>
                    <!-- projectUrl -->
                    <p class="projectUrl mt-3 text-end">
                        <a href="https://fulou.com.tw/" target="_blank">
                            サイトを見る
                            <i class="fa-solid fa-arrow-up-right-from-square ps-2"></i>
                        </a>
                    </p>
                </div>
                <div class="projectItem">
                    <!-- projectName -->
                    <p class="projectName fs-2 fw-bold text-orange mb-2">小貸先生 MR. DAI</p>
                    <!-- projectCategories -->
                    <ul class="projectCategories mb-3">
                        <li class="category">category01</li>
                        <li class="category">category02</li>
                    </ul>
                    <!-- fancyBox projectImages -->
                    <div class="fancyBox imageZoomHorizontal projectImages" id="gallery3">
                        <a data-fancybox="gallery3" href="/asset/images/products/2023/mr-dai/pc/index.webp" data-caption="">
                            <div class="img">
                                <img src="/asset/images/products/2023/mr-dai/pc/index.webp" width="" height="" alt="">
                            </div>
                        </a>
                        <div style="display:none">
                            <a data-fancybox="gallery3" href="https://lipsum.app/id/61/1600x1200" data-caption="">
                                <img src="https://lipsum.app/id/61/1600x1200">
                            </a>
                            <a data-fancybox="gallery3" href="https://lipsum.app/id/62/1600x1200">
                                <img src="https://lipsum.app/id/62/1600x1200">
                            </a>
                            <a data-fancybox="gallery3" href="https://lipsum.app/id/63/1600x1200">
                                <img src="https://lipsum.app/id/63/1600x1200">
                            </a>
                        </div>
                    </div>
                    <!-- projectUrl -->
                    <p class="projectUrl mt-3 text-end">
                        <a href="https://mrdailoan.com/" target="_blank">
                            サイトを見る
                            <i class="fa-solid fa-arrow-up-right-from-square ps-2"></i>
                        </a>
                    </p>
                </div>
                <div class="projectItem">
                    <!-- projectName -->
                    <p class="projectName fs-2 fw-bold text-orange mb-2">客製小姐</p>
                    <!-- projectCategories -->
                    <ul class="projectCategories mb-3">
                        <li class="category">category01</li>
                        <li class="category">category02</li>
                    </ul>
                    <!-- fancyBox projectImages -->
                    <div class="fancyBox imageZoomHorizontal projectImages" id="gallery4">
                        <a data-fancybox="gallery4" href="/asset/images/products/2024/custom-miss/pc/index.webp" data-caption="">
                            <div class="img">
                                <img src="/asset/images/products/2024/custom-miss/pc/index.webp" width="" height="" alt="">
                            </div>
                        </a>
                        <div style="display:none">
                            <a data-fancybox="gallery4" href="https://lipsum.app/id/61/1600x1200" data-caption="">
                                <img src="https://lipsum.app/id/61/1600x1200">
                            </a>
                            <a data-fancybox="gallery4" href="https://lipsum.app/id/62/1600x1200">
                                <img src="https://lipsum.app/id/62/1600x1200">
                            </a>
                            <a data-fancybox="gallery4" href="https://lipsum.app/id/63/1600x1200">
                                <img src="https://lipsum.app/id/63/1600x1200">
                            </a>
                        </div>
                    </div>
                    <!-- projectUrl -->
                    <p class="projectUrl mt-3 text-end">
                        <a href="https://demo-c.wagikgdemo.com.tw/" target="_blank">
                            サイトを見る
                            <i class="fa-solid fa-arrow-up-right-from-square ps-2"></i>
                        </a>
                    </p>
                </div>

            </div>

            <div class="text-center mt-5 inview fadeinUp">
                <a href="projects.php" class="moreButtonV2 fw-bold">
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
                            <p>jQueryを使ったインタラクティブなエフェクト</p>
                            <p>Viteを使用したモダンなフロントエンド開発環境の構築と最適化</p>
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
                            <p>HTML5、CSS3(SCSS)、Bootstrap 5、レスポンシブデザイン</p>
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
                            <p>Illustratorを使った印刷媒体の制作</p>
                            <p>potoshopを使ったWeb広告やサイトのデザイン</p>
                            <p>Figmaを用いたUI/UXデザインをコーディングし、ウェブサイトに実装</p>
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
                            <p>jQueryを使ったインタラクティブなエフェクト</p>
                            <p>Viteを使用したモダンなフロントエンド開発環境の構築と最適化</p>
                        </dd>
                    </dl>
                </div>
            </div>

            <div class="text-center mt-5 inview fadeinUp">
                <a href="expertise.php" class="moreButtonV2 fw-bold">
                    <span class="fs-2">詳細を見る</span>
                    <i class="fa-solid fa-arrow-right ms-3 arrowIcon"></i>
                </a>
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