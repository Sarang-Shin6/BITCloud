<?php
    require('../Structure/Session.php');
    $pageTitle = "Client";
    require('../Structure/meta.php');
    require('../Structure/Header.php')
?>

    <section class="mainSection">
    <div class="infoCardWrapper">
        
        <?php 
        $cardTitle = "JOB STATUS";
        $navi = "getJobs.php";
        require("../Structure/CardHeader.php");

        require('needsFeedback.php');

        $cardTitle = "JOB REQUEST";
        $navi = "requestForm.php"; 
        require("../Structure/CardHeader.php");
        ?>
        
        

    </section>
    <?php require('../Structure/Footer.html') ?>