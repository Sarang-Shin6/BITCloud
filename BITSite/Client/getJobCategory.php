<?php
try {
    require('../connection.php');
    $sql = 'select JobCategoryID, Description from jobcategory where Active = 1';
    $jobCatResult = mysqli_query($db, $sql);

    if ($jobCatResult != false) {
        while ($row = mysqli_fetch_array($jobCatResult)) {
            echo "<option value=" . $row['JobCategoryID'] . ">" . $row['Description'] . "</option>";
        }
    }
} catch (Exception $exception) {
    echo 'Something has gone wrong. Please try again later. ' . $exception;
}