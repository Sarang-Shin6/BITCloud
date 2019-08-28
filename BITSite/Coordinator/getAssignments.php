<?php
try {
    require('../connection.php');
    $result = mysqli_query($db, "call usp_Cloud_CoordinatorGetAssignments(" . $_SESSION['id'] . ")");
    echo '
                    <table role="grid"  class="tableFormat">
                    <tr class="tableHeader">
                    <th class="jobRequestHeader" style="width: 7%;">Job ID</th>
                    <th class="jobRequestHeader" style="width: 5%;">ClientID</th>
                    <th class="jobRequestHeader" style="width: 5%;">CompanyID</th>
                    <th class="jobRequestHeader" style="width: 13%;">Company Name</th>
                    <th class="jobRequestHeader" style="width: 8%;">Branch</th>
                    <th class="jobRequestHeader" style="width: 32%;">Description</th>
                    <th class="jobRequestHeader" style="width: 10%;">Due Date</th>
                    <th class="jobRequestHeader" style="width: 13%;">Estimated Duration</th>
                    <th class="jobRequestHeader" style="width: 6%;">Contractor</th>
                    </tr>
                    ';
                    
    if (mysqli_num_rows($result) !== 0) {
        while ($row = mysqli_fetch_array($result)) {
            $jobcatid = intval($row['JobCategoryID']);
            $locid = intval($row['locationid']);
            $dur = intval($row['EstimatedDuration']);
            $duedate = strval($row['PreferredEndDate']);
            $jobid = $row["JobID"];
            echo '<tr>
                        <td>' . $row["JobID"] . '</td>
                        <td>' . $row["ClientID"] . '</td>
                        <td>' . $row["CompanyID"] . '</td> 
                        <td>' . $row["Name"] . '</td>
                        <td>' . $row["Branch"] . '</td>
                        <td>' . $row["Description"] . '</td>
                        <td>' . $row["PreferredEndDate"] . '</td>
                        <td>' . $row["EstimatedDuration"] . '</td>
                        <td><Button type="submit" onclick="openContractor(' . $jobcatid . ', ' . $locid . ', ' . $dur . ', \'' . $duedate . '\', ' . $jobid . ')">Assign</Button></td>                       
                        </tr>';
        }
    } else {
        echo '<tr><td colspan="9">None</td></tr>';
    }
    echo '</tbody></table>';
} catch (Exception $exception) {
    echo 'Something has gone wrong. Please try again later. ' . $exception;
}