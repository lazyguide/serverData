<?php
$ID = $_POST['id'];
$link = @mysqli_connect('localhost', 'root', '12345678', 'lazyguide');
$sql = "DELETE FROM indoor_activity WHERE IDR_ACTID = $ID";

$result = mysqli_query($link, $sql);

if($result){
    echo "success";
} else{
  echo "fail";
}
?>