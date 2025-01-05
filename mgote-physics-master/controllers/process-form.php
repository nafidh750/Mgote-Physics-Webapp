<?php
session_start();
require("connect.php");

// Emptying inputs fields;
$email = $password = $mobile = $username  =  $confirmPassword = $loginEmail = $loginPassword = "";
$emailError = $passwordError = $mobileError = $usernameError = $confirmPasswordError = "";
$loginEmailError = $loginPasswordError = "";

$_SESSION["message"] = "";
$_SESSION["msg-type"] = "";

// Prevent sql injection
function testData($data)
{
    $data = trim($data);
    $data = htmlentities($data);
    $data = stripslashes($data);
    return $data;
}

// register a user
if (isset($_POST["register"])) {

    $email = testData($_POST["email"]);
    $password = testData($_POST["password"]);
    $mobile = testData($_POST["mobile"]);
    $username = testData($_POST["username"]);
    $confirmPassword = testData($_POST["confirmPassword"]);

    if (!$conn) {
        echo "Connection Error " . mysqli_connect_error();
    } else {

        //    Username validation
        if (empty($username)) {
            $usernameError = "Username is required";
        } else {
            if (!preg_match("/^[a-zA-Z- ']*$/", $username)) {
                $usernameError = "Username can contain only letters and whitespace";
            }
        }

        // Phone validation

        if (!empty($mobile)) {
            if (!preg_match("/^[0-9]*$/", $mobile)) {
                $mobileError = "Invalid mobile number";
            }
        }


        //    Email validation
        if (empty($email)) {
            $emailError = "Email is required";
        } else {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailError = "Invalid email address";
            } else {
                $sqlCheckingEmailAddress = "SELECT email_address FROM users WHERE email_address = ? LIMIT 1";

                // prepare, bind_param and execute query
                $checkingEmailAddress = $conn->prepare($sqlCheckingEmailAddress);
                $checkingEmailAddress->bind_param("s", $email);
                $checkingEmailAddress->execute();
                $checkingEmailAddressResult = $checkingEmailAddress->get_result();
                $checkingEmailAddressRow = $checkingEmailAddressResult->fetch_assoc();

                if ($checkingEmailAddressRow) {
                    $emailError = "Email is already taken by another user";
                }
            }
        }

        // Password Validation   
        if (empty($password)) {
            $passwordError = "Password is required";
        } else {

            $passwordLength = strlen($password);
            $numberCheck = preg_match('@[0-9]@', $password);
            $lowercaseCheck = preg_match('@[a-z]@', $password);
            $specialCharactersCheck = preg_match('@[^\w]@', $password);

            if ($passwordLength < 6) {
                $passwordError = "Password must be atleast 6 characters in length";
            } elseif (!$numberCheck) {
                $passwordError = "Password must include atleast one number";
            } elseif (!$lowercaseCheck) {
                $passwordError = "Password must include atleast one lowercase characters";
            } elseif (!$specialCharactersCheck) {
                $passwordError = "Password must contain special characters";
            }
        }


        // Password rematch   
        if ($password != $confirmPassword) {
            $confirmPasswordError = "Passwords do not match";
        }

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            if (
                $usernameError == ""
                && $emailError == "" && $passwordError == "" && $confirmPasswordError == ""
                && $mobileError == ""
            ) {
                // hashing with md5
                $password = md5($password);

                $sql = "INSERT INTO users (username, email_address, mobile_number, user_password) VALUES (?, ?, ?, ?)";
                $statement = $conn->prepare($sql);
                $statement->bind_param("ssis", $username, $email, $mobile,  $password);
                $statement->execute();

                $_SESSION["msg-type"] = "success";
                $_SESSION["message"] = "Congrats! Login now to continue.";
                header("refresh: 3; url= login.php");
            } else {
                $_SESSION["msg-type"] = "danger";
                $_SESSION["message"] = "Something went wrong! Try to register again.";
            }
        }
    }
}

// login 
if (isset($_POST["login"])) {

    if (!$conn) {
        echo "Connection Error " . mysqli_connect_error();
    } else {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $loginEmail = testData($_POST["loginEmail"]);
            $loginPassword = testData($_POST["loginPassword"]);

            //    Email validation
            if (empty($loginEmail)) {
                $loginEmailError = "Email is required";
            } else {
                if (!filter_var($loginEmail, FILTER_VALIDATE_EMAIL)) {
                    $loginEmailError = "Invalid email address";
                }
            }

            // Phone validation

            if (empty($mobile)) {
                $mobileError = "mobile is required";
            } else {
                if (!preg_match("/^[0-9]*$/", $mobile)) {
                    $mobileError = "Invalid mobile number";
                }
            }

            // Password Validation   
            if (empty($loginPassword)) {
                $loginPasswordError = "Password is required";
            }

            $loginPassword = md5($loginPassword);
            $sqlLogin = "SELECT * FROM users WHERE email_address = ? AND user_password = ? ";
            $stmt = $conn->prepare($sqlLogin);
            $stmt->bind_param("ss", $loginEmail,$loginPassword);
            $stmt->execute();
            $userResult = $stmt->get_result();
            $singleUserRow = $userResult->fetch_assoc();
            if ($singleUserRow) {
                $_SESSION["user_id"] = $singleUserRow["user_id"];
                $_SESSION["username"] = $singleUserRow["username"];
                $_SESSION["msg-type"] = "success";
                $_SESSION["message"] = "User login successfully.";
                if (isset($_SESSION["user_id"])) {
                    header("refresh: 3; url= members.php");
                }
            } else {
                $_SESSION["msg-type"] = "danger";
                $_SESSION["message"] = "Incorrect email and password combination.";
            }
        }
    }
}

//  logout session
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION["user_id"]);
    unset($_SESSION["username"]);
    header("location: index.php ");
}