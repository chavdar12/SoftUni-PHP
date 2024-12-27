<?php
$array = explode(" ", readline());
for ($i = 0; $i < count($array); $i++) {
    $leftSum = array_sum(array_slice($array, 0, $i));
    $rightSum = array_sum(array_slice($array, $i + 1));
    if ($leftSum == $rightSum) {
        echo $i;
        exit;
    }
}
echo "no";
