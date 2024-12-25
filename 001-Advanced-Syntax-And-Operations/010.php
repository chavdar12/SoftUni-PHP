<?php
$matrix = [];
$rows = intval(readline());

for ($i = 0; $i < $rows; $i++) {
    $matrix[] = explode(" ", readline());
}

list($row, $col) = explode(" ", readline());
echo $matrix[$row][$col] ?? "Invalid Index";