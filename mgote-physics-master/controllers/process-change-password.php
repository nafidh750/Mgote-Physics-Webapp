<?php
require("controllers/process-form.php");
$oldPassword = $newPassword = $confirmNewPassword = "";
$oldPasswordError = $newPasswordError = $confirmNewPasswordError = "";

if (isset($_POST["changePassword"]) && isset($_SESSION["user_id"])) {
    $activeUser = testData($_SESSION["user_id"]);
    $oldPassword = testData($_POST["oldPassword"]);
    $newPassword = testData($_POST["newPassword"]);
    $confirmNewPassword = testData($_POST["confirmNewPassword"]);

    if (!$conn) {
        echo "Connection Error: " . mysqli_connect_error();
    } else {


        // Old Password Validation   
        if (empty($oldPassword)) {
            $oldPasswordError = "Password is required";
        } else {
            $oldPassword = md5($oldPassword);
            $sqlCurrentUserPassword = "SELECT user_password FROM users WHERE user_id = ? AND user_password = ?";
            $stmt = $conn->prepare($sqlCurrentUserPassword);
            $stmt->bind_param("is", $activeUser, $oldPassword);
            $stmt->execute();
            $userResult = $stmt->get_result();
            $singleUserRow = $userResult->fetch_assoc();
            if (!$singleUserRow) {
                $oldPasswordError = "Incorrect old password";
            }
        }


        // New Password Validation   
        if (empty($newPassword)) {
            $newPasswordError = "Password is required";
        } else {
            // $password = $_POST["password"];
            $passwordLength = strlen($newPassword);
            $numberCheck = preg_match('@[0-9]@', $newPassword);
            $lowercaseCheck = preg_match('@[a-z]@', $newPassword);
            $specialCharactersCheck = preg_match('@[^\w]@', $newPassword);

            if ($passwordLength < 6) {
                $newPasswordError = "Password must be atleast 6 characters in length";
            } elseif (!$numberCheck) {
                $newPasswordError = "Password must include atleast one number";
            } elseif (!$lowercaseCheck) {
                $newPasswordError = "Password must include atleast one lowercase character";
            } elseif (!$specialCharactersCheck) {
                $newPasswordError = "Password must contain special character";
            }
        }

        if (empty($confirmNewPassword)) {
            $confirmNewPasswordError = "Confirmation Password is required";
        } elseif ($newPassword != $confirmNewPassword) {
            $confirmNewPasswordError = "Passwords do not match";
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if ($oldPasswordError == "" && $newPasswordError == "" && $confirmNewPasswordError == "") {
                $newPassword = md5($newPassword);
                $sqlUpdatePassword = "UPDATE users SET user_password = '$newPassword' WHERE user_id = '$activeUser' ";
                $updatePasswordResult = mysqli_query($conn, $sqlUpdatePassword);
                if ($updatePasswordResult) {
                    $_SESSION["msg-type"] = "success";
                    $_SESSION["message"] = "Password updated successfully.";
                    header("refresh:2, url=profile.php");
                } else {
                    $_SESSION["msg-type"] = "danger";
                    $_SESSION["message"] = "Failed to update password.";
                }
            } else {
                $_SESSION["msg-type"] = "danger";
                $_SESSION["message"] = "Something went wrong.";
            }
        }
    }
}