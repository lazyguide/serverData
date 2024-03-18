<?php
$userid = $_POST['userid'];
$newUsername = $_POST['username'];
$newPassword = $_POST['password'];
$newPhone = $_POST['phone'];

$link = @mysqli_connect('localhost','root','','lazyguide');

$sql = "UPDATE account SET username='$newUsername', password='$newPassword', phone='$newPhone' 
        WHERE userid='$userid'";
$result = mysqli_query($link, $sql);


?>
