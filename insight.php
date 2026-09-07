<?php
$pageTitle = "Insights | Arklytics";
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>
        <?php echo $pageTitle; ?>
    </title>


    <!-- =====================================================
         GOOGLE FONTS
    ====================================================== -->

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Space+Grotesk:wght@400;500;600;700&display=swap"
        rel="stylesheet">


    <!-- =====================================================
         BOOTSTRAP
    ====================================================== -->

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">


    <!-- =====================================================
         BOOTSTRAP ICONS
    ====================================================== -->

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
        rel="stylesheet">


    <!-- =====================================================
         AOS
    ====================================================== -->

    <link
        href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css"
        rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">


    <style>

        /* =====================================================
           GLOBAL
        ====================================================== */

        :root {

            --ink: #07101f;

            --muted: #657286;

            --line: #e8edf3;

            --soft: #f6f8fb;

            --elldy: #6957e8;

            --elldy-soft: #f0edff;

            --crm: #079f8a;

            --crm-soft: #e4faf5;

            --academy: #d98522;

            --academy-soft: #fff2df;

            --white: #ffffff;

        }


        * {
            box-sizing: border-box;
        }


        html {
            scroll-behavior: smooth;
        }


        body {

            margin: 0;

            background:
                #ffffff;

            color:
                var(--ink);

            font-family:
                "DM Sans",
                sans-serif;

            overflow-x: hidden;

        }


        h1,
        h2,
        h3,
        h4,
        h5 {

            font-family:
                "Space Grotesk",
                sans-serif;

            letter-spacing:
                -.035em;

        }


        a {
            text-decoration: none;
        }


        /* =====================================================
           HEADER SPACING
        ====================================================== */

        .insights-page {

            position: relative;

        }


        /* =====================================================
           HERO
        ====================================================== */

        .insights-hero {

            position: relative;

            min-height:
                610px;

            display:
                flex;

            align-items:
                center;

            overflow:
                hidden;

            background:
                radial-gradient(
                    circle at 85% 20%,
                    rgba(105,87,232,.12),
                    transparent 30%
                ),
                radial-gradient(
                    circle at 10% 75%,
                    rgba(7,159,138,.10),
                    transparent 28%
                ),
                #ffffff;

        }


        .hero-grid {

            position:
                absolute;

            inset:
                0;

            opacity:
                .45;

            background-image:

                linear-gradient(
                    rgba(7,16,31,.035) 1px,
                    transparent 1px
                ),

                linear-gradient(
                    90deg,
                    rgba(7,16,31,.035) 1px,
                    transparent 1px
                );

            background-size:
                60px 60px;

            mask-image:
                linear-gradient(
                    to bottom,
                    black,
                    transparent
                );

        }


        .hero-orb {

            position:
                absolute;

            border-radius:
                50%;

            filter:
                blur(2px);

            pointer-events:
                none;

        }


        .hero-orb.one {

            width:
                360px;

            height:
                360px;

            right:
                -150px;

            top:
                80px;

            background:
                rgba(105,87,232,.08);

        }


        .hero-orb.two {

            width:
                260px;

            height:
                260px;

            left:
                -120px;

            bottom:
                -80px;

            background:
                rgba(7,159,138,.08);

        }


        .eyebrow {

            display:
                inline-flex;

            align-items:
                center;

            gap:
                8px;

            padding:
                7px 11px;

            border:
                1px solid
                #e3e8ef;

            border-radius:
                100px;

            background:
                rgba(255,255,255,.8);

            color:
                #58667a;

            font-size:
                11px;

            font-weight:
                700;

            letter-spacing:
                .08em;

            text-transform:
                uppercase;

        }


        .eyebrow-dot {

            width:
                7px;

            height:
                7px;

            border-radius:
                50%;

            background:
                #17c5a8;

            box-shadow:
                0 0 0 4px
                rgba(23,197,168,.12);

        }


        .hero-title {

            max-width:
                850px;

            margin-top:
                22px;

            font-size:
                clamp(
                    48px,
                    6vw,
                    82px
                );

            line-height:
                .98;

            font-weight:
                700;

        }


        .hero-title span {

            background:
                linear-gradient(
                    100deg,
                    #6957e8,
                    #078f9e
                );

            -webkit-background-clip:
                text;

            background-clip:
                text;

            color:
                transparent;

        }


        .hero-description {

            max-width:
                680px;

            margin-top:
                25px;

            color:
                var(--muted);

            font-size:
                17px;

            line-height:
                1.75;

        }


        .hero-actions {

            display:
                flex;

            flex-wrap:
                wrap;

            gap:
                12px;

            margin-top:
                30px;

        }


        .btn-primary-ark {

            display:
                inline-flex;

            align-items:
                center;

            gap:
                9px;

            padding:
                13px 19px;

            border-radius:
                11px;

            background:
                var(--ink);

            color:
                #ffffff;

            font-size:
                13px;

            font-weight:
                700;

            transition:
                .3s ease;

        }


        .btn-primary-ark:hover {

            color:
                #ffffff;

            transform:
                translateY(-3px);

            box-shadow:
                0 14px 30px
                rgba(7,16,31,.15);

        }


        .btn-outline-ark {

            display:
                inline-flex;

            align-items:
                center;

            gap:
                9px;

            padding:
                12px 18px;

            border:
                1px solid
                #dfe5ec;

            border-radius:
                11px;

            color:
                #263449;

            background:
                #ffffff;

            font-size:
                13px;

            font-weight:
                700;

            transition:
                .3s ease;

        }


        .btn-outline-ark:hover {

            border-color:
                #cbd4df;

            transform:
                translateY(-3px);

        }


        /* =====================================================
           HERO VISUAL
        ====================================================== */

        .hero-visual {

            position:
                relative;

            min-height:
                390px;

        }


        .insight-orbit {

            position:
                absolute;

            width:
                330px;

            height:
                330px;

            top:
                25px;

            right:
                20px;

            border:
                1px dashed
                #d8deea;

            border-radius:
                50%;

            animation:
                orbitSpin 30s
                linear infinite;

        }


        @keyframes orbitSpin {

            to {
                transform:
                    rotate(360deg);
            }

        }


        .visual-core {

            position:
                absolute;

            width:
                145px;

            height:
                145px;

            top:
                115px;

            right:
                112px;

            display:
                flex;

            flex-direction:
                column;

            align-items:
                center;

            justify-content:
                center;

            border-radius:
                35px;

            background:
                var(--ink);

            color:
                #ffffff;

            box-shadow:
                0 30px 60px
                rgba(7,16,31,.20);

            z-index:
                2;

        }


        .visual-core i {

            font-size:
                30px;

            margin-bottom:
                7px;

        }


        .visual-core strong {

            font-size:
                15px;

        }


        .visual-core small {

            color:
                #aab4c3;

            font-size:
                9px;

            margin-top:
                3px;

        }


        .visual-node {

            position:
                absolute;

            width:
                108px;

            min-height:
                75px;

            padding:
                12px;

            display:
                flex;

            flex-direction:
                column;

            align-items:
                center;

            justify-content:
                center;

            text-align:
                center;

            border:
                1px solid
                #e6eaf0;

            border-radius:
                15px;

            background:
                rgba(255,255,255,.92);

            box-shadow:
                0 15px 35px
                rgba(8,20,40,.08);

            z-index:
                3;

            animation:
                floating 4s
                ease-in-out infinite;

        }


        .visual-node i {

            font-size:
                18px;

            margin-bottom:
                4px;

        }


        .visual-node span {

            color:
                #69768a;

            font-size:
                10px;

            font-weight:
                700;

        }


        .visual-node.n1 {

            top:
                0;

            right:
                125px;

        }


        .visual-node.n2 {

            top:
                120px;

            right:
                -5px;

            animation-delay:
                .6s;

        }


        .visual-node.n3 {

            bottom:
                18px;

            right:
                80px;

            animation-delay:
                1.2s;

        }


        .visual-node.n4 {

            top:
                125px;

            left:
                25px;

            animation-delay:
                1.8s;

        }


        .visual-node.n1 i {
            color: var(--elldy);
        }

        .visual-node.n2 i {
            color: var(--crm);
        }

        .visual-node.n3 i {
            color: var(--academy);
        }

        .visual-node.n4 i {
            color: #1686b5;
        }


        @keyframes floating {

            0%,
            100% {
                transform:
                    translateY(0);
            }

            50% {
                transform:
                    translateY(-8px);
            }

        }


        /* =====================================================
           SECTION
        ====================================================== */

        .section {

            padding:
                100px 0;

        }


        .section-soft {

            background:
                var(--soft);

        }


        .section-heading {

            max-width:
                680px;

        }


        .section-label {

            display:
                inline-block;

            margin-bottom:
                12px;

            color:
                #778398;

            font-size:
                11px;

            font-weight:
                800;

            letter-spacing:
                .12em;

            text-transform:
                uppercase;

        }


        .section-title {

            font-size:
                clamp(
                    34px,
                    4vw,
                    54px
                );

            line-height:
                1.05;

            font-weight:
                700;

        }


        .section-description {

            margin-top:
                16px;

            color:
                var(--muted);

            font-size:
                15px;

            line-height:
                1.75;

        }


        /* =====================================================
           FEATURED INSIGHT
        ====================================================== */

        .featured-card {

            position:
                relative;

            min-height:
                420px;

            overflow:
                hidden;

            padding:
                45px;

            border:
                1px solid
                #e7ebf1;

            border-radius:
                28px;

            background:
                linear-gradient(
                    135deg,
                    #fbfbff,
                    #ffffff
                );

            box-shadow:
                0 25px 70px
                rgba(8,20,40,.06);

        }


        .featured-content {

            position:
                relative;

            z-index:
                2;

            max-width:
                650px;

        }


        .featured-badge {

            display:
                inline-flex;

            padding:
                6px 10px;

            border-radius:
                100px;

            background:
                var(--elldy-soft);

            color:
                var(--elldy);

            font-size:
                10px;

            font-weight:
                800;

            letter-spacing:
                .08em;

        }


        .featured-title {

            margin-top:
                22px;

            font-size:
                clamp(
                    31px,
                    4vw,
                    49px
                );

            line-height:
                1.05;

        }


        .featured-text {

            max-width:
                570px;

            margin-top:
                17px;

            color:
                var(--muted);

            font-size:
                15px;

            line-height:
                1.75;

        }


        .featured-graphic {

            position:
                absolute;

            right:
                -70px;

            bottom:
                -80px;

            width:
                390px;

            height:
                390px;

            border-radius:
                50%;

            border:
                1px solid
                rgba(105,87,232,.15);

        }


        .featured-graphic::before {

            content:
                "";

            position:
                absolute;

            inset:
                55px;

            border-radius:
                50%;

            border:
                1px solid
                rgba(7,159,138,.18);

        }


        .featured-graphic::after {

            content:
                "DATA";

            position:
                absolute;

            width:
                105px;

            height:
                105px;

            top:
                140px;

            left:
                140px;

            display:
                flex;

            align-items:
                center;

            justify-content:
                center;

            border-radius:
                28px;

            background:
                var(--ink);

            color:
                #ffffff;

            font-size:
                12px;

            font-weight:
                800;

            letter-spacing:
                .1em;

            box-shadow:
                0 25px 50px
                rgba(7,16,31,.20);

        }


        /* =====================================================
           CATEGORY FILTER
        ====================================================== */

        .filter-wrap {

            display:
                flex;

            flex-wrap:
                wrap;

            justify-content:
                center;

            gap:
                8px;

            margin:
                35px 0 45px;

        }


        .filter-btn {

            padding:
                9px 15px;

            border:
                1px solid
                #e0e6ed;

            border-radius:
                100px;

            background:
                #ffffff;

            color:
                #647187;

            font-size:
                12px;

            font-weight:
                700;

            cursor:
                pointer;

            transition:
                .25s ease;

        }


        .filter-btn:hover,
        .filter-btn.active {

            color:
                #ffffff;

            background:
                var(--ink);

            border-color:
                var(--ink);

        }


        /* =====================================================
           INSIGHT CARDS
        ====================================================== */

        .insight-card {

            height:
                100%;

            padding:
                27px;

            border:
                1px solid
                var(--line);

            border-radius:
                20px;

            background:
                #ffffff;

            transition:
                transform .3s ease,
                box-shadow .3s ease,
                border-color .3s ease;

        }


        .insight-card:hover {

            transform:
                translateY(-7px);

            border-color:
                #d8dee7;

            box-shadow:
                0 20px 50px
                rgba(8,20,40,.08);

        }


        .card-category {

            display:
                inline-flex;

            padding:
                5px 8px;

            border-radius:
                7px;

            font-size:
                9px;

            font-weight:
                800;

            letter-spacing:
                .06em;

        }


        .category-elldy {

            color:
                var(--elldy);

            background:
                var(--elldy-soft);

        }


        .category-crm {

            color:
                var(--crm);

            background:
                var(--crm-soft);

        }


        .category-business {

            color:
                #1971a3;

            background:
                #e8f5fc;

        }


        .card-title {

            margin-top:
                17px;

            font-size:
                20px;

            line-height:
                1.25;

        }


        .card-text {

            margin-top:
                10px;

            color:
                var(--muted);

            font-size:
                13px;

            line-height:
                1.7;

        }


        .card-link {

            display:
                inline-flex;

            align-items:
                center;

            gap:
                7px;

            margin-top:
                19px;

            color:
                var(--ink);

            font-size:
                12px;

            font-weight:
                800;

        }


        .card-link i {

            transition:
                transform .25s ease;

        }


        .insight-card:hover
        .card-link i {

            transform:
                translateX(4px);

        }


        /* =====================================================
           PRODUCT SPLIT
        ====================================================== */

        .product-section {

            padding:
                100px 0;

        }


        .product-card {

            position:
                relative;

            height:
                100%;

            overflow:
                hidden;

            padding:
                42px;

            border-radius:
                27px;

            transition:
                transform .35s ease,
                box-shadow .35s ease;

        }


        .product-card:hover {

            transform:
                translateY(-8px);

        }


        .product-card.elldy {

            background:
                linear-gradient(
                    145deg,
                    #f2efff,
                    #ffffff
                );

            border:
                1px solid
                #e4ddff;

        }


        .product-card.crm {

            background:
                linear-gradient(
                    145deg,
                    #e6faf6,
                    #ffffff
                );

            border:
                1px solid
                #d2f0e9;

        }


        .product-icon {

            width:
                53px;

            height:
                53px;

            display:
                flex;

            align-items:
                center;

            justify-content:
                center;

            border-radius:
                15px;

            font-size:
                22px;

            margin-bottom:
                25px;

        }


        .elldy .product-icon {

            background:
                #e5dfff;

            color:
                var(--elldy);

        }


        .crm .product-icon {

            background:
                #d4f6ef;

            color:
                var(--crm);

        }


        .product-label {

            font-size:
                10px;

            font-weight:
                800;

            letter-spacing:
                .12em;

            text-transform:
                uppercase;

            color:
                #778397;

        }


        .product-title {

            margin-top:
                8px;

            font-size:
                35px;

        }


        .product-text {

            max-width:
                500px;

            margin-top:
                13px;

            color:
                var(--muted);

            font-size:
                14px;

            line-height:
                1.75;

        }


        .product-list {

            display:
                grid;

            grid-template-columns:
                repeat(2,1fr);

            gap:
                10px;

            margin-top:
                27px;

        }


        .product-list span {

            display:
                flex;

            align-items:
                center;

            gap:
                7px;

            color:
                #46536a;

            font-size:
                12px;

            font-weight:
                600;

        }


        .product-list i {

            font-size:
                13px;

        }


        .elldy .product-list i {

            color:
                var(--elldy);

        }


        .crm .product-list i {

            color:
                var(--crm);

        }


        /* =====================================================
           DATA FLOW
        ====================================================== */

        .flow-section {

            position:
                relative;

            overflow:
                hidden;

            background:
                var(--ink);

            color:
                #ffffff;

        }


        .flow-section .section-label {

            color:
                #8390a3;

        }


        .flow-section .section-title {

            color:
                #ffffff;

        }


        .flow-section .section-description {

            color:
                #9ba8b9;

        }


        .flow {

            position:
                relative;

            display:
                flex;

            align-items:
                center;

            justify-content:
                center;

            gap:
                0;

            margin-top:
                55px;

        }


        .flow-item {

            position:
                relative;

            width:
                175px;

            min-height:
                125px;

            padding:
                20px;

            display:
                flex;

            flex-direction:
                column;

            align-items:
                center;

            justify-content:
                center;

            text-align:
                center;

            border:
                1px solid
                rgba(255,255,255,.10);

            background:
                rgba(255,255,255,.035);

            backdrop-filter:
                blur(10px);

        }


        .flow-item:first-child {

            border-radius:
                18px 0 0 18px;

        }


        .flow-item:last-child {

            border-radius:
                0 18px 18px 0;

        }


        .flow-item i {

            margin-bottom:
                8px;

            font-size:
                22px;

        }


        .flow-item strong {

            font-size:
                13px;

        }


        .flow-item small {

            margin-top:
                4px;

            color:
                #8290a3;

            font-size:
                9px;

        }


        .flow-arrow {

            position:
                relative;

            z-index:
                2;

            width:
                30px;

            height:
                30px;

            display:
                flex;

            align-items:
                center;

            justify-content:
                center;

            margin:
                0 -15px;

            border-radius:
                50%;

            background:
                #ffffff;

            color:
                var(--ink);

            font-size:
                11px;

        }


        /* =====================================================
           ACADEMY
        ====================================================== */

        .academy-card {

            position:
                relative;

            overflow:
                hidden;

            padding:
                55px;

            border-radius:
                28px;

            background:
                linear-gradient(
                    120deg,
                    #fff7ea,
                    #ffffff
                );

            border:
                1px solid
                #f1e2ca;

        }


        .academy-card h2 {

            max-width:
                620px;

            font-size:
                clamp(
                    33px,
                    4vw,
                    52px
                );

        }


        .academy-card p {

            max-width:
                600px;

            margin-top:
                16px;

            color:
                var(--muted);

            line-height:
                1.75;

        }


        .academy-decoration {

            position:
                absolute;

            width:
                220px;

            height:
                220px;

            right:
                60px;

            top:
                45px;

            border-radius:
                50%;

            border:
                25px solid
                rgba(217,133,34,.08);

        }


        /* =====================================================
           FINAL CTA
        ====================================================== */

        .final-cta {

            padding:
                110px 0;

            text-align:
                center;

        }


        .final-cta h2 {

            max-width:
                800px;

            margin:
                auto;

            font-size:
                clamp(
                    38px,
                    5vw,
                    64px
                );

            line-height:
                1;

        }


        .final-cta p {

            max-width:
                570px;

            margin:
                20px auto 0;

            color:
                var(--muted);

            line-height:
                1.75;

        }


        .final-actions {

            display:
                flex;

            justify-content:
                center;

            flex-wrap:
                wrap;

            gap:
                12px;

            margin-top:
                30px;

        }


        /* =====================================================
           HIDDEN FILTER
        ====================================================== */

        .insight-card.hide-card {

            display:
                none;

        }


        /* =====================================================
           RESPONSIVE
        ====================================================== */

        @media (max-width: 991px) {

            .insights-hero {

                min-height:
                    auto;

                padding:
                    100px 0 70px;

            }


            .hero-visual {

                min-height:
                    350px;

                margin-top:
                    30px;

            }


            .featured-card {

                padding:
                    32px;

            }


            .flow {

                flex-wrap:
                    wrap;

                gap:
                    10px;

            }


            .flow-arrow {

                display:
                    none;

            }


            .flow-item,
            .flow-item:first-child,
            .flow-item:last-child {

                width:
                    calc(50% - 5px);

                border-radius:
                    15px;

            }

        }


        @media (max-width: 575px) {

            .section {

                padding:
                    70px 0;

            }


            .hero-title {

                font-size:
                    44px;

            }


            .hero-description {

                font-size:
                    15px;

            }


            .hero-visual {

                transform:
                    scale(.85);

                transform-origin:
                    center;

                min-height:
                    320px;

            }


            .featured-card {

                min-height:
                    470px;

                padding:
                    27px;

            }


            .featured-graphic {

                right:
                    -130px;

                bottom:
                    -90px;

            }


            .product-card {

                padding:
                    30px;

            }


            .product-list {

                grid-template-columns:
                    1fr;

            }


            .flow-item,
            .flow-item:first-child,
            .flow-item:last-child {

                width:
                    100%;

            }


            .academy-card {

                padding:
                    32px;

            }


            .academy-decoration {

                right:
                    -80px;

                top:
                    120px;

            }

        }

    </style>

</head>


<body>


<?php
/*
|--------------------------------------------------------------------------
| Use your existing Arklytics navbar here
|--------------------------------------------------------------------------
*/
?>

<?php include 'header.php'; ?>


<main class="insights-page">


    <!-- =====================================================
         HERO
    ====================================================== -->

    <section class="insights-hero">

        <div class="hero-grid"></div>

        <div class="hero-orb one"></div>
        <div class="hero-orb two"></div>


        <div class="container position-relative">

            <div class="row align-items-center">


                <div class="col-lg-7">

                    <div
                        class="eyebrow"
                        data-aos="fade-up">

                        <span class="eyebrow-dot"></span>

                        Arklytics Insights

                    </div>


                    <h1
                        class="hero-title"
                        data-aos="fade-up"
                        data-aos-delay="100">

                        Ideas that turn
                        <span>data into action.</span>

                    </h1>


                    <p
                        class="hero-description"
                        data-aos="fade-up"
                        data-aos-delay="200">

                        Explore practical ideas, perspectives and
                        knowledge across data intelligence, business
                        intelligence and customer relationship
                        management.

                    </p>


                    <div
                        class="hero-actions"
                        data-aos="fade-up"
                        data-aos-delay="300">

                        <a
                            href="#explore"
                            class="btn-primary-ark">

                            Explore Insights

                            <i class="bi bi-arrow-down"></i>

                        </a>


                        <a
                            href="https://elldy.com/"
                            target="_blank"
                            rel="noopener"
                            class="btn-outline-ark">

                            Discover Elldy

                            <i class="bi bi-arrow-up-right"></i>

                        </a>

                    </div>

                </div>


                <!-- HERO VISUAL -->

                <div
                    class="col-lg-5"
                    data-aos="fade-left"
                    data-aos-delay="200">

                    <div class="hero-visual">


                        <div class="insight-orbit"></div>


                        <div class="visual-core">

                            <i class="bi bi-lightbulb"></i>

                            <strong>Insight</strong>

                            <small>Understand. Decide. Act.</small>

                        </div>


                        <div class="visual-node n1">

                            <i class="bi bi-bar-chart-line"></i>

                            <span>Data & BI</span>

                        </div>


                        <div class="visual-node n2">

                            <i class="bi bi-people"></i>

                            <span>CRM</span>

                        </div>


                        <div class="visual-node n3">

                            <i class="bi bi-mortarboard"></i>

                            <span>Learning</span>

                        </div>


                        <div class="visual-node n4">

                            <i class="bi bi-stars"></i>

                            <span>AI Analytics</span>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>



    <!-- =====================================================
         FEATURED
    ====================================================== -->

    <section class="section" id="explore">

        <div class="container">


            <div
                class="section-heading mb-5"
                data-aos="fade-up">

                <span class="section-label">
                    Featured
                </span>

                <h2 class="section-title">
                    From raw data to
                    business intelligence.
                </h2>

                <p class="section-description">

                    Data is everywhere. The real value comes
                    from understanding what it means and knowing
                    what deserves your attention.

                </p>

            </div>


            <div
                class="featured-card"
                data-aos="fade-up">


                <div class="featured-content">

                    <span class="featured-badge">
                        DATA & BI
                    </span>


                    <h3 class="featured-title">

                        Your data is changing.
                        Are you seeing it?

                    </h3>


                    <p class="featured-text">

                        Business data changes every day.
                        Sales move, KPIs shift, customers respond,
                        and operational patterns emerge.

                        Modern intelligence is about more than
                        viewing reports — it is about understanding
                        movement, finding important signals and
                        turning those signals into decisions.

                    </p>


                    <a
                        href="https://elldy.com/"
                        target="_blank"
                        rel="noopener"
                        class="card-link">

                        See how Elldy approaches intelligence

                        <i class="bi bi-arrow-right"></i>

                    </a>

                </div>


                <div class="featured-graphic"></div>

            </div>

        </div>

    </section>



    <!-- =====================================================
         CATEGORIES
    ====================================================== -->

    <section class="section section-soft">

        <div class="container">

            <div
                class="text-center"
                data-aos="fade-up">

                <span class="section-label">
                    Explore
                </span>

                <h2 class="section-title">
                    Explore by topic
                </h2>

                <p class="section-description mx-auto">

                    Choose the area you want to explore.

                </p>

            </div>


            <!-- FILTERS -->

            <div
                class="filter-wrap"
                data-aos="fade-up"
                data-aos-delay="100">

                <button
                    class="filter-btn active"
                    data-filter="all">

                    All

                </button>


                <button
                    class="filter-btn"
                    data-filter="elldy">

                    Elldy

                </button>


                <button
                    class="filter-btn"
                    data-filter="crm">

                    CRM

                </button>


                <button
                    class="filter-btn"
                    data-filter="business">

                    Business

                </button>


                <button
                    class="filter-btn"
                    data-filter="data">

                    Data & BI

                </button>

            </div>


            <!-- INSIGHTS -->

            <div
                class="row g-4"
                id="insightGrid">


                <!-- ELLDY -->

                <div
                    class="col-md-6 col-lg-4 insight-item"
                    data-category="elldy data">

                    <article class="insight-card">

                        <span
                            class="card-category category-elldy">

                            ELLDY

                        </span>


                        <h3 class="card-title">

                            Why dashboards alone
                            aren't enough

                        </h3>


                        <p class="card-text">

                            Dashboards show performance.
                            Intelligence helps you understand
                            movement, context and what deserves
                            attention.

                        </p>


                        <a
                            href="https://elldy.com/"
                            target="_blank"
                            rel="noopener"
                            class="card-link">

                            Explore Elldy

                            <i class="bi bi-arrow-right"></i>

                        </a>

                    </article>

                </div>


                <!-- DATA -->

                <div
                    class="col-md-6 col-lg-4 insight-item"
                    data-category="data business">

                    <article class="insight-card">

                        <span
                            class="card-category category-business">

                            DATA & BI

                        </span>


                        <h3 class="card-title">

                            From reports to
                            real business intelligence

                        </h3>


                        <p class="card-text">

                            Reporting tells you what happened.
                            Business intelligence helps you
                            investigate what changed and why.

                        </p>


                        <a
                            href="#"
                            class="card-link">

                            Read insight

                            <i class="bi bi-arrow-right"></i>

                        </a>

                    </article>

                </div>


                <!-- AI -->

                <div
                    class="col-md-6 col-lg-4 insight-item"
                    data-category="elldy data">

                    <article class="insight-card">

                        <span
                            class="card-category category-elldy">

                            AI ANALYTICS

                        </span>


                        <h3 class="card-title">

                            Finding signals
                            inside changing data

                        </h3>


                        <p class="card-text">

                            AI-powered analytics can help
                            identify changes, anomalies,
                            trends and signals that deserve
                            attention.

                        </p>


                        <a
                            href="https://elldy.com/"
                            target="_blank"
                            rel="noopener"
                            class="card-link">

                            Discover Elldy

                            <i class="bi bi-arrow-right"></i>

                        </a>

                    </article>

                </div>


                <!-- CRM -->

                <div
                    class="col-md-6 col-lg-4 insight-item"
                    data-category="crm business">

                    <article class="insight-card">

                        <span
                            class="card-category category-crm">

                            CRM

                        </span>


                        <h3 class="card-title">

                            Customer conversations
                            are business data

                        </h3>


                        <p class="card-text">

                            Customer interactions contain
                            valuable information about leads,
                            needs, follow-ups and relationships.

                        </p>


                        <a
                            href="https://connect.arklytics.in/"
                            target="_blank"
                            rel="noopener"
                            class="card-link">

                            Explore CRM

                            <i class="bi bi-arrow-right"></i>

                        </a>

                    </article>

                </div>


                <!-- CRM -->

                <div
                    class="col-md-6 col-lg-4 insight-item"
                    data-category="crm">

                    <article class="insight-card">

                        <span
                            class="card-category category-crm">

                            CUSTOMER MANAGEMENT

                        </span>


                        <h3 class="card-title">

                            Better customer
                            engagement starts with context

                        </h3>


                        <p class="card-text">

                            Connecting customer conversations,
                            lead activity and follow-ups can
                            create a more complete customer view.

                        </p>


                        <a
                            href="https://connect.arklytics.in/"
                            target="_blank"
                            rel="noopener"
                            class="card-link">

                            Explore Connect

                            <i class="bi bi-arrow-right"></i>

                        </a>

                    </article>

                </div>


                <!-- BUSINESS -->

                <div
                    class="col-md-6 col-lg-4 insight-item"
                    data-category="business data">

                    <article class="insight-card">

                        <span
                            class="card-category category-business">

                            BUSINESS

                        </span>


                        <h3 class="card-title">

                            Data should answer
                            business questions

                        </h3>


                        <p class="card-text">

                            The goal of analytics is not more
                            charts. It is better understanding,
                            clearer priorities and stronger
                            decisions.

                        </p>


                        <a
                            href="#"
                            class="card-link">

                            Read insight

                            <i class="bi bi-arrow-right"></i>

                        </a>

                    </article>

                </div>

            </div>

        </div>

    </section>



    <!-- =====================================================
         TWO PRODUCTS — CLEAR SEPARATION
    ====================================================== -->

    <section class="product-section">

        <div class="container">


            <div
                class="text-center mb-5"
                data-aos="fade-up">

                <span class="section-label">
                    Our Platforms
                </span>

                <h2 class="section-title">

                    Two different problems.
                    Two different solutions.

                </h2>

                <p class="section-description mx-auto">

                    Arklytics brings together technology for
                    business intelligence and customer
                    relationship management — each designed
                    for a different business need.

                </p>

            </div>


            <div class="row g-4">


                <!-- ELLDY -->

                <div
                    class="col-lg-6"
                    data-aos="fade-right">

                    <div class="product-card elldy">


                        <div class="product-icon">

                            <i class="bi bi-stars"></i>

                        </div>


                        <span class="product-label">
                            Data Intelligence
                        </span>


                        <h3 class="product-title">
                            Elldy
                        </h3>


                        <p class="product-text">

                            A data and business intelligence
                            platform designed to help businesses
                            connect data, analyze performance,
                            build dashboards and uncover
                            meaningful business signals.

                        </p>


                        <div class="product-list">

                            <span>
                                <i class="bi bi-check-circle"></i>
                                Data & BI
                            </span>

                            <span>
                                <i class="bi bi-check-circle"></i>
                                Dashboards
                            </span>

                            <span>
                                <i class="bi bi-check-circle"></i>
                                Elldy Bricks
                            </span>

                            <span>
                                <i class="bi bi-check-circle"></i>
                                AI Analyst
                            </span>

                            <span>
                                <i class="bi bi-check-circle"></i>
                                Analysis
                            </span>

                            <span>
                                <i class="bi bi-check-circle"></i>
                                Business signals
                            </span>

                        </div>


                        <div class="mt-4">

                            <a
                                href="https://elldy.com/"
                                target="_blank"
                                rel="noopener"
                                class="btn-primary-ark">

                                Explore Elldy

                                <i class="bi bi-arrow-up-right"></i>

                            </a>

                        </div>

                    </div>

                </div>



                <!-- CRM -->

                <div
                    class="col-lg-6"
                    data-aos="fade-left">

                    <div class="product-card crm">


                        <div class="product-icon">

                            <i class="bi bi-people"></i>

                        </div>


                        <span class="product-label">
                            Customer Relationship Management
                        </span>


                        <h3 class="product-title">
                            Connect CRM
                        </h3>


                        <p class="product-text">

                            A separate CRM solution focused on
                            customer conversations, lead
                            management, follow-ups and
                            customer engagement.

                        </p>


                        <div class="product-list">

                            <span>
                                <i class="bi bi-check-circle"></i>
                                Customer conversations
                            </span>

                            <span>
                                <i class="bi bi-check-circle"></i>
                                Lead management
                            </span>

                            <span>
                                <i class="bi bi-check-circle"></i>
                                Follow-ups
                            </span>

                            <span>
                                <i class="bi bi-check-circle"></i>
                                Customer engagement
                            </span>

                            <span>
                                <i class="bi bi-check-circle"></i>
                                Campaigns
                            </span>

                            <span>
                                <i class="bi bi-check-circle"></i>
                                CRM workflows
                            </span>

                        </div>


                        <div class="mt-4">

                            <a
                                href="https://connect.arklytics.in/"
                                target="_blank"
                                rel="noopener"
                                class="btn-primary-ark">

                                Explore CRM

                                <i class="bi bi-arrow-up-right"></i>

                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>



    <!-- =====================================================
         ELLDY DATA FLOW
    ====================================================== -->

    <section class="section flow-section">

        <div class="container">


            <div
                class="section-heading"
                data-aos="fade-up">

                <span class="section-label">
                    Elldy
                </span>

                <h2 class="section-title">

                    From connected data
                    to useful intelligence.

                </h2>


                <p class="section-description">

                    Elldy's workflow brings business data
                    closer to the decisions that matter.

                </p>

            </div>


            <div
                class="flow"
                data-aos="fade-up"
                data-aos-delay="150">


                <div class="flow-item">

                    <i
                        class="bi bi-hdd-network"
                        style="color:#8b7cff;"></i>

                    <strong>
                        Elldy Bricks
                    </strong>

                    <small>
                        Connect data & systems
                    </small>

                </div>


                <div class="flow-arrow">
                    <i class="bi bi-chevron-right"></i>
                </div>


                <div class="flow-item">

                    <i
                        class="bi bi-arrow-left-right"
                        style="color:#48cdb8;"></i>

                    <strong>
                        API
                    </strong>

                    <small>
                        Move operational data
                    </small>

                </div>


                <div class="flow-arrow">
                    <i class="bi bi-chevron-right"></i>
                </div>


                <div class="flow-item">

                    <i
                        class="bi bi-stars"
                        style="color:#c7bfff;"></i>

                    <strong>
                        Elldy Analyst
                    </strong>

                    <small>
                        Detect important signals
                    </small>

                </div>


                <div class="flow-arrow">
                    <i class="bi bi-chevron-right"></i>
                </div>


                <div class="flow-item">

                    <i
                        class="bi bi-grid-1x2"
                        style="color:#5dd5c2;"></i>

                    <strong>
                        Analysis Workspace
                    </strong>

                    <small>
                        Explore & understand
                    </small>

                </div>

            </div>

        </div>

    </section>



    <!-- =====================================================
         ACADEMY
    ====================================================== -->

    <section class="section">

        <div class="container">

            <div
                class="academy-card"
                data-aos="fade-up">


                <div class="academy-decoration"></div>


                <span class="section-label">
                    Elldy Academy
                </span>


                <h2>

                    Learn the skills
                    behind better decisions.

                </h2>


                <p>

                    Build practical knowledge in data analytics,
                    business intelligence, dashboards and
                    data-driven thinking through Elldy Academy.

                </p>


                <a
                    href="https://academy.elldy.com/"
                    target="_blank"
                    rel="noopener"
                    class="btn-primary-ark mt-3">

                    Explore Academy

                    <i class="bi bi-arrow-up-right"></i>

                </a>

            </div>

        </div>

    </section>



    <!-- =====================================================
         FINAL CTA
    ====================================================== -->

    <section class="final-cta">

        <div class="container">

            <span
                class="section-label"
                data-aos="fade-up">

                Keep Exploring

            </span>


            <h2
                data-aos="fade-up"
                data-aos-delay="100">

                Your data already
                has a story.

            </h2>


            <p
                data-aos="fade-up"
                data-aos-delay="180">

                Discover the ideas, platforms and tools
                that can help you understand it better.

            </p>


            <div
                class="final-actions"
                data-aos="fade-up"
                data-aos-delay="250">


                <a
                    href="https://elldy.com/"
                    target="_blank"
                    rel="noopener"
                    class="btn-primary-ark">

                    Explore Elldy

                    <i class="bi bi-arrow-up-right"></i>

                </a>


                <a
                    href="https://connect.arklytics.in/"
                    target="_blank"
                    rel="noopener"
                    class="btn-outline-ark">

                    Explore CRM

                    <i class="bi bi-arrow-up-right"></i>

                </a>


                <a
                    href="contact.php"
                    class="btn-outline-ark">

                    Talk to Arklytics

                    <i class="bi bi-arrow-right"></i>

                </a>

            </div>

        </div>

    </section>


</main>

<footer>
    <?php include 'footer.php'; ?>
</footer>



<!-- =====================================================
     BOOTSTRAP JS
====================================================== -->

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script>


<!-- =====================================================
     AOS
====================================================== -->

<script
    src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js">
</script>


<script>

document.addEventListener(
    "DOMContentLoaded",
    function () {


        /* =================================================
           AOS
        ================================================= */

        AOS.init({

            duration: 750,

            easing:
                "ease-out-cubic",

            once: true,

            offset: 70

        });


        /* =================================================
           INSIGHT FILTER
        ================================================= */

        const buttons =
            document.querySelectorAll(
                ".filter-btn"
            );

        const cards =
            document.querySelectorAll(
                ".insight-item"
            );


        buttons.forEach(
            function (button) {

                button.addEventListener(
                    "click",
                    function () {


                        /* Active button */

                        buttons.forEach(
                            function (btn) {

                                btn.classList.remove(
                                    "active"
                                );

                            }
                        );


                        this.classList.add(
                            "active"
                        );


                        const filter =
                            this.dataset.filter;


                        cards.forEach(
                            function (card) {

                                const categories =
                                    card.dataset.category;


                                if (
                                    filter === "all" ||
                                    categories.includes(
                                        filter
                                    )
                                ) {

                                    card.classList.remove(
                                        "hide-card"
                                    );

                                    card.animate(
                                        [
                                            {
                                                opacity: 0,
                                                transform:
                                                    "translateY(10px)"
                                            },
                                            {
                                                opacity: 1,
                                                transform:
                                                    "translateY(0)"
                                            }
                                        ],
                                        {
                                            duration: 300,
                                            easing:
                                                "ease-out"
                                        }
                                    );

                                } else {

                                    card.classList.add(
                                        "hide-card"
                                    );

                                }

                            }
                        );

                    }
                );

            }
        );


        /* =================================================
           PARALLAX HERO
        ================================================= */

        const hero =
            document.querySelector(
                ".insights-hero"
            );

        const orbit =
            document.querySelector(
                ".insight-orbit"
            );


        window.addEventListener(
            "scroll",
            function () {

                if (
                    !hero ||
                    !orbit
                ) {
                    return;
                }


                const scroll =
                    window.scrollY;


                if (
                    scroll < hero.offsetHeight
                ) {

                    orbit.style.transform =
                        `translateY(${scroll * .08}px)`;

                }

            },
            {
                passive: true
            }
        );


        /* =================================================
           CARD TILT
        ================================================= */

        document
            .querySelectorAll(
                ".insight-card"
            )
            .forEach(
                function (card) {

                    card.addEventListener(
                        "mousemove",
                        function (event) {

                            const rect =
                                card.getBoundingClientRect();


                            const x =
                                event.clientX -
                                rect.left;


                            const y =
                                event.clientY -
                                rect.top;


                            const rotateX =
                                ((y / rect.height) -
                                .5) * -2;


                            const rotateY =
                                ((x / rect.width) -
                                .5) * 2;


                            card.style.transform =
                                `translateY(-7px)
                                 rotateX(${rotateX}deg)
                                 rotateY(${rotateY}deg)`;

                        }
                    );


                    card.addEventListener(
                        "mouseleave",
                        function () {

                            card.style.transform =
                                "";

                        }
                    );

                }
            );


    });

</script>


</body>
</html>