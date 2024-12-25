<?php
$host = 'localhost';
$dbUser = 'root';
$dbPass = '';
$dbName = 'infobooks';

function getDbConnection()
{
    global $host, $dbUser, $dbPass, $dbName;
    $dbConn = new mysqli($host, $dbUser, $dbPass, $dbName);

    if ($dbConn->connect_error) {
        die('Connection failed: ' . $dbConn->connect_error);
    }

    $dbConn->set_charset('utf8');
    return $dbConn;
}

?>