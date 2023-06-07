<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $body = "Name: " . $name . "\n";
    $body .= "Email: " . $email . "\n";
    $body .= "Message: " . $message;

    // Send email
    $to = "co.a.39.gomati.iyer@gmail.com";  
    $subject = "Contact Form Submission";
    $headers = "From: " . $email;

    if (mail($to, $subject, $body, $headers)) {
      echo "Email sent successfully!";
    } else {
      echo "Error sending email.";
    }
  }
?>
