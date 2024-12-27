<?php
$country = trim(readline());

$languages = [
    "England" => "English", "USA" => "English",
    "Spain" => "Spanish", "Argentina" => "Spanish", "Mexico" => "Spanish"
];

echo isset($languages[$country]) ? $languages[$country] : "unknown" . PHP_EOL;
