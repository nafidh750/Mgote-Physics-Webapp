<?php
require("controllers/process-form.php");
if (empty(testData($_SESSION["user_id"]))) {
    header("location: login.php");
}
?>
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
        <title>View | Mgote Physics</title>
    </head>

    <body>

        <?php require("includes/header.php"); ?>

        <!-- Header Start -->
        <div class="container-fluid bg-primary py-5 page-header">
            <div class="container py-5">
                <div class="row justify-content-center">
                    <div class="col-lg-10 text-center">
                        <h1 class="display-6 text-white animated slideInDown">Account Info</h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->

        <!-- Start Premium Features -->
        <div class="py-5 px-2 register-section">
            <div class="container">
                <?php
            if (isset($_GET["view_profile"]) && isset($_SESSION["user_id"]) && $conn) {
                $loggedInUser = $_SESSION["user_id"];
                $fetchedViewUser = testData($_GET["view_profile"]);
                $fetchedViewUser = filter_var($fetchedViewUser, FILTER_VALIDATE_INT);
                $sqlFetchViewUser = "SELECT username, email_address, mobile_number FROM users WHERE user_id = '$fetchedViewUser'";
                $fetchedViewUser = mysqli_query($conn, $sqlFetchViewUser);

                if (mysqli_num_rows($fetchedViewUser) === 1) {
                    while ($rowUser = mysqli_fetch_assoc($fetchedViewUser)) {
            ?>
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="bg-info modal-content form-container">
                        <div class="modal-header">
                            <h5 class="modal-title mx-auto" id="modalLabel">User Details</h5>
                        </div>
                        <div class="modal-body">
                            <form action="view-profile.php?view_profile= <?php echo $rowUser["user_id"]; ?>"
                                method="POST">
                                <div class=" form-group">
                                    <label class="form-label" for="username">Username</label>
                                    <input type="text" class="form-control"
                                        value=" <?php echo $rowUser["username"]; ?> " readonly />
                                </div>
                                <div class="form-group my-1">
                                    <label class="form-label" for="email">Email</label>
                                    <input class="form-control" value=" <?php echo $rowUser["email_address"]; ?> "
                                        readonly />
                                </div>
                                <div class="form-group my-1">
                                    <label class="form-label" for="role">Mobile</label>
                                    <input class="form-control" value=" <?php echo $rowUser["mobile_number"]; ?> "
                                        readonly />
                                </div>
                                <div class="modal-footer my-2">
                                    <a href="profile.php" class="btn btn-lg d-block btn-secondary" id="updaterevenue"
                                        name="updaterevenue">OK</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <?php } ?>
                <?php } ?>
                <?php } ?>
            </div>
        </div>
        <!-- End Premium Features -->

        <?php require("includes/footer.php"); ?>
    </body>

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