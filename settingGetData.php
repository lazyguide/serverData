<?php
$userid = $_POST['userid'];

$link = @mysqli_connect('localhost','root','','lazyguide');
$sql = "SELECT * FROM account WHERE USERID = '$userid'";

$result = mysqli_query($link, $sql);
if ($row = mysqli_fetch_assoc($result)){
    echo json_encode($row);
}
?>
