<?php
try {
    require('../connection.php');
    $result = mysqli_query($db, "call usp_Cloud_ContractorGetJobs(" . $_SESSION['id'] . ")");
    echo '
                    <table role="grid" class="tableFormat">
                    <tr class="tableHeader">
                    <th class="jobRequestHeader" style="width:8%">Company</th>
                    <th class="jobRequestHeader" style="width:8%">Client Name</th>
                    <th class="jobRequestHeader" style="width:8%">Phone No</th> 
                    <th class="jobRequestHeader" style="width:8%">Branch</th> 
                    <th class="jobRequestHeader" style="width:8%">Street</th> 
                    <th class="jobRequestHeader" style="width:6%">Suburb</th>
                    <th class="jobRequestHeader" style="width:6%">State</th> 
                    <th class="jobRequestHeader" style="width:6%">Postcode</th> 
                    <th class="jobRequestHeader" style="width:18%">Description</th>
                    <th class="jobRequestHeader" style="width:8%">Distance</th>
                    <th class="jobRequestHeader" style="width:8%">Duration</th>
                    <th class="jobRequestHeader" style="width:8%">Status</th>

                    </tr>';
    if ($result != false) {
        while ($row = mysqli_fetch_array($result)) {
            $jobid = $row["JobID"];
            $status = $row["StatusID"];
            $loggedkm = $row["loggedkm"];
            $duration = $row["duration"];
            $VerificationCounter = 0;
            $CommencedCounter = 0;
            echo '<tr>
            <td colspan="9" style="text-align: center; font-size:12pt;">
            <b><p>Due date is: ' . $row["PreferredEndDate"] . ' and Job ID is : ' . $row["JobID"] . '</b></p></td>
            <td colspan="3" style="text-align: center;font-size:12pt;"><b>' . $row["jobcatdesc"] . '</b></td>';       

            echo '</tr>
            <tr>
            <td >' . $row["Name"] . '</td>
            <td >' . $row["FirstName"] . " " . $row["LastName"]. '</td>
            <td >' . $row["Phone"] . '</td>  
            <td >' . $row["Branch"] . '</td>
            <td >' . $row["Street"] . '</td>
            <td >' . $row["Suburb"] . '</td>
            <td >' . $row["State"] . '</td>
            <td >' . $row["Postcode"] . '</td>
            <td >' . $row["jobdesc"] . '</td>';
            if ($row["StatusID"] == 4) {
                    if ($row['loggedkm'] === "0" || $row['loggedkm'] === null) {
                        echo '<td style="width: 9%;">-</td>';
                    } else {
                        echo '<td style="width: 9%;">' . $row["loggedkm"] . '</td>';
                    }
                    if ($row['duration'] === "0" || $row['duration'] === null) {
                        echo '<td style="width: 6%;">-</td>';
                    } else {
                        echo '<td style="width: 6%;">' . $row["duration"] . '</td>';
                    }
                    echo '<td><button style="margin-left:8px" onclick="commenceJob(' . $jobid . ')">Commence</button></td>';
            } else if ($row["StatusID"] == 5) {
                
                echo '
                    <td colspan="3"><form onsubmit="completeJob(' . $jobid . ', ' . $VerificationCounter . ')" method="POST">
                    <input type="number" name="loggedkm" id="loggedkm' . $VerificationCounter . '" style="width:33%; margin-right: 4%;" required>
                    <input type="number" name="duration" id="duration' . $VerificationCounter . '" style="width:30%; margin-right: 4%" required>
                    <input type="submit" value="Complete" style="width:26%;"></form></td>';
            } else {
                if ($row['loggedkm'] === "0" || $row['loggedkm'] === null) {echo '<td style="width: 9%;">-</td>';} else {echo '<td style="width: 9%;">' . $row["loggedkm"] . '</td>';}
                if ($row['duration'] === "0" || $row['duration'] === null) {echo '<td style="width: 6%;">-</td>';} else {echo '<td style="width: 6%;">' . $row["duration"] . '</td>';}        
                echo '<td>' . $row["statusdesc"] . '</td>';                     
            }
            $VerificationCounter++;
            echo '</tr><tr><td colspan="13" style="background-color: #4b7885;"></tr></tr>';
        }
    } else {
        echo '<table><tr><td colspan="13">None</td></tr></tbody></table>';
    }
    echo '</tbody></table></form>';
} catch (Exception $exception) {
    echo 'Something has gone wrong. Please try again later. ' . $exception;
}

echo '<script>
function completeJob(jobid, counter) {
    var kmID = "loggedkm" + counter;
    var durationID = "duration" + counter;
    var loggedkm = document.getElementById(kmID).value;
    var duration = document.getElementById(durationID).value;
    document.getElementById("conJobList").innerHTML = "";
    xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            document.getElementById("conJobList").innerHTML = this.responseText;
        }
    }
    xmlhttp.open("GET","completeJob.php?jobid=" + jobid + "&duration=" + duration + "&loggedkm=" + loggedkm);
    xmlhttp.send();
}

function commenceJob(jobid) {
    document.getElementById("conJobList").innerHTML = "";
    xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) {
            document.getElementById("conJobList").innerHTML = this.responseText;
        }
    }
    xmlhttp.open("GET","commenceJob.php?jobid=" + jobid);
    xmlhttp.send();
}
</script>';
