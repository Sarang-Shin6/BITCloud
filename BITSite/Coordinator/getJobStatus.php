<?php
try {
    require('../connection.php');
    $result = mysqli_query($db, "call usp_Cloud_CoordinatorJobStatus(" .  $_SESSION['id'] . ");");
    echo '<div id=coorJobsList>
            <table role="grid"  class="tableFormat">
            <tr class="tableHeader">
                <th class="jobRequestHeader" style="width: 5%;">JobID</th>
                <th class="jobRequestHeader" style="width: 5%;">ClientID</th>
                <th class="jobRequestHeader" style="width: 5%;">CompanyID</th>
                <th class="jobRequestHeader" style="width: 10%;">Company Name</th>
                <th class="jobRequestHeader" style="width: 10%;">Company Branch</th>
                <th class="jobRequestHeader" style="width: 10%;">Start Date</th>
                <th class="jobRequestHeader" style="width: 5%;">ContractorID</th>
                <th class="jobRequestHeader" style="width: 10%;">Contractor First Name</th>
                <th class="jobRequestHeader" style="width: 10%;">Contractor Last Name</th>
                <th class="jobRequestHeader" style="width: 10%;">KMs Logged</th>
                <th class="jobRequestHeader" style="width: 10%;">Hours Worked</th>
                <th class="jobRequestHeader" style="width: 10%;">Status</th>
            </tr>
            ';
    if ($result != false) {
        while ($row = mysqli_fetch_array($result)) {
            $jobid = $row['JobID'];
            echo '<tr>
                            <td>' . $row["JobID"] . '</td>
                            <td>' . $row["ClientID"] . '</td>
                            <td>' . $row["CompanyID"] . '</td> 
                            <td>' . $row["Name"] . '</td>
                            <td>' . $row["Branch"] . '</td>';
            if ($row["StartDate"] == null) {
                echo '<td> - </td>';
            } else {
                echo '<td>' . $row["StartDate"] . '</td>';
            }
            if ($row["ContractorID"] == null) {
                echo '<td> - </td><td> - </td><td> - </td>';
            } else {
                echo '<td>' . $row["ContractorID"] . '</td> 
                                <td>' . $row["FirstName"] . '</td>
                                <td>' . $row["LastName"] . '</td>';
            }
            if ($row["LoggedKm"] == null) {
                echo '<td> - </td>';
            } else {
                echo '<td>' . $row["LoggedKm"] . '</td>';
            }
            if ($row["Duration"] == null) {
                echo '<td> - </td>';
            } else {
                echo ' <td>' . $row["Duration"] . '</td>';
            }
            if ($row["Description"] === "Completed") {
                echo '<td><Button type="submit" onclick="verifyJob(' . $jobid . ', ' . $_SESSION['id'] . ')">Verify</Button></td></tr>';
            } else {
                echo '<td>' . $row["Description"] . '</td></tr>';
            }
        }
    } else {
        echo '<tr><td colspan="12">None</td></tr>';
    }
    echo '</tbody></table></div>';
} catch (Exception $exception){
    echo 'Something has gone wrong. Please try again later. ' . $exception;
};
