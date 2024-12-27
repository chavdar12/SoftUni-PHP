<?php
function getLastDigitName($number) {
    $lastDigit = abs($number) % 10;
    $names = ["zero", "one", "two", "three", "four", "five", "six", "seven", "eight", "nine"];
    return $names[$lastDigit];
}

$number = intval(readline());
echo getLastDigitName($number) . PHP_EOL;
