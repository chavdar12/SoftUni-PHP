<?php
$n = intval(fgets(STDIN));
$triangle = [[1]];
for ($i = 1; $i < $n; $i++) {
    $row = [1];
    for ($j = 1; $j < $i; $j++) {
        $row[] = $triangle[$i - 1][$j - 1] + $triangle[$i - 1][$j];
    }
    $row[] = 1;
    $triangle[] = $row;
}
foreach ($triangle as $row) {
    echo implode(' ', $row) . PHP_EOL;
}
