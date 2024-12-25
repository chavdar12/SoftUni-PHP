<?php
include 'config.php';

$sql = "CREATE DATABASE IF NOT EXISTS guest";
if ($dbConn->query($sql)) {
    echo "БД 'guest' е създадена успешно.<br>";
} else {
    echo "Грешка при създаване на БД: " . $dbConn->error . "<br>";
}

$sql = "
CREATE TABLE IF NOT EXISTS guestbook (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(65) NOT NULL,
    email VARCHAR(65) NOT NULL,
    comment TEXT NOT NULL,
    datetime TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($dbConn->query($sql)) {
    echo "Таблицата 'guestbook' е създадена успешно.<br>";
} else {
    echo "Грешка при създаване на таблица: " . $dbConn->error . "<br>";
}