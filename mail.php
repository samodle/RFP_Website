<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "sro27@cornell.edu";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("We're sorry, we are unable to send your message.");
echo "Thank You! You'll hear from us soon.";
?>