<?php
$ID = $_POST['ID'];
$info = $_POST['info'];
$table = $_POST['table'];
if($table == "indoor_activity"){
    $sql = "UPDATE indoor_activity SET IDR_ACT_DESCRIPTION = '$info' WHERE IDR_ACTID = $ID";
}else{
    $sql = "UPDATE outdoor_activity SET ODR_ACT_DESCRIPTION = '$info' WHERE ODR_ACTID = $ID";
}
$link = mysqli_connect('localhost', 'root', '12345678', 'lazyguide');

$result = mysqli_query($link, $sql);

if($result){
    echo "success";
}else{
    echo "fail";
}
?>
