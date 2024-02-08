<?php
$email = $_POST['email'];
$subject = "Verification Code";
$verification_code = rand(100000, 999999);
$message = "Your verification code is: " . $verification_code;

mail($email, $subject, $message);

echo (string)$verification_code;
?>
