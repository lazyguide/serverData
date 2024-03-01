<?php
$ID = $_POST['buildingID'];
$link = @mysqli_connect('localhost', 'root', '12345678', 'lazyguide');
$SQL = "SELECT * FROM building WHERE BUILDINGID = '$ID'";

$result = mysqli_query($link, $SQL);

if($result){
    $row = mysqli_fetch_assoc($result);
    echo json_encode($row);
}else{
    echo "error";
}
?>
