<?php require("controllers/process-form.php"); ?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <title>Register | Mgote Physics</title>
    </head>

    <body>
        <?php require("includes/spinner.php"); ?>

        <?php require("includes/header.php"); ?>

        <div class="d-flex justify-content-center align-items-center flex-column register-section">
            <h2 class="text-primary my-2 mt-5 text-uppercase text-register">Create Account</h2>
            <div class="form-container bg-info mx-auto my-3 px-3 py-4">
                <?php if (isset($_POST["register"])) {
            ?>
                <div
                    class="d-flex justify-content-between w-100 mx-auto  alert alert-<?php echo $_SESSION['msg-type']; ?> ">
                    <span>
                        <?php
                        echo $_SESSION["message"];
                        unset($_SESSION["message"])
                        ?>
                    </span>
                    <button class="btn-close ms-2" data-bs-dismiss="alert"></button>
                </div>
                <?php } ?>
                <form action="register.php" method="POST" class="form w-100">
                    <div class="form-group my-3">
                        <label for="" class="form-label">Username <span class="text-dark">*</span></label>
                        <input type="text" id="username" name="username" class="form-control"
                            value="<?php echo $username; ?>" placeholder="Enter username">
                        <span class="text-danger"><?php echo $usernameError; ?></span>
                    </div>
                    <div class="form-group my-3">
                        <label for="" class="form-label">Email Address <span class="text-dark">*</span></label>
                        <input type="email" id="email" name="email" class="form-control" value="<?php echo $email;  ?>"
                            placeholder="Enter valid email address">
                        <span class="text-danger"><?php echo $emailError; ?></span>
                    </div>
                    <div class="form-group my-3">
                        <label for="" class="form-label">Mobile Number</label>
                        <input inputmode="numeric" id="mobile" name="mobile" class="form-control"
                            placeholder="Mobile number ( optional) ">
                        <span class="text-danger"><?php echo $mobileError; ?></span>
                    </div>
                    <div class="form-group my-3">
                        <label for="" class="form-label">Password <span class="text-dark">*</span></label>
                        <input type="password" id="password" name="password" class="form-control"
                            placeholder="Enter Password">
                        <span class="text-danger"><?php echo $passwordError; ?></span>
                    </div>
                    <div class="form-group my-3">
                        <label for="" class="form-label">Confirm Password <span class="text-dark">*</span></label>
                        <input type="password" id="confirmPassword" name="confirmPassword" class="form-control"
                            placeholder="Confirm Password">
                        <span class="text-danger"><?php echo $confirmPasswordError ?></span>
                    </div>
                    <button type="submit" name="register" class="btn btn-primary w-100 btn-register">Register</button>
                    <div class="my-3">
                        <h6>Already a member? <span class="text-primary"><a href="login.php"
                                    class="text-light text-decoration-none mx-1">login</a>
                            </span></h6>
                    </div>
                </form>
            </div>
        </div>
    </body>
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
    <script src="js/themes/themeRegister.js"></script>
    <!-- Template Javascript -->
    <script src="js/main.js"></script>

</html>