<?php
$n = intval(readline());
$train = [];
for ($i = 0; $i < $n; $i++) {
    $train[] = intval(readline());
}
echo implode(" ", $train) . PHP_EOL;
echo array_sum($train);
