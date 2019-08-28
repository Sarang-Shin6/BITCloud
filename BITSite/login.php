<?php
$username = $_POST['username'];
$password = $_POST['password'];

$db = mysqli_connect("localhost", "root");
mysqli_select_db($db, "bitdb");

if(!isset($username) || !isset($password)){
    header('Refresh: 5; URL=badLogin.php');
}

$clientQuery = "select client.clientid, client.firstname from client where email=lower('" . $username . "') and password = SHA1('" . $password . "');";
$clientResult = mysqli_query($db, $clientQuery);


$staffQuery = "select staff.staffid, staff.firstname from staff where email=lower('" . $username . "') and password = SHA1('" . $password . "');";
$staffResult = mysqli_query($db, $staffQuery);

if (mysqli_num_rows($clientResult) != 0){
    $row = mysqli_fetch_array($clientResult);
    session_start();
    $_SESSION['type'] = 'client';
    $_SESSION['id'] = $row['clientid'];

    $_SESSION['firstname'] = $row['firstname'];
    header('Refresh: 0; URL=Client');
} else if (mysqli_num_rows($staffResult) != false) {
    $row = mysqli_fetch_array($staffResult);
    session_start();
    $_SESSION['id'] = $row['staffid'];
    $_SESSION['firstname'] = $row['firstname'];
    $contractorQuery = "select * from contractor where contractorid = " . $row['staffid'] . ";";
    $contractorResult = mysqli_query($db, $contractorQuery);
    if (mysqli_num_rows($contractorResult)) {
        $_SESSION['type'] = 'contractor';
        header('Refresh: 0; URL=Contractor');
    } else {
        $_SESSION['type'] = 'coordinator';
        header('Refresh: 0; URL=Coordinator');
    }
} else {
    header('Refresh: 5; URL=badLoginRedirect.php');
}
