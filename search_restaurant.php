<?php
$keyword = $_POST['keyword'];
$link = @mysqli_connect("localhost", "root", "12345678", "lazyguide");

$restaurantSQL = "SELECT * FROM restaurant WHERE RESTAURANTNAME LIKE '%".$keyword."%' OR RES_BUILDINGNAME LIKE '%".$keyword."%' OR RESTAURANTDESCRIPTION LIKE '%".$keyword."%'";
$restaurantResult = mysqli_query($link, $restaurantSQL);

while($row = mysqli_fetch_assoc($restaurantResult)){
    echo json_encode($row);
}
?>
