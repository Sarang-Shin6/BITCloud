<form class="jobRequestForm" action="addJobRequest.php" method="POST">
                    <div id="jobRequestCol1">
                        <label class="jobRequestLabel">Preferred Due Date: <br/>
                        <?php 
                            $month = date('m');
                            $day = date('d');
                            $year = date('Y');
                            
                            $today = $year . '-' . $month . '-' . $day;
                            echo'<input type="date" name="dueDate" value="' . $today . '" min="' . $today . '" style="width:80%;" required></label><br/>'
                        ?>
                        <label class="jobRequestLabel">Job Category: <br/>
                        <select name="jobcatid" style="width:80%;">
                            <?php require('getJobCategory.php'); ?>
                        </select></label><br/>
                        <label class="jobRequestLabel" >Branch: <br/>
                            <select name="branch" style="width:80%;">
                            <?php require('getBranches.php'); ?> </select>
                        </label>
                    </div>
                    <div id="jobRequestCol2">
                        <label class="jobRequestFormDescLabel" for="requestdesc">Description: <br>
                        <textarea id="requestdesc" class="jobRequestFormDesc" name="jobDesc" required></textarea></label><br/>
                        <button class="jobRequestSubmit" type="submit">Send Request</button>
                    </div>
                </form>