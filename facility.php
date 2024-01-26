<?php
$type = $_POST['type'];
$facilityID = $_POST['ID'];

$link = @mysqli_connect('localhost', 'root', '12345678', 'lazyguide');

$sql = "SELECT * FROM facility WHERE facilityID = '$facilityID' AND type = '$type'";

$result = mysqli_query($link, $sql);

if($row = mysqli_fetch_assoc($result)){
    $array = array("name" => $row['facilityName'], "description" => $row['facilityDescription']);
    echo json_encode($array);
}
?>
