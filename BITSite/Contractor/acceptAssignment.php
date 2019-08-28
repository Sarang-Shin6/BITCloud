<?php
try {
    session_start();
    require('../connection.php');
    $jobid = intval($_GET['jobid']);
    $conid = intval($_GET['conid']);
    mysqli_query($db, "call usp_Cloud_ContractorAccept(" . $jobid . ")");

    require('getAssignRequest.php');

} catch (Exception $e) {
    echo 'Something has gone wrong. Please try again later. ' . $e;
}

