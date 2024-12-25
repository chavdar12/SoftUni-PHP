<?php
function getCountries()
{
    $db = new mysqli("localhost", "root", "pass", "geography");

    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }

    $result = $db->query("SELECT * FROM countries");

    if ($result->num_rows > 0) {
        $countries = $result->fetch_all(MYSQLI_ASSOC);
    } else {
        $countries = [];
    }

    $db->close();

    return $countries;
}
