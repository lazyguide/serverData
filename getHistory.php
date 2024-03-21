<?php
$userID = $_POST['userID'];
$table = $_POST['table'];

$link = mysqli_connect('localhost', 'root', '12345678', 'lazyguide');
$sql = "SELECT * FROM '$table' WHERE userID = '$userID'";

$result = mysqli_query($link, $sql);

while($row = mysqli_fetch_assoc($result)){
    echo json_encode($row);
}
?>
