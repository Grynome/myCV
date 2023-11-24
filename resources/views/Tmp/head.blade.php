<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">

    <!-- Page Title -->
    <title>Grynome - Curiculum Vitae</title>

    <!-- Meta Tags -->
    <meta name="description" content="Grynome - portfolio my experience as a programmer">
    <meta name="keywords"
        content="mix_design, coming soon, under construction, template, landing page, portfolio, one page, responsive, html5, css3, creative, clean, agency, personal page">
    <meta name="author" content="mix_design">

    <!-- Viewport Meta-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Template Favicon & Icons Start -->
    <link rel="icon" href="{{ asset('Assets')}}/img/favicon/favicon.ico" sizes="any">
    <link rel="icon" href="{{ asset('Assets')}}/img/favicon/icon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="{{ asset('Assets')}}/img/favicon/apple-touch-icon.png">
    <link rel="manifest" href="{{ asset('Assets')}}/img/favicon/manifest.webmanifest">
    <!-- Template Favicon & Icons End -->

    <!-- Facebook Metadata Start -->
    <meta property="og:image:height" content="1200">
    <meta property="og:image:width" content="1200">
    <meta property="og:title" content="Grynome - Curiculum Vitae">
    <meta property="og:description"
        content="Grynome - portfolio my experience as a programmer">
    <meta property="og:url" content="http://mixdesign.club/themeforest/emeric/">
    <meta property="og:image" content="http://mixdesign.club/themeforest/emeric/{{ asset('Assets')}}/img/favicon/og-image.jpg">
    <!-- Facebook Metadata End -->

    <!-- Template Styles Start -->
    <link rel="stylesheet" type="text/css" href="{{ asset('Assets')}}/css/loaders/loader.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('Assets')}}/css/plugins.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('Assets')}}/css/main.css">
    <!-- Template Styles End -->

    <!-- Custom Browser Color Start -->
    <meta name="theme-color" content="#ededed">
    <meta name="msapplication-navbutton-color" content="#ededed">
    <meta name="apple-mobile-web-app-status-bar-style" content="#ededed">
    <!-- Custom Browser Color End -->
</head>

<body>

    <!-- Loader Start -->
    <div class="loader">
        <div class="loader">
            <div class="loader__content">
                <div class="loader__logo">
                    <img src="{{ asset('Assets')}}/img/logo.svg" alt="Grynome - Curiculum Vitae">
                </div>
            </div>
        </div>
    </div>
    <!-- Loader End -->

    <!-- Gradient Background Start -->
    <div class="fullscreen-bg">
        <div class="blur"></div>
        <div class="blur"></div>
        <div class="blur"></div>
    </div>
    <!-- Gradient Background End -->

    <!-- Header Start -->
    <header id="header" class="header">

        <!-- Logo Start -->
        <div class="header__logo">
            <img src="{{ asset('Assets')}}/img/logo-personal.svg" alt="Grynome - Curiculum Vitae">
        </div>
        <!-- Logo End -->

        <!-- Header Content Start -->
        <div class="header__content d-flex align-items-center">
            <div class="container-fluid px-0 fullheight-mobile">
                <div class="row gx-0 gx-lg-5 justify-content-end justify-content-xl-start fullheight-mobile">
                    <div class="col-auto col-lg-8 fullheight-mobile">

                        <!-- Header Controls Block Start -->
                        <div class="header__buttons d-flex justify-content-end align-items-center">

                            <!-- Socials Desktop Start -->
                            <div class="socials-desktop">
                                <!-- Home screen socials links -->
                                <ul class="socials d-flex align-items-start">
                                    <li>
                                        <a class="btn btn-s-text" href="https://www.instagram.com" target="_blank">
                                            <span class="btn-title">LinkedIn</span>
                                            <span class="btn-hover">LinkedIn</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="btn btn-s-text" href="https://www.instagram.com" target="_blank">
                                            <span class="btn-title">Instagram</span>
                                            <span class="btn-hover">Instagram</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="btn btn-s-text" href="https://www.upwork.net/" target="_blank">
                                            <span class="btn-title">Upwork</span>
                                            <span class="btn-hover">Upwork</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Socials Desktop End -->

                            <!-- Notify Trigger Start -->
                            <a class="btn btn-s btn-s-icon" href="https://github.com/" target="_blank">
                                <span class="btn__background dark"></span>
                                <span class="btn__text light">
                                    <i class="fa-solid fa-bell"></i>
                                    <em class="btn-title">Github</em>
                                    <em class="btn-hover">Github</em>
                                </span>
                            </a>
                            <!-- Notify Trigger End -->

                        </div>
                        <!-- Header Controls Block End -->

                    </div>
                    <div class="col-auto col-lg-4">

                        <!-- Menu Trigger Start -->
                        <div class="header__menu d-flex justify-content-end align-items-center">
                            <a id="menu-trigger" class="btn menu-trigger" href="#0">
                                <span class="menu-trigger__background"></span>
                                <span class="menu-trigger__menu">
                                    <em class="btn-title">Menu</em>
                                    <em class="btn-hover">Menu</em>
                                </span>
                                <span class="menu-trigger__close">
                                    <em class="btn-title">Close</em>
                                    <em class="btn-hover">Close</em>
                                </span>
                            </a>
                        </div>
                        <!-- Menu Trigger End -->

                    </div>
                </div>
            </div>
        </div>
        <!-- Header Content End -->

    </header>
    <!-- Header End -->
    @yield('content')
    @extends('Tmp/footer')
