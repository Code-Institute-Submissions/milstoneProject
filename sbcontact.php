<?php $name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="Från: $name \n meddelande: $message";
$recipient = "rawa_aref@hotmail.com";
$subject = "Lead Sälja bil";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
header("Location: contactsuccess.html");
?>





 