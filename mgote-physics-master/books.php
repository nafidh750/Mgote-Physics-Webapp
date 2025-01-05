<?php
require("controllers/process-form.php");
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Books | MGOTE PHYSICS</title>
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
                        <h1 class="display-3 text-white animated slideInDown">Books</h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->

        <!-- Topics -->
        <section class="notes px-2 py-5 notes-form-section">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s"
                style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                <h6 class="section-title bg-white text-center text-primary px-3">Reference</h6>
            </div>
            <div class="mx-3 my-2 text-lg-center p-lg-5">
                <p class="text-lg-center">These are our favourite reference books which you can take and learn a lot
                    from experts and seniour educators around the world.Furthermore, these reference books are meant to
                    give you quick lessons, exercises, tips, and useful contents to expand your understanding in physics
                    subject.</p>
            </div>
            <div class="mx-3 my-2 container-topics reference-container">
                <ul class="px-0">
                    <li class="list-group-item">
                        S. Chand's Principle Of Physics
                    </li>
                    <li class="list-group-item">Modern ABC Physics</li>
                    <li class="list-group-item">Advanced Level Physics by Nelson Parker</li>
                    <li class="list-group-item">Physics for Advanced Level Secondary School by TIE</li>
                </ul>
            </div>
        </section>

        <?php require("includes/footer.php"); ?>

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script> -->
        <script src="js/bootstrap/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="js/themes/themeNotesForm.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>

</html>