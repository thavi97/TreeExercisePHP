<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
filter_var($email, FILTER_VALIDATE_EMAIL);
filter_var($email, FILTER_SANITIZE_EMAIL);
filter_var($name, FILTER_SANITIZE_STRING);
filter_var($message, FILTER_SANITIZE_STRING);
$formcontent="From: $name \n Message: $message";
$recipient = "test@localhost.com";
$subject = "Example Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <title>Thank You!</title>
  <p>Your contact form has been sent! <a href="/tree-exercise-php">Click here</a> to return!</p>
</head>
</html>
