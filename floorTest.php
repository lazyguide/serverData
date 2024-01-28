<?php
$buildingID = $_POST['buildingID'];
$floor = $_POST['floor'];

$link = @mysqli_connect('localhost', 'root', '12345678', 'lazyguide');
$sql = "SELECT * FROM room WHERE buildingID = '$buildingID' AND FLOOR = $floor";
$result = mysqli_query($link, $sql);
$order = array("first", "second", 'third', 'fourth', 'fifth', 'sixth', 'seventh', 'eighth', 'ninth', 'tenth');
$array = [];
$count = 0;
while($row = mysqli_fetch_assoc($result)){
    $index = $order[$count];
    $array[$index] = $row;
    $count++;
}

echo $array;
?>
