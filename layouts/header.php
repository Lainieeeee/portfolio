<?php
    $current_page = basename($_SERVER['PHP_SELF']);
?>

<header class="bg-ivory border-bottom border-1 border-orange position-fixed start-0 top-0 w-100">
    <nav class="navbar navbar-expand-lg p-0">
        <div class="container-fluid container-lg detailInner py-4">

            <div class="d-lg-none">
                <?php
                    $currentPage = basename($_SERVER['PHP_SELF']);
                    if ($currentPage == 'index.php' || $currentPage == 'about.php' || $currentPage == 'expertise.php' || $currentPage == 'projects.php') {
                        // 中文ページの場合
                        echo '
                            <a href="jp.php" class="bg-orange text-white text-decoration-none p-3 rounded-pill d-flex justify-content-center align-items-center">
                                <i class="fa-solid fa-earth-americas"></i>
                                <span class="ps-2 lh-1">JP</span>
                            </a>
                        ';
                    } elseif ($currentPage == 'jp.php' || $currentPage == 'about-jp.php' || $currentPage == 'expertise-jp.php' || $currentPage == 'projects-jp.php') {
                        // 日本語ページの場合
                        echo '
                            <a href="/" class="bg-orange text-white text-decoration-none p-3 rounded-pill d-flex justify-content-center align-items-center">
                                <i class="fa-solid fa-earth-americas"></i>
                                <span class="ps-2 lh-1">TW</span>
                            </a>
                        ';
                    }
                ?>
            </div>

            <div class="logo pe-lg-5">
                <?php
                    $currentPage = basename($_SERVER['PHP_SELF']);
                    if ($currentPage == 'index.php' || $currentPage == 'about.php' || $currentPage == 'expertise.php' || $currentPage == 'projects.php') {
                        // 中文ページの場合
                        echo '
                            <a class="navbar-brand text-orange fs-1 m-0 p-0" href="/">PORTFOLIO</a>
                        ';
                    } elseif ($currentPage == 'jp.php' || $currentPage == 'about-jp.php' || $currentPage == 'expertise-jp.php' || $currentPage == 'projects-jp.php') {
                        // 日本語ページの場合
                        echo '
                            <a class="navbar-brand text-orange fs-1 m-0 p-0" href="jp.php">PORTFOLIO</a>
                        ';
                    }
                ?>
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <!-- hamburgerMenu -->
                <div class="hamburgerMenu"><span></span><span></span><span></span></div>
            </button>

            <div class="collapse navbar-collapse justify-content-lg-end" id="navbarNav">
                <ul class="navbar-nav align-items-center mb-4 mb-lg-0">
                    <?php
                        $currentPage = basename($_SERVER['PHP_SELF']);
                        if ($currentPage == 'index.php' || $currentPage == 'about.php' || $currentPage == 'expertise.php' || $currentPage == 'projects.php') {
                            // 中文ページの場合
                            echo '
                                <li class="nav-item pe-lg-5 mt-4 mt-lg-0">
                                    <a class="nav-link ' . ($currentPage == 'about.php' ? 'active' : '') . '" aria-current="page" href="about.php">About</a>
                                </li>
                                <li class="nav-item pe-lg-5 mt-4 mt-lg-0">
                                    <a class="nav-link ' . ($currentPage == 'expertise.php' ? 'active' : '') . '" href="expertise.php">Expertise</a>
                                </li>
                                <li class="nav-item pe-lg-5 mt-4 mt-lg-0">
                                    <a class="nav-link ' . ($currentPage == 'projects.php' ? 'active' : '') . '" href="projects.php">Projects</a>
                                </li>
                                <li class="d-none d-lg-block">
                                    <a href="jp.php" class="bg-orange text-white text-decoration-none p-3 rounded-pill d-flex justify-content-center align-items-center">
                                        <i class="fa-solid fa-earth-americas"></i>
                                        <span class="ps-2 lh-1">JP</span>
                                    </a>
                                </li>
                            ';
                        } elseif ($currentPage == 'jp.php' || $currentPage == 'about-jp.php' || $currentPage == 'expertise-jp.php' || $currentPage == 'projects-jp.php') {
                            // 日本語ページの場合
                            echo '
                                <li class="nav-item pe-lg-5 mt-4 mt-lg-0">
                                    <a class="nav-link ' . ($currentPage == 'about-jp.php' ? 'active' : '') . '" aria-current="page" href="about-jp.php">About</a>
                                </li>
                                <li class="nav-item pe-lg-5 mt-4 mt-lg-0">
                                    <a class="nav-link ' . ($currentPage == 'expertise-jp.php' ? 'active' : '') . '" href="expertise-jp.php">Expertise</a>
                                </li>
                                <li class="nav-item pe-lg-5 mt-4 mt-lg-0">
                                    <a class="nav-link ' . ($currentPage == 'projects-jp.php' ? 'active' : '') . '" href="projects-jp.php">Projects</a>
                                </li>
                                <li class="d-none d-lg-block">
                                    <a href="/" class="bg-orange text-white text-decoration-none p-3 rounded-pill d-flex justify-content-center align-items-center">
                                        <i class="fa-solid fa-earth-americas"></i>
                                        <span class="ps-2 lh-1">TW</span>
                                    </a>
                                </li>
                            ';
                        }
                    ?>
                </ul>
            </div>

        </div>
    </nav>
</header>

<div class="d-none d-lg-block" style="height:67.5px;"></div>
<div class="d-lg-none" style="height:66px;"></div>