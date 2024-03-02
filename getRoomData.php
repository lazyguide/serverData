<?php
$ID = $_POST['buildingID'];
$floor = $_POST['floor'];
$link = @mysqli_connect('localhost', 'root', '12345678', 'lazyguide');
$SQL = "SELECT * FROM room WHERE BUILDINGID = '$ID' AND FLOOR = $floor";

$result = mysqli_query($link, $SQL);

while($row = mysqli_fetch_assoc($result)){
    if(strpos($ID, "/") !== false){
        $array = [];
        $array['BUILDINGID'] = substr($row['ROOMID'], 0, 2);
        $array['ROOMID'] = substr($row['ROOMID'], 2);
        $array['ROOMNAME'] = $row['ROOMNAME'];
        $array['FLOOR'] = $row['FLOOR'];
        json_encode($array);
    }else{
        json_encode($row);
    }
}
?>
