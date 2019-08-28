<?php
require('../connection.php');

$queryJobs = "call usp_getContractorsTotalJobs()";
$resultJobs= mysqli_query($db, $queryJobs);

if ($resultJobs !== false) {
    while ($rowJobs = mysqli_fetch_array($resultJobs)) {
        $totalJobsArray[] = $rowJobs;
    }
}
