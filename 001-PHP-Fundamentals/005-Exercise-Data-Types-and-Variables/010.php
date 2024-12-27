<?php
$n = intval(readline());
for ($i = 0; $i < $n; $i++) {
    list($left, $right) = explode(" ", readline());
    $leftSum = array_sum(str_split($left));
    $rightSum = array_sum(str_split($right));
    echo $left > $right ? $leftSum : $rightSum . PHP_EOL;
}
