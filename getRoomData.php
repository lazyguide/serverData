<?php
$ID = $_POST['buildingID'];
$floor = $_POST['floor'];
$link = @mysqli_connect('localhost', 'root', '12345678', 'lazyguide');
$SQL = "SELECT * FROM room WHERE BUILDINGID = '$ID' AND FLOOR = $floor";

$result = mysqli_query($link, $SQL);

while($row = mysqli_fetch_assoc($result)){
    if(strpos($ID, "/") !== false){
        echo "here";
        $newBuilding = substr($row['ROOMID'], 0, 2);
        $newRoom = substr($row['ROOMID'], 2);
        $newName = $row['ROOMNAME'];
        $newFloor = $row['FLOOR'];
        $array = array('BUILDINGID' => $newBuilding, 'ROOMID' => $newRoom, 'ROOMNAME' => $newName, 'FLOOR' => $newFloor);
        echo json_encode($array);
    }else{
        echo json_encode($row);
    }
}
?>
