<?php
$actID = $_POST['actID'];
$table = $_POST['table'];
$link = @mysqli_connect('localhost', 'root', '12345678', 'lazyguide');
if($table = "indoor_activity"){
    $sql = "UPDATE indoor_activity SET VCODEVERIFY = 1 WHERE IDR_ACTID = $actID";
}else{
    $sql = "UPDATE indoor_activity SET VCODEVERIFY = 1 WHERE ODR_ACTID = $actID";
}
$result = mysqli_query($link, $sql);

if($result){
    echo "success";
}else{
    echo "fail";
}
?>
