<?php

$n = intval(readline());

for ($i = 1; $i <= $n; $i++) {
    $sum = array_sum(str_split($i));
    $isSpecial = ($sum == 5 || $sum == 7 || $sum == 11) ? "True" : "False";
    echo "$i -> $isSpecial" . PHP_EOL;
}
