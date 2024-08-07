<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?= $title; ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">

    <!-- CSS here -->
    <link rel="stylesheet" href="<?= base_url(); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/flaticon.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/price_rangs.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/slicknav.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/animate.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/magnific-popup.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/themify-icons.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/slick.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/nice-select.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/css/style.css">

    <link rel="icon" href="<?= base_url() ?>/img/logo_ultranesia.jpg" type="image/jpg">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Datatable -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">

</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="<?= base_url() ?>/img/logo_ultranesia.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area header-transparrent">
            <div class="headder-top">
                <div class="container">
                    <div class="row align-items-center" style="display: flex; align-items: center;">
                        <div class="col-lg-3 col-md-2 col-6" style="display: flex; align-items: center;">
                            <!-- Logo -->
                            <div class="logo">
                                <img src="<?= base_url() ?>/img/logo_ultranesia.jpg" alt="" width="45px">
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-10 col-6" style="display: flex; justify-content: flex-end; align-items: center;">
                            <div style="display: flex; align-items: center; justify-content: space-between; width: 100%;">
                                <!-- Menu Wrapper -->
                                <div class="menu-wrapper" style="flex-grow: 1;">
                                    <!-- Main-menu -->
                                    <div class="main-menu">
                                        <nav class="d-none d-lg-block">
                                            <ul id="navigation">
                                                <li><a href="<?= base_url('pelamar/lowongan'); ?>">Lowongan Pekerjaan</a></li>
                                                <li><a href="<?= base_url('pelamar/riwayat_lamaran'); ?>">Riwayat Lamaran</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>

                                <!-- Dropdown Icon Menu for Mobile -->
                                <li class="nav-item dropdown no-arrow d-lg-none" style="margin-right: auto; margin-left: auto;">
                                    <a class="nav-link dropdown-toggle" href="#" id="userDropdownMobile" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="mr-2 d-none d-lg-inline text-gray-600 small">Halo, <?= user()->fullname; ?></span>
                                        <img class="img-profile rounded-circle" src="<?= base_url(); ?>/img/<?= user()->user_image; ?>" style="width: 40px; height: 40px; max-width: 50%;">
                                    </a>
                                    <!-- Dropdown - User Information -->
                                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdownMobile" style="z-index: 1050;">
                                        <a class="dropdown-item" href="<?= base_url('pelamar/ubah_password'); ?>">
                                            <i class="fas fa-key fa-sm fa-fw mr-2 text-gray-400"></i>
                                            Ubah Password
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="<?= base_url('logout'); ?>">
                                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                            Logout
                                        </a>
                                    </div>
                                </li>

                                <!-- Dropdown Topbar for Desktop -->
                                <li class="nav-item dropdown no-arrow d-none d-lg-block">
                                    <a class="nav-link dropdown-toggle" href="#" id="userDropdownTopbar" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="mr-2 d-none d-lg-inline text-dark">Halo, <?= user()->fullname; ?></span>
                                        <img class="img-profile rounded-circle" src="<?= base_url(); ?>/img/<?= user()->user_image; ?>" style="width: 40px; height: 40px; border-radius: 50%;">
                                    </a>
                                    <!-- Dropdown - User Information -->
                                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdownTopbar">
                                        <a class="dropdown-item" href="<?= base_url('pelamar/ubah_password'); ?>">
                                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                            Ubah Password
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="<?= base_url('logout'); ?>">
                                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                            Logout
                                        </a>
                                    </div>
                                </li>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <main style="min-height: 100vh;">

        <?= $this->renderSection('page-content'); ?>

    </main>
    <footer>
        <!-- footer-bottom area -->
        <div class="footer-bottom-area footer-bg">
            <div class="container">
                <div class="footer-border">
                    <div class="row d-flex justify-content-between align-items-center">
                        <div class="col-xl-10 col-lg-10 ">
                            <div class="footer-copy-right">
                                <p>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy; Ultranesia <script>
                                        document.write(new Date().getFullYear());
                                    </script> All rights reserved
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>

    <!-- JS here -->

    <!-- All JS Custom Plugins Link Here here -->
    <script src="<?= base_url() ?>/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="<?= base_url() ?>/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="<?= base_url() ?>/js/popper.min.js"></script>
    <script src="<?= base_url() ?>/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="<?= base_url() ?>/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="<?= base_url() ?>/js/owl.carousel.min.js"></script>
    <script src="<?= base_url() ?>/js/slick.min.js"></script>
    <script src="<?= base_url() ?>/js/price_rangs.js"></script>

    <!-- One Page, Animated-HeadLin -->
    <script src="<?= base_url() ?>/js/wow.min.js"></script>
    <script src="<?= base_url() ?>/js/animated.headline.js"></script>
    <script src="<?= base_url() ?>/js/jquery.magnific-popup.js"></script>

    <!-- Scrollup, nice-select, sticky -->
    <script src="<?= base_url() ?>/js/jquery.scrollUp.min.js"></script>
    <script src="<?= base_url() ?>/js/jquery.nice-select.min.js"></script>
    <script src="<?= base_url() ?>/js/jquery.sticky.js"></script>

    <!-- contact js -->
    <script src="<?= base_url() ?>/js/contact.js"></script>
    <script src="<?= base_url() ?>/js/jquery.form.js"></script>
    <script src="<?= base_url() ?>/js/jquery.validate.min.js"></script>
    <script src="<?= base_url() ?>/js/mail-script.js"></script>
    <script src="<?= base_url() ?>/js/jquery.ajaxchimp.min.js"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="<?= base_url() ?>/js/plugins.js"></script>
    <script src="<?= base_url() ?>/js/main.js"></script>

    <!-- Datatables -->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
</body>

</html>