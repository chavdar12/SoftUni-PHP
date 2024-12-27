<?php
$typeOfDay = trim(readline());
$age = intval(readline());

if ($age >= 0 && $age <= 18) {
    $prices = ["Weekday" => 12, "Weekend" => 15, "Holiday" => 5];
} elseif ($age > 18 && $age <= 64) {
    $prices = ["Weekday" => 18, "Weekend" => 20, "Holiday" => 12];
} elseif ($age > 64 && $age <= 122) {
    $prices = ["Weekday" => 12, "Weekend" => 15, "Holiday" => 10];
} else {
    echo "Error!" . PHP_EOL;
    exit;
}

echo $prices[$typeOfDay] . "$" . PHP_EOL;
