<?php require("controllers/process-contact-form.php"); ?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>MGOTE PHYSICS</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap"
            rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <?php require("includes/spinner.php"); ?>

        <?php require("includes/header.php"); ?>

        <!-- Header Start -->
        <div class="container-fluid bg-primary py-5 page-header">
            <div class="container py-5">
                <div class="row justify-content-center">
                    <div class="col-lg-10 text-center">
                        <h1 class="display-3 text-white animated slideInDown">Contact</h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->



        <!-- Contact Start -->
        <div class="px-2 py-5 contact-section">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title bg-white text-center text-primary px-3">Contact Us</h6>
                    <h1 class="mb-5">Contact For Any Query</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <h2>Address</h2>
                        <div class="d-flex align-items-center mb-3">
                            <div class="d-flex align-items-center justify-content-center contact-icon  flex-shrink-0 bg-primary"
                                style="width: 50px; height: 50px;">
                                <i class="fa fa-map-marker-alt text-white"></i>
                            </div>
                            <div class="ms-3">
                                <h5 class="text-primary text-title">Office</h5>
                                <p class="mb-0">Mchikichini , Dar es salaam</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <div class="d-flex align-items-center justify-content-center contact-icon  flex-shrink-0 bg-primary"
                                style="width: 50px; height: 50px;">
                                <i class="fa fa-phone-alt text-white"></i>
                            </div>
                            <div class="ms-3">
                                <h5 class="text-primary text-title">Mobile</h5>
                                <p class="mb-0" title="Make a quick call"><a href="tel:+255784956894"
                                        class="text-dark text-decoration-none">0784956894</a>
                                </p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center ">
                            <div class="d-flex align-items-center justify-content-center contact-icon flex-shrink-0 bg-primary"
                                style="width: 50px; height: 50px;">
                                <i class="fa fa-envelope-open text-white"></i>
                            </div>
                            <div class="ms-3">
                                <h5 class="text-primary text-title">Email</h5>
                                <p class="mb-0" title="Send us a message"><a class="text-dark text-decoration-none"
                                        href="mailto:saidabdallahmgote@gmail.com">saidabdallahmgote@gmail.com</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <h2>Map</h2>
                        <div class="mapouter">
                            <div class="gmap_canvas"><iframe
                                    src="https://maps.google.com/maps?q=max%20mbwana%20street&amp;t=&amp;z=13&amp;ie=UTF8&amp;iwloc=&amp;output=embed"
                                    id="gmap_canvas" frameborder="0" scrolling="no"
                                    style="width: 600px; height: 400px;"></iframe><a
                                    href="https://technologg.com/mla-citation-generator/" style="display:none">MLA
                                    Citation Generator</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                        <h2>Get in touch</h2>
                        <?php
                    if (isset($_POST["sendMessage"])) :
                    ?>
                        <div
                            class="d-flex justify-content-between w-100 alert alert-<?php echo $_SESSION['msg-type']; ?> ">
                            <span>
                                <?php
                                echo $_SESSION["message"];
                                unset($_SESSION["message"])
                                ?>
                            </span>
                            <button class="btn-close ms-2" data-bs-dismiss="alert"></button>
                        </div>
                        <?php endif; ?>
                        <form action="contact.php" method="POST">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="username" name="username"
                                            placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                        <span class="text-danger"><?php echo $usernameError ?></span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                        <span class="text-danger"><?php echo $emailError ?></span>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="subject" name="subject"
                                            placeholder="Subject">
                                        <label for="subject">Subject</label>
                                        <span class="text-danger"><?php echo $subjectError ?></span>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" name="message" placeholder="Message" id="message"
                                            style="height: 150px"></textarea>
                                        <label for="message">Message</label>
                                        <span class="text-danger"><?php echo $messageError ?></span>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary btn-message w-100 py-3" type="submit"
                                        name="sendMessage">Send
                                        Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->

        <?php require("includes/footer.php") ?>

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="js/themes/themeContact.js"></script>
        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>

</html>