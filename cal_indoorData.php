<?php
$link = mysqli_connect('localhost', 'root', '12345678', 'lazyguide');


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST["date"]) && isset($_POST["typeValue"]) && isset($_POST["methodValue"])) {

        $date = $_POST['date'];
        $typeValue = $_POST["typeValue"];
        $methodValue = $_POST["methodValue"];

        // 檢查連接是否成功
        if ($link->connect_error) {
            die("連接失敗：" . $link->connect_error);
        }

        if($typeValue=="All" && $methodValue=="All"){

            $sql = "
            SELECT * FROM indoor_activity
            WHERE '$date' >= IDR_ACT_STARTDATE AND '$date' <= IDR_ACT_ENDDATE AND VCODEVERIFY = 1 AND ADMINVERIFY = 1
        ";
        }elseif($typeValue=="All"){
            $sql = "
            SELECT * FROM indoor_activity
            WHERE '$date' >= IDR_ACT_STARTDATE AND '$date' <= IDR_ACT_ENDDATE
            AND METHOD = '$methodValue' AND VCODEVERIFY  = 1 AND ADMINVERIFY = 1
        ";
        }elseif($methodValue=="All"){
            $sql = "
            SELECT * FROM indoor_activity
            WHERE '$date' >= IDR_ACT_STARTDATE AND '$date' <= IDR_ACT_ENDDATE
            AND TYPE = '$typeValue' AND VCODEVERIFY  = 1 AND ADMINVERIFY = 1
        ";
        }else{
            $sql = "
            SELECT * FROM indoor_activity
            WHERE '$date' >= IDR_ACT_STARTDATE AND '$date' <= IDR_ACT_ENDDATE
            AND TYPE = '$typeValue' AND METHOD = '$methodValue' AND VCODEVERIFY  = 1 AND ADMINVERIFY = 1
        ";
        }

        $result = mysqli_query($link, $sql);

        // 檢查查詢結果
        if ($result->num_rows > 0) {
            while($row  = mysqli_fetch_assoc($result)) {
               echo json_encode($row);
            }
        } else {
            // 輸出一個空 JSON 對象
            echo "0";
        }

        // 關閉連接
        $link->close();
    } else {
        // 如果未收到名為 "dateValue"、"yearTextValue" 和 "monthTextValue" 的參數，返回錯誤消息
        echo "Error: Missing parameters";
    }
} else {
    // 如果未收到 POST 請求，返回錯誤消息
    echo "Error: No POST request received";
}
?>
