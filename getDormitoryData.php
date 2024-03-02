<?php
$str = $_POST['dormitory'];
$length = strlen($str);
$link = @mysqli_connect('localhost', 'root', '12345678', 'lazyguide');

$lastTwoChars = substr($str, -2); // Extract the last two characters
$ID = (int)($lastTwoChars);

$SQL = "SELECT * FROM dormitory WHERE DORMITORYID = $ID";

$result = mysqli_query($link, $SQL);
if($result){
    $row = mysqli_fetch_assoc($result);
    echo json_encode($row);
}
else{
    echo "error";
}
?>
