<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="assetsland/images/fav.svg">
    <title>e-schoolPerformance</title>
    <!-- fontawesome css -->
    <link rel="stylesheet preload" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.css" as="style">
    <!-- bootstrap css -->
    <link rel="stylesheet preload" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" as="style">
    <link rel="stylesheet preload" href="assetsland/css/plugins/fontawesome-6.css" as="style">
    <!-- Custom css -->
    <link rel="stylesheet preload" href="{{ asset('assetsland/scss/style.css') }}" as="style">

</head>

<body>

    <!-- header area start -->
    <header class="header-style-one header--sticky">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-style-one-wrapper">
                        <div class="logo-area">
                            <a href="/" class="logo">
                                <img src="{{ asset('assetsland/images/logo-1.svg') }}" alt="logo">
                            </a>
                        </div>
                        <nav class="main-nav-area">
                            <ul class="list-unstyled geex-desktop-menu">
                                <li class="menu-item">
                                    <a href="#" class="geex-dropdown-main-element">Start Tour</a>
                                </li>
                                <li class="menu-item">
                                    <a href="#demos" class="geex-dropdown-main-element">Demos</a>
                                </li>
                                <li class="menu-item">
                                    <a href="#features" class="geex-dropdown-main-element">Features</a>
                                </li>
                            </ul>
                        </nav>
                        <div class="button-area-start">
                            <a href="{{ route('login') }}" target="_blank-" class="rts-btn btn-primary gap-2"><i class="fa-regular fa-user-circle fa-2x- align-middle mx-1"></i> Se Connecter</a>
                            {{-- <a href="themeforest.net/item/geex-bootstrap5-admin-dashboard-html-template/50415081d41d.html?" target="_blank" class="rts-btn btn-primary"><i class="fa-regular fa-cart-shopping"></i> Purchase</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header area end -->

    <!-- rts banner area start -->
    <div class="rts-banner-area rts-section-gap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 order-xl-1 order-lg-1 order-md-6 order-sm-2 order-2">
                    <div class="banner-one-content text-center">
                        <h1 class="title split-collab">Geex <span> Admin <br> Dashboard</span> HTML Template</h1>
                    </div>
                    <ul class="banner-feature-list">
                        <li class="item">
                            <div class="icon"><img src="assetsland/images/banner/banner-icon-01.svg" alt=""></div>
                            <p class="desc">Unique Layout <br>
                                design</p>
                        </li>
                        <li class="item">
                            <div class="icon"><img src="assetsland/images/banner/banner-icon-02.svg" alt=""></div>
                            <p class="desc">Beautiful all <br>
                                Device Responsive</p>
                        </li>
                        <li class="item">
                            <div class="icon"><img src="assetsland/images/banner/banner-icon-03.svg" alt=""></div>
                            <p class="desc">24/7 Hours <br>
                                Dedicated Support</p>
                        </li>
                    </ul>
                    <div class="banner-button-area">
                        <a href="#demos" class="rts-btn btn-primary"> View Demos</a>
                        <a href="../../../../../themeforest.net/item/geex-bootstrap5-admin-dashboard-html-template/50415081d41d.html?" class="rts-btn btn-secondary">Buy Now</a>
                    </div>
                    <div class="banner-img-slider-area">
                        <div class="banner-img"><img src="assetsland/images/banner/laptop-10.webp" alt=""></div>
                        <div class="banner-slider">
                            <div class="swiper mySwiper-bannerSlide">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="img-area"><img src="assetsland/images/demos/01.webp" alt=""></div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="img-area"><img src="assetsland/images/demos/02.webp" alt=""></div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="img-area"><img src="assetsland/images/demos/01.webp" alt=""></div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="img-area"><img src="assetsland/images/demos/03.webp" alt=""></div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="img-area"><img src="assetsland/images/demos/04.webp" alt=""></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-shape-area">
            <img class="one" src="assetsland/images/banner/shape/01.svg" alt="svg-shape">
            <img class="two" src="assetsland/images/banner/shape/02.svg" alt="svg-shape">
            <img class="three" src="assetsland/images/banner/shape/03.svg" alt="svg-shape">
        </div>
    </div>
    <!-- rts banner area end -->

    <!-- rts demos area start -->
    <div id="demos" class="rts-demos-area rts-section-gap2">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 order-xl-1 order-lg-1 order-md-6 order-sm-2 order-2">
                    <div class="section-title-area text-center">
                        <p class="sub-title">Unique Demos</p>
                        <h2 class="heading-title split-collab">Beautiful Prebuilt Demos</h2>
                        <p class="desc split-collab">Discover a world of elegance with our collection of beautiful, <br>hand-crafted designs ready to kickstart your journey</p>
                    </div>
                </div>
            </div>
            <div class="section-inner">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="demo-wrapper wow fadeIn" data-wow-duration="1.2s" data-wow-delay=".5s">
                            <div class="image-area">
                               <a href="https://themewant.com/products/dashboard/geex/" target="_blank"><img src="assetsland/images/demos/01.webp" alt=""></a>
                            </div>
                            <h3 class="content"><a href="https://themewant.com/products/dashboard/geex/" target="_blank">Default Demo</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="demo-wrapper wow fadeIn" data-wow-duration="1.2s" data-wow-delay=".5s">
                            <div class="image-area">
                               <a href="https://themewant.com/products/dashboard/geex/index-2.html" target="_blank"><img src="assetsland/images/demos/02.webp" alt=""></a>
                            </div>
                            <h3 class="content"><a href="https://themewant.com/products/dashboard/geex/index-2.html" target="_blank">Banking Demo</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="demo-wrapper wow fadeIn" data-wow-duration="1.2s" data-wow-delay=".5s">
                            <div class="image-area">
                               <a href="https://themewant.com/products/dashboard/geex/index-3.html" target="_blank"><img src="assetsland/images/demos/03.webp" alt=""></a>
                            </div>
                            <h3 class="content"><a href="https://themewant.com/products/dashboard/geex/index-3.html" target="_blank">Crypto Demo</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="demo-wrapper wow fadeIn" data-wow-duration="1.2s" data-wow-delay=".5s">
                            <div class="image-area">
                               <a href="https://themewant.com/products/dashboard/geex/index-4.html" target="_blank"><img src="assetsland/images/demos/04.webp" alt=""></a>
                            </div>
                            <h3 class="content"><a href="https://themewant.com/products/dashboard/geex/index-4.html" target="_blank">Invoicing Demo</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts demos area end -->

    <!-- rts dark-light area start -->
    <div class="rts-dark-light-area rts-section-gap2">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 order-xl-1 order-lg-1 order-md-6 order-sm-2 order-2">
                    <div class="section-title-area text-center">
                        <h2 class="heading-title split-collab">Dark & Light Modes</h2>
                        <p class="desc split-collab">All the Pages supports the dark mode and your can switch <br> between dark & Light modes just with few steps in seconds!</p>
                        <div class="dark-light-image">
                            <img src="assetsland/images/dark-light.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-inner">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-12">
                        <div class="image-area wow fadeIn" data-wow-duration="1.2s" data-wow-delay=".5s">
                            <img src="assetsland/images/img-light-dark.webp" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts dark-light area end -->

    <!-- rts demos area start -->
    <div id="app" class="rts-demos-area rts-section-gap app">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 order-xl-1 order-lg-1 order-md-6 order-sm-2 order-2">
                    <div class="section-title-area text-center">
                        <h2 class="heading-title split-collab">Prebuilt Apps</h2>
                        <p class="desc split-collab">Discover a world of elegance with our collection of beautiful, <br>hand-crafted designs ready to kickstart your journey</p>
                    </div>
                </div>
            </div>
            <div class="section-inner">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="demo-wrapper wow fadeIn" data-wow-duration="1.2s" data-wow-delay=".5s">
                            <div class="image-area">
                                <a href="https://themewant.com/products/dashboard/geex/todo.html" target="_blank"><img src="assetsland/images/inner/app-01.webp" alt=""></a>
                            </div>
                            <h3 class="content"><a href="https://themewant.com/products/dashboard/geex/todo.html" target="_blank">Todo</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="demo-wrapper wow fadeIn" data-wow-duration="1.2s" data-wow-delay=".5s">
                            <div class="image-area">
                                <a href="https://themewant.com/products/dashboard/geex/chat.html" target="_blank"><img src="assetsland/images/inner/app-02.webp" alt=""></a>
                            </div>
                            <h3 class="content"><a href="https://themewant.com/products/dashboard/geex/chat.html" target="_blank">Chat</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="demo-wrapper wow fadeIn" data-wow-duration="1.2s" data-wow-delay=".5s">
                            <div class="image-area">
                                <a href="https://themewant.com/products/dashboard/geex/calendar.html" target="_blank"><img src="assetsland/images/inner/app-03.webp" alt=""></a>
                            </div>
                            <h3 class="content"><a href="https://themewant.com/products/dashboard/geex/calendar.html" target="_blank">Calender</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="demo-wrapper wow fadeIn" data-wow-duration="1.2s" data-wow-delay=".5s">
                            <div class="image-area">
                                <a href="https://themewant.com/products/dashboard/geex/file-manager.html" target="_blank"><img src="assetsland/images/inner/app-04.webp" alt=""></a>
                            </div>
                            <h3 class="content"><a href="https://themewant.com/products/dashboard/geex/file-manager.html" target="_blank">File Manager</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="demo-wrapper wow fadeIn" data-wow-duration="1.2s" data-wow-delay=".5s">
                            <div class="image-area">
                                <a href="https://themewant.com/products/dashboard/geex/contact.html" target="_blank"><img src="assetsland/images/inner/app-05.webp" alt=""></a>
                            </div>
                            <h3 class="content"><a href="https://themewant.com/products/dashboard/geex/contact.html" target="_blank">Contact</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="demo-wrapper wow fadeIn" data-wow-duration="1.2s" data-wow-delay=".5s">
                            <div class="image-area">
                                <a href="https://themewant.com/products/dashboard/geex/kanban.html" target="_blank"><img src="assetsland/images/inner/app-06.webp" alt=""></a>
                            </div>
                            <h3 class="content"><a href="https://themewant.com/products/dashboard/geex/kanban.html" target="_blank">Kanban</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts demos area end -->
    <!-- rts demos area start -->
    <div id="inner" class="rts-demos-area rts-section-gap innerpages">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 order-xl-1 order-lg-1 order-md-6 order-sm-2 order-2">
                    <div class="section-title-area text-center">
                        <h2 class="heading-title split-collab">Beautiful Inner Pages</h2>
                        <p class="desc split-collab">Discover a world of elegance with our collection of beautiful, <br>hand-crafted designs ready to kickstart your journey</p>
                    </div>
                </div>
            </div>
            <div class="section-inner">
                <div class="row justify-content-center align-items-center">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="demo-wrapper wow fadeIn" data-wow-duration="1.2s" data-wow-delay=".5s">
                            <div class="image-area">
                                <a href="https://themewant.com/products/dashboard/geex/blog.html" target="_blank"><img src="assetsland/images/inner/01.webp" alt=""></a>
                            </div>
                            <h3 class="content"><a href="https://themewant.com/products/dashboard/geex/blog.html" target="_blank">Blog</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="demo-wrapper wow fadeIn" data-wow-duration="1.2s" data-wow-delay=".5s">
                            <div class="image-area">
                                <a href="https://themewant.com/products/dashboard/geex/faq.html" target="_blank"><img src="assetsland/images/inner/02.webp" alt=""></a>
                            </div>
                            <h3 class="content"><a href="https://themewant.com/products/dashboard/geex/faq.html" target="_blank">FAQ</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="demo-wrapper wow fadeIn" data-wow-duration="1.2s" data-wow-delay=".5s">
                            <div class="image-area">
                                <a href="https://themewant.com/products/dashboard/geex/pricing.html" target="_blank"><img src="assetsland/images/inner/03.webp" alt=""></a>
                            </div>
                            <h3 class="content"><a href="https://themewant.com/products/dashboard/geex/pricing.html" target="_blank">Pricing</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="demo-wrapper wow fadeIn" data-wow-duration="1.2s" data-wow-delay=".5s">
                            <div class="image-area">
                                <a href="https://themewant.com/products/dashboard/geex/testimonial.html" target="_blank"><img src="assetsland/images/inner/04.webp" alt=""></a>
                            </div>
                            <h3 class="content"><a href="https://themewant.com/products/dashboard/geex/testimonial.html" target="_blank">Testimonial</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="demo-wrapper wow fadeIn" data-wow-duration="1.2s" data-wow-delay=".5s">
                            <div class="image-area">
                                <a href="https://themewant.com/products/dashboard/geex/terms.html" target="_blank"><img src="assetsland/images/inner/05.webp" alt=""></a>
                            </div>
                            <h3 class="content"><a href="https://themewant.com/products/dashboard/geex/terms.html" target="_blank">Terms & Conditions</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="demo-wrapper wow fadeIn" data-wow-duration="1.2s" data-wow-delay=".5s">
                            <div class="image-area">
                                <a href="https://themewant.com/products/dashboard/geex/signin.html" target="_blank"><img src="assetsland/images/inner/06.webp" alt=""></a>
                            </div>
                            <h3 class="content"><a href="https://themewant.com/products/dashboard/geex/signin.html" target="_blank">Sign In</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="demo-wrapper wow fadeIn" data-wow-duration="1.2s" data-wow-delay=".5s">
                            <div class="image-area">
                                <a href="https://themewant.com/products/dashboard/geex/error.html" target="_blank"><img src="assetsland/images/inner/07.webp" alt=""></a>
                            </div>
                            <h3 class="content"><a href="https://themewant.com/products/dashboard/geex/error.html" target="_blank">Error</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="demo-wrapper wow fadeIn" data-wow-duration="1.2s" data-wow-delay=".5s">
                            <div class="image-area">
                                <a href="https://themewant.com/products/dashboard/geex/maintenance.html" target="_blank"><img src="assetsland/images/inner/08.webp" alt=""></a>
                            </div>
                            <h3 class="content"><a href="https://themewant.com/products/dashboard/geex/maintenance.html" target="_blank">Maintenance</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rts demos area end -->

    <div id="features" class="rts-features">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 order-xl-1 order-lg-1 order-md-6 order-sm-2 order-2">
                    <div class="section-title-area text-center">
                        <h2 class="heading-title split-collab">Features</h2>
                        <p class="desc split-collab">Discover a world of elegance with our collection of <br> beautiful features</p>
                    </div>
                </div>
            </div>
            <ul class="all-features">
                <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInUp;">
                    <div><img src="assetsland/images/icon/19.png" alt="image" loading="lazy"> <span>Bootstrap 5
                    </span></div>
                </li>
                <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInUp;">
                    <div><img src="assetsland/images/icon/18.png" alt="image" loading="lazy"> <span>CSS
                    </span></div>
                </li>
                <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInUp;">
                    <div><img src="assetsland/images/icon/saas.svg" alt="image" loading="lazy"> <span>Built With SASS
                    </span></div>
                </li>
                <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInUp;">
                    <div><img src="assetsland/images/icon/gulp.svg" alt="image" loading="lazy"> <span>Gulp
                    </span></div>
                </li>
                <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInUp;">
                    <div><img src="assetsland/images/icon/npm.svg" alt="image" loading="lazy"> <span>NPM
                    </span></div>
                </li>
                <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInUp;">
                    <div><img src="assetsland/images/icon/webpack.svg" alt="image" loading="lazy"> <span>Webpack
                    </span></div>
                </li>
                <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInUp;">
                    <div><img src="assetsland/images/icon/yarn.svg" alt="image" loading="lazy"> <span>Yarn
                    </span></div>
                </li>
                <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInUp;">
                    <div><img src="assetsland/images/icon/7.png" alt="image" loading="lazy"> <span>Clean Coded
                    </span></div>
                </li>
            </ul>
            <div class="feature-section-bottom2">
                <div class="feature-area">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="features-wrapper">
                                <div class="icon">
                                    <img src="assetsland/images/icon/13.svg" alt="">
                                </div>
                                <div class="content">
                                    <h4 class="title">Expansive Knowledge</h4>
                                    <p class="desc">You can check any time our powerful
                                        documentation.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="features-wrapper">
                                <div class="icon">
                                    <img src="assetsland/images/icon/14.svg" alt="">
                                </div>
                                <div class="content">
                                    <h4 class="title">Proficient Support</h4>
                                    <p class="desc">Enjoy free lifetime reliable updates and six months free support.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="features-wrapper">
                                <div class="icon">
                                    <img src="assetsland/images/icon/15.svg" alt="">
                                </div>
                                <div class="content">
                                    <h4 class="title">Regular Updates</h4>
                                    <p class="desc">Enjoy free lifetime reliable updates going with your purchase.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- rts footer area start -->
    <div class="rts-footer-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 order-xl-1 order-lg-1 order-md-6 order-sm-2 order-2">
                    <div class="section-title-area text-center">
                        <h2 class="heading-title split-collab">Create an amazing Business <br>
                            with  geex today!</h2>
                        <div class="title-btn-area">
                            <a href="../../../../../themeforest.net/item/geex-bootstrap5-admin-dashboard-html-template/50415081d41d.html?" target="_blank"  class="rts-btn btn-primary"><i class="fa-regular fa-cart-shopping"></i> Purchase</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-shape-image">
            <img src="assetsland/images/footer/circle.svg" alt="">
        </div>
    </div>
    <!-- rts footer area end -->



    <!-- pre loader start -->
    <div class="loader-wrapper">
        <div class="loader">
        </div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <!-- pre loader end -->


    <!-- progress area start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
        </svg>
    </div>
    <!-- progress area end -->



    <!-- jquery js -->
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.min.js"></script>
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js"></script>
    <script defer src="{{ asset('assetsland/js/plugins/gsap.min.js') }}"></script>
    <script defer src="{{ asset('assetsland/js/plugins/scrolltigger.js') }}"></script>
    <script defer src="{{ asset('assetsland/js/vendor/split-text.js') }}"></script>
    <script defer src="{{ asset('assetsland/js/vendor/split-type.js') }}"></script>
    <script defer src="{{ asset('assetsland/js/main.js') }}"></script>

</body>

</html>
