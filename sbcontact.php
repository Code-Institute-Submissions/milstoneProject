<?php
if(isset($_POST['g-recaptcha-response'])) {
   // RECAPTCHA SETTINGS
   $captcha = $_POST['g-recaptcha-response'];
   $ip = $_SERVER['REMOTE_ADDR'];
   $key = '6Ld3IKsUAAAAAIv5Ar5GzE4Wwta_ooLF1rCDAUxZ';
   $url = 'https://www.google.com/recaptcha/api/siteverify';
 
   // RECAPTCH RESPONSE
   $recaptcha_response = file_get_contents($url.'?secret='.$key.'&response='.$captcha.'&remoteip='.$ip);
   $data = json_decode($recaptcha_response);
 
   if(isset($data->success) &&  $data->success === true) {
       // code goes here

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $name \n meddelande: $message";
$recipient = "info@rcdbil.se";
$subject = "Lead Salja Bil";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
header("Location: contactsuccess.html");


   }
   else {
      header("Location: contactfail.html");
   }
}
?>