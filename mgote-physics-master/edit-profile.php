<?php
require("controllers/process-edit-profile.php");
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
        <title>Edit Profile | Mgote Physics</title>
    </head>

    <body>
        <?php require("includes/spinner.php"); ?>

        <?php require("includes/header.php"); ?>


        <div class="py-5 px-2 d-flex justify-content-center align-items-center flex-column register-section">
            <h2 class="text-primary my-2 mt-5 section-title">Edit Profile</h2>
            <div class="form-container bg-info mx-auto my-3 px-3 py-4">
                <?php if (isset($_POST["editProfile"])) {
            ?>
                <div
                    class="d-flex justify-content-between w-100 mx-auto  alert alert-<?php echo $_SESSION['msg-type']; ?> ">
                    <span>
                        <?php
                        echo $_SESSION["message"];
                        unset($_SESSION["message"]);
                        ?>
                    </span>
                    <button class="btn-close ms-2" data-bs-dismiss="alert"></button>
                </div>
                <?php } ?>
                <?php
            if (isset($_SESSION["user_id"])) {
                $activeUser = testData($_SESSION["user_id"]);
                $sqlEditUserProfile = "SELECT username, mobile_number FROM users WHERE user_id = ?";
                $stmt = $conn->prepare($sqlEditUserProfile);
                $stmt->bind_param("i", $activeUser);
                $stmt->execute();
                $result = $stmt->get_result();
                $userRow =  $result->fetch_assoc();
                if ($userRow) {
            ?>
                <form action="edit-profile.php" method="POST">
                    <div class="form-group my-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" id="editUsername" name="editUsername" class="form-control"
                            placeholder="Your username" value=" <?php echo $userRow["username"] ?> " />
                        <span class="text-danger"><?php echo $editUsernameError ?></span>
                    </div>
                    <div class="form-group my-3">
                        <label for="mobile" class="form-label">Mobile Number</label>
                        <input inputmode="numeric" id="editMobile" name="editMobile" class="form-control"
                            placeholder="Your mobile number" value=" <?php echo $userRow["mobile_number"] ?> ">
                        <span class="text-danger"><?php echo $editMobileError ?></span>
                    </div>
                    <button class="btn btn-primar btn-update-profile y w-100" name="editProfile">Save Changes</button>
                </form>
                <?php } ?>
                <?php } ?>

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