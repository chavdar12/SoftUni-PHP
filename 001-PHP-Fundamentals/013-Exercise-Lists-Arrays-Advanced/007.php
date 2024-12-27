<?php
$numbers = explode(" ", trim(fgets(STDIN)));
$sum = 0;

foreach ($numbers as $number) {
    $sum += (int) strrev($number);
}

echo $sum . "\n";
?>