<?php
try {
    require('../../connection.php');
    $clientid = $_GET['clientid'];

    $sql = "select Branch, companyid from company where Active = 1 and clientid = " . $clientid;

    $array = array();
    $branchResult = mysqli_query($db, $sql);

    if ($branchResult != false) {
        while ($row = mysqli_fetch_array($branchResult)) {
            $array[] = $row;
        }
    }
    echo json_encode($array);
} catch (Exception $exception) {
    echo 'Something has gone wrong. Please try again later. ' . $exception;
}
