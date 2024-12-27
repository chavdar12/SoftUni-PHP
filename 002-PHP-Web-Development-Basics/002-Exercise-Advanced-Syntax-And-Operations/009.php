<?php
$matrixSize = array_map("intval", explode(", ", readline()));

$rowSize = $matrixSize[0];
$colSize = $matrixSize[1];
$matrix = [];

for ($row = 0; $row < $rowSize; $row++) {
    $matrix[$row] = array_map("intval", explode(", ", readline()));
}

$sum = array_sum(array_map('array_sum', $matrix));

echo $rowSize . PHP_EOL;
echo $colSize . PHP_EOL;
echo $sum;