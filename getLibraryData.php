<?php
$ID = $_POST['libraryID'];
$link = @mysqli_connect('localhost', 'root', '12345678', 'root');
$SQL = "SELECT * FROM library WHERE LIBRARY = '$ID'";

$result = mysqli_query($link, $SQL);

if($result){
    $row = mysqli_fetch_assoc($result);
    echo json_encode($row);
}else{
    echo "error";
}
?>
