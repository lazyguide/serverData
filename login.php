<?php
$userID = $_POST["userID"];
$password = $_POST["password"];

$link = @mysqli_connect("localhost", "root", "12345678", "lazyguide");
$sql = "SELECT * FROM account WHERE USERID = '$userID' AND PASSWORD = '$password'";

$result = mysqli_query($link, $sql);

if($row = mysqli_fetch_assoc($result)){
    $array = array("status" => "success", "USERID" => $userID,
                    "PASSWORD" => $password);
    echo json_encode($array);
}
else{
    $array = array("status" => "fail", "USERID" => $userID,
        "PASSWORD" => $password);
    echo json_encode($array);
}
?>
