<?php
    ini_set("SMTP", "smtp.gmail.com");
    ini_set("smtp_port", 587);

    $to = $_POST['email'];
    $varificationCode = rand(100000, 999999);
    $subject = "Verification Code: ";
    $message = "Your code: ".$varificationCode;
    $headers = "From: project.lazyguide@gmail.com\r\n";
    $headers .= "Reply-To: project.lazyguide@gmail.com\r\n";
    $headers .= "Return-Path: project.lazyguide@gmail.com\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email.";
    }
?>
