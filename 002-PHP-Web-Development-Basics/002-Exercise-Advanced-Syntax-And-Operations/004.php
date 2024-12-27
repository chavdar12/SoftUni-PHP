<?php
$numbers = explode(" ", readline());
$maxCount = 0;
$number = 0;

foreach ($numbers as $current) {
    $currentCount = count(array_keys($numbers, $current));
    if ($currentCount > $maxCount) {
        $maxCount = $currentCount;
        $number = $current;
    }
}

echo $number;