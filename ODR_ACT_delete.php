<?php
$ID = $_POST['id'];
$link = @mysqli_connect('localhost', 'root', '12345678', 'lazyguide');
$sql = "DELETE FROM outdoor_activity WHERE ODR_ACTID = $ID";

$result = mysqli_query($link, $sql);

if($result){
    echo "success";
} else{
    echo "fail";
}
?>