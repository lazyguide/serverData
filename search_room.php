<?php
$keyword = $_POST['keyword'];
$link = @mysqli_connect("localhost", "root", "12345678", "lazyguide");

$roomSQL = "SELECT * FROM room WHERE BUILDINGID LIKE '%".$keyword."%' OR ROOMID LIKE '%".$keyword."%' OR ROOMNAME LIKE '%".$keyword."%'";
$roomResult = mysqli_query($link, $roomSQL);

while($roomRow = mysqli_fetch_assoc($roomResult)) {
    echo json_encode($roomRow);
}

if(strlen($keyword) > 3){
    $building = substr($keyword,0,2);
    $room = substr($keyword, 2, 3);
    $SQL = "SELECT * FROM room WHERE BUILDINGID LIKE '%".$building."%' OR ROOMID LIKE '%".$room."%'";
    $result = mysqli_query($link, $SQL);
    while($row = mysqli_fetch_assoc($result)) {
        echo json_encode($row);
    }
}
?>
