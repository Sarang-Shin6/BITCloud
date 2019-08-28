<?php
require("../../connection.php");
$branch = $_GET['branch'];
$clientid = $_GET['clientid'];

$query = "select companyid from company where branch = '" . $branch . "' and clientid = " . $clientid . ";";
echo $query;
$result = mysqli_query($db, $query);
if ($row = mysqli_fetch_array($result)){
    echo json_encode($row[0]);
}
