<?php
include("config.php");

$str = $_POST['facilityName'];
$length = strlen($str);

$firstPart = substr($str, 0, $length - 2); // Extract all but the last two characters
$lastTwoChars = substr($str, -2); // Extract the last two characters
$ID = (int)($lastTwoChars);
echo $firstPart, $ID;

$sql = "SELECT * FROM facility WHERE FACILIYTTYPE = '$firstPart' AND FACILITYID = $ID";

$result = mysqli_query($link, $sql);
if($result){
    $row = mysqli_fetch_assoc($result);
    echo json_encode($row);
}else{
    echo "Error";
}
?>
