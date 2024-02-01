<?php
$keyword = $_POST['keyword'];
$link = @mysqli_connect("localhost", "root", "12345678", "lazyguide");

$facilitySQL = "SELECT * FROM facility WHERE FACILITYNAME LIKE '%".$keyword."%' OR FACILITYTYPE LIKE '%".$keyword."%'";
$facilityResult= mysqli_query($link, $facilitySQL);

while($row = mysqli_fetch_assoc($facilityResult)){
    echo json_encode($row);
}
?>
