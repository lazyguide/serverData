<?php
$userID = $_POST["userID"];
$password = $_POST["password"];

$link = @mysqli_connect("localhost", "root", "12345678", "account");
$sql = "SELECT * FROM user WHERE USERID = '$userID' AND PASSWORD = '$password'";

$result = mysqli_query($link, $sql);

if($row = mysqli_fetch_assoc($result)){
    $array = array("status" => "success", "userID" => $userID, "userName" => $row['USERNAME'],
                    "password" => $password, "phone" => $row["phone"], "isVarified" => $row["ISVARIFIED"], "level" => $row["level"]);
    echo json_encode($array);
}
else{
    $array = array("status" => "fail", "userID" => $userID, "userName" => NULL,
        "password" => $password, "phone" => NULL, "isVarified" => NULL, "level" => NULL);
    echo json_encode($array);
}
?>
