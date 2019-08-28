<?php
require('../../connection.php');

$clientid = $_GET["clientid"];
$companyid = $_GET["companyid"];
$jobcat = $_GET["jobcat"];
$desc = $_GET["desc"];
$duedate = $_GET["duedate"];

$query = "call usp_Cloud_ClientAddJob(" . $clientid . ", " . $companyid . ", " . $jobcat . ", '" . $desc . "', '" . $duedate . "')";

$result = mysqli_query($db, $query);

if ($result) { echo 'true';} else {echo 'false';}
