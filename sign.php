<?php
$userID = $_POST["userID"];
$password = $_POST["password"];
$userName = $_POST['userName'];
$phone = $_POST['phone'];
$link = @mysqli_connect("localhost", "root", "12345678", "lazyguide");
$sql = "INSERT INTO account (USERID, USERNAME, PASSWORD, PHONE) VALUES ('$userID', '$userName', '$password', '$phone')";

$result = mysqli_query($link, $sql);

if($result){
    echo "success";
}else{
    echo "fail";
}
?>
