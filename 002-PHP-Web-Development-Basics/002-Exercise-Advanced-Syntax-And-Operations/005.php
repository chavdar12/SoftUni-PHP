<?php

$numbers = explode(" ", readline());
$maxCount = 0;
$number = "";

foreach ($numbers as $current) {
    $currentCount = count(array_keys($numbers, $current));
    if ($currentCount > $maxCount) {
        $maxCount = $currentCount;
        $number = $current;
    }
}

echo str_repeat($number . " ", $maxCount);