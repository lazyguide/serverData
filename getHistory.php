<?php
$userID = $_POST['userID'];
$table = $_POST['table'];

$link = mysqli_connect('localhost', 'root', '12345678', 'lazyguide');
if($table == "indoor_activity"){
    $sql = "SELECT * FROM indoor_activity WHERE USERID = '$userID'";
}else{
    $sql = "SELECT * FROM outdoor_activity LEFT OUTER JOIN place ON outdoor_activity.PLACEID = place.PLACEID";
}

$result = mysqli_query($link, $sql);

while($row = mysqli_fetch_assoc($result)){
    echo json_encode($row);
}
?>
