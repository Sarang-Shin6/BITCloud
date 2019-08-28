<?php
    require('../connection.php');
    session_start();
    $clientid = intval($_SESSION['id']);
    $companyid = intval($_POST['branch']);

    $jobcat = intval($_POST['jobcatid']);
    $desc = strval($_POST['jobDesc']);
    $duedate = strval($_POST['dueDate']);

    $dayOfWeek = date('w', strtotime($duedate));

    if($dayOfWeek === "0" || $dayOfWeek === "6"){
        echo '<script> alert("Sorry, please pick a date that falls on a weekday.");</script>';
    } else {
        $query = "call usp_Cloud_ClientAddJob(" . $clientid . ", " . $companyid . ", " . $jobcat . ", '" . $desc . "', '" . $duedate . "')";
        $result = mysqli_query($db, $query);

        if ($result != false) {
            echo '<script> alert("Your job has been requested successfully!");</script>';
        } else {
            echo '<script> alert("Something went wrong. Please try again later!");</script>';
        }
    }

    header('Refresh: 0; URL=../Client');
