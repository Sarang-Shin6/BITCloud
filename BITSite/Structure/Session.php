<?php

session_start();
    if (isset($_SESSION["type"])) {
        $_SESSION['loggedin'] = 'yes';
    }
    require('../loginRedirect.php');