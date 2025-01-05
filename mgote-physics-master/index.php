<?php
require("controllers/process-form.php");
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Homepage | MGOTE PHYSICS</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <meta content="" name="keywords" />
        <meta content="" name="description" />

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon" />

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap"
            rel="stylesheet" />

        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

        <!-- Libraries Stylesheet -->
        <link href="lib/animate/animate.min.css" rel="stylesheet" />
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet" />

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet" />
    </head>

    <body>
        <?php require("includes/spinner.php"); ?>

        <?php require("includes/header.php"); ?>

        <!-- Carousel Start -->
        <div class="container-fluid p-0">
            <div class="owl-carousel header-carousel position-relative">
                <div class="owl-carousel-item position-relative">
                    <img class="img" src="img/e-formular.jpg" alt="alert" />
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                        style="background: rgba(24, 29, 56, 0.7)">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-sm-10 col-lg-8">
                                    <h2 class="display-3 text-white animated slideInDown">
                                        ABOUT US
                                    </h2>
                                    <p class="fs-5 text-white mb-2 pb-2">
                                        An incredible platform created for the purpose of helping
                                        students to acquire useful knowledge and contents shared by
                                        most experienced instructors and teachers. We are teaching
                                        and providing education materials and contents to all form 5
                                        and form 6 students.
                                    </p>
                                    <div class="my-3">
                                        <a href="about.php"
                                            class="btn btn-primary py-2 py-md-3 px-md-5 me-3 animated slideInLeft">Read
                                            More</a>
                                        <a href="register.php"
                                            class="btn btn-light py-md-3 px-md-5 animated slideInRight">Join Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-carousel-item position-relative">
                    <img class="img img-fluid opacity-25" src="img/Plasma-Particle-Physics-Art-Concept.jpg"
                        alt="alert" />
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                        style="background: rgba(24, 29, 56, 0.7)">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-sm-10 col-lg-8">
                                    <h2 class="display-3 text-white animated slideInDown">
                                        PRE FORM V SESSIONS
                                    </h2>
                                    <p class="fs-5 text-white mb-4 pb-2">
                                        If you are form IV leaver and you want to do preparation for
                                        Advanced level, here is the solution for you. We've already
                                        launch our 2023 pre form V session. For detailed
                                        information, reach us here by contact or email us.
                                    </p>
                                    <a href="tel:+255784956894"
                                        class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">
                                        <i class="fa fa-phone-alt"></i> Call Us</a>
                                    <a href="mailto:saidabdallahmgote@gmail.com"
                                        class="btn btn-light py-md-3 px-md-5 animated slideInRight">
                                        <i class="fa fa-envelope"></i> Message Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-carousel-item position-relative">
                    <img class="img" src="img/lab5.jpg" alt="Student in the laboratory" />
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                        style="background: rgba(24, 29, 56, 0.7)">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-sm-10 col-lg-8">
                                    <h2 class="display-3 text-white animated slideInDown">
                                        PRACTICALS
                                    </h2>
                                    <p class="fs-5 text-white mb-4 pb-2">
                                        Get an impressive and well structured A level practical
                                        trainings for the preparation of your A level final
                                        examinations.
                                    </p>
                                    <a href="about.php"
                                        class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                                    <a href="register.php"
                                        class="btn btn-light py-md-3 px-md-5 animated slideInRight">Join Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-carousel-item position-relative">
                    <img class="img" src="img/student-in-the-classroom.jpg" alt="Alert" />
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                        style="background: rgba(24, 29, 56, 0.7)">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-sm-10 col-lg-8">
                                    <h2 class="display-3 text-white animated slideInDown">
                                        EXPERT INSTRUCTORS
                                    </h2>
                                    <p class="fs-5 text-white mb-4 pb-2">
                                        Meet our reliable and experienced instructors to take your
                                        carrier to the next level. All our instructors are good in
                                        teaching and providing most valuable contents, join now and
                                        enjoy this incredible platform.
                                    </p>
                                    <a href="about.php"
                                        class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                                    <a href="register.php"
                                        class="btn btn-light py-md-3 px-md-5 animated slideInRight">Join Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-carousel-item position-relative">
                    <img class="img" src="img/physics-universe.jpg" alt="alert" />
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                        style="background: rgba(24, 29, 56, 0.7)">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-sm-10 col-lg-8">
                                    <h2 class="display-3 text-white animated slideInDown">
                                        NOTES & EXAMS
                                    </h2>
                                    <p class="fs-5 text-white mb-4 pb-2">
                                        Be a member of our platform and enjoy a lot of amazing form
                                        5 and form 6 notes, question papers and examinations for all
                                        student are also available online.
                                    </p>
                                    <a href="about.php"
                                        class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                                    <a href="register.php"
                                        class="btn btn-light py-md-3 px-md-5 animated slideInRight">Join Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->

        <!-- Main section Start -->
        <div class="py-5 about-section">
            <div class="container">
                <div class="row g-5 my-4 py-2 box-shadow-container">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px">
                        <div class="position-relative h-100">
                            <img class="img-fluid img-rounded-circle position-absolute w-100 h-100" src="img/lab5.jpg"
                                alt="" style="object-fit: cover" />
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                        <h4 class="section-title bg-white text-start text-primary pe-3">
                            About Us
                        </h4>
                        <p class="mb-4">
                            Mgote Physics provides online services by means of sharing useful
                            notes which help students to acquire more knowledge.
                        </p>
                        <p>
                            Mgote Physics intends to help students in Tanzania to access and
                            get useful notes, practical sessions, and online tutorials done by
                            Mr Mgote, thus by joning as a member of our platform, you will get
                            access to explore amazing contents here.
                        </p>
                    </div>
                </div>
                <div class="row g-5 my-4 py-2 box-shadow-container">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                        <h4 class="section-title bg-white text-start text-primary pe-3">
                            Notes & teaching
                        </h4>
                        <p class="mb-4">
                            The students have been given priority to access notes and videos
                            which help them to increase the understanding on answering
                            different kinds of questions. We also have teaching sessions for
                            Advanced students both form 5 and form 6, you may want to enroll
                            for your next studies.
                        </p>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px">
                        <div class="position-relative h-100">
                            <img class="img-fluid position-absolute w-100 h-100" src="img/student-in-the-classroom.jpg"
                                alt="" style="object-fit: cover" />
                        </div>
                    </div>
                </div>
                <div class="row g-5 my-4 py-2 box-shadow-container">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                        <h4 class="section-title bg-white text-start text-primary pe-3">
                            Practicals & solvings
                        </h4>
                        <p class="mb-4">
                            We are providing sessions which are done practically which teaches
                            the student on how to tackle the practical questions. Further, We
                            are undergoing practicals together with appropriate solvings for
                            all advanced practicals.
                        </p>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px">
                        <div class="position-relative h-100">
                            <img class="img-fluid position-absolute w-100 h-100" src="img/lab4.jpg" alt="alert"
                                style="object-fit: cover" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Package Start -->
        <div class="py-5 px-2 package-section">
            <div class="my-3 mb-5">
                <h2 class="fx-4 text-center">Premium Package</h2>
            </div>
            <div class="container">
                <div class="row g-4 d-md-flex align-items-stretch justify-content-between align-items-center">
                    <div class="col-lg-5 col-sm-6 wow fadeInUp container-package py-2 border-bottom border-1 border-primary"
                        data-wow-delay="0.3s">
                        <div class="package-info text-center pt-3 pb-2 border-bottom border-1 border-secondary">
                            <div class="p-4">
                                <h3>1 Month</h3>
                            </div>
                            <div class="my-3">
                                <span class="small"><del>Tsh 12000</del></span>
                                <span class="ms-3 py-3 px-4 text-light badge rounded-pill bg-info">SAVE 33%</span>
                            </div>
                            <div class="my-3">
                                <span class="display-6">Tsh 8000/</span><span class="text-primary duration">mo</span>
                            </div>
                            <div class="my-3">+1 month FREE</div>
                            <div class="my-3 d-flex justify-content-center w-100">
                                <button class="btn btn-info btn-lg">
                                    <a href="register.php" class="text-light text-decoration-none">Be a member</a>
                                </button>
                            </div>
                        </div>
                        <div class="package-features my-2">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <i class="fa fa-check mx-2 text-success"></i> All Notes
                                </li>
                                <li class="list-group-item">
                                    <i class="fa fa-check mx-2 text-success"></i>Pdf(s) & Handouts
                                </li>
                                <li class="list-group-item">
                                    <i class="fa fa-check mx-2 text-success"></i>Video
                                </li>
                                <li class="list-group-item">
                                    <i class="fa fa-check mx-2 text-success"></i>Examinations
                                </li>
                                <li class="list-group-item">
                                    <i class="fa fa-check mx-2 text-success"></i>Solvings
                                </li>
                                <li class="list-group-item">
                                    <i class="fa fa-check mx-2 text-success"></i>Practicals
                                </li>
                                <li class="list-group-item">
                                    <i class="fa fa-check mx-2 text-success"></i>24/7 customer
                                    support
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-5 col-sm-6 wow fadeInUp container-package pb-2 border-bottom border-1 border-primary"
                        data-wow-delay="0.3s">
                        <div class="package-info text-center pt-3 pb-2 border-bottom border-1 border-secondary">
                            <div class="p-4">
                                <h3>1 Week</h3>
                            </div>
                            <div class="my-3">
                                <span class="small"><del>Tsh 6000</del></span>
                                <span class="ms-3 py-3 px-4 text-light badge rounded-pill bg-info">SAVE 50%</span>
                            </div>
                            <div class="my-3">
                                <span class="display-6">Tsh 3000/</span><span class="text-primary duration">week</span>
                            </div>
                            <div class="my-3">+1 month FREE</div>
                            <div class="my-3 d-flex justify-content-center w-100">
                                <button class="btn btn-info btn-lg">
                                    <a href="register.php" class="text-light text-decoration-none">Be a member</a>
                                </button>
                            </div>
                        </div>
                        <div class="package-features my-2">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <i class="fa fa-check mx-2 text-success"></i> All Notes
                                </li>
                                <li class="list-group-item">
                                    <i class="fa fa-check mx-2 text-success"></i>Pdf(s) & Handouts
                                </li>
                                <li class="list-group-item">
                                    <i class="fa fa-check mx-2 text-success"></i>Video
                                </li>
                                <li class="list-group-item">
                                    <i class="fa fa-check mx-2 text-success"></i>Examinations
                                </li>
                                <li class="list-group-item">
                                    <i class="fa fa-check mx-2 text-success"></i>Solvings
                                </li>
                                <li class="list-group-item">
                                    <i class="fa fa-check mx-2 text-success"></i>Practicals
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Package End -->

        <!-- Team Start -->
        <div class="py-5 team-section">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title bg-white text-center text-primary px-3">
                        Instructors
                    </h6>
                    <h1 class="mb-5">Expert Instructors</h1>
                </div>
                <div class="row g-4 d-flex justify-content-center align-items-center">
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item bg-light">
                            <div class="overflow-hidden">
                                <img class="img-fluid" src="img/mgote.jpg" alt="" />
                            </div>
                            <div class="position-relative d-flex justify-content-center" style="margin-top: -23px">
                                <div class="bg-light d-flex justify-content-center pt-2 px-1">
                                    <a class="btn btn-sm-square btn-primary mx-1"
                                        href="https://www.facebook.com/said.mgote"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-sm-square btn-primary mx-1"
                                        href="https://www.instagram.com/saidmgote/"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            <div class="text-center p-4">
                                <h5 class="mb-0">Said Mgote</h5>
                                <small>Senior Instructor</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->

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
        <script src="js/themes/themeHome.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>

</html>