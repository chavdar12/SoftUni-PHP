<?php
$number = intval(readline());
$result = "Not divisible";

if ($number % 10 === 0) {
    $result = "The number is divisible by 10";
} elseif ($number % 6 === 0) {
    $result = "The number is divisible by 6";
} elseif ($number % 7 === 0) {
    $result = "The number is divisible by 7";
} elseif ($number % 3 === 0) {
    $result = "The number is divisible by 3";
} elseif ($number % 2 === 0) {
    $result = "The number is divisible by 2";
}

echo $result;
