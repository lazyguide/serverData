<?php
$keyword = $_POST['keyword'];

$link = @mysqli_connect('localhost', 'root', '12345678', 'lazyguide');
$sql = "SELECT * FROM indoor_activity 
        WHERE ISVARIFIED = 1 
        AND (IDR_ACTNAME LIKE '%".$keyword."%' 
        OR IDR_ACT_DESCRIPTION LIKE '%".$keyword."%' 
        OR TYPE LIKE '%".$keyword."%' 
        OR ROOMID LIKE '%".$keyword."%' 
        OR BUILDINGID LIKE '%".$keyword."%')";

$result = mysqli_query($link, $sql);
while($row = mysqli_fetch_assoc($result)){
    echo json_encode($row);
}
?>
