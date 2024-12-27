<?php

$upperLimit = intval(readline());

for ($number = 1; $number <= $upperLimit; $number++) {
    $sumOfDigits = 0;
    $currentNumber = $number;

    while ($currentNumber > 0) {
        $sumOfDigits += $currentNumber % 10;
        $currentNumber = intdiv($currentNumber, 10);
    }

    $isSpecial = ($sumOfDigits == 5) || ($sumOfDigits == 7) || ($sumOfDigits == 11);
    $result = $isSpecial ? "True" : "False";
    echo sprintf("%d -> %s", $number, $result) . PHP_EOL;
}
