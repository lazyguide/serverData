<?php
$building = $_POST['building'];
$floor = $_POST['floor'];
$link = mysqli_connect('localhost', 'root', '12345678', 'lazyguide');

$sql = "SELECT * FROM room WHERE BUILDINGID = '$building' AND FLOOR = $floor";

$ans = [];
$result = mysqli_query($link, $sql);
while($row = mysqli_fetch_assoc($result)){
    array_push($ans, $row['ROOMID']);
}
$json = array("Array" => $ans);
echo json_encode($json);
?>
