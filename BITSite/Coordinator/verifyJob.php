<?php
require('../connection.php');
session_start();
$jobid = $_GET['jobid'];
$coorid = $_GET['coorid'];

$query = "update job set statusid = 7 where jobid=" . $jobid;
$result = mysqli_query($db, $query);

if ($result !== false) {
    echo '<script> alert("Your job has been requested successfully!");</script>';
} else {
    echo '<script> alert("Something went wrong. Please try again later!");</script>';
}
require('getJobStatus.php');
