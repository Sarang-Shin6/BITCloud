<?php

require('../../connection.php');

$jobid = $_GET["jobid"];
$dur = $_GET['dur'];
$km = $_GET['km'];


$result = mysqli_query($db, "update job as j set j.duration = " . $dur . ", j.loggedkm = " . $km . ", j.statusid = 6 where j.jobid = " . $jobid);

if ($result) {
    echo 'true';
} else {
    echo 'false';
}
