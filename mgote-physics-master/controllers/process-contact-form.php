<?php 
require("controllers/process-form.php");
$username = $email = $subject = $message = "";
$usernameError = $emailError = $subjectError = $messageError = "";

if (isset($_POST["sendMessage"])) {
    $username = testData($_POST["username"]);
    $email = testData($_POST["email"]);
    $subject = testData($_POST["subject"]);
    $message = testData($_POST["message"]);

      //  Username validation
      if (empty($username)) {
         $usernameError = "Username is required";
      } else {
        
         if (!preg_match("/^[a-zA-Z- ']*$/", $username)) {
            $usernameError = "Username can contain only letters and whitespace";
         }
      }

      //    Email validation
      if (empty($email)) {
         $emailError = "Email is required";
      } else {
         if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailError = "Invalid email address";
         }
      }

      //    Subject validation
      if (empty($subject)) { 
         $subjectError = "Subject is required";
      } 

      //    Message validation
      if (empty($message)) { 
         $messageError = "Message is required";
      } 
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if ($usernameError == "" && $emailError == "" && $subjectError == "" && $messageError == "") {
            $message = wordwrap($message, 70);
            $header = "From: ".$email;
            $to = "saidabdallahmgote@gmail.com";
            mail($to,$subject,$message,$header);
            $_SESSION["message"] = "Thanks for your feedback.";
            $_SESSION["msg-type"] = "success";
        } else {
            $_SESSION["message"] = "Something went wrong, try again.";
            $_SESSION["msg-type"] = "danger";
        }
    }
 }