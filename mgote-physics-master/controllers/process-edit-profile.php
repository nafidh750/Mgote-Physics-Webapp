<?php

// db connection
require("controllers/process-form.php");

$editUsername =  "";
$editMobile = 0;

$editUsernameError = $editMobileError = "";

// edit profile is set
if (isset($_POST["editProfile"])) {
    if (!$conn) {
        echo "Connection error: " . mysqli_connect_error();
    } else {
        $editUsername = testData($_POST["editUsername"]);
        $editMobile = testData($_POST["editMobile"]);
        $activeUser = $_SESSION["user_id"];

        // Validate Username
        if (empty($editUsername)) {
            $editUsernameError = "Username is required";
        } else {
            if (!preg_match("/^[a-zA-Z- ']*$/", $editUsername)) {
                $editUsernameError = "Only letters are required";
            }
        }

        // Mobile validation

        if (empty($mobile)) {
            if (!preg_match("/^[0-9]*$/", $mobile)) {
                $editMobileError = "Invalid mobile number";
            }
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if ($editMobileError == "" && $editUsernameError == "") {

                $sqlUserProfile = "UPDATE users SET  username = ?, mobile_number = ? WHERE user_id = ? ";

                // prepare, bind_param and execute query
                $updateUserProfile = $conn->prepare($sqlUserProfile);
                $updateUserProfile->bind_param("sii", $editUsername, $editMobile, $activeUser);
                $updateUserProfile->execute();

                if (!$updateUserProfile) {
                    $_SESSION["msg-type"] = "danger";
                    $_SESSION["message"] = "Failed to update profile.";
                } else {
                    $_SESSION["msg-type"] = "success";
                    $_SESSION["message"] = "Profile updated successfully.";
                    $_SESSION['username'] = $editUsername;
                    header("refresh:2 , url= profile.php");
                }
            }
        }
    }
}