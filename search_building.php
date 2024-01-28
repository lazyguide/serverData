<?php
$building = $_POST['building'];
$link = @mysqli_connect("localhost", "root", "12345678", "lazyguide");

$sql = "SELECT * FROM building WHERE BUILDINGID = '$building'";

$result = mysqli_query($link, $sql);

$row = mysqli_fetch_row($result);

echo json_encode($row);

?>
