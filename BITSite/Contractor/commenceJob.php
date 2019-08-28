<?php

require('../connection.php');
session_start();
$jobid = $_GET['jobid'];

$query = "update job set statusid = 5 where jobid=" . $jobid;

$updateResult = mysqli_query($db, $query);
if ($updateResult !== false){
    echo '<script> alert("The job has been set to commence!");</script>';
} else {
    echo '<script> alert("Something went wrong. Please try again later!");</script>';
}

require('getJobs.php');