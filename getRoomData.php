<?php
$ID = $_POST['buildingID'];
$floor = $_POST['floor'];
$link = @mysqli_connect('localhost', 'root', '12345678', 'lazyguide');
$SQL = "SELECT * FROM room WHERE BULIDINGID = '$ID' AND FLOOR = $floor";

$result = mysqli_query($link, $SQL);

while($row = mysqli_fetch_assoc($result)){
    if(strpos($ID, "/")){
        $row['BUILDINGID'] = substr($row['ROOMID'], 0, 2);
        $row['ROOMID'] = substr($row['ROOMID'], 2);
    }
    json_encode($row);
}
?>
