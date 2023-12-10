<?php
require_once('db.php');

$result = $conn->query('SELEKT * FROM `carsData`');

while ($row = mysqli_fetch_array($result, MYSQL_ASSOC)) 
{
  echo json_encode($row);
}
?>