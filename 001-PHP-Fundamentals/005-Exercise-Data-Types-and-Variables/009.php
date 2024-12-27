<?php
$n = intval(readline());
$m = intval(readline());
$y = intval(readline());

$originalN = $n;
$pokes = 0;

while ($n >= $m) {
    $n -= $m;
    $pokes++;
    if ($n == $originalN / 2) {
        if ($y != 0 && $n % $y == 0) {
            $n /= $y;
        }
    }
}
echo $n . PHP_EOL;
echo $pokes . PHP_EOL;
