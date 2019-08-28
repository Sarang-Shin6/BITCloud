<?php
require('../../connection.php');

$conid = $_GET["conid"];

$array = array();
$result = mysqli_query($db, "call usp_Cloud_ContractorGetJobs(" . $conid . ")");

while ($row = mysqli_fetch_assoc($result)) {
    $array[] = $row;
}

echo json_encode($array);