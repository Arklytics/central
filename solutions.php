<?php
/*
|--------------------------------------------------------------------------
| Arklytics — Solutions
| Elldy-focused Solutions Page
|--------------------------------------------------------------------------
*/
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Solutions | Elldy AI Data Intelligence | Arklytics</title>
    <link rel="icon" type="image/png" href="images/arklytics-favicon.png">

    <meta name="description" content="Discover Elldy, the AI-powered Data Intelligence and Business Intelligence platform by Arklytics. Connect data, automate preparation, build dashboards, discover insights and monitor business performance.">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Space+Grotesk:wght@500;600;700&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css"> 
    <style>
        :root{
            --ink:#050914;
            --deep:#081020;
            --panel:#0c1527;
            --panel2:#101c32;
            --paper:#fff;
            --soft:#f4f7fb;
            --line:#e4e9f1;
            --line-dark:#1c2a43;
            --cyan:#13d8c0;
            --cyan2:#79f4e4;
            --violet:#7666f5;
            --violet2:#b6adff;
            --blue:#5b8cff;
            --amber:#ff9a52;
            --muted:#657187;
            --muted-dark:#91a0b8;
            --text:#09111f;
        }

        *{box-sizing:border-box}
        html{scroll-behavior:smooth}
        body{
            margin:0;
            color:var(--text);
            background:#fff;
            font-family:Inter,system-ui,sans-serif;
            overflow-x:hidden;
        }
        h1,h2,h3,h4,h5,h6{
            font-family:"Space Grotesk",Inter,sans-serif;
        }
        a{text-decoration:none}
        .container{max-width:1220px}
        ::selection{background:#e8e5ff;color:#5d4de5}

        /* ================= HERO ================= */
        .grand-hero{
            min-height:760px;
            position:relative;
            overflow:hidden;
            color:#fff;
            background:
                radial-gradient(circle at 75% 20%,rgba(118,102,245,.28),transparent 28%),
                radial-gradient(circle at 15% 70%,rgba(19,216,192,.14),transparent 30%),
                linear-gradient(135deg,#030711 0%,#071122 52%,#0a1427 100%);
        }

        .hero-grid{
            position:absolute;
            inset:0;
            opacity:.38;
            background-image:
                linear-gradient(rgba(255,255,255,.035) 1px,transparent 1px),
                linear-gradient(90deg,rgba(255,255,255,.035) 1px,transparent 1px);
            background-size:58px 58px;
            mask-image:radial-gradient(ellipse 80% 70% at 70% 30%,black,transparent 85%);
        }

        .hero-orb{
            position:absolute;
            border-radius:50%;
            filter:blur(1px);
            pointer-events:none;
        }
        .orb-a{
            width:520px;height:520px;
            right:-180px;top:-170px;
            background:radial-gradient(circle,rgba(118,102,245,.18),transparent 67%);
            animation:orbFloat 9s ease-in-out infinite;
        }
        .orb-b{
            width:420px;height:420px;
            left:-220px;bottom:-200px;
            background:radial-gradient(circle,rgba(19,216,192,.14),transparent 67%);
            animation:orbFloat 11s ease-in-out infinite reverse;
        }
        @keyframes orbFloat{
            0%,100%{transform:translate3d(0,0,0)}
            50%{transform:translate3d(20px,-18px,0)}
        }

        .hero-content{
            position:relative;
            z-index:5;
            padding:115px 0 80px;
        }

        .eyebrow{
            display:inline-flex;
            align-items:center;
            gap:10px;
            border:1px solid rgba(255,255,255,.12);
            background:rgba(255,255,255,.055);
            backdrop-filter:blur(12px);
            padding:9px 14px;
            border-radius:99px;
            color:#c8d3e8;
            font-size:12px;
            font-weight:800;
            letter-spacing:.06em;
            text-transform:uppercase;
        }
        .eyebrow i{color:var(--cyan)}

        .hero h1{
            font-size:clamp(3.2rem,6.3vw,6.4rem);
            line-height:.96;
            letter-spacing:-.055em;
            font-weight:600;
            max-width:760px;
            margin:26px 0 24px;
        }
        .hero h1 .gradient{
            background:linear-gradient(100deg,#fff 5%,#a8fff3 42%,#a59bff 90%);
            -webkit-background-clip:text;
            background-clip:text;
            color:transparent;
        }
        .hero-copy{
            max-width:650px;
            color:#aab8cd;
            font-size:18px;
            line-height:1.75;
        }

        .hero-buttons{
            display:flex;
            flex-wrap:wrap;
            gap:12px;
            margin-top:34px;
        }
        .btn-hero{
            border:0;
            padding:14px 22px;
            border-radius:12px;
            font-weight:800;
            color:#061018;
            background:var(--cyan);
            box-shadow:0 16px 45px rgba(19,216,192,.20);
            transition:.3s ease;
        }
        .btn-hero:hover{
            color:#061018;
            transform:translateY(-4px);
            box-shadow:0 22px 55px rgba(19,216,192,.30);
        }
        .btn-outline-hero{
            color:#fff;
            border:1px solid rgba(255,255,255,.17);
            background:rgba(255,255,255,.04);
            padding:13px 21px;
            border-radius:12px;
            font-weight:800;
            transition:.3s ease;
        }
        .btn-outline-hero:hover{
            color:#fff;
            border-color:rgba(255,255,255,.35);
            background:rgba(255,255,255,.08);
        }

        .hero-proof{
            display:flex;
            flex-wrap:wrap;
            gap:22px;
            margin-top:28px;
            color:#8291aa;
            font-size:12px;
            font-weight:600;
        }
        .hero-proof span{
            display:flex;
            gap:7px;
            align-items:center;
        }
        .hero-proof i{color:var(--cyan)}

        /* ================= DATA VISUAL ================= */
        .data-stage{
            position:relative;
            height:560px;
            perspective:1200px;
        }
        .dashboard-window{
            position:absolute;
            width:min(650px,100%);
            right:-30px;
            top:35px;
            border:1px solid rgba(255,255,255,.12);
            border-radius:22px;
            background:rgba(10,20,36,.88);
            box-shadow:0 50px 120px rgba(0,0,0,.45);
            overflow:hidden;
            transform-style:preserve-3d;
            transition:transform .2s ease;
            backdrop-filter:blur(18px);
        }
        .window-bar{
            height:44px;
            display:flex;
            align-items:center;
            gap:7px;
            padding:0 15px;
            border-bottom:1px solid rgba(255,255,255,.08);
            background:rgba(255,255,255,.025);
        }
        .window-dot{
            width:7px;height:7px;border-radius:50%;
            background:#46536a;
        }
        .window-title{
            margin-left:auto;
            font:500 9px "JetBrains Mono";
            color:#6f809c;
        }
        .dashboard-body{padding:19px}
        .dash-top{
            display:flex;
            justify-content:space-between;
            align-items:flex-start;
            margin-bottom:14px;
        }
        .dash-top strong{font-size:14px}
        .dash-top small{
            display:block;
            color:#73839b;
            margin-top:4px;
            font-size:9.5px;
        }
        .live{
            color:var(--cyan);
            background:rgba(19,216,192,.09);
            border:1px solid rgba(19,216,192,.14);
            border-radius:99px;
            padding:5px 9px;
            font:700 9px "JetBrains Mono";
        }

        .kpis{
            display:grid;
            grid-template-columns:repeat(4,1fr);
            gap:8px;
        }
        .kpi-box{
            border:1px solid rgba(255,255,255,.08);
            background:rgba(255,255,255,.025);
            border-radius:12px;
            padding:12px;
            transition:.3s ease;
        }
        .kpi-box:hover{
            transform:translateY(-5px);
            border-color:rgba(19,216,192,.35);
            background:rgba(19,216,192,.035);
        }
        .kpi-box small{
            display:block;
            color:#708099;
            font-size:8.5px;
            margin-bottom:7px;
        }
        .kpi-box b{
            display:block;
            color:#fff;
            font:600 15px "JetBrains Mono";
        }
        .up{color:var(--cyan);font-size:9px;font-weight:800}
        .down{color:var(--amber);font-size:9px;font-weight:800}

        .dashboard-grid{
            display:grid;
            grid-template-columns:1.5fr 1fr;
            gap:9px;
            margin-top:9px;
        }
        .chart-card{
            border:1px solid rgba(255,255,255,.08);
            border-radius:13px;
            padding:12px;
            background:rgba(255,255,255,.018);
        }
        .chart-title{
            color:#92a1b8;
            font-size:9.5px;
            font-weight:800;
            margin-bottom:9px;
        }
        .chart-area{height:130px}
        .chart-area svg{width:100%;height:100%}
        .chart-line{
            fill:none;
            stroke:var(--cyan);
            stroke-width:3;
            stroke-linecap:round;
            stroke-linejoin:round;
            stroke-dasharray:520;
            stroke-dashoffset:520;
        }
        .chart-line.second{
            stroke:var(--violet);
            stroke-width:2;
            stroke-dasharray:5 6;
        }
        .chart-visible .chart-line{
            animation:drawLine 1.8s ease forwards;
        }
        .chart-visible .chart-line.second{animation-delay:.3s}
        @keyframes drawLine{to{stroke-dashoffset:0}}

        .donut{
            width:92px;height:92px;
            border-radius:50%;
            margin:15px auto 5px;
            background:conic-gradient(var(--violet) 0 39%,var(--cyan) 39% 71%,#26354d 71% 100%);
            position:relative;
            transform:scale(.75);
            opacity:.3;
            transition:1s cubic-bezier(.2,.8,.2,1);
        }
        .donut:after{
            content:"";
            position:absolute;
            inset:20px;
            background:#0d192d;
            border-radius:50%;
        }
        .donut.visible{
            transform:scale(1);
            opacity:1;
        }

        .ai-alert{
            margin-top:9px;
            border:1px solid rgba(118,102,245,.25);
            background:linear-gradient(100deg,rgba(118,102,245,.10),rgba(19,216,192,.035));
            border-radius:13px;
            padding:13px;
        }
        .ai-label{
            color:var(--violet2);
            font-size:9px;
            font-weight:800;
            text-transform:uppercase;
            letter-spacing:.08em;
        }
        .ai-alert strong{
            display:block;
            font-size:12px;
            margin:5px 0;
        }
        .ai-alert span{
            color:#7f8ea6;
            font-size:9.5px;
            line-height:1.5;
        }

        .floating-insight{
            position:absolute;
            left:-45px;
            bottom:45px;
            width:255px;
            padding:16px;
            border:1px solid rgba(255,255,255,.10);
            border-radius:16px;
            background:rgba(7,15,28,.92);
            backdrop-filter:blur(15px);
            box-shadow:0 25px 70px rgba(0,0,0,.35);
            animation:floatCard 6s ease-in-out infinite;
            z-index:3;
        }
        @keyframes floatCard{
            0%,100%{transform:translateY(0)}
            50%{transform:translateY(-12px)}
        }
        .floating-insight .mini{
            color:var(--cyan);
            font:800 9px "JetBrains Mono";
            text-transform:uppercase;
        }
        .floating-insight strong{
            display:block;
            font-size:13px;
            margin:7px 0 4px;
        }
        .floating-insight p{
            color:#8493aa;
            font-size:10px;
            line-height:1.5;
            margin:0;
        }

        /* particles */
        .particle{
            position:absolute;
            width:4px;height:4px;
            border-radius:50%;
            background:var(--cyan);
            box-shadow:0 0 18px var(--cyan);
            opacity:.4;
            animation:particleFloat 6s ease-in-out infinite;
        }
        @keyframes particleFloat{
            0%,100%{transform:translate(0,0);opacity:.2}
            50%{transform:translate(18px,-28px);opacity:.8}
        }

        /* ================= COMMON ================= */
        .section{
            padding:110px 0;
            position:relative;
        }
        .section-soft{background:var(--soft)}
        .section-dark{
            background:var(--deep);
            color:#fff;
        }
        .kicker{
            font:800 11px "JetBrains Mono";
            text-transform:uppercase;
            letter-spacing:.14em;
            color:#6c7890;
        }
        .kicker-dark{color:#70eadb}
        .section h2{
            font-size:clamp(2.3rem,4.2vw,4.2rem);
            line-height:1.03;
            letter-spacing:-.045em;
            font-weight:600;
        }
        .lead{
            color:var(--muted);
            line-height:1.75;
            max-width:720px;
        }
        .lead-dark{color:var(--muted-dark)}

        /* reveal */
        .reveal{
            opacity:0;
            transform:translateY(35px);
            transition:opacity .8s cubic-bezier(.2,.7,.2,1),
                       transform .8s cubic-bezier(.2,.7,.2,1);
        }
        .revealed{opacity:1;transform:none}
        .delay-1{transition-delay:.1s}
        .delay-2{transition-delay:.2s}
        .delay-3{transition-delay:.3s}

        /* ================= DIFFERENCE ================= */
        .statement{
            font:600 clamp(2.1rem,4.3vw,4rem) "Space Grotesk";
            line-height:1.1;
            letter-spacing:-.045em;
            max-width:1000px;
        }
        .statement .muted{color:#a6afbf}
        .statement .highlight{color:var(--violet)}

        .compare{
            display:grid;
            grid-template-columns:1fr 1fr;
            gap:18px;
            margin-top:55px;
        }
        .compare-card{
            border-radius:22px;
            padding:30px;
        }
        .compare-old{
            border:1px solid var(--line);
            background:#fff;
        }
        .compare-new{
            color:#fff;
            background:var(--ink);
            box-shadow:0 30px 70px rgba(5,9,20,.16);
        }
        .compare-card h4{
            font-size:17px;
            margin-bottom:22px;
        }
        .compare-card ul{
            list-style:none;
            padding:0;
            margin:0;
        }
        .compare-card li{
            display:flex;
            gap:11px;
            padding:10px 0;
            color:var(--muted);
            font-size:13.5px;
            line-height:1.55;
        }
        .compare-new li{color:#bdc8db}
        .compare-old li i{color:#b7c0cf}
        .compare-new li i{color:var(--cyan)}

        /* ================= CAPABILITIES ================= */
        .capability{
            display:grid;
            grid-template-columns:1fr 1fr;
            gap:70px;
            align-items:center;
            padding:75px 0;
            border-top:1px solid var(--line);
        }
        .capability:last-child{border-bottom:1px solid var(--line)}
        .cap-number{
            color:var(--violet);
            font:800 11px "JetBrains Mono";
        }
        .capability h3{
            font-size:clamp(1.8rem,3vw,2.8rem);
            letter-spacing:-.035em;
            margin:13px 0;
        }
        .capability p{
            color:var(--muted);
            line-height:1.75;
            max-width:500px;
        }
        .chips{
            display:flex;
            flex-wrap:wrap;
            gap:8px;
            margin-top:20px;
        }
        .chips span{
            border:1px solid var(--line);
            border-radius:99px;
            padding:6px 11px;
            color:#42506a;
            font-size:10.5px;
            font-weight:800;
        }

        .mock{
            border:1px solid var(--line);
            border-radius:20px;
            padding:18px;
            background:#fff;
            box-shadow:0 30px 70px rgba(12,30,60,.08);
            transition:.4s ease;
        }
        .mock:hover{
            transform:translateY(-7px);
            box-shadow:0 38px 90px rgba(12,30,60,.13);
        }
        .mock-dark{
            background:#0c172a;
            border-color:#1b2a43;
            color:#fff;
        }
        .mock-head{
            display:flex;
            gap:6px;
            border-bottom:1px solid var(--line);
            padding-bottom:12px;
            margin-bottom:15px;
        }
        .mock-dark .mock-head{border-color:#1c2a43}
        .mock-head i{
            width:7px;height:7px;
            border-radius:50%;
            background:#dbe2ec;
        }
        .mock-dark .mock-head i{background:#33445e}

        .mock-row{
            display:flex;
            justify-content:space-between;
            align-items:center;
            border-top:1px solid var(--line);
            padding:11px 3px;
            font:500 10.5px "JetBrains Mono";
            color:#657187;
        }
        .mock-dark .mock-row{
            border-color:#1c2a43;
            color:#8b9ab1;
        }
        .ready{color:#0baf9d;font-weight:800}
        .open{color:var(--violet);font-weight:800}

        /* ================= WORKFLOW ================= */
        .workflow{
            display:grid;
            grid-template-columns:repeat(6,1fr);
            margin-top:58px;
            position:relative;
        }
        .workflow:before{
            content:"";
            position:absolute;
            top:27px;
            left:5%;
            right:5%;
            height:1px;
            background:linear-gradient(90deg,var(--cyan),var(--violet),var(--cyan));
            opacity:.3;
        }
        .workflow-step{
            position:relative;
            text-align:center;
            padding:0 10px;
        }
        .workflow-icon{
            width:54px;height:54px;
            margin:auto;
            display:grid;
            place-items:center;
            border-radius:16px;
            color:var(--cyan);
            border:1px solid rgba(19,216,192,.2);
            background:#0d1b2f;
            box-shadow:0 12px 35px rgba(0,0,0,.18);
            position:relative;
            z-index:2;
            transition:.35s ease;
        }
        .workflow-step:hover .workflow-icon{
            transform:translateY(-8px) scale(1.08);
            border-color:rgba(19,216,192,.55);
            box-shadow:0 18px 45px rgba(19,216,192,.12);
        }
        .workflow-step h5{
            margin:15px 0 7px;
            font-size:15px;
        }
        .workflow-step p{
            margin:0;
            color:#8493aa;
            font-size:11px;
            line-height:1.55;
        }

        /* ================= ANALYST ================= */
        .analyst{
            border:1px solid #20314c;
            background:#0c172a;
            border-radius:24px;
            padding:22px;
            box-shadow:0 35px 90px rgba(0,0,0,.25);
        }
        .bubble{
            padding:13px 15px;
            border-radius:14px;
            font-size:12.5px;
            line-height:1.65;
            max-width:88%;
        }
        .question{
            background:#172743;
            color:#dbe5f6;
            margin-left:auto;
            margin-bottom:12px;
        }
        .answer{
            border:1px solid #20324f;
            background:#0e1d34;
            color:#bdc9dc;
        }
        .answer label{
            display:block;
            color:var(--cyan);
            font:800 9px "JetBrains Mono";
            text-transform:uppercase;
            margin-bottom:7px;
        }
        .signal-list{
            display:grid;
            gap:8px;
            margin-top:13px;
        }
        .signal{
            display:flex;
            justify-content:space-between;
            padding:10px 12px;
            border:1px solid #20324f;
            border-radius:10px;
            color:#9aa9bf;
            font-size:11px;
            transition:.3s ease;
        }
        .signal:hover{
            transform:translateX(5px);
            border-color:#3a547a;
        }
        .badge-level{
            border-radius:99px;
            padding:4px 8px;
            font-size:8.5px;
            font-weight:800;
        }
        .high{background:rgba(255,154,82,.12);color:var(--amber)}
        .medium{background:rgba(118,102,245,.15);color:#afa7ff}
        .normal{background:rgba(19,216,192,.10);color:var(--cyan)}

        /* ================= CONNECTIONS ================= */
        .source-grid{
            display:grid;
            grid-template-columns:repeat(4,1fr);
            gap:12px;
            margin-top:45px;
        }
        .source{
            border:1px solid var(--line);
            border-radius:16px;
            padding:22px 18px;
            background:#fff;
            transition:.35s ease;
        }
        .source:hover{
            transform:translateY(-7px);
            border-color:#c8d1df;
            box-shadow:0 20px 45px rgba(10,25,60,.07);
        }
        .source i{
            color:var(--violet);
            font-size:23px;
        }
        .source strong{
            display:block;
            margin-top:12px;
            font-size:14px;
        }
        .source small{
            color:var(--muted);
            line-height:1.55;
        }

        /* ================= BRICK ================= */
        .brick{
            position:relative;
            overflow:hidden;
            color:#fff;
            background:
                radial-gradient(circle at 85% 20%,rgba(19,216,192,.14),transparent 30%),
                radial-gradient(circle at 10% 80%,rgba(118,102,245,.15),transparent 30%),
                var(--ink);
        }
        .brick-flow{
            display:grid;
            grid-template-columns:1fr 70px 1fr 70px 1fr;
            align-items:center;
            margin-top:55px;
        }
        .brick-node{
            padding:25px 18px;
            border:1px solid #1c2b44;
            border-radius:17px;
            background:rgba(255,255,255,.025);
            text-align:center;
        }
        .brick-node .small-label{
            color:var(--cyan2);
            font:800 9px "JetBrains Mono";
            text-transform:uppercase;
        }
        .brick-node strong{
            display:block;
            margin:9px 0 5px;
        }
        .brick-node small{
            color:#8291aa;
            line-height:1.5;
        }
        .brick-arrow{
            text-align:center;
            color:#48607e;
            font-size:25px;
        }

        /* ================= AUDIENCE ================= */
        .audience{
            display:grid;
            grid-template-columns:repeat(5,1fr);
            gap:12px;
            margin-top:45px;
        }
        .aud-card{
            padding:23px 18px;
            border:1px solid var(--line);
            border-radius:17px;
            transition:.35s ease;
        }
        .aud-card:hover{
            transform:translateY(-7px);
            box-shadow:0 20px 45px rgba(10,25,60,.07);
        }
        .aud-card i{
            color:var(--violet);
            font-size:22px;
        }
        .aud-card h6{
            margin:13px 0 7px;
            font-size:14px;
        }
        .aud-card p{
            margin:0;
            color:var(--muted);
            font-size:11.5px;
            line-height:1.55;
        }

        /* ================= CTA ================= */
        .grand-cta{
            position:relative;
            overflow:hidden;
            color:#fff;
            padding:120px 0;
            background:
                radial-gradient(circle at 80% 20%,rgba(19,216,192,.15),transparent 28%),
                radial-gradient(circle at 15% 80%,rgba(118,102,245,.16),transparent 30%),
                var(--ink);
        }
        .grand-cta:after{
            content:"";
            position:absolute;
            width:700px;height:700px;
            right:-350px;top:-350px;
            border:1px solid rgba(255,255,255,.05);
            border-radius:50%;
            box-shadow:0 0 0 80px rgba(255,255,255,.015),
                       0 0 0 160px rgba(255,255,255,.012);
        }
        .grand-cta h2{
            font-size:clamp(2.7rem,5vw,5.3rem);
            line-height:.98;
            letter-spacing:-.05em;
        }

        /* ================= RESPONSIVE ================= */
        @media(max-width:991px){
            .grand-hero{min-height:auto}
            .hero-content{padding:85px 0 50px}
            .data-stage{height:590px;margin-top:25px}
            .dashboard-window{right:0}
            .floating-insight{left:0}
            .compare,.capability{grid-template-columns:1fr}
            .workflow{grid-template-columns:repeat(3,1fr);gap:35px 10px}
            .workflow:before{display:none}
            .source-grid{grid-template-columns:1fr 1fr}
            .audience{grid-template-columns:repeat(3,1fr)}
            .brick-flow{grid-template-columns:1fr}
            .brick-arrow{transform:rotate(90deg);margin:10px}
        }

        @media(max-width:767px){
            .hero h1{font-size:3rem}
            .hero-copy{font-size:15px}
            .data-stage{height:500px}
            .dashboard-window{top:15px}
            .floating-insight{width:230px;bottom:0}
            .kpis{grid-template-columns:1fr 1fr}
            .dashboard-grid{grid-template-columns:1fr}
            .section{padding:75px 0}
            .workflow{grid-template-columns:1fr 1fr}
            .source-grid,.audience{grid-template-columns:1fr 1fr}
            .capability{gap:35px;padding:55px 0}
        }

        @media(max-width:480px){
            .hero h1{font-size:2.55rem}
            .source-grid,.audience,.workflow{grid-template-columns:1fr}
            .hero-buttons a{width:100%;text-align:center}
            .hero-proof{gap:11px}
            .floating-insight{position:relative;width:100%;bottom:auto;margin-top:15px}
            .data-stage{height:600px}
        }

        @media(prefers-reduced-motion:reduce){
            *,*:before,*:after{
                animation-duration:.01ms!important;
                animation-iteration-count:1!important;
                transition-duration:.01ms!important;
                scroll-behavior:auto!important;
            }
            .reveal{opacity:1!important;transform:none!important}
        }
    </style>
</head>

<body>

<?php include 'header.php'; ?>

<!-- =========================================================
     HERO
========================================================= -->
<section class="grand-hero hero" id="top">

    <div class="hero-grid"></div>
    <div class="hero-orb orb-a"></div>
    <div class="hero-orb orb-b"></div>

    <span class="particle" style="left:12%;top:24%;"></span>
    <span class="particle" style="left:46%;top:16%;animation-delay:-1.4s"></span>
    <span class="particle" style="left:84%;top:62%;animation-delay:-2.8s"></span>
    <span class="particle" style="left:63%;top:82%;animation-delay:-4s"></span>

    <div class="container hero-content">
        <div class="row align-items-center g-5">

            <div class="col-lg-6 reveal">

                <div class="eyebrow">
                    <i class="bi bi-stars"></i>
                    Arklytics Solutions · Powered by Elldy
                </div>

                <h1>
                    Turn your business
                    <span class="gradient">data into intelligence.</span>
                </h1>

                <p class="hero-copy">
                    Elldy is an AI-powered Data Intelligence and Business Intelligence
                    platform designed to help organizations connect data, prepare it,
                    build dashboards, discover insights, forecast performance and
                    continuously understand what is changing.
                </p>

                <div class="hero-buttons">
                    <a href="https://elldy.com/signup/" class="btn-hero">
                        Start with Elldy
                        <i class="bi bi-arrow-up-right ms-2"></i>
                    </a>

                    <a href="#capabilities" class="btn-outline-hero">
                        Explore the platform
                    </a>
                </div>

                <div class="hero-proof">
                    <span><i class="bi bi-check-circle-fill"></i>No-code experience</span>
                    <span><i class="bi bi-check-circle-fill"></i>No SQL for everyday analysis</span>
                    <span><i class="bi bi-check-circle-fill"></i>AI-powered insights</span>
                </div>

            </div>

            <div class="col-lg-6 reveal reveal-delay-2">

                <div class="data-stage">

                    <div class="dashboard-window" id="dashboardWindow">

                        <div class="window-bar">
                            <span class="window-dot"></span>
                            <span class="window-dot"></span>
                            <span class="window-dot"></span>
                            <span class="window-title">elldy.com / intelligence workspace</span>
                        </div>

                        <div class="dashboard-body">

                            <div class="dash-top">
                                <div>
                                    <strong>Business Intelligence Overview</strong>
                                    <small>Live workspace · monitored by Elldy Analyst</small>
                                </div>
                                <span class="live">
                                    <i class="bi bi-circle-fill me-1"></i> LIVE
                                </span>
                            </div>

                            <div class="kpis">
                                <div class="kpi-box">
                                    <small>Total Revenue</small>
                                    <b class="counter" data-target="84.2" data-prefix="₹" data-suffix="L">₹0L</b>
                                    <span class="up">↑ 18.4%</span>
                                </div>
                                <div class="kpi-box">
                                    <small>Customers</small>
                                    <b class="counter" data-target="3847">0</b>
                                    <span class="up">↑ 6.1%</span>
                                </div>
                                <div class="kpi-box">
                                    <small>Avg Order Value</small>
                                    <b class="counter" data-target="2190" data-prefix="₹">₹0</b>
                                    <span class="down">↓ 2.3%</span>
                                </div>
                                <div class="kpi-box">
                                    <small>AI Forecast</small>
                                    <b class="counter" data-target="1.1" data-prefix="₹" data-suffix="Cr">₹0Cr</b>
                                    <span class="up">↑ 12%</span>
                                </div>
                            </div>

                            <div class="dashboard-grid">

                                <div class="chart-card">
                                    <div class="chart-title">Revenue trend · Actual vs Forecast</div>
                                    <div class="chart-area">
                                        <svg viewBox="0 0 400 130" preserveAspectRatio="none">
                                            <path class="chart-line"
                                                d="M0 105 C35 100 48 83 78 91 S125 61 157 72 S196 43 225 55 S270 25 305 36 S350 15 400 8"/>
                                            <path class="chart-line second"
                                                d="M0 112 C45 106 75 92 105 88 S170 72 205 64 S270 49 315 39 S360 29 400 23"/>
                                        </svg>
                                    </div>
                                </div>

                                <div class="chart-card text-center">
                                    <div class="chart-title text-start">Sales mix</div>
                                    <div class="donut" id="donut"></div>
                                    <small style="color:#6f8098;font-size:9px;">Category distribution</small>
                                </div>

                            </div>

                            <div class="ai-alert">
                                <div class="ai-label">
                                    <i class="bi bi-stars me-1"></i> Elldy Analyst
                                </div>
                                <strong id="typingInsight">Revenue movement detected in West region</strong>
                                <span>
                                    Growth is accelerating faster than the recent baseline.
                                    Elldy identifies where the change deserves attention.
                                </span>
                            </div>

                        </div>
                    </div>

                    <div class="floating-insight">
                        <div class="mini">AI insight ready</div>
                        <strong>“Why did revenue change this month?”</strong>
                        <p>
                            Elldy Analyst compares segments, detects movement and
                            points your team toward the areas worth investigating.
                        </p>
                    </div>

                </div>

            </div>

        </div>
    </div>
</section>

<!-- =========================================================
     INTRO STATEMENT
========================================================= -->
<section class="section">
    <div class="container">

        <div class="kicker reveal">Arklytics / Solutions</div>

        <div class="statement mt-4 reveal reveal-delay-1">
            Dashboards show you
            <span class="muted">what happened.</span>
            <br>
            Elldy helps you
            <span class="highlight">understand what changed, why it changed, and what to watch next.</span>
        </div>

        <p class="lead mt-4 reveal reveal-delay-2">
            Instead of treating analytics as a collection of reports,
            Elldy brings data preparation, dashboards, analysis, forecasting
            and AI-driven monitoring into one intelligent workflow.
        </p>

        <div class="compare">

            <div class="compare-card compare-old reveal">
                <h4><i class="bi bi-bar-chart me-2"></i>Traditional BI workflow</h4>
                <ul>
                    <li><i class="bi bi-dash-circle"></i>Data preparation often requires technical effort.</li>
                    <li><i class="bi bi-dash-circle"></i>Dashboards need manual design and maintenance.</li>
                    <li><i class="bi bi-dash-circle"></i>Teams inspect reports to discover changes.</li>
                    <li><i class="bi bi-dash-circle"></i>Business questions can require SQL or specialist support.</li>
                </ul>
            </div>

            <div class="compare-card compare-new reveal reveal-delay-2">
                <h4><i class="bi bi-stars me-2"></i>The Elldy approach</h4>
                <ul>
                    <li><i class="bi bi-check-circle-fill"></i>Automated preparation turns raw business data into usable structures.</li>
                    <li><i class="bi bi-check-circle-fill"></i>AI Build creates a dashboard-ready starting point.</li>
                    <li><i class="bi bi-check-circle-fill"></i>Elldy Analyst monitors important movement and signals.</li>
                    <li><i class="bi bi-check-circle-fill"></i>Everyday analysis can be performed without writing SQL.</li>
                </ul>
            </div>

        </div>
    </div>
</section>

<!-- =========================================================
     CAPABILITIES
========================================================= -->
<section class="section section-soft" id="capabilities">
    <div class="container">

        <div class="kicker reveal">01 / The platform</div>

        <h2 class="mt-3 reveal">
            One intelligent workflow.<br>
            From data to decisions.
        </h2>

        <p class="lead mt-4 reveal">
            Elldy brings together the core stages of business analytics so teams
            can spend less time preparing reports and more time understanding the business.
        </p>

        <!-- 01 -->
        <div class="capability reveal">

            <div>
                <div class="cap-number">01 · AI DASHBOARD BUILDER</div>

                <h3>Start with data.<br>Finish with a dashboard.</h3>

                <p>
                    Upload a dataset and let AI Build recommend KPIs, charts and
                    dashboard structure. The generated output remains editable,
                    giving teams a fast starting point without building every component manually.
                </p>

                <div class="chips">
                    <span>KPI suggestions</span>
                    <span>Chart recommendations</span>
                    <span>Editable dashboards</span>
                    <span>AI Build</span>
                </div>
            </div>

            <div class="mock">
                <div class="mock-head">
                    <i></i><i></i><i></i>
                </div>

                <div class="d-flex justify-content-between align-items-center mb-2">
                    <strong style="font-size:13px">AI Build output</strong>
                    <span class="badge bg-success rounded-pill">Ready</span>
                </div>

                <div class="mock-row">
                    KPI summary cards
                    <span class="ready">READY</span>
                </div>
                <div class="mock-row">
                    Trend & comparison charts
                    <span class="ready">READY</span>
                </div>
                <div class="mock-row">
                    Dashboard layout
                    <span class="ready">READY</span>
                </div>
                <div class="mock-row">
                    User edits & save
                    <span class="open">EDITABLE</span>
                </div>
            </div>

        </div>

        <!-- 02 -->
        <div class="capability reveal">

            <div class="order-lg-2">
                <div class="cap-number">02 · ELLDY ANALYST</div>

                <h3>An AI analyst that watches the numbers.</h3>

                <p>
                    Elldy Analyst continuously reviews business performance,
                    detects spikes, drops, anomalies and changing trends,
                    and turns important movements into understandable signals.
                </p>

                <div class="chips">
                    <span>Performance alerts</span>
                    <span>Anomaly detection</span>
                    <span>Trend monitoring</span>
                    <span>Forecast awareness</span>
                </div>
            </div>

            <div class="mock mock-dark order-lg-1">
                <div class="mock-head">
                    <i></i><i></i><i></i>
                </div>

                <div class="d-flex justify-content-between mb-3">
                    <strong style="font-size:13px">Analyst signals</strong>
                    <span style="font:600 10px 'JetBrains Mono';color:var(--cyan)">Priority 92%</span>
                </div>

                <div class="signal">
                    <span>Revenue spike detected</span>
                    <span class="badge-level high">HIGH</span>
                </div>
                <div class="signal">
                    <span>Margin trend changed</span>
                    <span class="badge-level medium">REVIEW</span>
                </div>
                <div class="signal">
                    <span>Forecast variance increased</span>
                    <span class="badge-level medium">MEDIUM</span>
                </div>
                <div class="signal">
                    <span>Stable KPI movement</span>
                    <span class="badge-level normal">NORMAL</span>
                </div>
            </div>

        </div>

        <!-- 03 -->
        <div class="capability reveal">

            <div>
                <div class="cap-number">03 · ANALYSIS WORKSPACE</div>

                <h3>Ask better questions of your data.</h3>

                <p>
                    Explore groups, filters, comparisons, trends, aggregations,
                    forecasting and business patterns before turning your analysis
                    into a final dashboard or decision.
                </p>

                <div class="chips">
                    <span>Filters</span>
                    <span>Grouping</span>
                    <span>Comparison</span>
                    <span>Forecasting</span>
                    <span>Trend analysis</span>
                </div>
            </div>

            <div class="mock">
                <div class="mock-head">
                    <i></i><i></i><i></i>
                </div>

                <div class="p-3 rounded-3 mb-3"
                     style="background:#f6f8fc;border:1px solid var(--line);font:500 10px 'JetBrains Mono';color:#59667d;">
                    <i class="bi bi-search me-2"></i>
                    growth by region, compare with last quarter
                </div>

                <div class="row g-2">
                    <div class="col-3">
                        <div class="border rounded-3 text-center p-3">
                            <i class="bi bi-funnel"></i>
                            <small class="d-block mt-2">Filter</small>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="border rounded-3 text-center p-3">
                            <i class="bi bi-layers"></i>
                            <small class="d-block mt-2">Group</small>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="border rounded-3 text-center p-3">
                            <i class="bi bi-graph-up-arrow"></i>
                            <small class="d-block mt-2">Forecast</small>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="border rounded-3 text-center p-3"
                             style="background:#efecff;color:var(--violet)">
                            <i class="bi bi-eye"></i>
                            <small class="d-block mt-2">Preview</small>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- 04 -->
        <div class="capability reveal">

            <div class="order-lg-2">
                <div class="cap-number">04 · DATA PREPARATION</div>

                <h3>Less cleaning.<br>More analysis.</h3>

                <p>
                    Prepare business data for analytics through automated
                    cleaning and structuring workflows, helping teams move
                    faster from raw files to analysis-ready information.
                </p>

                <div class="chips">
                    <span>Data cleaning</span>
                    <span>Data structuring</span>
                    <span>Type normalization</span>
                    <span>Analysis-ready data</span>
                </div>
            </div>

            <div class="mock mock-dark order-lg-1">
                <div class="mock-head">
                    <i></i><i></i><i></i>
                </div>

                <div class="d-flex justify-content-between mb-3">
                    <strong style="font-size:13px">Data preparation</strong>
                    <span class="badge bg-success rounded-pill">Completed</span>
                </div>

                <div class="mock-row">
                    Detect missing values <span class="ready">DONE</span>
                </div>
                <div class="mock-row">
                    Normalize data types <span class="ready">DONE</span>
                </div>
                <div class="mock-row">
                    Structure dataset <span class="ready">DONE</span>
                </div>
                <div class="mock-row">
                    Prepare for analysis <span class="ready">READY</span>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- =========================================================
     WORKFLOW
========================================================= -->
<section class="section section-dark" id="workflow">
    <div class="container">

        <div class="kicker kicker-dark reveal">02 / How Elldy works</div>

        <h2 class="mt-3 reveal">
            Connect. Prepare. Analyze.<br>
            Build. Monitor. Decide.
        </h2>

        <p class="lead lead-dark mt-4 reveal">
            A connected analytics workflow designed to reduce the distance
            between your business data and the decisions that depend on it.
        </p>

        <div class="workflow">

            <div class="workflow-step reveal">
                <div class="workflow-icon"><i class="bi bi-plug"></i></div>
                <h5>Connect</h5>
                <p>Bring data from files, databases, APIs and business systems.</p>
            </div>

            <div class="workflow-step reveal delay-1">
                <div class="workflow-icon"><i class="bi bi-database-check"></i></div>
                <h5>Prepare</h5>
                <p>Clean and structure information for analytics.</p>
            </div>

            <div class="workflow-step reveal delay-2">
                <div class="workflow-icon"><i class="bi bi-search"></i></div>
                <h5>Analyze</h5>
                <p>Explore patterns, trends, comparisons and relationships.</p>
            </div>

            <div class="workflow-step reveal delay-3">
                <div class="workflow-icon"><i class="bi bi-magic"></i></div>
                <h5>Build</h5>
                <p>Create dashboards and KPI views with AI assistance.</p>
            </div>

            <div class="workflow-step reveal">
                <div class="workflow-icon"><i class="bi bi-radar"></i></div>
                <h5>Monitor</h5>
                <p>Let Elldy Analyst watch important business movement.</p>
            </div>

            <div class="workflow-step reveal delay-1">
                <div class="workflow-icon"><i class="bi bi-lightning-charge"></i></div>
                <h5>Decide</h5>
                <p>Turn signals and insights into business action.</p>
            </div>

        </div>
    </div>
</section>

<!-- =========================================================
     AI ANALYST
========================================================= -->
<section class="section section-dark" style="padding-top:25px;">
    <div class="container">

        <div class="row align-items-center g-5">

            <div class="col-lg-6 reveal">

                <div class="kicker kicker-dark">03 / AI intelligence</div>

                <h2 class="mt-3">
                    Don't just look at the dashboard.
                    <span style="color:var(--cyan)">Understand it.</span>
                </h2>

                <p class="lead lead-dark mt-4">
                    Elldy Analyst is designed to surface meaningful business
                    movement so teams can focus attention where it matters.
                </p>

                <div class="row g-4 mt-3">

                    <div class="col-6">
                        <strong>Performance alerts</strong>
                        <p class="lead lead-dark mt-2" style="font-size:12px">
                            Identify important KPI movement.
                        </p>
                    </div>

                    <div class="col-6">
                        <strong>Anomaly detection</strong>
                        <p class="lead lead-dark mt-2" style="font-size:12px">
                            Find values outside expected patterns.
                        </p>
                    </div>

                    <div class="col-6">
                        <strong>Forecast awareness</strong>
                        <p class="lead lead-dark mt-2" style="font-size:12px">
                            Connect forecasts with recent performance.
                        </p>
                    </div>

                    <div class="col-6">
                        <strong>Plain-language signals</strong>
                        <p class="lead lead-dark mt-2" style="font-size:12px">
                            Make data movement easier to understand.
                        </p>
                    </div>

                </div>

            </div>

            <div class="col-lg-6 reveal reveal-delay-2">

                <div class="analyst">

                    <div class="bubble question">
                        Why did revenue change this month?
                    </div>

                    <div class="bubble answer">
                        <label>
                            <i class="bi bi-stars me-1"></i>
                            Elldy Analyst
                        </label>

                        Revenue movement is concentrated in the West region.
                        Product Category B also changed significantly compared
                        with the recent baseline. The signal is worth reviewing
                        in Analysis Workspace.
                    </div>

                    <div class="signal-list">

                        <div class="signal">
                            <span>Revenue spike detected</span>
                            <span class="badge-level high">HIGH</span>
                        </div>

                        <div class="signal">
                            <span>Margin trend changed</span>
                            <span class="badge-level medium">REVIEW</span>
                        </div>

                        <div class="signal">
                            <span>Forecast variance increased</span>
                            <span class="badge-level medium">MEDIUM</span>
                        </div>

                        <div class="signal">
                            <span>Stable KPI movement</span>
                            <span class="badge-level normal">NORMAL</span>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>
</section>

<!-- =========================================================
     DATA SOURCES
========================================================= -->
<section class="section section-soft">
    <div class="container">

        <div class="text-center">
            <div class="kicker reveal">04 / Data connectivity</div>

            <h2 class="mt-3 reveal">
                Your data already lives<br>
                everywhere. Bring it together.
            </h2>

            <p class="lead mx-auto mt-4 reveal">
                Elldy is designed to work with the data sources businesses
                already use — from spreadsheets and files to databases,
                APIs and operational systems.
            </p>
        </div>

        <div class="source-grid">

            <div class="source reveal">
                <i class="bi bi-file-earmark-spreadsheet"></i>
                <strong>Excel & CSV</strong>
                <small>Upload business files and turn them into analysis-ready data.</small>
            </div>

            <div class="source reveal delay-1">
                <i class="bi bi-database"></i>
                <strong>Databases</strong>
                <small>Connect supported SQL and enterprise database environments.</small>
            </div>

            <div class="source reveal delay-2">
                <i class="bi bi-plug"></i>
                <strong>APIs</strong>
                <small>Bring operational data into your analytics workflow.</small>
            </div>

            <div class="source reveal delay-3">
                <i class="bi bi-building"></i>
                <strong>ERP & POS</strong>
                <small>Connect business systems and analyze operational performance.</small>
            </div>

        </div>

        <div class="text-center mt-5">
            <span class="badge rounded-pill px-3 py-2"
                  style="background:#fff;border:1px solid var(--line);color:#536079;">
                Excel · CSV · Parquet · MySQL · PostgreSQL · SQL Server · Oracle · APIs · ERP · POS
            </span>
        </div>

    </div>
</section>

<!-- =========================================================
     ELLDY BRICK
========================================================= -->
<section class="section brick">
    <div class="container">

        <div class="row align-items-center g-5">

            <div class="col-lg-7 reveal">

                <div class="kicker kicker-dark">05 / Private data</div>

                <h2 class="mt-3">
                    Your private data.<br>
                    <span style="color:var(--cyan)">Your intelligence.</span>
                </h2>

                <p class="lead lead-dark mt-4">
                    Elldy Brick is designed for private database environments.
                    It operates close to customer data and sends approved data
                    to Elldy through secure HTTPS connectivity.
                </p>

                <div class="chips">
                    <span style="color:#c3d0e5;border-color:#263853">Private DB</span>
                    <span style="color:#c3d0e5;border-color:#263853">VPC / EC2</span>
                    <span style="color:#c3d0e5;border-color:#263853">HTTPS</span>
                    <span style="color:#c3d0e5;border-color:#263853">Scheduled refresh</span>
                    <span style="color:#c3d0e5;border-color:#263853">Parquet</span>
                </div>

                <a href="https://elldy.com/docs/elldy-brick/"
                   class="btn-outline-hero mt-4 d-inline-flex">
                    Explore Elldy Brick
                    <i class="bi bi-arrow-up-right ms-2"></i>
                </a>

            </div>

            <div class="col-lg-5 reveal reveal-delay-2">

                <div class="mock mock-dark">

                    <div class="mock-head">
                        <i></i><i></i><i></i>
                    </div>

                    <div class="mock-row">
                        source
                        <b style="color:#fff">private_mysql</b>
                    </div>

                    <div class="mock-row">
                        location
                        <b style="color:#fff">customer VPC</b>
                    </div>

                    <div class="mock-row">
                        agent
                        <b style="color:#fff">elldy-brick</b>
                    </div>

                    <div class="mock-row">
                        format
                        <b style="color:#fff">parquet</b>
                    </div>

                    <div class="mock-row">
                        transport
                        <b style="color:#fff">HTTPS</b>
                    </div>

                    <div class="mock-row">
                        status
                        <b style="color:var(--cyan)">● SYNCED</b>
                    </div>

                </div>

            </div>

        </div>

        <div class="brick-flow">

            <div class="brick-node reveal">
                <div class="small-label">Private source</div>
                <strong>Customer Environment</strong>
                <small>Database, files or internal systems</small>
            </div>

            <div class="brick-arrow">→</div>

            <div class="brick-node reveal delay-1">
                <div class="small-label">Gateway</div>
                <strong>Elldy Brick</strong>
                <small>Connects and prepares approved data</small>
            </div>

            <div class="brick-arrow">→</div>

            <div class="brick-node reveal delay-2">
                <div class="small-label">Intelligence</div>
                <strong>Elldy Platform</strong>
                <small>Dashboards, analysis and AI intelligence</small>
            </div>

        </div>

    </div>
</section>

<!-- =========================================================
     WHO IT IS FOR
========================================================= -->
<section class="section">
    <div class="container">

        <div class="kicker reveal">06 / Built around real teams</div>

        <h2 class="mt-3 reveal">
            Intelligence for everyone<br>
            around business data.
        </h2>

        <div class="audience">

            <div class="aud-card reveal">
                <i class="bi bi-briefcase"></i>
                <h6>Business leaders</h6>
                <p>Understand performance and focus attention on important signals.</p>
            </div>

            <div class="aud-card reveal delay-1">
                <i class="bi bi-bar-chart-steps"></i>
                <h6>Data analysts</h6>
                <p>Move faster from preparation and exploration to decision-ready output.</p>
            </div>

            <div class="aud-card reveal delay-2">
                <i class="bi bi-hdd-network"></i>
                <h6>IT & Data teams</h6>
                <p>Connect business data while supporting private environments.</p>
            </div>

            <div class="aud-card reveal delay-3">
                <i class="bi bi-mortarboard"></i>
                <h6>Students</h6>
                <p>Learn practical analytics through real business-oriented workflows.</p>
            </div>

            <div class="aud-card reveal">
                <i class="bi bi-building"></i>
                <h6>Training institutions</h6>
                <p>Teach practical data analytics and BI on a live platform.</p>
            </div>

        </div>

    </div>
</section>

<!-- =========================================================
     ACADEMY SUPPORT
========================================================= -->
<section class="section section-soft">
    <div class="container">

        <div class="row align-items-center g-5">

            <div class="col-lg-7 reveal">

                <div class="kicker">07 / Learn with Elldy</div>

                <h2 class="mt-3">
                    Learn the technology.<br>
                    Solve the business.
                </h2>

                <p class="lead mt-4">
                    Elldy Academy extends the platform into practical learning,
                    helping students, analysts and teams understand analytics
                    through real business cases and hands-on work.
                </p>

                <a href="https://academy.elldy.com/"
                   class="btn btn-dark btn-lg rounded-3 px-4 mt-3">
                    Explore Elldy Academy
                    <i class="bi bi-arrow-up-right ms-2"></i>
                </a>

            </div>

            <div class="col-lg-5 reveal reveal-delay-2">

                <div class="mock">

                    <div class="d-flex align-items-center gap-3 mb-4">
                        <div style="width:48px;height:48px;border-radius:14px;background:#efecff;color:var(--violet);display:grid;place-items:center;">
                            <i class="bi bi-mortarboard-fill fs-4"></i>
                        </div>
                        <div>
                            <strong>Elldy Academy</strong>
                            <small class="d-block text-muted">Practical analytics learning</small>
                        </div>
                    </div>

                    <div class="mock-row">
                        Data Analytics fundamentals
                        <span class="ready">01</span>
                    </div>
                    <div class="mock-row">
                        Real business cases
                        <span class="ready">02</span>
                    </div>
                    <div class="mock-row">
                        Dashboard building
                        <span class="ready">03</span>
                    </div>
                    <div class="mock-row">
                        Business insights
                        <span class="ready">04</span>
                    </div>

                </div>

            </div>

        </div>

    </div>
</section>

<!-- =========================================================
     FINAL CTA
========================================================= -->
<section class="grand-cta">

    <div class="container position-relative" style="z-index:2">

        <div class="row">

            <div class="col-lg-9">

                <div class="kicker kicker-dark reveal">
                    The next step in business intelligence
                </div>

                <h2 class="mt-4 reveal">
                    Your data is already<br>
                    telling you something.
                    <span style="color:var(--cyan)">Start listening.</span>
                </h2>

                <p class="lead lead-dark mt-4 reveal" style="max-width:620px;">
                    Explore Elldy and discover a smarter way to connect,
                    analyze, visualize and understand your business data.
                </p>

                <div class="hero-buttons reveal">
                    <a href="https://elldy.com/signup/" class="btn-hero">
                        Start with Elldy
                        <i class="bi bi-arrow-up-right ms-2"></i>
                    </a>

                    <a href="https://elldy.com/" class="btn-outline-hero">
                        Visit Elldy
                    </a>

                    <a href="contact.php" class="btn-outline-hero">
                        Talk to Arklytics
                    </a>
                </div>

            </div>

        </div>

    </div>
</section>

<?php include 'footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
document.addEventListener("DOMContentLoaded", function(){

    const reduced = window.matchMedia("(prefers-reduced-motion: reduce)").matches;

    /* ================= SCROLL REVEAL ================= */
    const revealItems = document.querySelectorAll(".reveal");

    if(!reduced && "IntersectionObserver" in window){

        const revealObserver = new IntersectionObserver((entries, observer) => {

            entries.forEach(entry => {

                if(!entry.isIntersecting) return;

                entry.target.classList.add("revealed");
                observer.unobserve(entry.target);

            });

        },{
            threshold:.12,
            rootMargin:"0px 0px -50px 0px"
        });

        revealItems.forEach(el => revealObserver.observe(el));

    }else{

        revealItems.forEach(el => el.classList.add("revealed"));

    }


    /* ================= KPI COUNTERS ================= */

    const counters = document.querySelectorAll(".counter");

    function formatCounter(el, value){

        const prefix = el.dataset.prefix || "";
        const suffix = el.dataset.suffix || "";

        if(value >= 1000){
            value = Math.round(value).toLocaleString("en-IN");
        }else if(value % 1 !== 0){
            value = value.toFixed(1);
        }else{
            value = Math.round(value);
        }

        el.textContent = prefix + value + suffix;
    }

    function animateCounter(el){

        if(el.dataset.done === "1") return;

        el.dataset.done = "1";

        const target = parseFloat(el.dataset.target);
        const duration = 1300;
        const start = performance.now();

        function frame(now){

            const progress = Math.min((now-start)/duration,1);
            const eased = 1-Math.pow(1-progress,3);

            formatCounter(el,target*eased);

            if(progress < 1){
                requestAnimationFrame(frame);
            }

        }

        requestAnimationFrame(frame);
    }

    const dashboard = document.querySelector(".dashboard-window");

    if(dashboard){

        const counterObserver = new IntersectionObserver(entries => {

            if(entries[0].isIntersecting){

                counters.forEach(animateCounter);
                counterObserver.disconnect();

            }

        },{threshold:.35});

        counterObserver.observe(dashboard);
    }


    /* ================= CHART ANIMATION ================= */

    const chart = document.querySelector(".chart-area");
    const donut = document.getElementById("donut");

    if(chart && !reduced){

        const chartObserver = new IntersectionObserver(entries => {

            if(entries[0].isIntersecting){

                chart.classList.add("chart-visible");

                if(donut){
                    setTimeout(() => donut.classList.add("visible"),350);
                }

                chartObserver.disconnect();
            }

        },{threshold:.4});

        chartObserver.observe(chart);

    }else{

        if(chart) chart.classList.add("chart-visible");
        if(donut) donut.classList.add("visible");

    }


    /* ================= DASHBOARD 3D TILT ================= */

    const dashboardWindow = document.getElementById("dashboardWindow");

    if(dashboardWindow && !reduced && window.innerWidth > 991){

        dashboardWindow.addEventListener("pointermove",function(e){

            const rect = dashboardWindow.getBoundingClientRect();

            const x = (e.clientX-rect.left)/rect.width-.5;
            const y = (e.clientY-rect.top)/rect.height-.5;

            dashboardWindow.style.transform =
                "perspective(1200px) rotateX(" +
                (-y*4).toFixed(2) +
                "deg) rotateY(" +
                (x*5).toFixed(2) +
                "deg) translateY(-6px)";

        });

        dashboardWindow.addEventListener("pointerleave",function(){

            dashboardWindow.style.transform = "";

        });

    }


    /* ================= AI TYPING ================= */

    const insight = document.getElementById("typingInsight");

    if(insight && !reduced){

        const text = insight.textContent.trim();

        insight.textContent = "";

        let index = 0;

        const typingObserver = new IntersectionObserver(entries => {

            if(!entries[0].isIntersecting) return;

            function type(){

                if(index < text.length){

                    insight.textContent += text.charAt(index);
                    index++;

                    setTimeout(type,28);

                }

            }

            setTimeout(type,500);
            typingObserver.disconnect();

        },{threshold:.7});

        typingObserver.observe(insight);

    }


    /* ================= MOUSE PARALLAX ================= */

    const hero = document.querySelector(".grand-hero");

    if(hero && !reduced && window.innerWidth > 991){

        hero.addEventListener("pointermove",function(e){

            const x = e.clientX/window.innerWidth-.5;
            const y = e.clientY/window.innerHeight-.5;

            document.querySelectorAll(".particle").forEach((particle,index) => {

                const amount = (index+1)*5;

                particle.style.marginLeft = (x*amount)+"px";
                particle.style.marginTop = (y*amount)+"px";

            });

        });

    }


    /* ================= MAGNETIC BUTTONS ================= */

    if(!reduced && window.innerWidth > 991){

        document.querySelectorAll(".btn-hero").forEach(button => {

            button.addEventListener("pointermove",function(e){

                const rect = button.getBoundingClientRect();

                const x = (e.clientX-rect.left-rect.width/2)*.08;
                const y = (e.clientY-rect.top-rect.height/2)*.08;

                button.style.transform =
                    "translate("+x+"px,"+y+"px)";

            });

            button.addEventListener("pointerleave",function(){

                button.style.transform = "";

            });

        });

    }

});
</script>

</body>
</html>
