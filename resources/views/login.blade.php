<!DOCTYPE html>
<html class="overflow-x-hidden" lang="en-US">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>
        KaleidoLearn: E-Learning Platform | Final Project by Group 3
    </title>

    <link href="{{ asset('static/css/style.min.css') }}" id="wp-block-library-css" media="all" rel="stylesheet" />

    <style id="acf-rotating-cards-style-inline-css">
        .gl-b-cards .cards {
            scrollbar-width: none;
            -ms-overflow-style: none
        }

        .gl-b-cards .cards::-webkit-scrollbar {
            display: none !important
        }

        .gl-b-cards .cards .gl-card {
            perspective: 1000px;
            transform-style: preserve-3d
        }

        .gl-b-cards .cards .gl-card .card-inner {
            position: relative;
            transition: transform .6s;
            transform-style: preserve-3d
        }

        .gl-b-cards .cards .gl-card .card-inner .card-back,
        .gl-b-cards .cards .gl-card .card-inner .card-front {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            -webkit-backface-visibility: hidden !important;
            backface-visibility: hidden;
            outline: 1px solid transparent
        }

        .gl-b-cards .cards .gl-card .card-inner .card-back {
            transform: rotateY(180deg)
        }

        .gl-b-cards .cards .gl-card.flipped .card-inner {
            transform: rotateY(180deg)
        }

        @media screen and (min-width:1021px) and (max-width:1200px) {
            .gl-b-cards .gl-card .card-front p {
                font-size: 20px;
                padding: 0 25px
            }
        }

        @media screen and (max-width:767px) {
            .gl-b-cards .cards .gl-card .card-inner {
                transform: rotateY(180deg) !important
            }
        }
    </style>
    <style id="acf-running-numbers-with-carousel-style-inline-css">
        .gl-b-running-numbers-with-carousel .testimonials-carousel .swiper-slide {
            aspect-ratio: 5/6
        }

        .gl-b-running-numbers-with-carousel .swiper-free-mode>.swiper-wrapper {
            transition-timing-function: linear !important
        }

        @media screen and (max-width:1360px) {
            .gl-b-running-numbers-with-carousel .testimonials-carousel .swiper-slide {
                aspect-ratio: 5/8
            }
        }
    </style>


    <link href="{{ asset('static/css/output.min.css') }}" id="tailwind-css" media="all" rel="stylesheet" />
    <link href="{{ asset('static/css/slick.css') }}" id="slick-css" media="all" rel="stylesheet" />
    <link href="{{ asset('static/css/swiper-bundle.min.css') }}" id="swiper-css" media="all" rel="stylesheet" />
    <link href="{{ asset('static/css/simplebar.css') }}" id="simplebar-css" media="all" rel="stylesheet" />
    <link href="{{ asset('static/css/styles.css') }}" id="contact-form-7-css" media="all" rel="stylesheet" />
    <link href="{{ asset('static/css/style.css') }}" id="greydientlab-style-css" media="all" rel="stylesheet" />
    <link href="{{ asset('static/css/main.min.css') }}" id="main-css" media="all" rel="stylesheet" />

    <script async="" data-wp-strategy="async" id="monsterinsights-frontend-script-js"
        src="static/assets/js/frontend-gtag.min.js">
        </script>
    
    <script id="jquery-core-js" src="static/assets/js/jquery.min.js">
    </script>
    <script id="acf-js" src="static/assets/js/acf.min.js">
    </script>

    <link href="static/assets/images/cropped-Favicon-32x32.png" rel="icon" sizes="32x32" />
    <link href="static/assets/images/cropped-Favicon-192x192.png" rel="icon" sizes="192x192" />
    <link href="static/assets/images/cropped-Favicon-180x180.png" rel="apple-touch-icon" />
    <meta content="static/assets/images/cropped-Favicon-270x270.png" name="msapplication-TileImage" />
    </link>
</head>

<body class="home wp-singular page-template-default page page-id-982 wp-custom-logo wp-theme-learning-by-design">
    <div class="site" id="page">
        <header class="site-header lbd-nav pt-[20px] pl-[20px] max-w-[140px] md:max-w-[unset] fixed top-0 w-fit z-[20]"
            id="masthead">
            <div class="flex items-start justify-between">
                <div class="site-branding">
                    <a aria-current="page" class="custom-logo-link" href="http://127.0.0.1:3000/index.html" rel="home">
                        <img alt="LbD Logo" class="custom-logo" decoding="async" height="46"
                            src="static/assets/images/Group-3.svg" width="176" />
                    </a>
                    <p class="site-title hidden">
                        <a href="http://127.0.0.1:3000/index.html" rel="home">
                            E-Leaning Platform
                        </a>
                    </p>
                </div>
            </div>
        </header>
        <!-- #masthead -->
        <nav class="main-navigation lbd-nav flex fixed top-[20px] right-[20px] z-[20]" id="site-navigation">
            <div
                class="lbd-menu relative group md:min-h-[95px] md:min-w-[95px] md:w-[322px] md:rounded-[6px] md:pb-[80px] md:max-w-[120px] [&amp;.open]:max-w-[unset]">
                <div class="w-full hidden md:block min-w-[332px] absolute right-0 top-[-9px] [&_#Close]:hidden pointer-events-none"
                    data-file="static/assets/animations/Navigation-latest.json" id="lottie-morph">
                </div>
                <img alt="menu shape" class="mobile-menu md:hidden" src="static/assets/images/mobile-menu.svg" />
                <div class="menu-container cursor-default max-h-[570px] [&amp;_.simple-bar-wrapper]:max-h-[570px] relative top-[-6px] left-[-3px] group-[.show-menu]:opacity-100 group-[.open]:flex hidden opacity-0 py-[24px] pb-[40px] px-[12px] flex-col justify-between relative z-[2]"
                    data-lenis-prevent="">
                    <div class="menu-primary-menu-container">
                        <ul class="flex flex-col gap-[24px] w-fit" id="primary-menu">
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-982 current_page_item menu-item-1009 font-helvetica font-bold text-[14px] leading-[1] text-white uppercase [&amp;_.sub-menu_li]:font-normal [&amp;_.sub-menu_li]:mt-[12px] [&amp;_.sub-menu_li]:normal-case [&amp;.current-menu-item]:underline [&amp;.current-menu-item]:underline-offset-[4px] [&amp;.menu-item-has-children&gt;a]:pointer-events-none"
                                id="menu-item-1009">
                                <a aria-current="page" class="custom-class-here" href="#">
                                    Home
                                </a>
                            </li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-488 font-helvetica font-bold text-[14px] leading-[1] text-white uppercase [&amp;_.sub-menu_li]:font-normal [&amp;_.sub-menu_li]:mt-[12px] [&amp;_.sub-menu_li]:normal-case [&amp;.current-menu-item]:underline [&amp;.current-menu-item]:underline-offset-[4px] [&amp;.menu-item-has-children&gt;a]:pointer-events-none"
                                id="menu-item-488">
                                <a class="custom-class-here" href="">
                                    About Us
                                </a>
                            </li>
                            <li class="no-hover menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-280 font-helvetica font-bold text-[14px] leading-[1] text-white uppercase [&amp;_.sub-menu_li]:font-normal [&amp;_.sub-menu_li]:mt-[12px] [&amp;_.sub-menu_li]:normal-case [&amp;.current-menu-item]:underline [&amp;.current-menu-item]:underline-offset-[4px] [&amp;.menu-item-has-children&gt;a]:pointer-events-none"
                                id="menu-item-280">
                                <a class="custom-class-here" href="#">
                                    Documentation
                                </a>
                                <ul class="sub-menu">
                                    <li class="menu-item menu-item-type-post_type menu-item-object-programme menu-item-348 font-helvetica font-bold text-[14px] leading-[1] text-white uppercase [&amp;_.sub-menu_li]:font-normal [&amp;_.sub-menu_li]:mt-[12px] [&amp;_.sub-menu_li]:normal-case [&amp;.current-menu-item]:underline [&amp;.current-menu-item]:underline-offset-[4px] [&amp;.menu-item-has-children&gt;a]:pointer-events-none"
                                        id="menu-item-348">
                                        <a class="custom-class-here" href="#">
                                            Project Background
                                        </a>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-programme menu-item-347 font-helvetica font-bold text-[14px] leading-[1] text-white uppercase [&amp;_.sub-menu_li]:font-normal [&amp;_.sub-menu_li]:mt-[12px] [&amp;_.sub-menu_li]:normal-case [&amp;.current-menu-item]:underline [&amp;.current-menu-item]:underline-offset-[4px] [&amp;.menu-item-has-children&gt;a]:pointer-events-none"
                                        id="menu-item-347">
                                        <a class="custom-class-here" href="#">
                                            Purpose
                                        </a>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-programme menu-item-489 font-helvetica font-bold text-[14px] leading-[1] text-white uppercase [&amp;_.sub-menu_li]:font-normal [&amp;_.sub-menu_li]:mt-[12px] [&amp;_.sub-menu_li]:normal-case [&amp;.current-menu-item]:underline [&amp;.current-menu-item]:underline-offset-[4px] [&amp;.menu-item-has-children&gt;a]:pointer-events-none"
                                        id="menu-item-489">
                                        <a class="custom-class-here" href="#">
                                            Vision
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-399 font-helvetica font-bold text-[14px] leading-[1] text-white uppercase [&amp;_.sub-menu_li]:font-normal [&amp;_.sub-menu_li]:mt-[12px] [&amp;_.sub-menu_li]:normal-case [&amp;.current-menu-item]:underline [&amp;.current-menu-item]:underline-offset-[4px] [&amp;.menu-item-has-children&gt;a]:pointer-events-none"
                                id="menu-item-399">
                                <a class="custom-class-here" href="#">
                                    Methodology
                                </a>
                                <ul class="sub-menu">
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-642 font-helvetica font-bold text-[14px] leading-[1] text-white uppercase [&amp;_.sub-menu_li]:font-normal [&amp;_.sub-menu_li]:mt-[12px] [&amp;_.sub-menu_li]:normal-case [&amp;.current-menu-item]:underline [&amp;.current-menu-item]:underline-offset-[4px] [&amp;.menu-item-has-children&gt;a]:pointer-events-none"
                                        id="menu-item-642">
                                        <a class="custom-class-here" href="#">
                                            Laravel
                                        </a>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-400 font-helvetica font-bold text-[14px] leading-[1] text-white uppercase [&amp;_.sub-menu_li]:font-normal [&amp;_.sub-menu_li]:mt-[12px] [&amp;_.sub-menu_li]:normal-case [&amp;.current-menu-item]:underline [&amp;.current-menu-item]:underline-offset-[4px] [&amp;.menu-item-has-children&gt;a]:pointer-events-none"
                                        id="menu-item-400">
                                        <a class="custom-class-here" href="#">
                                            MySQL
                                        </a>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-599 font-helvetica font-bold text-[14px] leading-[1] text-white uppercase [&amp;_.sub-menu_li]:font-normal [&amp;_.sub-menu_li]:mt-[12px] [&amp;_.sub-menu_li]:normal-case [&amp;.current-menu-item]:underline [&amp;.current-menu-item]:underline-offset-[4px] [&amp;.menu-item-has-children&gt;a]:pointer-events-none"
                                        id="menu-item-599">
                                        <a class="custom-class-here" href="#">
                                            Composer
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="no-hover menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-282 font-helvetica font-bold text-[14px] leading-[1] text-white uppercase [&amp;_.sub-menu_li]:font-normal [&amp;_.sub-menu_li]:mt-[12px] [&amp;_.sub-menu_li]:normal-case [&amp;.current-menu-item]:underline [&amp;.current-menu-item]:underline-offset-[4px] [&amp;.menu-item-has-children&gt;a]:pointer-events-none"
                                id="menu-item-282">
                                <a class="custom-class-here" href="#">
                                    Development Process
                                </a>
                                <ul class="sub-menu">
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-932 font-helvetica font-bold text-[14px] leading-[1] text-white uppercase [&amp;_.sub-menu_li]:font-normal [&amp;_.sub-menu_li]:mt-[12px] [&amp;_.sub-menu_li]:normal-case [&amp;.current-menu-item]:underline [&amp;.current-menu-item]:underline-offset-[4px] [&amp;.menu-item-has-children&gt;a]:pointer-events-none"
                                        id="menu-item-932">
                                        <a class="custom-class-here" href="#">
                                            Database Design
                                        </a>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-367 font-helvetica font-bold text-[14px] leading-[1] text-white uppercase [&amp;_.sub-menu_li]:font-normal [&amp;_.sub-menu_li]:mt-[12px] [&amp;_.sub-menu_li]:normal-case [&amp;.current-menu-item]:underline [&amp;.current-menu-item]:underline-offset-[4px] [&amp;.menu-item-has-children&gt;a]:pointer-events-none"
                                        id="menu-item-367">
                                        <a class="custom-class-here" href="#">
                                            RBAC Implementation
                                        </a>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1261 font-helvetica font-bold text-[14px] leading-[1] text-white uppercase [&amp;_.sub-menu_li]:font-normal [&amp;_.sub-menu_li]:mt-[12px] [&amp;_.sub-menu_li]:normal-case [&amp;.current-menu-item]:underline [&amp;.current-menu-item]:underline-offset-[4px] [&amp;.menu-item-has-children&gt;a]:pointer-events-none"
                                        id="menu-item-1261">
                                        <a class="custom-class-here" href="#">
                                            Routing
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-660 font-helvetica font-bold text-[14px] leading-[1] text-white uppercase [&amp;_.sub-menu_li]:font-normal [&amp;_.sub-menu_li]:mt-[12px] [&amp;_.sub-menu_li]:normal-case [&amp;.current-menu-item]:underline [&amp;.current-menu-item]:underline-offset-[4px] [&amp;.menu-item-has-children&gt;a]:pointer-events-none"
                                id="menu-item-660">
                                <a class="custom-class-here" href="#">
                                    Source Code
                                </a>
                            </li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-401 font-helvetica font-bold text-[14px] leading-[1] text-white uppercase [&amp;_.sub-menu_li]:font-normal [&amp;_.sub-menu_li]:mt-[12px] [&amp;_.sub-menu_li]:normal-case [&amp;.current-menu-item]:underline [&amp;.current-menu-item]:underline-offset-[4px] [&amp;.menu-item-has-children&gt;a]:pointer-events-none"
                                id="menu-item-401">
                                <a class="custom-class-here" href="#">
                                    Demonstration
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- <div class="overlay absolute left-0 bottom-0 w-full h-[100px] z-[2] group-[.show-menu]:block rounded-[15px] bg-gradient-to-b from-transparent to-lbd-orangered"></div> -->
                </div>
                <!-- <p class="menu-text hidden md:block absolute top-[10px] right-[20px] z-[10] text-white font-helvetica font-normal text-[14px] leading-[20px] uppercase">Menu</p> -->
                <!-- <p class="back hidden group-[.show-menu]:opacity-100 group-[.show-menu]:block opacity-0 absolute top-[27px] right-[26px] text-white z-[5] cursor-pointer ">Close</p> -->
                <img alt="Close Menu"
                    class="close-menu cursor-pointer back hidden w-[14px] absolute top-[24px] right-[24px] z-[5] hidden group-[.show-menu]:opacity-100 group-[.show-menu]:block opacity-0"
                    src="static/assets/images/close-button-menu.svg" />
            </div>
        </nav>
        <!-- #site-navigation -->
        <div class="menu-container-mobile block md:hidden !fixed top-0 left-0 w-[100vw] h-[100dvh] bg-lbd-orangered py-[20px] px-[12px] translate-y-[-150%] [&amp;.show]:translate-y-0 transition-all duration-500 ease-in-out overflow-x-hidden z-[9999]"
            data-lenis-prevent="">
            <div class="menu-primary-menu-container">
                <ul class="flex flex-col gap-[32px] w-fit" id="primary-menu">
                    <li
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-982 current_page_item menu-item-1009 font-helvetica font-bold text-[16px] leading-[1] text-white uppercase [&amp;_.sub-menu_li]:font-normal [&amp;_.sub-menu_li]:mt-[16px] [&amp;_.sub-menu_li]:normal-case [&amp;.current-menu-item]:underline [&amp;.current-menu-item]:underline-offset-[4px]">
                        <a aria-current="page" class="custom-class-here" href="#">
                            Home
                        </a>
                    </li>
                    <li
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-488 font-helvetica font-bold text-[16px] leading-[1] text-white uppercase [&amp;_.sub-menu_li]:font-normal [&amp;_.sub-menu_li]:mt-[16px] [&amp;_.sub-menu_li]:normal-case [&amp;.current-menu-item]:underline [&amp;.current-menu-item]:underline-offset-[4px]">
                        <a class="custom-class-here" href="#">
                            About Us
                        </a>
                    </li>
                    <li
                        class="no-hover menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-280 font-helvetica font-bold text-[16px] leading-[1] text-white uppercase [&amp;_.sub-menu_li]:font-normal [&amp;_.sub-menu_li]:mt-[16px] [&amp;_.sub-menu_li]:normal-case [&amp;.current-menu-item]:underline [&amp;.current-menu-item]:underline-offset-[4px]">
                        <a class="custom-class-here" href="#">
                            Documentation
                        </a>
                        <ul class="sub-menu">
                            <li
                                class="menu-item menu-item-type-post_type menu-item-object-programme menu-item-348 font-helvetica font-bold text-[16px] leading-[1] text-white uppercase [&amp;_.sub-menu_li]:font-normal [&amp;_.sub-menu_li]:mt-[16px] [&amp;_.sub-menu_li]:normal-case [&amp;.current-menu-item]:underline [&amp;.current-menu-item]:underline-offset-[4px]">
                                <a class="custom-class-here"
                                    href="#">
                                    Project Background
                                </a>
                            </li>
                            <li
                                class="menu-item menu-item-type-post_type menu-item-object-programme menu-item-347 font-helvetica font-bold text-[16px] leading-[1] text-white uppercase [&amp;_.sub-menu_li]:font-normal [&amp;_.sub-menu_li]:mt-[16px] [&amp;_.sub-menu_li]:normal-case [&amp;.current-menu-item]:underline [&amp;.current-menu-item]:underline-offset-[4px]">
                                <a class="custom-class-here"
                                    href="#">
                                    Purpose
                                </a>
                            </li>
                            <li
                                class="menu-item menu-item-type-post_type menu-item-object-programme menu-item-489 font-helvetica font-bold text-[16px] leading-[1] text-white uppercase [&amp;_.sub-menu_li]:font-normal [&amp;_.sub-menu_li]:mt-[16px] [&amp;_.sub-menu_li]:normal-case [&amp;.current-menu-item]:underline [&amp;.current-menu-item]:underline-offset-[4px]">
                                <a class="custom-class-here"
                                    href="#">
                                    Vision
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li
                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-399 font-helvetica font-bold text-[16px] leading-[1] text-white uppercase [&amp;_.sub-menu_li]:font-normal [&amp;_.sub-menu_li]:mt-[16px] [&amp;_.sub-menu_li]:normal-case [&amp;.current-menu-item]:underline [&amp;.current-menu-item]:underline-offset-[4px]">
                        <a class="custom-class-here" href="#">
                             Purpose
                        </a>
                        <ul class="sub-menu">
                            <li
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-642 font-helvetica font-bold text-[16px] leading-[1] text-white uppercase [&amp;_.sub-menu_li]:font-normal [&amp;_.sub-menu_li]:mt-[16px] [&amp;_.sub-menu_li]:normal-case [&amp;.current-menu-item]:underline [&amp;.current-menu-item]:underline-offset-[4px]">
                                <a class="custom-class-here"
                                    href="#">
                                    Laravel
                                </a>
                            </li>
                            <li
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-400 font-helvetica font-bold text-[16px] leading-[1] text-white uppercase [&amp;_.sub-menu_li]:font-normal [&amp;_.sub-menu_li]:mt-[16px] [&amp;_.sub-menu_li]:normal-case [&amp;.current-menu-item]:underline [&amp;.current-menu-item]:underline-offset-[4px]">
                                <a class="custom-class-here"
                                    href="#">
                                    MySQL
                                </a>
                            </li>
                            <li
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-599 font-helvetica font-bold text-[16px] leading-[1] text-white uppercase [&amp;_.sub-menu_li]:font-normal [&amp;_.sub-menu_li]:mt-[16px] [&amp;_.sub-menu_li]:normal-case [&amp;.current-menu-item]:underline [&amp;.current-menu-item]:underline-offset-[4px]">
                                <a class="custom-class-here"
                                    href="#">
                                    Composer
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li
                        class="no-hover menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-282 font-helvetica font-bold text-[16px] leading-[1] text-white uppercase [&amp;_.sub-menu_li]:font-normal [&amp;_.sub-menu_li]:mt-[16px] [&amp;_.sub-menu_li]:normal-case [&amp;.current-menu-item]:underline [&amp;.current-menu-item]:underline-offset-[4px]">
                        <a class="custom-class-here" href="#">
                            Development Process
                        </a>
                        <ul class="sub-menu">
                            <li
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-932 font-helvetica font-bold text-[16px] leading-[1] text-white uppercase [&amp;_.sub-menu_li]:font-normal [&amp;_.sub-menu_li]:mt-[16px] [&amp;_.sub-menu_li]:normal-case [&amp;.current-menu-item]:underline [&amp;.current-menu-item]:underline-offset-[4px]">
                                <a class="custom-class-here"
                                    href="#">
                                    Database Design
                                </a>
                            </li>
                            <li
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-367 font-helvetica font-bold text-[16px] leading-[1] text-white uppercase [&amp;_.sub-menu_li]:font-normal [&amp;_.sub-menu_li]:mt-[16px] [&amp;_.sub-menu_li]:normal-case [&amp;.current-menu-item]:underline [&amp;.current-menu-item]:underline-offset-[4px]">
                                <a class="custom-class-here" href="#">
                                    RBAC Implementation
                                </a>
                            </li>
                            <li
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1261 font-helvetica font-bold text-[16px] leading-[1] text-white uppercase [&amp;_.sub-menu_li]:font-normal [&amp;_.sub-menu_li]:mt-[16px] [&amp;_.sub-menu_li]:normal-case [&amp;.current-menu-item]:underline [&amp;.current-menu-item]:underline-offset-[4px]">
                                <a class="custom-class-here"
                                    href="#">
                                    Routing
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-660 font-helvetica font-bold text-[16px] leading-[1] text-white uppercase [&amp;_.sub-menu_li]:font-normal [&amp;_.sub-menu_li]:mt-[16px] [&amp;_.sub-menu_li]:normal-case [&amp;.current-menu-item]:underline [&amp;.current-menu-item]:underline-offset-[4px]">
                        <a class="custom-class-here" href="#">
                            Source Code
                        </a>
                    </li>
                    <li
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-401 font-helvetica font-bold text-[16px] leading-[1] text-white uppercase [&amp;_.sub-menu_li]:font-normal [&amp;_.sub-menu_li]:mt-[16px] [&amp;_.sub-menu_li]:normal-case [&amp;.current-menu-item]:underline [&amp;.current-menu-item]:underline-offset-[4px]">
                        <a class="custom-class-here" href="#">
                            Demonstration
                        </a>
                    </li>
                </ul>
            </div>
            <img alt="Close Menu" class="close-menu-mobile w-[14px] absolute top-[20px] right-[20px]"
                src="static/assets/images/close-button-menu.svg" />
            <!-- <div class="overlay fixed bottom-0 left-0 w-full h-[100px] z-[2] group-[.show-menu]:block bg-gradient-to-b from-transparent to-lbd-orangered"></div> -->
        </div>

        <div class="lbd-cursor fixed hidden lg:block transition-[height,width] scale-1 pointer-events-none mix-blend-difference [&amp;.bigger]:w-[80px] [&amp;.bigger]:h-[80px] [&amp;.bigger]:mix-blend-normal [&amp;.bigger]:bg-black w-[32px] h-[32px] rounded-[50%] bg-white translate-x-[-50%] translate-y-[-50%] z-[999999]"
            id="lbdCursor">
            <span
                class="font-bnCringe text-[24px] leading-[32px] text-white absolute top-[50%] left-[50%] translate-x-[-50%] translate-y-[-50%]">
            </span>
        </div>

        <main class="site-main relative z-[2]" id="primary">
            <article class="post-982 page type-page status-publish hentry" id="post-982">
                <div class="entry-content gl-content-wrapper">
                    <div class="gl-b-hero-section">
                        <div
                            class="home-hero relative aspect-[767/905] md:aspect-[4/3] bg-lbd-pink overflow-hidden content w-full flex items-center justify-center max-w-[100%]">
                            <h1 class="visually-hidden">
                                Nurturing the Next generation of Changemakers
                            </h1>
                            <div class="hidden lg:block w-full lg:mt-[-50px] [&_g]:padding-[15px] [&_#whiteEllipse]:!hidden"
                                data-file="static/assets/animations/Landing-animation.json" id="lottie-hero">
                            </div>
                            <div class="hidden md:block lg:hidden w-full lg:mt-[-50px] [&_g]:padding-[15px] [&_#whiteEllipse]:!hidden"
                                data-file="static/assets/animations/Landing-animation-Tablet.json"
                                id="lottie-hero-tablet">
                            </div>
                            <div class="block md:hidden w-full lg:mt-[-50px] [&_g]:padding-[15px] [&_#whiteEllipse]:!hidden"
                                data-file="static/assets/animations/Landing-animation-Mobile.json"
                                id="lottie-hero-mobile">
                            </div>
                        </div>
                    </div>
                    <div class="gl-b-cards relative z-[2] bg-white pb-[100px] md:pb-[75px] lg:pb-0">
                        <div
                            class="content-wrapper translate-y-[-2vw] bg-white transition-all duration-500 ease-out md:translate-y-[-10vw] lg:translate-y-[-20vw] [&amp;.nudge]:lg:translate-y-[-25vw] [&amp;.slide]:lg:translate-y-[-30vw]">
                            <img alt="Ellipse" class="ellipse absolute top-[-6vw] z-[2] w-full" decoding="async"
                                src="static/assets/images/white-ellipse.svg" />
                            <div class="content w-full md:mt-[32px] lg:mt-0">
                                <div
                                    class="heading-wrapper mx-auto w-full pt-5 md:px-[40px] lg:max-w-[740px] lg:px-0 lg:pt-0">
                                    <h2
                                        class="font-bnCringe font-bold text-lbd-black opacity-0 text-[20px] leading-[25px] tracking-[-0.2px] md:text-[32px] md:leading-[38px] md:tracking-[-0.32px] lg:text-[42px] lg:leading-[50px] lg:tracking-[-0.84px] text-center empty:hidden">
                                        What is
                                    </h2>
                                    <div
                                        class="heading-container overflow-hidden [&amp;_svg_path]:translate-y-[-200%] w-fit px-[40px] pb-[24px] md:pb-[32px] md:px-[0] md:max-w-[570px] lg:max-w-[unset] w-full mx-auto mt-[8px] md:mt-0 [&amp;_svg]:overflow-visible [&amp;_svg]:w-full [&amp;_svg]:h-[auto] [&amp;_svg]:md:h-[unset]">
                                        <img src="static/assets/images/Logo.svg" />
                                    </div>
                                    <p
                                        class="font-helvetica font-medium opacity-0 text-[16px] md:text-[18px] lg:text-[20px] md:leading-[25px] lg:leading-[28px] leading-[24px] text-center px-[16px] md:px-0 empty:hidden">
                                        KaleidoLearn is a vibrant e-learning platform designed to nurture the next
                                        generation of changemakers through the power of design thinking.
                                    </p>
                                </div>
                                <div
                                    class="cards cards-desktop hidden md:mt-[70px] md:gap-[24px] md:overflow-x-auto md:px-[24px] lg:mt-[200px] lg:flex lg:justify-center lg:gap-[60px] lg:overflow-x-visible lg:px-[10.45%]">
                                    <div
                                        class="gl-card group/card relative md:min-w-[256px] w-[320px] aspect-[16/21] rounded-[20px] cursor-pointer rotate-0 lg:rotate-[-15deg]">
                                        <div class="card-inner bg-lbd-light-blue">
                                            <div
                                                class="card-front bg-lbd-light-blue rounded-[20px] flex flex-col justify-center items-center">
                                                <img alt="Flower Accent" class="absolute top-[16px] w-full px-[20px]"
                                                    decoding="async" src="static/assets/images/top-flower.svg" />
                                                <div
                                                    class="center relative flex items-center justify-center md:px-[16px] md:py-[60px] lg:px-[20px] lg:py-[70px]">
                                                    <img alt="Flower" class="w-full" decoding="async"
                                                        src="static/assets/images/center-flower.svg" />
                                                    <h3
                                                        class="absolute w-full max-w-[170px] text-center font-bnCringe font-bold uppercase text-white md:text-[26px] md:leading-[30px] md:tracking-[-0.26px] lg:text-[28px] lg:leading-[32px] lg:tracking-[-0.42px]">
                                                        Anytime, Anywhere Learning
                                                    </h3>
                                                </div>
                                                <img alt="Flower Accent" class="absolute bottom-[16px] w-full px-[20px]"
                                                    decoding="async" src="static/assets/images/top-flower.svg" />
                                            </div>
                                            <div class="card-back bg-lbd-blue h-fit rounded-[20px] overflow-hidden">
                                                <div
                                                    class="image-container aspect-[3/2] w-[101%] overflow-hidden md:aspect-[16/10] lg:aspect-[160/117]">
                                                    <img alt="Changemakers" class="w-full h-full object-cover"
                                                        decoding="async" fetchpriority="high" height="234"
                                                        sizes="(max-width: 321px) 100vw, 321px"
                                                        src="static/assets/images/study.jpg" width="321" />
                                                </div>
                                                <div
                                                    class="text-content p-[12px] md:p-[16px] lg:px-[16px] lg:py-[26px]">
                                                    <h3
                                                        class="text-center font-bnCringe text-[18px] uppercase leading-[22px] tracking-[-0.18px] text-white md:text-[20px] md:leading-[25px] md:tracking-[-0.3px] lg:text-[22px] lg:leading-[26px] lg:tracking-[-0.22px]">
                                                        Anytime, Anywhere Learning
                                                    </h3>
                                                    <p
                                                        class="mt-[12px] text-center font-helvetica text-[13px] leading-[19px] text-white md:text-[14px] md:leading-[20px] lg:text-[18px] lg:leading-[26px]">
                                                        Access your courses and content from any device, whenever
                                                        inspiration strikes.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="gl-card group/card relative md:min-w-[256px] w-[320px] aspect-[16/21] rounded-[20px] cursor-pointer lg:top-[-100px] default">
                                        <div class="card-inner bg-lbd-pink">
                                            <div
                                                class="card-front bg-lbd-pink rounded-[20px] flex flex-col justify-center items-center">
                                                <img alt="Flower Accent" class="absolute top-[16px] w-full px-[20px]"
                                                    decoding="async" src="static/assets/images/flower-top2.svg" />
                                                <div
                                                    class="center relative flex items-center justify-center md:px-[16px] md:py-[60px] lg:px-[20px] lg:py-[70px]">
                                                    <img alt="Flower" class="w-full" decoding="async"
                                                        src="static/assets/images/flower-center2.svg" />
                                                    <h3
                                                        class="absolute w-full max-w-[189px] text-center font-bnCringe font-bold uppercase text-white md:text-[26px] md:leading-[30px] md:tracking-[-0.26px] lg:text-[28px] lg:leading-[32px] lg:tracking-[-0.42px]">
                                                        Track Progress Seamlessly
                                                    </h3>
                                                </div>
                                                <img alt="Flower Accent" class="absolute bottom-[16px] w-full px-[20px]"
                                                    decoding="async" src="static/assets/images/flower-top2.svg" />
                                            </div>
                                            <div
                                                class="card-back bg-lbd-orangered h-fit rounded-[20px] overflow-hidden">
                                                <div
                                                    class="image-container aspect-[3/2] w-[101%] overflow-hidden md:aspect-[16/10] lg:aspect-[160/117]">
                                                    <img alt="Changemaker" class="w-full h-full object-cover"
                                                        decoding="async" height="201"
                                                        sizes="(max-width: 321px) 100vw, 321px"
                                                        src="static/assets/images/progress.jpg" width="321" />
                                                </div>
                                                <div
                                                    class="text-content p-[12px] md:p-[16px] lg:px-[16px] lg:py-[26px]">
                                                    <h3
                                                        class="text-center font-bnCringe text-[18px] uppercase leading-[22px] tracking-[-0.18px] text-white md:text-[20px] md:leading-[25px] md:tracking-[-0.3px] lg:text-[22px] lg:leading-[26px] lg:tracking-[-0.22px]">
                                                        Track Progress Seamlessly
                                                    </h3>
                                                    <p
                                                        class="mt-[12px] text-center font-helvetica text-[13px] leading-[19px] text-white md:text-[14px] md:leading-[20px] lg:text-[18px] lg:leading-[26px]">
                                                        Stay on top of assignments, grades, and growth with built-in
                                                        progress tracking.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="gl-card group/card relative md:min-w-[256px] w-[320px] aspect-[16/21] rounded-[20px] cursor-pointer rotate-0 lg:rotate-[15deg]">
                                        <div class="card-inner bg-lbd-light-green">
                                            <div
                                                class="card-front bg-lbd-light-green rounded-[20px] flex flex-col justify-center items-center">
                                                <img alt="Flower Accent" class="absolute top-[16px] w-full px-[20px]"
                                                    decoding="async" src="static/assets/images/gear-top.svg" />
                                                <div
                                                    class="center relative flex items-center justify-center md:px-[16px] md:py-[60px] lg:px-[20px] lg:py-[70px]">
                                                    <img alt="Flower" class="w-full" decoding="async"
                                                        src="static/assets/images/gear-center.svg" />
                                                    <h3
                                                        class="absolute w-full max-w-[170px] text-center font-bnCringe font-bold uppercase text-white md:text-[26px] md:leading-[30px] md:tracking-[-0.26px] lg:text-[28px] lg:leading-[32px] lg:tracking-[-0.42px]">
                                                        Interactive & Role-Based Experience
                                                    </h3>
                                                </div>
                                                <img alt="Flower Accent" class="absolute bottom-[16px] w-full px-[20px]"
                                                    decoding="async" src="static/assets/images/gear-top.svg" />
                                            </div>
                                            <div class="card-back bg-lbd-green h-fit rounded-[20px] overflow-hidden">
                                                <div
                                                    class="image-container aspect-[3/2] w-[101%] overflow-hidden md:aspect-[16/10] lg:aspect-[160/117]">
                                                    <img alt="Community" class="w-full h-full object-cover"
                                                        decoding="async" height="234"
                                                        sizes="(max-width: 320px) 100vw, 320px"
                                                        src="static/assets/images/rbac.jpg" width="320" />
                                                </div>
                                                <div
                                                    class="text-content p-[12px] md:p-[16px] lg:px-[16px] lg:py-[26px]">
                                                    <h3
                                                        class="text-center font-bnCringe text-[18px] leading-[22px] tracking-[-0.18px] text-white md:text-[20px] md:leading-[25px] md:tracking-[-0.3px] lg:text-[22px] lg:leading-[26px] lg:tracking-[-0.22px]">
                                                        Interactive & Role-Based Experience
                                                    </h3>
                                                    <p
                                                        class="mt-[12px] text-center font-helvetica text-[13px] leading-[19px] text-white md:text-[14px] md:leading-[20px] lg:text-[18px] lg:leading-[26px]">
                                                        Whether you're a student, teacher, or admin — the platform
                                                        adapts to your needs.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="cards cards-mobile mt-[40px] flex flex-col items-center gap-[30px] px-[50px] md:mt-0 md:flex-row md:gap-[40px] md:overflow-x-auto md:px-[24px] md:pb-[20px] md:pt-[70px] lg:mt-[250px] lg:hidden lg:justify-center lg:gap-[60px] lg:overflow-x-visible lg:px-[10.45%] lg:pb-0 lg:pt-0">
                                    <div
                                        class="gl-card gl-animated group/card relative w-full max-w-[250px] md:max-w-[unset] md:min-w-[256px] md:w-[320px] aspect-[16/21] rounded-[20px] cursor-pointer order-2 md:order-1 !rotate-[3deg] !md:rotate-[-3deg] !lg:rotate-[-15deg]">
                                        <div class="card-inner aspect-[16/21] rounded-[20px] bg-lbd-light-blue">
                                            <div
                                                class="card-front bg-lbd-light-blue rounded-[20px] flex flex-col justify-center items-center">
                                                <img alt="Flower Accent" class="absolute top-[16px] w-full px-[20px]"
                                                    decoding="async" src="static/assets/images/top-flower.svg" />
                                                <div
                                                    class="center relative flex items-center justify-center md:px-[16px] md:py-[60px] lg:px-[20px] lg:py-[70px]">
                                                    <img alt="Flower" class="w-full" decoding="async"
                                                        src="static/assets/images/center-flower.svg" />
                                                    <h3
                                                        class="absolute w-full max-w-[170px] text-center font-bnCringe font-bold uppercase text-white md:text-[26px] md:leading-[30px] md:tracking-[-0.26px] lg:text-[28px] lg:leading-[32px] lg:tracking-[-0.42px]">
                                                        Creatively Confident by Design
                                                    </h3>
                                                </div>
                                                <img alt="Flower Accent" class="absolute bottom-[16px] w-full px-[20px]"
                                                    decoding="async" src="static/assets/images/top-flower.svg" />
                                            </div>
                                            <div class="card-back bg-lbd-blue h-full rounded-[20px] overflow-hidden">
                                                <div
                                                    class="image-container aspect-[3/2] w-[101%] overflow-hidden md:aspect-[16/10] lg:aspect-[160/117]">
                                                    <img alt="Changemakers" class="w-full h-full object-cover"
                                                        decoding="async" fetchpriority="high" height="234"
                                                        sizes="(max-width: 321px) 100vw, 321px"
                                                        src="static/assets/images/changemakers.png" width="321" />
                                                </div>
                                                <div
                                                    class="text-content p-[12px] md:p-[16px] lg:px-[16px] lg:py-[26px]">
                                                    <h3
                                                        class="text-center font-bnCringe text-[18px] leading-[22px] tracking-[-0.18px] text-white md:text-[20px] md:leading-[25px] md:tracking-[-0.3px] lg:text-[22px] lg:leading-[26px] lg:tracking-[-0.22px]">
                                                        Creatively confident by design
                                                    </h3>
                                                    <p
                                                        class="mt-[12px] text-center font-helvetica text-[13px] leading-[19px] text-white md:text-[14px] md:leading-[20px] lg:text-[18px] lg:leading-[26px]">
                                                        We nurture future-ready youths with design thinking as a
                                                        mindset, priming them to be courageous in tackling any
                                                        challenges.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="gl-b-rotating-carousel relative z-[2] bg-gradient-to-b from-white from-10% to-lbd-blue to-10% pb-[60px] transition-all duration-500 ease-linear md:pb-[170px]">
                        <svg class="shape-top absolute top-[-5.5%] z-[-1] w-full origin-bottom bg-gradient-to-b from-transparent to-white/[0.1] lg:top-[-9%]"
                            fill="none" height="10%" viewbox="0 0 1440 245" width="100%"
                            xmlns="http://www.w3.org/2000/svg">
                            <path class="transition-all duration-500 ease-linear"
                                d="M410.739 1907.79L352.676 1786C302.503 1680.59 205.192 1607.76 92.9094 1590.77L-37.1765 1571.14C-320.209 1528.66 -433.301 1168.95 -228.36 962.391L-134.286 867.508C-52.9568 785.572 -15.7316 667.423 -34.951 551.701L-57.2051 417.771C-105.557 126.242 190.423 -96.0979 443.514 41.6755L559.842 104.797C660.391 159.421 780.563 159.421 881.111 104.797L997.44 41.6755C1250.53 -95.8958 1546.51 126.444 1498.16 417.771L1475.9 551.701C1456.69 667.423 1493.91 785.572 1575.24 867.508L1669.31 962.391C1874.05 1168.75 1761.16 1528.46 1478.13 1571.14L1348.04 1590.77C1235.56 1607.56 1138.45 1680.59 1088.28 1786L1030.21 1907.79C903.568 2173.02 537.79 2173.02 411.346 1907.79H410.739Z"
                                fill="#2172B9">
                            </path>
                        </svg>
                        <div class="content relative z-[1] bg-lbd-blue md:pt-[40px] lg:pt-0">
                            <h2 class="visually-hidden">
                                How can you be involved!
                            </h2>
                            <div
                                class="heading-container overflow-hidden px-[30px] hidden lg:flex pb-[28px] md:px-[55px] w-full mx-auto justify-center [&amp;_svg_path]:translate-y-[-200%] [&amp;_svg]:w-full [&amp;_svg]:overflow-y-visible">
                                <svg fill="none" height="79" viewbox="0 0 1011 79" width="1011"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M994.292 39.1757C994.639 36.1766 995.067 33.1891 995.495 30.2016C995.911 27.2949 996.316 24.4689 996.732 21.5621C997.472 16.3946 998.374 11.2501 998.953 6.05945C999.311 2.40289 1001.38 0.638705 1005.04 1.49359C1005.68 1.66684 1006.42 1.69017 1007.04 1.94416C1008.61 2.4984 1009.59 3.70995 1009.67 5.4518C1009.73 6.20161 1009.61 7.00905 1009.51 7.73573C1008.02 18.1516 1006.53 28.4867 1005.04 38.9026C1004.93 39.71 1004.79 40.6789 1004.43 41.4516C1003.74 43.4124 1002.39 44.2079 1000.27 44.0687C999.378 43.9415 998.478 43.8951 997.682 43.6987C995.202 43.1787 994.015 41.6903 994.292 39.1757ZM999.353 48.1403C1002.1 48.5335 1003.26 50.1835 1002.93 53.1018C1002.95 53.517 1002.89 53.9208 1002.74 54.3937C1002.18 57.1965 1000.7 58.3034 997.862 57.9794C997.446 58.0024 996.974 57.8522 996.57 57.7944C996.085 57.725 995.682 57.6672 995.278 57.6094C993.086 57.3779 992.072 55.8319 992.257 53.9632C992.524 49.2223 993.482 47.1347 999.353 48.1403Z"
                                        fill="white">
                                    </path>
                                    <path
                                        d="M980.799 23.1392C980.496 28.5659 979.715 33.9518 979.332 39.3717C978.955 44.712 978.42 50.0387 977.964 55.3722C977.916 55.9294 977.869 56.4867 977.828 56.9643C977.463 60.3009 976.087 61.3861 972.896 61.1935C971.695 61.1711 970.515 60.9098 969.455 60.1777C969.157 59.9117 968.772 59.7184 968.395 59.4456C967.102 58.6135 965.742 58.5774 964.321 59.2578C963.239 59.7266 962.09 60.0294 960.935 60.4117C957.303 61.6248 953.655 61.1526 950.061 60.0436C946.315 58.8414 943.287 56.7383 940.739 53.714C933.089 44.7207 933.561 31.6908 941.919 23.0234C946.847 17.9117 953.28 15.8155 960.41 16.8259C962.705 17.1824 964.893 17.8506 966.595 19.5196C967.482 20.3972 968.642 20.8973 970.216 20.3102C970.757 18.6725 970.813 17.0736 970.956 15.4019C971.133 13.3322 971.23 11.2557 971.487 9.19276C971.85 6.81824 973.326 5.50102 975.728 5.54594C976.929 5.5684 978.123 5.67046 979.31 5.85212C980.888 6.14741 981.842 7.19112 981.865 8.79682C981.956 9.60647 981.801 10.4753 981.806 11.3578C981.466 15.338 980.973 19.225 980.799 23.1392ZM964.601 49.4188C966.975 46.9756 969.442 44.38 969.436 40.6909C969.8 38.3164 969.499 36.2059 968.793 34.1409C965.798 26.0267 956.528 23.7909 950.179 29.583C946.357 33.025 945.114 37.2488 946.37 42.2476C948.107 49.1317 952.932 51.7892 959.136 51.4375C961.147 51.3688 963.277 50.8293 964.601 49.4188Z"
                                        fill="white">
                                    </path>
                                    <path
                                        d="M931.683 38.2395C931.923 41.1157 930.565 42.7935 928.248 44.0718C927.769 44.3115 927.209 44.6311 926.49 44.9506C926.81 45.5898 926.89 45.8295 926.97 45.9893C929.846 48.5459 929.127 49.9041 927.529 52.1412C924.333 56.4555 920.338 59.5714 914.826 60.6899C909.792 61.7285 905.079 61.1693 900.445 59.1719C895.571 57.0147 892.216 53.2597 889.979 48.3861C888.541 45.2702 887.822 41.9146 887.981 38.5591C888.221 33.3659 889.819 28.4923 893.334 24.4976C897.489 19.5441 903.001 17.2272 909.313 16.7478C911.31 16.588 913.228 16.8277 915.145 17.387C920.099 18.7452 924.413 21.3018 927.449 25.4563C928.727 27.1341 929.686 29.2114 930.405 31.2088C931.284 33.4458 931.524 35.8426 931.683 38.2395ZM900.365 32.0876C899.886 33.2061 900.365 34.3246 901.483 34.8839C902.043 35.1236 902.762 35.4432 903.321 35.3633C906.277 34.7241 909.153 35.8426 912.109 35.4432C913.388 35.4432 914.746 35.603 916.024 35.4432C916.903 35.2834 917.942 34.8839 918.741 34.4045C919.779 33.7654 920.019 32.6469 919.46 31.5283C918.661 29.7706 917.302 28.4923 915.625 27.6135C911.151 25.5362 906.037 25.7759 901.963 29.6109C901.324 30.25 900.764 31.2088 900.365 32.0876ZM916.823 49.4247C918.82 47.9067 920.978 46.7083 923.374 45.7496C923.215 45.3501 923.135 44.9506 922.975 44.7909C922.655 44.4713 922.256 44.3115 921.856 44.2316C920.179 43.9919 918.581 43.8321 916.983 43.6723C916.344 43.5924 915.625 43.5125 915.065 43.6723C913.627 43.9919 912.269 43.912 910.831 43.6723C908.115 43.4326 905.398 43.3527 902.762 44.0718C900.924 44.4713 900.285 46.0692 901.324 47.5073C903.561 50.3835 906.677 51.5819 910.112 51.6618C912.509 51.7417 914.906 50.9427 916.823 49.4247Z"
                                        fill="white">
                                    </path>
                                    <path
                                        d="M885.496 16.0628C887.132 16.6077 887.716 18.1829 887.098 19.7326C886.588 20.9711 885.926 22.1159 885.344 23.2677C880.403 32.9389 875.456 42.6896 870.435 52.3538C870.241 52.7377 870.12 53.2082 869.925 53.5922C868.557 55.4769 866.794 56.3646 864.327 56.1476C861.78 55.9237 860.287 54.6695 859.268 52.5749C859.216 52.2495 859.165 51.9242 859.033 51.5918C856.105 42.0308 853.096 32.4627 850.174 22.822C849.532 21.0011 849.064 19.0351 848.501 17.2211C847.684 14.663 849.024 13.0966 851.447 12.9086C852.25 12.899 853.046 12.969 853.205 12.9829C857.336 13.4264 858.533 14.4139 859.519 17.7889C860.888 23.2026 862.343 28.5438 863.791 33.9645C864.04 34.7884 864.202 35.6848 864.537 36.4361C865.199 38.0183 866.943 38.2518 867.872 36.8096C868.413 36.1353 868.721 35.3604 869.117 34.513C871.315 29.5733 873.442 24.5471 875.72 19.6144C876.129 18.6078 876.77 17.7017 877.484 16.8822C878.011 16.3671 878.696 15.866 879.354 15.6832C881.407 15.1418 883.541 15.49 885.496 16.0628Z"
                                        fill="white">
                                    </path>
                                    <path
                                        d="M841.423 28.248C841.275 33.5341 842.169 38.8505 842.261 44.1252C842.319 47.0019 842.452 49.795 842.506 52.592C842.552 53.5496 842.681 54.5832 842.727 55.5409C842.803 58.8167 841.101 60.0178 838.867 60.1245C837.825 60.0943 836.871 60.2199 835.91 60.1858C833.748 60.1291 832.74 59.1374 832.478 56.9904C832.444 56.2721 832.406 55.4741 832.367 54.6761C832.173 50.6061 831.975 46.4563 831.776 42.3065C831.578 38.1567 831.38 34.0069 831.102 29.8609C831.041 28.5841 830.9 27.311 830.759 26.038C830.653 25.4832 830.546 24.9284 830.599 24.3659C830.892 22.1124 830.705 19.8817 830.275 17.5826C830.051 16.2336 830.381 14.7781 830.392 13.3378C830.316 11.7417 830.156 10.0696 830.16 8.46975C830.121 5.99202 831.105 4.82521 833.572 4.5474C834.685 4.41422 835.802 4.36085 836.847 4.47088C839.014 4.60735 839.781 5.61049 840.124 7.75374C840.675 10.9268 840.425 14.0582 840.653 17.1668C840.749 19.1619 841.08 21.0657 841.175 23.0608C841.335 24.7329 841.419 26.4885 841.423 28.248Z"
                                        fill="white">
                                    </path>
                                    <path
                                        d="M815.381 24.6462C821.613 28.8806 824.809 35.0325 824.889 42.7024C825.128 53.7279 817.459 62.9158 806.513 64.8332C805.235 65.0729 803.957 64.993 802.598 65.0729C791.014 65.2327 780.388 55.8051 780.468 42.7823C780.468 38.2283 781.666 33.8341 784.383 30.159C786.939 26.5637 790.295 23.8473 794.529 22.1695C801.959 19.3732 808.99 20.1721 815.381 24.6462ZM813.064 49.0141C815.142 45.0194 815.222 38.468 811.147 34.0738C807.152 29.6796 801.4 28.9605 796.926 31.9166C792.372 34.8727 790.215 39.4267 790.934 44.8596C791.813 50.8517 796.846 55.885 802.758 55.3258C806.673 55.8051 811.387 52.2898 813.064 49.0141Z"
                                        fill="white">
                                    </path>
                                    <path
                                        d="M778.668 20.6784C780.283 21.2826 780.809 22.878 780.135 24.4042C779.58 25.6232 778.877 26.7431 778.253 27.8729C772.962 37.3573 767.662 46.9211 762.293 56.3956C762.085 56.7722 761.946 57.238 761.738 57.6146C760.301 59.4481 758.508 60.2709 756.05 59.9641C753.513 59.6474 752.066 58.3395 751.125 56.2091C751.085 55.8821 751.045 55.555 750.926 55.2181C748.348 45.5566 745.691 35.8851 743.123 26.1443C742.548 24.3011 742.151 22.3193 741.655 20.486C740.931 17.8997 742.328 16.3833 744.756 16.2838C745.559 16.3035 746.352 16.4025 746.51 16.4223C750.623 17.0162 751.782 18.0467 752.645 21.4555C753.815 26.9155 755.075 32.3062 756.324 37.7762C756.542 38.6086 756.671 39.5103 756.979 40.2733C757.583 41.8786 759.318 42.1756 760.298 40.7683C760.863 40.1142 761.2 39.351 761.626 38.5186C764.004 33.6624 766.312 28.7171 768.768 23.8709C769.214 22.8798 769.888 21.9978 770.631 21.2049C771.176 20.7093 771.879 20.2335 772.543 20.0748C774.614 19.6088 776.735 20.0345 778.668 20.6784Z"
                                        fill="white">
                                    </path>
                                    <path
                                        d="M735.665 34.4857C735.665 41.5963 735.665 48.7069 735.665 55.8176C735.665 56.3768 735.665 56.8562 735.585 57.4154C735.345 59.0133 734.466 59.9721 732.789 60.052C731.271 60.1319 729.753 60.2118 728.235 60.052C726.557 59.8922 725.678 59.0133 725.438 57.3356C725.279 56.0572 725.279 54.699 725.279 53.4207C725.279 49.3461 725.279 45.3514 725.279 41.2767C725.279 39.6788 725.199 38.001 725.199 36.4031C725.119 34.4857 724.639 32.728 723.841 31.0502C721.683 26.4962 717.129 25.2179 712.895 27.9343C711.137 29.0528 710.099 30.6507 709.539 32.5682C708.98 34.5656 708.741 36.6428 708.741 38.7201C708.741 44.073 708.741 49.426 708.741 54.7789C708.741 55.1784 708.741 55.6578 708.741 56.0572C708.661 58.7737 707.622 59.8922 704.986 60.052C703.707 60.2118 702.429 60.1319 701.071 60.052C699.473 59.8922 698.514 58.8536 698.354 57.2557C698.354 56.6964 698.354 56.1371 698.354 55.6578C698.354 50.145 698.354 44.7122 698.354 39.2794C698.354 34.246 698.274 29.2126 698.354 24.1793C698.354 23.4602 698.354 22.6613 698.354 21.8623C698.274 19.6253 699.952 18.4268 701.79 18.1872C703.148 18.0274 704.666 17.9475 705.944 18.5866C708.181 19.7851 710.338 19.3856 712.575 18.4268C713.614 18.0274 714.812 17.6279 715.931 17.3882C722.642 15.8702 727.915 18.4268 732.149 23.4602C733.108 24.5787 733.747 26.0967 734.307 27.4549C735.106 29.692 735.665 32.0888 735.665 34.4857Z"
                                        fill="white">
                                    </path>
                                    <path
                                        d="M691.655 51.0146C692.016 52.3456 691.987 53.7922 692.197 55.2172C692.312 56.4903 692.016 57.6404 691.22 58.5951C690.865 59.1086 690.272 59.6438 689.715 59.6943C688.138 59.998 686.482 60.3088 684.862 60.135C683.241 59.9612 682.084 58.7025 681.933 57.0316C681.629 53.6897 681.007 50.3768 681.261 46.9844C681.29 46.4202 681.247 45.9428 681.117 45.393C680.892 43.8089 680.502 42.1597 680.358 40.5683C679.874 35.2373 679.39 29.9063 678.913 24.6548C678.833 23.7796 678.754 22.9043 678.834 22.0147C679.109 19.7434 680.519 18.4922 682.357 18.4056C683.319 18.3985 684.346 18.2251 685.308 18.2179C687.246 18.3628 688.548 19.448 688.96 21.3359C689.221 22.4354 689.322 23.5494 689.416 24.5838C690.015 31.1878 690.615 37.7919 691.222 44.4756C691.337 45.7487 691.38 47.1086 692.661 47.955C691.966 49.1412 691.387 49.8355 691.655 51.0146ZM683.891 14.0948C678.668 14.8898 677.403 12.4376 677.483 8.01801C677.526 6.73048 678.988 5.15379 680.319 4.79229C680.868 4.66215 681.425 4.61159 681.425 4.61159C682.3 4.53213 682.619 4.50323 682.937 4.47433C686.055 4.35174 687.624 5.73349 687.978 8.74983C688.231 11.5347 686.661 13.6828 683.891 14.0948Z"
                                        fill="white">
                                    </path>
                                    <path
                                        d="M646.458 47.6812C648.602 47.6709 649.786 48.601 650.122 50.7057C650.278 52.0069 650.344 53.2365 650.49 54.4564C650.598 55.351 650.188 56.0603 649.495 56.4736C648.344 57.1895 647.072 57.59 645.68 57.6749C644.857 57.6913 643.952 57.7176 643.048 57.7438C637.277 57.7777 632.735 55.6838 629.874 50.4177C628.696 48.1669 627.843 45.8769 627.622 43.3461C627.367 41.2316 627.113 39.1172 626.859 37.0027L626.778 37.0125C626.504 34.7354 626.24 32.5396 625.976 30.3439C625.917 29.8559 625.849 29.2866 625.79 28.7987C625.363 26.6225 624.179 25.6924 622.045 25.784C621.385 25.7809 620.662 25.9502 619.921 25.9569C618.509 25.8792 617.272 25.2028 616.852 23.7683C616.322 22.0996 616.107 20.3104 616.552 18.5244C616.831 17.4183 617.485 16.6797 618.695 16.4517C619.427 16.3637 621.623 16.0996 622.345 15.9303C624.42 15.3508 624.144 13.734 623.645 11.6489C623.206 10.0518 623.498 8.3666 623.211 6.66856C623.075 5.53001 624.148 4.16346 625.358 3.93546C626.883 3.58702 628.51 3.39144 630.065 3.28697C631.792 3.24427 632.905 4.26547 633.273 5.95374C633.582 7.15405 633.658 8.46503 633.804 9.6849C634.183 13.5169 634.3 14.4928 638.203 14.0235C639.352 13.9679 641.538 13.6226 642.686 13.567C644.322 13.4527 645.598 14.4544 645.875 16.0711C646.083 17.1185 646.21 18.1758 646.256 19.2428C646.52 21.4385 645.671 22.6131 643.505 23.1211C643.027 23.2611 642.457 23.3295 641.969 23.3882C640.994 23.5056 640.008 23.5416 639.042 23.7402C637.009 23.9847 635.74 23.7248 635.74 25.7872C635.77 26.0312 635.809 26.3565 635.838 26.6005C636.337 30.748 636.94 36.4505 637.52 40.5883C637.758 41.8798 638.158 43.1516 638.721 44.4039C639.838 46.8272 642.079 47.6302 644.578 47.8248C645.238 47.8279 645.879 47.6683 646.458 47.6812Z"
                                        fill="white">
                                    </path>
                                    <path
                                        d="M617.49 36.8205C618.515 39.5965 617.632 41.626 615.693 43.5234C615.285 43.8915 614.82 44.3604 614.197 44.873C614.688 45.417 614.833 45.6319 614.955 45.7679C618.497 47.5063 618.159 49.0451 617.192 51.6928C615.216 56.8304 612.123 61.0027 606.983 63.6173C602.294 66.0217 597.484 66.7599 592.359 66.0554C586.953 65.2587 582.609 62.4676 579.065 58.2651C576.791 55.5804 575.161 52.462 574.4 49.103C573.215 43.9066 573.459 38.654 575.839 33.7447C578.587 27.7131 583.399 23.9144 589.504 21.7125C591.433 21.0077 593.393 20.7195 595.441 20.747C600.707 20.7325 605.669 22.0771 609.807 25.3504C611.529 26.658 613.045 28.4477 614.302 30.2242C615.783 32.1938 616.676 34.4962 617.49 36.8205ZM584.863 39.3183C584.696 40.5547 585.476 41.5285 586.734 41.7748C587.352 41.8584 588.15 41.9773 588.681 41.7452C591.426 40.3043 594.574 40.6218 597.386 39.4176C598.649 39.0676 600.034 38.8536 601.253 38.3457C602.078 37.9471 602.995 37.2681 603.653 36.5757C604.504 35.6598 604.435 34.4891 603.576 33.5371C602.305 32.0193 600.613 31.1283 598.715 30.7194C593.726 29.8922 588.739 31.5292 585.764 36.4338C585.307 37.2403 585.017 38.3406 584.863 39.3183ZM605.871 51.9405C607.429 49.8938 609.232 48.1191 611.338 46.5156C611.07 46.1647 610.882 45.7919 610.68 45.6778C610.277 45.4495 609.839 45.401 609.422 45.4315C607.699 45.6541 606.076 45.9338 604.454 46.2135C603.801 46.3095 603.068 46.4275 602.56 46.7385C601.226 47.448 599.862 47.741 598.376 47.898C595.627 48.405 592.921 49.0699 590.513 50.5023C588.807 51.4001 588.613 53.1538 590.033 54.2902C593.031 56.5193 596.437 56.8502 599.853 55.9884C602.243 55.411 604.393 53.9653 605.871 51.9405Z"
                                        fill="white">
                                    </path>
                                    <path
                                        d="M569.684 32.8499C569.318 36.8476 569.033 40.8545 568.586 44.8431C568.157 48.6689 567.574 52.3951 566.91 56.1121C566.082 60.5526 564.694 64.8478 561.597 68.2095C557.748 72.3937 553.087 75.003 547.334 75.5941C545.163 75.8452 542.856 75.8337 540.658 75.5873C533.558 74.9558 528.107 71.3772 524.16 65.4122C523.664 64.6971 523.267 63.8283 523.032 62.9778C522.564 61.2767 523.724 59.0166 526.148 59.4532C528.011 59.7446 529.865 60.1174 531.728 60.4087C533.093 60.7267 534.16 61.5058 535.127 62.4384C537.061 64.3038 539.321 65.4639 541.907 65.9189C545.859 66.6918 549.478 66.0262 552.511 63.2342C553.245 62.5746 553.761 61.6435 554.187 60.7846C554.405 60.3144 554.306 59.7264 554.198 59.2197C554.027 58.5411 552.996 58.1783 552.543 58.5396C551.91 59.0455 551.348 59.6419 550.515 60.4552C545.034 60.0877 539.607 59.9736 534.752 56.9565C531.67 55.0447 529.121 52.7807 527.089 49.5855C525.057 46.3904 523.795 42.9518 523.464 39.288C522.749 30.9654 525.515 23.9399 532.512 18.8725C532.874 18.5834 533.227 18.3758 533.589 18.0867C536.695 15.3853 540.486 14.6565 544.466 14.4435C548.934 14.2852 553.112 15.2483 556.773 17.8844C558.518 19.2339 560.426 19.1183 562.173 18.2427C564.001 17.3762 565.71 17.5679 567.402 17.9224C569.816 18.4405 571.036 20.0609 570.762 22.5029C570.451 26.0122 569.986 29.4219 569.684 32.8499ZM555.089 46.1318C558.368 41.8838 559.404 37.0545 557.338 31.9598C555.47 27.2994 551.909 24.5097 546.898 24.3598C540.231 24.2716 535.288 28.6626 534.087 35.6988C533.805 37.4805 534.146 39.5794 534.832 41.552C536.157 45.9043 539.112 48.9557 543.624 49.8739C547.974 50.7739 552.209 49.7651 555.089 46.1318Z"
                                        fill="white">
                                    </path>
                                    <path
                                        d="M486.207 32.0946C487.132 39.1449 488.056 46.1952 488.981 53.2455C489.053 53.8 489.116 54.2753 489.109 54.8402C489.079 56.4557 488.333 57.5205 486.68 57.8179C485.185 58.0945 483.69 58.371 482.164 58.41C480.48 58.4697 479.494 57.7125 479.038 56.0802C478.714 54.8335 478.537 53.4868 478.371 52.2193C477.841 48.1793 477.322 44.2184 476.792 40.1784C476.584 38.5941 476.287 36.9409 476.079 35.3566C475.751 33.4658 475.047 31.7853 474.037 30.2257C471.306 25.9908 466.624 25.3154 462.779 28.5593C461.182 29.8968 460.36 31.6162 460.054 33.5901C459.76 35.6432 459.792 37.734 460.062 39.7937C460.758 45.1012 461.454 50.4087 462.15 55.7162C462.202 56.1123 462.264 56.5876 462.316 56.9837C462.59 59.6874 461.706 60.9315 459.112 61.4327C457.866 61.7573 456.588 61.8443 455.231 61.9417C453.626 61.991 452.54 61.0858 452.174 59.5223C452.101 58.9677 452.029 58.4132 451.966 57.9379C451.249 52.472 450.543 47.0853 449.837 41.6985C449.182 36.7079 448.449 31.7276 447.874 26.7266C447.78 26.0136 447.676 25.2215 447.572 24.4293C447.202 22.2216 448.71 20.8153 450.501 20.3387C451.827 20.0037 453.321 19.7271 454.672 20.1946C457.046 21.092 459.133 20.4155 461.226 19.174C462.204 18.6429 463.34 18.091 464.418 17.708C470.875 15.3303 476.436 17.1797 481.288 21.6198C482.384 22.6042 483.215 24.0262 483.947 25.3002C485.03 27.4144 485.896 29.7181 486.207 32.0946Z"
                                        fill="white">
                                    </path>
                                    <path
                                        d="M441.058 45.0104C440.711 48.9131 440.364 52.8158 439.938 56.7082C439.711 58.4512 439.325 60.1735 439.019 61.9062C438.541 64.3415 436.75 65.7197 434.325 65.1623C433.068 64.918 431.872 64.1983 430.736 63.6475C430.123 63.4065 429.62 62.9381 429.106 62.549C427.911 61.8294 426.643 61.6643 425.372 62.1434C423.337 62.9257 421.232 63.6186 419.042 63.7361C409.842 64.4719 402.039 59.4274 399.009 51.1371C398.072 48.4368 397.045 45.8055 397.675 42.8258C397.878 41.8854 397.368 40.8522 397.491 39.9015C397.948 33.9183 400.403 28.6786 404.794 24.6579C408.02 21.5331 412.081 20.0476 416.573 19.585C421.798 19.0569 426.3 20.3682 430.286 23.7877C431.816 25.0343 433.49 25.1717 435.15 24.1794C436.72 23.2559 438.367 22.9868 440.168 23.3826C442.366 23.8299 443.627 25.2832 443.417 27.5118C443.328 29.4339 442.991 31.4042 442.743 33.3056C442.485 35.2863 442.228 37.2669 441.98 39.1683C441.643 41.1387 441.474 43.0504 441.217 45.0311C441.137 45.0207 441.137 45.0207 441.058 45.0104ZM429.492 49.0637C430.853 46.6626 431.679 44.0308 431.633 41.2855C431.384 33.9212 426.071 28.3148 417.622 29.4705C415.986 29.6603 414.536 30.2772 413.193 31.3109C409.969 33.7916 408.417 37.0539 407.822 41.0049C406.848 47.2431 412.154 54.1378 418.02 54.2571C422.684 54.945 427.392 52.8187 429.492 49.0637Z"
                                        fill="white">
                                    </path>
                                    <path
                                        d="M389.028 49.5076C390.569 49.9619 391.194 51.3813 390.426 52.8622C390.259 53.3183 389.919 53.8232 389.609 54.1711C383.842 60.1536 376.986 62.4336 368.808 60.9665C359.579 59.4632 352.05 51.1262 351.071 41.2645C350.323 34.0486 352.704 27.913 357.949 22.9701C359.827 21.2115 362.117 19.856 364.519 18.7657C365.142 18.4773 365.953 18.0615 366.596 18.1019C369.575 18.2593 372.14 16.3055 375.216 16.8066C378.435 17.4159 381.609 18.2607 384.462 19.9393C388.703 22.4498 391.857 25.9743 393.66 30.6252C393.997 31.4209 394.241 32.2802 394.407 33.1247C394.595 34.7053 393.371 36.0185 391.865 35.8146C389.794 35.5853 387.753 35.1989 385.85 34.5133C383.947 33.8278 382.708 32.2109 381.641 30.5453C380.686 29.1449 379.437 28.0138 377.912 27.4811C373.051 25.6665 367.98 26.2515 364.562 30.5644C361.158 34.7989 360.423 39.5386 362.373 44.7051C363.662 48.2018 366.52 50.2878 369.885 51.4127C372.401 52.2956 375.076 51.9077 377.508 50.6604C378.053 50.3571 378.613 49.9752 379.158 49.6719C381.06 48.6495 383.029 48.1278 385.197 48.7009C386.438 49.0172 387.802 49.1128 389.028 49.5076Z"
                                        fill="white">
                                    </path>
                                    <path
                                        d="M313.141 19.8444C313.429 21.6611 313.636 23.4869 313.853 25.3921C314.63 32.2189 315.408 39.0458 316.185 45.8726C316.402 47.7778 316.627 49.7624 316.765 51.6766C316.837 52.3116 316.919 53.0261 316.911 53.6702C316.942 55.3552 316.558 56.9268 314.762 58.0962C312.53 58.2698 310.378 58.4344 308.223 57.8756C306.573 57.5006 304.951 58.0873 303.612 59.0438C301.217 60.603 298.624 61.1394 295.837 61.3763C288.842 62.0921 281.049 57.9133 278.996 49.0606C277.201 41.063 276.826 32.8234 275.746 24.7445C275.314 21.6576 277.197 19.8351 279.914 19.6866C280.558 19.6937 281.184 19.542 281.828 19.5491C284.069 19.4549 285.563 20.5714 285.984 22.8554C286.065 23.5698 286.156 24.3636 286.246 25.1574C286.671 28.8884 287.184 32.6897 287.538 36.5091C287.723 39.5437 288.463 42.515 289.283 45.4773C289.88 47.902 291.227 49.8394 293.603 50.9359C297.852 52.9449 303.042 50.5047 304.212 45.9489C305.007 43.044 304.991 40.0708 304.656 37.1336C304.114 32.3707 303.572 27.6078 303.03 22.8449C302.93 21.9717 302.831 21.0985 302.811 20.2162C302.877 18.6808 303.923 17.2752 305.484 16.8563C306.666 16.6414 307.847 16.4265 309.056 16.4497C311.306 16.4348 312.721 17.5604 313.141 19.8444Z"
                                        fill="white">
                                    </path>
                                    <path
                                        d="M262.35 22.697C268.582 26.9314 271.778 33.0833 271.857 40.7532C272.097 51.7787 264.427 60.9666 253.482 62.884C252.204 63.1237 250.925 63.0438 249.567 63.1237C237.982 63.2835 227.357 53.8559 227.436 40.8331C227.436 36.2791 228.635 31.8849 231.351 28.2097C233.908 24.6145 237.263 21.8981 241.498 20.2203C248.928 17.424 255.959 18.2229 262.35 22.697ZM260.033 47.0649C262.11 43.0701 262.19 36.5188 258.116 32.1246C254.121 27.7304 248.369 27.0113 243.895 29.9674C239.341 32.9235 237.184 37.4775 237.903 42.9104C238.781 48.9025 243.815 53.9358 249.727 53.3766C253.642 53.8559 258.355 50.3406 260.033 47.0649Z"
                                        fill="white">
                                    </path>
                                    <path
                                        d="M226.646 17.6776C227.591 18.729 228.001 19.4896 227.302 20.9488C226.815 21.8661 226.393 22.95 225.906 23.8673C224.074 27.1463 222.17 30.3383 220.426 33.5452C218.398 37.207 216.529 40.8838 214.58 44.553C210.517 51.9562 206.446 59.439 202.375 66.9217C201.692 68.2219 200.713 69.2536 199.524 69.9448C197.243 71.1755 194.806 70.6264 192.544 69.9332C191.533 69.5977 190.986 68.5835 191.169 67.4773C191.259 66.5228 191.507 65.5831 191.907 64.7379C193.282 62.058 194.569 59.4503 196.167 56.9519C198.128 54.0059 198.158 51.1199 197.096 47.891C195.848 44.0829 194.686 40.2026 193.525 36.3224C191.819 30.5456 190.106 24.8483 188.479 19.0789C188.236 18.2537 187.999 17.3489 188.081 16.4739C188.086 14.7089 189.224 13.6921 190.989 13.6969C191.626 13.7565 192.262 13.8161 192.978 13.8831C192.985 13.8035 192.993 13.724 193 13.6444C194.33 14.0097 195.747 14.3029 196.968 14.9789C198.275 15.5828 199.046 16.7784 199.469 18.2623C200.384 22.1998 201.386 26.0651 202.381 30.0099C202.789 31.653 203.269 33.3831 203.756 35.0336C203.878 35.4462 204 35.8589 204.201 36.279C204.957 37.6336 206.787 37.8049 207.709 36.5271C208.072 36.0796 208.355 35.6247 208.566 35.0828C210.654 30.7846 212.741 26.4864 214.757 22.1012C215.237 21.2634 215.644 20.3386 216.124 19.5009C217.076 17.9049 218.301 16.816 220.369 17.0096C221.483 17.1139 222.713 16.8279 223.921 16.7805C224.891 16.7108 225.838 16.8797 226.646 17.6776Z"
                                        fill="white">
                                    </path>
                                    <path
                                        d="M156.528 25.5064C157.38 26.4392 157.52 27.6187 156.689 28.7399C155.017 31.3895 153.327 34.1171 151.576 36.7489C148.399 41.6766 145.203 46.6822 142.104 51.6278C140.826 53.63 139.607 55.728 138.329 57.7302C136.92 59.9483 135.408 61.897 132.139 62.2138C129.467 61.356 128.362 59.3816 128.267 56.5733C128.176 51.9624 127.815 47.4537 127.55 42.885C127.47 41.8013 127.408 40.6396 127.059 39.6581C126.584 38.1558 124.99 37.9549 123.908 39.1005C123.568 39.5142 123.287 40.0237 123.024 40.4553C121.341 43.5122 119.579 46.5512 117.974 49.6259C117.448 50.4891 117.078 51.388 116.648 52.1912C116.087 53.2101 115.544 54.1512 114.94 54.9966C113.602 56.9031 112.082 57.4565 110.153 56.9328C108.146 56.3912 107.054 55.0756 106.781 53.046C106.49 51.0942 106.2 49.1425 105.987 47.2086C104.803 37.3477 103.541 27.469 102.357 17.6082C102.308 17.1052 102.277 16.5244 102.324 15.9614C102.59 13.7273 103.887 12.7131 106.104 13.0568C107.601 13.3178 109.099 13.5787 110.454 14.4628C111.472 15.024 112.186 15.8432 112.422 16.9626C112.615 17.9085 112.808 18.8543 112.828 19.8424C113.122 23.9259 113.399 28.0874 113.675 32.2488C113.73 33.0811 113.846 34.0091 114.074 34.7992C114.448 36.0322 116.179 36.3467 116.992 35.3034C117.577 34.5359 118.103 33.6727 118.55 32.7917C120.586 28.9138 122.604 25.1138 124.717 21.2538C126.138 18.6285 129.454 17.7487 132.079 19.1695C133.806 20.2206 134.593 21.7943 134.632 23.7703C134.782 27.411 134.871 30.956 135.021 34.5967C135.023 35.6626 135.007 36.8064 135.087 37.8902C135.117 38.471 135.286 39.1654 135.473 39.7818C135.9 40.7812 137.224 41.0844 137.965 40.3526C138.611 39.6808 139.214 38.8354 139.722 38.0501C140.922 36.03 141.949 34.0522 143.149 32.0321C144.254 30.0721 145.514 28.1477 146.636 26.1098C147.741 24.1497 149.315 23.3626 151.531 23.7063C152.561 23.8603 153.705 23.8763 154.699 24.1861C155.382 24.4245 156.09 24.9143 156.528 25.5064Z"
                                        fill="white">
                                    </path>
                                    <path
                                        d="M85.6367 20.7439C91.8685 24.9783 95.0642 31.1302 95.1441 38.8001C95.3838 49.8255 87.714 59.0134 76.7685 60.9309C75.4902 61.1706 74.2119 61.0907 72.8537 61.1706C61.2691 61.3304 50.6432 51.9028 50.7231 38.88C50.7231 34.326 51.9215 29.9318 54.6379 26.2566C57.1945 22.6613 60.5501 19.9449 64.7844 18.2671C72.2146 15.4708 79.2452 16.2698 85.6367 20.7439ZM83.3198 45.1118C85.3971 41.117 85.477 34.5657 81.4024 30.1714C77.4077 25.7772 71.6553 25.0582 67.1813 28.0143C62.6273 30.9704 60.4702 35.5244 61.1892 40.9572C62.068 46.9493 67.1014 51.9827 73.0135 51.4234C76.9283 51.9028 81.642 48.3874 83.3198 45.1118Z"
                                        fill="white">
                                    </path>
                                    <path
                                        d="M44.0187 29.863C44.8558 37.2459 45.6928 44.6288 46.6093 52.0027C46.7533 53.2729 46.9063 54.6225 46.3268 55.8943C45.8177 57.0777 45.1049 57.8822 43.7553 58.0352C42.4852 58.1792 41.1446 58.4116 39.8565 58.3968C37.686 58.4017 36.6164 57.4777 36.3734 55.3342C35.79 50.8976 35.286 46.452 34.7819 42.0064C34.6829 41.1331 34.6633 40.2509 34.4849 39.3866C34.0488 37.6671 32.7934 36.523 31.0813 36.3151C30.6753 36.2807 30.19 36.2553 29.7931 36.3003C27.094 36.6063 24.3859 36.8329 21.6868 37.139C20.7342 37.247 19.7905 37.4344 18.8379 37.5424C16.4474 37.733 15.2148 38.918 15.0699 41.1858C15.0625 41.8299 15.1345 42.465 15.2065 43.1001C15.6656 47.1488 16.1156 51.1181 16.5746 55.1668C16.7186 56.437 16.951 57.7775 16.4509 59.0403C15.9599 60.3825 15.1856 61.3548 13.6773 61.5258C12.3277 61.6788 10.9078 61.9202 9.45188 61.844C7.6694 61.7245 6.59077 60.7211 6.55153 58.9566C6.41166 55.5954 5.63672 52.3062 5.17931 48.981C4.57052 45.0297 4.50842 40.936 3.89963 36.9847C3.65824 35.5647 3.50523 34.2152 3.26383 32.7952C2.94144 30.6608 2.45127 28.465 2.37603 26.3829C2.33355 23.1715 1.90315 20.0844 1.54313 16.909C1.21173 14.6952 1.0301 12.384 0.848473 10.0728C0.684845 7.92036 1.60885 6.85071 3.74325 6.52831C4.92503 6.31392 6.11581 6.17891 7.31559 6.12329C8.98268 5.93428 10.1137 6.69052 10.6816 8.15385C11.1432 9.38803 11.455 10.7196 11.599 11.9898C12.0294 15.0768 12.3894 18.2523 12.7494 21.4277C12.8394 22.2216 12.859 23.1038 13.0374 23.9681C13.4752 26.411 14.9074 27.696 17.3773 27.4963C21.1174 27.1527 24.9279 26.7207 28.7204 26.1299C31.4899 25.7355 32.6775 24.1535 32.4418 21.366C32.0532 17.2289 31.5058 13.1098 31.0377 8.98177C30.9387 8.10852 30.8397 7.23527 30.8291 6.43241C30.7809 4.58853 31.7049 3.51889 33.354 3.17111C34.6855 2.85932 35.9557 2.71531 37.3232 2.72108C39.3169 2.57545 40.8194 3.77201 41.2122 5.81804C41.3816 6.60291 41.4626 7.31738 41.5526 8.11124C42.3717 15.3354 43.1997 22.6389 44.0187 29.863Z"
                                        fill="white">
                                    </path>
                                </svg>
                            </div>
                            <div
                                class="heading-container-mobile overflow-hidden hidden px-[30px] pt-[40px] pb-[28px] md:px-[55px] w-full block mx-auto justify-center [&amp;_svg_path]:translate-y-[-200%] [&amp;_svg]:w-full [&amp;_svg]:overflow-visible">
                                <svg fill="none" height="104" viewbox="0 0 445 104" width="445"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M329.779 85.5269C330.027 83.3883 330.332 81.2578 330.637 79.1274C330.934 77.0545 331.223 75.0393 331.519 72.9664C332.047 69.2813 332.69 65.6128 333.103 61.9112C333.359 59.3036 334.831 58.0456 337.447 58.6552C337.9 58.7788 338.426 58.7954 338.87 58.9765C339.989 59.3717 340.688 60.2357 340.745 61.4779C340.786 62.0126 340.703 62.5884 340.629 63.1066C339.565 70.5343 338.51 77.9044 337.446 85.3322C337.364 85.908 337.265 86.5989 337.01 87.15C336.515 88.5482 335.553 89.1155 334.039 89.0162C333.406 88.9255 332.764 88.8924 332.197 88.7524C330.428 88.3816 329.581 87.3201 329.779 85.5269ZM333.388 91.9198C335.346 92.2002 336.177 93.3768 335.937 95.4579C335.954 95.754 335.912 96.0419 335.805 96.3791C335.402 98.3779 334.348 99.1673 332.325 98.9362C332.029 98.9526 331.691 98.8455 331.403 98.8043C331.058 98.7548 330.77 98.7136 330.482 98.6723C328.919 98.5073 328.196 97.4047 328.328 96.0722C328.518 92.6914 329.202 91.2027 333.388 91.9198Z"
                                        fill="white">
                                    </path>
                                    <path
                                        d="M320.159 74.0963C319.943 77.9662 319.386 81.8069 319.113 85.672C318.844 89.4802 318.462 93.2788 318.137 97.0822C318.103 97.4796 318.069 97.8769 318.04 98.2175C317.78 100.597 316.799 101.371 314.523 101.233C313.667 101.217 312.825 101.031 312.069 100.509C311.856 100.319 311.582 100.182 311.313 99.987C310.392 99.3936 309.422 99.3679 308.408 99.8531C307.636 100.187 306.817 100.403 305.993 100.676C303.403 101.541 300.802 101.204 298.239 100.413C295.568 99.5561 293.409 98.0564 291.591 95.8997C286.135 89.4864 286.472 80.1945 292.433 74.0137C295.947 70.3685 300.535 68.8736 305.619 69.5942C307.256 69.8484 308.816 70.3249 310.03 71.515C310.663 72.1409 311.49 72.4976 312.612 72.0788C312.998 70.911 313.038 69.7708 313.14 68.5787C313.266 67.1027 313.335 65.6219 313.518 64.1508C313.778 62.4575 314.83 61.5182 316.543 61.5502C317.399 61.5662 318.251 61.639 319.097 61.7686C320.223 61.9791 320.903 62.7234 320.919 63.8685C320.984 64.4459 320.874 65.0654 320.877 65.6947C320.635 68.5331 320.283 71.305 320.159 74.0963ZM308.608 92.8367C310.301 91.0944 312.06 89.2434 312.056 86.6127C312.315 84.9194 312.101 83.4143 311.597 81.9418C309.462 76.1554 302.85 74.561 298.323 78.6915C295.597 81.146 294.711 84.1581 295.607 87.7228C296.846 92.6319 300.286 94.5271 304.711 94.2763C306.144 94.2273 307.664 93.8425 308.608 92.8367Z"
                                        fill="white">
                                    </path>
                                    <path
                                        d="M285.131 84.8685C285.301 86.9196 284.333 88.1161 282.681 89.0277C282.339 89.1986 281.94 89.4265 281.427 89.6544C281.655 90.1102 281.712 90.2811 281.769 90.395C283.82 92.2182 283.307 93.1868 282.168 94.7821C279.889 97.8587 277.04 100.081 273.109 100.878C269.52 101.619 266.158 101.22 262.854 99.7958C259.378 98.2575 256.985 95.5797 255.39 92.1043C254.364 89.8823 253.852 87.4894 253.966 85.0964C254.136 81.3931 255.276 77.9177 257.783 75.069C260.745 71.5366 264.677 69.8843 269.178 69.5425C270.602 69.4285 271.969 69.5994 273.337 69.9983C276.869 70.9668 279.946 72.79 282.111 75.7527C283.023 76.9491 283.706 78.4305 284.219 79.8548C284.846 81.4501 285.017 83.1593 285.131 84.8685ZM262.797 80.4815C262.455 81.2792 262.797 82.0768 263.594 82.4756C263.993 82.6465 264.506 82.8744 264.905 82.8175C267.013 82.3617 269.064 83.1593 271.172 82.8744C272.083 82.8744 273.052 82.9884 273.964 82.8744C274.59 82.7605 275.331 82.4756 275.901 82.1338C276.641 81.678 276.812 80.8803 276.413 80.0827C275.844 78.8293 274.875 77.9177 273.679 77.291C270.488 75.8096 266.842 75.9806 263.936 78.7153C263.48 79.1711 263.081 79.8548 262.797 80.4815ZM274.533 92.8449C275.958 91.7624 277.496 90.9078 279.205 90.2241C279.091 89.9393 279.034 89.6544 278.92 89.5404C278.692 89.3125 278.408 89.1986 278.123 89.1416C276.926 88.9707 275.787 88.8567 274.647 88.7428C274.191 88.6858 273.679 88.6288 273.28 88.7428C272.254 88.9707 271.286 88.9137 270.26 88.7428C268.323 88.5719 266.386 88.5149 264.506 89.0277C263.195 89.3125 262.74 90.452 263.48 91.4776C265.076 93.5286 267.298 94.3832 269.747 94.4402C271.457 94.4972 273.166 93.9275 274.533 92.8449Z"
                                        fill="white">
                                    </path>
                                    <path
                                        d="M252.192 69.0524C253.359 69.441 253.775 70.5642 253.334 71.6694C252.971 72.5525 252.499 73.3689 252.083 74.1903C248.56 81.087 245.032 88.0404 241.452 94.9321C241.313 95.2059 241.226 95.5414 241.088 95.8152C240.112 97.1592 238.855 97.7923 237.096 97.6376C235.28 97.4779 234.214 96.5835 233.488 95.0897C233.451 94.8577 233.414 94.6257 233.321 94.3887C231.232 87.5706 229.087 80.7474 227.003 73.8725C226.545 72.574 226.211 71.1719 225.81 69.8784C225.227 68.0541 226.183 66.9371 227.91 66.8031C228.483 66.7962 229.051 66.8461 229.164 66.8561C232.11 67.1723 232.964 67.8765 233.667 70.2833C234.643 74.1439 235.681 77.9528 236.714 81.8184C236.891 82.4059 237.006 83.0452 237.245 83.5809C237.718 84.7092 238.961 84.8757 239.624 83.8473C240.009 83.3664 240.229 82.8138 240.511 82.2095C242.079 78.6869 243.596 75.1027 245.22 71.5851C245.512 70.8672 245.969 70.2211 246.478 69.6367C246.854 69.2694 247.343 68.912 247.812 68.7817C249.276 68.3956 250.798 68.6439 252.192 69.0524Z"
                                        fill="white">
                                    </path>
                                    <path
                                        d="M220.764 77.7378C220.659 81.5074 221.296 85.2986 221.362 89.06C221.403 91.1115 221.498 93.1033 221.536 95.0979C221.569 95.7808 221.661 96.5179 221.694 97.2008C221.749 99.5368 220.535 100.393 218.941 100.469C218.199 100.448 217.518 100.537 216.833 100.513C215.291 100.473 214.573 99.7656 214.385 98.2344C214.361 97.7223 214.334 97.1532 214.306 96.5841C214.168 93.6817 214.026 90.7224 213.885 87.7631C213.744 84.8038 213.602 81.8446 213.404 78.888C213.36 77.9774 213.26 77.0696 213.16 76.1618C213.084 75.7661 213.008 75.3705 213.046 74.9694C213.254 73.3623 213.121 71.7716 212.814 70.1321C212.654 69.1701 212.89 68.1321 212.898 67.105C212.844 65.9668 212.73 64.7745 212.732 63.6336C212.705 61.8667 213.407 61.0346 215.165 60.8365C215.959 60.7415 216.756 60.7034 217.501 60.7819C219.046 60.8792 219.594 61.5946 219.838 63.123C220.231 65.3857 220.053 67.6188 220.215 69.8356C220.283 71.2583 220.519 72.616 220.587 74.0387C220.701 75.2311 220.761 76.4831 220.764 77.7378Z"
                                        fill="white">
                                    </path>
                                    <path
                                        d="M202.196 75.1683C206.64 78.1879 208.919 82.5749 208.976 88.0445C209.147 95.9069 203.677 102.459 195.872 103.826C194.96 103.997 194.049 103.94 193.08 103.997C184.819 104.111 177.241 97.3882 177.298 88.1014C177.298 84.8539 178.153 81.7203 180.09 79.0995C181.913 76.5357 184.306 74.5985 187.326 73.4021C192.624 71.408 197.638 71.9777 202.196 75.1683ZM200.544 92.5454C202.025 89.6967 202.082 85.0248 199.176 81.8912C196.328 78.7577 192.226 78.2449 189.035 80.3529C185.787 82.461 184.249 85.7085 184.762 89.5828C185.389 93.8558 188.978 97.4452 193.194 97.0464C195.986 97.3882 199.347 94.8814 200.544 92.5454Z"
                                        fill="white">
                                    </path>
                                    <path
                                        d="M176.011 72.3326C177.163 72.7635 177.538 73.9012 177.057 74.9895C176.662 75.8588 176.16 76.6574 175.715 77.4631C171.942 84.2266 168.163 91.0467 164.333 97.8031C164.185 98.0717 164.086 98.4038 163.938 98.6724C162.913 99.9799 161.634 100.567 159.882 100.348C158.073 100.122 157.041 99.1894 156.369 97.6701C156.341 97.4369 156.313 97.2037 156.228 96.9635C154.389 90.0736 152.494 83.1768 150.663 76.2304C150.253 74.916 149.97 73.5027 149.616 72.1954C149.1 70.3511 150.096 69.2697 151.828 69.1988C152.4 69.2128 152.966 69.2834 153.079 69.2975C156.011 69.721 156.838 70.4559 157.454 72.8867C158.288 76.7804 159.186 80.6246 160.077 84.5253C160.233 85.1189 160.325 85.762 160.544 86.3061C160.975 87.4508 162.212 87.6626 162.911 86.659C163.314 86.1926 163.554 85.6484 163.858 85.0547C165.553 81.5917 167.199 78.0651 168.951 74.6092C169.269 73.9025 169.75 73.2735 170.28 72.708C170.668 72.3546 171.17 72.0153 171.644 71.9022C173.12 71.5698 174.633 71.8735 176.011 72.3326Z"
                                        fill="white">
                                    </path>
                                    <path
                                        d="M145.347 82.1864C145.347 87.2571 145.347 92.3278 145.347 97.3985C145.347 97.7973 145.347 98.1391 145.29 98.538C145.119 99.6774 144.492 100.361 143.296 100.418C142.213 100.475 141.131 100.532 140.048 100.418C138.852 100.304 138.225 99.6774 138.054 98.481C137.94 97.5694 137.94 96.6008 137.94 95.6892C137.94 92.7836 137.94 89.9349 137.94 87.0292C137.94 85.8897 137.883 84.6932 137.883 83.5537C137.826 82.1864 137.485 80.9329 136.915 79.7365C135.377 76.4889 132.129 75.5773 129.109 77.5145C127.856 78.3121 127.115 79.4516 126.716 80.819C126.318 82.2433 126.147 83.7247 126.147 85.206C126.147 89.0233 126.147 92.8405 126.147 96.6578C126.147 96.9427 126.147 97.2845 126.147 97.5694C126.09 99.5065 125.349 100.304 123.469 100.418C122.557 100.532 121.646 100.475 120.677 100.418C119.538 100.304 118.854 99.5635 118.74 98.424C118.74 98.0252 118.74 97.6264 118.74 97.2845C118.74 93.3533 118.74 89.4791 118.74 85.6048C118.74 82.0154 118.683 78.4261 118.74 74.8367C118.74 74.3239 118.74 73.7542 118.74 73.1844C118.683 71.5891 119.879 70.7345 121.19 70.5636C122.158 70.4497 123.241 70.3927 124.153 70.8485C125.748 71.7031 127.286 71.4182 128.881 70.7345C129.622 70.4497 130.477 70.1648 131.274 69.9939C136.06 68.9114 139.821 70.7345 142.84 74.3239C143.524 75.1215 143.98 76.2041 144.379 77.1726C144.948 78.7679 145.347 80.4771 145.347 82.1864Z"
                                        fill="white">
                                    </path>
                                    <path
                                        d="M113.961 93.9712C114.219 94.9203 114.198 95.9519 114.348 96.9681C114.43 97.876 114.219 98.6961 113.651 99.3769C113.398 99.7431 112.975 100.125 112.578 100.161C111.454 100.377 110.272 100.599 109.117 100.475C107.962 100.351 107.136 99.4535 107.028 98.262C106.812 95.8788 106.368 93.5163 106.549 91.0971C106.57 90.6948 106.539 90.3544 106.446 89.9623C106.287 88.8327 106.008 87.6566 105.905 86.5217C105.56 82.7201 105.215 78.9185 104.875 75.1736C104.818 74.5494 104.761 73.9253 104.818 73.2908C105.014 71.6712 106.02 70.7789 107.331 70.7172C108.017 70.7121 108.749 70.5884 109.435 70.5833C110.818 70.6866 111.746 71.4605 112.04 72.8068C112.225 73.5909 112.298 74.3852 112.365 75.1229C112.792 79.8324 113.22 84.5419 113.652 89.3081C113.735 90.216 113.766 91.1857 114.679 91.7893C114.183 92.6352 113.771 93.1303 113.961 93.9712ZM108.425 67.643C104.7 68.21 103.798 66.4612 103.855 63.3096C103.886 62.3914 104.928 61.267 105.877 61.0092C106.269 60.9164 106.666 60.8804 106.666 60.8804C107.291 60.8237 107.518 60.8031 107.745 60.7825C109.968 60.6951 111.087 61.6804 111.339 63.8314C111.52 65.8174 110.4 67.3492 108.425 67.643Z"
                                        fill="white">
                                    </path>
                                    <path
                                        d="M441.747 31.5379C443.213 31.5309 444.022 32.1665 444.251 33.6049C444.358 34.4941 444.403 35.3345 444.503 36.1681C444.577 36.7795 444.297 37.2642 443.823 37.5467C443.036 38.036 442.167 38.3096 441.215 38.3677C440.653 38.3789 440.035 38.3968 439.417 38.4148C435.473 38.4379 432.369 37.0069 430.413 33.4081C429.608 31.8698 429.025 30.3048 428.874 28.5752C428.7 27.1302 428.526 25.6851 428.352 24.2401L428.297 24.2468C428.11 22.6906 427.929 21.19 427.749 19.6894C427.709 19.3559 427.662 18.9669 427.622 18.6334C427.33 17.1461 426.521 16.5105 425.062 16.5731C424.611 16.571 424.117 16.6867 423.611 16.6913C422.646 16.6382 421.801 16.1759 421.514 15.1956C421.151 14.0552 421.004 12.8324 421.308 11.6118C421.499 10.8559 421.946 10.3511 422.773 10.1953C423.273 10.1352 424.774 9.95474 425.267 9.83901C426.686 9.44295 426.497 8.33806 426.156 6.91308C425.856 5.82156 426.056 4.6699 425.86 3.50944C425.766 2.73135 426.499 1.79743 427.327 1.64161C428.369 1.40349 429.481 1.26983 430.544 1.19843C431.724 1.16925 432.485 1.86715 432.736 3.02093C432.948 3.84123 432.999 4.73717 433.099 5.57084C433.358 8.1897 433.438 8.85664 436.106 8.53586C436.891 8.49788 438.385 8.26187 439.169 8.22389C440.288 8.14581 441.159 8.83034 441.349 9.93523C441.491 10.6511 441.578 11.3736 441.609 12.1028C441.79 13.6034 441.21 14.4061 439.729 14.7533C439.402 14.8489 439.013 14.8957 438.68 14.9358C438.013 15.016 437.339 15.0406 436.679 15.1764C435.289 15.3435 434.422 15.1658 434.422 16.5753C434.442 16.7421 434.469 16.9644 434.489 17.1311C434.83 19.9656 435.242 23.8627 435.639 26.6906C435.801 27.5731 436.075 28.4423 436.46 29.2982C437.223 30.9543 438.755 31.503 440.462 31.636C440.914 31.6381 441.352 31.5291 441.747 31.5379Z"
                                        fill="white">
                                    </path>
                                    <path
                                        d="M421.954 24.1195C422.654 26.0167 422.051 27.4037 420.725 28.7004C420.447 28.9519 420.129 29.2724 419.703 29.6227C420.038 29.9945 420.137 30.1413 420.221 30.2343C422.642 31.4223 422.41 32.4739 421.75 34.2834C420.399 37.7945 418.285 40.6459 414.772 42.4327C411.568 44.0759 408.28 44.5804 404.777 44.099C401.083 43.5545 398.114 41.647 395.692 38.775C394.138 36.9402 393.024 34.8091 392.504 32.5135C391.694 28.9622 391.861 25.3726 393.487 22.0175C395.365 17.8954 398.654 15.2994 402.826 13.7946C404.145 13.3129 405.485 13.1159 406.884 13.1347C410.483 13.1248 413.875 14.0437 416.702 16.2807C417.879 17.1743 418.915 18.3975 419.775 19.6116C420.787 20.9576 421.397 22.5311 421.954 24.1195ZM399.655 25.8266C399.54 26.6715 400.073 27.337 400.933 27.5053C401.356 27.5625 401.901 27.6437 402.264 27.4851C404.14 26.5004 406.292 26.7174 408.213 25.8944C409.076 25.6552 410.023 25.5089 410.857 25.1618C411.42 24.8895 412.047 24.4254 412.496 23.9522C413.078 23.3263 413.031 22.5262 412.444 21.8756C411.575 20.8384 410.419 20.2294 409.122 19.95C405.712 19.3847 402.304 20.5034 400.27 23.8552C399.958 24.4064 399.76 25.1584 399.655 25.8266ZM414.013 34.4527C415.077 33.054 416.309 31.8411 417.749 30.7452C417.566 30.5054 417.437 30.2507 417.299 30.1727C417.024 30.0167 416.724 29.9835 416.439 30.0044C415.262 30.1565 414.153 30.3476 413.044 30.5388C412.597 30.6044 412.097 30.685 411.749 30.8976C410.838 31.3825 409.906 31.5827 408.89 31.69C407.011 32.0365 405.162 32.4909 403.516 33.4698C402.35 34.0834 402.217 35.2819 403.188 36.0585C405.237 37.5819 407.565 37.808 409.9 37.2191C411.533 36.8245 413.002 35.8365 414.013 34.4527Z"
                                        fill="white">
                                    </path>
                                    <path
                                        d="M389.276 21.401C389.026 24.1331 388.832 26.8714 388.526 29.5973C388.233 32.2119 387.835 34.7584 387.381 37.2987C386.815 40.3333 385.866 43.2687 383.75 45.5662C381.119 48.4256 377.934 50.2089 374.001 50.6129C372.517 50.7844 370.941 50.7766 369.439 50.6082C364.586 50.1766 360.861 47.731 358.164 43.6544C357.824 43.1657 357.553 42.572 357.393 41.9907C357.072 40.8282 357.865 39.2836 359.522 39.582C360.795 39.7811 362.062 40.0359 363.336 40.235C364.269 40.4523 364.998 40.9847 365.659 41.6221C366.98 42.8969 368.525 43.6898 370.293 44.0007C372.994 44.5289 375.467 44.074 377.54 42.166C378.041 41.7152 378.394 41.0789 378.685 40.4919C378.834 40.1706 378.767 39.7687 378.693 39.4224C378.576 38.9587 377.871 38.7107 377.562 38.9576C377.129 39.3034 376.745 39.711 376.176 40.2668C372.43 40.0156 368.72 39.9377 365.403 37.8757C363.296 36.5692 361.554 35.0219 360.165 32.8383C358.777 30.6547 357.914 28.3048 357.688 25.8009C357.199 20.1132 359.089 15.3118 363.872 11.8488C364.119 11.6512 364.36 11.5093 364.608 11.3117C366.73 9.46553 369.321 8.96746 372.041 8.82189C375.095 8.71376 377.951 9.37196 380.453 11.1734C381.645 12.0957 382.949 12.0167 384.143 11.4183C385.393 10.8261 386.561 10.9572 387.717 11.1994C389.367 11.5535 390.2 12.6609 390.013 14.3298C389.801 16.7281 389.483 19.0583 389.276 21.401ZM379.302 30.478C381.542 27.5749 382.251 24.2745 380.838 20.7927C379.562 17.6078 377.128 15.7013 373.703 15.5988C369.147 15.5385 365.769 18.5394 364.948 23.348C364.755 24.5656 364.988 26 365.457 27.3482C366.363 30.3225 368.382 32.4079 371.466 33.0354C374.439 33.6505 377.333 32.9611 379.302 30.478Z"
                                        fill="white">
                                    </path>
                                    <path
                                        d="M332.225 20.89C332.857 25.7083 333.489 30.5265 334.12 35.3447C334.17 35.7237 334.213 36.0485 334.208 36.4346C334.188 37.5386 333.678 38.2663 332.548 38.4696C331.526 38.6586 330.505 38.8476 329.462 38.8742C328.311 38.915 327.637 38.3976 327.325 37.282C327.104 36.43 326.983 35.5096 326.869 34.6434C326.507 31.8824 326.152 29.1756 325.79 26.4146C325.648 25.3318 325.445 24.202 325.303 23.1193C325.079 21.8271 324.598 20.6787 323.907 19.6128C322.041 16.7186 318.841 16.257 316.213 18.4739C315.121 19.388 314.56 20.5631 314.351 21.9121C314.149 23.3152 314.172 24.7441 314.356 26.1516C314.832 29.7788 315.307 33.406 315.783 37.0332C315.819 37.3039 315.861 37.6288 315.897 37.8994C316.084 39.7472 315.479 40.5974 313.707 40.94C312.855 41.1618 311.982 41.2213 311.054 41.2878C309.957 41.3215 309.215 40.7029 308.965 39.6343C308.915 39.2554 308.866 38.8764 308.823 38.5516C308.333 34.8161 307.85 31.1348 307.368 27.4534C306.92 24.0428 306.419 20.6392 306.026 17.2215C305.962 16.7342 305.891 16.1929 305.82 15.6515C305.567 14.1427 306.598 13.1816 307.822 12.8559C308.728 12.627 309.749 12.4379 310.672 12.7575C312.295 13.3708 313.721 12.9084 315.152 12.06C315.82 11.697 316.597 11.3198 317.333 11.058C321.746 9.43313 325.547 10.697 328.863 13.7314C329.612 14.4042 330.18 15.376 330.68 16.2466C331.42 17.6915 332.012 19.2659 332.225 20.89Z"
                                        fill="white">
                                    </path>
                                    <path
                                        d="M301.367 29.7129C301.13 32.38 300.893 35.0471 300.601 37.7072C300.446 38.8984 300.183 40.0755 299.973 41.2596C299.647 42.9239 298.423 43.8658 296.765 43.4848C295.906 43.3179 295.089 42.8261 294.312 42.4496C293.893 42.2849 293.549 41.9648 293.198 41.6989C292.381 41.2071 291.515 41.0943 290.647 41.4217C289.255 41.9564 287.817 42.4298 286.32 42.5102C280.032 43.013 274.699 39.5655 272.629 33.8999C271.988 32.0545 271.286 30.2562 271.717 28.2199C271.855 27.5772 271.507 26.8711 271.591 26.2214C271.904 22.1324 273.581 18.5515 276.582 15.8038C278.788 13.6682 281.563 12.653 284.632 12.3369C288.204 11.9759 291.281 12.8721 294.005 15.2091C295.05 16.061 296.194 16.1549 297.329 15.4767C298.402 14.8456 299.527 14.6617 300.759 14.9322C302.261 15.2379 303.122 16.2311 302.979 17.7541C302.918 19.0677 302.688 20.4142 302.519 21.7137C302.342 23.0673 302.166 24.4209 301.997 25.7203C301.767 27.0669 301.651 28.3734 301.475 29.727C301.421 29.7199 301.421 29.7199 301.367 29.7129ZM293.462 32.4829C294.392 30.842 294.957 29.0434 294.926 27.1672C294.755 22.1344 291.124 18.3029 285.35 19.0927C284.231 19.2225 283.24 19.644 282.322 20.3504C280.119 22.0458 279.058 24.2753 278.652 26.9754C277.986 31.2387 281.613 35.9506 285.622 36.0321C288.809 36.5022 292.027 35.0491 293.462 32.4829Z"
                                        fill="white">
                                    </path>
                                    <path
                                        d="M265.809 32.7873C266.861 33.0977 267.289 34.0678 266.764 35.0798C266.649 35.3916 266.417 35.7366 266.205 35.9744C262.264 40.0629 257.579 41.621 251.989 40.6184C245.681 39.591 240.536 33.8935 239.867 27.1539C239.355 22.2225 240.983 18.0293 244.568 14.6513C245.851 13.4494 247.416 12.5231 249.057 11.778C249.484 11.5808 250.038 11.2967 250.477 11.3243C252.513 11.4319 254.266 10.0967 256.369 10.4391C258.568 10.8555 260.737 11.4329 262.688 12.58C265.586 14.2957 267.742 16.7044 268.974 19.8829C269.205 20.4267 269.371 21.0139 269.484 21.591C269.613 22.6713 268.776 23.5687 267.747 23.4294C266.332 23.2726 264.937 23.0085 263.636 22.54C262.336 22.0715 261.489 20.9666 260.76 19.8282C260.107 18.8712 259.253 18.0982 258.211 17.7342C254.889 16.494 251.423 16.8938 249.087 19.8413C246.761 22.7352 246.259 25.9744 247.591 29.5052C248.472 31.8949 250.425 33.3205 252.725 34.0892C254.444 34.6926 256.273 34.4275 257.935 33.5751C258.307 33.3678 258.69 33.1069 259.063 32.8996C260.362 32.2008 261.708 31.8443 263.19 32.236C264.038 32.4521 264.97 32.5175 265.809 32.7873Z"
                                        fill="white">
                                    </path>
                                    <path
                                        d="M213.942 12.5073C214.138 13.7489 214.28 14.9966 214.429 16.2987C214.96 20.9642 215.491 25.6297 216.022 30.2953C216.17 31.5973 216.325 32.9535 216.419 34.2617C216.468 34.6957 216.523 35.184 216.519 35.6242C216.54 36.7758 216.277 37.8498 215.049 38.649C213.524 38.7676 212.053 38.8801 210.581 38.4982C209.453 38.2419 208.344 38.6429 207.429 39.2965C205.792 40.3622 204.02 40.7287 202.115 40.8906C197.335 41.3798 192.009 38.524 190.606 32.4739C189.379 27.0083 189.123 21.3773 188.384 15.8561C188.089 13.7465 189.376 12.5009 191.233 12.3995C191.673 12.4043 192.101 12.3007 192.541 12.3055C194.073 12.2411 195.094 13.0041 195.381 14.565C195.437 15.0533 195.499 15.5958 195.561 16.1383C195.851 18.6881 196.201 21.2859 196.444 23.8961C196.57 25.97 197.076 28.0006 197.636 30.0251C198.044 31.6822 198.965 33.0062 200.589 33.7556C203.493 35.1286 207.04 33.4609 207.839 30.3474C208.383 28.3622 208.371 26.3302 208.143 24.3229C207.772 21.0679 207.402 17.8129 207.031 14.5579C206.963 13.9611 206.895 13.3644 206.882 12.7614C206.927 11.7121 207.642 10.7515 208.709 10.4652C209.516 10.3184 210.324 10.1715 211.15 10.1873C212.688 10.1772 213.654 10.9464 213.942 12.5073Z"
                                        fill="white">
                                    </path>
                                    <path
                                        d="M179.234 14.4565C183.493 17.3504 185.677 21.5547 185.731 26.7963C185.895 34.3312 180.653 40.6103 173.173 41.9208C172.299 42.0846 171.425 42.03 170.497 42.0846C162.58 42.1938 155.317 35.7509 155.372 26.8509C155.372 23.7387 156.191 20.7356 158.048 18.224C159.795 15.767 162.088 13.9105 164.982 12.7639C170.06 10.8529 174.865 11.3989 179.234 14.4565ZM177.65 31.1098C179.07 28.3798 179.124 23.9025 176.34 20.8994C173.609 17.8964 169.678 17.405 166.62 19.4252C163.508 21.4455 162.034 24.5577 162.525 28.2706C163.126 32.3656 166.566 35.8055 170.606 35.4233C173.282 35.7509 176.503 33.3484 177.65 31.1098Z"
                                        fill="white">
                                    </path>
                                    <path
                                        d="M154.832 11.0291C155.478 11.7476 155.758 12.2675 155.281 13.2647C154.948 13.8916 154.659 14.6323 154.326 15.2592C153.075 17.5001 151.773 19.6816 150.581 21.8732C149.195 24.3757 147.918 26.8884 146.586 29.3961C143.809 34.4555 141.027 39.5693 138.245 44.683C137.777 45.5716 137.108 46.2767 136.296 46.749C134.737 47.5901 133.072 47.2149 131.526 46.7411C130.834 46.5118 130.46 45.8187 130.586 45.0628C130.647 44.4104 130.817 43.7682 131.09 43.1906C132.03 41.3592 132.909 39.577 134.002 37.8695C135.342 35.8563 135.362 33.8839 134.636 31.6772C133.783 29.0747 132.989 26.423 132.196 23.7712C131.03 19.8232 129.859 15.9297 128.747 11.9868C128.581 11.4228 128.419 10.8045 128.475 10.2065C128.479 9.00031 129.257 8.3054 130.463 8.30866C130.898 8.34938 131.333 8.3901 131.822 8.43592C131.827 8.38155 131.832 8.32719 131.837 8.27283C132.746 8.52245 133.715 8.7228 134.549 9.18479C135.442 9.5975 135.969 10.4146 136.258 11.4287C136.884 14.1196 137.569 16.7612 138.248 19.4572C138.527 20.5801 138.855 21.7624 139.188 22.8904C139.272 23.1724 139.355 23.4544 139.493 23.7415C140.009 24.6673 141.26 24.7844 141.89 23.9111C142.138 23.6053 142.331 23.2944 142.476 22.924C143.902 19.9866 145.329 17.0491 146.707 14.0522C147.035 13.4797 147.313 12.8477 147.641 12.2752C148.291 11.1844 149.129 10.4403 150.542 10.5726C151.304 10.6439 152.144 10.4484 152.97 10.416C153.633 10.3684 154.28 10.4838 154.832 11.0291Z"
                                        fill="white">
                                    </path>
                                    <path
                                        d="M106.907 16.3814C107.489 17.0188 107.585 17.8249 107.017 18.5912C105.874 20.402 104.719 22.266 103.523 24.0646C101.351 27.4322 99.1672 30.8531 97.0488 34.233C96.1752 35.6013 95.3427 37.0351 94.4692 38.4034C93.5058 39.9193 92.4726 41.2511 90.2383 41.4676C88.412 40.8813 87.6567 39.532 87.5921 37.6128C87.5296 34.4616 87.283 31.3804 87.1018 28.2581C87.0474 27.5174 87.0051 26.7236 86.7666 26.0528C86.4416 25.0261 85.3527 24.8888 84.6132 25.6717C84.3804 25.9545 84.1886 26.3026 84.0091 26.5976C82.8584 28.6867 81.6545 30.7636 80.5571 32.8649C80.1979 33.4548 79.9452 34.0691 79.6514 34.618C79.2679 35.3143 78.8965 35.9575 78.4841 36.5352C77.5695 37.8382 76.5306 38.2164 75.2122 37.8585C73.8405 37.4883 73.0941 36.5892 72.9077 35.2022C72.709 33.8683 72.5103 32.5345 72.3649 31.2129C71.5556 24.4739 70.693 17.7226 69.8838 10.9836C69.8504 10.6399 69.8293 10.243 69.8614 9.85823C70.043 8.33142 70.93 7.63831 72.4447 7.87315C73.4682 8.05152 74.4916 8.22989 75.4176 8.83403C76.114 9.21757 76.6019 9.77743 76.7628 10.5425C76.8949 11.1889 77.0269 11.8353 77.0403 12.5105C77.2414 15.3013 77.4303 18.1452 77.6192 20.9892C77.657 21.558 77.7358 22.1922 77.8922 22.7322C78.1474 23.5748 79.3305 23.7897 79.8859 23.0767C80.2862 22.5522 80.6453 21.9623 80.9513 21.3602C82.3425 18.71 83.7215 16.1131 85.1659 13.4751C86.137 11.6809 88.4033 11.0797 90.1975 12.0507C91.3774 12.769 91.9153 13.8444 91.9421 15.1949C92.0445 17.683 92.1058 20.1057 92.2082 22.5937C92.2094 23.3222 92.1985 24.1039 92.2529 24.8445C92.274 25.2415 92.3894 25.716 92.517 26.1373C92.8087 26.8203 93.7135 27.0275 94.2202 26.5274C94.6614 26.0683 95.0738 25.4906 95.4208 24.9539C96.2411 23.5733 96.9428 22.2216 97.7632 20.8411C98.5181 19.5016 99.3794 18.1864 100.147 16.7937C100.901 15.4542 101.977 14.9163 103.492 15.1511C104.196 15.2564 104.977 15.2673 105.657 15.479C106.124 15.6419 106.608 15.9767 106.907 16.3814Z"
                                        fill="white">
                                    </path>
                                    <path
                                        d="M58.4585 13.1323C62.7175 16.0262 64.9016 20.2304 64.9562 25.4721C65.1201 33.007 59.8782 39.2861 52.3975 40.5965C51.5239 40.7603 50.6502 40.7057 49.722 40.7603C41.8045 40.8695 34.5423 34.4266 34.5969 25.5267C34.5969 22.4145 35.4159 19.4114 37.2725 16.8998C39.0198 14.4427 41.3131 12.5863 44.207 11.4397C49.2851 9.52867 54.0902 10.0747 58.4585 13.1323ZM56.875 29.7856C58.2947 27.0555 58.3493 22.5783 55.5645 19.5752C52.8343 16.5722 48.9029 16.0808 45.8451 18.101C42.7328 20.1212 41.2585 23.2335 41.7499 26.9463C42.3505 31.0414 45.7905 34.4812 49.8312 34.099C52.5067 34.4266 55.7283 32.0242 56.875 29.7856Z"
                                        fill="white">
                                    </path>
                                    <path
                                        d="M30.0133 19.3609C30.5854 24.4065 31.1575 29.452 31.7838 34.4914C31.8822 35.3595 31.9868 36.2818 31.5908 37.1509C31.2428 37.9597 30.7556 38.5095 29.8333 38.614C28.9652 38.7125 28.049 38.8713 27.1686 38.8612C25.6853 38.8645 24.9542 38.233 24.7882 36.7682C24.3894 33.7362 24.045 30.698 23.7005 27.6598C23.6328 27.063 23.6194 26.4601 23.4975 25.8694C23.1994 24.6943 22.3414 23.9124 21.1713 23.7703C20.8938 23.7468 20.5622 23.7294 20.2909 23.7602C18.4462 23.9693 16.5953 24.1242 14.7507 24.3334C14.0996 24.4072 13.4547 24.5352 12.8036 24.609C11.1698 24.7393 10.3274 25.5492 10.2284 27.099C10.2233 27.5392 10.2725 27.9732 10.3218 28.4073C10.6355 31.1742 10.943 33.8868 11.2568 36.6538C11.3552 37.5218 11.514 38.438 11.1722 39.301C10.8366 40.2182 10.3075 40.8827 9.27661 40.9995C8.35426 41.1041 7.38382 41.2691 6.38876 41.2171C5.17054 41.1354 4.43335 40.4496 4.40653 39.2438C4.31094 36.9467 3.78131 34.6988 3.4687 32.4263C3.05262 29.7259 3.01018 26.9283 2.5941 24.2279C2.42912 23.2575 2.32455 22.3352 2.15957 21.3648C1.93923 19.9061 1.60423 18.4055 1.5528 16.9826C1.52377 14.7878 1.22962 12.6781 0.983562 10.508C0.75707 8.99504 0.632937 7.41555 0.508804 5.83605C0.396974 4.36506 1.02848 3.63406 2.48723 3.41373C3.29491 3.26721 4.10874 3.17494 4.92873 3.13693C6.06809 3.00776 6.84108 3.52458 7.22923 4.52463C7.54468 5.36808 7.75776 6.27809 7.85618 7.14614C8.15034 9.25586 8.39639 11.426 8.64244 13.5961C8.70396 14.1387 8.71737 14.7416 8.83929 15.3322C9.13849 17.0018 10.1173 17.8799 11.8054 17.7435C14.3615 17.5086 16.9658 17.2134 19.5578 16.8096C21.4506 16.5401 22.2622 15.459 22.1011 13.554C21.8355 10.7266 21.4614 7.91161 21.1415 5.09044C21.0739 4.49365 21.0062 3.89687 20.9989 3.34819C20.966 2.08806 21.5975 1.35706 22.7245 1.11938C23.6346 0.906302 24.5027 0.807885 25.4373 0.811825C26.7999 0.712301 27.8268 1.53004 28.0952 2.92832C28.211 3.4647 28.2663 3.95298 28.3279 4.49552C28.8876 9.43256 29.4536 14.4239 30.0133 19.3609Z"
                                        fill="white">
                                    </path>
                                </svg>
                            </div>
                            <p
                                class="gl-animated mx-auto hidden max-w-[688px] px-[30px] text-center font-helvetica text-[16px] font-medium leading-[24px] text-white empty:hidden md:px-0 md:text-[18px] md:leading-[25px] lg:block lg:text-[20px] lg:leading-[28px]">
                                Developed with PHP Laravel, it offers a dynamic, creativity-driven learning environment
                                — thoughtfully structured around three core roles:
                            </p>
                            <div class="carousel-wrap h-[1200vw] md:mt-[40px] lg:h-[200vw]">
                                <div
                                    class="carousel-rotate sticky top-10 overflow-hidden pb-[40px] md:top-[100px] md:pb-[100px] lg:top-[20px] lg:py-[100px] 2xl:top-[5vw]">
                                    <div class="header-tablet pb-[60px] md:pb-[100px] lg:hidden">
                                        <h2 class="visually-hidden">
                                            How can you be involved!
                                        </h2>
                                        <div
                                            class="heading-container px-[30px] hidden md:flex lg:hidden md:px-[55px] w-full block mx-auto justify-center [&amp;_svg_path]:translate-y-[-200%]">
                                            <svg fill="none" height="79" viewbox="0 0 1011 79" width="1011"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M994.292 39.1757C994.639 36.1766 995.067 33.1891 995.495 30.2016C995.911 27.2949 996.316 24.4689 996.732 21.5621C997.472 16.3946 998.374 11.2501 998.953 6.05945C999.311 2.40289 1001.38 0.638705 1005.04 1.49359C1005.68 1.66684 1006.42 1.69017 1007.04 1.94416C1008.61 2.4984 1009.59 3.70995 1009.67 5.4518C1009.73 6.20161 1009.61 7.00905 1009.51 7.73573C1008.02 18.1516 1006.53 28.4867 1005.04 38.9026C1004.93 39.71 1004.79 40.6789 1004.43 41.4516C1003.74 43.4124 1002.39 44.2079 1000.27 44.0687C999.378 43.9415 998.478 43.8951 997.682 43.6987C995.202 43.1787 994.015 41.6903 994.292 39.1757ZM999.353 48.1403C1002.1 48.5335 1003.26 50.1835 1002.93 53.1018C1002.95 53.517 1002.89 53.9208 1002.74 54.3937C1002.18 57.1965 1000.7 58.3034 997.862 57.9794C997.446 58.0024 996.974 57.8522 996.57 57.7944C996.085 57.725 995.682 57.6672 995.278 57.6094C993.086 57.3779 992.072 55.8319 992.257 53.9632C992.524 49.2223 993.482 47.1347 999.353 48.1403Z"
                                                    fill="white">
                                                </path>
                                                <path
                                                    d="M980.799 23.1392C980.496 28.5659 979.715 33.9518 979.332 39.3717C978.955 44.712 978.42 50.0387 977.964 55.3722C977.916 55.9294 977.869 56.4867 977.828 56.9643C977.463 60.3009 976.087 61.3861 972.896 61.1935C971.695 61.1711 970.515 60.9098 969.455 60.1777C969.157 59.9117 968.772 59.7184 968.395 59.4456C967.102 58.6135 965.742 58.5774 964.321 59.2578C963.239 59.7266 962.09 60.0294 960.935 60.4117C957.303 61.6248 953.655 61.1526 950.061 60.0436C946.315 58.8414 943.287 56.7383 940.739 53.714C933.089 44.7207 933.561 31.6908 941.919 23.0234C946.847 17.9117 953.28 15.8155 960.41 16.8259C962.705 17.1824 964.893 17.8506 966.595 19.5196C967.482 20.3972 968.642 20.8973 970.216 20.3102C970.757 18.6725 970.813 17.0736 970.956 15.4019C971.133 13.3322 971.23 11.2557 971.487 9.19276C971.85 6.81824 973.326 5.50102 975.728 5.54594C976.929 5.5684 978.123 5.67046 979.31 5.85212C980.888 6.14741 981.842 7.19112 981.865 8.79682C981.956 9.60647 981.801 10.4753 981.806 11.3578C981.466 15.338 980.973 19.225 980.799 23.1392ZM964.601 49.4188C966.975 46.9756 969.442 44.38 969.436 40.6909C969.8 38.3164 969.499 36.2059 968.793 34.1409C965.798 26.0267 956.528 23.7909 950.179 29.583C946.357 33.025 945.114 37.2488 946.37 42.2476C948.107 49.1317 952.932 51.7892 959.136 51.4375C961.147 51.3688 963.277 50.8293 964.601 49.4188Z"
                                                    fill="white">
                                                </path>
                                                <path
                                                    d="M931.683 38.2395C931.923 41.1157 930.565 42.7935 928.248 44.0718C927.769 44.3115 927.209 44.6311 926.49 44.9506C926.81 45.5898 926.89 45.8295 926.97 45.9893C929.846 48.5459 929.127 49.9041 927.529 52.1412C924.333 56.4555 920.338 59.5714 914.826 60.6899C909.792 61.7285 905.079 61.1693 900.445 59.1719C895.571 57.0147 892.216 53.2597 889.979 48.3861C888.541 45.2702 887.822 41.9146 887.981 38.5591C888.221 33.3659 889.819 28.4923 893.334 24.4976C897.489 19.5441 903.001 17.2272 909.313 16.7478C911.31 16.588 913.228 16.8277 915.145 17.387C920.099 18.7452 924.413 21.3018 927.449 25.4563C928.727 27.1341 929.686 29.2114 930.405 31.2088C931.284 33.4458 931.524 35.8426 931.683 38.2395ZM900.365 32.0876C899.886 33.2061 900.365 34.3246 901.483 34.8839C902.043 35.1236 902.762 35.4432 903.321 35.3633C906.277 34.7241 909.153 35.8426 912.109 35.4432C913.388 35.4432 914.746 35.603 916.024 35.4432C916.903 35.2834 917.942 34.8839 918.741 34.4045C919.779 33.7654 920.019 32.6469 919.46 31.5283C918.661 29.7706 917.302 28.4923 915.625 27.6135C911.151 25.5362 906.037 25.7759 901.963 29.6109C901.324 30.25 900.764 31.2088 900.365 32.0876ZM916.823 49.4247C918.82 47.9067 920.978 46.7083 923.374 45.7496C923.215 45.3501 923.135 44.9506 922.975 44.7909C922.655 44.4713 922.256 44.3115 921.856 44.2316C920.179 43.9919 918.581 43.8321 916.983 43.6723C916.344 43.5924 915.625 43.5125 915.065 43.6723C913.627 43.9919 912.269 43.912 910.831 43.6723C908.115 43.4326 905.398 43.3527 902.762 44.0718C900.924 44.4713 900.285 46.0692 901.324 47.5073C903.561 50.3835 906.677 51.5819 910.112 51.6618C912.509 51.7417 914.906 50.9427 916.823 49.4247Z"
                                                    fill="white">
                                                </path>
                                                <path
                                                    d="M885.496 16.0628C887.132 16.6077 887.716 18.1829 887.098 19.7326C886.588 20.9711 885.926 22.1159 885.344 23.2677C880.403 32.9389 875.456 42.6896 870.435 52.3538C870.241 52.7377 870.12 53.2082 869.925 53.5922C868.557 55.4769 866.794 56.3646 864.327 56.1476C861.78 55.9237 860.287 54.6695 859.268 52.5749C859.216 52.2495 859.165 51.9242 859.033 51.5918C856.105 42.0308 853.096 32.4627 850.174 22.822C849.532 21.0011 849.064 19.0351 848.501 17.2211C847.684 14.663 849.024 13.0966 851.447 12.9086C852.25 12.899 853.046 12.969 853.205 12.9829C857.336 13.4264 858.533 14.4139 859.519 17.7889C860.888 23.2026 862.343 28.5438 863.791 33.9645C864.04 34.7884 864.202 35.6848 864.537 36.4361C865.199 38.0183 866.943 38.2518 867.872 36.8096C868.413 36.1353 868.721 35.3604 869.117 34.513C871.315 29.5733 873.442 24.5471 875.72 19.6144C876.129 18.6078 876.77 17.7017 877.484 16.8822C878.011 16.3671 878.696 15.866 879.354 15.6832C881.407 15.1418 883.541 15.49 885.496 16.0628Z"
                                                    fill="white">
                                                </path>
                                                <path
                                                    d="M841.423 28.248C841.275 33.5341 842.169 38.8505 842.261 44.1252C842.319 47.0019 842.452 49.795 842.506 52.592C842.552 53.5496 842.681 54.5832 842.727 55.5409C842.803 58.8167 841.101 60.0178 838.867 60.1245C837.825 60.0943 836.871 60.2199 835.91 60.1858C833.748 60.1291 832.74 59.1374 832.478 56.9904C832.444 56.2721 832.406 55.4741 832.367 54.6761C832.173 50.6061 831.975 46.4563 831.776 42.3065C831.578 38.1567 831.38 34.0069 831.102 29.8609C831.041 28.5841 830.9 27.311 830.759 26.038C830.653 25.4832 830.546 24.9284 830.599 24.3659C830.892 22.1124 830.705 19.8817 830.275 17.5826C830.051 16.2336 830.381 14.7781 830.392 13.3378C830.316 11.7417 830.156 10.0696 830.16 8.46975C830.121 5.99202 831.105 4.82521 833.572 4.5474C834.685 4.41422 835.802 4.36085 836.847 4.47088C839.014 4.60735 839.781 5.61049 840.124 7.75374C840.675 10.9268 840.425 14.0582 840.653 17.1668C840.749 19.1619 841.08 21.0657 841.175 23.0608C841.335 24.7329 841.419 26.4885 841.423 28.248Z"
                                                    fill="white">
                                                </path>
                                                <path
                                                    d="M815.381 24.6462C821.613 28.8806 824.809 35.0325 824.889 42.7024C825.128 53.7279 817.459 62.9158 806.513 64.8332C805.235 65.0729 803.957 64.993 802.598 65.0729C791.014 65.2327 780.388 55.8051 780.468 42.7823C780.468 38.2283 781.666 33.8341 784.383 30.159C786.939 26.5637 790.295 23.8473 794.529 22.1695C801.959 19.3732 808.99 20.1721 815.381 24.6462ZM813.064 49.0141C815.142 45.0194 815.222 38.468 811.147 34.0738C807.152 29.6796 801.4 28.9605 796.926 31.9166C792.372 34.8727 790.215 39.4267 790.934 44.8596C791.813 50.8517 796.846 55.885 802.758 55.3258C806.673 55.8051 811.387 52.2898 813.064 49.0141Z"
                                                    fill="white">
                                                </path>
                                                <path
                                                    d="M778.668 20.6784C780.283 21.2826 780.809 22.878 780.135 24.4042C779.58 25.6232 778.877 26.7431 778.253 27.8729C772.962 37.3573 767.662 46.9211 762.293 56.3956C762.085 56.7722 761.946 57.238 761.738 57.6146C760.301 59.4481 758.508 60.2709 756.05 59.9641C753.513 59.6474 752.066 58.3395 751.125 56.2091C751.085 55.8821 751.045 55.555 750.926 55.2181C748.348 45.5566 745.691 35.8851 743.123 26.1443C742.548 24.3011 742.151 22.3193 741.655 20.486C740.931 17.8997 742.328 16.3833 744.756 16.2838C745.559 16.3035 746.352 16.4025 746.51 16.4223C750.623 17.0162 751.782 18.0467 752.645 21.4555C753.815 26.9155 755.075 32.3062 756.324 37.7762C756.542 38.6086 756.671 39.5103 756.979 40.2733C757.583 41.8786 759.318 42.1756 760.298 40.7683C760.863 40.1142 761.2 39.351 761.626 38.5186C764.004 33.6624 766.312 28.7171 768.768 23.8709C769.214 22.8798 769.888 21.9978 770.631 21.2049C771.176 20.7093 771.879 20.2335 772.543 20.0748C774.614 19.6088 776.735 20.0345 778.668 20.6784Z"
                                                    fill="white">
                                                </path>
                                                <path
                                                    d="M735.665 34.4857C735.665 41.5963 735.665 48.7069 735.665 55.8176C735.665 56.3768 735.665 56.8562 735.585 57.4154C735.345 59.0133 734.466 59.9721 732.789 60.052C731.271 60.1319 729.753 60.2118 728.235 60.052C726.557 59.8922 725.678 59.0133 725.438 57.3356C725.279 56.0572 725.279 54.699 725.279 53.4207C725.279 49.3461 725.279 45.3514 725.279 41.2767C725.279 39.6788 725.199 38.001 725.199 36.4031C725.119 34.4857 724.639 32.728 723.841 31.0502C721.683 26.4962 717.129 25.2179 712.895 27.9343C711.137 29.0528 710.099 30.6507 709.539 32.5682C708.98 34.5656 708.741 36.6428 708.741 38.7201C708.741 44.073 708.741 49.426 708.741 54.7789C708.741 55.1784 708.741 55.6578 708.741 56.0572C708.661 58.7737 707.622 59.8922 704.986 60.052C703.707 60.2118 702.429 60.1319 701.071 60.052C699.473 59.8922 698.514 58.8536 698.354 57.2557C698.354 56.6964 698.354 56.1371 698.354 55.6578C698.354 50.145 698.354 44.7122 698.354 39.2794C698.354 34.246 698.274 29.2126 698.354 24.1793C698.354 23.4602 698.354 22.6613 698.354 21.8623C698.274 19.6253 699.952 18.4268 701.79 18.1872C703.148 18.0274 704.666 17.9475 705.944 18.5866C708.181 19.7851 710.338 19.3856 712.575 18.4268C713.614 18.0274 714.812 17.6279 715.931 17.3882C722.642 15.8702 727.915 18.4268 732.149 23.4602C733.108 24.5787 733.747 26.0967 734.307 27.4549C735.106 29.692 735.665 32.0888 735.665 34.4857Z"
                                                    fill="white">
                                                </path>
                                                <path
                                                    d="M691.655 51.0146C692.016 52.3456 691.987 53.7922 692.197 55.2172C692.312 56.4903 692.016 57.6404 691.22 58.5951C690.865 59.1086 690.272 59.6438 689.715 59.6943C688.138 59.998 686.482 60.3088 684.862 60.135C683.241 59.9612 682.084 58.7025 681.933 57.0316C681.629 53.6897 681.007 50.3768 681.261 46.9844C681.29 46.4202 681.247 45.9428 681.117 45.393C680.892 43.8089 680.502 42.1597 680.358 40.5683C679.874 35.2373 679.39 29.9063 678.913 24.6548C678.833 23.7796 678.754 22.9043 678.834 22.0147C679.109 19.7434 680.519 18.4922 682.357 18.4056C683.319 18.3985 684.346 18.2251 685.308 18.2179C687.246 18.3628 688.548 19.448 688.96 21.3359C689.221 22.4354 689.322 23.5494 689.416 24.5838C690.015 31.1878 690.615 37.7919 691.222 44.4756C691.337 45.7487 691.38 47.1086 692.661 47.955C691.966 49.1412 691.387 49.8355 691.655 51.0146ZM683.891 14.0948C678.668 14.8898 677.403 12.4376 677.483 8.01801C677.526 6.73048 678.988 5.15379 680.319 4.79229C680.868 4.66215 681.425 4.61159 681.425 4.61159C682.3 4.53213 682.619 4.50323 682.937 4.47433C686.055 4.35174 687.624 5.73349 687.978 8.74983C688.231 11.5347 686.661 13.6828 683.891 14.0948Z"
                                                    fill="white">
                                                </path>
                                                <path
                                                    d="M646.458 47.6812C648.602 47.6709 649.786 48.601 650.122 50.7057C650.278 52.0069 650.344 53.2365 650.49 54.4564C650.598 55.351 650.188 56.0603 649.495 56.4736C648.344 57.1895 647.072 57.59 645.68 57.6749C644.857 57.6913 643.952 57.7176 643.048 57.7438C637.277 57.7777 632.735 55.6838 629.874 50.4177C628.696 48.1669 627.843 45.8769 627.622 43.3461C627.367 41.2316 627.113 39.1172 626.859 37.0027L626.778 37.0125C626.504 34.7354 626.24 32.5396 625.976 30.3439C625.917 29.8559 625.849 29.2866 625.79 28.7987C625.363 26.6225 624.179 25.6924 622.045 25.784C621.385 25.7809 620.662 25.9502 619.921 25.9569C618.509 25.8792 617.272 25.2028 616.852 23.7683C616.322 22.0996 616.107 20.3104 616.552 18.5244C616.831 17.4183 617.485 16.6797 618.695 16.4517C619.427 16.3637 621.623 16.0996 622.345 15.9303C624.42 15.3508 624.144 13.734 623.645 11.6489C623.206 10.0518 623.498 8.3666 623.211 6.66856C623.075 5.53001 624.148 4.16346 625.358 3.93546C626.883 3.58702 628.51 3.39144 630.065 3.28697C631.792 3.24427 632.905 4.26547 633.273 5.95374C633.582 7.15405 633.658 8.46503 633.804 9.6849C634.183 13.5169 634.3 14.4928 638.203 14.0235C639.352 13.9679 641.538 13.6226 642.686 13.567C644.322 13.4527 645.598 14.4544 645.875 16.0711C646.083 17.1185 646.21 18.1758 646.256 19.2428C646.52 21.4385 645.671 22.6131 643.505 23.1211C643.027 23.2611 642.457 23.3295 641.969 23.3882C640.994 23.5056 640.008 23.5416 639.042 23.7402C637.009 23.9847 635.74 23.7248 635.74 25.7872C635.77 26.0312 635.809 26.3565 635.838 26.6005C636.337 30.748 636.94 36.4505 637.52 40.5883C637.758 41.8798 638.158 43.1516 638.721 44.4039C639.838 46.8272 642.079 47.6302 644.578 47.8248C645.238 47.8279 645.879 47.6683 646.458 47.6812Z"
                                                    fill="white">
                                                </path>
                                                <path
                                                    d="M617.49 36.8205C618.515 39.5965 617.632 41.626 615.693 43.5234C615.285 43.8915 614.82 44.3604 614.197 44.873C614.688 45.417 614.833 45.6319 614.955 45.7679C618.497 47.5063 618.159 49.0451 617.192 51.6928C615.216 56.8304 612.123 61.0027 606.983 63.6173C602.294 66.0217 597.484 66.7599 592.359 66.0554C586.953 65.2587 582.609 62.4676 579.065 58.2651C576.791 55.5804 575.161 52.462 574.4 49.103C573.215 43.9066 573.459 38.654 575.839 33.7447C578.587 27.7131 583.399 23.9144 589.504 21.7125C591.433 21.0077 593.393 20.7195 595.441 20.747C600.707 20.7325 605.669 22.0771 609.807 25.3504C611.529 26.658 613.045 28.4477 614.302 30.2242C615.783 32.1938 616.676 34.4962 617.49 36.8205ZM584.863 39.3183C584.696 40.5547 585.476 41.5285 586.734 41.7748C587.352 41.8584 588.15 41.9773 588.681 41.7452C591.426 40.3043 594.574 40.6218 597.386 39.4176C598.649 39.0676 600.034 38.8536 601.253 38.3457C602.078 37.9471 602.995 37.2681 603.653 36.5757C604.504 35.6598 604.435 34.4891 603.576 33.5371C602.305 32.0193 600.613 31.1283 598.715 30.7194C593.726 29.8922 588.739 31.5292 585.764 36.4338C585.307 37.2403 585.017 38.3406 584.863 39.3183ZM605.871 51.9405C607.429 49.8938 609.232 48.1191 611.338 46.5156C611.07 46.1647 610.882 45.7919 610.68 45.6778C610.277 45.4495 609.839 45.401 609.422 45.4315C607.699 45.6541 606.076 45.9338 604.454 46.2135C603.801 46.3095 603.068 46.4275 602.56 46.7385C601.226 47.448 599.862 47.741 598.376 47.898C595.627 48.405 592.921 49.0699 590.513 50.5023C588.807 51.4001 588.613 53.1538 590.033 54.2902C593.031 56.5193 596.437 56.8502 599.853 55.9884C602.243 55.411 604.393 53.9653 605.871 51.9405Z"
                                                    fill="white">
                                                </path>
                                                <path
                                                    d="M569.684 32.8499C569.318 36.8476 569.033 40.8545 568.586 44.8431C568.157 48.6689 567.574 52.3951 566.91 56.1121C566.082 60.5526 564.694 64.8478 561.597 68.2095C557.748 72.3937 553.087 75.003 547.334 75.5941C545.163 75.8452 542.856 75.8337 540.658 75.5873C533.558 74.9558 528.107 71.3772 524.16 65.4122C523.664 64.6971 523.267 63.8283 523.032 62.9778C522.564 61.2767 523.724 59.0166 526.148 59.4532C528.011 59.7446 529.865 60.1174 531.728 60.4087C533.093 60.7267 534.16 61.5058 535.127 62.4384C537.061 64.3038 539.321 65.4639 541.907 65.9189C545.859 66.6918 549.478 66.0262 552.511 63.2342C553.245 62.5746 553.761 61.6435 554.187 60.7846C554.405 60.3144 554.306 59.7264 554.198 59.2197C554.027 58.5411 552.996 58.1783 552.543 58.5396C551.91 59.0455 551.348 59.6419 550.515 60.4552C545.034 60.0877 539.607 59.9736 534.752 56.9565C531.67 55.0447 529.121 52.7807 527.089 49.5855C525.057 46.3904 523.795 42.9518 523.464 39.288C522.749 30.9654 525.515 23.9399 532.512 18.8725C532.874 18.5834 533.227 18.3758 533.589 18.0867C536.695 15.3853 540.486 14.6565 544.466 14.4435C548.934 14.2852 553.112 15.2483 556.773 17.8844C558.518 19.2339 560.426 19.1183 562.173 18.2427C564.001 17.3762 565.71 17.5679 567.402 17.9224C569.816 18.4405 571.036 20.0609 570.762 22.5029C570.451 26.0122 569.986 29.4219 569.684 32.8499ZM555.089 46.1318C558.368 41.8838 559.404 37.0545 557.338 31.9598C555.47 27.2994 551.909 24.5097 546.898 24.3598C540.231 24.2716 535.288 28.6626 534.087 35.6988C533.805 37.4805 534.146 39.5794 534.832 41.552C536.157 45.9043 539.112 48.9557 543.624 49.8739C547.974 50.7739 552.209 49.7651 555.089 46.1318Z"
                                                    fill="white">
                                                </path>
                                                <path
                                                    d="M486.207 32.0946C487.132 39.1449 488.056 46.1952 488.981 53.2455C489.053 53.8 489.116 54.2753 489.109 54.8402C489.079 56.4557 488.333 57.5205 486.68 57.8179C485.185 58.0945 483.69 58.371 482.164 58.41C480.48 58.4697 479.494 57.7125 479.038 56.0802C478.714 54.8335 478.537 53.4868 478.371 52.2193C477.841 48.1793 477.322 44.2184 476.792 40.1784C476.584 38.5941 476.287 36.9409 476.079 35.3566C475.751 33.4658 475.047 31.7853 474.037 30.2257C471.306 25.9908 466.624 25.3154 462.779 28.5593C461.182 29.8968 460.36 31.6162 460.054 33.5901C459.76 35.6432 459.792 37.734 460.062 39.7937C460.758 45.1012 461.454 50.4087 462.15 55.7162C462.202 56.1123 462.264 56.5876 462.316 56.9837C462.59 59.6874 461.706 60.9315 459.112 61.4327C457.866 61.7573 456.588 61.8443 455.231 61.9417C453.626 61.991 452.54 61.0858 452.174 59.5223C452.101 58.9677 452.029 58.4132 451.966 57.9379C451.249 52.472 450.543 47.0853 449.837 41.6985C449.182 36.7079 448.449 31.7276 447.874 26.7266C447.78 26.0136 447.676 25.2215 447.572 24.4293C447.202 22.2216 448.71 20.8153 450.501 20.3387C451.827 20.0037 453.321 19.7271 454.672 20.1946C457.046 21.092 459.133 20.4155 461.226 19.174C462.204 18.6429 463.34 18.091 464.418 17.708C470.875 15.3303 476.436 17.1797 481.288 21.6198C482.384 22.6042 483.215 24.0262 483.947 25.3002C485.03 27.4144 485.896 29.7181 486.207 32.0946Z"
                                                    fill="white">
                                                </path>
                                                <path
                                                    d="M441.058 45.0104C440.711 48.9131 440.364 52.8158 439.938 56.7082C439.711 58.4512 439.325 60.1735 439.019 61.9062C438.541 64.3415 436.75 65.7197 434.325 65.1623C433.068 64.918 431.872 64.1983 430.736 63.6475C430.123 63.4065 429.62 62.9381 429.106 62.549C427.911 61.8294 426.643 61.6643 425.372 62.1434C423.337 62.9257 421.232 63.6186 419.042 63.7361C409.842 64.4719 402.039 59.4274 399.009 51.1371C398.072 48.4368 397.045 45.8055 397.675 42.8258C397.878 41.8854 397.368 40.8522 397.491 39.9015C397.948 33.9183 400.403 28.6786 404.794 24.6579C408.02 21.5331 412.081 20.0476 416.573 19.585C421.798 19.0569 426.3 20.3682 430.286 23.7877C431.816 25.0343 433.49 25.1717 435.15 24.1794C436.72 23.2559 438.367 22.9868 440.168 23.3826C442.366 23.8299 443.627 25.2832 443.417 27.5118C443.328 29.4339 442.991 31.4042 442.743 33.3056C442.485 35.2863 442.228 37.2669 441.98 39.1683C441.643 41.1387 441.474 43.0504 441.217 45.0311C441.137 45.0207 441.137 45.0207 441.058 45.0104ZM429.492 49.0637C430.853 46.6626 431.679 44.0308 431.633 41.2855C431.384 33.9212 426.071 28.3148 417.622 29.4705C415.986 29.6603 414.536 30.2772 413.193 31.3109C409.969 33.7916 408.417 37.0539 407.822 41.0049C406.848 47.2431 412.154 54.1378 418.02 54.2571C422.684 54.945 427.392 52.8187 429.492 49.0637Z"
                                                    fill="white">
                                                </path>
                                                <path
                                                    d="M389.028 49.5076C390.569 49.9619 391.194 51.3813 390.426 52.8622C390.259 53.3183 389.919 53.8232 389.609 54.1711C383.842 60.1536 376.986 62.4336 368.808 60.9665C359.579 59.4632 352.05 51.1262 351.071 41.2645C350.323 34.0486 352.704 27.913 357.949 22.9701C359.827 21.2115 362.117 19.856 364.519 18.7657C365.142 18.4773 365.953 18.0615 366.596 18.1019C369.575 18.2593 372.14 16.3055 375.216 16.8066C378.435 17.4159 381.609 18.2607 384.462 19.9393C388.703 22.4498 391.857 25.9743 393.66 30.6252C393.997 31.4209 394.241 32.2802 394.407 33.1247C394.595 34.7053 393.371 36.0185 391.865 35.8146C389.794 35.5853 387.753 35.1989 385.85 34.5133C383.947 33.8278 382.708 32.2109 381.641 30.5453C380.686 29.1449 379.437 28.0138 377.912 27.4811C373.051 25.6665 367.98 26.2515 364.562 30.5644C361.158 34.7989 360.423 39.5386 362.373 44.7051C363.662 48.2018 366.52 50.2878 369.885 51.4127C372.401 52.2956 375.076 51.9077 377.508 50.6604C378.053 50.3571 378.613 49.9752 379.158 49.6719C381.06 48.6495 383.029 48.1278 385.197 48.7009C386.438 49.0172 387.802 49.1128 389.028 49.5076Z"
                                                    fill="white">
                                                </path>
                                                <path
                                                    d="M313.141 19.8444C313.429 21.6611 313.636 23.4869 313.853 25.3921C314.63 32.2189 315.408 39.0458 316.185 45.8726C316.402 47.7778 316.627 49.7624 316.765 51.6766C316.837 52.3116 316.919 53.0261 316.911 53.6702C316.942 55.3552 316.558 56.9268 314.762 58.0962C312.53 58.2698 310.378 58.4344 308.223 57.8756C306.573 57.5006 304.951 58.0873 303.612 59.0438C301.217 60.603 298.624 61.1394 295.837 61.3763C288.842 62.0921 281.049 57.9133 278.996 49.0606C277.201 41.063 276.826 32.8234 275.746 24.7445C275.314 21.6576 277.197 19.8351 279.914 19.6866C280.558 19.6937 281.184 19.542 281.828 19.5491C284.069 19.4549 285.563 20.5714 285.984 22.8554C286.065 23.5698 286.156 24.3636 286.246 25.1574C286.671 28.8884 287.184 32.6897 287.538 36.5091C287.723 39.5437 288.463 42.515 289.283 45.4773C289.88 47.902 291.227 49.8394 293.603 50.9359C297.852 52.9449 303.042 50.5047 304.212 45.9489C305.007 43.044 304.991 40.0708 304.656 37.1336C304.114 32.3707 303.572 27.6078 303.03 22.8449C302.93 21.9717 302.831 21.0985 302.811 20.2162C302.877 18.6808 303.923 17.2752 305.484 16.8563C306.666 16.6414 307.847 16.4265 309.056 16.4497C311.306 16.4348 312.721 17.5604 313.141 19.8444Z"
                                                    fill="white">
                                                </path>
                                                <path
                                                    d="M262.35 22.697C268.582 26.9314 271.778 33.0833 271.857 40.7532C272.097 51.7787 264.427 60.9666 253.482 62.884C252.204 63.1237 250.925 63.0438 249.567 63.1237C237.982 63.2835 227.357 53.8559 227.436 40.8331C227.436 36.2791 228.635 31.8849 231.351 28.2097C233.908 24.6145 237.263 21.8981 241.498 20.2203C248.928 17.424 255.959 18.2229 262.35 22.697ZM260.033 47.0649C262.11 43.0701 262.19 36.5188 258.116 32.1246C254.121 27.7304 248.369 27.0113 243.895 29.9674C239.341 32.9235 237.184 37.4775 237.903 42.9104C238.781 48.9025 243.815 53.9358 249.727 53.3766C253.642 53.8559 258.355 50.3406 260.033 47.0649Z"
                                                    fill="white">
                                                </path>
                                                <path
                                                    d="M226.646 17.6776C227.591 18.729 228.001 19.4896 227.302 20.9488C226.815 21.8661 226.393 22.95 225.906 23.8673C224.074 27.1463 222.17 30.3383 220.426 33.5452C218.398 37.207 216.529 40.8838 214.58 44.553C210.517 51.9562 206.446 59.439 202.375 66.9217C201.692 68.2219 200.713 69.2536 199.524 69.9448C197.243 71.1755 194.806 70.6264 192.544 69.9332C191.533 69.5977 190.986 68.5835 191.169 67.4773C191.259 66.5228 191.507 65.5831 191.907 64.7379C193.282 62.058 194.569 59.4503 196.167 56.9519C198.128 54.0059 198.158 51.1199 197.096 47.891C195.848 44.0829 194.686 40.2026 193.525 36.3224C191.819 30.5456 190.106 24.8483 188.479 19.0789C188.236 18.2537 187.999 17.3489 188.081 16.4739C188.086 14.7089 189.224 13.6921 190.989 13.6969C191.626 13.7565 192.262 13.8161 192.978 13.8831C192.985 13.8035 192.993 13.724 193 13.6444C194.33 14.0097 195.747 14.3029 196.968 14.9789C198.275 15.5828 199.046 16.7784 199.469 18.2623C200.384 22.1998 201.386 26.0651 202.381 30.0099C202.789 31.653 203.269 33.3831 203.756 35.0336C203.878 35.4462 204 35.8589 204.201 36.279C204.957 37.6336 206.787 37.8049 207.709 36.5271C208.072 36.0796 208.355 35.6247 208.566 35.0828C210.654 30.7846 212.741 26.4864 214.757 22.1012C215.237 21.2634 215.644 20.3386 216.124 19.5009C217.076 17.9049 218.301 16.816 220.369 17.0096C221.483 17.1139 222.713 16.8279 223.921 16.7805C224.891 16.7108 225.838 16.8797 226.646 17.6776Z"
                                                    fill="white">
                                                </path>
                                                <path
                                                    d="M156.528 25.5064C157.38 26.4392 157.52 27.6187 156.689 28.7399C155.017 31.3895 153.327 34.1171 151.576 36.7489C148.399 41.6766 145.203 46.6822 142.104 51.6278C140.826 53.63 139.607 55.728 138.329 57.7302C136.92 59.9483 135.408 61.897 132.139 62.2138C129.467 61.356 128.362 59.3816 128.267 56.5733C128.176 51.9624 127.815 47.4537 127.55 42.885C127.47 41.8013 127.408 40.6396 127.059 39.6581C126.584 38.1558 124.99 37.9549 123.908 39.1005C123.568 39.5142 123.287 40.0237 123.024 40.4553C121.341 43.5122 119.579 46.5512 117.974 49.6259C117.448 50.4891 117.078 51.388 116.648 52.1912C116.087 53.2101 115.544 54.1512 114.94 54.9966C113.602 56.9031 112.082 57.4565 110.153 56.9328C108.146 56.3912 107.054 55.0756 106.781 53.046C106.49 51.0942 106.2 49.1425 105.987 47.2086C104.803 37.3477 103.541 27.469 102.357 17.6082C102.308 17.1052 102.277 16.5244 102.324 15.9614C102.59 13.7273 103.887 12.7131 106.104 13.0568C107.601 13.3178 109.099 13.5787 110.454 14.4628C111.472 15.024 112.186 15.8432 112.422 16.9626C112.615 17.9085 112.808 18.8543 112.828 19.8424C113.122 23.9259 113.399 28.0874 113.675 32.2488C113.73 33.0811 113.846 34.0091 114.074 34.7992C114.448 36.0322 116.179 36.3467 116.992 35.3034C117.577 34.5359 118.103 33.6727 118.55 32.7917C120.586 28.9138 122.604 25.1138 124.717 21.2538C126.138 18.6285 129.454 17.7487 132.079 19.1695C133.806 20.2206 134.593 21.7943 134.632 23.7703C134.782 27.411 134.871 30.956 135.021 34.5967C135.023 35.6626 135.007 36.8064 135.087 37.8902C135.117 38.471 135.286 39.1654 135.473 39.7818C135.9 40.7812 137.224 41.0844 137.965 40.3526C138.611 39.6808 139.214 38.8354 139.722 38.0501C140.922 36.03 141.949 34.0522 143.149 32.0321C144.254 30.0721 145.514 28.1477 146.636 26.1098C147.741 24.1497 149.315 23.3626 151.531 23.7063C152.561 23.8603 153.705 23.8763 154.699 24.1861C155.382 24.4245 156.09 24.9143 156.528 25.5064Z"
                                                    fill="white">
                                                </path>
                                                <path
                                                    d="M85.6367 20.7439C91.8685 24.9783 95.0642 31.1302 95.1441 38.8001C95.3838 49.8255 87.714 59.0134 76.7685 60.9309C75.4902 61.1706 74.2119 61.0907 72.8537 61.1706C61.2691 61.3304 50.6432 51.9028 50.7231 38.88C50.7231 34.326 51.9215 29.9318 54.6379 26.2566C57.1945 22.6613 60.5501 19.9449 64.7844 18.2671C72.2146 15.4708 79.2452 16.2698 85.6367 20.7439ZM83.3198 45.1118C85.3971 41.117 85.477 34.5657 81.4024 30.1714C77.4077 25.7772 71.6553 25.0582 67.1813 28.0143C62.6273 30.9704 60.4702 35.5244 61.1892 40.9572C62.068 46.9493 67.1014 51.9827 73.0135 51.4234C76.9283 51.9028 81.642 48.3874 83.3198 45.1118Z"
                                                    fill="white">
                                                </path>
                                                <path
                                                    d="M44.0187 29.863C44.8558 37.2459 45.6928 44.6288 46.6093 52.0027C46.7533 53.2729 46.9063 54.6225 46.3268 55.8943C45.8177 57.0777 45.1049 57.8822 43.7553 58.0352C42.4852 58.1792 41.1446 58.4116 39.8565 58.3968C37.686 58.4017 36.6164 57.4777 36.3734 55.3342C35.79 50.8976 35.286 46.452 34.7819 42.0064C34.6829 41.1331 34.6633 40.2509 34.4849 39.3866C34.0488 37.6671 32.7934 36.523 31.0813 36.3151C30.6753 36.2807 30.19 36.2553 29.7931 36.3003C27.094 36.6063 24.3859 36.8329 21.6868 37.139C20.7342 37.247 19.7905 37.4344 18.8379 37.5424C16.4474 37.733 15.2148 38.918 15.0699 41.1858C15.0625 41.8299 15.1345 42.465 15.2065 43.1001C15.6656 47.1488 16.1156 51.1181 16.5746 55.1668C16.7186 56.437 16.951 57.7775 16.4509 59.0403C15.9599 60.3825 15.1856 61.3548 13.6773 61.5258C12.3277 61.6788 10.9078 61.9202 9.45188 61.844C7.6694 61.7245 6.59077 60.7211 6.55153 58.9566C6.41166 55.5954 5.63672 52.3062 5.17931 48.981C4.57052 45.0297 4.50842 40.936 3.89963 36.9847C3.65824 35.5647 3.50523 34.2152 3.26383 32.7952C2.94144 30.6608 2.45127 28.465 2.37603 26.3829C2.33355 23.1715 1.90315 20.0844 1.54313 16.909C1.21173 14.6952 1.0301 12.384 0.848473 10.0728C0.684845 7.92036 1.60885 6.85071 3.74325 6.52831C4.92503 6.31392 6.11581 6.17891 7.31559 6.12329C8.98268 5.93428 10.1137 6.69052 10.6816 8.15385C11.1432 9.38803 11.455 10.7196 11.599 11.9898C12.0294 15.0768 12.3894 18.2523 12.7494 21.4277C12.8394 22.2216 12.859 23.1038 13.0374 23.9681C13.4752 26.411 14.9074 27.696 17.3773 27.4963C21.1174 27.1527 24.9279 26.7207 28.7204 26.1299C31.4899 25.7355 32.6775 24.1535 32.4418 21.366C32.0532 17.2289 31.5058 13.1098 31.0377 8.98177C30.9387 8.10852 30.8397 7.23527 30.8291 6.43241C30.7809 4.58853 31.7049 3.51889 33.354 3.17111C34.6855 2.85932 35.9557 2.71531 37.3232 2.72108C39.3169 2.57545 40.8194 3.77201 41.2122 5.81804C41.3816 6.60291 41.4626 7.31738 41.5526 8.11124C42.3717 15.3354 43.1997 22.6389 44.0187 29.863Z"
                                                    fill="white">
                                                </path>
                                            </svg>
                                        </div>
                                        <div
                                            class="heading-container-mobile flex md:hidden px-[50px] pt-[40px] md:px-[55px] overflow-visible w-full block mx-auto justify-center [&amp;_svg_path]:translate-y-[-200%] [&amp;_svg]:h-[85px]">
                                            <svg fill="none" height="104" viewbox="0 0 445 104" width="445"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M329.779 85.5269C330.027 83.3883 330.332 81.2578 330.637 79.1274C330.934 77.0545 331.223 75.0393 331.519 72.9664C332.047 69.2813 332.69 65.6128 333.103 61.9112C333.359 59.3036 334.831 58.0456 337.447 58.6552C337.9 58.7788 338.426 58.7954 338.87 58.9765C339.989 59.3717 340.688 60.2357 340.745 61.4779C340.786 62.0126 340.703 62.5884 340.629 63.1066C339.565 70.5343 338.51 77.9044 337.446 85.3322C337.364 85.908 337.265 86.5989 337.01 87.15C336.515 88.5482 335.553 89.1155 334.039 89.0162C333.406 88.9255 332.764 88.8924 332.197 88.7524C330.428 88.3816 329.581 87.3201 329.779 85.5269ZM333.388 91.9198C335.346 92.2002 336.177 93.3768 335.937 95.4579C335.954 95.754 335.912 96.0419 335.805 96.3791C335.402 98.3779 334.348 99.1673 332.325 98.9362C332.029 98.9526 331.691 98.8455 331.403 98.8043C331.058 98.7548 330.77 98.7136 330.482 98.6723C328.919 98.5073 328.196 97.4047 328.328 96.0722C328.518 92.6914 329.202 91.2027 333.388 91.9198Z"
                                                    fill="white">
                                                </path>
                                                <path
                                                    d="M320.159 74.0963C319.943 77.9662 319.386 81.8069 319.113 85.672C318.844 89.4802 318.462 93.2788 318.137 97.0822C318.103 97.4796 318.069 97.8769 318.04 98.2175C317.78 100.597 316.799 101.371 314.523 101.233C313.667 101.217 312.825 101.031 312.069 100.509C311.856 100.319 311.582 100.182 311.313 99.987C310.392 99.3936 309.422 99.3679 308.408 99.8531C307.636 100.187 306.817 100.403 305.993 100.676C303.403 101.541 300.802 101.204 298.239 100.413C295.568 99.5561 293.409 98.0564 291.591 95.8997C286.135 89.4864 286.472 80.1945 292.433 74.0137C295.947 70.3685 300.535 68.8736 305.619 69.5942C307.256 69.8484 308.816 70.3249 310.03 71.515C310.663 72.1409 311.49 72.4976 312.612 72.0788C312.998 70.911 313.038 69.7708 313.14 68.5787C313.266 67.1027 313.335 65.6219 313.518 64.1508C313.778 62.4575 314.83 61.5182 316.543 61.5502C317.399 61.5662 318.251 61.639 319.097 61.7686C320.223 61.9791 320.903 62.7234 320.919 63.8685C320.984 64.4459 320.874 65.0654 320.877 65.6947C320.635 68.5331 320.283 71.305 320.159 74.0963ZM308.608 92.8367C310.301 91.0944 312.06 89.2434 312.056 86.6127C312.315 84.9194 312.101 83.4143 311.597 81.9418C309.462 76.1554 302.85 74.561 298.323 78.6915C295.597 81.146 294.711 84.1581 295.607 87.7228C296.846 92.6319 300.286 94.5271 304.711 94.2763C306.144 94.2273 307.664 93.8425 308.608 92.8367Z"
                                                    fill="white">
                                                </path>
                                                <path
                                                    d="M285.131 84.8685C285.301 86.9196 284.333 88.1161 282.681 89.0277C282.339 89.1986 281.94 89.4265 281.427 89.6544C281.655 90.1102 281.712 90.2811 281.769 90.395C283.82 92.2182 283.307 93.1868 282.168 94.7821C279.889 97.8587 277.04 100.081 273.109 100.878C269.52 101.619 266.158 101.22 262.854 99.7958C259.378 98.2575 256.985 95.5797 255.39 92.1043C254.364 89.8823 253.852 87.4894 253.966 85.0964C254.136 81.3931 255.276 77.9177 257.783 75.069C260.745 71.5366 264.677 69.8843 269.178 69.5425C270.602 69.4285 271.969 69.5994 273.337 69.9983C276.869 70.9668 279.946 72.79 282.111 75.7527C283.023 76.9491 283.706 78.4305 284.219 79.8548C284.846 81.4501 285.017 83.1593 285.131 84.8685ZM262.797 80.4815C262.455 81.2792 262.797 82.0768 263.594 82.4756C263.993 82.6465 264.506 82.8744 264.905 82.8175C267.013 82.3617 269.064 83.1593 271.172 82.8744C272.083 82.8744 273.052 82.9884 273.964 82.8744C274.59 82.7605 275.331 82.4756 275.901 82.1338C276.641 81.678 276.812 80.8803 276.413 80.0827C275.844 78.8293 274.875 77.9177 273.679 77.291C270.488 75.8096 266.842 75.9806 263.936 78.7153C263.48 79.1711 263.081 79.8548 262.797 80.4815ZM274.533 92.8449C275.958 91.7624 277.496 90.9078 279.205 90.2241C279.091 89.9393 279.034 89.6544 278.92 89.5404C278.692 89.3125 278.408 89.1986 278.123 89.1416C276.926 88.9707 275.787 88.8567 274.647 88.7428C274.191 88.6858 273.679 88.6288 273.28 88.7428C272.254 88.9707 271.286 88.9137 270.26 88.7428C268.323 88.5719 266.386 88.5149 264.506 89.0277C263.195 89.3125 262.74 90.452 263.48 91.4776C265.076 93.5286 267.298 94.3832 269.747 94.4402C271.457 94.4972 273.166 93.9275 274.533 92.8449Z"
                                                    fill="white">
                                                </path>
                                                <path
                                                    d="M252.192 69.0524C253.359 69.441 253.775 70.5642 253.334 71.6694C252.971 72.5525 252.499 73.3689 252.083 74.1903C248.56 81.087 245.032 88.0404 241.452 94.9321C241.313 95.2059 241.226 95.5414 241.088 95.8152C240.112 97.1592 238.855 97.7923 237.096 97.6376C235.28 97.4779 234.214 96.5835 233.488 95.0897C233.451 94.8577 233.414 94.6257 233.321 94.3887C231.232 87.5706 229.087 80.7474 227.003 73.8725C226.545 72.574 226.211 71.1719 225.81 69.8784C225.227 68.0541 226.183 66.9371 227.91 66.8031C228.483 66.7962 229.051 66.8461 229.164 66.8561C232.11 67.1723 232.964 67.8765 233.667 70.2833C234.643 74.1439 235.681 77.9528 236.714 81.8184C236.891 82.4059 237.006 83.0452 237.245 83.5809C237.718 84.7092 238.961 84.8757 239.624 83.8473C240.009 83.3664 240.229 82.8138 240.511 82.2095C242.079 78.6869 243.596 75.1027 245.22 71.5851C245.512 70.8672 245.969 70.2211 246.478 69.6367C246.854 69.2694 247.343 68.912 247.812 68.7817C249.276 68.3956 250.798 68.6439 252.192 69.0524Z"
                                                    fill="white">
                                                </path>
                                                <path
                                                    d="M220.764 77.7378C220.659 81.5074 221.296 85.2986 221.362 89.06C221.403 91.1115 221.498 93.1033 221.536 95.0979C221.569 95.7808 221.661 96.5179 221.694 97.2008C221.749 99.5368 220.535 100.393 218.941 100.469C218.199 100.448 217.518 100.537 216.833 100.513C215.291 100.473 214.573 99.7656 214.385 98.2344C214.361 97.7223 214.334 97.1532 214.306 96.5841C214.168 93.6817 214.026 90.7224 213.885 87.7631C213.744 84.8038 213.602 81.8446 213.404 78.888C213.36 77.9774 213.26 77.0696 213.16 76.1618C213.084 75.7661 213.008 75.3705 213.046 74.9694C213.254 73.3623 213.121 71.7716 212.814 70.1321C212.654 69.1701 212.89 68.1321 212.898 67.105C212.844 65.9668 212.73 64.7745 212.732 63.6336C212.705 61.8667 213.407 61.0346 215.165 60.8365C215.959 60.7415 216.756 60.7034 217.501 60.7819C219.046 60.8792 219.594 61.5946 219.838 63.123C220.231 65.3857 220.053 67.6188 220.215 69.8356C220.283 71.2583 220.519 72.616 220.587 74.0387C220.701 75.2311 220.761 76.4831 220.764 77.7378Z"
                                                    fill="white">
                                                </path>
                                                <path
                                                    d="M202.196 75.1683C206.64 78.1879 208.919 82.5749 208.976 88.0445C209.147 95.9069 203.677 102.459 195.872 103.826C194.96 103.997 194.049 103.94 193.08 103.997C184.819 104.111 177.241 97.3882 177.298 88.1014C177.298 84.8539 178.153 81.7203 180.09 79.0995C181.913 76.5357 184.306 74.5985 187.326 73.4021C192.624 71.408 197.638 71.9777 202.196 75.1683ZM200.544 92.5454C202.025 89.6967 202.082 85.0248 199.176 81.8912C196.328 78.7577 192.226 78.2449 189.035 80.3529C185.787 82.461 184.249 85.7085 184.762 89.5828C185.389 93.8558 188.978 97.4452 193.194 97.0464C195.986 97.3882 199.347 94.8814 200.544 92.5454Z"
                                                    fill="white">
                                                </path>
                                                <path
                                                    d="M176.011 72.3326C177.163 72.7635 177.538 73.9012 177.057 74.9895C176.662 75.8588 176.16 76.6574 175.715 77.4631C171.942 84.2266 168.163 91.0467 164.333 97.8031C164.185 98.0717 164.086 98.4038 163.938 98.6724C162.913 99.9799 161.634 100.567 159.882 100.348C158.073 100.122 157.041 99.1894 156.369 97.6701C156.341 97.4369 156.313 97.2037 156.228 96.9635C154.389 90.0736 152.494 83.1768 150.663 76.2304C150.253 74.916 149.97 73.5027 149.616 72.1954C149.1 70.3511 150.096 69.2697 151.828 69.1988C152.4 69.2128 152.966 69.2834 153.079 69.2975C156.011 69.721 156.838 70.4559 157.454 72.8867C158.288 76.7804 159.186 80.6246 160.077 84.5253C160.233 85.1189 160.325 85.762 160.544 86.3061C160.975 87.4508 162.212 87.6626 162.911 86.659C163.314 86.1926 163.554 85.6484 163.858 85.0547C165.553 81.5917 167.199 78.0651 168.951 74.6092C169.269 73.9025 169.75 73.2735 170.28 72.708C170.668 72.3546 171.17 72.0153 171.644 71.9022C173.12 71.5698 174.633 71.8735 176.011 72.3326Z"
                                                    fill="white">
                                                </path>
                                                <path
                                                    d="M145.347 82.1864C145.347 87.2571 145.347 92.3278 145.347 97.3985C145.347 97.7973 145.347 98.1391 145.29 98.538C145.119 99.6774 144.492 100.361 143.296 100.418C142.213 100.475 141.131 100.532 140.048 100.418C138.852 100.304 138.225 99.6774 138.054 98.481C137.94 97.5694 137.94 96.6008 137.94 95.6892C137.94 92.7836 137.94 89.9349 137.94 87.0292C137.94 85.8897 137.883 84.6932 137.883 83.5537C137.826 82.1864 137.485 80.9329 136.915 79.7365C135.377 76.4889 132.129 75.5773 129.109 77.5145C127.856 78.3121 127.115 79.4516 126.716 80.819C126.318 82.2433 126.147 83.7247 126.147 85.206C126.147 89.0233 126.147 92.8405 126.147 96.6578C126.147 96.9427 126.147 97.2845 126.147 97.5694C126.09 99.5065 125.349 100.304 123.469 100.418C122.557 100.532 121.646 100.475 120.677 100.418C119.538 100.304 118.854 99.5635 118.74 98.424C118.74 98.0252 118.74 97.6264 118.74 97.2845C118.74 93.3533 118.74 89.4791 118.74 85.6048C118.74 82.0154 118.683 78.4261 118.74 74.8367C118.74 74.3239 118.74 73.7542 118.74 73.1844C118.683 71.5891 119.879 70.7345 121.19 70.5636C122.158 70.4497 123.241 70.3927 124.153 70.8485C125.748 71.7031 127.286 71.4182 128.881 70.7345C129.622 70.4497 130.477 70.1648 131.274 69.9939C136.06 68.9114 139.821 70.7345 142.84 74.3239C143.524 75.1215 143.98 76.2041 144.379 77.1726C144.948 78.7679 145.347 80.4771 145.347 82.1864Z"
                                                    fill="white">
                                                </path>
                                                <path
                                                    d="M113.961 93.9712C114.219 94.9203 114.198 95.9519 114.348 96.9681C114.43 97.876 114.219 98.6961 113.651 99.3769C113.398 99.7431 112.975 100.125 112.578 100.161C111.454 100.377 110.272 100.599 109.117 100.475C107.962 100.351 107.136 99.4535 107.028 98.262C106.812 95.8788 106.368 93.5163 106.549 91.0971C106.57 90.6948 106.539 90.3544 106.446 89.9623C106.287 88.8327 106.008 87.6566 105.905 86.5217C105.56 82.7201 105.215 78.9185 104.875 75.1736C104.818 74.5494 104.761 73.9253 104.818 73.2908C105.014 71.6712 106.02 70.7789 107.331 70.7172C108.017 70.7121 108.749 70.5884 109.435 70.5833C110.818 70.6866 111.746 71.4605 112.04 72.8068C112.225 73.5909 112.298 74.3852 112.365 75.1229C112.792 79.8324 113.22 84.5419 113.652 89.3081C113.735 90.216 113.766 91.1857 114.679 91.7893C114.183 92.6352 113.771 93.1303 113.961 93.9712ZM108.425 67.643C104.7 68.21 103.798 66.4612 103.855 63.3096C103.886 62.3914 104.928 61.267 105.877 61.0092C106.269 60.9164 106.666 60.8804 106.666 60.8804C107.291 60.8237 107.518 60.8031 107.745 60.7825C109.968 60.6951 111.087 61.6804 111.339 63.8314C111.52 65.8174 110.4 67.3492 108.425 67.643Z"
                                                    fill="white">
                                                </path>
                                                <path
                                                    d="M441.747 31.5379C443.213 31.5309 444.022 32.1665 444.251 33.6049C444.358 34.4941 444.403 35.3345 444.503 36.1681C444.577 36.7795 444.297 37.2642 443.823 37.5467C443.036 38.036 442.167 38.3096 441.215 38.3677C440.653 38.3789 440.035 38.3968 439.417 38.4148C435.473 38.4379 432.369 37.0069 430.413 33.4081C429.608 31.8698 429.025 30.3048 428.874 28.5752C428.7 27.1302 428.526 25.6851 428.352 24.2401L428.297 24.2468C428.11 22.6906 427.929 21.19 427.749 19.6894C427.709 19.3559 427.662 18.9669 427.622 18.6334C427.33 17.1461 426.521 16.5105 425.062 16.5731C424.611 16.571 424.117 16.6867 423.611 16.6913C422.646 16.6382 421.801 16.1759 421.514 15.1956C421.151 14.0552 421.004 12.8324 421.308 11.6118C421.499 10.8559 421.946 10.3511 422.773 10.1953C423.273 10.1352 424.774 9.95474 425.267 9.83901C426.686 9.44295 426.497 8.33806 426.156 6.91308C425.856 5.82156 426.056 4.6699 425.86 3.50944C425.766 2.73135 426.499 1.79743 427.327 1.64161C428.369 1.40349 429.481 1.26983 430.544 1.19843C431.724 1.16925 432.485 1.86715 432.736 3.02093C432.948 3.84123 432.999 4.73717 433.099 5.57084C433.358 8.1897 433.438 8.85664 436.106 8.53586C436.891 8.49788 438.385 8.26187 439.169 8.22389C440.288 8.14581 441.159 8.83034 441.349 9.93523C441.491 10.6511 441.578 11.3736 441.609 12.1028C441.79 13.6034 441.21 14.4061 439.729 14.7533C439.402 14.8489 439.013 14.8957 438.68 14.9358C438.013 15.016 437.339 15.0406 436.679 15.1764C435.289 15.3435 434.422 15.1658 434.422 16.5753C434.442 16.7421 434.469 16.9644 434.489 17.1311C434.83 19.9656 435.242 23.8627 435.639 26.6906C435.801 27.5731 436.075 28.4423 436.46 29.2982C437.223 30.9543 438.755 31.503 440.462 31.636C440.914 31.6381 441.352 31.5291 441.747 31.5379Z"
                                                    fill="white">
                                                </path>
                                                <path
                                                    d="M421.954 24.1195C422.654 26.0167 422.051 27.4037 420.725 28.7004C420.447 28.9519 420.129 29.2724 419.703 29.6227C420.038 29.9945 420.137 30.1413 420.221 30.2343C422.642 31.4223 422.41 32.4739 421.75 34.2834C420.399 37.7945 418.285 40.6459 414.772 42.4327C411.568 44.0759 408.28 44.5804 404.777 44.099C401.083 43.5545 398.114 41.647 395.692 38.775C394.138 36.9402 393.024 34.8091 392.504 32.5135C391.694 28.9622 391.861 25.3726 393.487 22.0175C395.365 17.8954 398.654 15.2994 402.826 13.7946C404.145 13.3129 405.485 13.1159 406.884 13.1347C410.483 13.1248 413.875 14.0437 416.702 16.2807C417.879 17.1743 418.915 18.3975 419.775 19.6116C420.787 20.9576 421.397 22.5311 421.954 24.1195ZM399.655 25.8266C399.54 26.6715 400.073 27.337 400.933 27.5053C401.356 27.5625 401.901 27.6437 402.264 27.4851C404.14 26.5004 406.292 26.7174 408.213 25.8944C409.076 25.6552 410.023 25.5089 410.857 25.1618C411.42 24.8895 412.047 24.4254 412.496 23.9522C413.078 23.3263 413.031 22.5262 412.444 21.8756C411.575 20.8384 410.419 20.2294 409.122 19.95C405.712 19.3847 402.304 20.5034 400.27 23.8552C399.958 24.4064 399.76 25.1584 399.655 25.8266ZM414.013 34.4527C415.077 33.054 416.309 31.8411 417.749 30.7452C417.566 30.5054 417.437 30.2507 417.299 30.1727C417.024 30.0167 416.724 29.9835 416.439 30.0044C415.262 30.1565 414.153 30.3476 413.044 30.5388C412.597 30.6044 412.097 30.685 411.749 30.8976C410.838 31.3825 409.906 31.5827 408.89 31.69C407.011 32.0365 405.162 32.4909 403.516 33.4698C402.35 34.0834 402.217 35.2819 403.188 36.0585C405.237 37.5819 407.565 37.808 409.9 37.2191C411.533 36.8245 413.002 35.8365 414.013 34.4527Z"
                                                    fill="white">
                                                </path>
                                                <path
                                                    d="M389.276 21.401C389.026 24.1331 388.832 26.8714 388.526 29.5973C388.233 32.2119 387.835 34.7584 387.381 37.2987C386.815 40.3333 385.866 43.2687 383.75 45.5662C381.119 48.4256 377.934 50.2089 374.001 50.6129C372.517 50.7844 370.941 50.7766 369.439 50.6082C364.586 50.1766 360.861 47.731 358.164 43.6544C357.824 43.1657 357.553 42.572 357.393 41.9907C357.072 40.8282 357.865 39.2836 359.522 39.582C360.795 39.7811 362.062 40.0359 363.336 40.235C364.269 40.4523 364.998 40.9847 365.659 41.6221C366.98 42.8969 368.525 43.6898 370.293 44.0007C372.994 44.5289 375.467 44.074 377.54 42.166C378.041 41.7152 378.394 41.0789 378.685 40.4919C378.834 40.1706 378.767 39.7687 378.693 39.4224C378.576 38.9587 377.871 38.7107 377.562 38.9576C377.129 39.3034 376.745 39.711 376.176 40.2668C372.43 40.0156 368.72 39.9377 365.403 37.8757C363.296 36.5692 361.554 35.0219 360.165 32.8383C358.777 30.6547 357.914 28.3048 357.688 25.8009C357.199 20.1132 359.089 15.3118 363.872 11.8488C364.119 11.6512 364.36 11.5093 364.608 11.3117C366.73 9.46553 369.321 8.96746 372.041 8.82189C375.095 8.71376 377.951 9.37196 380.453 11.1734C381.645 12.0957 382.949 12.0167 384.143 11.4183C385.393 10.8261 386.561 10.9572 387.717 11.1994C389.367 11.5535 390.2 12.6609 390.013 14.3298C389.801 16.7281 389.483 19.0583 389.276 21.401ZM379.302 30.478C381.542 27.5749 382.251 24.2745 380.838 20.7927C379.562 17.6078 377.128 15.7013 373.703 15.5988C369.147 15.5385 365.769 18.5394 364.948 23.348C364.755 24.5656 364.988 26 365.457 27.3482C366.363 30.3225 368.382 32.4079 371.466 33.0354C374.439 33.6505 377.333 32.9611 379.302 30.478Z"
                                                    fill="white">
                                                </path>
                                                <path
                                                    d="M332.225 20.89C332.857 25.7083 333.489 30.5265 334.12 35.3447C334.17 35.7237 334.213 36.0485 334.208 36.4346C334.188 37.5386 333.678 38.2663 332.548 38.4696C331.526 38.6586 330.505 38.8476 329.462 38.8742C328.311 38.915 327.637 38.3976 327.325 37.282C327.104 36.43 326.983 35.5096 326.869 34.6434C326.507 31.8824 326.152 29.1756 325.79 26.4146C325.648 25.3318 325.445 24.202 325.303 23.1193C325.079 21.8271 324.598 20.6787 323.907 19.6128C322.041 16.7186 318.841 16.257 316.213 18.4739C315.121 19.388 314.56 20.5631 314.351 21.9121C314.149 23.3152 314.172 24.7441 314.356 26.1516C314.832 29.7788 315.307 33.406 315.783 37.0332C315.819 37.3039 315.861 37.6288 315.897 37.8994C316.084 39.7472 315.479 40.5974 313.707 40.94C312.855 41.1618 311.982 41.2213 311.054 41.2878C309.957 41.3215 309.215 40.7029 308.965 39.6343C308.915 39.2554 308.866 38.8764 308.823 38.5516C308.333 34.8161 307.85 31.1348 307.368 27.4534C306.92 24.0428 306.419 20.6392 306.026 17.2215C305.962 16.7342 305.891 16.1929 305.82 15.6515C305.567 14.1427 306.598 13.1816 307.822 12.8559C308.728 12.627 309.749 12.4379 310.672 12.7575C312.295 13.3708 313.721 12.9084 315.152 12.06C315.82 11.697 316.597 11.3198 317.333 11.058C321.746 9.43313 325.547 10.697 328.863 13.7314C329.612 14.4042 330.18 15.376 330.68 16.2466C331.42 17.6915 332.012 19.2659 332.225 20.89Z"
                                                    fill="white">
                                                </path>
                                                <path
                                                    d="M301.367 29.7129C301.13 32.38 300.893 35.0471 300.601 37.7072C300.446 38.8984 300.183 40.0755 299.973 41.2596C299.647 42.9239 298.423 43.8658 296.765 43.4848C295.906 43.3179 295.089 42.8261 294.312 42.4496C293.893 42.2849 293.549 41.9648 293.198 41.6989C292.381 41.2071 291.515 41.0943 290.647 41.4217C289.255 41.9564 287.817 42.4298 286.32 42.5102C280.032 43.013 274.699 39.5655 272.629 33.8999C271.988 32.0545 271.286 30.2562 271.717 28.2199C271.855 27.5772 271.507 26.8711 271.591 26.2214C271.904 22.1324 273.581 18.5515 276.582 15.8038C278.788 13.6682 281.563 12.653 284.632 12.3369C288.204 11.9759 291.281 12.8721 294.005 15.2091C295.05 16.061 296.194 16.1549 297.329 15.4767C298.402 14.8456 299.527 14.6617 300.759 14.9322C302.261 15.2379 303.122 16.2311 302.979 17.7541C302.918 19.0677 302.688 20.4142 302.519 21.7137C302.342 23.0673 302.166 24.4209 301.997 25.7203C301.767 27.0669 301.651 28.3734 301.475 29.727C301.421 29.7199 301.421 29.7199 301.367 29.7129ZM293.462 32.4829C294.392 30.842 294.957 29.0434 294.926 27.1672C294.755 22.1344 291.124 18.3029 285.35 19.0927C284.231 19.2225 283.24 19.644 282.322 20.3504C280.119 22.0458 279.058 24.2753 278.652 26.9754C277.986 31.2387 281.613 35.9506 285.622 36.0321C288.809 36.5022 292.027 35.0491 293.462 32.4829Z"
                                                    fill="white">
                                                </path>
                                                <path
                                                    d="M265.809 32.7873C266.861 33.0977 267.289 34.0678 266.764 35.0798C266.649 35.3916 266.417 35.7366 266.205 35.9744C262.264 40.0629 257.579 41.621 251.989 40.6184C245.681 39.591 240.536 33.8935 239.867 27.1539C239.355 22.2225 240.983 18.0293 244.568 14.6513C245.851 13.4494 247.416 12.5231 249.057 11.778C249.484 11.5808 250.038 11.2967 250.477 11.3243C252.513 11.4319 254.266 10.0967 256.369 10.4391C258.568 10.8555 260.737 11.4329 262.688 12.58C265.586 14.2957 267.742 16.7044 268.974 19.8829C269.205 20.4267 269.371 21.0139 269.484 21.591C269.613 22.6713 268.776 23.5687 267.747 23.4294C266.332 23.2726 264.937 23.0085 263.636 22.54C262.336 22.0715 261.489 20.9666 260.76 19.8282C260.107 18.8712 259.253 18.0982 258.211 17.7342C254.889 16.494 251.423 16.8938 249.087 19.8413C246.761 22.7352 246.259 25.9744 247.591 29.5052C248.472 31.8949 250.425 33.3205 252.725 34.0892C254.444 34.6926 256.273 34.4275 257.935 33.5751C258.307 33.3678 258.69 33.1069 259.063 32.8996C260.362 32.2008 261.708 31.8443 263.19 32.236C264.038 32.4521 264.97 32.5175 265.809 32.7873Z"
                                                    fill="white">
                                                </path>
                                                <path
                                                    d="M213.942 12.5073C214.138 13.7489 214.28 14.9966 214.429 16.2987C214.96 20.9642 215.491 25.6297 216.022 30.2953C216.17 31.5973 216.325 32.9535 216.419 34.2617C216.468 34.6957 216.523 35.184 216.519 35.6242C216.54 36.7758 216.277 37.8498 215.049 38.649C213.524 38.7676 212.053 38.8801 210.581 38.4982C209.453 38.2419 208.344 38.6429 207.429 39.2965C205.792 40.3622 204.02 40.7287 202.115 40.8906C197.335 41.3798 192.009 38.524 190.606 32.4739C189.379 27.0083 189.123 21.3773 188.384 15.8561C188.089 13.7465 189.376 12.5009 191.233 12.3995C191.673 12.4043 192.101 12.3007 192.541 12.3055C194.073 12.2411 195.094 13.0041 195.381 14.565C195.437 15.0533 195.499 15.5958 195.561 16.1383C195.851 18.6881 196.201 21.2859 196.444 23.8961C196.57 25.97 197.076 28.0006 197.636 30.0251C198.044 31.6822 198.965 33.0062 200.589 33.7556C203.493 35.1286 207.04 33.4609 207.839 30.3474C208.383 28.3622 208.371 26.3302 208.143 24.3229C207.772 21.0679 207.402 17.8129 207.031 14.5579C206.963 13.9611 206.895 13.3644 206.882 12.7614C206.927 11.7121 207.642 10.7515 208.709 10.4652C209.516 10.3184 210.324 10.1715 211.15 10.1873C212.688 10.1772 213.654 10.9464 213.942 12.5073Z"
                                                    fill="white">
                                                </path>
                                                <path
                                                    d="M179.234 14.4565C183.493 17.3504 185.677 21.5547 185.731 26.7963C185.895 34.3312 180.653 40.6103 173.173 41.9208C172.299 42.0846 171.425 42.03 170.497 42.0846C162.58 42.1938 155.317 35.7509 155.372 26.8509C155.372 23.7387 156.191 20.7356 158.048 18.224C159.795 15.767 162.088 13.9105 164.982 12.7639C170.06 10.8529 174.865 11.3989 179.234 14.4565ZM177.65 31.1098C179.07 28.3798 179.124 23.9025 176.34 20.8994C173.609 17.8964 169.678 17.405 166.62 19.4252C163.508 21.4455 162.034 24.5577 162.525 28.2706C163.126 32.3656 166.566 35.8055 170.606 35.4233C173.282 35.7509 176.503 33.3484 177.65 31.1098Z"
                                                    fill="white">
                                                </path>
                                                <path
                                                    d="M154.832 11.0291C155.478 11.7476 155.758 12.2675 155.281 13.2647C154.948 13.8916 154.659 14.6323 154.326 15.2592C153.075 17.5001 151.773 19.6816 150.581 21.8732C149.195 24.3757 147.918 26.8884 146.586 29.3961C143.809 34.4555 141.027 39.5693 138.245 44.683C137.777 45.5716 137.108 46.2767 136.296 46.749C134.737 47.5901 133.072 47.2149 131.526 46.7411C130.834 46.5118 130.46 45.8187 130.586 45.0628C130.647 44.4104 130.817 43.7682 131.09 43.1906C132.03 41.3592 132.909 39.577 134.002 37.8695C135.342 35.8563 135.362 33.8839 134.636 31.6772C133.783 29.0747 132.989 26.423 132.196 23.7712C131.03 19.8232 129.859 15.9297 128.747 11.9868C128.581 11.4228 128.419 10.8045 128.475 10.2065C128.479 9.00031 129.257 8.3054 130.463 8.30866C130.898 8.34938 131.333 8.3901 131.822 8.43592C131.827 8.38155 131.832 8.32719 131.837 8.27283C132.746 8.52245 133.715 8.7228 134.549 9.18479C135.442 9.5975 135.969 10.4146 136.258 11.4287C136.884 14.1196 137.569 16.7612 138.248 19.4572C138.527 20.5801 138.855 21.7624 139.188 22.8904C139.272 23.1724 139.355 23.4544 139.493 23.7415C140.009 24.6673 141.26 24.7844 141.89 23.9111C142.138 23.6053 142.331 23.2944 142.476 22.924C143.902 19.9866 145.329 17.0491 146.707 14.0522C147.035 13.4797 147.313 12.8477 147.641 12.2752C148.291 11.1844 149.129 10.4403 150.542 10.5726C151.304 10.6439 152.144 10.4484 152.97 10.416C153.633 10.3684 154.28 10.4838 154.832 11.0291Z"
                                                    fill="white">
                                                </path>
                                                <path
                                                    d="M106.907 16.3814C107.489 17.0188 107.585 17.8249 107.017 18.5912C105.874 20.402 104.719 22.266 103.523 24.0646C101.351 27.4322 99.1672 30.8531 97.0488 34.233C96.1752 35.6013 95.3427 37.0351 94.4692 38.4034C93.5058 39.9193 92.4726 41.2511 90.2383 41.4676C88.412 40.8813 87.6567 39.532 87.5921 37.6128C87.5296 34.4616 87.283 31.3804 87.1018 28.2581C87.0474 27.5174 87.0051 26.7236 86.7666 26.0528C86.4416 25.0261 85.3527 24.8888 84.6132 25.6717C84.3804 25.9545 84.1886 26.3026 84.0091 26.5976C82.8584 28.6867 81.6545 30.7636 80.5571 32.8649C80.1979 33.4548 79.9452 34.0691 79.6514 34.618C79.2679 35.3143 78.8965 35.9575 78.4841 36.5352C77.5695 37.8382 76.5306 38.2164 75.2122 37.8585C73.8405 37.4883 73.0941 36.5892 72.9077 35.2022C72.709 33.8683 72.5103 32.5345 72.3649 31.2129C71.5556 24.4739 70.693 17.7226 69.8838 10.9836C69.8504 10.6399 69.8293 10.243 69.8614 9.85823C70.043 8.33142 70.93 7.63831 72.4447 7.87315C73.4682 8.05152 74.4916 8.22989 75.4176 8.83403C76.114 9.21757 76.6019 9.77743 76.7628 10.5425C76.8949 11.1889 77.0269 11.8353 77.0403 12.5105C77.2414 15.3013 77.4303 18.1452 77.6192 20.9892C77.657 21.558 77.7358 22.1922 77.8922 22.7322C78.1474 23.5748 79.3305 23.7897 79.8859 23.0767C80.2862 22.5522 80.6453 21.9623 80.9513 21.3602C82.3425 18.71 83.7215 16.1131 85.1659 13.4751C86.137 11.6809 88.4033 11.0797 90.1975 12.0507C91.3774 12.769 91.9153 13.8444 91.9421 15.1949C92.0445 17.683 92.1058 20.1057 92.2082 22.5937C92.2094 23.3222 92.1985 24.1039 92.2529 24.8445C92.274 25.2415 92.3894 25.716 92.517 26.1373C92.8087 26.8203 93.7135 27.0275 94.2202 26.5274C94.6614 26.0683 95.0738 25.4906 95.4208 24.9539C96.2411 23.5733 96.9428 22.2216 97.7632 20.8411C98.5181 19.5016 99.3794 18.1864 100.147 16.7937C100.901 15.4542 101.977 14.9163 103.492 15.1511C104.196 15.2564 104.977 15.2673 105.657 15.479C106.124 15.6419 106.608 15.9767 106.907 16.3814Z"
                                                    fill="white">
                                                </path>
                                                <path
                                                    d="M58.4585 13.1323C62.7175 16.0262 64.9016 20.2304 64.9562 25.4721C65.1201 33.007 59.8782 39.2861 52.3975 40.5965C51.5239 40.7603 50.6502 40.7057 49.722 40.7603C41.8045 40.8695 34.5423 34.4266 34.5969 25.5267C34.5969 22.4145 35.4159 19.4114 37.2725 16.8998C39.0198 14.4427 41.3131 12.5863 44.207 11.4397C49.2851 9.52867 54.0902 10.0747 58.4585 13.1323ZM56.875 29.7856C58.2947 27.0555 58.3493 22.5783 55.5645 19.5752C52.8343 16.5722 48.9029 16.0808 45.8451 18.101C42.7328 20.1212 41.2585 23.2335 41.7499 26.9463C42.3505 31.0414 45.7905 34.4812 49.8312 34.099C52.5067 34.4266 55.7283 32.0242 56.875 29.7856Z"
                                                    fill="white">
                                                </path>
                                                <path
                                                    d="M30.0133 19.3609C30.5854 24.4065 31.1575 29.452 31.7838 34.4914C31.8822 35.3595 31.9868 36.2818 31.5908 37.1509C31.2428 37.9597 30.7556 38.5095 29.8333 38.614C28.9652 38.7125 28.049 38.8713 27.1686 38.8612C25.6853 38.8645 24.9542 38.233 24.7882 36.7682C24.3894 33.7362 24.045 30.698 23.7005 27.6598C23.6328 27.063 23.6194 26.4601 23.4975 25.8694C23.1994 24.6943 22.3414 23.9124 21.1713 23.7703C20.8938 23.7468 20.5622 23.7294 20.2909 23.7602C18.4462 23.9693 16.5953 24.1242 14.7507 24.3334C14.0996 24.4072 13.4547 24.5352 12.8036 24.609C11.1698 24.7393 10.3274 25.5492 10.2284 27.099C10.2233 27.5392 10.2725 27.9732 10.3218 28.4073C10.6355 31.1742 10.943 33.8868 11.2568 36.6538C11.3552 37.5218 11.514 38.438 11.1722 39.301C10.8366 40.2182 10.3075 40.8827 9.27661 40.9995C8.35426 41.1041 7.38382 41.2691 6.38876 41.2171C5.17054 41.1354 4.43335 40.4496 4.40653 39.2438C4.31094 36.9467 3.78131 34.6988 3.4687 32.4263C3.05262 29.7259 3.01018 26.9283 2.5941 24.2279C2.42912 23.2575 2.32455 22.3352 2.15957 21.3648C1.93923 19.9061 1.60423 18.4055 1.5528 16.9826C1.52377 14.7878 1.22962 12.6781 0.983562 10.508C0.75707 8.99504 0.632937 7.41555 0.508804 5.83605C0.396974 4.36506 1.02848 3.63406 2.48723 3.41373C3.29491 3.26721 4.10874 3.17494 4.92873 3.13693C6.06809 3.00776 6.84108 3.52458 7.22923 4.52463C7.54468 5.36808 7.75776 6.27809 7.85618 7.14614C8.15034 9.25586 8.39639 11.426 8.64244 13.5961C8.70396 14.1387 8.71737 14.7416 8.83929 15.3322C9.13849 17.0018 10.1173 17.8799 11.8054 17.7435C14.3615 17.5086 16.9658 17.2134 19.5578 16.8096C21.4506 16.5401 22.2622 15.459 22.1011 13.554C21.8355 10.7266 21.4614 7.91161 21.1415 5.09044C21.0739 4.49365 21.0062 3.89687 20.9989 3.34819C20.966 2.08806 21.5975 1.35706 22.7245 1.11938C23.6346 0.906302 24.5027 0.807885 25.4373 0.811825C26.7999 0.712301 27.8268 1.53004 28.0952 2.92832C28.211 3.4647 28.2663 3.95298 28.3279 4.49552C28.8876 9.43256 29.4536 14.4239 30.0133 19.3609Z"
                                                    fill="white">
                                                </path>
                                            </svg>
                                        </div>
                                        <p
                                            class="gl-animated mx-auto mt-[28px] max-w-[688px] px-[30px] text-center font-helvetica text-[16px] font-medium leading-[24px] text-white empty:hidden md:px-0 md:text-[18px] md:leading-[25px] lg:hidden lg:text-[20px] lg:leading-[28px]">
                                            Developed with PHP Laravel, it offers a dynamic, creativity-driven learning
                                            environment — thoughtfully structured around three core roles:
                                        </p>
                                    </div>
                                    <div class="swiper-wrapper">

                                        <div class="swiper-slide group relative" data-color="2172b9">
                                            <div
                                                class="slide-content flex translate-y-[100px] scale-[0.9] flex-col items-center justify-center opacity-50 transition-all duration-1000 group-[.swiper-slide-active]:!translate-y-0 group-[.swiper-slide-active]:!rotate-[0deg] group-[.swiper-slide-next]:rotate-[10deg] group-[.swiper-slide-prev]:rotate-[-10deg] group-[.swiper-slide-active]:!scale-[1] group-[.swiper-slide-active]:!opacity-100">
                                                <div
                                                    class="image-container relative aspect-square w-[75%] md:w-[340px] 2xl:w-[420px]">
                                                    <img alt="Educators" class="w-full" decoding="async" height="641"
                                                        loading="lazy" sizes="auto, (max-width: 643px) 100vw, 643px"
                                                        src="static/assets/images/admin.png" width="643" />
                                                    <div
                                                        class="gl-cta-shape group/cta pointer-events-none absolute left-[-40px] top-[40%] max-w-[120px] opacity-0 transition-all duration-300 hover:scale-[0.9] group-[.swiper-slide-active]:pointer-events-auto group-[.swiper-slide-active]:opacity-100 md:left-[-150px] md:top-[40%] md:max-w-[unset]">

                                                        <div class="relative">
                                                            <img alt="DTS"
                                                                class="transition-all duration-300 ease-linear group-hover/cta:brightness-0"
                                                                decoding="async"
                                                                src="static/assets/images/persona-1-shape.svg" />
                                                            <div
                                                                class="text-content absolute left-[50%] top-[50%] w-[53%] translate-x-[-50%] translate-y-[-45%] rotate-[15deg]">
                                                                <p
                                                                    class="text-center font-bnCringe text-[12px] font-bold leading-[1] text-lbd-black transition-all group-hover/cta:text-white md:text-[22px] md:leading-[26px]">
                                                                    Manage Users
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="gla-cta-shape group/cta pointer-events-none absolute right-[-40px] top-[-40px] max-w-[120px] opacity-0 transition-all duration-300 hover:scale-[0.9] group-[.swiper-slide-active]:pointer-events-auto group-[.swiper-slide-active]:opacity-100 md:right-[-80px] md:top-[-70px] md:max-w-[unset]">

                                                        <div class="relative">
                                                            <img alt="Gear"
                                                                class="transition-all duration-300 ease-linear group-hover/cta:brightness-0"
                                                                decoding="async"
                                                                src="static/assets/images/persona-1-shape-2.svg" />
                                                            <div
                                                                class="text-content absolute left-[50%] top-[50%] w-[80%] translate-x-[-50%] translate-y-[-50%]">
                                                                <p
                                                                    class="text-center font-bnCringe text-[12px] font-bold leading-[1] text-lbd-black transition-all group-hover/cta:text-white md:text-[22px] md:leading-[26px]">
                                                                    Create Courses
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="gla-cta-shape group/cta pointer-events-none absolute right-[-40px] top-[50%] max-w-[120px] opacity-0 transition-all duration-300 hover:scale-[0.9] group-[.swiper-slide-active]:pointer-events-auto group-[.swiper-slide-active]:opacity-100 md:right-[-130px] md:max-w-[unset]">

                                                        <div class="relative">
                                                            <img alt="Union"
                                                                class="transition-all duration-300 ease-linear group-hover/cta:brightness-0"
                                                                decoding="async"
                                                                src="static/assets/images/persona-1-shape-3.svg" />
                                                            <div
                                                                class="text-content absolute left-[50%] top-[50%] w-[70%] translate-x-[-50%] translate-y-[-50%] rotate-[-15deg]">
                                                                <p
                                                                    class="text-center font-bnCringe text-[12px] font-bold leading-[1] text-lbd-black transition-all group-hover/cta:text-white md:text-[22px] md:leading-[26px]">
                                                                    Ensure Everything Runs Smoothly
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="text-container mx-auto mt-[24px] px-[45px] text-center md:mt-[20px] md:max-w-[430px] md:px-[0]">
                                                    <h2
                                                        class="font-bnCringe text-[26px] font-bold leading-[30px] tracking-[-0.26px] text-white md:text-[32px] md:leading-[38px] md:tracking-[-0.32px] lg:text-[42px] lg:leading-[50px] lg:tracking-[-0.84px]">
                                                        Admin
                                                    </h2>
                                                    <p
                                                        class="mt-[5px] font-helvetica text-[13px] font-normal leading-[19px] text-white opacity-0 group-[.swiper-slide-active]:!opacity-100 md:text-[18px] md:leading-[26px]">
                                                        Guide the system and empower the vision — keep the learning
                                                        journey inspiring, structured, and future-ready.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide group relative" data-color="f05227">
                                            <div
                                                class="slide-content flex translate-y-[100px] scale-[0.9] flex-col items-center justify-center opacity-50 transition-all duration-1000 group-[.swiper-slide-active]:!translate-y-0 group-[.swiper-slide-active]:!rotate-[0deg] group-[.swiper-slide-next]:rotate-[10deg] group-[.swiper-slide-prev]:rotate-[-10deg] group-[.swiper-slide-active]:!scale-[1] group-[.swiper-slide-active]:!opacity-100">
                                                <div
                                                    class="image-container relative aspect-square w-[75%] md:w-[340px] 2xl:w-[420px]">
                                                    
                                                    
                                                    <img alt="Partners" class="w-full" decoding="async" height="641"
                                                        loading="lazy" sizes="auto, (max-width: 625px) 100vw, 625px"
                                                        src="static/assets/images/student.png" width="625" />
                                                </div>
                                                <div
                                                    class="text-container mx-auto mt-[24px] px-[45px] text-center md:mt-[20px] md:max-w-[430px] md:px-[0]">
                                                    <h2
                                                        class="font-bnCringe text-[26px] font-bold leading-[30px] tracking-[-0.26px] text-white md:text-[32px] md:leading-[38px] md:tracking-[-0.32px] lg:text-[42px] lg:leading-[50px] lg:tracking-[-0.84px]">
                                                        Student
                                                    </h2>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide group relative" data-color="0d5a33">
                                            <div
                                                class="slide-content flex translate-y-[100px] scale-[0.9] flex-col items-center justify-center opacity-50 transition-all duration-1000 group-[.swiper-slide-active]:!translate-y-0 group-[.swiper-slide-active]:!rotate-[0deg] group-[.swiper-slide-next]:rotate-[10deg] group-[.swiper-slide-prev]:rotate-[-10deg] group-[.swiper-slide-active]:!scale-[1] group-[.swiper-slide-active]:!opacity-100">
                                                <div
                                                    class="image-container relative aspect-square w-[75%] md:w-[340px] 2xl:w-[420px]">
                                                    
                                                    <img alt="Parents" class="w-full" decoding="async" height="641"
                                                        loading="lazy" sizes="auto, (max-width: 641px) 100vw, 641px"
                                                        src="static/assets/images/teacher.png" width="641" />
                                                </div>
                                                <div
                                                    class="text-container mx-auto mt-[24px] px-[45px] text-center md:mt-[20px] md:max-w-[430px] md:px-[0]">
                                                    <h2
                                                        class="font-bnCringe text-[26px] font-bold leading-[30px] tracking-[-0.26px] text-white md:text-[32px] md:leading-[38px] md:tracking-[-0.32px] lg:text-[42px] lg:leading-[50px] lg:tracking-[-0.84px]">
                                                        Parents
                                                    </h2>
                                                    <p
                                                        class="mt-[5px] font-helvetica text-[13px] font-normal leading-[19px] text-white opacity-0 group-[.swiper-slide-active]:!opacity-100 md:text-[18px] md:leading-[26px]">
                                                        Be inspired by design thinking stories transforming lives and
                                                        how your child can be a changemaker.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide group relative" data-color="2172b9">
                                            <div
                                                class="slide-content flex translate-y-[100px] scale-[0.9] flex-col items-center justify-center opacity-50 transition-all duration-1000 group-[.swiper-slide-active]:!translate-y-0 group-[.swiper-slide-active]:!rotate-[0deg] group-[.swiper-slide-next]:rotate-[10deg] group-[.swiper-slide-prev]:rotate-[-10deg] group-[.swiper-slide-active]:!scale-[1] group-[.swiper-slide-active]:!opacity-100">
                                                <div
                                                    class="image-container relative aspect-square w-[75%] md:w-[340px] 2xl:w-[420px]">
                                                    <img alt="Educators" class="w-full" decoding="async" height="641"
                                                        loading="lazy" sizes="auto, (max-width: 643px) 100vw, 643px"
                                                        src="static/assets/images/admin.png" width="643" />
                                                    <div
                                                        class="gl-cta-shape group/cta pointer-events-none absolute left-[-40px] top-[40%] max-w-[120px] opacity-0 transition-all duration-300 hover:scale-[0.9] group-[.swiper-slide-active]:pointer-events-auto group-[.swiper-slide-active]:opacity-100 md:left-[-150px] md:top-[40%] md:max-w-[unset]">

                                                        <div class="relative">
                                                            <img alt="DTS"
                                                                class="transition-all duration-300 ease-linear group-hover/cta:brightness-0"
                                                                decoding="async"
                                                                src="static/assets/images/persona-1-shape.svg" />
                                                            <div
                                                                class="text-content absolute left-[50%] top-[50%] w-[53%] translate-x-[-50%] translate-y-[-50%] rotate-[15deg]">
                                                                <p
                                                                    class="text-center font-bnCringe text-[12px] font-bold leading-[1] text-lbd-black transition-all group-hover/cta:text-white md:text-[22px] md:leading-[26px]">
                                                                    Manage Users
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="gla-cta-shape group/cta pointer-events-none absolute right-[-40px] top-[-40px] max-w-[120px] opacity-0 transition-all duration-300 hover:scale-[0.9] group-[.swiper-slide-active]:pointer-events-auto group-[.swiper-slide-active]:opacity-100 md:right-[-80px] md:top-[-70px] md:max-w-[unset]">

                                                        <div class="relative">
                                                            <img alt="Gear"
                                                                class="transition-all duration-300 ease-linear group-hover/cta:brightness-0"
                                                                decoding="async"
                                                                src="static/assets/images/persona-1-shape-2.svg" />
                                                            <div
                                                                class="text-content absolute left-[50%] top-[50%] w-[80%] translate-x-[-50%] translate-y-[-50%]">
                                                                <p
                                                                    class="text-center font-bnCringe text-[12px] font-bold leading-[1] text-lbd-black transition-all group-hover/cta:text-white md:text-[22px] md:leading-[26px]">
                                                                    Create Courses
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="gla-cta-shape group/cta pointer-events-none absolute right-[-40px] top-[50%] max-w-[120px] opacity-0 transition-all duration-300 hover:scale-[0.9] group-[.swiper-slide-active]:pointer-events-auto group-[.swiper-slide-active]:opacity-100 md:right-[-130px] md:max-w-[unset]">

                                                        <div class="relative">
                                                            <img alt="Union"
                                                                class="transition-all duration-300 ease-linear group-hover/cta:brightness-0"
                                                                decoding="async"
                                                                src="static/assets/images/persona-1-shape-3.svg" />
                                                            <div
                                                                class="text-content absolute left-[50%] top-[50%] w-[70%] translate-x-[-50%] translate-y-[-50%] rotate-[-15deg]">
                                                                <p
                                                                    class="text-center font-bnCringe text-[12px] font-bold leading-[1] text-lbd-black transition-all group-hover/cta:text-white md:text-[22px] md:leading-[26px]">
                                                                    Ensure Everything Runs Smoothly
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="text-container mx-auto mt-[24px] px-[45px] text-center md:mt-[20px] md:max-w-[430px] md:px-[0]">
                                                    <h2
                                                        class="font-bnCringe text-[26px] font-bold leading-[30px] tracking-[-0.26px] text-white md:text-[32px] md:leading-[38px] md:tracking-[-0.32px] lg:text-[42px] lg:leading-[50px] lg:tracking-[-0.84px]">
                                                        Admin
                                                    </h2>
                                                    <p
                                                        class="mt-[5px] font-helvetica text-[13px] font-normal leading-[19px] text-white opacity-0 group-[.swiper-slide-active]:!opacity-100 md:text-[18px] md:leading-[26px]">
                                                        Guide the system and empower the vision — keep the learning
                                                        journey inspiring, structured, and future-ready.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide group relative" data-color="f05227">
                                            <div
                                                class="slide-content flex translate-y-[100px] scale-[0.9] flex-col items-center justify-center opacity-50 transition-all duration-1000 group-[.swiper-slide-active]:!translate-y-0 group-[.swiper-slide-active]:!rotate-[0deg] group-[.swiper-slide-next]:rotate-[10deg] group-[.swiper-slide-prev]:rotate-[-10deg] group-[.swiper-slide-active]:!scale-[1] group-[.swiper-slide-active]:!opacity-100">
                                                <div
                                                    class="image-container relative aspect-square w-[75%] md:w-[340px] 2xl:w-[420px]">
                                                    <div
                                                        class="gl-cta-shape group/cta pointer-events-none absolute left-[-30px] top-[60%] max-w-[95px] opacity-0 transition-all duration-300 hover:scale-[0.9] group-[.swiper-slide-active]:pointer-events-auto group-[.swiper-slide-active]:opacity-100 md:left-[-140px] md:top-[20%] md:max-w-[unset]">

                                                        <div class="relative">
                                                            <img alt="DTS"
                                                                class="transition-all duration-300 ease-linear group-hover/cta:brightness-0"
                                                                decoding="async"
                                                                src="static/assets/images/flower.svg" />
                                                            <div
                                                                class="text-content absolute left-[50%] top-[50%] w-[53%] translate-x-[-50%] translate-y-[-50%] rotate-[-15deg]">
                                                                <p
                                                                    class="text-center font-bnCringe text-[12px] font-bold leading-[1] text-lbd-black transition-all group-hover/cta:text-white md:text-[22px] md:leading-[26px]">
                                                                    Learn
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="gla-cta-shape group/cta pointer-events-none absolute right-[-50px] top-[-10%] max-w-[120px] opacity-0 transition-all duration-300 hover:scale-[0.9] group-[.swiper-slide-active]:pointer-events-auto group-[.swiper-slide-active]:opacity-100 md:right-[-160px] md:top-[-20%] md:max-w-[unset]">

                                                        <div class="relative">
                                                            <img alt="Polygon"
                                                                class="transition-all duration-300 ease-linear group-hover/cta:brightness-0"
                                                                decoding="async"
                                                                src="static/assets/images/persona-1-shape.svg" />
                                                            <div
                                                                class="text-content absolute left-[50%] top-[50%] w-[65%] translate-x-[-50%] translate-y-[-45%] rotate-[15deg]">
                                                                <p
                                                                    class="text-center font-bnCringe text-[12px] font-bold leading-[1] text-lbd-black transition-all group-hover/cta:text-white md:mr-2 md:text-[22px] md:leading-[26px]">
                                                                    Complete Assignments
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="gla-cta-shape group/cta pointer-events-none absolute right-[-20px] top-[70%] max-w-[95px] opacity-0 transition-all duration-300 hover:scale-[0.9] group-[.swiper-slide-active]:pointer-events-auto group-[.swiper-slide-active]:opacity-100 md:right-[-120px] md:top-[60%] md:max-w-[unset]">

                                                        <div class="relative">
                                                            <img alt="Gear"
                                                                class="transition-all duration-300 ease-linear group-hover/cta:brightness-0"
                                                                decoding="async"
                                                                src="static/assets/images/persona-1-shape-2.svg" />
                                                            <div
                                                                class="text-content absolute left-[50%] top-[50%] w-[65%] translate-x-[-50%] translate-y-[-50%]">
                                                                <p
                                                                    class="text-center font-bnCringe text-[12px] font-bold leading-[1] text-lbd-black transition-all group-hover/cta:text-white md:text-[22px] md:leading-[26px]">
                                                                    Track your Progress
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <img alt="Student" class="w-full" decoding="async" height="641"
                                                        loading="lazy" sizes="auto, (max-width: 625px) 100vw, 625px"
                                                        src="static/assets/images/student.png" width="625" />
                                                </div>
                                                <div
                                                    class="text-container mx-auto mt-[24px] px-[45px] text-center md:mt-[20px] md:max-w-[430px] md:px-[0]">
                                                    <h2
                                                        class="font-bnCringe text-[26px] font-bold leading-[30px] tracking-[-0.26px] text-white md:text-[32px] md:leading-[38px] md:tracking-[-0.32px] lg:text-[42px] lg:leading-[50px] lg:tracking-[-0.84px]">
                                                        Student
                                                    </h2>
                                                    <p
                                                        class="mt-[5px] font-helvetica text-[13px] font-normal leading-[19px] text-white opacity-0 group-[.swiper-slide-active]:!opacity-100 md:text-[18px] md:leading-[26px]">
                                                        Change starts with you! No one is too young or too old to make a
                                                        difference. Simply put- everyone can be a changemaker.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide group relative" data-color="0d5a33">
                                            <div
                                                class="slide-content flex translate-y-[100px] scale-[0.9] flex-col items-center justify-center opacity-50 transition-all duration-1000 group-[.swiper-slide-active]:!translate-y-0 group-[.swiper-slide-active]:!rotate-[0deg] group-[.swiper-slide-next]:rotate-[10deg] group-[.swiper-slide-prev]:rotate-[-10deg] group-[.swiper-slide-active]:!scale-[1] group-[.swiper-slide-active]:!opacity-100">
                                                <div
                                                    class="image-container relative aspect-square w-[75%] md:w-[340px] 2xl:w-[420px]">
                                                    <div
                                                        class="gl-cta-shape group/cta pointer-events-none absolute left-[-30px] top-[70%] max-w-[95px] opacity-0 transition-all duration-300 hover:scale-[0.9] group-[.swiper-slide-active]:pointer-events-auto group-[.swiper-slide-active]:opacity-100 md:left-[-130px] md:top-[30%] md:max-w-[unset]">
                                                        <div class="relative">
                                                            <img alt="Gear"
                                                                class="aspect-square transition-all duration-300 ease-linear group-hover/cta:brightness-0"
                                                                decoding="async"
                                                                src="static/assets/images/persona-1-shape-2.svg" />
                                                            <div
                                                                class="text-content absolute left-[50%] top-[50%] w-[65%] translate-x-[-50%] translate-y-[-50%]">
                                                                <p
                                                                    class="text-center font-bnCringe text-[12px] font-bold leading-[1] text-lbd-black transition-all group-hover/cta:text-white md:text-[22px] md:leading-[26px]">
                                                                    Assign Activities
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="gla-cta-shape group/cta pointer-events-none absolute right-[-30px] top-[-10%] max-w-[95px] opacity-0 transition-all duration-300 hover:scale-[0.9] group-[.swiper-slide-active]:pointer-events-auto group-[.swiper-slide-active]:opacity-100 md:right-[-150px] md:top-[-20%] md:max-w-[unset]">
                                                        <div class="relative">
                                                            <img alt="Star"
                                                                class="transition-all duration-300 ease-linear group-hover/cta:brightness-0"
                                                                decoding="async"
                                                                src="static/assets/images/star-2.svg" />
                                                            <div
                                                                class="text-content absolute left-[50%] top-[50%] w-[80%] translate-x-[-50%] translate-y-[-50%] rotate-[15deg]">
                                                                <p
                                                                    class="text-center font-bnCringe text-[12px] font-bold leading-[1] text-lbd-black transition-all group-hover/cta:text-white md:text-[22px] md:leading-[26px]">
                                                                    Build Course Content
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="gla-cta-shape group/cta pointer-events-none absolute right-[-30px] top-[70%] max-w-[95px] opacity-0 transition-all duration-300 hover:scale-[0.9] group-[.swiper-slide-active]:pointer-events-auto group-[.swiper-slide-active]:opacity-100 md:right-[-120px] md:top-[50%] md:max-w-[unset]">
                                                        <div class="relative">
                                                            <img alt="Union"
                                                                class="aspect-square transition-all duration-300 ease-linear group-hover/cta:brightness-0"
                                                                decoding="async"
                                                                src="static/assets/images/polygon-yellow.svg" />
                                                            <div
                                                                class="text-content absolute left-[50%] top-[50%] w-[75%] translate-x-[-50%] translate-y-[-50%] rotate-[-15deg]">
                                                                <p
                                                                    class="text-center font-bnCringe text-[12px] font-bold leading-[1] text-lbd-black transition-all group-hover/cta:text-white md:text-[22px] md:leading-[26px]">
                                                                    Give Meaningful Feedback
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <img alt="Teacher" class="w-full" decoding="async" height="641"
                                                        loading="lazy" sizes="auto, (max-width: 641px) 100vw, 641px"
                                                        src="static/assets/images/teacher.png" width="641" />
                                                </div>
                                                <div
                                                    class="text-container mx-auto mt-[24px] px-[45px] text-center md:mt-[20px] md:max-w-[430px] md:px-[0]">
                                                    <h2
                                                        class="font-bnCringe text-[26px] font-bold leading-[30px] tracking-[-0.26px] text-white md:text-[32px] md:leading-[38px] md:tracking-[-0.32px] lg:text-[42px] lg:leading-[50px] lg:tracking-[-0.84px]">
                                                        Teacher
                                                    </h2>
                                                    <p
                                                        class="mt-[5px] font-helvetica text-[13px] font-normal leading-[19px] text-white opacity-0 group-[.swiper-slide-active]:!opacity-100 md:text-[18px] md:leading-[26px]">
                                                        Craft learning and spark growth by empowering progress, one
                                                        lesson at a time.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="gl-b-running-numbers-with-carousel bg-lbd-yellow-bright relative z-[2] pb-[100px] md:pb-[280px] lg:pb-[400px]">
                        <img alt="BG Shape" class="absolute top-[-6.2vw] left-0 w-full z-[1]" decoding="async"
                            src="static/assets/images/ellipse.svg" />
                        <div
                            class="content lg:pt-[85px] pb-[60px] md:pb-[80px] md:pt-[40px] lg:pb-[200px] relative z-[2] overflow-hidden">
                            <h2 class="visually-hidden">
                                Join us in Empowering Minds!
                            </h2>
                            <div
                                class="heading-container overflow-hidden hidden lg:flex px-[30px] pb-[40px] md:px-[55px] w-full block mx-auto justify-center [&amp;_svg_path]:translate-y-[-200%] [&amp;_svg]:w-full [&amp;_svg]:overflow-visible">
                                <svg fill="none" height="83" viewbox="0 0 1115 83" width="1115"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M1097.34 39.6643C1097.75 36.6601 1098.24 33.669 1098.73 30.678C1099.2 27.7678 1099.66 24.9385 1100.14 22.0283C1100.99 16.8547 1101.99 11.7075 1102.68 6.50739C1103.11 2.84324 1105.22 1.11291 1108.88 2.04396C1109.52 2.23049 1110.26 2.26856 1110.88 2.53592C1112.44 3.12349 1113.4 4.35933 1113.45 6.10978C1113.49 6.86375 1113.36 7.67213 1113.24 8.39967C1111.54 18.8278 1109.84 29.1751 1108.14 39.6032C1108.01 40.4116 1107.85 41.3817 1107.47 42.1504C1106.74 44.1053 1105.37 44.8772 1103.24 44.6954C1102.35 44.5501 1101.45 44.4856 1100.65 44.2727C1098.17 43.7015 1097.01 42.1835 1097.34 39.6643ZM1102.24 48.7653C1104.99 49.2145 1106.13 50.8942 1105.73 53.8176C1105.75 54.235 1105.68 54.6392 1105.52 55.111C1104.9 57.9139 1103.39 58.9959 1100.55 58.6144C1100.13 58.6292 1099.66 58.4691 1099.26 58.403C1098.77 58.3237 1098.37 58.2577 1097.96 58.1916C1095.77 57.9158 1094.78 56.3434 1095 54.4709C1095.37 49.7162 1096.37 47.6393 1102.24 48.7653Z"
                                        fill="#1C1C1B">
                                    </path>
                                    <path
                                        d="M1089.88 43.6772C1091.49 50.2246 1088.04 57.8931 1081.49 60.4939C1074.71 63.2945 1066.52 61.839 1061.96 55.4235C1061.32 54.5283 1060.9 53.4333 1060.65 52.3939C1060.24 50.8007 1061.01 49.354 1062.52 48.9516C1064.27 48.5113 1066.05 48.2329 1067.79 48.2099C1068.87 48.2072 1069.89 48.8772 1070.88 49.3854C1071.41 49.6332 1071.85 50.3109 1072.41 50.7205C1073.63 51.608 1075 51.8911 1076.51 51.4887C1078.11 51.0737 1079.02 50.019 1079.45 48.542C1079.75 47.2522 1078.91 45.6413 1077.55 44.86C1077 44.5313 1076.38 44.2962 1075.68 44.0738C1073.53 43.5809 1071.37 43.0071 1069.22 42.5143C1066.74 41.9912 1064.52 41.0937 1062.53 39.4982C1062.06 39.1568 1061.6 38.8154 1061.36 38.3552C1059.77 35.619 1058.08 32.7337 1058.38 29.37C1058.65 26.841 1058.99 24.2992 1060.82 22.1898C1061.66 21.2286 1062.64 20.5785 1063.51 19.7792C1064.67 18.6865 1066.42 19.3236 1067.38 18.0134C1068.28 16.8778 1069.83 17.2164 1070.69 16.9153C1076.99 15.8472 1081.36 18.3149 1084.58 23.0336C1086.09 25.2842 1085.2 27.4972 1082.55 28.0767C1082 28.2462 1081.43 28.3348 1080.86 28.4234C1078.85 28.8208 1076.86 28.8008 1075.09 27.5846C1073.98 26.8463 1072.8 26.6998 1071.52 26.9833C1070.33 27.335 1069.62 28.1089 1069.39 29.3052C1069.24 30.4079 1069.72 31.4093 1070.63 31.9302C1071.96 32.4686 1073.37 32.9945 1074.75 33.3584C1077 33.9196 1079.38 34.2935 1081.55 34.9482C1085.98 36.245 1088.76 39.1276 1089.88 43.6772Z"
                                        fill="#1C1C1B">
                                    </path>
                                    <path
                                        d="M1053.88 24.8685C1053.11 30.3879 1051.86 35.8254 1051.01 41.3311C1050.18 46.756 1049.18 52.1537 1048.27 57.565C1048.17 58.1304 1048.08 58.6957 1048 59.1803C1047.34 62.5588 1045.84 63.5519 1042.6 63.0868C1041.37 62.9628 1040.19 62.5966 1039.17 61.7594C1038.89 61.4625 1038.51 61.2328 1038.15 60.9222C1036.9 59.9633 1035.51 59.8121 1034 60.3877C1032.86 60.7757 1031.66 60.9884 1030.44 61.282C1026.63 62.216 1022.94 61.4267 1019.36 59.9913C1015.64 58.4478 1012.72 56.0443 1010.37 52.7398C1003.31 42.9072 1004.89 29.6332 1014.16 21.4801C1019.62 16.6715 1026.37 15.0708 1033.57 16.7029C1035.89 17.2602 1038.07 18.1269 1039.67 19.9754C1040.5 20.9468 1041.64 21.5553 1043.3 21.0877C1043.99 19.4599 1044.18 17.8309 1044.47 16.1349C1044.82 14.0349 1045.1 11.9214 1045.53 9.83513C1046.1 7.43946 1047.72 6.21769 1050.17 6.46559C1051.4 6.58954 1052.61 6.79424 1053.81 7.07972C1055.4 7.5142 1056.28 8.66082 1056.17 10.3034C1056.2 11.1384 1055.97 12.0132 1055.9 12.9152C1055.21 16.9535 1054.38 20.8837 1053.88 24.8685ZM1035.11 50.358C1037.75 48.0612 1040.48 45.6166 1040.79 41.8468C1041.36 39.4511 1041.23 37.2693 1040.68 35.1C1038.31 26.5572 1029.02 23.493 1022.05 28.8772C1017.85 32.0727 1016.23 36.284 1017.09 41.4973C1018.29 48.6774 1022.99 51.7986 1029.36 51.961C1031.42 52.0599 1033.64 51.6879 1035.11 50.358Z"
                                        fill="#1C1C1B">
                                    </path>
                                    <path
                                        d="M1000.76 32.4667C1001.56 39.7129 1002.36 46.959 1003.16 54.2051C1003.22 54.775 1003.27 55.2635 1003.25 55.8424C1003.19 57.4977 1002.4 58.5735 1000.7 58.8434C999.163 59.0954 997.625 59.3474 996.06 59.3552C994.332 59.3809 993.338 58.5841 992.905 56.9012C992.599 55.6165 992.446 54.2324 992.302 52.9298C991.844 48.7775 991.395 44.7066 990.938 40.5544C990.758 38.926 990.488 37.2252 990.308 35.5969C990.012 33.6519 989.326 31.9145 988.323 30.2946C985.613 25.8962 980.828 25.1053 976.819 28.3493C975.153 29.6867 974.274 31.4317 973.92 33.4486C973.574 35.5468 973.563 37.6906 973.797 39.8075C974.398 45.2624 975 50.7174 975.602 56.1723C975.646 56.5794 975.7 57.0679 975.745 57.475C975.969 60.2521 975.036 61.5087 972.367 61.9678C971.083 62.2743 969.771 62.3365 968.378 62.4077C966.732 62.4245 965.638 61.4738 965.296 59.8634C965.233 59.2935 965.17 58.7236 965.116 58.2351C964.497 52.6173 963.886 47.0809 963.276 41.5445C962.71 36.4153 962.063 31.295 961.579 26.1567C961.498 25.424 961.408 24.6098 961.318 23.7956C960.986 21.5249 962.561 20.1151 964.406 19.6644C965.772 19.3489 967.31 19.0969 968.685 19.6046C971.099 20.5745 973.253 19.925 975.424 18.6966C976.438 18.1728 977.614 17.631 978.727 17.2611C985.396 14.96 991.057 16.9728 995.937 21.6262C997.04 22.6583 997.862 24.1334 998.585 25.4547C999.65 27.6446 1000.49 30.0242 1000.76 32.4667Z"
                                        fill="#1C1C1B">
                                    </path>
                                    <path
                                        d="M954.445 51.9913C954.691 53.3838 954.527 54.8582 954.609 56.3326C954.609 57.6432 954.199 58.7899 953.298 59.6909C952.889 60.1824 952.233 60.6739 951.66 60.6739C950.022 60.8377 948.302 61.0015 946.663 60.6739C945.025 60.3462 943.96 58.9537 943.96 57.2336C943.96 53.7934 943.633 50.3531 944.206 46.9129C944.288 46.3395 944.288 45.848 944.206 45.2747C944.124 43.6364 943.878 41.9163 943.878 40.2781C943.878 34.7901 943.878 29.3021 943.878 23.896C943.878 22.995 943.878 22.094 944.042 21.1929C944.534 18.8994 946.09 17.7527 947.974 17.8346C948.957 17.9165 950.022 17.8346 951.005 17.9165C952.97 18.2442 954.199 19.4728 954.445 21.4387C954.609 22.5854 954.609 23.7322 954.609 24.797C954.609 31.5956 954.609 38.3942 954.609 45.2747C954.609 46.5852 954.527 47.9777 955.755 48.9606C954.936 50.1074 954.281 50.7627 954.445 51.9913ZM949.94 13.5752C944.534 13.9029 943.469 11.2817 943.96 6.77666C944.124 5.46609 945.762 3.99171 947.155 3.74597C947.728 3.66406 948.302 3.66406 948.302 3.66406C949.203 3.66406 949.53 3.66406 949.858 3.66406C953.052 3.82788 954.527 5.38418 954.609 8.49679C954.609 11.3637 952.807 13.4114 949.94 13.5752Z"
                                        fill="#1C1C1B">
                                    </path>
                                    <path
                                        d="M934.055 25.5887C934.799 27.8976 935.551 30.2879 935.815 32.7311C936.528 39.3275 937.231 45.8424 937.944 52.4388C937.979 52.7646 938.014 53.0903 938.049 53.4161C938.113 56.2928 937.314 57.2853 934.562 57.7472C933.422 57.8703 932.273 57.912 931.215 58.0264C929.504 58.211 928.358 57.511 927.658 55.6093C927.398 54.7311 927.383 53.8265 927.286 52.9306C926.688 47.3929 926.09 41.8552 925.402 36.2448C925.191 34.2903 924.727 32.2808 924.108 30.3703C922.819 26.0606 918.475 23.9758 914.273 25.5006C912.045 26.2355 910.837 28.0137 909.89 29.9285C909.144 31.4096 908.831 33.0911 909.016 34.8013C909.359 37.9774 909.693 41.072 910.027 44.1666C910.432 47.9127 910.845 51.7402 911.25 55.4863C911.311 56.0564 911.373 56.6265 911.272 57.2141C911.186 58.7064 910.177 60.0511 908.729 60.3722C907.281 60.6934 905.652 60.8693 904.096 60.955C902.287 60.9856 901.195 60.0324 900.839 58.2584C900.669 57.4528 900.59 56.7199 900.502 55.9055C899.896 50.2863 899.361 44.5769 898.583 38.8939C898.381 37.0209 897.934 35.1742 897.325 33.3451C895.908 29.3788 892.494 27.523 888.277 28.1432C886.168 28.4533 884.636 29.525 883.608 31.4485C882.725 33.1916 882.259 34.9721 882.307 36.9442C882.392 38.5003 882.56 40.0476 882.645 41.6037C883.109 46.6616 883.727 51.6205 884.263 56.5882C884.395 57.8097 884.455 59.1215 884.252 60.2968C884.047 62.2138 883.158 63.1337 881.375 63.4086C879.999 63.6396 878.696 63.7803 877.294 63.7669C875.485 63.7975 874.484 62.917 874.037 61.0704C873.967 60.4189 873.896 59.7674 873.826 59.1159C873.246 53.741 872.674 48.4476 872.094 43.0728C871.54 37.9422 870.904 32.8205 870.431 27.6811C870.326 26.7039 870.139 25.7355 870.196 24.7406C870.174 23.0129 871.409 21.4789 873.102 21.1313C874.795 20.7838 876.45 20.8522 878.14 21.2464C880.083 21.6956 881.857 21.3392 883.552 20.25C888.564 17.0723 893.838 17.0795 898.913 19.8269C901.974 21.4736 904.272 21.3902 906.984 19.0377C911.873 14.7199 917.664 14.177 923.701 15.9142C928.717 17.3498 932.352 20.4998 934.055 25.5887Z"
                                        fill="#1C1C1B">
                                    </path>
                                    <path
                                        d="M841.791 36.3654C841.094 40.3189 840.477 44.2883 839.7 48.2259C838.954 52.0028 838.064 55.6676 837.093 59.3166C835.899 63.6729 834.158 67.8379 830.793 70.9306C826.61 74.7803 821.748 76.9932 815.965 77.104C813.78 77.1737 811.483 76.9706 809.313 76.5423C802.29 75.3229 797.155 71.3037 793.718 65.0312C793.283 64.2773 792.959 63.3785 792.796 62.5115C792.471 60.7774 793.815 58.6214 796.194 59.258C798.026 59.7033 799.843 60.2288 801.675 60.6741C803.009 61.1045 804.008 61.9694 804.894 62.9792C806.666 64.9989 808.822 66.3429 811.361 67.0112C815.236 68.11 818.897 67.7474 822.152 65.2173C822.938 64.6209 823.53 63.7359 824.026 62.9154C824.282 62.465 824.232 61.8707 824.166 61.3569C824.052 60.6664 823.055 60.2191 822.574 60.5416C821.901 60.993 821.291 61.5407 820.394 62.2819C814.962 61.4602 809.563 60.8953 804.976 57.4851C802.063 55.3238 799.712 52.8558 797.952 49.5028C796.193 46.1498 795.22 42.6181 795.195 38.9395C795.174 30.5863 798.515 23.815 805.909 19.3468C806.294 19.0888 806.663 18.9112 807.048 18.6532C810.367 16.2192 814.205 15.808 818.19 15.9266C822.656 16.1403 826.74 17.4474 830.168 20.3786C831.795 21.8685 833.706 21.9119 835.52 21.1845C837.414 20.4729 839.101 20.8061 840.757 21.2999C843.12 22.0169 844.201 23.733 843.725 26.1438C843.123 29.6152 842.376 32.9744 841.791 36.3654ZM826.142 48.3882C829.763 44.4274 831.197 39.701 829.561 34.4522C828.087 29.6527 824.77 26.5767 819.789 26.0108C813.153 25.3688 807.862 29.3337 806.08 36.2457C805.651 37.9978 805.816 40.1178 806.336 42.1406C807.294 46.5879 809.985 49.8743 814.406 51.1645C818.666 52.4229 822.97 51.7696 826.142 48.3882Z"
                                        fill="#1C1C1B">
                                    </path>
                                    <path
                                        d="M788.337 26.6929C789.048 33.9481 789.76 41.2033 790.472 48.4585C790.528 49.0292 790.576 49.5183 790.551 50.0969C790.466 51.7513 789.665 52.8175 787.962 53.067C786.421 53.3005 784.88 53.534 783.315 53.5229C781.587 53.5279 780.602 52.7192 780.19 51.0313C779.899 49.7429 779.763 48.3571 779.635 47.0528C779.227 42.8953 778.827 38.8194 778.419 34.6619C778.259 33.0315 778.01 31.3276 777.85 29.6972C777.576 27.7488 776.911 26.0034 775.928 24.3714C773.271 19.9408 768.496 19.0925 764.448 22.2881C762.766 23.6053 761.866 25.3397 761.488 27.3521C761.117 29.4461 761.081 31.5896 761.289 33.7091C761.825 39.1709 762.36 44.6326 762.896 50.0944C762.936 50.502 762.984 50.9911 763.024 51.3987C763.215 54.1784 762.267 55.4236 759.593 55.8506C758.305 56.1417 756.992 56.1881 755.598 56.2426C753.952 56.2395 752.87 55.2758 752.547 53.6614C752.491 53.0907 752.435 52.5201 752.387 52.031C751.835 46.4062 751.291 40.8629 750.747 35.3196C750.243 30.1839 749.658 25.0562 749.235 19.9125C749.163 19.1788 749.083 18.3636 749.003 17.5484C748.698 15.2739 750.29 13.8831 752.141 13.4546C753.511 13.1556 755.051 12.9221 756.42 13.4462C758.822 14.445 760.983 13.8215 763.17 12.6193C764.19 12.1077 765.372 11.5801 766.49 11.2236C773.185 9.0028 778.821 11.0835 783.646 15.7952C784.736 16.8405 785.54 18.3254 786.247 19.6552C787.286 21.8578 788.097 24.2473 788.337 26.6929Z"
                                        fill="#1C1C1B">
                                    </path>
                                    <path
                                        d="M739.581 52.0747C739.801 53.4715 739.61 54.9426 739.664 56.4183C739.64 57.7286 739.209 58.8675 738.291 59.7516C737.873 60.2354 737.208 60.7145 736.635 60.7039C734.994 60.8372 733.271 60.9689 731.639 60.6108C730.008 60.2527 728.969 58.8407 729.001 57.1208C729.065 53.6812 728.801 50.2354 729.439 46.8065C729.531 46.2347 729.54 45.7433 729.469 45.1685C729.418 43.5291 729.204 41.8047 729.235 40.1668C729.337 34.6797 729.439 29.1926 729.54 23.7875C729.556 22.8866 729.573 21.9858 729.754 21.0879C730.288 18.804 731.865 17.6864 733.747 17.8034C734.729 17.9036 735.795 17.8415 736.776 17.9417C738.735 18.3059 739.941 19.5573 740.15 21.5273C740.293 22.6769 740.271 23.8235 740.251 24.8881C740.125 31.6855 739.998 38.483 739.87 45.3622C739.846 46.6726 739.738 48.0633 740.948 49.0689C740.108 50.2002 739.44 50.8432 739.581 52.0747ZM735.792 13.5814C730.381 13.8083 729.365 11.1678 729.94 6.67265C730.129 5.36536 731.794 3.92173 733.191 3.70197C733.766 3.63075 734.339 3.64143 734.339 3.64143C735.24 3.65821 735.567 3.66431 735.895 3.67041C739.086 3.89369 740.531 5.47717 740.555 8.59076C740.502 11.4571 738.662 13.471 735.792 13.5814Z"
                                        fill="#1C1C1B">
                                    </path>
                                    <path
                                        d="M719.215 19.2415C720.33 22.2628 719.708 24.6752 716.951 26.5706C713.185 29.202 713.091 33.1742 713.911 37.1039C715.165 43.2872 716.561 49.3539 717.877 55.4389C718.043 56.1573 718.19 56.7959 718.257 57.4529C718.366 59.0247 717.647 60.2828 716.069 60.73C714.669 61.2202 713.232 61.5508 711.758 61.7218C710.144 62.0093 708.947 61.192 708.34 59.6506C707.868 58.3303 707.538 56.8935 707.127 55.475C706.588 53.4977 706.031 51.4407 705.553 49.3652C705.553 49.3652 705.633 49.3468 705.713 49.3285C705.456 48.2109 705.137 47.1916 704.8 46.0924C704.231 43.6178 703.741 41.1249 703.154 38.5705C702.217 34.4994 701.421 30.3118 700.245 26.2958C699.014 22.0404 700.649 19.6471 704.965 19.4104C708.428 19.1179 711.534 18.7393 714.397 16.5677C716.111 15.2489 718.179 16.2018 718.914 18.302C718.988 18.6213 719.061 18.9406 719.215 19.2415Z"
                                        fill="#1C1C1B">
                                    </path>
                                    <path
                                        d="M695.708 37.5695C696.585 40.3955 695.598 42.3759 693.562 44.1688C693.135 44.515 692.646 44.9588 691.997 45.438C692.458 46.007 692.591 46.2292 692.707 46.3715C696.152 48.2934 695.733 49.8123 694.63 52.4056C692.387 57.4324 689.078 61.4365 683.808 63.7775C678.999 65.9324 674.157 66.417 669.076 65.4443C663.719 64.3648 659.529 61.3495 656.209 56.9667C654.08 54.1663 652.616 50.9666 652.033 47.5723C651.122 42.3208 651.642 37.0883 654.276 32.3107C657.337 26.4317 662.342 22.891 668.553 21.0127C670.517 20.4102 672.49 20.2253 674.533 20.3603C679.793 20.6224 684.678 22.2257 688.637 25.7117C690.289 27.108 691.709 28.9749 692.871 30.8149C694.246 32.8595 695.017 35.2057 695.708 37.5695ZM662.995 38.3505C662.763 39.5764 663.491 40.5898 664.734 40.9018C665.347 41.0178 666.138 41.1784 666.68 40.9745C669.497 39.6798 672.624 40.1622 675.495 39.1073C676.774 38.8241 678.169 38.6831 679.414 38.2399C680.258 37.8853 681.209 37.2553 681.903 36.5984C682.801 35.7285 682.793 34.5557 681.985 33.56C680.796 31.9775 679.153 30.9989 677.279 30.4909C672.34 29.4028 667.275 30.7757 664.046 35.5173C663.548 36.2987 663.2 37.3823 662.995 38.3505ZM683.311 52.0585C684.974 50.0965 686.868 48.4189 689.055 46.9281C688.806 46.5637 688.638 46.1815 688.443 46.0569C688.052 45.8079 687.617 45.7364 687.199 45.7449C685.466 45.8768 683.831 46.0708 682.197 46.2649C681.539 46.3266 680.802 46.4059 680.277 46.6898C678.908 47.3283 677.531 47.5493 676.038 47.628C673.266 47.9899 670.529 48.5118 668.05 49.8157C666.299 50.6227 666.013 52.3638 667.371 53.5733C670.248 55.9567 673.632 56.466 677.089 55.7848C679.506 55.3337 681.728 54.0029 683.311 52.0585Z"
                                        fill="#1C1C1B">
                                    </path>
                                    <path
                                        d="M650.617 17.7499C651.624 18.5639 651.948 19.7378 651.279 21.0024C649.993 23.946 648.7 26.9712 647.333 29.9088C644.872 35.3936 642.406 40.9601 640.027 46.4509C639.041 48.6775 638.13 50.9919 637.143 53.2185C636.057 55.6841 634.825 57.8925 631.56 58.718C628.72 58.2609 627.295 56.4303 626.766 53.5984C625.962 48.9391 624.9 44.4251 623.927 39.8353C623.679 38.7492 623.437 37.5813 622.932 36.6404C622.218 35.1911 620.572 35.2332 619.652 36.5613C619.371 37.0332 619.165 37.5929 618.965 38.0709C617.73 41.429 616.414 44.781 615.261 48.1451C614.861 49.1011 614.625 50.0693 614.313 50.9496C613.902 52.069 613.496 53.1066 613.015 54.0566C611.953 56.1954 610.498 56.9909 608.461 56.7577C606.344 56.5185 605.034 55.3535 604.444 53.3385C603.848 51.4052 603.253 49.4718 602.738 47.5446C600.017 37.7327 597.213 27.9148 594.492 18.103C594.365 17.6008 594.244 17.0168 594.205 16.439C594.129 14.1336 595.288 12.9054 597.587 12.9117C599.146 12.9452 600.704 12.9787 602.213 13.6656C603.333 14.0772 604.183 14.7974 604.594 15.8957C604.936 16.8245 605.278 17.7534 605.45 18.7518C606.378 22.8453 607.3 27.0206 608.223 31.1958C608.407 32.0308 608.667 32.9536 609.021 33.7191C609.59 34.9112 611.393 34.9628 612.056 33.78C612.531 32.9117 612.93 31.9557 613.248 30.9937C614.713 26.7492 616.172 22.5864 617.718 18.3479C618.753 15.4678 621.978 14.0644 624.858 15.0995C626.77 15.8984 627.811 17.372 628.156 19.3688C628.869 23.0357 629.507 26.6149 630.221 30.2818C630.387 31.3619 630.547 32.5237 630.795 33.6098C630.916 34.1938 631.194 34.8715 631.479 35.4676C632.065 36.4146 633.454 36.5176 634.093 35.6615C634.643 34.881 635.125 33.9311 635.518 33.0568C636.423 30.8241 637.158 28.661 638.063 26.4284C638.88 24.2713 639.861 22.1264 640.684 19.8877C641.501 17.7307 642.975 16.6901 645.274 16.6964C646.342 16.6935 647.504 16.5333 648.56 16.6938C649.289 16.83 650.081 17.2174 650.617 17.7499Z"
                                        fill="#1C1C1B">
                                    </path>
                                    <path
                                        d="M581.397 16.4529C587.786 20.7941 591.062 27.1013 591.144 34.9647C591.39 46.2683 583.527 55.6881 572.305 57.6539C570.994 57.8997 569.684 57.8177 568.291 57.8997C556.414 58.0635 545.52 48.398 545.602 35.0466C545.602 30.3777 546.831 25.8726 549.616 22.1047C552.237 18.4187 555.677 15.6338 560.018 13.9136C567.636 11.0468 574.844 11.8659 581.397 16.4529ZM579.022 41.4356C581.151 37.3401 581.233 30.6234 577.056 26.1183C572.96 21.6132 567.063 20.8761 562.476 23.9067C557.807 26.9374 555.595 31.6063 556.332 37.1763C557.233 43.3196 562.394 48.4799 568.455 47.9066C572.469 48.398 577.301 44.794 579.022 41.4356Z"
                                        fill="#1C1C1B">
                                    </path>
                                    <path
                                        d="M540.732 44.0871C541.091 48.9253 539.076 52.9573 536.818 56.9574C536.181 58.0307 535.697 59.2064 534.757 60.0748C531.08 63.5587 526.859 66.1454 521.593 66.6128C517.903 67.0385 514.226 66.7226 510.791 65.1991C509.778 64.736 508.775 64.1917 507.864 63.5769C506.498 62.6546 505.718 62.3046 503.75 63.4515C503.845 64.6204 503.615 65.7469 503.212 66.9332C502.604 68.4232 502.624 70.1607 502.32 71.8557C502.224 72.5866 502.199 73.4094 502.012 74.211C501.654 76.312 500.531 77.3215 498.447 77.4619C497.776 77.5393 497.126 77.4542 496.477 77.3692C491.847 76.7633 491.096 74.9302 491.676 71.1236C493.058 60.5652 494.359 49.9963 495.811 39.5298C496.477 35.0734 496.889 30.6664 497.555 26.21C497.608 25.8039 497.671 25.3166 497.725 24.9105C497.898 22.9507 498.327 20.9415 500.545 20.4057C502.692 19.778 504.987 19.9132 506.745 21.6302C508.433 23.2554 510.241 23.3268 512.307 22.6885C513.783 22.1383 515.33 21.6798 516.835 21.5463C521.796 20.8739 526.362 21.9671 530.574 24.501C535.1 27.1586 537.8 31.1467 539.663 35.8514C539.842 36.3706 539.849 36.9497 540.202 37.4089C541.543 39.154 541.461 41.0433 540.871 43.0312C540.747 43.3455 540.694 43.7516 540.732 44.0871ZM528.85 50.2972C529.628 47.5078 530.488 44.7289 529.977 41.6881C529.202 36.878 525.2 31.4803 519.472 31.0611C512.212 30.3587 506.951 35.2051 505.815 41.9955C504.859 47.4052 506.895 52.0499 511.774 55.1667C513.535 56.2234 515.414 56.3866 517.261 56.7936C519.189 57.2111 521.071 56.714 522.692 55.687C524.671 54.459 526.578 53.139 528.133 51.3599C528.43 50.9857 528.726 50.6115 528.85 50.2972Z"
                                        fill="#1C1C1B">
                                    </path>
                                    <path
                                        d="M486.398 27.642C486.757 30.0411 487.111 32.5219 486.974 34.9754C486.606 41.5999 486.242 48.1427 485.873 54.7672C485.855 55.0943 485.837 55.4215 485.819 55.7486C485.414 58.5974 484.464 59.447 481.674 59.4558C480.53 59.3921 479.389 59.2466 478.326 59.1874C476.608 59.0919 475.591 58.2149 475.209 56.2248C475.096 55.316 475.228 54.421 475.278 53.5213C475.587 47.96 475.897 42.3987 476.129 36.751C476.238 34.7882 476.106 32.73 475.807 30.7444C475.235 26.2825 471.286 23.5197 466.893 24.3417C464.575 24.705 463.094 26.2633 461.849 27.9989C460.872 29.3391 460.29 30.9475 460.195 32.665C460.017 35.8546 459.844 38.9624 459.671 42.0702C459.462 45.8322 459.248 49.6761 459.039 53.4382C459.007 54.0106 458.975 54.5831 458.78 55.1465C458.452 56.605 457.239 57.768 455.758 57.8497C454.277 57.9314 452.641 57.8403 451.092 57.6721C449.302 57.4084 448.379 56.2906 448.316 54.4823C448.28 53.6599 448.321 52.9238 448.366 52.106C448.68 46.4629 449.08 40.7425 449.235 35.0085C449.34 33.1275 449.199 31.2328 448.895 29.329C448.141 25.1852 445.075 22.7996 440.813 22.7265C438.682 22.69 436.996 23.4986 435.669 25.2296C434.515 26.8061 433.765 28.4872 433.492 30.4409C433.324 31.9902 433.238 33.5441 433.069 35.0935C432.705 40.1595 432.51 45.1529 432.232 50.1418C432.164 51.3685 432.009 52.6725 431.618 53.7993C431.105 55.6576 430.078 56.4208 428.274 56.4025C426.879 56.4069 425.571 56.3341 424.189 56.0932C422.399 55.8295 421.554 54.798 421.413 52.9033C421.45 52.2491 421.486 51.5948 421.523 50.9405C421.823 45.5428 422.119 40.2268 422.419 34.829C422.706 29.6766 422.911 24.5197 423.279 19.3718C423.334 18.3904 423.307 17.4045 423.525 16.4322C423.784 14.7238 425.252 13.4108 426.978 13.3428C428.705 13.2748 430.327 13.6112 431.931 14.2747C433.775 15.0336 435.584 14.9702 437.433 14.1706C442.895 11.8493 448.097 12.7131 452.658 16.2484C455.412 18.3705 457.692 18.6615 460.75 16.7807C466.276 13.3144 472.078 13.7193 477.753 16.4141C482.469 18.6454 485.544 22.3441 486.398 27.642Z"
                                        fill="#1C1C1B">
                                    </path>
                                    <path
                                        d="M415.421 33.1208C416.356 35.9281 415.409 37.9284 413.411 39.763C412.991 40.1179 412.511 40.5717 411.872 41.0641C412.346 41.6235 412.483 41.8429 412.601 41.9828C416.086 43.8333 415.699 45.3605 414.648 47.976C412.509 53.0479 409.284 57.1194 404.063 59.5686C399.3 61.8222 394.469 62.4065 389.369 61.5388C383.991 60.57 379.739 57.6417 376.33 53.3282C374.143 50.5724 372.614 47.4036 371.961 44.022C370.942 38.7904 371.354 33.5483 373.888 28.7174C376.828 22.7766 381.759 19.1334 387.93 17.1274C389.882 16.4846 391.85 16.259 393.895 16.3519C399.159 16.5054 404.076 18.0077 408.107 21.4113C409.787 22.7732 411.245 24.6105 412.445 26.4262C413.862 28.4419 414.681 30.7717 415.421 33.1208ZM382.731 34.5762C382.524 35.8065 383.272 36.8048 384.522 37.0911C385.137 37.1944 385.931 37.3387 386.469 37.1236C389.259 35.7711 392.395 36.1889 395.243 35.0751C396.517 34.7655 397.909 34.5958 399.143 34.127C399.98 33.755 400.918 33.1056 401.598 32.4345C402.478 31.5463 402.446 30.3739 401.618 29.3951C400.396 27.8375 398.734 26.8929 396.849 26.4237C391.889 25.4377 386.853 26.9147 383.723 31.7218C383.241 32.5134 382.916 33.6039 382.731 34.5762ZM403.325 47.8624C404.947 45.8664 406.806 44.1501 408.962 42.6146C408.706 42.2553 408.53 41.8767 408.332 41.7562C407.936 41.5153 407.499 41.4528 407.082 41.4699C405.352 41.6375 403.722 41.8652 402.091 42.093C401.435 42.1681 400.7 42.2627 400.181 42.5573C398.826 43.2239 397.453 43.4732 395.963 43.5827C393.198 44.0017 390.473 44.5799 388.021 45.9347C386.287 46.7776 386.037 48.5243 387.42 49.7054C390.345 52.0291 393.739 52.4684 397.181 51.7161C399.588 51.2153 401.782 49.8389 403.325 47.8624Z"
                                        fill="#1C1C1B">
                                    </path>
                                    <path
                                        d="M339.881 37.2622C338.861 44.4805 337.84 51.6988 336.82 58.9171C336.74 59.4848 336.671 59.9714 336.51 60.5277C336.037 62.1154 335.008 62.9625 333.293 62.8029C331.74 62.6662 330.188 62.5295 328.67 62.1495C326.99 61.7465 326.224 60.7283 326.221 58.9907C326.242 57.6701 326.437 56.2913 326.621 54.9936C327.205 50.8573 327.778 46.8021 328.363 42.6658C328.592 41.0437 328.752 39.329 328.981 37.7069C329.175 35.7489 328.941 33.8959 328.37 32.078C326.834 27.1456 322.395 25.1945 317.706 27.3444C315.761 28.2277 314.478 29.7007 313.635 31.567C312.781 33.5144 312.239 35.5887 311.941 37.6974C311.173 43.1314 310.405 48.5654 309.637 53.9994C309.58 54.4049 309.511 54.8916 309.454 55.2971C308.983 58.0432 307.768 59.0296 305.069 58.8135C303.748 58.7923 302.462 58.5278 301.094 58.2518C299.495 57.8603 298.671 56.6684 298.738 55.0234C298.818 54.4556 298.899 53.8879 298.967 53.4013C299.758 47.8051 300.538 42.29 301.317 36.7749C302.04 31.6653 302.681 26.5442 303.484 21.4461C303.587 20.7162 303.702 19.9051 303.817 19.0941C304.056 16.8117 305.932 15.8359 307.831 15.8562C309.233 15.8889 310.786 16.0256 311.991 16.8579C314.09 18.3954 316.338 18.2994 318.746 17.6471C319.858 17.3907 321.132 17.1571 322.301 17.0743C329.332 16.4962 334.318 19.8482 337.894 25.5653C338.707 26.8384 339.138 28.4711 339.511 29.9301C340.001 32.3157 340.225 34.829 339.881 37.2622Z"
                                        fill="#1C1C1B">
                                    </path>
                                    <path
                                        d="M292.601 51.9913C292.847 53.3838 292.683 54.8582 292.765 56.3326C292.765 57.6432 292.355 58.7899 291.454 59.6909C291.045 60.1824 290.39 60.6739 289.816 60.6739C288.178 60.8377 286.458 61.0015 284.82 60.6739C283.181 60.3462 282.117 58.9537 282.117 57.2336C282.117 53.7934 281.789 50.3531 282.362 46.9129C282.444 46.3395 282.444 45.848 282.362 45.2747C282.28 43.6364 282.035 41.9163 282.035 40.2781C282.035 34.7901 282.035 29.3021 282.035 23.896C282.035 22.995 282.035 22.094 282.198 21.1929C282.69 18.8994 284.246 17.7527 286.13 17.8346C287.113 17.9165 288.178 17.8346 289.161 17.9165C291.127 18.2442 292.355 19.4728 292.601 21.4387C292.765 22.5854 292.765 23.7322 292.765 24.797C292.765 31.5956 292.765 38.3942 292.765 45.2747C292.765 46.5852 292.683 47.9777 293.912 48.9606C293.093 50.1074 292.437 50.7627 292.601 51.9913ZM288.096 13.5752C282.69 13.9029 281.625 11.2817 282.117 6.77666C282.28 5.46609 283.919 3.99171 285.311 3.74597C285.884 3.66406 286.458 3.66406 286.458 3.66406C287.359 3.66406 287.686 3.66406 288.014 3.66406C291.209 3.82788 292.683 5.38418 292.765 8.49679C292.765 11.3637 290.963 13.4114 288.096 13.5752Z"
                                        fill="#1C1C1B">
                                    </path>
                                    <path
                                        d="M250.052 48.9779C251.531 55.5547 247.942 63.1561 241.336 65.6313C234.509 68.3022 226.351 66.6908 221.906 60.1893C221.286 59.2822 220.887 58.1793 220.661 57.1355C220.277 55.5346 221.073 54.1028 222.593 53.7294C224.356 53.3227 226.141 53.0782 227.879 53.0884C228.956 53.1062 229.96 53.7955 230.941 54.3225C231.473 54.5805 231.897 55.2664 232.451 55.6867C233.65 56.5972 235.015 56.9064 236.535 56.533C238.136 56.1484 239.069 55.1113 239.529 53.6428C239.849 52.3589 239.048 50.7324 237.697 49.9252C237.155 49.5861 236.542 49.3393 235.849 49.1036C233.709 48.5698 231.558 47.9549 229.418 47.4211C226.942 46.8506 224.747 45.9111 222.787 44.2779C222.325 43.9277 221.864 43.5775 221.635 43.1128C220.099 40.3468 218.459 37.4296 218.827 34.0724C219.142 31.5489 219.54 29.0143 221.405 26.94C222.268 25.9952 223.256 25.3638 224.141 24.5812C225.317 23.5108 227.063 24.1812 228.043 22.8895C228.965 21.7713 230.503 22.1393 231.374 21.8548C237.693 20.907 242.01 23.4575 245.145 28.2369C246.614 30.5159 245.675 32.7114 243.019 33.2404C242.462 33.3993 241.894 33.4771 241.326 33.5549C239.308 33.9138 237.316 33.8558 235.574 32.6062C234.478 31.8468 233.298 31.6778 232.01 31.9367C230.815 32.2657 230.092 33.026 229.842 34.2177C229.662 35.3171 230.131 36.3277 231.032 36.8658C232.349 37.4295 233.747 37.9821 235.124 38.3724C237.356 38.9763 239.728 39.3955 241.89 40.0916C246.296 41.4726 249.012 44.4077 250.052 48.9779Z"
                                        fill="#1C1C1B">
                                    </path>
                                    <path
                                        d="M214.375 23.8886C214.245 25.7698 214.032 27.6418 213.811 29.5951C213.018 36.5946 212.225 43.5942 211.432 50.5937C211.21 52.547 210.98 54.5818 210.677 56.5259C210.603 57.177 210.52 57.9095 210.365 58.5514C210.009 60.2422 209.264 61.724 207.2 62.4793C204.93 62.1397 202.742 61.8093 200.718 60.7556C199.154 60.0014 197.399 60.2147 195.842 60.8626C193.09 61.8697 190.376 61.8095 187.537 61.4053C180.384 60.5124 173.558 54.5455 173.543 45.2286C173.588 36.8254 175.108 28.5068 175.886 20.1866C176.164 17.0032 178.464 15.6152 181.213 16.0915C181.855 16.2467 182.515 16.2391 183.157 16.3943C185.418 16.8153 186.654 18.2743 186.549 20.6531C186.466 21.3856 186.374 22.1995 186.282 23.0134C185.848 26.8387 185.487 30.7546 184.963 34.6521C184.45 37.7265 184.506 40.8654 184.644 44.0135C184.684 46.5735 185.583 48.8188 187.705 50.4606C191.489 53.4448 197.236 52.2 199.452 47.9173C200.914 45.1977 201.581 42.2232 201.922 39.2118C202.476 34.3284 203.029 29.445 203.582 24.5616C203.684 23.6663 203.785 22.7711 203.968 21.885C204.388 20.3662 205.756 19.2024 207.412 19.1426C208.642 19.1996 209.872 19.2565 211.074 19.5577C213.325 20.0601 214.48 21.5099 214.375 23.8886Z"
                                        fill="#1C1C1B">
                                    </path>
                                    <path
                                        d="M139.769 31.6695C140.881 38.8742 141.993 46.0789 143.106 53.2836C143.193 53.8503 143.268 54.336 143.275 54.9151C143.282 56.5717 142.541 57.6805 140.854 58.0239C139.328 58.3423 137.802 58.6607 136.239 58.7362C134.514 58.8367 133.486 58.0837 132.981 56.4212C132.619 55.1509 132.407 53.7748 132.207 52.4795C131.57 48.351 130.945 44.3034 130.308 40.1748C130.058 38.5558 129.714 36.8683 129.464 35.2493C129.084 33.3189 128.323 31.613 127.251 30.0379C124.353 25.7611 119.539 25.1781 115.673 28.5928C114.067 30.001 113.265 31.7825 112.998 33.8128C112.744 35.9241 112.826 38.0663 113.151 40.171C113.988 45.5948 114.825 51.0186 115.662 56.4424C115.725 56.8471 115.8 57.3328 115.862 57.7376C116.206 60.5025 115.329 61.7982 112.682 62.3725C111.412 62.7343 110.104 62.8533 108.716 62.9848C107.072 63.0728 105.938 62.1704 105.526 60.5764C105.439 60.0097 105.351 59.443 105.276 58.9573C104.414 53.3716 103.564 47.8669 102.714 42.3622C101.927 37.2622 101.059 32.1748 100.353 27.0623C100.24 26.3337 100.115 25.5242 99.9903 24.7147C99.5595 22.4605 101.072 20.9838 102.896 20.4536C104.248 20.0792 105.773 19.7609 107.168 20.2085C109.623 21.0729 111.746 20.3308 113.862 19.0095C114.852 18.4423 116.004 17.8501 117.1 17.4323C123.662 14.8445 129.405 16.6103 134.483 21.0479C135.629 22.0313 136.514 23.4694 137.293 24.7581C138.453 26.8998 139.394 29.2409 139.769 31.6695Z"
                                        fill="#1C1C1B">
                                    </path>
                                    <path
                                        d="M93.7437 51.9913C93.9894 53.3838 93.8256 54.8582 93.9075 56.3326C93.9075 57.6432 93.4979 58.7899 92.5969 59.6909C92.1874 60.1824 91.5321 60.6739 90.9587 60.6739C89.3205 60.8377 87.6004 61.0015 85.9622 60.6739C84.324 60.3462 83.2591 58.9537 83.2591 57.2336C83.2591 53.7934 82.9315 50.3531 83.5049 46.9129C83.5868 46.3395 83.5868 45.848 83.5049 45.2747C83.4229 43.6364 83.1772 41.9163 83.1772 40.2781C83.1772 34.7901 83.1772 29.3021 83.1772 23.896C83.1772 22.995 83.1772 22.094 83.341 21.1929C83.8325 18.8994 85.3888 17.7527 87.2727 17.8346C88.2557 17.9165 89.3205 17.8346 90.3034 17.9165C92.2693 18.2442 93.4979 19.4728 93.7437 21.4387C93.9075 22.5854 93.9075 23.7322 93.9075 24.797C93.9075 31.5956 93.9075 38.3942 93.9075 45.2747C93.9075 46.5852 93.8256 47.9777 95.0543 48.9606C94.2351 50.1074 93.5799 50.7627 93.7437 51.9913ZM89.2386 13.5752C83.8325 13.9029 82.7677 11.2817 83.2591 6.77666C83.4229 5.46609 85.0612 3.99171 86.4536 3.74597C87.027 3.66406 87.6004 3.66406 87.6004 3.66406C88.5014 3.66406 88.829 3.66406 89.1567 3.66406C92.3512 3.82788 93.8256 5.38418 93.9075 8.49679C93.9075 11.3637 92.1055 13.4114 89.2386 13.5752Z"
                                        fill="#1C1C1B">
                                    </path>
                                    <path
                                        d="M67.0161 20.4529C73.4051 24.7941 76.6816 31.1013 76.7635 38.9647C77.0092 50.2683 69.1458 59.6881 57.924 61.6539C56.6135 61.8997 55.3029 61.8177 53.9104 61.8997C42.0334 62.0635 31.1393 52.398 31.2212 39.0466C31.2212 34.3777 32.4498 29.8726 35.2348 26.1047C37.8559 22.4187 41.2962 19.6338 45.6374 17.9136C53.2551 15.0468 60.4633 15.8659 67.0161 20.4529ZM64.6407 45.4356C66.7704 41.3401 66.8523 34.6234 62.6748 30.1183C58.5793 25.6132 52.6817 24.8761 48.0947 27.9067C43.4258 30.9374 41.2143 35.6063 41.9515 41.1763C42.8525 47.3196 48.0128 52.4799 54.0742 51.9066C58.0878 52.398 62.9206 48.794 64.6407 45.4356Z"
                                        fill="#1C1C1B">
                                    </path>
                                    <path
                                        d="M22.72 54.0843C21.7144 59.2396 18.1351 63.2318 13.3278 65.2458C10.8023 66.2368 8.33388 66.1614 5.97859 65.853C5.32885 65.7679 4.59789 65.6722 4.02937 65.5977C2.5781 65.325 1.16648 63.488 1.19549 62.0048C1.27381 60.7759 1.44398 59.4764 1.6741 58.35C2.02798 56.9094 2.8972 55.9493 4.34171 55.6428C4.85029 55.5442 5.35886 55.4456 5.8568 55.4282C6.27352 55.4001 6.69024 55.3721 7.1176 55.2628C8.38904 55.0163 9.68175 54.6073 10.7627 53.9228C12.4866 52.7442 12.9111 51.3954 12.8415 49.4036C12.7642 48.7326 12.7574 48.1535 12.8318 47.5849C14.0124 38.5698 15.1824 29.6359 16.3417 20.7833L17.267 13.7174L17.3202 13.3113C17.3627 12.9864 17.4159 12.5803 17.4585 12.2555C17.8762 10.3275 19.2646 9.18759 21.062 9.34036C22.5345 9.45059 23.9858 9.72325 25.4371 9.99591C27.132 10.3005 28.2613 11.7701 28.1085 13.5676C27.9915 14.4609 27.8639 15.4355 27.7469 16.3289L27.6406 17.1411C27.0662 21.5268 26.4919 25.9126 25.9175 30.2983L25.2368 35.4962L24.7901 38.9073C24.269 42.8869 23.7904 46.5417 23.2692 50.5214C23.216 50.9274 23.1628 51.3335 23.099 51.8208C23.0033 52.5518 22.8157 53.3533 22.72 54.0843Z"
                                        fill="#1C1C1B">
                                    </path>
                                </svg>
                            </div>
                            <div
                                class="heading-container-mobile overflow-hidden flex lg:hidden mt-[40px] pb-[40px] px-[14px] md:px-[55px] w-full block mx-auto justify-center [&amp;_svg_path]:translate-y-[-200%] [&amp;_svg]:w-full [&amp;_svg]:overflow-visible">
                                <svg fill="none" height="110" viewbox="0 0 516 110" width="516"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M503.777 80.223C504.059 78.1517 504.396 76.0895 504.733 74.0274C505.061 72.021 505.379 70.0703 505.707 68.0639C506.29 64.4969 506.985 60.9481 507.456 57.363C507.754 54.8367 509.208 53.6437 511.735 54.2857C512.172 54.4143 512.683 54.4405 513.111 54.6248C514.189 55.0299 514.851 55.882 514.882 57.0888C514.912 57.6087 514.821 58.166 514.739 58.6676C513.564 65.8573 512.398 72.9912 511.223 80.1809C511.132 80.7382 511.023 81.407 510.764 81.937C510.258 83.2848 509.313 83.817 507.845 83.6917C507.232 83.5915 506.61 83.547 506.062 83.4002C504.352 83.0064 503.551 81.9598 503.777 80.223ZM507.158 86.4977C509.053 86.8074 509.836 87.9654 509.564 89.9809C509.575 90.2687 509.529 90.5474 509.419 90.8727C508.988 92.8051 507.951 93.5512 505.991 93.2881C505.703 93.2983 505.378 93.1879 505.099 93.1424C504.765 93.0877 504.486 93.0422 504.208 92.9966C502.694 92.8064 502.013 91.7224 502.166 90.4314C502.416 87.1533 503.108 85.7213 507.158 86.4977Z"
                                        fill="#1C1C1B">
                                    </path>
                                    <path
                                        d="M498.635 82.9865C499.741 87.5006 497.367 92.7877 492.846 94.5808C488.175 96.5116 482.531 95.5081 479.381 91.085C478.942 90.4678 478.652 89.7129 478.483 88.9963C478.197 87.8978 478.727 86.9004 479.769 86.623C480.979 86.3194 482.207 86.1274 483.405 86.1116C484.147 86.1097 484.848 86.5717 485.532 86.9221C485.902 87.0929 486.203 87.5601 486.59 87.8425C487.429 88.4544 488.374 88.6496 489.417 88.3722C490.515 88.0861 491.145 87.3589 491.443 86.3406C491.647 85.4513 491.073 84.3407 490.131 83.802C489.753 83.5754 489.327 83.4133 488.846 83.2599C487.364 82.9201 485.873 82.5246 484.391 82.1848C482.677 81.8241 481.151 81.2053 479.779 80.1053C479.456 79.8699 479.134 79.6346 478.97 79.3173C477.874 77.4308 476.706 75.4415 476.915 73.1224C477.099 71.3788 477.34 69.6264 478.598 68.172C479.181 67.5094 479.854 67.0612 480.453 66.5101C481.25 65.7567 482.462 66.1959 483.121 65.2926C483.741 64.5097 484.807 64.7432 485.403 64.5356C489.746 63.7991 492.756 65.5005 494.98 68.7538C496.023 70.3055 495.404 71.8312 493.58 72.2308C493.198 72.3477 492.808 72.4087 492.417 72.4698C491.031 72.7438 489.657 72.73 488.44 71.8915C487.674 71.3825 486.858 71.2815 485.974 71.4769C485.155 71.7194 484.667 72.253 484.51 73.0778C484.4 73.838 484.737 74.5284 485.365 74.8875C486.28 75.2588 487.251 75.6213 488.205 75.8723C489.752 76.2591 491.393 76.5169 492.892 76.9683C495.947 77.8624 497.858 79.8498 498.635 82.9865Z"
                                        fill="#1C1C1B">
                                    </path>
                                    <path
                                        d="M473.811 70.0206C473.282 73.8259 472.42 77.5748 471.835 81.3707C471.261 85.1109 470.575 88.8323 469.944 92.5631C469.878 92.9529 469.812 93.3427 469.756 93.6768C469.305 96.0061 468.273 96.6908 466.036 96.3702C465.192 96.2847 464.375 96.0322 463.671 95.455C463.476 95.2503 463.217 95.0919 462.967 94.8778C462.105 94.2167 461.149 94.1124 460.108 94.5093C459.318 94.7768 458.491 94.9234 457.655 95.1258C455.027 95.7698 452.484 95.2256 450.017 94.2359C447.447 93.1718 445.436 91.5147 443.817 89.2364C438.949 82.4573 440.037 73.3056 446.428 67.6844C450.195 64.3692 454.849 63.2655 459.813 64.3908C461.41 64.775 462.912 65.3726 464.014 66.647C464.588 67.3168 465.376 67.7363 466.519 67.4139C466.995 66.2916 467.128 65.1685 467.325 63.9992C467.57 62.5514 467.759 61.0942 468.059 59.6558C468.453 58.0041 469.569 57.1618 471.258 57.3327C472.103 57.4182 472.938 57.5593 473.764 57.7561C474.859 58.0557 475.47 58.8462 475.393 59.9787C475.41 60.5543 475.251 61.1575 475.203 61.7794C474.733 64.5636 474.16 67.2733 473.811 70.0206ZM460.875 87.5943C462.689 86.0108 464.578 84.3253 464.788 81.7262C465.182 80.0745 465.092 78.5703 464.715 77.0747C463.075 71.1848 456.674 69.0722 451.866 72.7844C448.974 74.9875 447.853 77.8909 448.448 81.4853C449.273 86.4356 452.517 88.5875 456.909 88.6995C458.329 88.7677 459.861 88.5112 460.875 87.5943Z"
                                        fill="#1C1C1B">
                                    </path>
                                    <path
                                        d="M437.189 75.2606C437.74 80.2565 438.291 85.2523 438.842 90.2481C438.885 90.6411 438.922 90.9779 438.909 91.377C438.865 92.5182 438.322 93.2599 437.149 93.446C436.089 93.6198 435.028 93.7935 433.949 93.7988C432.758 93.8166 432.073 93.2672 431.774 92.107C431.563 91.2212 431.458 90.267 431.359 89.3688C431.043 86.506 430.734 83.6994 430.418 80.8366C430.294 79.714 430.108 78.5414 429.984 77.4187C429.779 76.0777 429.306 74.8799 428.615 73.763C426.747 70.7306 423.448 70.1853 420.683 72.4219C419.535 73.3439 418.929 74.547 418.685 75.9375C418.447 77.3842 418.439 78.8622 418.6 80.3217C419.015 84.0826 419.43 87.8435 419.844 91.6044C419.875 91.8851 419.912 92.2219 419.943 92.5025C420.098 94.4172 419.455 95.2836 417.615 95.6001C416.729 95.8114 415.825 95.8543 414.864 95.9034C413.729 95.9149 412.975 95.2595 412.739 94.1492C412.696 93.7563 412.652 93.3634 412.615 93.0266C412.188 89.1534 411.767 85.3363 411.346 81.5193C410.956 77.9829 410.51 74.4527 410.176 70.9102C410.121 70.405 410.059 69.8436 409.997 69.2823C409.767 67.7168 410.853 66.7448 412.126 66.434C413.068 66.2165 414.128 66.0428 415.076 66.3928C416.74 67.0615 418.225 66.6137 419.722 65.7668C420.421 65.4057 421.232 65.0321 421.999 64.7771C426.597 63.1906 430.5 64.5783 433.865 67.7866C434.625 68.4982 435.192 69.5152 435.69 70.4261C436.425 71.936 437.003 73.5766 437.189 75.2606Z"
                                        fill="#1C1C1B">
                                    </path>
                                    <path
                                        d="M405.258 88.7215C405.427 89.6816 405.314 90.6981 405.371 91.7146C405.371 92.6182 405.089 93.4088 404.467 94.03C404.185 94.3689 403.733 94.7077 403.338 94.7077C402.208 94.8207 401.022 94.9336 399.893 94.7077C398.764 94.4818 398.029 93.5218 398.029 92.3358C398.029 89.964 397.804 87.5921 398.199 85.2202C398.255 84.8249 398.255 84.4861 398.199 84.0907C398.142 82.9613 397.973 81.7753 397.973 80.6459C397.973 76.8622 397.973 73.0785 397.973 69.3512C397.973 68.73 397.973 68.1088 398.086 67.4876C398.425 65.9064 399.498 65.1157 400.797 65.1722C401.474 65.2287 402.208 65.1722 402.886 65.2287C404.241 65.4546 405.089 66.3017 405.258 67.657C405.371 68.4477 405.371 69.2383 405.371 69.9724C405.371 74.6597 405.371 79.347 405.371 84.0907C405.371 84.9943 405.314 85.9544 406.162 86.632C405.597 87.4227 405.145 87.8744 405.258 88.7215ZM402.152 62.2356C398.425 62.4615 397.691 60.6544 398.029 57.5483C398.142 56.6448 399.272 55.6282 400.232 55.4588C400.627 55.4023 401.022 55.4023 401.022 55.4023C401.644 55.4023 401.87 55.4023 402.095 55.4023C404.298 55.5153 405.314 56.5883 405.371 58.7343C405.371 60.7108 404.129 62.1227 402.152 62.2356Z"
                                        fill="#1C1C1B">
                                    </path>
                                    <path
                                        d="M391.2 70.518C391.713 72.1099 392.232 73.7579 392.414 75.4423C392.905 79.9902 393.39 84.4819 393.881 89.0298C393.905 89.2544 393.93 89.479 393.954 89.7036C393.998 91.6869 393.447 92.3712 391.55 92.6897C390.764 92.7746 389.972 92.8033 389.242 92.8821C388.063 93.0095 387.272 92.5268 386.79 91.2157C386.611 90.6102 386.6 89.9865 386.534 89.3689C386.121 85.5509 385.709 81.7329 385.234 77.8649C385.089 76.5173 384.769 75.1319 384.343 73.8147C383.454 70.8434 380.458 69.406 377.561 70.4573C376.026 70.9639 375.193 72.1899 374.54 73.5101C374.025 74.5312 373.81 75.6906 373.937 76.8696C374.174 79.0594 374.404 81.1929 374.634 83.3265C374.913 85.9093 375.198 88.5482 375.477 91.1309C375.52 91.524 375.562 91.917 375.492 92.3221C375.433 93.351 374.738 94.2781 373.739 94.4995C372.741 94.7209 371.618 94.8422 370.545 94.9013C369.298 94.9224 368.545 94.2652 368.299 93.0421C368.183 92.4867 368.128 91.9814 368.067 91.4199C367.649 87.5458 367.281 83.6094 366.744 79.6913C366.605 78.3999 366.297 77.1267 365.876 75.8657C364.899 73.1311 362.546 71.8516 359.639 72.2792C358.185 72.493 357.129 73.2319 356.42 74.5581C355.811 75.7598 355.489 76.9874 355.522 78.3471C355.582 79.4199 355.697 80.4867 355.756 81.5596C356.076 85.0467 356.502 88.4656 356.871 91.8906C356.962 92.7328 357.003 93.6372 356.864 94.4475C356.722 95.7692 356.109 96.4034 354.88 96.5929C353.932 96.7522 353.033 96.8492 352.067 96.84C350.819 96.8611 350.129 96.254 349.821 94.9808C349.772 94.5317 349.724 94.0825 349.675 93.6333C349.275 89.9276 348.881 86.2781 348.481 82.5724C348.099 79.0351 347.661 75.504 347.335 71.9607C347.262 71.2869 347.133 70.6192 347.173 69.9333C347.158 68.7421 348.009 67.6845 349.176 67.4449C350.343 67.2053 351.484 67.2524 352.65 67.5242C353.99 67.8339 355.213 67.5882 356.381 66.8372C359.837 64.6464 363.473 64.6514 366.972 66.5456C369.082 67.6809 370.666 67.6234 372.536 66.0014C375.907 63.0246 379.899 62.6502 384.062 63.8479C387.52 64.8377 390.026 67.0095 391.2 70.518Z"
                                        fill="#1C1C1B">
                                    </path>
                                    <path
                                        d="M327.589 77.9473C327.108 80.673 326.683 83.4097 326.147 86.1245C325.633 88.7285 325.019 91.2552 324.35 93.771C323.527 96.7744 322.327 99.646 320.006 101.778C317.122 104.432 313.77 105.958 309.783 106.035C308.277 106.083 306.693 105.943 305.197 105.647C300.355 104.807 296.815 102.035 294.445 97.7109C294.145 97.1911 293.922 96.5715 293.809 95.9737C293.585 94.7781 294.512 93.2917 296.152 93.7306C297.415 94.0376 298.668 94.3999 299.931 94.7069C300.851 95.0036 301.539 95.6 302.15 96.2962C303.372 97.6886 304.858 98.6153 306.609 99.076C309.28 99.8336 311.805 99.5836 314.049 97.8392C314.59 97.428 314.999 96.8179 315.341 96.2522C315.517 95.9416 315.483 95.5319 315.438 95.1776C315.359 94.7016 314.671 94.3932 314.34 94.6155C313.875 94.9268 313.455 95.3044 312.837 95.8154C309.092 95.2489 305.369 94.8594 302.207 92.5083C300.199 91.0181 298.577 89.3166 297.364 87.0048C296.151 84.6931 295.481 82.2582 295.463 79.722C295.449 73.9629 297.752 69.2944 302.85 66.2138C303.116 66.0359 303.37 65.9135 303.635 65.7356C305.924 64.0575 308.57 63.774 311.317 63.8558C314.396 64.0031 317.212 64.9043 319.576 66.9252C320.697 67.9524 322.015 67.9823 323.265 67.4808C324.571 66.9902 325.734 67.2199 326.876 67.5604C328.505 68.0547 329.25 69.2379 328.922 70.9C328.507 73.2934 327.993 75.6094 327.589 77.9473ZM316.8 86.2364C319.296 83.5057 320.285 80.247 319.157 76.6282C318.141 73.3192 315.854 71.1985 312.42 70.8083C307.844 70.3657 304.196 73.0993 302.968 77.8648C302.672 79.0727 302.786 80.5344 303.144 81.929C303.805 84.9952 305.661 87.261 308.708 88.1505C311.646 89.0181 314.613 88.5677 316.8 86.2364Z"
                                        fill="#1C1C1B">
                                    </path>
                                    <path
                                        d="M290.735 71.2791C291.226 76.2812 291.716 81.2833 292.207 86.2854C292.246 86.6788 292.279 87.016 292.261 87.415C292.203 88.5556 291.651 89.2907 290.476 89.4627C289.414 89.6237 288.352 89.7847 287.273 89.777C286.081 89.7805 285.402 89.2229 285.118 88.0592C284.917 87.1709 284.824 86.2155 284.735 85.3162C284.454 82.4499 284.178 79.6397 283.897 76.7733C283.787 75.6493 283.615 74.4745 283.505 73.3504C283.316 72.0071 282.857 70.8037 282.18 69.6786C280.348 66.6239 277.056 66.039 274.265 68.2422C273.105 69.1504 272.485 70.3461 272.224 71.7336C271.968 73.1773 271.943 74.6551 272.087 76.1164C272.456 79.882 272.826 83.6476 273.195 87.4133C273.223 87.6943 273.256 88.0315 273.283 88.3125C273.415 90.2289 272.761 91.0875 270.918 91.3819C270.029 91.5825 269.125 91.6146 268.164 91.6521C267.028 91.65 266.282 90.9855 266.06 89.8725C266.021 89.4791 265.982 89.0857 265.949 88.7484C265.569 84.8704 265.194 81.0486 264.819 77.2268C264.471 73.686 264.068 70.1507 263.776 66.6043C263.727 66.0985 263.672 65.5365 263.617 64.9744C263.406 63.4063 264.503 62.4474 265.78 62.1519C266.724 61.9458 267.786 61.7848 268.73 62.1462C270.386 62.8348 271.876 62.4049 273.384 61.5761C274.087 61.2233 274.902 60.8596 275.672 60.6138C280.289 59.0827 284.175 60.5172 287.501 63.7657C288.252 64.4864 288.807 65.5101 289.294 66.427C290.011 67.9455 290.569 69.593 290.735 71.2791Z"
                                        fill="#1C1C1B">
                                    </path>
                                    <path
                                        d="M257.12 88.7775C257.272 89.7406 257.14 90.7548 257.177 91.7722C257.161 92.6756 256.864 93.4608 256.231 94.0704C255.942 94.4039 255.484 94.7343 255.089 94.7269C253.958 94.8188 252.77 94.9096 251.645 94.6628C250.52 94.4159 249.804 93.4423 249.826 92.2566C249.87 89.8851 249.688 87.5094 250.128 85.1453C250.191 84.7512 250.198 84.4124 250.149 84.0161C250.113 82.8858 249.966 81.6969 249.987 80.5676C250.057 76.7846 250.128 73.0015 250.197 69.2749C250.209 68.6538 250.22 68.0327 250.345 67.4137C250.713 65.8391 251.801 65.0686 253.098 65.1492C253.775 65.2183 254.51 65.1755 255.186 65.2446C256.537 65.4957 257.368 66.3584 257.513 67.7167C257.611 68.5093 257.596 69.2997 257.582 70.0338C257.495 74.7202 257.408 79.4067 257.319 84.1496C257.303 85.053 257.228 86.0119 258.063 86.7052C257.483 87.4852 257.023 87.9285 257.12 88.7775ZM254.508 62.2383C250.777 62.3948 250.077 60.5743 250.473 57.4751C250.603 56.5738 251.751 55.5785 252.714 55.427C253.111 55.3779 253.506 55.3852 253.506 55.3852C254.127 55.3968 254.353 55.401 254.579 55.4052C256.779 55.5592 257.775 56.6509 257.792 58.7975C257.755 60.7738 256.486 62.1622 254.508 62.2383Z"
                                        fill="#1C1C1B">
                                    </path>
                                    <path
                                        d="M243.078 66.1399C243.848 68.2229 243.419 69.8862 241.518 71.1929C238.922 73.0071 238.856 75.7457 239.422 78.4551C240.287 82.7182 241.249 86.9008 242.157 91.0962C242.271 91.5915 242.372 92.0318 242.418 92.4847C242.494 93.5684 241.998 94.4358 240.91 94.7441C239.944 95.0821 238.954 95.31 237.938 95.4279C236.825 95.6261 235.999 95.0626 235.581 93.9999C235.256 93.0896 235.028 92.099 234.745 91.121C234.373 89.7578 233.989 88.3396 233.66 86.9086C233.66 86.9086 233.715 86.896 233.77 86.8833C233.593 86.1128 233.373 85.41 233.141 84.6522C232.748 82.9461 232.41 81.2274 232.005 79.4662C231.359 76.6594 230.811 73.7723 230 71.0035C229.151 68.0696 230.278 66.4195 233.254 66.2563C235.641 66.0547 237.783 65.7936 239.757 64.2965C240.938 63.3872 242.364 64.0442 242.872 65.4921C242.922 65.7123 242.973 65.9324 243.078 66.1399Z"
                                        fill="#1C1C1B">
                                    </path>
                                    <path
                                        d="M226.872 78.7765C227.477 80.7249 226.796 82.0903 225.392 83.3264C225.098 83.5651 224.761 83.871 224.313 84.2014C224.632 84.5937 224.723 84.7469 224.803 84.845C227.178 86.1701 226.89 87.2173 226.129 89.0053C224.582 92.4709 222.301 95.2316 218.667 96.8456C215.352 98.3313 212.014 98.6654 208.51 97.9948C204.818 97.2505 201.928 95.1716 199.64 92.1499C198.171 90.2191 197.162 88.0131 196.76 85.6729C196.132 82.0523 196.491 78.4447 198.306 75.1508C200.417 71.0976 203.868 68.6564 208.15 67.3614C209.504 66.9461 210.864 66.8186 212.273 66.9116C215.899 67.0923 219.267 68.1977 221.997 70.6011C223.136 71.5638 224.115 72.8509 224.916 74.1196C225.864 75.5292 226.396 77.1468 226.872 78.7765ZM204.318 79.315C204.158 80.1601 204.66 80.8589 205.517 81.074C205.94 81.1539 206.485 81.2647 206.859 81.1241C208.801 80.2314 210.957 80.564 212.936 79.8367C213.818 79.6415 214.78 79.5443 215.638 79.2387C216.22 78.9942 216.876 78.5598 217.354 78.107C217.973 77.5072 217.968 76.6986 217.411 76.0121C216.591 74.9211 215.458 74.2464 214.166 73.8962C210.761 73.146 207.269 74.0925 205.042 77.3616C204.699 77.9003 204.459 78.6474 204.318 79.315ZM218.325 88.7659C219.472 87.4132 220.777 86.2566 222.285 85.2288C222.114 84.9775 221.998 84.714 221.863 84.6282C221.593 84.4564 221.293 84.4072 221.005 84.413C219.811 84.5039 218.684 84.6377 217.557 84.7716C217.103 84.8141 216.595 84.8687 216.233 85.0645C215.29 85.5047 214.34 85.657 213.311 85.7113C211.4 85.9608 209.513 86.3206 207.803 87.2196C206.596 87.776 206.399 88.9764 207.335 89.8103C209.318 91.4536 211.652 91.8047 214.035 91.335C215.701 91.024 217.234 90.1065 218.325 88.7659Z"
                                        fill="#1C1C1B">
                                    </path>
                                    <path
                                        d="M195.784 65.1142C196.479 65.6754 196.702 66.4847 196.241 67.3566C195.354 69.386 194.463 71.4718 193.52 73.4971C191.823 77.2786 190.123 81.1164 188.483 84.9021C187.803 86.4372 187.175 88.0328 186.495 89.568C185.746 91.2679 184.896 92.7905 182.646 93.3596C180.687 93.0444 179.705 91.7823 179.34 89.8299C178.785 86.6176 178.054 83.5053 177.382 80.341C177.212 79.5921 177.045 78.7869 176.697 78.1382C176.204 77.139 175.07 77.1681 174.435 78.0837C174.241 78.4091 174.099 78.7949 173.962 79.1245C173.11 81.4397 172.203 83.7508 171.408 86.0702C171.132 86.7293 170.97 87.3967 170.755 88.0037C170.471 88.7754 170.191 89.4909 169.86 90.1458C169.127 91.6204 168.124 92.1689 166.72 92.0081C165.26 91.8431 164.357 91.04 163.95 89.6507C163.54 88.3178 163.129 86.9848 162.774 85.6561C160.898 78.8913 158.965 72.1224 157.089 65.3576C157.001 65.0114 156.918 64.6088 156.891 64.2104C156.839 62.6209 157.638 61.7741 159.223 61.7785C160.297 61.8016 161.371 61.8247 162.412 62.2983C163.184 62.5821 163.77 63.0786 164.054 63.8358C164.289 64.4762 164.525 65.1166 164.644 65.8049C165.284 68.6272 165.92 71.5058 166.555 74.3844C166.683 74.9601 166.862 75.5964 167.106 76.1241C167.498 76.946 168.741 76.9816 169.198 76.1661C169.526 75.5675 169.801 74.9084 170.02 74.2451C171.03 71.3187 172.036 68.4487 173.102 65.5265C173.816 63.5408 176.039 62.5732 178.025 63.2868C179.343 63.8377 180.061 64.8536 180.298 66.2303C180.79 68.7585 181.23 71.2261 181.722 73.7543C181.837 74.499 181.947 75.3 182.118 76.0488C182.201 76.4514 182.393 76.9187 182.589 77.3296C182.994 77.9825 183.951 78.0536 184.391 77.4633C184.771 76.9252 185.103 76.2703 185.374 75.6675C185.998 74.1282 186.505 72.6368 187.129 71.0975C187.692 69.6104 188.368 68.1316 188.936 66.5881C189.499 65.1009 190.515 64.3835 192.1 64.3879C192.837 64.3859 193.638 64.2754 194.366 64.3861C194.868 64.48 195.415 64.747 195.784 65.1142Z"
                                        fill="#1C1C1B">
                                    </path>
                                    <path
                                        d="M148.06 64.2168C152.465 67.2099 154.724 71.5583 154.781 76.9797C154.95 84.773 149.529 91.2674 141.792 92.6228C140.888 92.7922 139.985 92.7357 139.025 92.7922C130.836 92.9052 123.325 86.2413 123.382 77.0362C123.382 73.8172 124.229 70.7112 126.149 68.1134C127.956 65.5721 130.328 63.652 133.321 62.4661C138.573 60.4895 143.543 61.0543 148.06 64.2168ZM146.423 81.4411C147.891 78.6174 147.948 73.9866 145.067 70.8806C142.244 67.7746 138.178 67.2663 135.015 69.3558C131.796 71.4453 130.271 74.6643 130.78 78.5045C131.401 82.74 134.959 86.2978 139.138 85.9025C141.905 86.2413 145.237 83.7565 146.423 81.4411Z"
                                        fill="#1C1C1B">
                                    </path>
                                    <path
                                        d="M120.024 83.2706C120.271 86.6062 118.882 89.3861 117.325 92.144C116.887 92.884 116.553 93.6946 115.905 94.2932C113.369 96.6952 110.459 98.4786 106.829 98.8009C104.284 99.0944 101.75 98.8766 99.3812 97.8262C98.6825 97.5069 97.9912 97.1317 97.3632 96.7078C96.4213 96.0719 95.8833 95.8306 94.5268 96.6213C94.5922 97.4273 94.4336 98.2039 94.1557 99.0218C93.7365 100.049 93.7506 101.247 93.5407 102.416C93.4747 102.92 93.4574 103.487 93.3281 104.039C93.0816 105.488 92.3071 106.184 90.8705 106.281C90.4079 106.334 89.96 106.276 89.512 106.217C86.3202 105.799 85.8022 104.535 86.2026 101.911C87.1553 94.6314 88.052 87.3446 89.0534 80.1285C89.5124 77.0561 89.7962 74.0177 90.2552 70.9452C90.2919 70.6653 90.3358 70.3293 90.3725 70.0493C90.4924 68.6981 90.7876 67.3128 92.3168 66.9434C93.7973 66.5107 95.3798 66.6039 96.5918 67.7877C97.7551 68.9082 99.0016 68.9574 100.426 68.5173C101.444 68.138 102.511 67.8219 103.548 67.7298C106.969 67.2663 110.117 68.02 113.021 69.7669C116.141 71.5992 118.002 74.3488 119.287 77.5924C119.411 77.9504 119.415 78.3497 119.659 78.6663C120.583 79.8695 120.527 81.172 120.12 82.5426C120.034 82.7593 119.998 83.0392 120.024 83.2706ZM111.832 87.5521C112.368 85.6289 112.961 83.7131 112.609 81.6166C112.075 78.3003 109.315 74.5788 105.366 74.2898C100.361 73.8055 96.7338 77.1469 95.9502 81.8285C95.2912 85.5582 96.6947 88.7605 100.059 90.9094C101.273 91.6379 102.568 91.7505 103.842 92.031C105.171 92.3189 106.469 91.9762 107.587 91.2681C108.95 90.4214 110.266 89.5114 111.337 88.2848C111.542 88.0268 111.747 87.7688 111.832 87.5521Z"
                                        fill="#1C1C1B">
                                    </path>
                                    <path
                                        d="M82.5634 71.9312C82.8107 73.5852 83.0549 75.2956 82.9608 76.9872C82.7067 81.5544 82.4557 86.0653 82.2015 90.6326C82.189 90.8581 82.1764 91.0837 82.1639 91.3092C81.8849 93.2733 81.2302 93.859 79.3068 93.8651C78.5174 93.8212 77.7311 93.7209 76.9981 93.6801C75.814 93.6142 75.1123 93.0096 74.8493 91.6375C74.771 91.011 74.8619 90.3939 74.8965 89.7736C75.1098 85.9394 75.3231 82.1051 75.4832 78.2114C75.5585 76.8581 75.4678 75.439 75.2612 74.0701C74.8668 70.9939 72.1447 69.089 69.1155 69.6558C67.5178 69.9062 66.4965 70.9806 65.6381 72.1772C64.9645 73.1012 64.5634 74.2101 64.4976 75.3942C64.3752 77.5933 64.256 79.736 64.1368 81.8786C63.9924 84.4724 63.845 87.1225 63.7007 89.7163C63.6787 90.111 63.6567 90.5057 63.522 90.8941C63.2964 91.8996 62.4599 92.7015 61.4387 92.7578C60.4175 92.8141 59.2897 92.7514 58.2216 92.6354C56.9873 92.4536 56.3515 91.6829 56.3077 90.4361C56.2827 89.8691 56.311 89.3617 56.3423 88.7978C56.5588 84.9072 56.8348 80.9633 56.9417 77.01C57.0138 75.7131 56.9168 74.4068 56.7071 73.0943C56.1873 70.2373 54.073 68.5925 51.1346 68.5421C49.6654 68.517 48.5032 69.0745 47.5884 70.2679C46.7926 71.3548 46.2757 72.5138 46.0876 73.8608C45.9716 74.929 45.912 76.0004 45.796 77.0685C45.5451 80.5613 45.4101 84.004 45.2187 87.4436C45.1716 88.2894 45.065 89.1884 44.7956 89.9653C44.4415 91.2464 43.7335 91.7727 42.4898 91.76C41.5281 91.7631 40.626 91.7129 39.6737 91.5468C38.4395 91.365 37.8569 90.6538 37.7599 89.3475C37.785 88.8964 37.8101 88.4454 37.8352 87.9943C38.0422 84.2728 38.2462 80.6077 38.4532 76.8862C38.6509 73.3339 38.7922 69.7785 39.0462 66.2293C39.0839 65.5526 39.0651 64.8729 39.2155 64.2025C39.3942 63.0247 40.4061 62.1195 41.5965 62.0726C42.7869 62.0257 43.9052 62.2576 45.0109 62.715C46.2827 63.2383 47.5295 63.1945 48.8045 62.6433C52.57 61.0429 56.1567 61.6384 59.3016 64.0758C61.1998 65.5389 62.7724 65.7395 64.8807 64.4428C68.6901 62.053 72.6903 62.3321 76.6028 64.1901C79.8542 65.7284 81.9748 68.2785 82.5634 71.9312Z"
                                        fill="#1C1C1B">
                                    </path>
                                    <path
                                        d="M33.6281 75.7097C34.2729 77.6452 33.6202 79.0243 32.2422 80.2892C31.953 80.5338 31.6222 80.8467 31.1817 81.1862C31.5079 81.5719 31.6028 81.7232 31.6843 81.8196C34.0867 83.0954 33.8196 84.1483 33.0956 85.9516C31.6208 89.4484 29.3973 92.2555 25.7976 93.9442C22.5139 95.4979 19.1829 95.9007 15.6666 95.3025C11.9591 94.6345 9.02739 92.6156 6.67721 89.6417C5.16924 87.7417 4.11514 85.557 3.66466 83.2255C2.96226 79.6186 3.2461 76.0044 4.99367 72.6738C7.02018 68.5779 10.4198 66.0661 14.6749 64.6831C16.0201 64.2399 17.3771 64.0844 18.7875 64.1484C22.4165 64.2542 25.8066 65.29 28.5855 67.6366C29.7436 68.5756 30.7489 69.8423 31.5763 71.0941C32.5534 72.4839 33.1182 74.0901 33.6281 75.7097ZM11.0899 76.7131C10.9474 77.5614 11.4634 78.2496 12.325 78.447C12.7491 78.5183 13.2964 78.6177 13.6672 78.4695C15.5908 77.5369 17.7531 77.825 19.7168 77.0571C20.5948 76.8436 21.5544 76.7266 22.4057 76.4035C22.9826 76.147 23.6293 75.6992 24.098 75.2366C24.7047 74.6242 24.6826 73.8159 24.1117 73.141C23.2695 72.0671 22.1232 71.4159 20.8241 71.0924C17.4043 70.4126 13.9323 71.4309 11.7739 74.7452C11.4416 75.2909 11.2176 76.0428 11.0899 76.7131ZM25.2887 85.8733C26.4072 84.4972 27.6887 83.3139 29.1749 82.2552C28.9985 82.0075 28.8769 81.7465 28.7405 81.6634C28.4676 81.4973 28.1666 81.4542 27.8789 81.466C26.6865 81.5815 25.5623 81.7385 24.4381 81.8956C23.9857 81.9474 23.4785 82.0126 23.1211 82.2157C22.1867 82.6753 21.2405 82.8472 20.2127 82.9226C18.3069 83.2115 16.4278 83.6102 14.737 84.5442C13.5415 85.1254 13.3693 86.3296 14.3228 87.144C16.3395 88.746 18.6797 89.0489 21.0527 88.5302C22.7123 88.1849 24.2252 87.236 25.2887 85.8733Z"
                                        fill="#1C1C1B">
                                    </path>
                                    <path
                                        d="M373.731 23.1646C373.028 28.1412 372.324 33.1179 371.621 38.0945C371.565 38.486 371.518 38.8215 371.407 39.205C371.081 40.2996 370.371 40.8837 369.189 40.7736C368.118 40.6794 367.048 40.5851 366.002 40.3231C364.843 40.0453 364.315 39.3433 364.313 38.1453C364.328 37.2348 364.462 36.2842 364.589 35.3895C364.992 32.5377 365.387 29.7419 365.79 26.8901C365.948 25.7717 366.058 24.5896 366.216 23.4712C366.35 22.1213 366.188 20.8437 365.795 19.5904C364.736 16.1897 361.675 14.8445 358.443 16.3268C357.102 16.9358 356.217 17.9514 355.636 19.2381C355.047 20.5807 354.673 22.0108 354.468 23.4647C353.938 27.2111 353.409 30.9576 352.879 34.7041C352.84 34.9837 352.792 35.3192 352.753 35.5987C352.428 37.492 351.591 38.1721 349.73 38.0231C348.819 38.0085 347.932 37.8261 346.99 37.6359C345.887 37.366 345.319 36.5442 345.365 35.41C345.42 35.0186 345.476 34.6272 345.523 34.2917C346.068 30.4334 346.606 26.631 347.143 22.8286C347.641 19.3058 348.083 15.7751 348.637 12.2602C348.708 11.757 348.787 11.1978 348.866 10.6386C349.032 9.06503 350.325 8.39224 351.634 8.40627C352.601 8.4288 353.671 8.52306 354.503 9.09685C355.95 10.1569 357.499 10.0907 359.16 9.64103C359.926 9.46419 360.804 9.30316 361.611 9.24605C366.458 8.84753 369.896 11.1585 372.361 15.1002C372.922 15.9779 373.219 17.1036 373.476 18.1095C373.814 19.7542 373.968 21.4871 373.731 23.1646Z"
                                        fill="#1C1C1B">
                                    </path>
                                    <path
                                        d="M341.134 33.3192C341.303 34.2792 341.19 35.2958 341.247 36.3123C341.247 37.2159 340.964 38.0065 340.343 38.6277C340.061 38.9665 339.609 39.3054 339.214 39.3054C338.084 39.4183 336.898 39.5313 335.769 39.3054C334.639 39.0795 333.905 38.1194 333.905 36.9335C333.905 34.5616 333.679 32.1897 334.075 29.8179C334.131 29.4225 334.131 29.0837 334.075 28.6884C334.018 27.5589 333.849 26.373 333.849 25.2435C333.849 21.4598 333.849 17.6761 333.849 13.9489C333.849 13.3277 333.849 12.7065 333.962 12.0853C334.301 10.504 335.374 9.71339 336.672 9.76987C337.35 9.82634 338.084 9.76987 338.762 9.82634C340.117 10.0522 340.964 10.8993 341.134 12.2547C341.247 13.0453 341.247 13.8359 341.247 14.5701C341.247 19.2574 341.247 23.9446 341.247 28.6884C341.247 29.592 341.19 30.552 342.037 31.2297C341.473 32.0203 341.021 32.4721 341.134 33.3192ZM338.028 6.83326C334.301 7.05915 333.566 5.25201 333.905 2.14598C334.018 1.24241 335.148 0.225893 336.108 0.0564725C336.503 5.1368e-09 336.898 0 336.898 0C337.52 0 337.745 0 337.971 0C340.174 0.112945 341.19 1.18594 341.247 3.33192C341.247 5.30848 340.004 6.72031 338.028 6.83326Z"
                                        fill="#1C1C1B">
                                    </path>
                                    <path
                                        d="M311.798 31.2409C312.818 35.7753 310.343 41.0161 305.789 42.7226C301.082 44.564 295.458 43.453 292.393 38.9706C291.966 38.3452 291.691 37.5848 291.535 36.8651C291.27 35.7614 291.819 34.7743 292.867 34.5168C294.082 34.2364 295.313 34.0679 296.511 34.0749C297.254 34.0872 297.946 34.5624 298.623 34.9258C298.989 35.1036 299.282 35.5765 299.663 35.8663C300.49 36.4941 301.431 36.7072 302.479 36.4498C303.583 36.1846 304.226 35.4696 304.543 34.4571C304.764 33.5719 304.212 32.4506 303.28 31.8941C302.906 31.6603 302.484 31.4901 302.006 31.3276C300.531 30.9595 299.048 30.5356 297.572 30.1676C295.865 29.7743 294.352 29.1265 293 28.0005C292.682 27.7591 292.364 27.5176 292.206 27.1972C291.147 25.2902 290.017 23.279 290.27 20.9643C290.488 19.2245 290.762 17.477 292.048 16.0469C292.643 15.3955 293.324 14.9602 293.934 14.4207C294.745 13.6826 295.948 14.1449 296.624 13.2543C297.26 12.4833 298.321 12.7371 298.921 12.5409C303.277 11.8875 306.254 13.6459 308.415 16.941C309.428 18.5123 308.781 20.026 306.95 20.3907C306.566 20.5003 306.174 20.5539 305.782 20.6075C304.391 20.855 303.018 20.815 301.817 19.9535C301.061 19.4299 300.247 19.3134 299.359 19.4919C298.536 19.7187 298.037 20.2429 297.865 21.0645C297.741 21.8225 298.064 22.5192 298.685 22.8903C299.593 23.2789 300.557 23.6599 301.506 23.929C303.045 24.3453 304.681 24.6344 306.171 25.1143C309.209 26.0664 311.082 28.09 311.798 31.2409Z"
                                        fill="#1C1C1B">
                                    </path>
                                    <path
                                        d="M287.201 13.9417C287.111 15.2386 286.965 16.5293 286.812 17.876C286.265 22.7018 285.718 27.5276 285.171 32.3535C285.019 33.7002 284.86 35.103 284.651 36.4434C284.6 36.8923 284.543 37.3974 284.436 37.8399C284.19 39.0056 283.677 40.0273 282.254 40.548C280.689 40.3139 279.18 40.0861 277.785 39.3596C276.707 38.8396 275.497 38.9867 274.423 39.4334C272.526 40.1277 270.655 40.0862 268.697 39.8076C263.766 39.1919 259.06 35.0781 259.049 28.6545C259.08 22.8609 260.128 17.1257 260.664 11.3893C260.856 9.19451 262.442 8.23755 264.337 8.56597C264.78 8.67296 265.235 8.66771 265.678 8.77469C267.236 9.06496 268.089 10.0709 268.016 11.7109C267.959 12.2159 267.896 12.7771 267.832 13.3382C267.533 15.9756 267.284 18.6754 266.923 21.3625C266.569 23.4822 266.608 25.6463 266.703 27.8168C266.73 29.5817 267.35 31.1297 268.814 32.2617C271.422 34.3192 275.384 33.4609 276.912 30.5082C277.92 28.6332 278.38 26.5824 278.615 24.5062C278.997 21.1394 279.378 17.7725 279.76 14.4057C279.83 13.7884 279.9 13.1712 280.026 12.5603C280.315 11.5132 281.258 10.7107 282.4 10.6696C283.248 10.7088 284.096 10.7481 284.925 10.9557C286.477 11.3021 287.273 12.3016 287.201 13.9417Z"
                                        fill="#1C1C1B">
                                    </path>
                                    <path
                                        d="M235.764 19.3065C236.531 24.2738 237.297 29.2411 238.064 34.2084C238.124 34.599 238.176 34.9339 238.181 35.3332C238.186 36.4753 237.675 37.2398 236.512 37.4766C235.46 37.6961 234.408 37.9156 233.33 37.9676C232.141 38.0369 231.432 37.5178 231.084 36.3715C230.834 35.4958 230.688 34.547 230.55 33.654C230.111 30.8076 229.68 28.0169 229.241 25.1705C229.068 24.0543 228.832 22.8908 228.659 21.7746C228.397 20.4437 227.872 19.2675 227.133 18.1816C225.135 15.233 221.816 14.831 219.151 17.1853C218.044 18.1562 217.49 19.3844 217.307 20.7842C217.131 22.2398 217.188 23.7168 217.412 25.1679C217.989 28.9073 218.566 32.6467 219.143 36.3862C219.187 36.6652 219.238 37.0001 219.281 37.2792C219.518 39.1854 218.913 40.0788 217.089 40.4747C216.213 40.7242 215.312 40.8062 214.354 40.8968C213.221 40.9575 212.439 40.3353 212.155 39.2363C212.095 38.8456 212.034 38.455 211.983 38.1201C211.388 34.269 210.802 30.4738 210.217 26.6786C209.674 23.1624 209.075 19.6549 208.588 16.1301C208.511 15.6278 208.425 15.0697 208.338 14.5115C208.041 12.9574 209.084 11.9393 210.342 11.5737C211.274 11.3156 212.325 11.0961 213.287 11.4048C214.979 12.0007 216.443 11.4891 217.902 10.5781C218.585 10.187 219.379 9.77873 220.135 9.49067C224.659 7.70655 228.618 8.92393 232.119 11.9835C232.91 12.6615 233.52 13.653 234.057 14.5415C234.856 16.0181 235.505 17.6321 235.764 19.3065Z"
                                        fill="#1C1C1B">
                                    </path>
                                    <path
                                        d="M204.032 33.3192C204.201 34.2792 204.088 35.2958 204.145 36.3123C204.145 37.2159 203.862 38.0065 203.241 38.6277C202.959 38.9665 202.507 39.3054 202.112 39.3054C200.982 39.4183 199.796 39.5313 198.667 39.3054C197.537 39.0795 196.803 38.1194 196.803 36.9335C196.803 34.5616 196.577 32.1897 196.973 29.8179C197.029 29.4225 197.029 29.0837 196.973 28.6884C196.916 27.5589 196.747 26.373 196.747 25.2435C196.747 21.4598 196.747 17.6761 196.747 13.9489C196.747 13.3277 196.747 12.7065 196.86 12.0853C197.199 10.504 198.272 9.71339 199.57 9.76987C200.248 9.82634 200.982 9.76987 201.66 9.82634C203.015 10.0522 203.862 10.8993 204.032 12.2547C204.145 13.0453 204.145 13.8359 204.145 14.5701C204.145 19.2574 204.145 23.9446 204.145 28.6884C204.145 29.592 204.088 30.552 204.935 31.2297C204.371 32.0203 203.919 32.4721 204.032 33.3192ZM200.926 6.83326C197.199 7.05915 196.464 5.25201 196.803 2.14598C196.916 1.24241 198.046 0.225893 199.006 0.0564725C199.401 5.1368e-09 199.796 0 199.796 0C200.417 0 200.643 0 200.869 0C203.072 0.112945 204.088 1.18594 204.145 3.33192C204.145 5.30848 202.902 6.72031 200.926 6.83326Z"
                                        fill="#1C1C1B">
                                    </path>
                                    <path
                                        d="M185.604 11.5722C190.009 14.5653 192.268 18.9138 192.325 24.3352C192.494 32.1285 187.073 38.6229 179.336 39.9783C178.432 40.1477 177.529 40.0912 176.569 40.1477C168.38 40.2606 160.869 33.5968 160.926 24.3917C160.926 21.1727 161.773 18.0667 163.693 15.4689C165.5 12.9276 167.872 11.0075 170.865 9.82157C176.117 7.84501 181.087 8.40974 185.604 11.5722ZM183.967 28.7966C185.435 25.9729 185.491 21.3421 182.611 18.2361C179.788 15.1301 175.722 14.6218 172.559 16.7113C169.34 18.8008 167.815 22.0198 168.324 25.86C168.945 30.0955 172.503 33.6533 176.682 33.258C179.449 33.5968 182.781 31.112 183.967 28.7966Z"
                                        fill="#1C1C1B">
                                    </path>
                                    <path
                                        d="M155.065 34.7591C154.371 38.3134 151.904 41.0659 148.589 42.4544C146.848 43.1377 145.146 43.0857 143.522 42.873C143.074 42.8143 142.57 42.7484 142.178 42.697C141.178 42.509 140.205 41.2425 140.225 40.2199C140.279 39.3726 140.396 38.4767 140.555 37.7001C140.799 36.7069 141.398 36.0449 142.394 35.8336C142.744 35.7656 143.095 35.6976 143.438 35.6856C143.726 35.6663 144.013 35.647 144.308 35.5716C145.184 35.4017 146.075 35.1197 146.821 34.6477C148.009 33.8351 148.302 32.9052 148.254 31.532C148.201 31.0694 148.196 30.6701 148.247 30.2781C149.061 24.0627 149.868 17.9032 150.667 11.7997L151.305 6.92816L151.342 6.64818C151.371 6.4242 151.408 6.14423 151.437 5.92025C151.725 4.59103 152.682 3.8051 153.922 3.91043C154.937 3.98643 155.937 4.17441 156.938 4.3624C158.106 4.57239 158.885 5.58564 158.78 6.82486C158.699 7.44081 158.611 8.11275 158.53 8.7287L158.457 9.28865C158.061 12.3124 157.665 15.3361 157.269 18.3599L156.8 21.9435L156.492 24.2953C156.133 27.0391 155.803 29.5589 155.443 32.3026C155.407 32.5826 155.37 32.8626 155.326 33.1986C155.26 33.7025 155.131 34.2551 155.065 34.7591Z"
                                        fill="#1C1C1B">
                                    </path>
                                </svg>
                            </div>
                            <div
                                class="running-numbers hidden md:flex flex-wrap md:flex-nowrap lg:gap-[20px] justify-center">
                                <div
                                    class="number relative flex justify-center items-center rotate-[-3deg] flex-[50%] max-w-[180px] md:flex-[unset] md:max-w-[unset]">
                                    <img alt="Sun" decoding="async" src="static/assets/images/number-shape-sun.svg" />
                                    <div class="text absolute flex flex-col text-center text-white">
                                        <p
                                            class="font-bnCringe font-bold text-[16px] leading-[20px] md:text-[20px] md:leading-[25px] md:tracking-[-0.3px] lg:text-[22px] lg:leading-[26px] lg:tracking-[-0.33px] text-lbd-light-green">
                                            Over
                                        </p>
                                        <h2 class="font-bnCringe font-bold text-[32px] leading-[38px] tracking-[-0.32px] md:text-[40px] md:leading-[48px] md:tracking-[-0.4px] lg:text-[60px] lg:leading-[72px] lg:tracking-[-0.6px]"
                                            data-start="2500" data-total="3000">
                                            100
                                        </h2>
                                        <p
                                            class="font-bnCringe font-medium text-[20px] leading-[25px] tracking-[-0.2px] md:text-[26px] md:leading-[30px] md:tracking-[-0.26px] lg:text-[28px] lg:leading-[32px] lg:tracking-[-0.42px]">
                                            Students
                                        </p>
                                    </div>
                                </div>
                                <div
                                    class="number relative flex justify-center items-center flex-[50%] max-w-[180px] md:max-w-[unset] md:flex-[unset]">
                                    <img alt="Polygon" decoding="async"
                                        src="static/assets/images/number-shape-polygon.svg" />
                                    <div class="text absolute rotate-[-5deg] flex flex-col text-center text-white">
                                        <p
                                            class="font-bnCringe font-bold text-[16px] leading-[20px] md:text-[20px] md:leading-[25px] md:tracking-[-0.3px] lg:text-[22px] lg:leading-[26px] lg:tracking-[-0.33px] text-lbd-light-blue">
                                            Over
                                        </p>
                                        <h2 class="font-bnCringe font-bold text-[32px] leading-[38px] tracking-[-0.32px] md:text-[40px] md:leading-[48px] md:tracking-[-0.4px] lg:text-[60px] lg:leading-[72px] lg:tracking-[-0.6px]"
                                            data-start="800" data-total="1000">
                                            20
                                        </h2>
                                        <p
                                            class="font-bnCringe font-medium text-[20px] leading-[25px] tracking-[-0.2px] md:text-[26px] md:leading-[30px] md:tracking-[-0.26px] lg:text-[28px] lg:leading-[32px] lg:tracking-[-0.42px]">
                                            Teachers
                                        </p>
                                    </div>
                                </div>
                                <div
                                    class="number relative flex-[50%] md:flex-[unset] max-w-[180px] md:mt-0 md:max-w-[unset]">
                                    <img alt="Flower" decoding="async"
                                        src="static/assets/images/number-shape-flower.svg" />
                                    <div
                                        class="text absolute top-[50%] md:top-[47%] left-[50%] translate-x-[-50%] translate-y-[-50%] rotate-[7deg] md:rotate-[3deg] flex flex-col text-center text-white">
                                        <p
                                            class="font-bnCringe font-bold text-[16px] leading-[20px] md:text-[20px] md:leading-[25px] md:tracking-[-0.3px] lg:text-[22px] lg:leading-[26px] lg:tracking-[-0.33px] text-lbd-pink">
                                            Over
                                        </p>
                                        <h2 class="font-bnCringe font-bold text-[32px] leading-[38px] tracking-[-0.32px] md:text-[40px] md:leading-[48px] md:tracking-[-0.4px] lg:text-[60px] lg:leading-[72px] lg:tracking-[-0.6px]"
                                            data-start="0" data-total="100">
                                            20
                                        </h2>
                                        <p
                                            class="font-bnCringe font-medium text-[20px] leading-[25px] tracking-[-0.2px] md:text-[26px] md:leading-[30px] md:tracking-[-0.26px] lg:text-[28px] lg:leading-[32px] lg:tracking-[-0.42px]">
                                            Courses
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="running-numbers block md:hidden relative flex flex-wrap max-w-[329px] mx-auto mt-[40px] justify-center">
                                <div
                                    class="number relative flex justify-center items-center rotate-[-3deg] flex-[50%] md:flex-[unset] md:max-w-[unset]">
                                    <img alt="Sun" decoding="async"
                                        src="static/assets/images/number-shape-sun-mobile.svg" />
                                    <div class="text absolute flex flex-col text-center text-white">
                                        <p
                                            class="font-bnCringe font-bold text-[16px] leading-[20px] md:text-[20px] md:leading-[25px] md:tracking-[-0.3px] lg:text-[22px] lg:leading-[26px] lg:tracking-[-0.33px] text-lbd-light-green">
                                            Over
                                        </p>
                                        <h2 class="font-bnCringe font-bold text-[32px] leading-[38px] tracking-[-0.32px] md:text-[40px] md:leading-[48px] md:tracking-[-0.4px] lg:text-[60px] lg:leading-[72px] lg:tracking-[-0.6px]"
                                            data-start="2500" data-total="3000">
                                            100
                                        </h2>
                                        <p
                                            class="font-bnCringe font-medium text-[20px] leading-[25px] tracking-[-0.2px] md:text-[26px] md:leading-[30px] md:tracking-[-0.26px] lg:text-[28px] lg:leading-[32px] lg:tracking-[-0.42px]">
                                            Students
                                        </p>
                                    </div>
                                </div>
                                <div
                                    class="number relative flex justify-center items-center flex-[50%] ml-[-40px] md:max-w-[unset] md:flex-[unset]">
                                    <img alt="Polygon" decoding="async"
                                        src="static/assets/images/number-shape-polygon-mobile.svg" />
                                    <div class="text absolute rotate-[-5deg] flex flex-col text-center text-white">
                                        <p
                                            class="font-bnCringe font-bold text-[16px] leading-[20px] md:text-[20px] md:leading-[25px] md:tracking-[-0.3px] lg:text-[22px] lg:leading-[26px] lg:tracking-[-0.33px] text-lbd-light-blue">
                                            Over
                                        </p>
                                        <h2 class="font-bnCringe font-bold text-[32px] leading-[38px] tracking-[-0.32px] md:text-[40px] md:leading-[48px] md:tracking-[-0.4px] lg:text-[60px] lg:leading-[72px] lg:tracking-[-0.6px]"
                                            data-start="800" data-total="1000">
                                            20
                                        </h2>
                                        <p
                                            class="font-bnCringe font-medium text-[20px] leading-[25px] tracking-[-0.2px] md:text-[26px] md:leading-[30px] md:tracking-[-0.26px] lg:text-[28px] lg:leading-[32px] lg:tracking-[-0.42px]">
                                            Teachers
                                        </p>
                                    </div>
                                </div>
                                <div
                                    class="number relative flex-[50%] md:flex-[unset] max-w-[180px] mt-[-50px] md:mt-0 md:max-w-[unset]">
                                    <img alt="Flower" decoding="async"
                                        src="static/assets/images/number-shape-flower-mobile.svg" />
                                    <div
                                        class="text absolute top-[50%] left-[47%] md:top-[47%] left-[50%] translate-x-[-50%] translate-y-[-50%] rotate-[15deg] md:rotate-[3deg] flex flex-col text-center text-white">
                                        <p
                                            class="font-bnCringe font-bold text-[16px] leading-[20px] md:text-[20px] md:leading-[25px] md:tracking-[-0.3px] lg:text-[22px] lg:leading-[26px] lg:tracking-[-0.33px] text-lbd-pink">
                                            Over
                                        </p>
                                        <h2 class="font-bnCringe font-bold text-[32px] leading-[38px] tracking-[-0.32px] md:text-[40px] md:leading-[48px] md:tracking-[-0.4px] lg:text-[60px] lg:leading-[72px] lg:tracking-[-0.6px]"
                                            data-start="0" data-total="100">
                                            20
                                        </h2>
                                        <p
                                            class="font-bnCringe font-medium text-[20px] leading-[25px] tracking-[-0.2px] md:text-[26px] md:leading-[30px] md:tracking-[-0.26px] lg:text-[28px] lg:leading-[32px] lg:tracking-[-0.42px]">
                                            Courses
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <p
                                class="font-bnCringe font-bold text-[22px] leading-[26px] tracking-[-0.22px] px-[16px] md:text-[26px] md:leading-[30x] md:tracking-[-0.26px] lg:text-[28px] lg:leading-[32px] lg:tracking-[-0.32px] text-lbd-black text-center mt-[40px] empty:hidden">
                                Featured Courses
                            </p>
                            <div class="testimonials-wrapper">
                                <div class="testimonials-carousel hidden lg:block mt-[60px] overflow-visible">
                                    <div class="swiper-wrapper overflow-visible">
                                        <div class="swiper-slide testimonial-slide">
                                            <div
                                                class="gl-testimonial-card rotate-[2deg] hover:rotate-[0deg] hover:translate-y-[-10px] transition-all ease-in-out bg-white p-[20px] rounded-[20px] h-full flex flex-col justify-between">
                                                <img src="https://img-c.udemycdn.com/course/480x270/1565838_e54e_18.jpg"
                                                    style="border-radius: 15px;" />
                                                <p class="quote font-helvetica font-medium text-[20px] leading-[28px]">
                                                    The Complete Full-Stack Web Development Bootcamp
                                                </p>
                                                <div class="details flex gap-[10px]">
                                                    <img alt="icon" decoding="async"
                                                        src="static/assets/images/educator.svg" />
                                                    <div class="details flex flex-col gap-[5px]">
                                                        <p
                                                            class="font-helvetica font-medium text-[14px] leading-[22px] text-lbd-black capitalize">
                                                            Computer Science
                                                        </p>
                                                        <p
                                                            class="font-helvetica font-normal text-[10px] leading-[14px] uppercase">
                                                            KaleidoLearn
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide testimonial-slide">
                                            <div
                                                class="gl-testimonial-card rotate-[-2deg] hover:rotate-[0deg] hover:translate-y-[-10px] transition-all ease-in-out bg-white p-[20px] rounded-[20px] h-full flex flex-col justify-between">
                                                <img src="https://img-c.udemycdn.com/course/480x270/1355610_375a_5.jpg"
                                                    style="border-radius: 15px;" />
                                                <p class="quote font-helvetica font-medium text-[20px] leading-[28px]">
                                                    Communication Fundamentals: How To Communicate Better
                                                </p>
                                                <div class="details flex gap-[10px]">
                                                    <img alt="icon" decoding="async"
                                                        src="static/assets/images/parent.svg" />
                                                    <div class="details flex flex-col gap-[5px]">
                                                        <p
                                                            class="font-helvetica font-medium text-[14px] leading-[22px] text-lbd-black capitalize">
                                                            Communication
                                                        </p>
                                                        <p
                                                            class="font-helvetica font-normal text-[10px] leading-[14px] uppercase">
                                                            KaleidoLearn
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide testimonial-slide">
                                            <div
                                                class="gl-testimonial-card rotate-[2deg] hover:rotate-[0deg] hover:translate-y-[-10px] transition-all ease-in-out bg-white p-[20px] rounded-[20px] h-full flex flex-col justify-between">
                                                <img src="https://img-c.udemycdn.com/course/480x270/3793836_55d8_6.jpg"
                                                    style="border-radius: 15px;" />
                                                <p class="quote font-helvetica font-medium text-[20px] leading-[28px]">
                                                    Applied Emotional Intelligence: The Human Side of Leadership
                                                </p>
                                                <div class="details flex gap-[10px]">
                                                    <img alt="icon" decoding="async"
                                                        src="static/assets/images/partner.svg" />
                                                    <div class="details flex flex-col gap-[5px]">
                                                        <p
                                                            class="font-helvetica font-medium text-[14px] leading-[22px] text-lbd-black capitalize">
                                                            Business Management
                                                        </p>
                                                        <p
                                                            class="font-helvetica font-normal text-[10px] leading-[14px] uppercase">
                                                            KaleidoLearn
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide testimonial-slide">
                                            <div
                                                class="gl-testimonial-card rotate-[-2deg] hover:rotate-[0deg] hover:translate-y-[-10px] transition-all ease-in-out bg-white p-[20px] rounded-[20px] h-full flex flex-col justify-between">
                                                <img src="https://img-c.udemycdn.com/course/480x270/2147672_ee55_3.jpg"
                                                    style="border-radius: 15px;" />
                                                <p class="quote font-helvetica font-medium text-[20px] leading-[28px]">
                                                    Communication Skills: Become Clear, Concise, Confident
                                                </p>
                                                <div class="details flex gap-[10px]">
                                                    <img alt="icon" decoding="async"
                                                        src="static/assets/images/parent.svg" />
                                                    <div class="details flex flex-col gap-[5px]">
                                                        <p
                                                            class="font-helvetica font-medium text-[14px] leading-[22px] text-lbd-black capitalize">
                                                            Communication
                                                        </p>
                                                        <p
                                                            class="font-helvetica font-normal text-[10px] leading-[14px] uppercase">
                                                            KaleidoLearn
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide testimonial-slide">
                                            <div
                                                class="gl-testimonial-card rotate-[-2deg] hover:rotate-[0deg] hover:translate-y-[-10px] transition-all ease-in-out bg-white p-[20px] rounded-[20px] h-full flex flex-col justify-between">
                                                <img src="https://img-c.udemycdn.com/course/480x270/513244_b831_4.jpg"
                                                    style="border-radius: 15px;" />
                                                <p class="quote font-helvetica font-medium text-[20px] leading-[28px]">
                                                    The Data Science Course: Complete Data Science Bootcamp 2025
                                                </p>
                                                <div class="details flex gap-[10px]">
                                                    <img alt="icon" decoding="async"
                                                        src="static/assets/images/educator.svg" />
                                                    <div class="details flex flex-col gap-[5px]">
                                                        <p
                                                            class="font-helvetica font-medium text-[14px] leading-[22px] text-lbd-black capitalize">
                                                            Computer Science
                                                        </p>
                                                        <p
                                                            class="font-helvetica font-normal text-[10px] leading-[14px] uppercase">
                                                            KaleidoLearn
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide testimonial-slide">
                                            <div
                                                class="gl-testimonial-card rotate-[2deg] hover:rotate-[0deg] hover:translate-y-[-10px] transition-all ease-in-out bg-white p-[20px] rounded-[20px] h-full flex flex-col justify-between">
                                                <img src="https://img-c.udemycdn.com/course/480x270/2776760_f176_10.jpg"
                                                    style="border-radius: 15px;" />
                                                <p class="quote font-helvetica font-medium text-[20px] leading-[28px]">
                                                    100 Days of Code: The Complete Python Pro Bootcamp
                                                </p>
                                                <div class="details flex gap-[10px]">
                                                    <img alt="icon" decoding="async"
                                                        src="static/assets/images/educator.svg" />
                                                    <div class="details flex flex-col gap-[5px]">
                                                        <p
                                                            class="font-helvetica font-medium text-[14px] leading-[22px] text-lbd-black capitalize">
                                                            Computer Science
                                                        </p>
                                                        <p
                                                            class="font-helvetica font-normal text-[10px] leading-[14px] uppercase">
                                                            KaleidoLearn
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide testimonial-slide">
                                            <div
                                                class="gl-testimonial-card rotate-[-2deg] hover:rotate-[0deg] hover:translate-y-[-10px] transition-all ease-in-out bg-white p-[20px] rounded-[20px] h-full flex flex-col justify-between">
                                                <img src="https://img-c.udemycdn.com/course/480x270/793796_0e89_4.jpg"
                                                    style="border-radius: 15px;" />
                                                <p class="quote font-helvetica font-medium text-[20px] leading-[28px]">
                                                    Microsoft Excel - Excel from Beginner to Advanced
                                                </p>
                                                <div class="details flex gap-[10px]">
                                                    <img alt="icon" decoding="async"
                                                        src="static/assets/images/student.svg" />
                                                    <div class="details flex flex-col gap-[5px]">
                                                        <p
                                                            class="font-helvetica font-medium text-[14px] leading-[22px] text-lbd-black capitalize">
                                                            Productivity
                                                        </p>
                                                        <p
                                                            class="font-helvetica font-normal text-[10px] leading-[14px] uppercase">
                                                            KaleidoLearn
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div
                        class="gl-b-two-column-image-cta from-0 relative z-[2] [&amp;_+.gl-b-cta-section]:z-[2] bg-gradient-to-b from-lbd-yellow-bright to-lbd-yellow">
                        <img alt="Gear"
                            class="gear-clip absolute top-0 hidden w-full translate-y-[-15vw] scale-[1] md:block md:translate-y-[-20vw]"
                            decoding="async" src="static/assets/images/gear.svg"
                            style="filter: brightness(0) invert(1);" />
                        <div class="content relative mt-0 bg-lbd-yellow md:mt-[-120px] md:bg-transparent"
                            style="filter: brightness(0) invert(1);">
                            <img alt="Ellipse" class="w-full bg-white" decoding="async"
                                src="static/assets/images/ellipse-bottom.svg" />
                        </div>
                    </div>
                    <div class="gl-b-cta-section relative transform bg-white !transition-[border-radius]">
                        <div class="gl-b-cta-section newsletter py-[60px] md:py-[80px] lg:py-[100px]">
                            <div class="content mx-auto px-[20px] lg:max-w-[925px]" style="margin-top: -350px;">
                                <img alt="Contact" class="gl-animated mx-auto block" decoding="async"
                                    src="static/assets/images/contact.svg" />
                                <p
                                    class="gl-animated mt-[24px] text-center font-helvetica text-[14px] font-medium uppercase leading-[20px] tracking-[-0.14px] text-lbd-blue empty:hidden md:text-[16px] md:tracking-[0.16px]">
                                    Be one of our changemakers
                                </p>
                                <h2
                                    class="gl-animated px-[20px] md:px-0 mt-[12px] text-center font-bnCringe text-[26px] font-bold leading-[-0.26px] leading-[30px] text-lbd-black empty:hidden md:text-[32px] md:leading-[-0.32px] md:leading-[38px] lg:text-[42px] lg:leading-[50px] lg:tracking-[-0.84px]">
                                    Create Account
                                </h2>
                                <div class="content mx-auto mt-[24px] md:mt-[40px] lg:max-w-[690px]">
                                    <div class="content [&amp;_input:focus]:ring-0 [&amp;_select:focus]:ring-0 [&amp;_textarea]:ring-0">
                                        <div class="wpcf7 no-js" data-wpcf7-id="91" dir="ltr" id="wpcf7-f91-p982-o1"
                                            lang="en-US">
                                            <div class="screen-reader-response">
                                                <p aria-atomic="true" aria-live="polite" role="status">
                                                </p>
                                                <ul>
                                                </ul>
                                            </div>
                                            <form action="{{ route('postUserInfo') }}" aria-label="Contact form"
                                                class="wpcf7-form init" data-status="init" method="POST"
                                                novalidate="novalidate">
                                                {{ csrf_field() }}
                                                <div style="display: none;">
                                                    <input name="_wpcf7" type="hidden" value="91" />
                                                    <input name="_wpcf7_version" type="hidden" value="6.0.6" />
                                                    <input name="_wpcf7_locale" type="hidden" value="en_US" />
                                                    <input name="_wpcf7_unit_tag" type="hidden"
                                                        value="wpcf7-f91-p982-o1" />
                                                    <input name="_wpcf7_container_post" type="hidden" value="982" />
                                                    <input name="_wpcf7_posted_data_hash" type="hidden" value="" />
                                                </div>
                                                <div class="input-container">
                                                    <div class="input-wrapper">
                                                        <span class="wpcf7-form-control-wrap" data-name="email">
                                                            <input aria-invalid="false" aria-required="true"
                                                                class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email"
                                                                maxlength="400" name="name" placeholder="Name*"
                                                                size="40" type="text" value="" required=""/>
                                                        </span>
                                                        <label>
                                                            Name*
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="input-container">
                                                    <div class="input-wrapper">
                                                        <span class="wpcf7-form-control-wrap" data-name="email">
                                                            <input aria-invalid="false" aria-required="true"
                                                                class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email"
                                                                maxlength="400" name="email" placeholder="Email*"
                                                                size="40" type="email" value="" required=""/>
                                                        </span>
                                                        <label>
                                                            Email*
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="input-container">
                                                    <div class="input-wrapper">
                                                        <span data-name="email">
                                                            <input aria-invalid="false" aria-required="true"
                                                                class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email"
                                                                maxlength="400" name="password" required="" placeholder="Password*"
                                                                size="40" type="password" value="" />
                                                        </span>
                                                        <label>
                                                            Password*
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="input-container">
                                                    <div class="input-wrapper">
                                                        <span class="wpcf7-form-control-wrap" data-name="email">
                                                            <input aria-invalid="false" aria-required="true"
                                                                class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email"
                                                                maxlength="400" name="password_confirmation" required="" placeholder="Confirm Password*"
                                                                size="40" type="password" value="" />
                                                        </span>
                                                        <label>
                                                            Confirm Password*
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="input-container">
                                                    <div class="input-wrapper">
                                                        <span class="wpcf7-form-control-wrap">
                                                            <select aria-invalid="false"
                                                                class="wpcf7-form-control wpcf7-select"
                                                                name="user_type">
                                                                <option value="" disabled selected>I am a</option>
                                                                <option value="{{ \App\Libraries\Enumerations\UserTypes::$STUDENT }}">Student</option>
                                                                <option value="{{ \App\Libraries\Enumerations\UserTypes::$TEACHER }}">Teacher</option>
                                                            </select>
                                                        </span>
                                                    </div>
                                                </div>
                                                <button type="submit"
                                                    class="gl-b-submit bg-lbd-black rounded-[112px] pt-[12px] pb-[12px] px-[16px] md:pl-[24px] md:pr-[20px] flex items-center gap-[8px] mt-[40px] w-fit mx-auto md:min-w-[142px] group/cta">
                                                    <div class="text-container relative overflow-hidden"
                                                        style="margin-top: -4px">
                                                        <p
                                                            class="font-helvetica font-medium leading-[1] text-[16px] md:text-[18px] text-white pt-[4px] group-hover/cta:translate-x-[150%] transition-all duration-[0.3s] ease-in-out">
                                                            Register
                                                        </p>
                                                        <p
                                                            class="font-helvetica font-medium leading-[1] text-[16px] md:text-[18px] text-white pt-[4px] absolute top-0 translate-x-[-150%] group-hover/cta:translate-x-0 transition-all duration-[0.3s] ease-in-out">
                                                            Register
                                                        </p>
                                                    </div>
                                                    <div
                                                        class="image-container flex justify-center items-center relative">
                                                        <span class="aspect-square w-[24px] md:w-[30px]">
                                                        </span>
                                                        <span class="aspect-square absolute w-[13px] md:w-[16px]">
                                                        </span>
                                                    </div>
                                                </button>
                                                <div aria-hidden="true" class="wpcf7-response-output">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </article>
        </main>

        <footer class="site-footer sticky bottom-0 z-[1] mt-[-35px] flex bg-lbd-pink md:mt-[-50px]" id="colophon">
            <div class="lottie-wrapper relative mx-auto hidden w-full lg:block">
                <div class="h-full w-full" data-file="static/assets/animations/Footer.json" id="lottie-footer">
                </div>
            </div>
            <div class="lottie-wrapper relative mx-auto hidden w-full md:block lg:hidden">
                <div class="h-full w-full" data-file="static/assets/animations/Footer-Tablet.json"
                    id="lottie-footer-tablet">
                </div>
            </div>
            <div
                class="footer-bar left-0 flex w-full flex-col items-start justify-between px-[16px] pb-[16px] pt-[66px] md:absolute md:bottom-[16px] md:flex-row md:items-end md:px-[24px] md:py-0">
                <div class="left-section md:pr-[92px] lg:w-[803px] lg:pr-0">
                    <div class="logo-container mb-[12px] flex gap-[24px] md:mb-[15px]">
                        <img alt="Footer Logos" class="max-w-[85%] md:max-w-[80%] lg:max-w-[unset]" decoding="async"
                            height="36" loading="lazy" src="static/assets/images/Group-3.svg" width="334" />
                    </div>
                    <p class="font-helvetica text-[10px] font-normal leading-[14px] lg:w-[unset]">
                        KaleidoLearn is an e-learning platform developed to nurture the next generation of changemakers
                        through creativity, design thinking, and digital learning. This project serves as the final
                        requirement for the Web Development subject under the Department of Computer Science, College of
                        Information and Computer Studies. It was proudly submitted by Group 3 of BSCS 3-1N for the
                        Academic Year 2024-2025.
                    </p>
                </div>
                <div class="right-section pt-[24px] lg:pl-[92px]">
                    <div class="social-links mb-[24px] flex justify-start gap-[8px] md:justify-end">
                        <a href="https://www.linkedin.com/in/jedidiahvillegas/" target="_blank">
                            <div
                                class="icon-container linear flex h-[32px] w-[32px] rounded-[112px] bg-lbd-blue p-[8px] transition-all hover:bg-lbd-black md:h-[40px] md:w-[40px] md:p-[10px]">
                                <img alt="linkedin icon" class="w-full" decoding="async" height="20" loading="lazy"
                                    src="static/assets/images/linkedin.svg" width="21" />
                            </div>
                        </a>
                        <a href="https://www.facebook.com/jeahvill/" target="_blank">
                            <div
                                class="icon-container linear flex h-[32px] w-[32px] rounded-[112px] bg-lbd-blue p-[8px] transition-all hover:bg-lbd-black md:h-[40px] md:w-[40px] md:p-[10px]">
                                <img alt="facebook logo" class="w-full" decoding="async" height="20" loading="lazy"
                                    src="static/assets/images/Social-icon.svg" width="21" />
                            </div>
                        </a>
                        <a href="https://www.instagram.com/jeayuun" target="_blank">
                            <div
                                class="icon-container linear flex h-[32px] w-[32px] rounded-[112px] bg-lbd-blue p-[8px] transition-all hover:bg-lbd-black md:h-[40px] md:w-[40px] md:p-[10px]">
                                <img alt="instagram" class="w-full" decoding="async" height="20" loading="lazy"
                                    src="static/assets/images/Social-icon-1.svg" width="21" />
                            </div>
                        </a>
                        <a href="https://www.youtube.com/@jeayuuun" target="_blank">
                            <div
                                class="icon-container linear flex h-[32px] w-[32px] rounded-[112px] bg-lbd-blue p-[8px] transition-all hover:bg-lbd-black md:h-[40px] md:w-[40px] md:p-[10px]">
                                <img alt="Youtube Logo" class="w-full" decoding="async" height="20" loading="lazy"
                                    src="static/assets/images/Social-icon-2.svg" width="21" />
                            </div>
                        </a>
                    </div>
                    <div class="footer-links">
                        <div class="menu-footer-menu-container">
                            <ul class="flex flex-row md:flex-col lg:flex-row gap-[16px] md:gap-[10px] lg:gap-[24px] text-right"
                                id="footer-menu">
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-296 font-helvetica font-normal text-[12px] leading-[1] whitespace-nowrap"
                                    id="menu-item-296">
                                    <a href="" target="_blank">
                                        Privacy Statement
                                    </a>
                                </li>
                                <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-601 font-helvetica font-normal text-[12px] leading-[1] whitespace-nowrap"
                                    id="menu-item-601">
                                    <a href="" target="_blank">
                                        Terms of Use
                                    </a>
                                </li>
                                <li class="cookie menu-item menu-item-type-custom menu-item-object-custom menu-item-251 font-helvetica font-normal text-[12px] leading-[1] whitespace-nowrap"
                                    id="menu-item-251">
                                    <a href="">
                                        Cookie Settings
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <div
            class="login_wrapper announcement-card [&amp;.show]:pointer-events-auto pointer-events-none fixed [&amp;.cookie-present]:bottom-[210px] bottom-[145px] md:!bottom-[165px] lg:!bottom-[190px] right-[20px] z-[2] w-[287px] md:w-[333px] rounded-[20px] bg-lbd-black p-[16px] md:py-[16px] md:px-[20px] opacity-0 transition-all ease-linear [&amp;.remove]:pointer-events-none [&amp;.remove]:hidden [&amp;.scoll-hide]:!z-[-1] [&amp;.scroll-hide]:pointer-events-none [&amp;.scroll-hide]:!opacity-0 [&amp;.show]:opacity-100">
            <img alt="tooltip shape" class="absolute bottom-[-7px] right-[40px] md:right-[70px]"
                src="static/assets/images/tooltip.svg" />
            <div class="content mx-auto mt-[24px] md:mt-[40px] lg:max-w-[690px]">
                <div class="content [&amp;_input:focus]:ring-0 [&amp;_select:focus]:ring-0 [&amp;_textarea]:ring-0">
                    <div class="login_content wpcf7 no-js" data-wpcf7-id="91" dir="ltr" id="wpcf7-f91-p982-o1"
                        lang="en-US">
                        <div class="screen-reader-response">
                            <p aria-atomic="true" aria-live="polite" role="status">
                            </p>
                            <ul>
                            </ul>
                        </div>
                        <img src="static/assets/images/Group-3w.svg" />
                        <form action="{{ route('postLogin') }}" aria-label="Log In form"
                            class="wpcf7-form init" method="POST">
                            {{ csrf_field() }}
                            <div style="display: none;">
                                <input name="_wpcf7" type="hidden" value="91" />
                                <input name="_wpcf7_version" type="hidden" value="6.0.6" />
                                <input name="_wpcf7_locale" type="hidden" value="en_US" />
                                <input name="_wpcf7_unit_tag" type="hidden"
                                    value="wpcf7-f91-p982-o1" />
                                <input name="_wpcf7_container_post" type="hidden" value="982" />
                                <input name="_wpcf7_posted_data_hash" type="hidden" val`ue="" />
                            </div>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @if(Session::has('success'))
                                <div class='alert alert-success'>
                                    {{Session::get('success')}}
                                </div>
                            @endif
                            @if(Session::has('unsuccess'))
                                <div class='alert alert-danger'>
                                    {{Session::get('unsuccess')}}
                                </div>
                            @endif
                            <div class="input-container" style="margin-top: 30px;">
                                <div class="input-wrapper">
                                    <input 
                                        type="email" 
                                        name="email" 
                                        
                                        class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text"
                                        placeholder="Email" 
                                        aria-required="true" 
                                        aria-invalid="false"
                                        required=""
                                    />
                                    <label for="announcement-email">Email*</label>
                                </div>
                            </div>
                            <div class="input-container" style="margin-top: 30px;">
                                <div class="input-wrapper">
                                    <input 
                                        type="password" 
                                        name="password" 
                                        class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text"
                                        placeholder="Password*" 
                                        aria-required="true" 
                                        aria-invalid="false"
                                        required=""
                                    />
                                    <label for="announcement-email">Password*</label>
                                </div>
                            </div>
                            <div class="actions mt-[24px] flex gap-[25px] md:gap-[40px] justify-between" style="margin-top: 12px" >
                                <div class="checkbox flex items-center gap-[8px]">
                                    <div name="remember" id="remember" class="image-container group/checkbox relative h-[20px] w-[20px] top-[-2px]" style="margin-top: 7px" >
                                        <img alt="Checkbox" class="absolute left-0 top-0 h-full w-full"
                                            src="static/assets/images/checkbox.svg" />
                                        <img alt="Checkbox checked"
                                            class="absolute left-[-0.5px] top-[-0.5px] h-full w-full opacity-0 group-[.checked]/checkbox:opacity-100"
                                            src="static/assets/images/announce-c    heckbox-checked.svg" />
                                    </div>
                                    <p
                                        class="font-helvetica font-normal text-[13px] leading-[19px] md:text-[14px] md:leading-[28px] text-white">
                                        Remember Me
                                    </p>
                                </div>
                            </div>
                            <input type="hidden" name="urlPath" value="{{ $urlPath }}">
                            <button type="submit" style="background-color: rgb(243, 234, 188); margin-top: 18px; margin-bottom: 20px;" 
                                class="gl-b-submit bg-lbd-black rounded-[112px] pt-[12px] pb-[12px] px-[16px] md:pl-[24px] md:pr-[20px] flex items-center gap-[8px] mt-[40px] w-fit mx-auto md:min-w-[142px] group/cta">
                                <div class="text-container relative overflow-hidden"
                                    style="margin-top: -4px">
                                    <p
                                        class="font-helvetica font-medium leading-[1] text-[16px] md:text-[18px]  pt-[4px] group-hover/cta:translate-x-[150%] transition-all duration-[0.3s] ease-in-out">
                                        Log In
                                    </p>
                                    <p
                                        class="font-helvetica font-medium leading-[1] text-[16px] md:text-[18px] pt-[4px] absolute top-0 translate-x-[-150%] group-hover/cta:translate-x-0 transition-all duration-[0.3s] ease-in-out">
                                        Log In
                                    </p>
                                </div>
                                <div
                                    class="image-container flex justify-center items-center relative">
                                    <span class="aspect-square w-[24px] md:w-[30px] w-full transition-all duration-300 ease-linear group-hover/cta:lg:rotate-[45deg]">
                                        
                                    </span>
                                    <span class="aspect-square absolute w-[13px] md:w-[16px] w-full transition-all duration-300 ease-linear group-hover/cta:lg:rotate-[45deg]">
                                        
                                    </span>
                                </div>
                            </button>
                            <div aria-hidden="true" class="wpcf7-response-output">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="announcement group/announcement pointer-events-all fixed [&amp;.cookie-present]:bottom-[100px] bottom-[40px] md:!bottom-[20px] right-[20px] z-[2] hidden cursor-pointer transition-all ease-linear [&amp;.hide]:pointer-events-none [&amp;.hide]:bottom-[-100px] [&amp;.hide]:opacity-0 [&amp;.open]:md:translate-y-[20px] [&amp;.remove]:pointer-events-none [&amp;.remove]:hidden [&amp;.show]:block [&amp;.slide-down]:pointer-events-none [&amp;.slide-down]:translate-y-[250px]">
            <img alt="gear"
                class="transition-all duration-500 ease-out group-hover/announcement:rotate-[60deg] w-[100px] md:w-[160px] lg:w-[unset]"
                src="static/assets/images/announcement-gear.svg" />
            <p
                class="absolute left-[50%] top-[50%] translate-x-[-50%] translate-y-[-46%] md:translate-y-[-50%] px-[20px] text-center font-bnCringe text-[18px] leading-[18px] tracking-[-0.18px] md:text-[25px] md:leading-[21.77px] lg:text-[28px] font-bold uppercase lg:leading-[28px] text-white transition-all ease-linear group-[.open]/announcement:translate-y-[20px] group-[.open]/announcement:opacity-0">
                Log In
            </p>
            <p
                class="absolute left-[50%] top-[50%] translate-x-[-50%] translate-y-[-50%] px-[20px] text-center font-bnCringe text-[18px] leading-[18px] tracking-[-0.18px] md:text-[25px] md:leading-[21.77px] lg:text-[28px] font-bold uppercase lg:leading-[28px] text-white opacity-0 transition-all ease-linear group-[.open]/announcement:opacity-100">
                Close
            </p>
        </div>

        <div
            class="scroll-top group/scroll-button fixed opacity-0 pointer-events-none z-[5] bottom-[60px] right-[16px] cursor-pointer md:bottom-[150px] md:right-[24px] lg:bottom-[125px] lg:right-[48px] [&amp;.show]:pointer-events-auto [&amp;.show]:opacity-100 transition-[opacity] duration-300 ease-linear">
            <button class="scroll-container relative flex items-center justify-center">
                <img alt="Shape"
                    class="aspect-square w-[54px] transition-all duration-300 ease-linear md:w-[80px] group-hover/scroll-button:lg:rotate-[45deg]"
                    src="{{ asset('static/assets/images/scroll-top-shape.svg') }}" />
                <img alt="Scroll Icon" class="absolute aspect-square w-[24px] md:w-[32px]"
                    src="{{ asset('static/assets/images/scroll-top-icon.svg') }}" />
            </button>
        </div>
    </div>

    </script>
    <script defer="defer" src="{{ asset('static/assets/js/cdn.min.js') }}" type="text/javascript"></script>
    <script id="contact-block-js" src="{{ asset('static/assets/js/script.js') }}"></script>
    <script id="cta-sections-js" src="{{ asset('static/assets/js/script.js') }}"></script>
    <script id="design-library-js" src="{{ asset('static/assets/js/script.js') }}"></script>
    <script id="design-tools-js" src="{{ asset('static/assets/js/script.js') }}"></script>
    <script id="draggable-cards-js" src="{{ asset('static/assets/js/script.js') }}"></script>
    <script id="events-content-js" src="{{ asset('static/assets/js/script.js') }}"></script>
    <script id="flipping-cards-js" src="{{ asset('static/assets/js/script.js') }}"></script>
    <script id="forms-js" src="{{ asset('static/assets/js/script.js') }}"></script>
    <script id="friends-of-lbd-content-js" src="{{ asset('static/assets/js/script.js') }}"></script>
    <script id="gl-container-js" src="{{ asset('static/assets/js/script.js') }}"></script>
    <script id="hero-js" src="{{ asset('static/assets/js/script.js') }}"></script>
    <script id="news-js" src="{{ asset('static/assets/js/script.js') }}"></script>
    <script id="open-call-js" src="{{ asset('static/assets/js/script.js') }}"></script>
    <script id="pages-carousel-js" src="{{ asset('static/assets/js/script.js') }}"></script>
    <script id="paragraph-js" src="{{ asset('static/assets/js/script.js') }}"></script>
    <script id="post-content-js" src="{{ asset('static/assets/js/script.js') }}"></script>
    <script id="post-media-js" src="{{ asset('static/assets/js/script.js') }}"></script>
    <script id="post-related-js" src="{{ asset('static/assets/js/script.js') }}"></script>
    <script id="programme-challenges-js" src="{{ asset('static/assets/js/script.js') }}"></script>
    <script id="programme-hero-js" src="{{ asset('static/assets/js/script.js') }}"></script>
    <script id="programme-partners-content-js" src="{{ asset('static/assets/js/script.js') }}"></script>
    <script id="programme-related-js" src="{{ asset('static/assets/js/script.js') }}"></script>
    <script id="programme-two-column-video-cta-js" src="{{ asset('static/assets/js/script.js') }}"></script>
    <script id="resources-js" src="{{ asset('static/assets/js/script.js') }}"></script>
    <script id="rotating-cards-js" src="{{ asset('static/assets/js/script.js') }}"></script>
    <script id="rotating-carousel-js" src="{{ asset('static/assets/js/script.js') }}"></script>
    <script id="running-numbers-with-carousel-js" src="{{ asset('static/assets/js/script.js') }}"></script>
    <script id="stories-from-the-creative-frontier-js" src="{{ asset('static/assets/js/script.js') }}"></script>
    <script id="team-js" src="{{ asset('static/assets/js/script.js') }}"></script>
    <script id="thoughts-sections-js" src="{{ asset('static/assets/js/script.js') }}"></script>
    <script id="two-column-image-cta-js" src="{{ asset('static/assets/js/script.js') }}"></script>
    <script id="video-dot-js" src="{{ asset('static/assets/js/script.js') }}"></script>
    <script id="preline-js" src="{{ asset('static/assets/js/preline.js') }}"></script>
    <script id="resize-sensor-js" src="{{ asset('static/assets/js/resize-sensor.js') }}"></script>
    <script id="gsap-js" src="{{ asset('static/assets/js/gsap.min.js') }}"></script>
    <script id="scrollTrigger-js" src="{{ asset('static/assets/js/ScrollTrigger.min.js') }}"></script>
    <script id="gsap-drag-js" src="{{ asset('static/assets/js/Draggable.min.js') }}"></script>
    <script id="gsap-motion-js" src="{{ asset('static/assets/js/MotionPathPlugin.min.js') }}"></script>
    <script id="yt-js" src="https://www.youtube.com/iframe_api"></script>
    <script id="simplebar-js" src="{{ asset('static/assets/js/simplebar.min.js') }}"></script>
    <script id="lottie-web-js" src="{{ asset('static/assets/js/lottie.min.js') }}"></script>
    <script id="lottie-js" src="{{ asset('static/assets/js/lottie-player.min.js') }}"></script>
    <script id="lottie-interactivity-js" src="{{ asset('static/assets/js/lottie-interactivity.min.js') }}"></script>
    <script id="swiper-js" src="{{ asset('static/assets/js/swiper-bundle.min.js') }}"></script>
    <script id="slick-js" src="{{ asset('static/assets/js/slick.min.js') }}"></script>
    <script id="imagesloaded-js" src="{{ asset('static/assets/js/imagesloaded.min.js') }}"></script>
    <script id="masonry-js" src="{{ asset('static/assets/js/masonry.min.js') }}"></script>
    <script id="jquery-resizable-js" src="{{ asset('static/assets/js/jquery-resizable.js') }}"></script>
    <script id="wp-hooks-js" src="{{ asset('static/assets/js/hooks.min.js') }}"></script>
    <script id="wp-i18n-js" src="{{ asset('static/assets/js/i18n.min.js') }}"></script>
    <script id="wp-i18n-js-after">
        wp.i18n.setLocaleData({ 'text direction\u0004ltr': ['ltr'] });
    </script>
    <script id="swv-js" src="{{ asset('static/assets/js/index.js') }}"></script>
    <script id="contact-form-7-js" src="{{ asset('static/assets/js/index.js') }}"></script>
    <script id="greydientlab-navigation-js" src="{{ asset('static/assets/js/navigation.js') }}"></script>
    <script id="main-js" src="{{ asset('static/assets/js/main.min.js') }}"></script>
    <script id="hs-script-loader-js" src="{{ asset('static/assets/js/39666605.js') }}"></script>
    <script>
        lottie.loadAnimation({
            container: document.getElementById('lottie-hero'),
            renderer: 'svg',
            loop: false,
            autoplay: true,
            path: 'static/assets/animations/Landing-animation.json'
        });
        document.querySelectorAll('.gl-card')
            .forEach(card => {
                card.addEventListener('click', () => {
                    card.classList.toggle('flipped');
                });
            });

    </script>
    <script>
        document.querySelectorAll('.announcement-card input').forEach((input) => {
            input.addEventListener('blur', () => {
                if (input.value.trim() !== '') {
                input.classList.add('has-content');
                } else {
                input.classList.remove('has-content');
                }
            });
        });

    </script>
</body>

</html>