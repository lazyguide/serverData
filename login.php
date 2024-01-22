<?php
$username = $_POST["username"];
$password = $_POST["password"];

$link = @mysqli_connect("localhost", "root", "12345678", "account");
$sql = "SELECT username, password FROM user WHERE username = '$username' AND password = '$password'";

$result = mysqli_query($link, $sql);

if($row = mysqli_fetch_assoc($result)){
    $array = array("status" => "success", "username" => $username);
    echo json_encode($array);

}
else{
    $array = array("status" => "fail", "username" => $username);
    echo json_encode($array);
}
?>
