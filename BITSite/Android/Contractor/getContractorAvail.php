<?php
require('../../connection.php');

$conid = $_POST["conid"];

$query = "select * from contractoravailability where date >= DATE(NOW() - INTERVAL 1 DAY) and contractorid = " . $conid;

$array = array();
$result = mysqli_query($db, "call usp_Cloud_ContractorGetJobs(" . 1 . ")");

while ($row = mysqli_fetch_assoc($result)) {
    $array[] = $row;
}

echo json_encode($array);