<?php
function getSumOfEvenDigits($num) {
    $sum = 0;
    foreach (str_split(abs($num)) as $digit) {
        if ($digit % 2 == 0) {
            $sum += $digit;
        }
    }
    return $sum;
}

function getSumOfOddDigits($num) {
    $sum = 0;
    foreach (str_split(abs($num)) as $digit) {
        if ($digit % 2 != 0) {
            $sum += $digit;
        }
    }
    return $sum;
}

function getMultipleOfEvensAndOdds($num) {
    return getSumOfEvenDigits($num) * getSumOfOddDigits($num);
}

$num = intval(fgets(STDIN));
echo getMultipleOfEvensAndOdds($num) . "\n";
?>