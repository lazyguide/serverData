<?php
$link = @mysqli_connect('localhost', 'root','12345678','lazyguide');
$resBuilding = $_POST['resBuilding'];

$SQL = "SELECT * FROM restaurant WHERE RES_BUILDINGNAME = '$resBuilding'";
$result = mysqli_query($link, $SQL);

while($row = mysqli_fetch_assoc($result)){
    echo json_encode($row);
}
?>
