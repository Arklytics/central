<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us | Arklytics</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
</head>

<body style="background-color: #f8f9ff;">

<?php include 'header.php'; ?>

<!-- ===========================================
CONTACT HERO
=========================================== -->

<section class="py-5 text-white"
    style="background:linear-gradient(135deg,#081B4D,#03BBF8); min-height:55vh; display:flex; align-items:center;">

    <div class="container text-center">

        <span class="badge bg-warning text-dark px-3 py-2 mb-3">

            CONTACT US

        </span>

        <h1 class="display-4 fw-bold mb-3">

            Let's Build Smarter Business Solutions Together

        </h1>

        <p class="lead mx-auto mb-4" style="max-width:750px;">

            Have questions about <strong>Elldy Data Intelligence</strong>,
            <strong>Connect CRM</strong>, or our AI-powered business solutions?
            Our team is here to help.

        </p>

        <a href="#contact-form"
            class="btn btn-warning btn-lg rounded-pill px-4 me-3">

            Get in Touch

        </a>

        <a href="https://elldy.com/"
            class="btn btn-outline-light btn-lg rounded-pill px-4">

            Explore Elldy

        </a>

    </div>

</section>

<!-- ===========================================
CONTACT INFORMATION
=========================================== -->

<section class="py-5 bg-light">

    <div class="container">

        <div class="text-center mb-5">

            <span class="badge bg-primary px-3 py-2 mb-3">
                CONTACT INFORMATION
            </span>

            <h2 class="display-5 fw-bold">
                Let's Connect
            </h2>

            <p class="lead text-muted mx-auto" style="max-width:750px;">

                Whether you're interested in Elldy Data Intelligence, Connect CRM,
                AI-powered business solutions, or a product demo,
                we're here to help.

            </p>

        </div>

        <div class="row g-4">

            <!-- Head Office -->

            <div class="col-lg-3 col-md-6">

                <div class="card border-0 shadow h-100 text-center p-4 hover-effect">

                    <i class="bi bi-building display-4 text-primary mb-3"></i>

                    <h5 class="fw-bold">
                        Head Office
                    </h5>

                    <p class="text-muted mb-0">

                        Arklytics Solutions & Innovations

                        <br>

                        Hyderabad, Telangana

                    </p>

                </div>

            </div>

            <!-- Email -->

            <div class="col-lg-3 col-md-6">

                <a href="mailto:info@arklytics.in" class="text-decoration-none">

                    <div class="card border-0 shadow h-100 text-center p-4 hover-effect">

                        <i class="bi bi-envelope-fill display-4 text-success mb-3"></i>

                        <h5 class="fw-bold text-dark">
                            Email Us
                        </h5>

                        <p class="text-muted mb-0">
                            info@arklytics.in
                        </p>

                    </div>

                </a>

            </div>

            <!-- Phone -->

            <div class="col-lg-3 col-md-6">

                <a href="tel:+919490238737" class="text-decoration-none">

                    <div class="card border-0 shadow h-100 text-center p-4 hover-effect">

                        <i class="bi bi-telephone-fill display-4 text-warning mb-3"></i>

                        <h5 class="fw-bold text-dark">
                            Call Us
                        </h5>

                        <p class="text-muted mb-0">
                            +91 94902 38737
                        </p>

                    </div>

                </a>

            </div>

            <!-- Connect -->

            <div class="col-lg-3 col-md-6">

                <div class="card border-0 shadow h-100 text-center p-4 hover-effect">

                    <i class="bi bi-chat-dots-fill display-4 text-info mb-3"></i>

                    <h5 class="fw-bold">
                        Let's Connect
                    </h5>

                    <p class="text-muted mb-0">

                        Book a free demo, discuss your project,
                        or explore how Arklytics can help your business grow.

                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST['name']);
    $company = htmlspecialchars($_POST['company']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $service = htmlspecialchars($_POST['service']);
    $message = htmlspecialchars($_POST['message']);

    $to = "info@arklytics.in";

    $mail_subject = "New Business Enquiry - Arklytics Website";

    $body = "
    <h2>New Business Enquiry</h2>

    <table cellpadding='8' cellspacing='0' border='1' style='border-collapse:collapse;'>

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
            <td>{$service}</td>
        </tr>

        <tr>
            <td><strong>Message</strong></td>
            <td>{$message}</td>
        </tr>

    </table>
    ";

    $headers = "From: Arklytics Website <info@arklytics.in>\r\n";
    $headers .= "Reply-To: {$email}\r\n";
    $headers .= "Content-Type:text/html;charset=UTF-8\r\n";

    if(mail($to,$mail_subject,$body,$headers)){
        $success="Thank you! Our team will contact you shortly.";
    }else{
        $error="Unable to send your enquiry.";
    }

}
?>



<section id="contact-form" class="py-5 bg-white">

<div class="container">

<div class="text-center mb-5">

<span class="badge bg-primary px-3 py-2 mb-3">

BOOK A FREE DEMO

</span>

<h2 class="display-5 fw-bold">

Let's Discuss Your Business

</h2>

<p class="lead text-muted mx-auto" style="max-width:700px;">

Tell us about your business requirements and our experts will help you
choose the right solution.

</p>

</div>

<div class="row justify-content-center">

<div class="col-lg-9">

<?php if(isset($success)){ ?>

<div class="alert alert-success text-center">

<?= $success ?>

</div>

<?php } ?>

<?php if(isset($error)){ ?>

<div class="alert alert-danger text-center">

<?= $error ?>

</div>

<?php } ?>

<div class="card border-0 shadow-lg rounded-4">

<div class="card-body p-5">

<form method="POST">

<div class="row g-4">

<div class="col-md-6">

<label class="form-label fw-semibold">

Full Name

</label>

<input
type="text"
name="name"
class="form-control form-control-lg"
placeholder="John Smith"
required>

</div>

<div class="col-md-6">

<label class="form-label fw-semibold">

Company Name

</label>

<input
type="text"
name="company"
class="form-control form-control-lg"
placeholder="ABC Pvt Ltd">

</div>

<div class="col-md-6">

<label class="form-label fw-semibold">

Business Email

</label>

<input
type="email"
name="email"
class="form-control form-control-lg"
placeholder="name@company.com"
required>

</div>

<div class="col-md-6">

<label class="form-label fw-semibold">

Phone Number

</label>

<input
type="text"
name="phone"
class="form-control form-control-lg"
placeholder="+91 XXXXX XXXXX"
required>

</div>

<div class="col-md-6">

<label class="form-label fw-semibold">

Interested In

</label>

<select
name="service"
class="form-select form-select-lg"
required>

<option value="">Choose Solution</option>

<option>Elldy Data Intelligence</option>

<option>Connect CRM</option>

<option>Business Intelligence</option>

<option>Embedded Analytics</option>

<option>API Integration</option>

<option>Elldy Academy</option>

<option>Custom Solution</option>

</select>

</div>

<div class="col-md-6">

<label class="form-label fw-semibold">

Preferred Contact

</label>

<select class="form-select form-select-lg">

<option>Email</option>

<option>Phone Call</option>

<option>WhatsApp</option>

<option>Google Meet</option>

</select>

</div>

<div class="col-12">

<label class="form-label fw-semibold">

Business Requirement

</label>

<textarea
name="message"
rows="6"
class="form-control form-control-lg"
placeholder="Tell us about your project or business requirements..."
required></textarea>

</div>

<div class="text-center mt-3">

<button
class="btn btn-primary btn-lg rounded-pill px-5">

Request Free Demo

</button>

</div>

</div>

</form>

</div>

</div>

</div>

</div>

</div>

</section>




<?php include 'footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>