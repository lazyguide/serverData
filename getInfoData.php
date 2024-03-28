<?php
$link = mysqli_connect('localhost', 'root', '12345678', 'lazyguide');
$sql = "SELECT * FROM info";

$result = mysqli_query($link, $sql);

while($row = mysqli_fetch_assoc($result)){
    echo json_encode($row);
}
?>
