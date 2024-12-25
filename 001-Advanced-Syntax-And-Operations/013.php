<?php
$matrix = [];
$rows = intval(readline());

for ($i = 0; $i < $rows; $i++) {
    $matrix[] = explode(" ", readline());
}

$rightDiagonal = 0;
$leftDiagonal = 0;
$col = count($matrix) - 1;

for ($i = 0; $i < count($matrix); $i++) {
    $rightDiagonal += $matrix[$i][$i];
    $leftDiagonal += $matrix[$i][$col];
    $col--;
}

echo $rightDiagonal . PHP_EOL;
echo $leftDiagonal;