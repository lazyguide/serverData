<?php
include("config.php");
if(isset($_POST["NewAccountUserid"])){
    $userid= mysqli_real_escape_string($connection, $_POST["NewAccountUserid"]);
    $password= mysqli_real_escape_string($connection, $_POST["NewAccountPassword"]);
    $username= mysqli_real_escape_string($connection, $_POST["NewAccountUsername"]);
    $phone= mysqli_real_escape_string($connection, $_POST["NewAccountPhone"]);

    if($username!=""&&$userid!=""&&$password!=""&&$phone!=""){
        if(mysqli_num_rows(mysqli_query($connection, "SELECT * FROM account WHERE USERID = '$userid'")) == 0){
            mysqli_query($connection, "INSERT INTO account (USERID, USERNAME, PASSWORD, PHONE) VALUES ('$userid', '$username', '$password', '$phone')");
            echo "註冊成功";

        }else{
            echo"這個帳號已經被註冊過了，請重新輸入一個新的帳號";
        }

    }else{
        echo"您的資料輸入不完整，請填寫完成". mysqli_error($connection);;
    }
}else{
    echo "Unity Login Logout and Register";
}
?>