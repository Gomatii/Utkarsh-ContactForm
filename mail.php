<?php
  
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$to = "co.a.39.gomati.iyer@gmail.com";
$subject = "Contact form enquiry";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@contactform.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
header("Location:thankyou.html");
?>