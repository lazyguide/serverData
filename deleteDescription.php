<?php
$ID = $_POST['ID'];
$table = $_POST['table'];

if($table == "indoor_activity"){
    $sql = "DELETE FROM indoor_activity WHERE IDR_ACTID = $ID";
}else{
    $sql = "DELETE FROM outdoor_activity WHERE ODR_ACTID = $ID";
}

$link = mysqli_connect('localhost', 'root', '12345678', 'lazyguide');

$result = mysqli_query($link, $sql);

if($result){
    echo "success";
}else{
    echo "fail";
}
?>
