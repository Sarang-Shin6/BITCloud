<?php
    session_start();
    unset($_SESSION['type']);
    unset($_SESSION['id']);
    unset($_SESSION['firstname']);

    session_destroy();
    header('Refresh: 0; URL=../bitsite');
