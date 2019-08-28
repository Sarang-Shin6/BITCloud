<?php
require('../connection.php');

$queryHours = "call usp_getContractorsHours(" . $dur . ", '" . $duedate . "');";


$resultHours = mysqli_query($db, $queryHours);
if ($resultHours !== false) {
    while ($rowHours = mysqli_fetch_array($resultHours)) {
        $hoursArray[] = $rowHours;
    }
}
