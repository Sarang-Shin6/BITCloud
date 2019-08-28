<?php
require('../connection.php');
$sql = "select Branch, CompanyID from company where Active = 1 and clientid = " . $_SESSION['id'];
echo $_SESSION['id'];
$branchResult = mysqli_query($db, $sql);

if ($branchResult != false) {
    while ($row = mysqli_fetch_array($branchResult)) {
        echo "<option value=" . $row['CompanyID'] . ">" . $row['Branch'] . "</option>";
    }
}