<?php
$matrix = [];
$rows = intval(readline());

for ($i = 0; $i < $rows; $i++) {
    $matrix[] = explode(" ", readline());
}

for ($row = 0; $row < count($matrix); $row++) {
    for ($col = 0; $col < count($matrix[$row]); $col++) {
        if (isset($matrix[$row][$col - 1])) {
            $matrix[$row][$col] += $matrix[$row][$col - 1];
        }

        if (isset($matrix[$row][$col - 2])) {
            $matrix[$row][$col] += $matrix[$row][$col - 2];
        }

        echo $matrix[$row][$col] . ' ';
    }
    echo PHP_EOL;
}