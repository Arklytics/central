<?php

$pageTitle = "Contact Arklytics | Elldy & CRM Solutions";

$success = "";
$error = "";


/*
|--------------------------------------------------------------------------
| FORM PROCESSING
|--------------------------------------------------------------------------
*/

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $name = htmlspecialchars(
        trim($_POST['name'] ?? ''),
        ENT_QUOTES,
        'UTF-8'
    );

    $company = htmlspecialchars(
        trim($_POST['company'] ?? ''),
        ENT_QUOTES,
        'UTF-8'
    );

    $email = filter_var(
        trim($_POST['email'] ?? ''),
        FILTER_SANITIZE_EMAIL
    );

    $phone = htmlspecialchars(
        trim($_POST['phone'] ?? ''),
        ENT_QUOTES,
        'UTF-8'
    );

    $interest = htmlspecialchars(
        trim($_POST['interest'] ?? ''),
        ENT_QUOTES,
        'UTF-8'
    );

    $message = htmlspecialchars(
        trim($_POST['message'] ?? ''),
        ENT_QUOTES,
        'UTF-8'
    );


    if (
        empty($name) ||
        empty($email) ||
        empty($phone) ||
        empty($interest) ||
        empty($message)
    ) {

        $error =
            "Please complete all required fields.";

    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

        $error =
            "Please enter a valid business email.";

    } else {


        $to =
            "info@arklytics.in";


        $mail_subject =
            "New Business Enquiry - Arklytics";


        $body = "

        <html>

        <body>

        <h2>New Arklytics Business Enquiry</h2>

        <table
            cellpadding='10'
            cellspacing='0'
            border='1'
            style='border-collapse:collapse;'>

            <tr>
                <td><strong>Name</strong></td>
                <td>{$name}</td>
            </tr>

            <tr>
                <td><strong>Company</strong></td>
                <td>{$company}</td>
            </tr>

            <tr>
                <td><strong>Email</strong></td>
                <td>{$email}</td>
            </tr>

            <tr>
                <td><strong>Phone</strong></td>
                <td>{$phone}</td>
            </tr>

            <tr>
                <td><strong>Interested In</strong></td>
                <td>{$interest}</td>
            </tr>

            <tr>
                <td><strong>Message</strong></td>
                <td>{$message}</td>
            </tr>

        </table>

        </body>

        </html>
        ";


        $headers =
            "From: Arklytics Website <info@arklytics.in>\r\n";

        $headers .=
            "Reply-To: {$email}\r\n";

        $headers .=
            "MIME-Version: 1.0\r\n";

        $headers .=
            "Content-Type: text/html; charset=UTF-8\r\n";


        if (
            mail(
                $to,
                $mail_subject,
                $body,
                $headers
            )
        ) {

            $success =
                "Thank you! Our team will get back to you shortly.";

        } else {

            $error =
                "We couldn't send your enquiry right now. Please try again or contact us directly.";

        }

    }

}

?>

<!doctype html>

<html lang="en">

<head>

    <meta charset="utf-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1">


    <title>
        <?php echo $pageTitle; ?>
    </title>


    <!-- Bootstrap -->

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">


    <!-- Bootstrap Icons -->

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
        rel="stylesheet">


    <!-- AOS -->

    <link
        href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css"
        rel="stylesheet">


    <!-- Fonts -->

    <link
        rel="preconnect"
        href="https://fonts.googleapis.com">

    <link
        rel="preconnect"
        href="https://fonts.gstatic.com"
        crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Space+Grotesk:wght@500;600;700&display=swap"
        rel="stylesheet">
    
    <link rel="stylesheet" href="css/style.css">    


    <style>

        /* =====================================================
           GLOBAL
        ====================================================== */

        :root {

            --ink:
                #07101f;

            --muted:
                #667386;

            --line:
                #e7ecf2;

            --soft:
                #f7f9fc;

            --elldy:
                #6957e8;

            --elldy-soft:
                #f0edff;

            --crm:
                #079f8a;

            --crm-soft:
                #e3faf5;

            --white:
                #ffffff;

        }


        * {
            box-sizing:
                border-box;
        }


        html {
            scroll-behavior:
                smooth;
        }


        body {

            margin:
                0;

            background:
                #ffffff;

            color:
                var(--ink);

            font-family:
                "DM Sans",
                sans-serif;

        }


        h1,
        h2,
        h3,
        h4 {

            font-family:
                "Space Grotesk",
                sans-serif;

            letter-spacing:
                -.035em;

        }


        a {
            text-decoration:
                none;
        }


        /* =====================================================
           HERO
        ====================================================== */

        .contact-hero {

            position:
                relative;

            overflow:
                hidden;

            padding:
                115px 0 90px;

            background:
                radial-gradient(
                    circle at 82% 25%,
                    rgba(105,87,232,.13),
                    transparent 30%
                ),

                radial-gradient(
                    circle at 12% 80%,
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
                .35;

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


        .hero-eyebrow {

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
                #e2e7ee;

            border-radius:
                100px;

            background:
                rgba(255,255,255,.8);

            color:
                #677489;

            font-size:
                10px;

            font-weight:
                800;

            letter-spacing:
                .1em;

        }


        .hero-dot {

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

            margin-top:
                22px;

            max-width:
                760px;

            font-size:
                clamp(
                    45px,
                    6vw,
                    76px
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


        .hero-text {

            max-width:
                650px;

            margin-top:
                22px;

            color:
                var(--muted);

            font-size:
                16px;

            line-height:
                1.75;

        }


        /* =====================================================
           HERO SIDE CARD
        ====================================================== */

        .contact-visual {

            position:
                relative;

            min-height:
                360px;

        }


        .visual-ring {

            position:
                absolute;

            width:
                300px;

            height:
                300px;

            right:
                20px;

            top:
                20px;

            border:
                1px dashed
                #d9dfeb;

            border-radius:
                50%;

            animation:
                spin 25s
                linear infinite;

        }


        @keyframes spin {

            to {
                transform:
                    rotate(360deg);
            }

        }


        .visual-center {

            position:
                absolute;

            width:
                135px;

            height:
                135px;

            right:
                103px;

            top:
                102px;

            display:
                flex;

            flex-direction:
                column;

            align-items:
                center;

            justify-content:
                center;

            border-radius:
                30px;

            background:
                var(--ink);

            color:
                white;

            box-shadow:
                0 30px 60px
                rgba(7,16,31,.20);

            z-index:
                2;

        }


        .visual-center i {

            font-size:
                28px;

            margin-bottom:
                5px;

        }


        .visual-center strong {

            font-size:
                14px;

        }


        .visual-center small {

            margin-top:
                4px;

            color:
                #9ca8b8;

            font-size:
                9px;

        }


        .visual-node {

            position:
                absolute;

            width:
                105px;

            padding:
                13px 10px;

            text-align:
                center;

            border:
                1px solid
                #e4e9ef;

            border-radius:
                14px;

            background:
                rgba(255,255,255,.94);

            box-shadow:
                0 15px 35px
                rgba(8,20,40,.08);

            z-index:
                3;

            animation:
                float 4s
                ease-in-out infinite;

        }


        @keyframes float {

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


        .visual-node i {

            display:
                block;

            margin-bottom:
                5px;

            font-size:
                19px;

        }


        .visual-node span {

            color:
                #667386;

            font-size:
                10px;

            font-weight:
                700;

        }


        .node-elldy {

            right:
                112px;

            top:
                -5px;

        }


        .node-crm {

            right:
                -2px;

            top:
                125px;

            animation-delay:
                .8s;

        }


        .node-talk {

            right:
                85px;

            bottom:
                5px;

            animation-delay:
                1.5s;

        }


        .node-elldy i {
            color:
                var(--elldy);
        }


        .node-crm i {
            color:
                var(--crm);
        }


        .node-talk i {
            color:
                #1686b5;
        }


        /* =====================================================
           CONTACT SECTION
        ====================================================== */

        .contact-section {

            padding:
                95px 0;

            background:
                var(--soft);

        }


        .section-label {

            display:
                inline-block;

            margin-bottom:
                10px;

            color:
                #788497;

            font-size:
                10px;

            font-weight:
                800;

            letter-spacing:
                .12em;

        }


        .section-title {

            font-size:
                clamp(
                    34px,
                    4vw,
                    50px
                );

            line-height:
                1.05;

        }


        .section-text {

            color:
                var(--muted);

            font-size:
                14px;

            line-height:
                1.75;

        }


        /* =====================================================
           CONTACT INFO
        ====================================================== */

        .info-card {

            height:
                100%;

            padding:
                28px;

            border:
                1px solid
                var(--line);

            border-radius:
                20px;

            background:
                #ffffff;

            transition:
                .3s ease;

        }


        .info-card:hover {

            transform:
                translateY(-6px);

            box-shadow:
                0 20px 45px
                rgba(8,20,40,.07);

        }


        .info-icon {

            width:
                45px;

            height:
                45px;

            display:
                flex;

            align-items:
                center;

            justify-content:
                center;

            margin-bottom:
                17px;

            border-radius:
                12px;

            background:
                #f0f3f8;

            color:
                var(--ink);

            font-size:
                18px;

        }


        .info-card h5 {

            font-size:
                16px;

            margin-bottom:
                7px;

        }


        .info-card p {

            margin:
                0;

            color:
                var(--muted);

            font-size:
                12px;

            line-height:
                1.7;

        }


        .info-card a {

            color:
                #4d5c70;

        }


        .info-card a:hover {

            color:
                var(--elldy);

        }


        /* =====================================================
           FORM
        ====================================================== */

        .form-wrapper {

            padding:
                38px;

            border:
                1px solid
                var(--line);

            border-radius:
                24px;

            background:
                #ffffff;

            box-shadow:
                0 25px 70px
                rgba(8,20,40,.06);

        }


        .form-label {

            color:
                #263449;

            font-size:
                12px;

            font-weight:
                700;

            margin-bottom:
                7px;

        }


        .form-control,
        .form-select {

            min-height:
                49px;

            border:
                1px solid
                #e0e6ed;

            border-radius:
                10px;

            color:
                #172033;

            font-size:
                13px;

            box-shadow:
                none !important;

        }


        .form-control::placeholder {

            color:
                #a0a9b7;

        }


        .form-control:focus,
        .form-select:focus {

            border-color:
                #aeb8c8;

            box-shadow:
                0 0 0 3px
                rgba(105,87,232,.08) !important;

        }


        textarea.form-control {

            min-height:
                145px;

            resize:
                vertical;

        }


        .submit-btn {

            width:
                100%;

            min-height:
                51px;

            border:
                0;

            border-radius:
                11px;

            background:
                var(--ink);

            color:
                #ffffff;

            font-size:
                13px;

            font-weight:
                800;

            transition:
                .3s ease;

        }


        .submit-btn:hover {

            transform:
                translateY(-2px);

            box-shadow:
                0 14px 30px
                rgba(7,16,31,.16);

        }


        /* =====================================================
           PRODUCT CHOICE
        ====================================================== */

        .solution-choice {

            display:
                grid;

            grid-template-columns:
                1fr 1fr;

            gap:
                10px;

        }


        .solution-option {

            position:
                relative;

        }


        .solution-option input {

            position:
                absolute;

            opacity:
                0;

        }


        .solution-option label {

            display:
                flex;

            align-items:
                center;

            gap:
                10px;

            min-height:
                67px;

            padding:
                12px;

            border:
                1px solid
                #e1e6ed;

            border-radius:
                12px;

            background:
                #ffffff;

            cursor:
                pointer;

            transition:
                .25s ease;

        }


        .solution-option label:hover {

            border-color:
                #cdd5e0;

            transform:
                translateY(-2px);

        }


        .solution-option input:checked + label {

            border-color:
                #8b7cff;

            background:
                var(--elldy-soft);

            box-shadow:
                0 0 0 3px
                rgba(105,87,232,.07);

        }


        .solution-option.crm input:checked + label {

            border-color:
                #5ccdbb;

            background:
                var(--crm-soft);

        }


        .choice-icon {

            width:
                35px;

            height:
                35px;

            flex-shrink:
                0;

            display:
                flex;

            align-items:
                center;

            justify-content:
                center;

            border-radius:
                9px;

            background:
                #f1f3f7;

        }


        .elldy .choice-icon {

            color:
                var(--elldy);

            background:
                #e9e5ff;

        }


        .crm .choice-icon {

            color:
                var(--crm);

            background:
                #d7f6ef;

        }


        .choice-text {

            display:
                flex;

            flex-direction:
                column;

        }


        .choice-text strong {

            color:
                #182235;

            font-size:
                11px;

        }


        .choice-text small {

            margin-top:
                2px;

            color:
                #7c8899;

            font-size:
                9px;

        }


        /* =====================================================
           CTA
        ====================================================== */

        .bottom-cta {

            padding:
                100px 0;

            text-align:
                center;

        }


        .bottom-cta h2 {

            max-width:
                750px;

            margin:
                auto;

            font-size:
                clamp(
                    38px,
                    5vw,
                    60px
                );

            line-height:
                1;

        }


        .bottom-cta p {

            max-width:
                580px;

            margin:
                18px auto 0;

            color:
                var(--muted);

            line-height:
                1.7;

        }


        .cta-buttons {

            display:
                flex;

            justify-content:
                center;

            flex-wrap:
                wrap;

            gap:
                10px;

            margin-top:
                28px;

        }


        .cta-btn {

            display:
                inline-flex;

            align-items:
                center;

            gap:
                8px;

            padding:
                12px 17px;

            border-radius:
                10px;

            background:
                var(--ink);

            color:
                #ffffff;

            font-size:
                12px;

            font-weight:
                700;

        }


        .cta-btn:hover {

            color:
                #ffffff;

            transform:
                translateY(-2px);

        }


        .cta-btn.light {

            background:
                #ffffff;

            color:
                var(--ink);

            border:
                1px solid
                #dfe5ec;

        }


        /* =====================================================
           ALERT
        ====================================================== */

        .custom-alert {

            border:
                0;

            border-radius:
                12px;

            font-size:
                13px;

            padding:
                13px 16px;

        }


        /* =====================================================
           RESPONSIVE
        ====================================================== */

        @media (max-width: 991px) {

            .contact-hero {

                padding:
                    95px 0 60px;

            }


            .contact-visual {

                min-height:
                    320px;

                margin-top:
                    30px;

            }


            .contact-section {

                padding:
                    70px 0;

            }


            .form-wrapper {

                padding:
                    27px;

            }

        }


        @media (max-width: 575px) {

            .hero-title {

                font-size:
                    43px;

            }


            .hero-text {

                font-size:
                    14px;

            }


            .contact-visual {

                transform:
                    scale(.85);

                transform-origin:
                    center;

                margin:
                    -5px 0;

            }


            .solution-choice {

                grid-template-columns:
                    1fr;

            }


            .form-wrapper {

                padding:
                    22px;

            }

        }

    </style>

</head>


<body>


<!-- =====================================================
     HEADER
====================================================== -->

<?php include 'header.php'; ?>



<main>


    <!-- =================================================
         HERO
    ================================================== -->

    <section class="contact-hero">

        <div class="hero-grid"></div>


        <div class="container position-relative">

            <div class="row align-items-center">


                <div class="col-lg-7">


                    <div
                        class="hero-eyebrow"
                        data-aos="fade-up">

                        <span class="hero-dot"></span>

                        Let's Talk Business

                    </div>


                    <h1
                        class="hero-title"
                        data-aos="fade-up"
                        data-aos-delay="100">

                        Let's build
                        <span>what's next.</span>

                    </h1>


                    <p
                        class="hero-text"
                        data-aos="fade-up"
                        data-aos-delay="180">

                        Whether you're exploring
                        <strong>Elldy Data Intelligence</strong>,
                        looking for a
                        <strong>CRM solution</strong>,
                        or want to discuss a business
                        requirement, we'd love to hear from you.

                    </p>

                </div>


                <!-- VISUAL -->

                <div
                    class="col-lg-5"
                    data-aos="fade-left"
                    data-aos-delay="200">

                    <div class="contact-visual">


                        <div class="visual-ring"></div>


                        <div class="visual-center">

                            <i class="bi bi-chat-square-text"></i>

                            <strong>
                                Let's Connect
                            </strong>

                            <small>
                                Start a conversation
                            </small>

                        </div>


                        <div class="visual-node node-elldy">

                            <i class="bi bi-stars"></i>

                            <span>
                                Elldy
                            </span>

                        </div>


                        <div class="visual-node node-crm">

                            <i class="bi bi-people"></i>

                            <span>
                                CRM
                            </span>

                        </div>


                        <div class="visual-node node-talk">

                            <i class="bi bi-lightbulb"></i>

                            <span>
                                Your Business
                            </span>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>



    <!-- =================================================
         CONTACT INFORMATION
    ================================================== -->

    <section class="contact-section">

        <div class="container">


            <div
                class="row g-4 mb-5"
                data-aos="fade-up">


                <!-- OFFICE -->

                <div class="col-md-6 col-lg-3">

                    <div class="info-card">

                        <div class="info-icon">

                            <i class="bi bi-building"></i>

                        </div>


                        <h5>
                            Arklytics
                        </h5>


                        <p>

                            Arklytics Solutions &
                            Innovations

                            <br>

                            Hyderabad, Telangana

                        </p>

                    </div>

                </div>


                <!-- EMAIL -->

                <div class="col-md-6 col-lg-3">

                    <div class="info-card">

                        <div class="info-icon">

                            <i class="bi bi-envelope"></i>

                        </div>


                        <h5>
                            Email
                        </h5>


                        <p>

                            <a
                                href="mailto:info@arklytics.in">

                                info@arklytics.in

                            </a>

                        </p>

                    </div>

                </div>


                <!-- PHONE -->

                <div class="col-md-6 col-lg-3">

                    <div class="info-card">

                        <div class="info-icon">

                            <i class="bi bi-telephone"></i>

                        </div>


                        <h5>
                            WhatsApp
                        </h5>


                        <p>

                            <a
                                href="tel:+919490238737">

                                +91 94902 38737

                            </a>

                        </p>

                    </div>

                </div>


                <!-- DISCUSSION -->

                <div class="col-md-6 col-lg-3">

                    <div class="info-card">

                        <div class="info-icon">

                            <i class="bi bi-calendar2-check"></i>

                        </div>


                        <h5>
                            Free Consultation
                        </h5>


                        <p>

                            Tell us what you're trying
                            to solve and we'll help you
                            find the right direction.

                        </p>

                    </div>

                </div>

            </div>



            <!-- FORM -->

            <div class="row g-5 align-items-start">


                <div
                    class="col-lg-5"
                    data-aos="fade-right">


                    <span class="section-label">
                        START A CONVERSATION
                    </span>


                    <h2 class="section-title">

                        Tell us what
                        you're building.

                    </h2>


                    <p class="section-text mt-3">

                        Give us a little context about
                        your business and what you're
                        looking for.

                        Our team can help you explore
                        the right Arklytics solution.

                    </p>


                    <!-- PRODUCT DIFFERENCE -->

                    <div class="mt-4">


                        <div
                            class="p-3 rounded-4 mb-3"
                            style="
                                background:#f0edff;
                                border:1px solid #e3ddff;
                            ">


                            <div
                                class="d-flex align-items-center gap-3">


                                <div
                                    class="info-icon mb-0"
                                    style="
                                        color:#6957e8;
                                        background:#e3ddff;
                                    ">

                                    <i class="bi bi-stars"></i>

                                </div>


                                <div>

                                    <strong
                                        style="
                                            font-size:13px;
                                        ">

                                        Elldy

                                    </strong>


                                    <p class="mb-0">

                                        Data Intelligence &
                                        Business Intelligence

                                    </p>

                                </div>

                            </div>

                        </div>



                        <div
                            class="p-3 rounded-4"
                            style="
                                background:#e3faf5;
                                border:1px solid #d3f2eb;
                            ">


                            <div
                                class="d-flex align-items-center gap-3">


                                <div
                                    class="info-icon mb-0"
                                    style="
                                        color:#079f8a;
                                        background:#d4f5ee;
                                    ">

                                    <i class="bi bi-people"></i>

                                </div>


                                <div>

                                    <strong
                                        style="
                                            font-size:13px;
                                        ">

                                        Connect CRM

                                    </strong>


                                    <p class="mb-0">

                                        Customer & relationship
                                        management

                                    </p>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>



                <!-- FORM -->

                <div
                    class="col-lg-7"
                    data-aos="fade-left">


                    <div class="form-wrapper">


                        <?php if ($success): ?>

                            <div
                                class="alert alert-success custom-alert mb-4">

                                <i
                                    class="bi bi-check-circle me-2">
                                </i>

                                <?php
                                echo $success;
                                ?>

                            </div>

                        <?php endif; ?>


                        <?php if ($error): ?>

                            <div
                                class="alert alert-danger custom-alert mb-4">

                                <i
                                    class="bi bi-exclamation-circle me-2">
                                </i>

                                <?php
                                echo $error;
                                ?>

                            </div>

                        <?php endif; ?>


                        <form
                            method="POST"
                            action="">


                            <!-- NAME + COMPANY -->

                            <div class="row g-3">


                                <div class="col-md-6">

                                    <label
                                        class="form-label">

                                        Full Name *

                                    </label>


                                    <input
                                        type="text"
                                        name="name"
                                        class="form-control"
                                        placeholder="Your name"
                                        required>

                                </div>


                                <div class="col-md-6">

                                    <label
                                        class="form-label">

                                        Company

                                    </label>


                                    <input
                                        type="text"
                                        name="company"
                                        class="form-control"
                                        placeholder="Company name">

                                </div>


                                <!-- EMAIL -->

                                <div class="col-md-6">

                                    <label
                                        class="form-label">

                                        Business Email *

                                    </label>


                                    <input
                                        type="email"
                                        name="email"
                                        class="form-control"
                                        placeholder="you@company.com"
                                        required>

                                </div>


                                <!-- PHONE -->

                                <div class="col-md-6">

                                    <label
                                        class="form-label">

                                        Phone *

                                    </label>


                                    <input
                                        type="tel"
                                        name="phone"
                                        class="form-control"
                                        placeholder="+91 XXXXX XXXXX"
                                        required>

                                </div>


                                <!-- INTEREST -->

                                <div class="col-12 mt-4">

                                    <label
                                        class="form-label">

                                        What are you interested in? *

                                    </label>


                                    <div class="solution-choice">


                                        <!-- ELLDY -->

                                        <div
                                            class="solution-option elldy">

                                            <input
                                                type="radio"
                                                id="interestElldy"
                                                name="interest"
                                                value="Elldy Data Intelligence & BI"
                                                required>


                                            <label
                                                for="interestElldy">


                                                <span
                                                    class="choice-icon">

                                                    <i class="bi bi-stars"></i>

                                                </span>


                                                <span
                                                    class="choice-text">

                                                    <strong>
                                                        Elldy
                                                    </strong>

                                                    <small>
                                                        Data & Business Intelligence
                                                    </small>

                                                </span>

                                            </label>

                                        </div>


                                        <!-- CRM -->

                                        <div
                                            class="solution-option crm">

                                            <input
                                                type="radio"
                                                id="interestCRM"
                                                name="interest"
                                                value="Connect CRM">


                                            <label
                                                for="interestCRM">


                                                <span
                                                    class="choice-icon">

                                                    <i class="bi bi-people"></i>

                                                </span>


                                                <span
                                                    class="choice-text">

                                                    <strong>
                                                        Connect CRM
                                                    </strong>

                                                    <small>
                                                        Customer relationship management
                                                    </small>

                                                </span>

                                            </label>

                                        </div>


                                        <!-- GENERAL -->

                                        <div
                                            class="solution-option">

                                            <input
                                                type="radio"
                                                id="interestBusiness"
                                                name="interest"
                                                value="Business Discussion">


                                            <label
                                                for="interestBusiness">


                                                <span
                                                    class="choice-icon">

                                                    <i class="bi bi-briefcase"></i>

                                                </span>


                                                <span
                                                    class="choice-text">

                                                    <strong>
                                                        Business Discussion
                                                    </strong>

                                                    <small>
                                                        Partnership or other requirements
                                                    </small>

                                                </span>

                                            </label>

                                        </div>


                                        <!-- ACADEMY -->

                                        <div
                                            class="solution-option">

                                            <input
                                                type="radio"
                                                id="interestAcademy"
                                                name="interest"
                                                value="Elldy Academy">


                                            <label
                                                for="interestAcademy">


                                                <span
                                                    class="choice-icon">

                                                    <i class="bi bi-mortarboard"></i>

                                                </span>


                                                <span
                                                    class="choice-text">

                                                    <strong>
                                                        Elldy Academy
                                                    </strong>

                                                    <small>
                                                        Learning & training
                                                    </small>

                                                </span>

                                            </label>

                                        </div>


                                    </div>

                                </div>


                                <!-- MESSAGE -->

                                <div class="col-12 mt-4">

                                    <label
                                        class="form-label">

                                        Tell us about your requirement *

                                    </label>


                                    <textarea
                                        name="message"
                                        class="form-control"
                                        placeholder="Tell us what you're trying to achieve..."
                                        required></textarea>

                                </div>


                                <!-- BUTTON -->

                                <div class="col-12 mt-4">

                                    <button
                                        type="submit"
                                        class="submit-btn">

                                        Send Enquiry

                                        <i
                                            class="bi bi-arrow-up-right ms-2">
                                        </i>

                                    </button>

                                </div>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </section>



    <!-- =================================================
         FINAL CTA
    ================================================== -->

    <section class="bottom-cta">

        <div class="container">


            <span
                class="section-label"
                data-aos="fade-up">

                EXPLORE FIRST

            </span>


            <h2
                data-aos="fade-up"
                data-aos-delay="100">

                See what we can
                build together.

            </h2>


            <p
                data-aos="fade-up"
                data-aos-delay="170">

                Explore Elldy for data and business
                intelligence, or discover Connect CRM
                for customer relationship management.

            </p>


            <div
                class="cta-buttons"
                data-aos="fade-up"
                data-aos-delay="240">


                <a
                    href="https://elldy.com/"
                    target="_blank"
                    rel="noopener"
                    class="cta-btn">

                    Explore Elldy

                    <i class="bi bi-arrow-up-right"></i>

                </a>


                <a
                    href="https://connect.arklytics.in/"
                    target="_blank"
                    rel="noopener"
                    class="cta-btn light">

                    Explore CRM

                    <i class="bi bi-arrow-up-right"></i>

                </a>

            </div>

        </div>

    </section>


</main>

<footer>
    <?php include 'footer.php'; ?>
</footer>



<!-- =====================================================
     BOOTSTRAP
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

            duration:
                750,

            easing:
                "ease-out-cubic",

            once:
                true,

            offset:
                70

        });


        /* =================================================
           AUTO SCROLL TO FORM AFTER ERROR/SUCCESS
        ================================================= */

        <?php if ($success || $error): ?>

        setTimeout(
            function () {

                const form =
                    document.querySelector(
                        ".form-wrapper"
                    );

                if (form) {

                    form.scrollIntoView({
                        behavior:
                            "smooth",

                        block:
                            "center"
                    });

                }

            },
            200
        );

        <?php endif; ?>


        /* =================================================
           PHONE INPUT
        ================================================= */

        const phone =
            document.querySelector(
                'input[name="phone"]'
            );


        if (phone) {

            phone.addEventListener(
                "input",
                function () {

                    this.value =
                        this.value.replace(
                            /[^0-9+\-\s()]/g,
                            ""
                        );

                }
            );

        }


        /* =================================================
           BUTTON LOADING
        ================================================= */

        const form =
            document.querySelector(
                "form"
            );


        if (form) {

            form.addEventListener(
                "submit",
                function () {

                    const button =
                        form.querySelector(
                            ".submit-btn"
                        );


                    if (button) {

                        button.innerHTML =
                            `
                            Sending
                            <span
                                class="spinner-border spinner-border-sm ms-2"
                                role="status">
                            </span>
                            `;

                        button.disabled =
                            true;

                    }

                }
            );

        }

    }
);

</script>


</body>

</html>