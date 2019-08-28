<?php
try {
    require('../../connection.php');

    $array = array();

    $sql = 'select JobCategoryID, Description from jobcategory where Active = 1';
    $jobCatResult = mysqli_query($db, $sql);

    if ($jobCatResult != false) {
        while ($row = mysqli_fetch_array($jobCatResult)) {
            $array[] = $row;
        }
    }
    echo json_encode($array);
} catch (Exception $exception) {
    echo 'Something has gone wrong. Please try again later. ' . $exception;
}


