<?php
$n = intval(readline());
$sum = 0;

for ($i = 1, $count = 0; $count < $n; $i += 2, $count++) {
    echo $i . PHP_EOL;
    $sum += $i;
}

echo "Sum: $sum" . PHP_EOL;
