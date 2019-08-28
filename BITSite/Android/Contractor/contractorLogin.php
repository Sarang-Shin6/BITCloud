<?php
require("../../connection.php");
$username = $_GET['username'];
$password = $_GET['password'];

// $username = "josh.moss@gmail.com";
// $password = "test";

$array = array();

$staffQuery = "select staff.staffid from staff where email=lower('" . $username . "') and password = SHA1('" . $password . "');";
$staffResult = mysqli_query($db, $staffQuery);

if ($staffResult !== false) {

    while ($row = mysqli_fetch_assoc($staffResult)) {
        $array[] = $row;
    }

    
    echo json_encode($array);
}
