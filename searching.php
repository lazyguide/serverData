<?php

$keyword = $_POST['keyword'];
$link = @mysqli_connect("localhost", "root", '12346578', 'lazyguide');

$buildingSQL = 'SELECT * FROM building WHERE buildingID LIKE "%'.$keyword.'%" OR buildingName LIKE "%'.$keyword.'%" OR buildingDescription LIKE "%'.$keyword.'%"';
$buildingResult = mysqli_query($link, $buildingSQL);

$dormitorySQL = 'SELECT * FROM dormitory WHERE dormitoryName LIKE "%'.$keyword.'%" OR dormitoryDescription LIKE "%'.$keyword.'%"';
$dormitoryResult = mysqli_query($link, $dormitorySQL);

$facilitySQL = 'SELECT * FROM dormitory WHERE dormitoryName LIKE "%'.$keyword.'%" OR dormitoryDescription LIKE "%'.$keyword.'%"';
$facilityResult = mysqli_query($link, $facilitySQL);

$librarySQL = 'SELECT * FROM library WHERE libraryID LIKE "%'.$keyword.'%" OR libraryName LIKE "%'.$keyword.'%" OR libraryDescription LIKE "%'.$keyword.'%"';
$libraryResult = mysqli_query($link, $librarySQL);


?>