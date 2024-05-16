<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title><?php echo e(!$config ? '' : $config->judul_web); ?></title>

    <meta name="title" content="<?php echo e(!$config ? '' : $config->judul_web); ?>">
    <meta name="description" content="<?php echo e(!$config ? '' : $config->deskripsi_web); ?>">

    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo e(ENV('APP_URL')); ?>">
    <meta property="og:title" content="<?php echo e(!$config ? '' : $config->judul_web); ?>">
    <meta property="og:description" content="<?php echo e(!$config ? '' : $config->deskripsi_web); ?>">
    <meta name="twitter:image" content="<?php echo e(!$config ? '' : $config->logo_footer); ?>"/>
    <meta property="og:image" content="<?php echo e(!$config ? '' : $config->logo_footer); ?>"/>
    <meta name="robots" content="index, follow">
    <meta content="desktop" name="device">
    <meta name="author" content="<?php echo e(ENV('APP_NAME')); ?>">
    <meta name="coverage" content="Worldwide">
    <meta name="apple-mobile-web-app-title" content="<?php echo e(!$config ? '' : $config->judul_web); ?>">

    <link rel="shortcut icon" href="<?php echo e(url('')); ?><?php echo e(!$config ? '' : $config->logo_favicon); ?>">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.1/css/font-awesome.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/pace/1.2.4/themes/green/pace-theme-flash.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <!-- BEGIN: Page Vendor CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('')); ?>/assets/kbrstore/css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('')); ?>/assets/kbrstore/css/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('')); ?>/assets/kbrstore/css/katex.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('')); ?>/assets/kbrstore/css/dragula.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('')); ?>/assets/kbrstore/css/jquery.contextMenu.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('')); ?>/assets/kbrstore/css/jquery.rateyo.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('')); ?>/assets/kbrstore/css/jstree.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('')); ?>/assets/kbrstore/css/nouislider.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('')); ?>/assets/kbrstore/css/plyr.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('')); ?>/assets/kbrstore/css/shepherd.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('')); ?>/assets/kbrstore/css/sweetalert2.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('')); ?>/assets/kbrstore/css/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('')); ?>/assets/kbrstore/css/tether-theme-arrows.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('')); ?>/assets/kbrstore/css/tether.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('')); ?>/assets/kbrstore/css/toastr.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('')); ?>/assets/kbrstore/css/dropzone.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('')); ?>/assets/kbrstore/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('')); ?>/assets/kbrstore/css/jquery.bootstrap-touchspin.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('')); ?>/assets/kbrstore/css/bs-stepper.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('')); ?>/assets/kbrstore/css/leaflet.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('')); ?>/assets/kbrstore/css/maps-leaflet.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('')); ?>/assets/kbrstore/css/flatpickr.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('')); ?>/assets/kbrstore/css/pickadate.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('')); ?>/assets/kbrstore/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('')); ?>/assets/kbrstore/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('')); ?>/assets/kbrstore/css/rowGroup.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('')); ?>/assets/kbrstore/css/doku.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('')); ?>/assets/kbrstore/css/prism.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('')); ?>/assets/kbrstore/css/popup.css">
    <link rel="stylesheet" type="text/css"
          href="<?php echo e(url('')); ?>/assets/kbrstore/css/perfect-scrollbarb440.css?id=d9fa6469688548dca3b7e6bd32cb0dc6"/>
    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('')); ?>/assets/kbrstore/css/components.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('')); ?>/assets/kbrstore/css/dark-layout.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('')); ?>/assets/kbrstore/css/bordered-layout.min.css">
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/4.7.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('')); ?>/assets/kbrstore/css/vertical-menu.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('')); ?>/assets/kbrstore/css/app-invoice.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('')); ?>/assets/kbrstore/css/app-file-manager.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('')); ?>/assets/kbrstore/css/app-invoice-list.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('')); ?>/assets/kbrstore/css/page-pricing.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('')); ?>/assets/kbrstore/css/chart-apex.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('')); ?>/assets/kbrstore/css/dashboard-ecommerce.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('')); ?>/assets/kbrstore/css/form-flat-pickr.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('')); ?>/assets/kbrstore/css/ext-component-tree.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('')); ?>/assets/kbrstore/css/ext-component-toastr.min.css">
    <link href="https://cdn.materialdesignicons.com/5.3.45/css/materialdesignicons.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css" rel="stylesheet">
    <!-- BEGIN: Custom CSS & JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <style type="text/css"> .copy {
            cursor: pointer;
        } </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.4/clipboard.min.js"></script>
    <meta name="theme-color" content="#000000">
    <meta name="msapplication-navbutton-color" content="#000000">
    <meta name="apple-mobile-web-app-status-bar-style" content="#000000">
    <style>
        @import  url('https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/2.0.46/css/materialdesignicons.css');
        @import  url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');

        :root {
            --warna_1: <?= $config->warna1; ?>;
            --warna_2: <?= $config->warna2; ?>;
            --warna_3: <?= $config->warna3; ?>;
            --warna_4: <?= $config->warna4; ?>;
        }

        textarea:hover,
        input:hover,
        textarea:active,
        input:active,
        textarea:focus,
        input:focus,
        button:focus,
        button:active,
        button:hover,
        label:focus,
        .btn:active,
        .btn.active {
            outline: 0px !important;
            -webkit-appearance: none;
            box-shadow: none !important;
        }

        html body {
            background-color: var(--warna_1);
            direction: ltr;
            background: var(--warna_4);
            /* background: #4c2f26 url(<?php echo e(asset('assets/banner_bg.jpg')); ?>) no-repeat top center; */
        }

        body {
            background: var(--warna_1); 

            font-family: Roboto;
        }

        .bg-primary {
            background: var(--warna_2) !important;
        }

        .bg-secondary {
            background: var(--warna_3) !important;
        }

        .bg-white-custom {
            background: var(--warna_3) !important;
        }

        .bg-card {
            color: #fff;
            background: var(--warna_2);
        }

        .navbar {
            color: #fff;
            background: var(--warna_2);
        }

        .logo {
            margin-left: 10px;
            margin-right: 10px;
            width: 90%;
        }
        .navbar-background {
            background: var(--warna_2);
        }

        .navbar-toggler {
            font-size: 32px;
        }

        .offcanvas.offcanvas-end {
            background: var(--warna_2);
        }

        .navbar-nav .nav-link {
            color: #fff;
            text-transform: uppercase;
        }

        .btn-login {
            color: #fff;
            background: #0d6efd !important;
        }

        .content-body {
            color: antiquewhite;
            padding: 0 5px;
            padding-top: 80px;
        }

        .btn-primary {
            background: var(--warna_2);
            border-color: var(--warna_2);
        }

        .text-primary {
            color: grey !important;
        }

        .text-danger {
            color:#d8dcff !important;
        }
        @media (min-width: 576px) {
            .content-body {
                margin: 0 auto;
                max-width: 1140px;
                padding-top: 100px;
            }
        }

        .resultsearch {
            width: 100%;
            inset: 0px auto auto 0px;
            margin: 0px;
            transform: translate(0px, 50px);
            background-color: #000000;
            border-color: rgba(0, 0, 0, .15);
            color: #fff;
            overflow-y: auto;
            max-height: 500px;
        }

        @media (min-width: 768px) {
            .resultsearch {
                width: 50%;
                max-height: 500px;
                transform: translate(220px, 50px);
            }
        }

        .resultsearch .dropdown-item:hover {
            background-color: #000000;
            color: #fff;
        }

        .search-bar input {
            border: none;
            color: rgb(156 163 175);
            background: #ffffff;
            border-radius: 9999px;
        }

        .search-bar span {
            border: none;
            border-radius: 9999px;
            color: rgb(156 163 175);
            background: #ffffff;
        }

        .search-bar ::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
            color: #878aad;
            opacity: 1; /* Firefox */
        }

        .input-box:focus {
            color: #000;
            background: #ffffff;
        }

        .img-search {
            padding-left: 15px;
        }

        .swiper-container {
            width: 100%;
            overflow: hidden;
        }

        .swiper-slide {
            background-position: center;
            background-size: cover;
            width: 80%;
            height: 100%;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            border-radius: 12px;
        }

        @media (max-width: 576px) {
            .swiper-slide img {
                display: block;
                width: 100%;
                height: 100% !important;
                border-radius: 12px;
            }
            .logo {
                margin-left: 0;
                margin-right: 0;
                width: 100% !important;
            }
        }

        .swiper-pagination {
            margin-top: 30px !important;
        }

        .content-body form input {
            outline: none;
            margin-top: -30px;
            border: none !important;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05) !important;
        }

        .row {
            --bs-gutter-x: 0.5rem;
        }

        .product .box {
            margin-bottom: 40px;
        }

        @media (max-width: 576px) {
            .product .box {
                box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
                border-radius: 0.75rem;
                text-align: center;
                background: #646464;
                display: block;
                text-decoration: none;
                color: #fff;
                height: 10rem;
            }
        }

        @media (min-width: 576px) {
            .product .box {
                box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
                border-radius: 0.75rem;
                text-align: center;
                background: #646464;
                display: block;
                text-decoration: none;
                color: #fff;
                height: 15rem;
            }
        }

        .card-product {

            margin-bottom: -30px;
            gap: 0.5rem;
        }

        @media (max-width: 576px) {
            .product p {
                font-size: 12px !important;
            }
        }

        .product .box img {
            width: 100%;
            height: 100%;
            display: block;
            margin: auto;
            object-fit: cover;
            border-radius: 0.75rem;
        }

        .card {
            cursor: pointer;
            border-radius: 10px;
        }

        .kbrstore-pgimg {
            background-color: white;
            border-radius: 3px;
            border: 1px solid white;
            height: 15px;
        }

        .footer img {
            padding-top: 2.5rem 0;
        }

        .text-copyright {
            color: #718096;
            font-size: 0.875rem;
        }

        .sosmed {
            margin-bottom: 20px;
        }

        .sosmed a {
            margin: 0 10px;
            text-decoration: none;
            color: #fff;
        }

        .sosmed i {
            font-size: 24px;
        }

        .item .metode {
            margin: 5px 0;
            background: #fff;
            border-radius: 8px;
            padding: 0.75rem;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06) !important;
        }

        .my-form label {
            font-size: 1rem;
        }

        .my-form .form-control {
            background: #fefefe;
            margin-top: 6px;
            border: 2px solid #fefefe !important;
        }

        .my-form .form-control:active, .my-form .form-control:focus {
            border-color: #fefefe !important;
            box-shadow: none !important;
            outline: none !important;
        }

        .method-list {
            overflow: hidden;
            cursor: pointer;
        }

        .method-list.active {
            border-color: var(--warna_2) !important;
        }

        .method-list.active:before {
            display: inline-block;
            content: 'L';
            position: relative;
            background: var(--warna_2);
            margin-left: -12px;
            height: 53px;
            line-height: 40px;
            width: 20px;
            text-align: center;
            color: #fff;
            top: -23px;
            transform: rotate(45deg) scaleX(-1);;
        }

        .method-list.active table {
            margin-top: -53px;
        }

        .search-item {
            width: 50%;
        }

        @media (max-width: 768px) {
            .navbar-brand {
                width: 120px;
            }
            .logo{
                width: 100% !important;
            }
        }

        @media (min-width: 768px) {
            .search-item {
                width: 50%;
                margin-left: 0px;
            }
        }

        @media (min-width: 993px) {
            .search-item {
                width: 50%;
                margin-left: 5px;
            }
        }

        @media (min-width: 1024px) {
            .search-item {
                width: 50%;
                margin-left: 0px;
            }
        }

        @media (min-width: 1106px) {
            .search-item {
                width: 50%;
                margin-left: 0px;
            }
            .navbar-brand {
                width: 220px;
            }
        }

        @media (min-width: 1266px) {
            .search-item {
                width: 50%;
                margin-left: 0px;
            }
        }

        @media (min-width: 1336px) {
            .search-item {
                width: 50%;
                margin-left: 0px;
            }
        }

        @media (min-width: 1440px) {
            .search-item {
                width: 50%;
                margin-left: 0px;
            }
        }

        .footer-right {
            text-align: right;
        }

        @media (max-width: 480px) {
            .footer-left, 
            .footer-right {
                text-align: center;
            }
        }

        .swal2-popup {
            display: none;
            position: relative;
            box-sizing: border-box;
            grid-template-columns: minmax(0, 100%);
            width: 32em;
            max-width: 100%;
            padding: 0 0 1.25em;
            border: none;
            border-radius: 5px;
            background: #ffffff !important;
            color: #000 !important;
            font-family: inherit;
            font-size: 1rem;
        }

        .swal2-html-container {
            z-index: 1;
            justify-content: center;
            margin: 1em 1.6em 0.3em;
            padding: 0;
            overflow: auto;
            color: inherit;
            font-size: 1.125em;
            font-weight: normal;
            line-height: normal;
            text-align: left !important;
            word-wrap: break-word;
            word-break: break-word;
        }

        .flex-1 {
            flex: 1 1 0%;
        }


    </style>


    <style>
        .clip-overlay {
            clip-path: polygon(0 48%, 9% 48%, 18% 65%, 27% 49%, 36% 72%, 45% 58%, 55% 70%, 64% 58%, 73% 86%, 82% 48%, 91% 63%, 100% 70%, 100% calc(100% + 1px), 0 calc(100% + 1px));
            -webkit-clip-path: polygon(0 48%, 9% 48%, 18% 65%, 27% 49%, 36% 72%, 45% 58%, 55% 70%, 64% 58%, 73% 86%, 82% 48%, 91% 63%, 100% 70%, 100% calc(100% + 1px), 0 calc(100% + 1px));
            background-color: #7367F0;
            width: 100%;
            height: 25px;
            margin-top: -21px !important;
        }

        .clip-fo {
            margin-top: 10px !important;
            background-color: var(--warna_3) !important;
            display: flex;
            padding: 0;
            margin-top: -35px;
            width: 100%;
            height: 40px;
            clip-path: polygon(0 23%, 6% 72%, 12% 47%, 18% 70%, 24% 51%, 32% 80%, 38% 47%, 44% 80%, 50% 49%, 56% 70%, 60% 86%, 66% 42%, 72% 65%, 78% 38%, 84% 64%, 90% 17%, 96% 20%, 100% 1%, 100% calc(100% + 1px), 0 calc(100% + 1px));
            -webkit-clip-path: polygon(0 23%, 6% 72%, 12% 47%, 18% 70%, 24% 51%, 32% 80%, 38% 47%, 44% 80%, 50% 49%, 56% 70%, 60% 86%, 66% 42%, 72% 65%, 78% 38%, 84% 64%, 90% 17%, 96% 20%, 100% 1%, 100% calc(100% + 1px), 0 calc(100% + 1px));
        }

        .clip-path {
            display: flex;
            padding: 0;
            margin-top: -32px;
            width: 100%;
            height: 35px;
            background-color: #ebe9f1;
            clip-path: clip-path: polygon(0 48%, 9% 48%, 18% 65%, 27% 49%, 36% 72%, 45% 58%, 55% 70%, 64% 58%, 73% 86%, 82% 48%, 91% 63%, 100% 70%, 100% calc(100% + 1px), 0 calc(100% + 1px));;
        }

        .foo-img {
            width: 65px;
            height: 65px;
            background: #fff;
            text-align: center;
            border-radius: 50%;
            line-height: 65px;
            float: left;
            margin-right: 15px;
        }

        .fo-end a {
            margin: 0 3px;
        }

        @media  only screen and (max-width: 600px) {
            .fo-end {
                text-align: center;
            }

            .fo-end span {
                margin-bottom: 8px;
                display: block;
            }

            .fo-end div {
                margin-top: 5px;
                display: block !important;
                float: none !important;
            }

            .fo-end div img {
                max-width: 150px !important;
            }

            .fo-xs2 {
                padding-bottom: 20px;
                border-bottom: 1px dotted #7367F0;
            }
        }

        .pb-3,
        .py-3 {
            padding-bottom: 1rem !important;
        }

        .pt-3,
        .py-3 {
            padding-top: 1rem !important;
        }

        .border-top {
            border-top: 1px solid #dee2e6 !important;
        }

        .justify-content-center {
            justify-content: center !important;
        }

        .d-flex {
            display: flex !important;
        }

        .footer-payment-logo {
            border-radius: 4px;
            /*padding: 7px 10px;*/
            min-width: 55px;
            text-align: center;
            margin: 5px 0;
        }

        .footer-payment-logo > img {
            height: 100%;
            max-height: 40px !important;
            width: auto;
        }

        .d-flex {
            display: flex !important;
        }

        .justify-content-center {
            justify-content: center !important;
        }

        .justify-content-center {
            -webkit-box-pack: center !important;
            -webkit-justify-content: center !important;
            -ms-flex-pack: center !important;
            justify-content: center !important;
        }
    </style>


<?php echo $__env->yieldContent('custom_style'); ?>


<body>
<div class="content" style="background-color: rgba(60,26,111,0.77)">
    <?php if(Auth::check()): ?>
        <?php if(Auth()->user()->role == 'Member' || Auth()->user()->role == 'Platinum' || Auth()->user()->role == 'Gold'): ?>
            <nav class="navbar navbar-expand-lg py-3 d-flex fixed-top shadow">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="<?php echo e(asset('assets/images/logo.png')); ?>" class="logo" />
                    </a>
                    <div class="search-item">
                        <div class="">
                            <div class="nav-item dropdown">
                                <div class="input-group search-bar" aria-haspopup="true" id="dropsearchdown"
                                     aria-expanded="false">
                                    <span class="input-group-text" id="basic-addon1"><i
                                                class="fa-solid fa-magnifying-glass"></i></span>
                                    <input type="text" name="q" placeholder="Cari..." id="searchProds"
                                           class="form-control input-box p-2" autocomplete="off">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="hasil-cari">
                        <ul class="position-absolute resultsearch shadow dropdown-menu"
                            aria-labelledby="dropsearchdown"></ul>
                    </div>

                    <button class="navbar-toggler border-0 d-lg-none" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                        <span><i class="fa fa-bars-staggered text-light"></i></span>
                    </button>
                    <div class="offcanvas offcanvas-end w-75" tabindex="-1" id="offcanvasDarkNavbar"
                         aria-labelledby="offcanvasDarkNavbarLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">
                                <h5 class="logo text-white"><?php echo e(ENV('APP_NAME')); ?></h5>
                            </h5>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                                    aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body d-lg-none">
                            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(url('')); ?>"><i class="fa-solid fa-house"></i> Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(url('/daftar-harga')); ?>">
                                        Daftar Harga</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(url('/cari')); ?>"> Cari Pesanan</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(url('/riwayat-pembelian')); ?>">Riwayat Pembelian</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(url('/deposit')); ?>"><i class="fa-solid fa-wallet"></i>
                                        Top Up Saldo</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(url('/user/edit/profile')); ?>">Edit Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(url('/membership')); ?>"><i
                                                class="fa-solid fa-circle-up"></i> Upgrade Membership</a>
                                </li>
                                <div class="card bg-card mt-2 mb-2">
                                    <div class="card-body">
                                        <span class="py-1 px-2 float-end rounded bg-warning text-dark"
                                              style="font-size: 12px;"><?php echo e(Str::title(Auth()->user()->role)); ?></span>
                                        <h5 class="card-title"><?php echo e(Str::title(Auth()->user()->name)); ?></h5>
                                        <p class="card-text">
                                            Rp <?php echo e(number_format(Auth::user()->balance, 0, ',', '.')); ?></p>
                                    </div>
                                </div>

                                <div class="mt-2">
                        </div>
                        <button onclick="logout();" class="btn bg-white border-0 text-danger mt-2">Logout</button>
                        </ul>
                    </div>
                </div>
                <div class="collapse navbar-collapse py-2 text-right d-none d-md-none d-lg-block">
                    <div class="navbar-nav ms-auto nav-stacked gx-5">
                        <a class="nav-link mx-2" href="<?php echo e(url('')); ?>">
                            Home
                        </a>
                        <a class="nav-link mx-2" href="<?php echo e(url('/daftar-harga')); ?>">
                            Daftar Harga</a>
                        <a class="nav-link mx-2" href="<?php echo e(url('/cari')); ?>">
                            Cari
                            Pesanan</a>
                        <a class="nav-link mx-2" href="<?php echo e(url('/dashboard')); ?>">
                            Dashboard</a>
                    </div>
                </div>
            </nav>
        <?php else: ?>
            <nav class="navbar navbar-expand-lg d-flex py-3 fixed-top shadow" style="background-color: grey;">
                <div class="container-fluid">
                    <a class="navbar-brand" href="<?php echo e(route('home')); ?>">


                        <img src="<?php echo e(asset('assets/images/logo.png')); ?>" class="logo" />
                    </a>
                    <div class="search-item">
                        <div class="">
                            <div class="nav-item dropdown">
                                <div class="input-group search-bar" aria-haspopup="true" id="dropsearchdown"
                                     aria-expanded="false">
                                    <span class="input-group-text" id="basic-addon1"><i
                                                class="fa-solid fa-magnifying-glass"></i></span>
                                    <input type="text" name="q" placeholder="Cari..." id="searchProds"
                                           class="form-control input-box p-2" autocomplete="off">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="hasil-cari">
                        <ul class="position-absolute resultsearch shadow dropdown-menu"
                            aria-labelledby="dropsearchdown"></ul>
                    </div>

                    <button class="navbar-toggler border-0 d-lg-none" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                        <span><i class="fa fa-bars-staggered text-light"></i></span>
                    </button>
                    <div class="offcanvas offcanvas-end w-75" tabindex="-1" id="offcanvasDarkNavbar"
                         aria-labelledby="offcanvasDarkNavbarLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">
                                <img src="<?php echo e(url('')); ?><?php echo e(!$config ? '' : $config->logo_header); ?>" alt="" width="100"
                                     onclick="window.location='<?php echo e(url('')); ?>'">
                            </h5>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                                    aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body d-lg-none">
                            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                <li class="nav-item mx-3">
                                    <a class="nav-link" href="<?php echo e(url('')); ?>"> Home</a>
                                </li>
                                <li class="nav-item mx-3">
                                    <a class="nav-link" href="<?php echo e(url('/daftar-harga')); ?>">
                                        Daftar Harga</a>
                                </li>
                                <li class="nav-item mx-3">
                                    <a class="nav-link" href="<?php echo e(url('/cari')); ?>">Cari Pesanan</a>
                                </li>
                                <?php if(auth()->guard()->check()): ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo e(url('/riwayat-pembelian')); ?>">Riwayat Pembelian</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo e(url('/deposit')); ?>">Top Up Saldo</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo e(url('/user/edit/profile')); ?>">Edit Profile</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php echo e(url('/membership')); ?>">Upgrade Membership</a>
                                    </li>
                                    <div class="card bg-card mt-2 mb-2">
                                        <div class="card-body">
                                            <span class="py-1 px-2 float-end rounded bg-warning text-dark"
                                                  style="font-size: 12px;"><?php echo e(Str::title(Auth()->user()->role)); ?></span>
                                            <h5 class="card-title"><?php echo e(Str::title(Auth()->user()->name)); ?></h5>
                                            <p class="card-text">
                                                Rp <?php echo e(number_format(Auth::user()->balance, 0, ',', '.')); ?></p>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <div class="mt-2">
                                <button class="btn btn-login mx-2 mt-2 w-100"
                                    onclick="window.location='<?php echo e(url('/dashboard')); ?>'">Admin Dashboard
                                </button>
                        </div>
                        </ul>
                    </div>
                </div>
                <div class="collapse navbar-collapse text-right d-none d-md-none d-lg-block">
                    <div class="navbar-nav ms-auto nav-stacked">
                        <a class="nav-link mx-2" href="<?php echo e(url('')); ?>">Home</a>
                        <a class="nav-link mx-2" href="<?php echo e(url('/daftar-harga')); ?>">Daftar
                            Harga</a>
                        <a class="nav-link mx-2" href="<?php echo e(url('/cari')); ?>"> Cari
                            Pesanan</a>
                        <a class="nav-link mx-2" href="<?php echo e(url('/dashboard')); ?>">Dashboard</a>
                    </div>
                </div>
            </nav>
        <?php endif; ?>
    <?php else: ?>

        <nav class="navbar navbar-expand-lg d-flex fixed-top shadow py-3" style="background-color: grey">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?php echo e(route('home')); ?>">
                    
                    <img src="<?php echo e(asset('assets/images/logo.png')); ?>" class="logo" />
                </a>
                <div class="search-item">
                    <div class="">
                        <div class="nav-item dropdown">
                            <div class="input-group search-bar" aria-haspopup="true" id="dropsearchdown"
                                 aria-expanded="false">
                                <span class="input-group-text" id="basic-addon1"><i
                                            class="fa-solid fa-magnifying-glass"></i></span>
                                <input type="text" name="q" placeholder="Cari..." id="searchProds"
                                       class="form-control input-box p-2" autocomplete="off">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="hasil-cari">
                    <ul class="position-absolute resultsearch shadow dropdown-menu"
                        aria-labelledby="dropsearchdown"></ul>
                </div>

                <button class="navbar-toggler border-0 d-lg-none" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                    <span><i class="fa fa-bars-staggered text-light"></i></span>
                </button>
                <div class="offcanvas offcanvas-end w-75" tabindex="-1" id="offcanvasDarkNavbar"
                     aria-labelledby="offcanvasDarkNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">
                            <img src="<?php echo e(url('')); ?><?php echo e(!$config ? '' : $config->logo_header); ?>" alt="" width="100"
                                 onclick="window.location='<?php echo e(url('')); ?>'">
                        </h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body d-lg-none">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item mx-3">
                                <a class="nav-link" href="<?php echo e(url('')); ?>">
                                    </i> Home</a>
                            </li>
                            <li class="nav-item mx-3">
                                <a class="nav-link" href="<?php echo e(url('/daftar-harga')); ?>">
                                    Daftar Harga</a>
                            </li>
                            <li class="nav-item mx-3">
                                <a class="nav-link" href="<?php echo e(url('/cari')); ?>">Cari Pesanan</a>
                            </li>

                            <div class="mt-2 mx-3">
                                <button class="btn btn-login mt-2 w-100" onclick="window.location='<?php echo e(url('/login')); ?>'">
                                    Daftar / Masuk
                                </button>
                            </div>
                        </ul>
                </div>
            </div>
            <div class="collapse navbar-collapse text-right d-none d-md-none d-lg-block">
                <div class="navbar-nav ms-auto nav-stacked">
                    <a class="nav-link mx-2" href="<?php echo e(url('')); ?>">Home</a>
                    <a class="nav-link mx-2" href="<?php echo e(url('/daftar-harga')); ?>">Daftar Harga</a>
                    <a class="nav-link mx-2" href="<?php echo e(url('/cari')); ?>">Cari
                        Pesanan</a>
                    <a class="nav-link px-3 mx-3 border rounded-3" href="<?php echo e(url('/login')); ?>">
                        <i class="fa fa-lock text-light mx-1"></i> Login</a>
                </div>
            </div>
        </nav>
    <?php endif; ?>
    <?php echo $__env->yieldContent('content'); ?>
    <div class="content-body">
    </div>
</div>

<div id="footer-payment" class="col-md-12 col-sm-12  pt-3 pb-3" style="background-color: grey">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-lg-6 p-4">
                
                <img src="<?php echo e(asset('assets/images/logo.png')); ?>" class="col-sm-12">
                <div class="text-white mt-2 ratakirikanan">
                    <p><?php echo e(!$config ? '' : $config->deskripsi_web); ?></p>
                </div>
                <span class="mb-1" style="color:#fff">JL. Matraman Raya No. 67, Desa/Kelurahan Palmeriam, Kec.
                    Matraman, Kota Adm. Jakarta Timur, Provinsi DKI Jakarta
                    Kode Pos: 13150<br>08568639713</span>
                    
            </div>
            <div class="col-md-3 col-lg-2 p-4">
                <h4 class=" mb-1" style="color:#fff">Site Map</h4>
                <div class="mt-3">
                    <?php if(Auth::check()): ?>
                        <?php if(Auth()->user()->role == 'Member' || Auth()->user()->role == 'Platinum' || Auth()->user()->role == 'Gold'): ?>
                            <a href="<?php echo e(url('')); ?>" class="text-white text-decoration-none active"> Home</a><br>
                            <a href="<?php echo e(url('/cari')); ?>" class="text-white text-decoration-none ">
                                Cari Pesanan</a><br>
                            <a href="<?php echo e(url('/riwayat-pembelian')); ?>" class="text-white  text-decoration-none ">
                                Riwayat Pembelian</a><br>
                            <a href="<?php echo e(url('/deposit')); ?>" class="text-white text-decoration-none ">
                                Top Up Saldo</a><br>
                            <a href="<?php echo e(url('/user/edit/profile')); ?>" class="text-white text-decoration-none ">
                                Edit Profile</a><br>
                            <a href="<?php echo e(url('/membership')); ?>" class="text-white text-decoration-none ">
                                Upgrade Membership</a><br>
                        <?php else: ?>
                            <a
                                    href="<?php echo e(url('')); ?>" class="text-white text-decoration-none active"> Home</a><br>
                                    
                            <a href="<?php echo e(url('/cari')); ?>" class="text-white text-decoration-none ">
                                Cari Pesanan</a><br>
                        <?php endif; ?>
                    <?php else: ?>
                        <a
                                href="<?php echo e(url('')); ?>" class="text-white text-decoration-none active"> Home</a><br>
                        
                        <a href="<?php echo e(url('/cari')); ?>" class="text-white text-decoration-none ">
                            Cari Pesanan</a><br>
                    <?php endif; ?>
                    <a class="text-white text-decoration-none" href="/page/terms">Syarat & Ketentuan</a>
                    <a class="text-white text-decoration-none" href="/privacy-policy">Kebijakan Privasi</a>
            
                </div>
            </div>
            
            
            <div class="col-md-3 col-lg-4 p-4">
                <h4 class="mb-1" style="color:#fff">Metode Pembayaran</h4>
                <div class="mt-3">
                    <?php $__currentLoopData = $pay_method; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <img src="<?php echo e($p->images); ?>" class="kbrstore-pgimg">
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5 py-2">
        <div class="row">
            <div class="col-sm-12 col-lg-12 mt-2 mb-2 text-center">
                <small class="text-white">Copyright © 2023 <a href="<?php echo e(url('')); ?>" class="text-white text-decoration-none"><?php echo e(ENV('APP_NAME')); ?></a>
                    All Rights Reserved</small>
            </div>
            
        </div>
    </div>

    <div class="modal fade" tabindex="-1" id="modal-logout">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content bg-card">
                <div class="modal-header border-bottom-0">
                    <h5 class="modal-title">Logout</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Apakah anda yakin untuk keluar dari akun ?</p>
                    <div class="text-end">
                        <form method="POST" action="<?php echo e(url('/logout')); ?>">
                            <?php echo csrf_field(); ?>
                            <button type="button" class="btn btn-default text-white" data-bs-dismiss="modal">No</button>
                            <button type="submit" class="btn btn-danger">Yes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/pace-js@latest/pace.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script>
        var modal_logout = new bootstrap.Modal(document.getElementById('modal-logout'));

        function logout() {
            modal_logout.show();
        }
    </script>
    <script>

       $(window).scroll(function(){
            if ($(this).scrollTop() > 50) {
            $('.navbar').addClass('navbar-background');
            } else {
            $('.navbar').removeClass('navbar-background');
            }
        });

        var delay = (function () {
            var timer = 0;
            return function (callback, ms) {
                clearTimeout(timer);
                timer = setTimeout(callback, ms);
            };
        })();
        $('#searchProds').keyup(function () {
            const data = $(this).val();
            if (data.length < 1) {
                $('.resultsearch').removeClass('show');
                $('.resultsearch li').remove();
            } else {
                delay(function () {

                    $.ajax({
                        url: "<?php echo e(url('/cari/index')); ?>",
                        method: "POST",
                        data: {
                            data: data
                        },
                        beforeSend: function () {
                            $('.resultsearch li').remove();
                        },
                        success: function (res) {
                            $('.resultsearch').append(res);
                            $('.resultsearch').addClass('show');
                        }
                    })

                }, 100);
            }
        })

    </script>

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>


<?php echo $__env->yieldPushContent('custom_script'); ?>

</body>
</html><?php /**PATH D:\compro-gandalispulsa\resources\views/template/template.blade.php ENDPATH**/ ?>