<?php
$matrix = [];
$n = explode(", ", trim(readline()));

if ($n[1] == 'A') {
    PrintMatrix(pat1($n[0]), $n[0]);
} elseif ($n[1] == 'B') {
    PrintMatrix(pat2($n[0]), $n[0]);
} else {
    echo "Wrong Choice!";
}

function pat1($n): array
{
    $matrix1 = [];
    $cn = 1;

    for ($row = 0; $row < $n; $row++) {
        for ($col = 0; $col < $n; $col++) {
            $matrix1[$col][$row] = $cn++;
        }
    }
    return $matrix1;
}

function pat2($n): array
{
    $matrix1 = [];
    $cn = 1;

    for ($col = 0; $col < $n; $col++) {
        $rows = $col % 2 == 0 ? range(0, $n - 1) : range($n - 1, 0, -1);
        foreach ($rows as $row) {
            $matrix1[$row][$col] = $cn++;
        }
    }
    return $matrix1;
}

function PrintMatrix($m, $n): void
{
    foreach ($m as $row) {
        echo implode(' ', $row) . PHP_EOL;
    }
}