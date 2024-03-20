<?php
$link = @mysqli_connect('localhost', 'root', '12345678', 'lazyguide');

if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
}

$dropdownSelection = $_POST['dropdownSelection'];
$userInput = $_POST['userInput'];
$InputDetail = $_POST['InputDetail'];
$SdateTime = $_POST['dateTimeString'];
$EdateTime = $_POST['edateTimeString'];
$type = $_POST['type'];
$method = $_POST['method'];
$place = $_POST['place'];

$userid = $_POST['userID'];
$buildingId = $_POST['building'];
$roomId = $_POST['room'];
$placeID = $_POST['placeID'];

if ($dropdownSelection == "室內")
{
    $sql = "INSERT INTO indoor_activity (IDR_ACTNAME, IDR_ACT_DESCRIPTION, IDR_ACT_STARTDATE, IDR_ACT_ENDDATE, TYPE, METHOD, ROOMID, BUILDINGID, USERID) VALUES ('$userInput', '$InputDetail', '$SdateTime', '$EdateTime', '$type', '$method', '$roomId', '$buildingId', '$userid')";
}
elseif ($dropdownSelection == "室外")
{
    $sql = "INSERT INTO outdoor_activity (ODR_ACTNAME, ODR_ACT_DESCRIPTION, ODR_ACT_STARTDATE, ODR_ACT_ENDDATE, TYPE, METHOD, PLACEID, USERID) VALUES ('$userInput', '$InputDetail', '$SdateTime', '$EdateTime', '$type', '$method', $placeID, '$userid')";
}
else
{
    die("Invalid dropdown selection");
}

if ($link->query($sql) === TRUE) {
    echo "success";
} else {
    echo "Error: " . $sql . "<br>" . $link->error;
}

$link->close();
?>