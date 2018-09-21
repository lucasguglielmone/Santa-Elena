<?php
//db details
$dbHost = 'localhost';
$dbUsername = 'matipanaderia';
$dbPassword = 'alonso';
$dbName = 'santaelena';

//Connect and select the database
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>