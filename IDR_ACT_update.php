<?php
$name = $_POST['actName'];
$description = $_POST['description'];
$ID = $_POST['actID'];

$link = @mysqli_connect('localhost', 'root', '12345678', 'lazyguide');
$sql = "UPDATE indoor_activity SET IDR_ACTNAME = '$name', IDR_ACT_DESCRIPTION = '$description' WHERE IDR_ACTID = $ID";

$result = mysqli_query($link, $sql);
if($result){
    echo "success";
}else{
    echo "fail";
}

?>
