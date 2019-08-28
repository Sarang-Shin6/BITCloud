<?php
// $db = new mysqli();
// $db->connect("localhost","root","","bitdb");

$db = new mysqli("localhost","root","","bitdb");

if ($db->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
}
