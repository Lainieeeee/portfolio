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
                <p class="fs-3">關於我</p>
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
                        您好、我是莊又霖。<br>
                        我生於台灣高雄，細時就搬去日本住了。畢業於東京工科大學設計部設計學科，做前端工程師總共有6年的實務經驗。
                    </p>
                    <p class="mb-4 lh-lg inview fadeinUp">
                        在日本的網頁製作公司工作了4年半，常駐於商業設施的新業務部門及生命保險公司的業務數位部門，專注於設計和開發重視使用者體驗的網站。
                    </p>
                    <p class="mb-4 lh-lg inview fadeinUp">
                        返回台灣後，在高雄師範大學語言學校學習中文之後，在台灣本地的網頁製作公司參與購物網站、形象官網等的多個專案。
                        這些經驗讓我深入了解跨文化環境中使用者的需求，並不斷精進相應的技能。
                    </p>
                    <p class="lh-lg inview fadeinUp">
                        我的目標是追求設計與技術的融合，不斷創造對使用者既具吸引力又易於操作的網站。
                    </p>
                    <dl class="mt-5 inview fadeinUp">
                        <dt class="fs-2 mb-2">
                            <i class="fa-regular fa-comments pe-2"></i>
                            言語 Language
                        </dt>
                        <dd class="fs-3">
                            日文、台灣閩南語、中文（HSK5級）
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
                        <p class="fs-3">工作經歷</p>
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
                            <p class="fs-2">前端工程師</p>
                            <p class="fs-2">瓦吉科技股份有限公司</p>
                            <p class="my-3">
                                作為前端工程師與後端工程師合作，共同參與新網站的開發。<br>
                                專注於多元化專案，包括購物網站、形象官網等，從零開始進行全程網站運營、頁面設計優化及功能開發。<br>
                                積極管理網站運作，並透過GA/GTM進行深入的頁面分析，以及實施有效的SEO優化策略。
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
                            <p>國立高雄師範大學　語言學校學中文</p>
                        </dd>
                    </dl>
                    <dl class="mt-4 pt-4 px-4 inview fadeinUp">
                        <dt>2018/4~2022/10</dt>
                        <dd class="mt-2 mb-0">
                            <p class="fs-2">前端工程師 / 網頁設計師</p>
                            <p class="fs-2">株式会社あとらす二十一</p>
                            <p class="my-3">
                                駐點於商業設施的新業務部門和生命保險公司的業務數位部門，參與客戶專案的前端開發。<br>
                                從網站設計到建置，並製作宣傳工具如傳單、海報和橫幅等。<br>
                                透過使用多種不同的CMS應對各種專案，獲得了靈活的應對能力和廣泛的知識。
                            </p>
                            <ul class="d-flex justyfy-content-start align-items-center flex-wrap">
                                <li class="text-orange fs-4 me-4">#HTML5</li>
                                <li class="text-orange fs-4 me-4">#SCSS</li>
                                <li class="text-orange fs-4 me-4">#JavaScript/Jquery</li>
                                <li class="text-orange fs-4 me-4">#Wordpress(CMS)</li>
                                <li class="text-orange fs-4 me-4">#楽天RMS(CMS)</li>
                                <li class="text-orange fs-4 me-4">#Sitecore(CMS)</li>
                                <li class="text-orange fs-4 me-4">#aishipR(CMS)</li>
                                <li class="text-orange fs-4 me-4">#イオンサイトdeつく～る(CMS)</li>
                                <li class="text-orange fs-4 me-4">#Illustrator</li>
                                <li class="text-orange fs-4 me-4">#Photoshop</li>
                                <li class="text-orange fs-4 me-4">#XAMPP</li>
                            </ul>
                        </dd>
                    </dl>
                    <dl class="mt-4 pt-4 px-4 inview fadeinUp">
                        <dt>2014/4~2018/3</dt>
                        <dd class="mt-2 mb-0">
                            <p>東京工科大学　設計部設計科</p>
                        </dd>
                    </dl>
                </div>

            </div>
        </div>

        <!-- indexProductsBox -->
        <div class="indexProductsBox container detailInner">

            <!-- titleBox -->
            <div class="titleBox mb-5 pb-5 text-center fw-bold text-orange inview fadeinUp">
                <p class="fs-3">製作案例</p>
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
                            連結網址
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
                            連結網址
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
                            連結網址
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
                            連結網址
                            <i class="fa-solid fa-arrow-up-right-from-square ps-2"></i>
                        </a>
                    </p>
                </div>

            </div>

            <div class="text-center mt-5 inview fadeinUp">
                <a href="projects.php" class="moreButtonV2">
                    <span class="fs-2">瀏覽更多</span>
                    <i class="fa-solid fa-arrow-right ms-3 arrowIcon"></i>
                </a>
            </div>

        </div>

        <!-- indexExpertiseBox -->
        <div class="indexExpertiseBox bg-ivory" id="expertise">
            <div class="container detailInner">

                <!-- titleBox -->
                <div class="titleBox mb-5 pb-5 text-center fw-bold text-orange inview fadeinUp">
                    <p class="fs-3">專業知識</p>
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
                                <p>Viteを使用した高速で効率的なWeb開発に精通</p>
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
                                其他
                            </dt>
                            <dd class="d-inline-block text-start">
                                <p class="mb-2">Git / GitHubを使用したバージョン管理と複数エンジニアとの共同作業</p>
                                <p class="mb-2">YouTrackを使用したチーム全体のタスクの進捗管理</p>
                                <p>Ubuntu(LinuxOS)を使用した開発環境で、フロント開発やターミナル操作に精通</p>
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