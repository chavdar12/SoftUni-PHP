<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'deliveryinfo';

$conn = new mysqli($host, $user, $pass);
if ($conn->connect_error) {
    die("Connection Error: " . $conn->connect_error);
}

if (!$conn->select_db($dbname)) {
    if ($conn->query("CREATE DATABASE $dbname")) {
        echo "Database '$dbname' created successfully.<br>";
        $conn->select_db($dbname);
    } else {
        die("Error creating database: " . $conn->error);
    }
}

$conn->set_charset('utf8');