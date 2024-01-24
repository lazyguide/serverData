<?php

$keyword = $_POST['keyword'];

include "config,php";

$link = @mysqli_connect("localhost", "root", '12346578', 'lazyguide');

$buildingSQL = 'SELECT * FROM building WHERE buildingID LIKE "%'.$keyword.'%" OR buildingName LIKE "%'.$keyword.'%" OR buildingDescription LIKE "%'.$keyword.'%"';

$buildingResult = mysqli_query($link, $buildingSQL);

$dormitorySQL = 'SELECT * FROM dormitory WHERE dormitoryID LIKE "%'.$keyword.'%" OR dormitoryName LIKE "%'.$keyword.'%" OR dormitoryDescription LIKE "%'.$keyword.'%"';

$dormitoryResult = mysqli_query($link, $dormitorySQL);
?>