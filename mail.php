<?php
$email = $_POST['email'];
$subject = "Verification Code";
$verification_code = rand(100000, 999999);
$message = "Your verification code is: " . $verification_code;

$headers = "From: project.lazyguide@gmail.com\r\n";
$headers .= "Reply-To: project.lazyguide@gmail.com\r\n";
$headers .= "Content-type: text/html\r\n";

mail($email, $subject, $message, $headers);

echo (string)$verification_code;
?>
