<!DOCTYPE html>
<html lang="ja">
<head>
    <?php include 'layouts/head.php'; ?>
</head>
<body id="pagetop" class="ja">

    <!-- header -->
    <?php
        $current_page = 'projects-jp';
        include 'layouts/header.php';
    ?>

    <!-- main -->
    <main>

        <div class="container detailInner text-center">
            <div class="titleBox mb-5 pb-5 text-center fw-bold text-orange inview fadeinUp">
                <p class="fs-3">過去の制作実績一覧</p>
                <h2 class="display-2 fw-bold">PRODUCTS</h2>
            </div>
            <p class="inview fadeinUp">
                これまでのフロントエンドエンジニアとして制作した成果物です。<br>
                ECサイト・ブランディングサイト・コーポレートサイト・ランディングページなどを含む、多岐にわたるプロジェクトを紹介します。
            </p>
        </div>

        <!-- filterV1 -->
        <div id="app" class="filterV1 container detailInner pt-0">
            <p class="text-center mb-5 inview fadeinUp">\ カテゴリー選択できます /</p>
            <!-- categoryFilters -->
            <ul class="categoryFilters mb-5 inview fadeinUp">
                <li @click="filterProjects('all')" :class="{ 'active': currentCategory === 'all' }">All</li>
                <li v-for="category in uniqueCategories" :key="category"
                    @click="filterProjects(category)" :class="{ 'active': currentCategory === category }">{{ category }}</li>
            </ul>
            <div class="row m-auto py-md-5 mb-md-5">
                <!-- projectItem -->
                <div v-for="(project, index) in displayedProjects" :key="index" class="projectItem mb-5 inview fadeinUp col-sm-6 col-lg-4 col-xl-3 p-3">
                    <!-- projectName -->
                    <p class="projectName fs-2 fw-bold text-orange mb-2 firstLine">{{ project.name }}</p>
                    <!-- fancyBox projectImages -->
                    <div :id="`gallery${index + 1}`" class="fancyBox imageZoomHorizontal projectImages">
                        <!-- First image (visible) -->
                        <a :data-fancybox="`gallery${index + 1}`" :href="project.images[0]" data-caption="">
                            <div class="img">
                                <img :src="project.images[0]" width="" height="" alt="">
                            </div>
                        </a>
                        <!-- Hidden images -->
                        <div style="display:none">
                            <a v-for="(image, imgIndex) in project.images.slice(1)" :key="imgIndex"
                            :data-fancybox="`gallery${index + 1}`" :href="image" data-caption="">
                                <img :src="image">
                            </a>
                        </div>
                    </div>
                    <!-- projectCategories -->
                    <ul class="projectCategories mt-3">
                        <li v-for="(category, catIndex) in project.categories" :key="catIndex" class="category">{{ category }}</li>
                    </ul>
                    <!-- projectUrl -->
                    <p class="projectUrl mt-3 text-end" v-if="project.url">
                        <a :href="project.url" target="_blank">
                            サイトを見る
                            <i class="fa-solid fa-arrow-up-right-from-square ps-2"></i>
                        </a>
                    </p>
                </div>
            </div>
            <!-- Pagination -->
            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-center">
                    <!-- Previous -->
                    <li class="page-item" :class="{ 'disabled': currentPage === 1 }">
                        <a class="page-link" @click="previousPage">
                            <i class="fa-solid fa-angle-left"></i>
                        </a>
                    </li>
        
                    <!-- Page links -->
                    <li class="page-item" v-for="page in totalPages" :key="page" :class="{ 'active': currentPage === page }">
                        <a class="page-link" href="#" @click="setCurrentPage(page)">{{ page }}</a>
                    </li>
        
                    <!-- Next -->
                    <li class="page-item" :class="{ 'disabled': currentPage === totalPages }">
                        <a class="page-link" @click="nextPage">
                            <i class="fa-solid fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

    </main>
    
    <!-- pagetopBtn -->
    <?php include 'layouts/pagetop.php'; ?>
    
    <!-- footer -->
    <?php include 'layouts/footer.php'; ?>

    <script src="/node_modules/@fancyapps/ui/dist/fancybox/fancybox.umd.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="/asset/js/filterV1-jp.js"></script>
    
</body>
</html>