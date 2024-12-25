<?php
function getCountries(): array
{
    $dsn = "mysql:dbname=geography;host=localhost:3306";
    $username = "root";
    $password = "toor";

    try {
        $db = new PDO($dsn, $username, $password);
        $query = "SELECT * FROM countries";
        $result = $db->query($query);
        return $result->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        return [];
    }
}
