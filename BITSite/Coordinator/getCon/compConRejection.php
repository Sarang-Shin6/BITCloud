<?php
require('../connection.php');
$queryRejections = "call usp_getRejections(". $jobid . ")";
$resultRejections = mysqli_query($db, $queryRejections);

if ($resultRejections !== false) {
    while ($rowRejections = mysqli_fetch_array($resultRejections)) {
        $rejectionsArray[] = $rowRejections;
    }
}

