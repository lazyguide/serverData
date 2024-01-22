<?php

include("config.php");
if (isset($_POST["LoginUserid"])) {
    $userid = $_POST["LoginUserid"];
    $password = $_POST["LoginPassword"];

    if ($userid != "" && $password != "") {
        $sql = "SELECT * FROM account WHERE USERID = '$userid' AND PASSWORD = '$password'";
        if (mysqli_num_rows(mysqli_query($connection, $sql)) > 0) {
            echo 1;
        }else{
            echo 0;
        }

} else {
    echo "Unity Login Logout and Register";
}
?>