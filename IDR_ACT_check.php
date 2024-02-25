<?php
$date = new DateTime('now', new DateTimeZone('Asia/Taipei'));
$current = $date->format('Y-m-d H:i:s');

$status = $_POST['status'];
$userID = $_POST['userID'];

$link = @mysqli_connect('localhost', 'root', '12345678', 'lazyguide');
if($status = "unvarified"){
    $sql = "SELECT * FROM indoor_activity WHERE USERID = '$userID' and ISVARIFIED = 0 and IDR_ACT_STARTDATE >= '$current'";
}else if ($status = "varified"){
    $sql = "SELECT * FROM indoor_activity WHERE USERID = '$userID' and ISVARIFIED = 1 and IDR_ACT_STARTDATE >= '$current'";
}else if ($status = "ING"){
    $sql = "SELECT * FROM indoor_activity WHERE USERID = '$userID' and ISVARIFIED = 0 and IDR_ACT_STARTDATE < '$current' and IDR_ACT_ENDDATE >= '$current'";
}else{
    $sql = "SELECT * FROM indoor_activity WHERE USERID = '$userID' and IDR_ACTENDDATE < '$current'";
}

$result = mysqli_query($link, $sql);
if($result){
  echo "success";
}else{
 echo "fail";
}

?>
