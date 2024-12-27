<?php
$array = explode(" ", readline());
$sum = intval(readline());
$pairs = [];
for ($i = 0; $i < count($array); $i++) {
    for ($j = $i + 1; $j < count($array); $j++) {
        if ($array[$i] + $array[$j] == $sum) {
            $pairs[] = $array[$i] . " " . $array[$j];
        }
    }
}
echo implode(PHP_EOL, $pairs);
