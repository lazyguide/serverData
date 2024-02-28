<?php
$name = $_POST['actName'];
$description = $_POST['description'];
$ID = $_POST['actID'];

$link = @mysqli_connect('localhost', 'root', '12345678', 'lazyguide');
$sql = "UPDATE outdoor_activity SET ODR_ACTNAME = '$name', ODR_ACT_DESCRIPTION = '$description' WHERE ODR_ACTID = $ID";

$result = mysqli_query($link, $sql);
if($result){
    echo "success";
}else{
    echo "fail";
}

?>
