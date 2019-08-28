<?php
try {
    require('../connection.php');
    $result = mysqli_query($db, "call usp_Cloud_ContractorAssignRequest(" . $_SESSION['id'] . ")");
    echo '<div id="AssignmentTable">';
     echo '
            <table role="grid"  class="tableFormat">
            <tr class="tableHeader">
                <th class="jobRequestHeader" style="width: 10%;">Start Date</th>
                <th class="jobRequestHeader" style="width: 10%;">Company</th>
                <th class="jobRequestHeader" style="width: 7%;">Client First Name</th>
                <th class="jobRequestHeader" style="width: 7%;">Client Last Name</th>
                <th class="jobRequestHeader" style="width: 7%;">Client Phone Number</th>
                <th class="jobRequestHeader" style="width: 10%;">Branch</th> 
                <th class="jobRequestHeader" style="width: 10%;">Street</th> 
                <th class="jobRequestHeader" style="width: 5%;">Suburb</th>
                <th class="jobRequestHeader" style="width: 5%;">State</th> 
                <th class="jobRequestHeader" style="width: 5%;">Postcode</th> 
                <th style="width: 16%;">Description</th>
                <th class="jobRequestHeader" style="width: 10%;">Job Category</th>
                <th class="jobRequestHeader" style="width: 5%;">Action</th>
            </tr>';
    if ($result->num_rows !== 0) {
        while ($row = mysqli_fetch_array($result)) {
            echo '<tr>
                        <td >' . $row["PreferredEndDate"] . '</td>
                        <td >' . $row["Name"] . '</td>
                        <td >' . $row["FirstName"] . '</td>
                        <td >' . $row["LastName"] . '</td> 
                        <td >' . $row["Phone"] . '</td> 
                        <td >' . $row["Branch"] . '</td>
                        <td >' . $row["Street"] . '</td>
                        <td >' . $row["Suburb"] . '</td>
                        <td >' . $row["State"] . '</td>
                        <td >' . $row["Postcode"] . '</td>
                        <td >' . $row["description"] . '</td>
                        <td >' . $row["Description"] . '</td>
                        <td ><button style="margin:2px auto;width: 60px;" onclick="acceptAssignment(' . $row["JobID"] . ', ' . $_SESSION["id"] . ')">Accept</button>
                            <button style="margin:2px auto; width:60px;" onclick="rejectAssignment(' . $row["JobID"] . ', ' . $_SESSION["id"] . ')">Decline</button></td>
                        </tr>';
        }
    } else {
        echo '<tr><td colspan="13">None</td></tr>';
    }
    echo '</table></div>';

} catch (Exception $e) {
    echo 'Something has gone wrong. Please try again later. ' . $e;
}
?>

<script>
    function rejectAssignment(jobid, conid) {
        if (jobid !== "") {
            document.getElementById("AssignmentTable").innerHTML = "";
            xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                if (this.readyState === 4 && this.status === 200) {
                    document.getElementById("AssignmentTable").innerHTML = this.responseText;
                }
            }
            xmlhttp.open("GET","rejectAssignment.php?jobid=" + jobid + "&conid=" + conid);
            xmlhttp.send();
        }
    }

    function acceptAssignment(jobid, conid) {
        if (jobid !== "") {
            document.getElementById("AssignmentTable").innerHTML = "";
            xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                if (this.readyState === 4 && this.status === 200) {
                    document.getElementById("AssignmentTable").innerHTML = this.responseText;
                }
            }
            xmlhttp.open("GET","acceptAssignment.php?jobid=" + jobid + "&conid=" + conid);
            xmlhttp.send();
        }
    }
</script>

