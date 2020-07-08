<?php $name = $_POST['name'];
$email = $_POST['mail'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "joe@brutesoftworks.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
header("Location: index.html?mailsend");
?>

