<?php
$keyword = $_POST['keyword'];
$link = @mysqli_connect('localhost', 'root', '12345678', 'lazyguide');

$SQL = "SELECT * FROM outdoor_activity WHERE ODR_ACTNAME LIKE '%".$keyword."%' OR ODR_ACT_DESCRIPTION LIKE '%".$keyword."%' OR PLACEID LIKE '%";

$result = mysqli_query($link, $SQL);
while($row = mysqli_fetch_assoc($result)){
    echo json_encode($result);
}

?>
