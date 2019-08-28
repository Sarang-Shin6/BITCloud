<?php
$dur = $_POST['duration'];
$km = $_POST['loggedkm'];
$jobid = $_GET['jobid'];

echo '<script type="text/javascript"> completeJob(' . $jobid . ', ' . $km . ', ' . $dur . '); </script>';