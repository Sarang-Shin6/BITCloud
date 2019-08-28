<?php
require('../connection.php');
session_start();

$jobid = $_GET['jobid'];
$contractorid = $_GET['conid'];

$query = 'update job set ContractorID=' . $contractorid . ', statusID = 3 where jobid=' . $jobid;
$results = mysqli_query($db, $query);
if ($results !== false){
    if ($results === false){
        echo '<script> alert("Something went wrong. Please try again later!");</script>';
    } else {
        echo '<script> alert("The contractor has been successully requested for the job.");</script>';
    }
} else {
    echo '<script> alert("Something went wrong. Please try again later!");</script>';
}
require("getAssignments.php");