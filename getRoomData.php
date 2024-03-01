<?php
$ID = $_POST['buildingID'];
$floor = $_POST['floor'];
$link = @mysqli_connect('localhost', 'root', '12345678', 'lazyguide');
$SQL = "SELECT * FROM room WHERE BUILDINGID = '$ID' AND FLOOR = $floor";

$result = mysqli_query($link, $SQL);

while($row = mysqli_fetch_assoc($result)){
    echo json_encode($row);
}
?>
