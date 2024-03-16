<?php
$userID = $_POST['userID'];
$link = @mysqli_connect('localhost', 'root', '12345678', 'lazyguide');

$sql = "UPDATE account SET ISVARIFIED = 0 WHERE USERID = '$userID'";

$result = mysqli_query($link, $sql);

if($result){
    echo "success";
}else{
    echo "fail";
}
?>
