<?php
try {
    require('../connection.php');
    $result = mysqli_query($db, "call usp_Cloud_ClientGetJobs(" . $_SESSION['id'] . ")");
    echo '<div id=jobList>
                    <table role="grid"  class="tableFormat">
                    <tr class="tableHeader">
                        <th class="jobRequestHeader" style="width: 10%;">Start Date</th>
                        <th class="jobRequestHeader" style="width: 4%;">Job ID</th>
                        <th class="jobRequestHeader" style="width: 10%;">Contractor First Name</th>
                        <th class="jobRequestHeader" style="width: 10%;">Contractor Last Name</th>
                        
                        <th style="width: 16%;">Description</th>
                        <th class="jobRequestHeader" style="width: 10%;">Job Category</th>
                        <th class="jobRequestHeader" style="width: 5%;">Status</th>
                    </tr>';
    if (mysqli_num_rows($result) != 0) {
        while ($row = mysqli_fetch_array($result)) {
            echo '<tr>';
            if ($row["StartDate"] == null) {
                echo '<td>Not Started</td>';
            } else {
                echo '<td>' . $row["StartDate"] . '</td>';
            }
            echo '<td>' . $row["JobID"] . '</td>';
            if ($row["FirstName"] !== null) {
                echo '<td>' . $row["FirstName"] . '</td>';
            } else {
                echo '<td>No Coordinator Assigned</td>';
            }
            if ($row["LastName"] !== null) {
                echo  '<td>' . $row["LastName"] . '</td>';
            } else {
                echo '<td>-</td>';
            }
            echo '<td>' . $row["description"] . '</td> 
                            <td>' . $row["Description"] . '</td>
                            <td>' . $row["Status"] . '</td>
                            </tr>';
        }
    } else {
        echo '<tr><td>None</td>';
        echo '<td></td>';
        echo '<td></td>';
        echo '<td></td>';
        echo '<td></td>';
        echo '<td></td>';
        echo '<td></td></tr>';
    }
    echo '</tbody></table></div>';
} catch (Exception $exception) {
    echo 'Something has gone wrong. Please try again later. ' . $exception;
}
