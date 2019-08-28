<?php
require('../../connection.php');

$conid = $_GET["conid"];

$array = array();
$result = mysqli_query($db, "select j.jobid, c.name, c.branch, j.preferredenddate, jc.description from job as j inner join company as c on c.CompanyID = j.CompanyID inner join jobcategory as jc on jc.JobCategoryID = j.JobCategoryID where j.statusid = 5 and j.ContractorID = " . $conid);

while ($row = mysqli_fetch_assoc($result)) {
    $array[] = $row;
}

echo json_encode($array);
