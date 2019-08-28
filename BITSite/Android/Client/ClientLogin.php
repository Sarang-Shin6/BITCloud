<?php


require("../../connection.php");
$username = $_GET['username'];
$password = $_GET['password'];

// $username = "eva.douglas@nhealth.com";
// $password = "test";

$array = array();

$clientQuery = "select client.clientid from client where email=lower('" . $username . "') and password = SHA1('" . $password . "');";
$clientResult = mysqli_query($db, $clientQuery);

if ($clientResult !== false) {

    while ($row = mysqli_fetch_assoc($clientResult)) {
        $array[] = $row;
    }

    
    echo json_encode($array);
}