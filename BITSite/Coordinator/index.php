<?php
    require('../Structure/Session.php');
    $pageTitle = "Coordinator";
    require('../Structure/Meta.php');
    require('../Structure/Header.php');
?>
    <section class="mainSection">
        <div class="infoCardWrapper">

        
            <div class="informationCard fadein">
                <div class="informationCardHeader">
                    <h1 class="informationCardH1">CONTRACTOR ASSIGNMENT </h1>
                </div>
                <div id="AssignmentTable">
                <?php
                require_once('getAssignments.php')
                ?>
                </div>
            </div>

            <div class="informationCard" style="display:none;" id="contractorListTable">
                <div class="informationCardHeader">
                    <h1 class="informationCardH1">CONTRACTOR LIST</h1>
                </div>
                <div id="contractorAssignmentTable" style="width:100%;">
                </div>

            </div>

            <div class="informationCard fadein">
                <div class="informationCardHeader">
                    <h1 class="informationCardH1">JOB STATUS</h1>
                </div>
                <?php
                require_once('getJobStatus.php');
                ?>
            </div>

        </div>
    </section>
    <?php require('../Structure/Footer.html') ?>