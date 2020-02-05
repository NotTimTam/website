<?php
$name = $_POST['name'];
$email = $_POST['email'];
$type = $_POST['type'];
$message = $_POST['message'];
$formcontent=" From: $name \n Type: $type \n Message: $message";
$recipient = "timmyiscool8@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>