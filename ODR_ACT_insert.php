<?php
$name = $_POST['actName'];
$description = $_POST['description'];
$startDate = $_POST['startDate'];
$endDate = $_POST['endDate'];
$placeID = $_POST['place'];
$userID = $_POST['userID'];

$link = @mysqli_connect('localhost', 'root', '12345678', 'lazyguide');

$sql = "INSERT INTO outdoor_activity (ODR_ACTNAME, ODR_ACT_DESCRIPTION, ODR_ACT_STARTDATE, ODR_ACT_ENDDATE, PLACEID, USERID)
            VALUES ('$name', '$description', '$startDate', '$endDate', '$placeID', '$userID')";

$result = mysqli_query($link, $sql);

if($result){
    echo "success";
}else{
    echo "fail";
}


?>
