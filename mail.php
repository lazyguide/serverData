<?php
$email = $_POST['email'];

$verificationCode = rand(100000, 999999);

require 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
$mail = new PHPMailer(true);
$mail->isSMTP();                                            //Send using SMTP
$mail->Host       = 'smtp-mail.outlook.com';                     //Set the SMTP server to send through
$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
$mail->Username   = 'project.lazyguide@outlook.com';                     //SMTP username
$mail->Password   = 'IM41project@lazyguide';                               //SMTP password
$mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
$mail->Port       = 587;

$mail->setFrom('project.lazyguide@outlook.com', 'lazy guide');
$mail->addAddress($email);

$mail->Subject = "lazyguide Verification";
$mail->Body = "Verification Code: ".$verificationCode;

$mail->send();

echo (string)$verificationCode;
?>
