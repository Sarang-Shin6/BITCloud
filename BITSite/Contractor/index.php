<?php
    require('../Structure/Session.php');
    $pageTitle = "Contractor";
    require('../Structure/meta.php');
    require('../Structure/Header.php');
?>
<section class="mainSection">
    <div class="infoCardWrapper">
        <?php
        $cardTitle = "JOB REQUESTS";
        $navi = "getAssignRequest.php";
        require("../Structure/CardHeader.php");
        ?>

        <div class="informationCard fadein" style="height:auto;">
            <div class="informationCardHeader">
                <h1 class="informationCardH1">JOBS IN PROGRESS</h1>
            </div>
            <div id="conJobList">
            <?php
            require_once('getJobs.php');
            ?>
            </div>
        </div>
            
    </div>
</section>
<?php require('../Structure/Footer.html') ?>