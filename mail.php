<?php
    ini_set("SMTP", "smtp.gmail.com");
    ini_set("smtp_port", 587);

    $to = $_POST['email'];
    $varificationCode = rand(100000, 999999);
    $subject = "Verification Code: ";
    $message = "Your code: ".$varificationCode;

    if (mail($to, $subject, $message)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email.";
    }
?>
