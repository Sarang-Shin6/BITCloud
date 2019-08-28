<?php
require('../connection.php');
session_start();
$jobid = $_GET['jobid'];
$duration = intval($_GET['duration']);
$loggedkm = intval($_GET['loggedkm']);

$query = "update job set statusid = 6, duration = " . $duration . ", loggedkm = " . $loggedkm . " where jobid=" . $jobid;

$updateResult = mysqli_query($db, $query);
if ($updateResult !== false){
    echo '<script> alert("The Job has been set as complete!");</script>';
} else {
    echo '<script> alert("Something went wrong. Please try again later!");</script>';
}

require('getJobs.php');