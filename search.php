<?php
require_once('db.php');

$search = $_POST['search'];
$query = $conn->query("SELECT * FROM `carsdata` WHERE title LIKE '%$search%'");


$carsDataSearch = array();
while ($row = $query->fetch_assoc()) {
    $carsDataSearch[] = $row;
}

?>