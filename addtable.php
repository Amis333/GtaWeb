<?php

require_once('db.php');
$result = $conn->query('SELECT * FROM `carsdata`');
$carsData = array();
while ($row = $result->fetch_assoc()) {
    $carsData[] = $row;
}

?>