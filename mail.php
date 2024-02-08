<?php

$smtpServer = 'smtp.gmail.com';
$smtpPort = 587;
$username = 'project.lazyguide@gmail.com';
$password = 'IM41project@lazyguide';

$recipient = $_POST['email'];
$subject = 'Verification';
$verification_code = rand(100000, 999999);
$message = "Your verification code is: " . $verification_code;

$headers = array(
    'From' => $username,
    'To' => $recipient,
    'Subject' => $subject,
    'Reply-To' => $username,
    'MIME-Version' => '1.0',
    'Content-Type' => 'text/html; charset=utf-8'
);

$smtp = @Mail::factory('smtp', array(
    'host' => $smtpServer,
    'port' => $smtpPort,
    'auth' => true,
    'username' => $username,
    'password' => $password
));

$mail = @$smtp->send($recipient, $headers, $message);
if (PEAR::isError($mail)) {
    echo 'Error: ' . $mail->getMessage();
} else {
    echo (string)$verification_code;
}


?>
