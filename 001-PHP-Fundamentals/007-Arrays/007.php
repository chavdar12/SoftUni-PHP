<?php
$array1 = explode(" ", readline());
$array2 = explode(" ", readline());
$identical = true;
$sum = 0;

for ($i = 0; $i < count($array1); $i++) {
    if ($array1[$i] != $array2[$i]) {
        echo "Arrays are not identical. Found difference at {$i} index";
        $identical = false;
        break;
    }
    $sum += $array1[$i];
}

if ($identical) {
    echo "Arrays are identical. Sum: {$sum}";
}
