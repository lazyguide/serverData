<?php

$keyword = $_POST['keyword'];
$link = @mysqli_connect("localhost", "root", "12345678", "lazyguide");

$dormitorySQL = "SELECT * FROM dormitory WHERE DORMITORYID LIKE '%".$keyword."%' OR DORMITORYNAME LIKE '%".$keyword."%' OR DORMITORYDESCRIPTION LIKE '%".$keyword."%'";
$dormitoryResult = mysqli_query($link, $dormitorySQL);

while($row = mysqli_fetch_assoc($dormitoryResult)){
    echo json_encode($row);
}

?>