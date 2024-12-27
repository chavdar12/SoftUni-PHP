<?php
$n = intval(readline());
for ($i = 2; $i <= $n; $i++) {
    $isPrime = true;
    for ($j = 2; $j * $j <= $i; $j++) {
        if ($i % $j == 0) {
            $isPrime = false;
            break;
        }
    }
    echo "$i -> " . ($isPrime ? "true" : "false") . PHP_EOL;
}
