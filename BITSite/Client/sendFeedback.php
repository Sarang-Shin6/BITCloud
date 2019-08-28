<?php
require('../connection.php');
$jobid = intval($_POST['jobid']);
$jobrating = intval($_POST['rating']);
$feedback = $_POST['feedback'];

$query = 'update job set feedback="' . $feedback . '", jobrating=' . $jobrating . ' where jobid=' . $jobid;
$result = mysqli_query($db, $query);

if ($result != false) {
    echo '<script> alert("Thank you for your feedback! BIT will always strive to improve our services!");</script>';
} else {
    echo '<script> alert("Something went wrong. Please try again later!");</script>';
}

header('Refresh: 0; URL=../Client');