<?php require("controllers/process-change-password.php");
if (empty($_SESSION["user_id"])) {
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <title>Change Password | Mgote Physics</title>
    </head>

    <body>
        <?php require("includes/spinner.php"); ?>

        <?php require("includes/header.php"); ?>


        <div class="py-5 px-2 d-flex justify-content-center align-items-center flex-column register-section">
            <h2 class="text-primary my-2 mt-5 section-title">Change Password</h2>
            <div class="form-container bg-info mx-auto my-3 px-3 py-4">
                <?php if (isset($_POST["changePassword"])) {
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
                <form action="change-password.php" method="POST">
                    <div class="form-group my-3">
                        <label for="oldPassword" class="form-label">Old Password</label>
                        <input type="password" id="oldPassword" name="oldPassword" class="form-control"
                            placeholder="Old password">
                        <span class="text-danger"><?php echo $oldPasswordError ?></span>
                    </div>
                    <div class="form-group my-3">
                        <label for="" class="form-label">New Password</label>
                        <input type="password" id="newPassword" name="newPassword" class="form-control"
                            placeholder="New password">
                        <span class="text-danger"><?php echo $newPasswordError ?></span>
                    </div>
                    <div class="form-group my-3">
                        <label for="" class="form-label">Confirm New Password</label>
                        <input type="password" id="confirmNewPassword" name="confirmNewPassword" class="form-control"
                            placeholder="Confirm new password">
                        <span class="text-danger"><?php echo $confirmNewPasswordError ?></span>
                    </div>
                    <button class="btn btn-primary w-100 btn-update-pword" name="changePassword">Update
                        Password</button>
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