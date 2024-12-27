<?php
function factorial($n) {
    $result = 1;
    for ($i = 1; $i <= $n; $i++) {
        $result *= $i;
    }
    return $result;
}

$number = readline();
$sum = 0;
$digits = str_split($number);

foreach ($digits as $digit) {
    $sum += factorial((int)$digit);
}

if ($sum === (int)$number) {
    echo "yes";
} else {
    echo "no";
}
