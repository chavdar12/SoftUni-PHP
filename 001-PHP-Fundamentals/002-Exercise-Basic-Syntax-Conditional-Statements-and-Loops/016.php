<?php
$digitToLetters = [
    '2' => 'abc', '3' => 'def', '4' => 'ghi', '5' => 'jkl', '6' => 'mno',
    '7' => 'pqrs', '8' => 'tuv', '9' => 'wxyz'
];

$input = explode(' ', readline());
$output = "";

foreach ($input as $word) {
    $digit = $word[0];
    $index = strlen($word) - 1;
    $letters = $digitToLetters[$digit];
    $output .= $letters[$index];
}

echo $output . PHP_EOL;
