<?php

$keyword = $_POST['keyword'];
$link = @mysqli_connect("localhost", "root", "12345678", "lazyguide");

$librarySQL = "SELECT * FROM library WHERE LIBRARYNAME LIKE '%" . $keyword . "%' OR LIBRARYDESCRIPTION LIKE '%" . $keyword . "%'";
$libraryResult = mysqli_query($link, $librarySQL);

while ($row = mysqli_fetch_assoc($libraryResult)) {
    echo json_encode($row);
}
?>
