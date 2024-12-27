<?php
$n = intval(fgets(STDIN));
$p = intval(fgets(STDIN));

$mask = ~(1 << $p);
$newNumber = $n & $mask;

echo $newNumber . PHP_EOL;
?>