<?php
require('../../connection.php');

$clientid = $_GET["id"];

$array = array();
$result = mysqli_query($db, "call usp_Cloud_ClientGetJobs(" . $clientid . ")");

while ($row = mysqli_fetch_assoc($result)) {
    $array[] = $row;
}

echo json_encode($array);