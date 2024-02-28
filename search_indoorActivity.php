<?php
$keyword = $_POST['keyword'];
$link = @mysqli_connect('localhost', 'root', '12345678', 'lazyguide');

$SQL = "SELECT * FROM indoor_activity WHERE IDR_ACTNAME LIKE '%".$keyword."%' OR IDR_ACT_DESCRIPTION LIKE '%".$keyword."%' OR ROOMID LIKE '%".$keyword."%' OR BUILDINGID LIKE '%".$keyword."%'";

$result = mysqli_query($link, $SQL);
while($row = mysqli_fetch_assoc($result)){
    echo json_encode($result);
}

?>
