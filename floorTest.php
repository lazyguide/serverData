<?php
$buildingID = "LM";
$floor = 1;

$link = @mysqli_connect('localhost', 'root', '12345678', 'lazyguide');
$sql = "SELECT * FROM room WHERE buildingID = '$buildingID' AND FLOOR = $floor";
$result = mysqli_query($link, $sql);

$array = [];
while($row = mysqli_fetch_assoc($result)){
    array_push($array, $row);
}

echo json_encode($array);
?>
