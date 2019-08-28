<?php
if (!isset($_SESSION['type'])) {
    header('Refresh: 0; URL=../bitsite');
} else {
    if ($_SESSION['loggedin'] != 'yes') {
        if ($_SESSION['type'] == 'contractor') {
            header('Refresh: 0; URL=Contractor');
        } elseif ($_SESSION['type'] == 'client') {
            header('Refresh: 0; URL=Client');
        } elseif ($_SESSION['type'] == 'coordinator') {
            header('Refresh: 0; URL=Coordinator');
        }
    }
}
