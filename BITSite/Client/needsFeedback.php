<?php
require('../connection.php');

$query = 'select jobid from job where clientid = ' . $_SESSION["id"] . ' and statusid between 6 and 8 and feedback is null and jobrating is null;';
$result = mysqli_query($db, $query);

if (mysqli_num_rows($result) !== 0) {
    echo '
        <div class="informationCard fadein">
            <div class="informationCardHeader">
            <h1 class="informationCardH1">FEEDBACK</h1>
            </div>
            
            <form class="jobRequestForm" action="sendFeedback.php" method="POST">
                <div id="jobRequestCol1">
                    <label class="jobRequestLabel" style="width:auto;margin:10px,10px;">Job ID:<br>
                    <select name="jobid" style="width:200px;">';
                while($row = mysqli_fetch_array($result)) {
                    echo '<option>' . $row['jobid'] . '</option>';
                }
                echo '</select></label><br>
                    <label class="jobRequestLabel" style="width:auto;">Contractor Rating:<br>
                    <input type="number" min=0 max=5 name="rating" style="width:200px;" required></label><br>
            </div>
            <div id="jobRequestCol2">
                <label class="jobRequestFormDescLabel" for="feedback" style="margin-top: 10px;">Feedback:<br>
                <textarea id="feedback" class="jobRequestFormDesc" name="feedback" style="height:50px;" required></textarea></label><br/>

                <button class="jobRequestSubmit" type="submit" style="margin-top:10px;">Send Feedback</button>
            </div>
            </form>
        </div>';
}
