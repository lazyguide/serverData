<?php
$keyword = $_POST['keyword'];

$link = @mysqli_connect('localhost', 'root', '12345678', 'lazyguide');
$sql = "SELECT * FROM outdoor_activity odr, place
        WHERE ISVERIFIED = 1 AND odr.PLACEID = place.PLACEID
        AND (ODR_ACTNAME LIKE '%".$keyword."%' 
        OR ODR_ACT_DESCRIPTION LIKE '%".$keyword."%' 
        OR TYPE LIKE '%".$keyword."%' 
        OR PLACENAME LIKE '%".$keyword."%')";

$result = mysqli_query($link, $sql);
while($row = mysqli_fetch_assoc($result)){
    echo json_encode($row);
}
?>
