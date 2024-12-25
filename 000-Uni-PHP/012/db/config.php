<?php
$host = 'localhost';
$dbUser = 'root';
$dbPass = '';
$dbName = 'guest';

$dbConn = new mysqli($host, $dbUser, $dbPass, $dbName);
if ($dbConn->connect_error) {
    die('Грешка при връзка със сървъра: ' . $dbConn->connect_error);
}

$dbConn->set_charset("utf8");