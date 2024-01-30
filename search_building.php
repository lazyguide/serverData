<?php
$keyword = $_POST['keyword'];
$link = @mysqli_connect("localhost", "root", "12345678", "lazyguide");

$buildingSQL = 'SELECT * FROM building WHERE BULIDINGID LIKE "%'.$keyword.'%" OR BUILDINGNAME LIKE "%'.$keyword.'%" OR BUILDINGDESCRIPTION LIKE "%'.$keyword.'%"';
$buildingResult = mysqli_query($link, $buildingSQL);

while($row = mysqli_fetch_assoc($buildingResult)) {
    echo json_encode($row);
}

?>
