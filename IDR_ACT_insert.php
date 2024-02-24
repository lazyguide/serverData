<?php
$name = $_POST['actName'];
$description = $_POST['description'];
$startDate = $_POST['startDate'];
$endDate = $_POST['endDate'];
$buildingID = $_POST['building'];
$roomID = $_POST['room'];
$userID = $_POST['userID'];

$link = @mysqli_connect('localhost', 'root', '12345678', 'lazyguide');

$sql = "INSERT INTO indoor_activity (IDR_ACTNAME, IDR_ACT_DESCRIPTION, IDR_ACT_STARTDATE, IDR_ACT_ENDDATE, BUILDINGID, ROOMID, USERID)
            VALUES ('$name', '$description', '$startDate', '$endDate', '$buildingID', '$roomID', '$userID')";

$result = mysqli_query($link, $sql);

if($result){
    echo "success";
}else{
    echo "fail";
}


?>
