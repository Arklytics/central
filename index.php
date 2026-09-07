<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Arklytics Labs | Where Intelligence Takes Shape</title>

    <link rel="icon" type="image/png" href="images/arklytics-favicon.png">

    <meta name="description"
          content="Elldy is a cloud-based Data Intelligence and Business Intelligence platform for connecting data, building dashboards, analyzing business performance, detecting anomalies and generating intelligent insights.">

    <!-- =====================================================
         BOOTSTRAP
    ====================================================== -->

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
        rel="stylesheet">


    <!-- =====================================================
         GOOGLE FONT
    ====================================================== -->

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Space+Grotesk:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="css/style.css">


    <style>

        /* =====================================================
           ROOT
        ====================================================== */

        :root {

            --bg: #050811;
            --bg2: #080d17;
            --panel: #0d1421;
            --panel2: #111b2b;

            --white: #ffffff;
            --text: #111827;
            --muted: #667085;

            --cyan: #16d9c5;
            --cyan2: #5ef2df;

            --violet: #806cff;
            --blue: #4d7cff;

            --orange: #ff9658;

            --line: rgba(255,255,255,.10);

            --light: #f5f7fa;

            --gradient:
                linear-gradient(
                    110deg,
                    #16d9c5 0%,
                    #4d7cff 48%,
                    #806cff 100%
                );
        }


        * {
            box-sizing: border-box;
        }


        html {
            scroll-behavior: smooth;
        }


        body {

            margin: 0;

            font-family:
                "DM Sans",
                sans-serif;

            color: var(--text);

            background: #ffffff;

            overflow-x: hidden;
        }


        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {

            font-family:
                "Space Grotesk",
                sans-serif;
        }


        a {
            text-decoration: none;
        }


        .container {

            max-width: 1240px;
        }


        /* =====================================================
           NAVBAR
        ====================================================== */

        .navbar {

            position: fixed;

            top: 0;

            width: 100%;

            z-index: 9999;

            padding: 20px 0;

            transition:
                .35s ease;
        }


        .navbar.scrolled {

            padding: 11px 0;

            background:
                #ffffff;

            backdrop-filter:
                blur(20px);

            box-shadow:
                0 15px 50px
                rgba(0,0,0,.20);
        }


        .navbar-brand {

            color: #fff !important;

            font-family:
                "Space Grotesk";

            font-size: 25px;

            font-weight: 700;

            letter-spacing:
                -.05em;
        }


        .brand-dot {

            display: inline-block;

            width: 7px;

            height: 7px;

            margin-left: 4px;

            border-radius: 50%;

            background:
                var(--cyan);

            box-shadow:
                0 0 18px
                var(--cyan);
        }


        .navbar-nav .nav-link {

            color:
                #182230
                !important;

            font-size: 13px;

            font-weight: 600;

            margin:
                0 8px;

            transition:
                .25s;
        }


        .navbar-nav .nav-link:hover {

            color: #087ea4 !important;
        }


        .nav-login {

            color: #fff;

            font-size: 13px;

            font-weight: 700;

            margin-right: 16px;
        }


        .nav-cta {

            display:
                inline-flex;

            align-items:
                center;

            gap: 8px;

            padding:
                10px 17px;

            border-radius:
                10px;

            background: #fff;

            color: #080b11;

            font-size: 12px;

            font-weight: 800;

            transition:
                .3s;
        }


        .nav-cta:hover {

            transform:
                translateY(-2px);

            color: #080b11;

            box-shadow:
                0 12px 30px
                rgba(255,255,255,.12);
        }


        /* =====================================================
           HERO
        ====================================================== */

        .hero {

            position: relative;

            min-height: 100vh;

            padding:
                165px 0
                90px;

            color: #fff;

            overflow: hidden;

            background:

                radial-gradient(
                    circle at 75% 15%,
                    rgba(77,124,255,.18),
                    transparent 27%
                ),

                radial-gradient(
                    circle at 20% 80%,
                    rgba(22,217,197,.10),
                    transparent 30%
                ),

                #050811;
        }


        .hero-grid {

            position: absolute;

            inset: 0;

            opacity: .14;

            background-image:

                linear-gradient(
                    rgba(255,255,255,.08) 1px,
                    transparent 1px
                ),

                linear-gradient(
                    90deg,
                    rgba(255,255,255,.08) 1px,
                    transparent 1px
                );

            background-size:
                60px 60px;

            mask-image:
                radial-gradient(
                    ellipse at center,
                    black,
                    transparent 75%
                );
        }


        .hero-glow {

            position: absolute;

            width: 450px;

            height: 450px;

            border-radius: 50%;

            pointer-events: none;

            transform:
                translate(-50%,-50%);

            background:

                radial-gradient(
                    circle,
                    rgba(22,217,197,.11),
                    transparent 68%
                );
        }


        .hero-content {

            position: relative;

            z-index: 5;
        }


        .eyebrow {

            display:
                inline-flex;

            align-items:
                center;

            gap: 9px;

            padding:
                8px 13px;

            border:
                1px solid
                rgba(255,255,255,.12);

            border-radius:
                999px;

            color:
                #b7c1d1;

            background:
                rgba(255,255,255,.035);

            font-size: 11px;

            font-weight: 800;

            letter-spacing:
                .04em;
        }


        .live-dot {

            width: 7px;

            height: 7px;

            border-radius: 50%;

            background:
                var(--cyan);

            box-shadow:
                0 0 15px
                var(--cyan);

            animation:
                livePulse 2s infinite;
        }


        @keyframes livePulse {

            0%,
            100% {
                opacity: 1;
                transform: scale(1);
            }

            50% {
                opacity: .35;
                transform: scale(.65);
            }
        }


        .hero h1 {

            margin-top: 27px;

            font-size:
                clamp(
                    3.1rem,
                    7vw,
                    6.4rem
                );

            line-height:
                .93;

            letter-spacing:
                -.065em;

            font-weight:
                600;
        }


        .gradient-text {

            background:
                var(--gradient);

            -webkit-background-clip:
                text;

            background-clip:
                text;

            color:
                transparent;
        }


        .hero-copy {

            max-width:
                650px;

            margin-top:
                28px;

            color:
                #9ba8bc;

            font-size:
                18px;

            line-height:
                1.75;
        }


        .hero-actions {

            display:
                flex;

            flex-wrap:
                wrap;

            gap:
                11px;

            margin-top:
                34px;
        }


        .btn-main {

            display:
                inline-flex;

            align-items:
                center;

            gap:
                8px;

            padding:
                14px 21px;

            border-radius:
                11px;

            background:
                #fff;

            color:
                #080b11;

            font-size:
                13px;

            font-weight:
                800;

            transition:
                .3s;
        }


        .btn-main:hover {

            transform:
                translateY(-3px);

            color:
                #080b11;

            box-shadow:
                0 16px 40px
                rgba(255,255,255,.12);
        }


        .btn-outline-main {

            display:
                inline-flex;

            align-items:
                center;

            gap:
                8px;

            padding:
                13px 20px;

            border:
                1px solid
                rgba(255,255,255,.16);

            border-radius:
                11px;

            color:
                #fff;

            font-size:
                13px;

            font-weight:
                700;

            transition:
                .3s;
        }


        .btn-outline-main:hover {

            background:
                rgba(255,255,255,.07);

            color:
                #fff;

            transform:
                translateY(-3px);
        }


        .hero-proof {

            display:
                flex;

            flex-wrap:
                wrap;

            gap:
                18px;

            margin-top:
                25px;

            color:
                #6f7d92;

            font-size:
                10px;

            font-weight:
                600;
        }


        .hero-proof span {

            display:
                flex;

            align-items:
                center;

            gap:
                6px;
        }


        .hero-proof i {

            color:
                var(--cyan);
        }


        /* =====================================================
           HERO DASHBOARD
        ====================================================== */

        .hero-dashboard-wrap {

            position:
                relative;

            min-height:
                530px;
        }


        .orbit {

            position:
                absolute;

            width:
                470px;

            height:
                470px;

            left:
                50%;

            top:
                50%;

            transform:
                translate(-50%,-50%);

            border:
                1px solid
                rgba(255,255,255,.07);

            border-radius:
                50%;

            animation:
                orbit 25s linear infinite;
        }


        .orbit:before {

            content: "";

            position:
                absolute;

            width:
                9px;

            height:
                9px;

            border-radius:
                50%;

            background:
                var(--cyan);

            box-shadow:
                0 0 25px
                var(--cyan);

            top:
                20px;

            left:
                50%;
        }


        .orbit-two {

            width:
                350px;

            height:
                350px;

            animation-duration:
                18s;

            animation-direction:
                reverse;

            border-color:
                rgba(128,108,255,.07);
        }


        .orbit-two:before {

            background:
                var(--violet);

            box-shadow:
                0 0 25px
                var(--violet);

            top:
                auto;

            bottom:
                15px;
        }


        @keyframes orbit {

            from {
                transform:
                    translate(-50%,-50%)
                    rotate(0);
            }

            to {
                transform:
                    translate(-50%,-50%)
                    rotate(360deg);
            }
        }


        .dashboard {

            position:
                absolute;

            left:
                50%;

            top:
                50%;

            width:
                455px;

            max-width:
                94%;

            transform:
                translate(-50%,-50%);

            padding:
                18px;

            border:
                1px solid
                rgba(255,255,255,.13);

            border-radius:
                20px;

            background:
                rgba(13,20,33,.88);

            backdrop-filter:
                blur(20px);

            box-shadow:
                0 40px 100px
                rgba(0,0,0,.45);

            animation:
                dashboardFloat 6s
                ease-in-out infinite;
        }


        @keyframes dashboardFloat {

            0%,
            100% {
                transform:
                    translate(-50%,-50%);
            }

            50% {
                transform:
                    translate(-50%,-54%);
            }
        }


        .window-bar {

            display:
                flex;

            align-items:
                center;

            gap:
                6px;

            padding-bottom:
                13px;

            border-bottom:
                1px solid
                rgba(255,255,255,.07);
        }


        .window-circle {

            width:
                7px;

            height:
                7px;

            border-radius:
                50%;

            background:
                #4d5a6f;
        }


        .window-label {

            margin-left:
                auto;

            color:
                #5e6c80;

            font-size:
                8px;

            font-weight:
                700;
        }


        .dashboard-head {

            display:
                flex;

            justify-content:
                space-between;

            align-items:
                center;

            margin-top:
                17px;
        }


        .dashboard-head strong {

            color:
                #fff;

            font-size:
                13px;
        }


        .dashboard-head small {

            color:
                #657287;

            font-size:
                8px;
        }


        .live-chip {

            display:
                inline-flex;

            align-items:
                center;

            gap:
                5px;

            padding:
                6px 9px;

            border-radius:
                999px;

            color:
                var(--cyan);

            background:
                rgba(22,217,197,.07);

            border:
                1px solid
                rgba(22,217,197,.14);

            font-size:
                8px;

            font-weight:
                800;
        }


        .live-chip:before {

            content: "";

            width:
                5px;

            height:
                5px;

            border-radius:
                50%;

            background:
                var(--cyan);

            box-shadow:
                0 0 10px
                var(--cyan);
        }


        .metric-grid {

            display:
                grid;

            grid-template-columns:
                repeat(2,1fr);

            gap:
                8px;

            margin-top:
                13px;
        }


        .metric {

            padding:
                13px;

            border:
                1px solid
                rgba(255,255,255,.07);

            border-radius:
                11px;

            background:
                rgba(255,255,255,.025);
        }


        .metric small {

            color:
                #69768b;

            font-size:
                8px;

            text-transform:
                uppercase;
        }


        .metric strong {

            display:
                block;

            margin-top:
                4px;

            color:
                #fff;

            font-family:
                "Space Grotesk";

            font-size:
                19px;
        }


        .metric span {

            color:
                var(--cyan);

            font-size:
                8px;
        }


        .metric span.down {

            color:
                #ff8a8a;
        }


        .chart-box {

            height:
                125px;

            margin-top:
                9px;

            padding:
                13px;

            border:
                1px solid
                rgba(255,255,255,.07);

            border-radius:
                11px;

            background:
                rgba(255,255,255,.018);
        }


        .chart-title {

            color:
                #8996a9;

            font-size:
                8px;

            font-weight:
                700;
        }


        .chart-svg {

            width:
                100%;

            height:
                88px;

            margin-top:
                3px;
        }


        .ai-alert {

            margin-top:
                9px;

            padding:
                11px;

            border:
                1px solid
                rgba(128,108,255,.18);

            border-radius:
                11px;

            background:
                linear-gradient(
                    110deg,
                    rgba(128,108,255,.09),
                    rgba(22,217,197,.04)
                );
        }


        .ai-alert-label {

            color:
                var(--violet);

            font-size:
                8px;

            font-weight:
                800;

            text-transform:
                uppercase;
        }


        .ai-alert strong {

            display:
                block;

            margin-top:
                4px;

            color:
                #fff;

            font-size:
                10px;
        }


        .ai-alert p {

            margin:
                3px 0 0;

            color:
                #68768a;

            font-size:
                8px;
        }


        /* =====================================================
           INTRO
        ====================================================== */

        .section {

            padding:
                110px 0;
        }


        .section-light {

            background:
                #fff;
        }


        .section-soft {

            background:
                var(--light);
        }


        .section-dark {

            background:
                var(--bg);

            color:
                #fff;
        }


        .section-kicker {

            color:
                var(--blue);

            font-size:
                10px;

            font-weight:
                800;

            letter-spacing:
                .14em;

            text-transform:
                uppercase;
        }


        .section-title {

            margin-top:
                13px;

            font-size:
                clamp(
                    2.3rem,
                    5vw,
                    4.2rem
                );

            line-height:
                1.02;

            letter-spacing:
                -.055em;
        }


        .section-copy {

            max-width:
                690px;

            margin-top:
                20px;

            color:
                var(--muted);

            font-size:
                16px;

            line-height:
                1.8;
        }


        /* =====================================================
           DI + BI
        ====================================================== */

        .di-bi {

            margin-top:
                60px;
        }


        .di-card {

            height:
                100%;

            padding:
                40px;

            border-radius:
                25px;

            transition:
                .35s;

            overflow:
                hidden;

            position:
                relative;
        }


        .di-card:hover {

            transform:
                translateY(-8px);

            box-shadow:
                0 30px 70px
                rgba(20,30,50,.10);
        }


        .bi-card {

            background:
                #f1f4ff;

            border:
                1px solid
                #e0e6fa;
        }


        .intelligence-card {

            background:
                #08111d;

            color:
                #fff;
        }


        .di-icon {

            width:
                55px;

            height:
                55px;

            display:
                grid;

            place-items:
                center;

            border-radius:
                15px;

            font-size:
                23px;
        }


        .bi-card .di-icon {

            background:
                #fff;

            color:
                var(--blue);
        }


        .intelligence-card .di-icon {

            background:
                rgba(22,217,197,.08);

            color:
                var(--cyan);
        }


        .di-card h3 {

            margin-top:
                25px;

            font-size:
                30px;

            letter-spacing:
                -.04em;
        }


        .di-card p {

            margin-top:
                13px;

            line-height:
                1.75;

            font-size:
                14px;
        }


        .intelligence-card p {

            color:
                #8997ab;
        }


        .feature-list {

            margin-top:
                25px;

            padding:
                0;

            list-style:
                none;
        }


        .feature-list li {

            display:
                flex;

            align-items:
                center;

            gap:
                9px;

            padding:
                9px 0;

            font-size:
                12px;

            font-weight:
                600;
        }


        .feature-list i {

            color:
                var(--cyan);
        }


        /* =====================================================
           PLATFORM
        ====================================================== */

        .platform {

            position:
                relative;

            overflow:
                hidden;

            background:
                var(--bg);

            color:
                #fff;
        }


        .platform-glow {

            position:
                absolute;

            width:
                600px;

            height:
                600px;

            right:
                -250px;

            top:
                -250px;

            border-radius:
                50%;

            background:
                radial-gradient(
                    circle,
                    rgba(77,124,255,.13),
                    transparent 68%
                );
        }


        .platform-head {

            position:
                relative;

            z-index:
                2;
        }


        .platform-head .section-copy {

            color:
                #7d8a9e;
        }


        .platform-flow {

            position:
                relative;

            z-index:
                2;

            margin-top:
                65px;
        }


        .flow-line {

            position:
                absolute;

            left:
                8%;

            right:
                8%;

            top:
                48px;

            height:
                1px;

            background:
                linear-gradient(
                    90deg,
                    transparent,
                    rgba(22,217,197,.5),
                    rgba(77,124,255,.5),
                    transparent
                );
        }


        .flow-cards {

            display:
                grid;

            grid-template-columns:
                repeat(4,1fr);

            gap:
                14px;

            position:
                relative;
        }


        .flow-card {

            padding:
                28px 22px;

            min-height:
                205px;

            border:
                1px solid
                rgba(255,255,255,.08);

            border-radius:
                18px;

            background:
                rgba(255,255,255,.035);

            backdrop-filter:
                blur(12px);

            transition:
                .35s;
        }


        .flow-card:hover {

            transform:
                translateY(-9px);

            border-color:
                rgba(22,217,197,.30);

            background:
                rgba(255,255,255,.055);
        }


        .flow-number {

            font-family:
                "Space Grotesk";

            color:
                var(--cyan);

            font-size:
                11px;

            font-weight:
                800;
        }


        .flow-card i {

            display:
                block;

            margin-top:
                23px;

            font-size:
                25px;

            color:
                #fff;
        }


        .flow-card h5 {

            margin-top:
                13px;

            font-size:
                16px;
        }


        .flow-card p {

            color:
                #738197;

            font-size:
                11px;

            line-height:
                1.6;
        }


        /* =====================================================
           BRICKS
        ====================================================== */

        .bricks {

            background:
                #fff;
        }


        .bricks-architecture {

            position:
                relative;

            margin-top:
                55px;

            padding:
                45px;

            border:
                1px solid
                #e4e8ef;

            border-radius:
                25px;

            background:
                #f7f9fc;

            overflow:
                hidden;
        }


        .brick-grid {

            display:
                grid;

            grid-template-columns:
                1fr
                120px
                1fr;

            gap:
                20px;

            align-items:
                center;
        }


        .architecture-box {

            padding:
                25px;

            border:
                1px solid
                #e0e5ed;

            border-radius:
                18px;

            background:
                #fff;

            box-shadow:
                0 15px 40px
                rgba(30,40,60,.05);
        }


        .architecture-box.dark {

            background:
                #09111d;

            color:
                #fff;

            border-color:
                #172234;
        }


        .architecture-title {

            color:
                #8a95a6;

            font-size:
                9px;

            font-weight:
                800;

            text-transform:
                uppercase;

            letter-spacing:
                .12em;
        }


        .architecture-box h4 {

            margin-top:
                11px;

            font-size:
                20px;
        }


        .architecture-list {

            margin:
                15px 0 0;

            padding:
                0;

            list-style:
                none;
        }


        .architecture-list li {

            padding:
                7px 0;

            border-bottom:
                1px solid
                #edf0f4;

            color:
                #657084;

            font-size:
                11px;
        }


        .architecture-box.dark .architecture-list li {

            border-color:
                rgba(255,255,255,.07);

            color:
                #7d899c;
        }


        .brick-center {

            position:
                relative;

            display:
                grid;

            place-items:
                center;

            text-align:
                center;
        }


        .brick-icon {

            width:
                90px;

            height:
                90px;

            display:
                grid;

            place-items:
                center;

            border-radius:
                25px;

            background:
                #09111d;

            color:
                var(--cyan);

            font-size:
                30px;

            box-shadow:
                0 0 50px
                rgba(22,217,197,.12);

            animation:
                brickPulse 3s infinite;
        }


        @keyframes brickPulse {

            0%,
            100% {
                box-shadow:
                    0 0 30px
                    rgba(22,217,197,.08);
            }

            50% {
                box-shadow:
                    0 0 65px
                    rgba(22,217,197,.22);
            }
        }


        .brick-center span {

            display:
                block;

            margin-top:
                10px;

            color:
                #687589;

            font-size:
                9px;

            font-weight:
                800;
        }


        .architecture-arrow {

            position:
                absolute;

            top:
                50%;

            width:
                100px;

            height:
                2px;

            background:
                linear-gradient(
                    90deg,
                    #d8dee8,
                    var(--cyan)
                );

            overflow:
                hidden;
        }


        .architecture-arrow:after {

            content: "";

            position:
                absolute;

            left:
                -30px;

            top:
                -3px;

            width:
                25px;

            height:
                8px;

            border-radius:
                999px;

            background:
                var(--cyan);

            box-shadow:
                0 0 15px
                var(--cyan);

            animation:
                dataFlow 2s
                linear infinite;
        }


        .arrow-left {

            right:
                calc(100% + 10px);

            transform:
                rotate(180deg);
        }


        .arrow-right {

            left:
                calc(100% + 10px);
        }


        @keyframes dataFlow {

            from {
                left:
                    -30px;
            }

            to {
                left:
                    100%;
            }
        }


        .brick-points {

            margin-top:
                35px;
        }


        .brick-point {

            display:
                flex;

            gap:
                13px;

            padding:
                18px 0;

            border-bottom:
                1px solid
                #e9edf2;
        }


        .brick-point i {

            color:
                var(--cyan);

            font-size:
                19px;
        }


        .brick-point strong {

            display:
                block;

            font-size:
                13px;
        }


        .brick-point span {

            display:
                block;

            margin-top:
                3px;

            color:
                #718096;

            font-size:
                11px;

            line-height:
                1.5;
        }


        .brick-badge-row {

            display:
                flex;

            flex-wrap:
                wrap;

            gap:
                8px;

            margin-top:
                22px;
        }


        .brick-badge {

            display:
                inline-flex;

            align-items:
                center;

            gap:
                6px;

            padding:
                8px 12px;

            border:
                1px solid
                #e0e5ed;

            border-radius:
                999px;

            color:
                #46536b;

            font-size:
                10px;

            font-weight:
                700;

            background:
                #fff;
        }


        .brick-badge i {

            color:
                var(--cyan);
        }


        /* =====================================================
           ANALYST
        ====================================================== */

        .analyst {

            background:
                #f4f6fb;
        }


        .analyst-console {

            margin-top:
                55px;

            padding:
                25px;

            border-radius:
                22px;

            background:
                #09111d;

            box-shadow:
                0 30px 80px
                rgba(20,30,50,.14);
        }


        .console-head {

            display:
                flex;

            justify-content:
                space-between;

            align-items:
                center;

            padding-bottom:
                18px;

            border-bottom:
                1px solid
                rgba(255,255,255,.08);
        }


        .console-title {

            color:
                #fff;

            font-family:
                "Space Grotesk";

            font-size:
                15px;

            font-weight:
                600;
        }


        .console-status {

            color:
                var(--cyan);

            font-size:
                9px;

            font-weight:
                800;
        }


        .signal-grid {

            display:
                grid;

            grid-template-columns:
                repeat(3,1fr);

            gap:
                11px;

            margin-top:
                15px;
        }


        .signal {

            padding:
                18px;

            border:
                1px solid
                rgba(255,255,255,.07);

            border-radius:
                14px;

            background:
                rgba(255,255,255,.025);

            transition:
                .3s;
        }


        .signal:hover {

            transform:
                translateY(-5px);

            background:
                rgba(255,255,255,.045);
        }


        .signal-type {

            display:
                flex;

            align-items:
                center;

            gap:
                7px;

            color:
                #748197;

            font-size:
                8px;

            font-weight:
                800;

            text-transform:
                uppercase;
        }


        .signal-type i {

            color:
                var(--cyan);
        }


        .signal strong {

            display:
                block;

            margin-top:
                13px;

            color:
                #fff;

            font-size:
                12px;
        }


        .signal p {

            margin:
                5px 0 0;

            color:
                #68768b;

            font-size:
                9px;

            line-height:
                1.5;
        }


        .signal-tag {

            display:
                inline-block;

            margin-top:
                12px;

            padding:
                5px 8px;

            border-radius:
                999px;

            color:
                var(--cyan);

            background:
                rgba(22,217,197,.06);

            font-size:
                7px;

            font-weight:
                800;
        }


        /* =====================================================
           ANALYSIS
        ====================================================== */

        .analysis-flow {

            margin-top:
                55px;

            display:
                grid;

            grid-template-columns:
                repeat(6,1fr);

            gap:
                10px;
        }


        .analysis-step {

            position:
                relative;

            padding:
                22px 15px;

            border:
                1px solid
                #e3e7ee;

            border-radius:
                15px;

            background:
                #fff;

            text-align:
                center;

            transition:
                .3s;
        }


        .analysis-step:hover {

            transform:
                translateY(-7px);

            border-color:
                rgba(77,124,255,.25);

            box-shadow:
                0 20px 45px
                rgba(20,30,50,.07);
        }


        .analysis-step i {

            font-size:
                21px;

            color:
                var(--blue);
        }


        .analysis-step strong {

            display:
                block;

            margin-top:
                11px;

            font-size:
                11px;
        }


        .analysis-step span {

            display:
                block;

            margin-top:
                4px;

            color:
                #7b8798;

            font-size:
                8px;
        }


        /* =====================================================
           AI BUILD
        ====================================================== */

        .build {

            background:
                #fff;
        }


        .build-box {

            margin-top:
                55px;

            padding:
                50px;

            border-radius:
                26px;

            background:
                linear-gradient(
                    135deg,
                    #07101b,
                    #101a29
                );

            color:
                #fff;

            position:
                relative;

            overflow:
                hidden;
        }


        .build-box:after {

            content: "";

            position:
                absolute;

            width:
                350px;

            height:
                350px;

            right:
                -130px;

            top:
                -150px;

            border-radius:
                50%;

            background:
                radial-gradient(
                    circle,
                    rgba(22,217,197,.16),
                    transparent 65%
                );
        }


        .build-steps {

            position:
                relative;

            z-index:
                2;

            display:
                grid;

            grid-template-columns:
                repeat(5,1fr);

            gap:
                10px;

            margin-top:
                35px;
        }


        .build-step {

            padding:
                20px;

            border:
                1px solid
                rgba(255,255,255,.08);

            border-radius:
                15px;

            background:
                rgba(255,255,255,.035);
        }


        .build-step-number {

            color:
                var(--cyan);

            font-family:
                "Space Grotesk";

            font-size:
                10px;

            font-weight:
                800;
        }


        .build-step strong {

            display:
                block;

            margin-top:
                15px;

            font-size:
                13px;
        }


        .build-step span {

            display:
                block;

            margin-top:
                5px;

            color:
                #718096;

            font-size:
                9px;

            line-height:
                1.5;
        }


        .build-callout {

            position:
                relative;

            z-index:
                2;

            display:
                inline-flex;

            align-items:
                center;

            gap:
                8px;

            margin-top:
                26px;

            padding:
                9px 14px;

            border-radius:
                999px;

            background:
                rgba(22,217,197,.10);

            border:
                1px solid
                rgba(22,217,197,.25);

            color:
                var(--cyan2);

            font-size:
                11px;

            font-weight:
                800;
        }


        /* =====================================================
           CAPABILITIES
        ====================================================== */

        .capabilities {

            background:
                var(--light);
        }


        .cap-grid {

            display:
                grid;

            grid-template-columns:
                repeat(3,1fr);

            gap:
                14px;

            margin-top:
                55px;
        }


        .cap-card {

            padding:
                28px;

            border:
                1px solid
                #e2e7ee;

            border-radius:
                18px;

            background:
                #fff;

            transition:
                .3s;
        }


        .cap-card:hover {

            transform:
                translateY(-7px);

            box-shadow:
                0 20px 55px
                rgba(20,30,50,.08);
        }


        .cap-card i {

            display:
                grid;

            place-items:
                center;

            width:
                44px;

            height:
                44px;

            border-radius:
                12px;

            background:
                #eef2ff;

            color:
                var(--blue);

            font-size:
                18px;
        }


        .cap-card h5 {

            margin-top:
                19px;

            font-size:
                16px;
        }


        .cap-card p {

            margin-top:
                7px;

            color:
                #6d788a;

            font-size:
                12px;

            line-height:
                1.65;
        }


        /* =====================================================
           COMPARISON (NEW)
        ====================================================== */

        .comparison {

            background:
                #fff;
        }


        .comparison-grid {

            margin-top:
                55px;

            display:
                grid;

            grid-template-columns:
                1fr 1fr;

            gap:
                18px;
        }


        .comparison-card {

            padding:
                36px;

            border-radius:
                22px;
        }


        .comparison-card.old {

            background:
                #f6f7fa;

            border:
                1px solid
                #e6e9ef;
        }


        .comparison-card.new {

            background:
                #09111d;

            color:
                #fff;

            position:
                relative;

            overflow:
                hidden;
        }


        .comparison-card.new:after {

            content: "";

            position:
                absolute;

            width:
                260px;

            height:
                260px;

            right:
                -100px;

            bottom:
                -110px;

            border-radius:
                50%;

            background:
                radial-gradient(
                    circle,
                    rgba(22,217,197,.16),
                    transparent 65%
                );
        }


        .comparison-label {

            display:
                inline-flex;

            padding:
                7px 12px;

            border-radius:
                999px;

            font-size:
                9px;

            font-weight:
                800;

            letter-spacing:
                .07em;

            text-transform:
                uppercase;
        }


        .comparison-card.old .comparison-label {

            background:
                #e7e9ef;

            color:
                #5b6577;
        }


        .comparison-card.new .comparison-label {

            background:
                rgba(22,217,197,.12);

            color:
                var(--cyan);
        }


        .comparison-card h4 {

            margin-top:
                16px;

            font-size:
                21px;
        }


        .comparison-card ul {

            margin:
                22px 0 0;

            padding:
                0;

            list-style:
                none;

            position:
                relative;

            z-index:
                2;
        }


        .comparison-card li {

            display:
                flex;

            gap:
                11px;

            padding:
                12px 0;

            border-bottom:
                1px solid
                rgba(0,0,0,.06);

            font-size:
                12.5px;

            line-height:
                1.6;
        }


        .comparison-card.new li {

            border-bottom:
                1px solid
                rgba(255,255,255,.07);

            color:
                #b7c1d1;
        }


        .comparison-card.old li i {

            color:
                #9aa3b3;
        }


        .comparison-card.new li i {

            color:
                var(--cyan);
        }


        /* =====================================================
           TESTIMONIALS (NEW)
        ====================================================== */

        .testimonials {

            background:
                #f4f6fb;
        }


        .testimonial-grid {

            margin-top:
                55px;

            display:
                grid;

            grid-template-columns:
                repeat(3,1fr);

            gap:
                16px;
        }


        .testimonial-card {

            padding:
                28px;

            border-radius:
                20px;

            background:
                #fff;

            border:
                1px solid
                #e6e9ef;

            transition:
                .3s;
        }


        .testimonial-card:hover {

            transform:
                translateY(-6px);

            box-shadow:
                0 20px 50px
                rgba(20,30,50,.08);
        }


        .testimonial-stars {

            color:
                #ffb03b;

            font-size:
                12px;

            letter-spacing:
                2px;
        }


        .testimonial-card p.quote {

            margin-top:
                15px;

            color:
                #3c4657;

            font-size:
                13px;

            line-height:
                1.75;
        }


        .testimonial-person {

            display:
                flex;

            align-items:
                center;

            gap:
                11px;

            margin-top:
                20px;
        }


        .testimonial-avatar {

            width:
                38px;

            height:
                38px;

            border-radius:
                50%;

            display:
                grid;

            place-items:
                center;

            background:
                var(--gradient);

            color:
                #fff;

            font-size:
                12px;

            font-weight:
                800;
        }


        .testimonial-person strong {

            display:
                block;

            font-size:
                12px;
        }


        .testimonial-person span {

            display:
                block;

            color:
                #7b8798;

            font-size:
                10px;

            margin-top:
                2px;
        }


        /* =====================================================
           PRICING (NEW)
        ====================================================== */

        .pricing {

            background:
                #fff;
        }


        .pricing-grid {

            margin-top:
                55px;

            display:
                grid;

            grid-template-columns:
                repeat(4,1fr);

            gap:
                16px;
            align-items: stretch;
        }


        .price-card {

            padding:
                30px 26px;

            border-radius:
                22px;

            border:
                1px solid
                #e4e8ef;

            background:
                #fbfcfe;

            display:
                flex;

            flex-direction:
                column;

            transition:
                .3s;
        }


        .price-card:hover {

            transform:
                translateY(-6px);

            box-shadow:
                0 22px 55px
                rgba(20,30,50,.08);
        }


        .price-card.popular {

            background:
                #09111d;

            color:
                #fff;

            border-color:
                #172234;
            transform: scale(1.03);
        }


        .price-tag {

            display:
                inline-flex;

            padding:
                6px 10px;

            border-radius:
                999px;

            background:
                #eef2ff;

            color:
                var(--blue);

            font-size:
                9px;

            font-weight:
                800;

            letter-spacing:
                .06em;

            text-transform:
                uppercase;
            align-self: flex-start;
        }


        .price-card.popular .price-tag {

            background:
                rgba(22,217,197,.14);

            color:
                var(--cyan);
        }


        .price-card h4 {

            margin-top:
                17px;

            font-size:
                19px;
        }


        .price-amount {

            margin-top:
                14px;

            font-family:
                "Space Grotesk";

            font-size:
                30px;

            font-weight:
                700;

            letter-spacing:
                -.03em;
        }


        .price-amount span {

            font-size:
                12px;

            font-weight:
                600;

            color:
                #8996a9;
        }


        .price-strike {

            font-size:
                13px;

            color:
                #9aa3b3;

            text-decoration:
                line-through;

            margin-right:
                6px;
        }


        .price-features {

            margin:
                22px 0 0;

            padding:
                0;

            list-style:
                none;
            flex-grow: 1;
        }


        .price-features li {

            display:
                flex;

            gap:
                8px;

            padding:
                8px 0;

            font-size:
                11.5px;

            color:
                #4c5771;
        }


        .price-card.popular .price-features li {

            color:
                #b7c1d1;
        }


        .price-features i {

            color:
                var(--cyan);

            margin-top:
                1px;
        }


        .price-cta {

            display:
                block;

            margin-top:
                22px;

            padding:
                12px;

            border-radius:
                10px;

            text-align:
                center;

            font-size:
                12px;

            font-weight:
                800;

            background:
                #09111d;

            color:
                #fff;

            transition:
                .3s;
        }


        .price-card.popular .price-cta {

            background:
                #fff;

            color:
                #09111d;
        }


        .price-cta:hover {

            transform:
                translateY(-2px);

            opacity:
                .92;
        }


        /* =====================================================
           BLOG (NEW)
        ====================================================== */

        .blog {

            background:
                var(--light);
        }


        .blog-grid {

            margin-top:
                55px;

            display:
                grid;

            grid-template-columns:
                repeat(3,1fr);

            gap:
                16px;
        }


        .blog-card {

            padding:
                26px;

            border-radius:
                18px;

            background:
                #fff;

            border:
                1px solid
                #e2e7ee;

            transition:
                .3s;
            display: flex;
            flex-direction: column;
        }


        .blog-card:hover {

            transform:
                translateY(-6px);

            box-shadow:
                0 20px 50px
                rgba(20,30,50,.08);
        }


        .blog-tag {

            display:
                inline-flex;

            align-self:
                flex-start;

            padding:
                5px 9px;

            border-radius:
                999px;

            background:
                #eef2ff;

            color:
                var(--blue);

            font-size:
                8px;

            font-weight:
                800;

            text-transform:
                uppercase;
        }


        .blog-card h5 {

            margin-top:
                15px;

            font-size:
                14.5px;

            line-height:
                1.4;
        }


        .blog-card p {

            margin-top:
                8px;

            color:
                #6d788a;

            font-size:
                11.5px;

            line-height:
                1.6;
            flex-grow: 1;
        }


        .blog-read {

            margin-top:
                15px;

            font-size:
                11px;

            font-weight:
                800;

            color:
                #09111d;

            display:
                inline-flex;

            align-items:
                center;

            gap:
                6px;
        }


        /* =====================================================
           ACADEMY
        ====================================================== */

        .academy {

            background:
                #fff;
        }


        .academy-box {

            position:
                relative;

            overflow:
                hidden;

            padding:
                60px;

            border-radius:
                28px;

            background:
                linear-gradient(
                    120deg,
                    #f0eeff,
                    #e9fbf8
                );
        }


        .academy-box:after {

            content: "";

            position:
                absolute;

            width:
                400px;

            height:
                400px;

            right:
                -160px;

            top:
                -170px;

            border-radius:
                50%;

            background:
                radial-gradient(
                    circle,
                    rgba(128,108,255,.18),
                    transparent 65%
                );
        }


        .academy-content {

            position:
                relative;

            z-index:
                2;
        }


        .academy-pill {

            display:
                inline-flex;

            padding:
                7px 11px;

            border-radius:
                999px;

            background:
                #fff;

            color:
                #6856d8;

            font-size:
                9px;

            font-weight:
                800;

            letter-spacing:
                .08em;
        }


        .academy-box h2 {

            margin-top:
                17px;

            font-size:
                clamp(
                    2.2rem,
                    4vw,
                    3.7rem
                );

            letter-spacing:
                -.05em;
        }


        .academy-box p {

            max-width:
                650px;

            margin-top:
                16px;

            color:
                #667085;

            line-height:
                1.75;

            font-size:
                14px;
        }


        .academy-features {

            display:
                flex;

            flex-wrap:
                wrap;

            gap:
                8px;

            margin-top:
                25px;
        }


        .academy-features span {

            padding:
                8px 11px;

            border:
                1px solid
                rgba(80,70,150,.12);

            border-radius:
                999px;

            background:
                rgba(255,255,255,.65);

            color:
                #596477;

            font-size:
                9px;

            font-weight:
                700;
        }


        .academy-tracks {

            margin-top:
                34px;

            display:
                grid;

            grid-template-columns:
                repeat(3,1fr);

            gap:
                14px;

            position:
                relative;

            z-index:
                2;
        }


        .academy-track {

            padding:
                20px;

            border-radius:
                16px;

            background:
                rgba(255,255,255,.7);

            border:
                1px solid
                rgba(80,70,150,.10);
        }


        .academy-track strong {

            display:
                block;

            font-size:
                12px;

            color:
                #26304a;
        }


        .academy-track ul {

            margin:
                10px 0 0;

            padding-left:
                16px;

            color:
                #596477;

            font-size:
                11px;

            line-height:
                1.7;
        }


        /* =====================================================
           STATS
        ====================================================== */

        .stats {

            background:
                #080d15;

            color:
                #fff;

            padding:
                70px 0;
        }


        .stat {

            text-align:
                center;

            padding:
                20px;

            border-right:
                1px solid
                rgba(255,255,255,.08);
        }


        .stat:last-child {
            border-right:
                0;
        }


        .stat strong {

            display:
                block;

            font-family:
                "Space Grotesk";

            font-size:
                38px;

            letter-spacing:
                -.04em;
        }


        .stat span {

            display:
                block;

            margin-top:
                5px;

            color:
                #69768a;

            font-size:
                9px;

            font-weight:
                700;

            text-transform:
                uppercase;

            letter-spacing:
                .08em;
        }


        /* =====================================================
           CTA
        ====================================================== */

        .final {

            position:
                relative;

            overflow:
                hidden;

            padding:
                120px 0;

            text-align:
                center;

            color:
                #fff;

            background:
                #050811;
        }


        .final:before {

            content: "";

            position:
                absolute;

            width:
                650px;

            height:
                650px;

            left:
                50%;

            top:
                50%;

            transform:
                translate(-50%,-50%);

            border-radius:
                50%;

            background:
                radial-gradient(
                    circle,
                    rgba(77,124,255,.13),
                    transparent 65%
                );
        }


        .final-content {

            position:
                relative;

            z-index:
                2;
        }


        .final h2 {

            max-width:
                850px;

            margin:
                15px auto;

            font-size:
                clamp(
                    2.6rem,
                    5vw,
                    5rem
                );

            line-height:
                .98;

            letter-spacing:
                -.06em;
        }


        .final p {

            max-width:
                620px;

            margin:
                20px auto;

            color:
                #7c899d;

            font-size:
                15px;

            line-height:
                1.7;
        }


        /* =====================================================
           FOOTER
        ====================================================== */

        footer {

            padding:
                70px 0 30px;

            background:
                #030509;

            color:
                #fff;
        }


        .footer-brand {

            font-family:
                "Space Grotesk";

            font-size:
                24px;

            font-weight:
                700;
        }


        .footer-description {

            max-width:
                400px;

            margin-top:
                13px;

            color:
                #687488;

            font-size:
                12px;

            line-height:
                1.8;
        }


        .footer-maker {

            display:
                inline-flex;

            align-items:
                center;

            gap:
                7px;

            margin-top:
                14px;

            padding:
                7px 12px;

            border-radius:
                999px;

            border:
                1px solid
                rgba(255,255,255,.10);

            color:
                #9aa5b8;

            font-size:
                10.5px;

            font-weight:
                700;
        }


        .footer-maker i {

            color:
                var(--cyan);
        }


        .footer-title {

            margin-bottom:
                17px;

            color:
                #fff;

            font-size:
                10px;

            font-weight:
                800;

            text-transform:
                uppercase;

            letter-spacing:
                .1em;
        }


        .footer-link {

            display:
                block;

            margin-bottom:
                9px;

            color:
                #6c788c;

            font-size:
                11px;

            transition:
                .25s;
        }


        .footer-link:hover {

            color:
                #fff;
        }


        .copyright {

            margin-top:
                45px;

            padding-top:
                23px;

            border-top:
                1px solid
                rgba(255,255,255,.07);

            color:
                #515d70;

            font-size:
                10px;
        }


        /* =====================================================
           SCROLL REVEAL
        ====================================================== */

        .reveal {

            opacity:
                0;

            transform:
                translateY(35px);

            transition:
                opacity .8s ease,
                transform .8s cubic-bezier(.2,.7,.2,1);
        }


        .reveal.active {

            opacity:
                1;

            transform:
                none;
        }


        /* =====================================================
           RESPONSIVE
        ====================================================== */

        @media(max-width:991px) {

            .hero {
                padding-top:
                    140px;
            }


            .hero-dashboard-wrap {
                margin-top:
                    20px;
            }


            .flow-cards {
                grid-template-columns:
                    repeat(2,1fr);
            }


            .flow-line {
                display:
                    none;
            }


            .brick-grid {
                grid-template-columns:
                    1fr;
            }


            .brick-center {
                order:
                    2;
            }


            .architecture-arrow {
                display:
                    none;
            }


            .signal-grid {
                grid-template-columns:
                    repeat(2,1fr);
            }


            .analysis-flow {
                grid-template-columns:
                    repeat(3,1fr);
            }


            .build-steps {
                grid-template-columns:
                    repeat(2,1fr);
            }


            .cap-grid {
                grid-template-columns:
                    repeat(2,1fr);
            }


            .comparison-grid {
                grid-template-columns:
                    1fr;
            }


            .testimonial-grid {
                grid-template-columns:
                    repeat(2,1fr);
            }


            .pricing-grid {
                grid-template-columns:
                    repeat(2,1fr);
            }


            .price-card.popular {
                transform:
                    none;
            }


            .blog-grid {
                grid-template-columns:
                    repeat(2,1fr);
            }


            .academy-tracks {
                grid-template-columns:
                    1fr;
            }


            .stat {
                border-right:
                    0;

                border-bottom:
                    1px solid
                    rgba(255,255,255,.08);
            }

        }


        @media(max-width:767px) {

            .navbar {
                padding:
                    13px 0;
            }


            .hero {
                padding:
                    125px 0
                    60px;
            }


            .hero h1 {
                font-size:
                    3.1rem;
            }


            .hero-copy {
                font-size:
                    15px;
            }


            .hero-dashboard-wrap {
                min-height:
                    370px;
            }


            .orbit {
                width:
                    330px;

                height:
                    330px;
            }


            .orbit-two {
                width:
                    260px;

                height:
                    260px;
            }


            .dashboard {
                width:
                    350px;
            }


            .section {
                padding:
                    75px 0;
            }


            .di-card {
                padding:
                    28px;
            }


            .flow-cards {
                grid-template-columns:
                    1fr;
            }


            .signal-grid {
                grid-template-columns:
                    1fr;
            }


            .analysis-flow {
                grid-template-columns:
                    repeat(2,1fr);
            }


            .build-box {
                padding:
                    30px 22px;
            }


            .build-steps {
                grid-template-columns:
                    1fr;
            }


            .cap-grid {
                grid-template-columns:
                    1fr;
            }


            .testimonial-grid {
                grid-template-columns:
                    1fr;
            }


            .pricing-grid {
                grid-template-columns:
                    1fr;
            }


            .blog-grid {
                grid-template-columns:
                    1fr;
            }


            .academy-box {
                padding:
                    35px 25px;
            }


            .brick-architecture {
                padding:
                    25px 15px;
            }

        }


        @media(prefers-reduced-motion: reduce) {

            *,
            *:before,
            *:after {

                animation-duration:
                    .01ms !important;

                animation-iteration-count:
                    1 !important;

                transition-duration:
                    .01ms !important;

                scroll-behavior:
                    auto !important;
            }

            .reveal {
                opacity:
                    1;

                transform:
                    none;
            }

        }

    </style>

</head>


<body>


<!-- =====================================================
     NAVBAR
====================================================== -->

<?php include 'header.php'; ?>



<!-- =====================================================
     HERO
====================================================== -->

<section class="hero">

    <div class="hero-grid"></div>

    <div
        class="hero-glow"
        id="heroGlow">
    </div>


    <div class="container hero-content">

        <div class="row align-items-center g-5">


            <!-- HERO TEXT -->

            <div class="col-lg-6 reveal">

                <div class="eyebrow">

                    <span class="live-dot"></span>

                    AI-POWERED DATA & BI PLATFORM

                </div>


                <h1>

                     Your data is talking.
                    <span class="gradient-text">
                        Elldy is listening.
                    </span>

                </h1>


                <p class="hero-copy">

                    Elldy is a cloud-based Data Intelligence
                    and Business Intelligence platform that
                    helps you connect data, build dashboards,
                    discover insights, monitor performance and
                    make better business decisions.

                </p>


                <div class="hero-actions">

                    <a
                        href="https://elldy.com/signup/"
                        class="btn-main">

                        Start Free

                        <i class="bi bi-arrow-up-right"></i>

                    </a>


                    <a
                        href="#platform"
                        class="btn-outline-main">

                        Explore Platform

                        <i class="bi bi-arrow-down"></i>

                    </a>

                </div>


                <div class="hero-proof">

                    <span>
                        <i class="bi bi-check-circle-fill"></i>
                        10K rows free, no credit card
                    </span>

                    <span>
                        <i class="bi bi-check-circle-fill"></i>
                        AI powered
                    </span>

                    <span>
                        <i class="bi bi-check-circle-fill"></i>
                        No-code analytics
                    </span>

                </div>

            </div>


            <!-- HERO VISUAL -->

            <div class="col-lg-6 reveal">

                <div class="hero-dashboard-wrap">

                    <div class="orbit"></div>

                    <div class="orbit orbit-two"></div>


                    <div class="dashboard">


                        <div class="window-bar">

                            <span class="window-circle"></span>
                            <span class="window-circle"></span>
                            <span class="window-circle"></span>

                            <span class="window-label">

                                ELLDY • BUSINESS INTELLIGENCE

                            </span>

                        </div>


                        <div class="dashboard-head">

                            <div>

                                <strong>
                                    Business Overview
                                </strong>

                                <br>

                                <small>
                                    Live workspace • Updated now
                                </small>

                            </div>


                            <span class="live-chip">

                                Live intelligence

                            </span>

                        </div>


                        <div class="metric-grid">


                            <div class="metric">

                                <small>
                                    Revenue
                                </small>

                                <strong>
                                    ₹84.2L
                                </strong>

                                <span>
                                    ↑ 18.4%
                                </span>

                            </div>


                            <div class="metric">

                                <small>
                                    Customers
                                </small>

                                <strong>
                                    3,847
                                </strong>

                                <span>
                                    ↑ 6.1%
                                </span>

                            </div>


                            <div class="metric">

                                <small>
                                    Avg Order
                                </small>

                                <strong>
                                    ₹2,190
                                </strong>

                                <span class="down">
                                    ↓ 2.3%
                                </span>

                            </div>


                            <div class="metric">

                                <small>
                                    AI Forecast
                                </small>

                                <strong>
                                    ₹1.1Cr
                                </strong>

                                <span>
                                    ↑ 12%
                                </span>

                            </div>


                        </div>


                        <div class="chart-box">

                            <div class="chart-title">
                                Monthly revenue trend
                            </div>


                            <svg
                                class="chart-svg"
                                viewBox="0 0 400 100"
                                preserveAspectRatio="none">

                                <defs>

                                    <linearGradient
                                        id="lineGradient"
                                        x1="0"
                                        x2="1">

                                        <stop
                                            offset="0%"
                                            stop-color="#16d9c5"/>

                                        <stop
                                            offset="100%"
                                            stop-color="#806cff"/>

                                    </linearGradient>

                                </defs>


                                <path
                                    d="M0 85
                                    C30 79 45 67 70 72
                                    S110 52 135 60
                                    S170 38 200 46
                                    S235 28 265 35
                                    S310 17 340 23
                                    S370 10 400 14"

                                    fill="none"

                                    stroke="url(#lineGradient)"

                                    stroke-width="4"

                                    stroke-linecap="round"/>

                            </svg>

                        </div>


                        <div class="ai-alert">

                            <div class="ai-alert-label">

                                <i class="bi bi-stars"></i>

                                Elldy Analyst

                            </div>

                            <strong>

                                Revenue spike detected in West region

                            </strong>

                            <p>

                                Growth is accelerating faster than forecast.
                                Review the region in Analysis Workspace.

                            </p>

                        </div>


                    </div>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- =====================================================
     DI + BI
====================================================== -->

<section class="section section-light">

    <div class="container">


        <div class="text-center reveal">

            <div class="section-kicker">
                DATA INTELLIGENCE + BUSINESS INTELLIGENCE
            </div>


            <h2 class="section-title">

                More than dashboards.
                <br>

                <span class="gradient-text">
                    Intelligence for decisions.
                </span>

            </h2>


            <p class="section-copy mx-auto">

                BI tells you what happened.
                Data Intelligence helps you understand
                what changed, why it matters and where
                you should look next.

            </p>

        </div>


        <div class="row g-4 di-bi">


            <!-- BI -->

            <div class="col-lg-6 reveal">

                <div class="di-card bi-card">

                    <div class="di-icon">

                        <i class="bi bi-bar-chart-fill"></i>

                    </div>


                    <h3>
                        Business Intelligence
                    </h3>


                    <p>

                        Build interactive dashboards, track KPIs,
                        explore trends and transform business
                        data into clear visual reports.

                    </p>


                    <ul class="feature-list">

                        <li>
                            <i class="bi bi-check-circle-fill"></i>
                            Interactive dashboards
                        </li>

                        <li>
                            <i class="bi bi-check-circle-fill"></i>
                            KPI monitoring
                        </li>

                        <li>
                            <i class="bi bi-check-circle-fill"></i>
                            Business reporting
                        </li>

                        <li>
                            <i class="bi bi-check-circle-fill"></i>
                            Data visualization
                        </li>

                    </ul>

                </div>

            </div>


            <!-- DI -->

            <div class="col-lg-6 reveal">

                <div class="di-card intelligence-card">

                    <div class="di-icon">

                        <i class="bi bi-stars"></i>

                    </div>


                    <h3>
                        Data Intelligence
                    </h3>


                    <p>

                        Go beyond static reports with AI-powered
                        analysis that identifies anomalies,
                        movement, patterns, forecasts and
                        priority business signals.

                    </p>


                    <ul class="feature-list">

                        <li>
                            <i class="bi bi-check-circle-fill"></i>
                            AI-powered insights
                        </li>

                        <li>
                            <i class="bi bi-check-circle-fill"></i>
                            Anomaly detection
                        </li>

                        <li>
                            <i class="bi bi-check-circle-fill"></i>
                            Intelligent alerts
                        </li>

                        <li>
                            <i class="bi bi-check-circle-fill"></i>
                            AI forecasting
                        </li>

                    </ul>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- =====================================================
     PLATFORM
====================================================== -->

<section
    class="section platform"
    id="platform">

    <div class="platform-glow"></div>


    <div class="container">

        <div class="platform-head reveal">

            <div class="section-kicker">
                ELLDY PLATFORM
            </div>


            <h2 class="section-title">

                One cloud platform.
                <br>

                <span class="gradient-text">
                    Your complete data journey.
                </span>

            </h2>


            <p class="section-copy">

                Connect your data, move operational information
                through APIs, explore it in Analysis Workspace,
                let AI identify important signals and build
                decision-ready BI reports.

            </p>

        </div>


        <div class="platform-flow reveal">


            <div class="flow-line"></div>


            <div class="flow-cards">


                <div class="flow-card">

                    <div class="flow-number">
                        01
                    </div>

                    <i class="bi bi-hdd-network"></i>

                    <h5>
                        Elldy Brick
                    </h5>

                    <p>
                        Connect files, systems, databases
                        and private business data flows.
                    </p>

                </div>


                <div class="flow-card">

                    <div class="flow-number">
                        02
                    </div>

                    <i class="bi bi-plug"></i>

                    <h5>
                        API
                    </h5>

                    <p>
                        Move operational data into
                        dashboards, analysis and BI reporting.
                    </p>

                </div>


                <div class="flow-card">

                    <div class="flow-number">
                        03
                    </div>

                    <i class="bi bi-stars"></i>

                    <h5>
                        Elldy Analyst
                    </h5>

                    <p>
                        Detect movement, anomalies and
                        priority business signals.
                    </p>

                </div>


                <div class="flow-card">

                    <div class="flow-number">
                        04
                    </div>

                    <i class="bi bi-search"></i>

                    <h5>
                        Analysis Workspace
                    </h5>

                    <p>
                        Explore, filter, compare and
                        prepare insights.
                    </p>

                </div>


            </div>

        </div>

    </div>

</section>



<!-- =====================================================
     BRICKS (renamed to match live product: Elldy Brick +
     Basket Central architecture, Private Gateway detail)
====================================================== -->

<section
    class="section bricks"
    id="bricks">

    <div class="container">


        <div class="row align-items-center g-5">


            <div class="col-lg-5 reveal">

                <div class="section-kicker">
                    ELLDY BRICK
                </div>


                <h2 class="section-title">

                    Your private data.
                    <br>

                    <span class="gradient-text">
                        Connected securely.
                    </span>

                </h2>


                <p class="section-copy">

                    Elldy Brick Private Gateway connects private
                    databases, internal systems and business
                    data environments to Elldy over HTTPS only,
                    without exposing a public database port.
                    Data lands in Basket Central, ready for
                    joins, dashboards, monitoring and AI analysis.

                </p>


                <div class="brick-points">


                    <div class="brick-point">

                        <i class="bi bi-shield-check"></i>

                        <div>

                            <strong>
                                Private data connectivity
                            </strong>

                            <span>
                                Connect internal databases and
                                business systems through the gateway —
                                no public DB port required.
                            </span>

                        </div>

                    </div>


                    <div class="brick-point">

                        <i class="bi bi-arrow-repeat"></i>

                        <div>

                            <strong>
                                Continuous data flow
                            </strong>

                            <span>
                                Elldy Brick pulls the latest rows on a
                                schedule and writes analysis-ready parquet.
                            </span>

                        </div>

                    </div>


                    <div class="brick-point">

                        <i class="bi bi-database-check"></i>

                        <div>

                            <strong>
                                Basket Central
                            </strong>

                            <span>
                                Prepared data lands in one place, ready
                                for joins, dashboards and intelligent workflows.
                            </span>

                        </div>

                    </div>


                </div>


                <div class="brick-badge-row">

                    <span class="brick-badge">
                        <i class="bi bi-lock-fill"></i>
                        HTTPS only
                    </span>

                    <span class="brick-badge">
                        <i class="bi bi-diagram-3"></i>
                        Localhost / VPC / EC2
                    </span>

                    <span class="brick-badge">
                        <i class="bi bi-arrow-repeat"></i>
                        Auto pull refresh
                    </span>

                </div>


                <a
                    href="https://elldy.com/docs/elldy-brick/"
                    target="_blank"
                    class="btn btn-dark px-4 py-3 mt-4 fw-bold">

                    Explore Elldy Brick

                    <i class="bi bi-arrow-up-right ms-2"></i>

                </a>

            </div>


            <div class="col-lg-7 reveal">


                <div class="bricks-architecture">


                    <div class="brick-grid">


                        <!-- PRIVATE SIDE -->

                        <div class="architecture-box">

                            <div class="architecture-title">
                                Your Environment
                            </div>

                            <h4>
                                Private Data
                            </h4>


                            <ul class="architecture-list">

                                <li>
                                    <i class="bi bi-database me-2"></i>
                                    MySQL / PostgreSQL / SQL Server / Oracle
                                </li>

                                <li>
                                    <i class="bi bi-server me-2"></i>
                                    Localhost, VPC, EC2, internal network
                                </li>

                                <li>
                                    <i class="bi bi-file-earmark me-2"></i>
                                    Excel, CSV, parquet files
                                </li>

                                <li>
                                    <i class="bi bi-cloud me-2"></i>
                                    Custom API for app / CRM data
                                </li>

                            </ul>

                        </div>


                        <!-- BRICK -->

                        <div class="brick-center">

                            <div class="brick-icon">

                                <i class="bi bi-hdd-network"></i>

                            </div>

                            <span>
                                ELLDY BRICK
                            </span>


                            <div class="architecture-arrow arrow-left"></div>

                            <div class="architecture-arrow arrow-right"></div>

                        </div>


                        <!-- ELLDY -->

                        <div class="architecture-box dark">

                            <div class="architecture-title">
                                Basket Central
                            </div>

                            <h4>
                                Intelligence Layer
                            </h4>


                            <ul class="architecture-list">

                                <li>
                                    <i class="bi bi-bar-chart me-2"></i>
                                    Dashboards
                                </li>

                                <li>
                                    <i class="bi bi-stars me-2"></i>
                                    AI Analyst
                                </li>

                                <li>
                                    <i class="bi bi-search me-2"></i>
                                    Analysis Workspace
                                </li>

                                <li>
                                    <i class="bi bi-graph-up-arrow me-2"></i>
                                    Forecasting
                                </li>

                            </ul>

                        </div>


                    </div>


                </div>

            </div>

        </div>

    </div>

</section>



<!-- =====================================================
     AI ANALYST
====================================================== -->

<section
    class="section analyst"
    id="analyst">

    <div class="container">


        <div class="text-center reveal">

            <div class="section-kicker">
                ELLDY ANALYST
            </div>


            <h2 class="section-title">

                Don't just check your dashboards.
                <br>

                <span class="gradient-text">
                    Let Elldy watch them.
                </span>

            </h2>


            <p class="section-copy mx-auto">

                Elldy Analyst helps identify important movement
                in your business data so teams can focus on the
                signals that deserve attention.

            </p>

        </div>


        <div class="analyst-console reveal">


            <div class="console-head">

                <div class="console-title">

                    Elldy Analyst
                    <span
                        style="color:#637084;font-size:10px">
                        / Intelligence Center
                    </span>

                </div>


                <div class="console-status">

                    ● MONITORING

                </div>

            </div>


            <div class="signal-grid">


                <div class="signal">

                    <div class="signal-type">

                        <i class="bi bi-graph-up-arrow"></i>

                        Movement

                    </div>

                    <strong>
                        Revenue increased 18.4%
                    </strong>

                    <p>
                        West region is driving the latest
                        growth acceleration.
                    </p>

                    <span class="signal-tag">
                        Insight ready
                    </span>

                </div>


                <div class="signal">

                    <div class="signal-type">

                        <i class="bi bi-exclamation-circle"></i>

                        Anomaly

                    </div>

                    <strong>
                        Unusual order value detected
                    </strong>

                    <p>
                        Average order value moved outside
                        the expected range.
                    </p>

                    <span class="signal-tag">
                        Review
                    </span>

                </div>


                <div class="signal">

                    <div class="signal-type">

                        <i class="bi bi-stars"></i>

                        Forecast

                    </div>

                    <strong>
                        Next month trend is positive
                    </strong>

                    <p>
                        Current performance indicates
                        higher expected revenue.
                    </p>

                    <span class="signal-tag">
                        Forecast
                    </span>

                </div>


                <div class="signal">

                    <div class="signal-type">

                        <i class="bi bi-speedometer2"></i>

                        KPI

                    </div>

                    <strong>
                        Customer growth above target
                    </strong>

                    <p>
                        Customer acquisition is currently
                        ahead of the expected range.
                    </p>

                    <span class="signal-tag">
                        Positive
                    </span>

                </div>


                <div class="signal">

                    <div class="signal-type">

                        <i class="bi bi-pie-chart"></i>

                        Segment

                    </div>

                    <strong>
                        Enterprise segment expanding
                    </strong>

                    <p>
                        Segment contribution is increasing
                        faster than other categories.
                    </p>

                    <span class="signal-tag">
                        Explore
                    </span>

                </div>


                <div class="signal">

                    <div class="signal-type">

                        <i class="bi bi-lightbulb"></i>

                        Priority

                    </div>

                    <strong>
                        3 signals need attention
                    </strong>

                    <p>
                        Elldy has identified the most
                        relevant movements for review.
                    </p>

                    <span class="signal-tag">
                        Priority
                    </span>

                </div>


            </div>

        </div>

    </div>

</section>



<!-- =====================================================
     ANALYSIS WORKSPACE
====================================================== -->

<section
    class="section"
    id="analysis">

    <div class="container">


        <div class="text-center reveal">

            <div class="section-kicker">
                ANALYSIS WORKSPACE
            </div>


            <h2 class="section-title">

                Explore the data
                <br>

                <span class="gradient-text">
                    behind the numbers.
                </span>

            </h2>


            <p class="section-copy mx-auto">

                Move beyond predefined reports.
                Explore, filter, compare and understand
                your data before turning insights into
                dashboards and decisions.

            </p>

        </div>


        <div class="analysis-flow reveal">


            <div class="analysis-step">

                <i class="bi bi-funnel"></i>

                <strong>
                    Filter
                </strong>

                <span>
                    Focus your data
                </span>

            </div>


            <div class="analysis-step">

                <i class="bi bi-collection"></i>

                <strong>
                    Group
                </strong>

                <span>
                    Organize segments
                </span>

            </div>


            <div class="analysis-step">

                <i class="bi bi-graph-up"></i>

                <strong>
                    Trend
                </strong>

                <span>
                    Find movement
                </span>

            </div>


            <div class="analysis-step">

                <i class="bi bi-arrows-angle-expand"></i>

                <strong>
                    Compare
                </strong>

                <span>
                    Discover differences
                </span>

            </div>


            <div class="analysis-step">

                <i class="bi bi-stars"></i>

                <strong>
                    Insights
                </strong>

                <span>
                    Understand patterns
                </span>

            </div>


            <div class="analysis-step">

                <i class="bi bi-bar-chart-fill"></i>

                <strong>
                    Visualize
                </strong>

                <span>
                    Build the story
                </span>

            </div>


        </div>


        <div class="text-center reveal mt-5">

            <a
                href="https://elldy.com/"
                target="_blank"
                class="btn btn-dark px-4 py-3 fw-bold">

                Explore Analysis Workspace

                <i class="bi bi-arrow-up-right ms-2"></i>

            </a>

        </div>

    </div>

</section>



<!-- =====================================================
     AI BUILD
====================================================== -->

<section class="section build">

    <div class="container">


        <div class="build-box reveal">


            <div class="section-kicker"
                 style="color:#16d9c5">

                AI DASHBOARD BUILDER

            </div>


            <h2 class="section-title"
                style="color:#fff">

                Start with your data.
                <br>

                <span class="gradient-text">
                    Let AI build the first view.
                </span>

            </h2>


            <p
                class="section-copy"
                style="color:#8190a4">

                Elldy helps turn datasets into useful
                dashboard starting points with relevant
                KPIs, charts and business views.

            </p>


            <div class="build-callout">

                <i class="bi bi-lightning-charge-fill"></i>

                Dashboard-ready view in about 2 minutes

            </div>


            <div class="build-steps">


                <div class="build-step">

                    <div class="build-step-number">
                        01
                    </div>

                    <strong>
                        Upload
                    </strong>

                    <span>
                        Bring your business dataset
                        into Elldy.
                    </span>

                </div>


                <div class="build-step">

                    <div class="build-step-number">
                        02
                    </div>

                    <strong>
                        Understand
                    </strong>

                    <span>
                        Identify useful fields,
                        metrics and relationships.
                    </span>

                </div>


                <div class="build-step">

                    <div class="build-step-number">
                        03
                    </div>

                    <strong>
                        Build
                    </strong>

                    <span>
                        Generate dashboards and
                        visual business views.
                    </span>

                </div>


                <div class="build-step">

                    <div class="build-step-number">
                        04
                    </div>

                    <strong>
                        Refine
                    </strong>

                    <span>
                        Customize your KPIs,
                        charts and layout.
                    </span>

                </div>


                <div class="build-step">

                    <div class="build-step-number">
                        05
                    </div>

                    <strong>
                        Decide
                    </strong>

                    <span>
                        Turn insights into
                        business action.
                    </span>

                </div>


            </div>

        </div>

    </div>

</section>



<!-- =====================================================
     CAPABILITIES
====================================================== -->

<section class="section capabilities">

    <div class="container">


        <div class="text-center reveal">

            <div class="section-kicker">
                WHAT ELLDY CAN DO
            </div>


            <h2 class="section-title">

                Everything you need
                <br>

                to work with business data.

            </h2>

        </div>


        <div class="cap-grid">


            <div class="cap-card reveal">

                <i class="bi bi-bar-chart-fill"></i>

                <h5>
                    Interactive Dashboards
                </h5>

                <p>
                    Build visual dashboards that
                    bring KPIs and business performance
                    into one view.
                </p>

            </div>


            <div class="cap-card reveal">

                <i class="bi bi-stars"></i>

                <h5>
                    AI Insights
                </h5>

                <p>
                    Use AI-powered analysis to surface
                    meaningful business patterns and
                    changes.
                </p>

            </div>


            <div class="cap-card reveal">

                <i class="bi bi-graph-up-arrow"></i>

                <h5>
                    Forecasting
                </h5>

                <p>
                    Explore expected future movement
                    using historical business data.
                </p>

            </div>


            <div class="cap-card reveal">

                <i class="bi bi-database-check"></i>

                <h5>
                    Data Preparation
                </h5>

                <p>
                    Prepare and structure data so it
                    becomes ready for analysis.
                </p>

            </div>


            <div class="cap-card reveal">

                <i class="bi bi-plug-fill"></i>

                <h5>
                    Data Connections
                </h5>

                <p>
                    Connect files, systems, APIs and
                    business data sources.
                </p>

            </div>


            <div class="cap-card reveal">

                <i class="bi bi-window-stack"></i>

                <h5>
                    Embedded Analytics
                </h5>

                <p>
                    Bring business intelligence into
                    applications and customer-facing
                    experiences.
                </p>

            </div>


            <div class="cap-card reveal">

                <i class="bi bi-file-earmark-bar-graph"></i>

                <h5>
                    BI Reporting
                </h5>

                <p>
                    Create business reports that help
                    teams communicate performance clearly.
                </p>

            </div>


            <div class="cap-card reveal">

                <i class="bi bi-bell-fill"></i>

                <h5>
                    Intelligent Monitoring
                </h5>

                <p>
                    Identify important movement and
                    priority signals in your data.
                </p>

            </div>


            <div class="cap-card reveal">

                <i class="bi bi-code-slash"></i>

                <h5>
                    API Integration
                </h5>

                <p>
                    Move operational information into
                    the Elldy analytics environment.
                </p>

            </div>


        </div>

    </div>

</section>



<!-- =====================================================
     COMPARISON (NEW)
====================================================== -->

<section
    class="section comparison"
    id="bi-comparison">

    <div class="container">

        <div class="text-center reveal">

            <div class="section-kicker">
                MODERN BI VS ELLDY
            </div>

            <h2 class="section-title">

                Beyond dashboards,
                <br>

                <span class="gradient-text">
                    into active intelligence.
                </span>

            </h2>

            <p class="section-copy mx-auto">

                Most BI tools help teams build reports. Elldy helps
                businesses monitor data continuously, detect what
                changed, and understand what needs attention —
                without waiting for SQL work, manual checks, or a
                dedicated analyst team.

            </p>

        </div>


        <div class="comparison-grid reveal">

            <div class="comparison-card old">

                <span class="comparison-label">
                    Modern BI Platforms
                </span>

                <h4>
                    Powerful, but manual
                </h4>

                <ul>

                    <li>
                        <i class="bi bi-x-circle"></i>
                        Often needs SQL, formulas, or technical configuration.
                    </li>

                    <li>
                        <i class="bi bi-x-circle"></i>
                        Requires analysts to inspect dashboards and explain changes.
                    </li>

                    <li>
                        <i class="bi bi-x-circle"></i>
                        Insights are often found only after someone manually checks the report.
                    </li>

                    <li>
                        <i class="bi bi-x-circle"></i>
                        Focuses mainly on charts, reports, and visual exploration.
                    </li>

                </ul>

            </div>


            <div class="comparison-card new">

                <span class="comparison-label">
                    Elldy
                </span>

                <h4>
                    An AI analyst that watches, explains, and builds
                </h4>

                <ul>

                    <li>
                        <i class="bi bi-check-circle-fill"></i>
                        No code and no SQL required for everyday business analysis.
                    </li>

                    <li>
                        <i class="bi bi-check-circle-fill"></i>
                        Elldy Analyst monitors business data without needing a full analyst team.
                    </li>

                    <li>
                        <i class="bi bi-check-circle-fill"></i>
                        Detects spikes, drops, anomalies, forecast changes, and KPI movement automatically.
                    </li>

                    <li>
                        <i class="bi bi-check-circle-fill"></i>
                        AI Build creates a strong dashboard starting point in minutes.
                    </li>

                </ul>

            </div>

        </div>

    </div>

</section>



<!-- =====================================================
     TESTIMONIALS (NEW)
====================================================== -->

<section class="section testimonials">

    <div class="container">

        <div class="text-center reveal">

            <div class="section-kicker">
                WHAT THEY SAY
            </div>

            <h2 class="section-title">

                Business leaders
                <br>

                <span class="gradient-text">
                    trust Elldy.
                </span>

            </h2>

        </div>


        <div class="testimonial-grid reveal">

            <div class="testimonial-card">

                <div class="testimonial-stars">
                    ★★★★★
                </div>

                <p class="quote">

                    "Elldy replaced three separate tools. Our finance
                    team now gets weekly dashboards automatically —
                    insights that used to take two days are ready
                    in minutes."

                </p>

                <div class="testimonial-person">

                    <div class="testimonial-avatar">RK</div>

                    <div>
                        <strong>Rajesh Kumar</strong>
                        <span>CFO, Manufacturing Company</span>
                    </div>

                </div>

            </div>


            <div class="testimonial-card">

                <div class="testimonial-stars">
                    ★★★★★
                </div>

                <p class="quote">

                    "The AI forecasting feature predicted our Q3
                    sales shortfall three weeks in advance. We
                    adjusted inventory in time and avoided a
                    ₹12L loss."

                </p>

                <div class="testimonial-person">

                    <div class="testimonial-avatar">PS</div>

                    <div>
                        <strong>Priya Sharma</strong>
                        <span>Operations Head, E-commerce</span>
                    </div>

                </div>

            </div>


            <div class="testimonial-card">

                <div class="testimonial-stars">
                    ★★★★★
                </div>

                <p class="quote">

                    "Elldy Analyst highlights unusual sales movement
                    before our weekly review. We can see anomalies,
                    forecast changes, and key updates without
                    manually checking every chart."

                </p>

                <div class="testimonial-person">

                    <div class="testimonial-avatar">AM</div>

                    <div>
                        <strong>Anita Menon</strong>
                        <span>BI Manager, Retail Group</span>
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- =====================================================
     PRICING (NEW)
====================================================== -->

<!-- <section
    class="section pricing"
    id="pricing">

    <div class="container">

        <div class="text-center reveal">

            <div class="section-kicker">
                PRICING
            </div>

            <h2 class="section-title">

                Flexible usage meters
                <br>

                <span class="gradient-text">
                    for every team.
                </span>

            </h2>

            <p class="section-copy mx-auto">

                Start with free credits, then pay only for the
                meters your workspace actually uses — rows,
                dashboards, API, Brick, AI, or analysis.

            </p>

        </div>


        <div class="pricing-grid reveal">


            <div class="price-card">

                <span class="price-tag">Free Access</span>

                <h4>Elldy Free</h4>

                <div class="price-amount">
                    $0 <span>/ forever</span>
                </div>

                <ul class="price-features">

                    <li><i class="bi bi-check-circle-fill"></i> Free access to Elldy</li>
                    <li><i class="bi bi-check-circle-fill"></i> 10K rows free credits</li>
                    <li><i class="bi bi-check-circle-fill"></i> 1 user workspace</li>
                    <li><i class="bi bi-check-circle-fill"></i> CSV / Excel upload</li>
                    <li><i class="bi bi-check-circle-fill"></i> Basic charts & public sharing</li>
                    <li><i class="bi bi-check-circle-fill"></i> Basic AI insights</li>

                </ul>

                <a href="https://elldy.com/signup/" class="price-cta">Start Free</a>

            </div>


            <div class="price-card">

                <span class="price-tag">Starter</span>

                <h4>Elldy Starter</h4>

                <div class="price-amount">
                    <span class="price-strike">₹999</span> ₹349 <span>/month</span>
                </div>

                <ul class="price-features">

                    <li><i class="bi bi-check-circle-fill"></i> Single user workspace</li>
                    <li><i class="bi bi-check-circle-fill"></i> Up to 0.5M total rows</li>
                    <li><i class="bi bi-check-circle-fill"></i> 5 baskets</li>
                    <li><i class="bi bi-check-circle-fill"></i> Smart dashboards & visualizations</li>
                    <li><i class="bi bi-check-circle-fill"></i> Basic forecasting</li>
                    <li><i class="bi bi-check-circle-fill"></i> Limited AI insights</li>

                </ul>

                <a href="https://elldy.com/pricing/" class="price-cta">Get Starter</a>

            </div>


            <div class="price-card popular">

                <span class="price-tag">Most Popular</span>

                <h4>Elldy Growth</h4>

                <div class="price-amount">
                    <span class="price-strike">₹2499</span> ₹1499 <span>/month</span>
                </div>

                <ul class="price-features">

                    <li><i class="bi bi-check-circle-fill"></i> 3 users included</li>
                    <li><i class="bi bi-check-circle-fill"></i> Up to 10M total rows</li>
                    <li><i class="bi bi-check-circle-fill"></i> Unlimited dashboards</li>
                    <li><i class="bi bi-check-circle-fill"></i> Embeddable dashboards</li>
                    <li><i class="bi bi-check-circle-fill"></i> Advanced AI insights & forecasting</li>
                    <li><i class="bi bi-check-circle-fill"></i> Priority support</li>

                </ul>

                <a href="https://elldy.com/pricing/" class="price-cta">Get Growth</a>

            </div>


            <div class="price-card">

                <span class="price-tag">Enterprise</span>

                <h4>Elldy Enterprise</h4>

                <div class="price-amount">
                    Custom
                </div>

                <ul class="price-features">

                    <li><i class="bi bi-check-circle-fill"></i> Multi-user teams</li>
                    <li><i class="bi bi-check-circle-fill"></i> Unlimited data scale</li>
                    <li><i class="bi bi-check-circle-fill"></i> Custom integrations (ERP, APIs)</li>
                    <li><i class="bi bi-check-circle-fill"></i> White-label dashboards</li>
                    <li><i class="bi bi-check-circle-fill"></i> Dedicated account manager</li>

                </ul>

                <a href="https://elldy.com/contact/" class="price-cta">Contact Sales</a>

            </div>


        </div>


        <div class="text-center reveal mt-5">

            <a
                href="https://elldy.com/pricing/#cost-calculator"
                target="_blank"
                class="btn btn-dark px-4 py-3 fw-bold">

                Estimate your cost

                <i class="bi bi-arrow-up-right ms-2"></i>

            </a>

        </div>

    </div>

</section> -->



<!-- =====================================================
     BLOG PREVIEW (NEW)
====================================================== -->

<!-- <section class="section blog" id="blog">

    <div class="container">

        <div class="text-center reveal">

            <div class="section-kicker">
                FEATURED BLOG POSTS
            </div>

            <h2 class="section-title">

                Practical guides for
                <br>

                <span class="gradient-text">
                    better analytics.
                </span>

            </h2>

            <p class="section-copy mx-auto">

                Short, useful posts on BI, dashboards, forecasting,
                embedded analytics, and data workflows.

            </p>

        </div>


        <div class="blog-grid reveal">

            <div class="blog-card">

                <span class="blog-tag">Data Intelligence</span>

                <h5>
                    Natural Language Business Intelligence: Ask
                    Questions About Your Data Without SQL
                </h5>

                <p>
                    How business users can ask questions about their
                    data in everyday language, explore insights, and
                    make faster data-driven decisions.
                </p>

                <a
                    href="https://elldy.com/blog/natural-language-business-intelligence-ask-questions-about-your-data-without-sql/"
                    target="_blank"
                    class="blog-read">

                    Read article <i class="bi bi-arrow-right"></i>

                </a>

            </div>


            <div class="blog-card">

                <span class="blog-tag">Data Intelligence</span>

                <h5>
                    Can AI Replace Business Intelligence? What
                    Businesses Should Know in 2026
                </h5>

                <p>
                    How AI is transforming BI, automating analytics,
                    generating intelligent insights, and helping
                    businesses decide faster.
                </p>

                <a
                    href="https://elldy.com/blog/can-ai-replace-business-intelligence-what-businesses-should-know-in-2026/"
                    target="_blank"
                    class="blog-read">

                    Read article <i class="bi bi-arrow-right"></i>

                </a>

            </div>


            <div class="blog-card">

                <span class="blog-tag">Data Intelligence</span>

                <h5>
                    What Is Self-Service BI? How Businesses Can
                    Analyze Data Without SQL
                </h5>

                <p>
                    How Self-Service BI lets business users explore
                    data, build dashboards, and monitor KPIs without
                    complex SQL.
                </p>

                <a
                    href="https://elldy.com/blog/what-is-self-service-bi-how-businesses-can-analyze-data-without-sql/"
                    target="_blank"
                    class="blog-read">

                    Read article <i class="bi bi-arrow-right"></i>

                </a>

            </div>

        </div>


        <div class="text-center reveal mt-5">

            <a
                href="https://elldy.com/blog/"
                target="_blank"
                class="btn btn-dark px-4 py-3 fw-bold">

                View all posts

                <i class="bi bi-arrow-up-right ms-2"></i>

            </a>

        </div>

    </div>

</section> -->



<!-- =====================================================
     ACADEMY (expanded with Data Analyst Program tracks)
====================================================== -->

<section
    class="section academy"
    id="academy">

    <div class="container">


        <div class="academy-box reveal">


            <div class="academy-content">


                <div class="academy-pill">

                    ELLDY ACADEMY · DATA ANALYST PROGRAM

                </div>


                <h2>

                    Learn data.
                    <br>

                    Build intelligence.

                </h2>


                <p>

                    Elldy Academy is the official learning initiative of the Elldy platform — practical, business-case-driven training in data analytics and BI, from connecting data to building dashboards to AI-powered insights. Certification is issued by Arklytics Solutions and Innovations together with the Elldy Platform.

                </p>


                <div class="academy-features">

                    <span>
                        Practical Analytics
                    </span>

                    <span>
                        Business Intelligence
                    </span>

                    <span>
                        Real Business Cases
                    </span>

                    <span>
                        Dashboard Building
                    </span>

                    <span>
                        Certification
                    </span>

                </div>


                <div class="academy-tracks">

                    <div class="academy-track">

                        <strong>Who can join</strong>

                        <ul>
                            <li>Students & fresh graduates</li>
                            <li>Aspiring data / business analysts</li>
                            <li>Working professionals upskilling</li>
                            <li>No prior coding experience needed</li>
                        </ul>

                    </div>


                    <div class="academy-track">

                        <strong>What you'll work on</strong>

                        <ul>
                            <li>Data cleaning & preparation</li>
                            <li>ETL & data modeling (no-code)</li>
                            <li>Business & trend analysis</li>
                            <li>AI-driven insights with Elldy</li>
                        </ul>

                    </div>


                    <div class="academy-track">

                        <strong>Program benefits</strong>

                        <ul>
                            <li>Data Analyst experience certificate</li>
                            <li>1 year free Elldy Premium access</li>
                            <li>Portfolio-ready dashboard work</li>
                            <li>Career credibility & exposure</li>
                        </ul>

                    </div>

                </div>


                <div class="hero-actions">

                    <a
                        href="https://academy.elldy.com/"
                        target="_blank"
                        class="btn btn-dark px-4 py-3 fw-bold">

                        Explore Elldy Academy

                        <i class="bi bi-arrow-up-right ms-2"></i>

                    </a>


                    <a
                        href="https://academy.elldy.com/programs"
                        target="_blank"
                        class="btn btn-outline-dark px-4 py-3 fw-bold">

                        View Programs

                    </a>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- =====================================================
     STATS
====================================================== -->

<section class="stats">

    <div class="container">

        <div class="row">


            <div class="col-6 col-lg-3">

                <div class="stat">

                    <strong>
                        AI
                    </strong>

                    <span>
                        Intelligence Layer
                    </span>

                </div>

            </div>


            <div class="col-6 col-lg-3">

                <div class="stat">

                    <strong>
                        BI
                    </strong>

                    <span>
                        Business Intelligence
                    </span>

                </div>

            </div>


            <div class="col-6 col-lg-3">

                <div class="stat">

                    <strong>
                        API
                    </strong>

                    <span>
                        Data Connectivity
                    </span>

                </div>

            </div>


            <div class="col-6 col-lg-3">

                <div class="stat">

                    <strong>
                        Cloud
                    </strong>

                    <span>
                        Data Platform
                    </span>

                </div>

            </div>


        </div>

    </div>

</section>



<!-- =====================================================
     FINAL CTA
====================================================== -->

<section class="final">

    <div class="final-content container reveal">


        <div class="section-kicker">
            START WITH YOUR DATA
        </div>


        <h2>

            Your data already has
            the answers.

        </h2>


        <p>

            Connect your data, explore your business,
            build intelligent dashboards and discover
            the signals that matter with Elldy.

        </p>


        <div class="hero-actions justify-content-center">

            <a
                href="https://elldy.com/signup/"
                class="btn-main">

                Start Free

                <i class="bi bi-arrow-up-right"></i>

            </a>


            <a
                href="https://elldy.com/"
                target="_blank"
                class="btn-outline-main">

                Explore Elldy

                <i class="bi bi-arrow-up-right"></i>

            </a>

        </div>

    </div>

</section>



<!-- =====================================================
     FOOTER (Arklytics branding reinforced)
====================================================== -->

<footer>

    <div class="container">


        <div class="row g-5">


            <div class="col-lg-5">

                <div class="footer-brand">
                    <img src="images/arklytics-labs-logo.png"
                        alt="Arklytics Labs"
                        class="footer-logo"
                        style="width: 200px; height: auto; background: #ffffff; padding: 8px 12px; border-radius: 6px;">
                </div>


                <p class="footer-description">

                    Elldy is a cloud-based Data Intelligence
                    and Business Intelligence platform for
                    connecting data, analyzing business
                    performance, building dashboards and
                    discovering intelligent insights.

                </p>


                <div class="footer-maker">

                    <i class="bi bi-patch-check-fill"></i>

                    A product of Arklytics Labs

                </div>

            </div>


            <div class="col-6 col-lg-2">

                <div class="footer-title">
                    Platform
                </div>

                <a
                    href="https://elldy.com/"
                    class="footer-link">

                    Home

                </a>

                <a
                    href="https://elldy.com/embed/"
                    class="footer-link">

                    Embedded Analytics

                </a>

                <a
                    href="https://elldy.com/bi-reportings/"
                    class="footer-link">

                    BI Reporting

                </a>

                <a
                    href="https://elldy.com/ai-forecasting/"
                    class="footer-link">

                    AI Forecasting

                </a>

                <a
                    href="https://elldy.com/pricing/"
                    class="footer-link">

                    Pricing

                </a>

            </div>


            <div class="col-6 col-lg-2">

                <div class="footer-title">
                    Data
                </div>

                <a
                    href="https://elldy.com/docs/elldy-brick/"
                    class="footer-link">

                    Elldy Brick

                </a>

                <a
                    href="https://elldy.com/docs/custom-api/"
                    class="footer-link">

                    API Docs

                </a>

                <a
                    href="https://elldy.com/documentation/"
                    class="footer-link">

                    Documentation

                </a>

                <a
                    href="https://elldy.com/security/"
                    class="footer-link">

                    Security

                </a>

            </div>


            <div class="col-6 col-lg-2">

                <div class="footer-title">
                    Company
                </div>

                <a
                    href="https://elldy.com/about-us/"
                    class="footer-link">

                    About

                </a>

                <a
                    href="https://elldy.com/blog/"
                    class="footer-link">

                    Blog

                </a>

                <a
                    href="https://academy.elldy.com/"
                    class="footer-link">

                    Academy

                </a>

                <a
                    href="https://elldy.com/showcase/"
                    class="footer-link">

                    Showcase

                </a>

                <a
                    href="https://elldy.com/contact/"
                    class="footer-link">

                    Contact

                </a>

            </div>


        </div>


        <div class="copyright">

            <div
                class="d-flex justify-content-between flex-wrap gap-2">

                <span>

                    © <?php echo date("Y"); ?>
                    Elldy — Arklytics Labs LLP.
                    All rights reserved.

                </span>


                <span>

                    Data • Intelligence • Decisions

                </span>

            </div>

        </div>

    </div>

</footer>



<!-- =====================================================
     BOOTSTRAP JS
====================================================== -->

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
</script>



<script>

document.addEventListener(
    "DOMContentLoaded",
    function () {


        /* =================================================
           NAVBAR
        ================================================= */

        const navbar =
            document.querySelector(".navbar");


        window.addEventListener(
            "scroll",
            function () {

                if (window.scrollY > 45) {

                    navbar.classList.add(
                        "scrolled"
                    );

                } else {

                    navbar.classList.remove(
                        "scrolled"
                    );

                }

            }
        );


        /* =================================================
           SCROLL REVEAL
        ================================================= */

        const reveals =
            document.querySelectorAll(
                ".reveal"
            );


        const observer =
            new IntersectionObserver(
                function (entries) {

                    entries.forEach(
                        function (entry) {

                            if (
                                entry.isIntersecting
                            ) {

                                entry.target.classList.add(
                                    "active"
                                );

                                observer.unobserve(
                                    entry.target
                                );

                            }

                        }
                    );

                },
                {
                    threshold: .12
                }
            );


        reveals.forEach(
            function (element) {

                observer.observe(element);

            }
        );


        /* =================================================
           HERO MOUSE GLOW
        ================================================= */

        const hero =
            document.querySelector(".hero");

        const glow =
            document.querySelector("#heroGlow");


        if (hero && glow) {

            hero.addEventListener(
                "mousemove",
                function (event) {

                    const rect =
                        hero.getBoundingClientRect();


                    glow.style.left =
                        (
                            event.clientX -
                            rect.left
                        ) + "px";


                    glow.style.top =
                        (
                            event.clientY -
                            rect.top
                        ) + "px";

                }
            );

        }


        /* =================================================
           FLOW CARD STAGGER
        ================================================= */

        const flowCards =
            document.querySelectorAll(
                ".flow-card"
            );


        flowCards.forEach(
            function (card, index) {

                card.style.transitionDelay =
                    (index * 80) + "ms";

            }
        );


        /* =================================================
           SIGNAL HOVER
        ================================================= */

        const signals =
            document.querySelectorAll(
                ".signal"
            );


        signals.forEach(
            function (signal) {

                signal.addEventListener(
                    "mouseenter",
                    function () {

                        signal.style.borderColor =
                            "rgba(22,217,197,.28)";

                    }
                );


                signal.addEventListener(
                    "mouseleave",
                    function () {

                        signal.style.borderColor =
                            "rgba(255,255,255,.07)";

                    }
                );

            }
        );


        /* =================================================
           SMOOTH ANCHORS
        ================================================= */

        document
            .querySelectorAll(
                'a[href^="#"]'
            )
            .forEach(
                function (link) {

                    link.addEventListener(
                        "click",
                        function (event) {

                            const id =
                                this.getAttribute(
                                    "href"
                                );


                            const target =
                                document.querySelector(
                                    id
                                );


                            if (!target)
                                return;


                            event.preventDefault();


                            const offset = 80;


                            const top =
                                target.getBoundingClientRect()
                                .top +
                                window.scrollY -
                                offset;


                            window.scrollTo({

                                top:
                                    top,

                                behavior:
                                    "smooth"

                            });


                            /* close mobile menu */

                            const nav =
                                document.querySelector(
                                    "#mainNav"
                                );


                            if (
                                nav &&
                                nav.classList.contains(
                                    "show"
                                )
                            ) {

                                bootstrap
                                    .Collapse
                                    .getOrCreateInstance(
                                        nav
                                    )
                                    .hide();

                            }

                        }
                    );

                }
            );


        /* =================================================
           PARALLAX DASHBOARD
        ================================================= */

        const dashboard =
            document.querySelector(
                ".dashboard"
            );


        if (
            dashboard &&
            window.innerWidth > 991
        ) {

            document.addEventListener(
                "mousemove",
                function (event) {

                    const x =
                        (
                            event.clientX /
                            window.innerWidth -
                            .5
                        ) * 7;


                    const y =
                        (
                            event.clientY /
                            window.innerHeight -
                            .5
                        ) * 5;


                    dashboard.style.marginLeft =
                        x + "px";


                    dashboard.style.marginTop =
                        y + "px";

                }
            );

        }


        /* =================================================
           REDUCE MOTION
        ================================================= */

        const reduced =
            window.matchMedia(
                "(prefers-reduced-motion: reduce)"
            ).matches;


        if (reduced) {

            document
                .querySelectorAll(
                    ".orbit, .dashboard, .brick-icon"
                )
                .forEach(
                    function (element) {

                        element.style.animation =
                            "none";

                    }
                );

        }

    }
);

</script>


</body>
</html>
