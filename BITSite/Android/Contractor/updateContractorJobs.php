<?php
require('../../connection.php');

$conid = $_POST["conid"];
$duration = $_POST["duration"];
$loggedkm = $_POST["loggedkm"];
$jobid = $_POST["jobid"];

$query = "update job set statusid = 6, duration = " . $duration . ", loggedkm = " . $loggedkm . "where jobid = " . $jobid;

$result = mysqli_query($db, $query);
