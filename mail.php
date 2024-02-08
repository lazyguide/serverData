<?php
    $to = $_POST['email'];
    $varificationCode = rand(100000, 999999);
    $subject = "Verification Code: ";
    $message = "Your code: ".$varificationCode;

    mail($to, $subject, $message);
?>
