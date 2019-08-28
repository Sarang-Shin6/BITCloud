<?php
require('../connection.php');

$jobcatid = intval($_GET['jobcatid']);
$locid = intval($_GET['locid']);
$dur = intval($_GET['dur']);
$duedate = strval($_GET['duedate']);
$jobid = intval($_GET['jobid']);

$queryCon = "call usp_getContractors(" . $jobcatid . ", " . $locid . ")";
$resultCon = mysqli_query($db, $queryCon);


$hoursArray = array();
$totalJobsArray = array();
$rejectionsArray = array();
$toShow = false;
$isContractor = false;
require('getCon/compConHours.php');
require('getCon/compConTotalJobs.php');
require('getCon/compConRejection.php');

echo '
        <table role="grid"  class="tableFormat">
        <tr class="tableHeader">
            <th class="jobRequestHeader" style="width: 8%;">ContractorID</th>
            <th class="jobRequestHeader" style="width: 17%;">First Name</th>
            <th class="jobRequestHeader" style="width: 17%;">Last Name</th>
            <th class="jobRequestHeader" style="width: 17%;">Job Category</th>
            <th class="jobRequestHeader" style="width: 17%;">Location</th>
            <th class="jobRequestHeader" style="width: 10%;">Rating</th>
            <th class="jobRequestHeader" style="width: 14%; align-content: center;">Select</th>
        </tr>';

if (mysqli_num_rows($resultCon) != 0) {
    while ($rowCon = mysqli_fetch_array($resultCon)) {
        $toShow = false;

        foreach($hoursArray as $entry)
        {
            if ($entry[0] === $rowCon["contractorid"]) {
                $toShow = true;
            }
        }

        foreach($totalJobsArray as $entry)
        {
            if ($entry[0] === $rowCon["contractorid"]) {
                $toShow = true;
            }
        }

        foreach($rejectionsArray as $entry)
        {
            if ($entry[0] === $rowCon["contractorid"]) {
                $toShow = false;
            }
        }

        if ($toShow) {
            $conid = $rowCon["contractorid"];
            echo '<tr>
                    <td>' . $rowCon["contractorid"] . '</td>
                    <td>' . $rowCon["firstname"] . '</td>
                    <td>' . $rowCon["lastname"] . '</td>
                    <td>' . $rowCon["jobcat"] . '</td>
                    <td>' . $rowCon["loc"] . '</td>';
                    if ($rowCon["AverageRating"] === null){
                        echo '<td> No Rating Yet </td>';
                    } else {
                        echo '<td>' . $rowCon["AverageRating"] . '</td>';
                    }
                    echo '<td><Button type="submit" onclick="assignContractor(' . $jobid . ', ' . $conid . ')">Assign</Button></td>
                    </tr>';
            $isContractor = true;
        } 
    }
    if (!$toShow && !$isContractor) {
        echo '<tr><td colspan="7">None</td></tr>';
    }
} else {
    echo '<tr><td colspan="7">None</td></tr>';
}

echo '</tbody></table>';

