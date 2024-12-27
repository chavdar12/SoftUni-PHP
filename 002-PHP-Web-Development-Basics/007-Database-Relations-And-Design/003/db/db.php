<?php
try {
    $db = new PDO("mysql:dbname=test_login;host=localhost:3306", "root", "toor");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
