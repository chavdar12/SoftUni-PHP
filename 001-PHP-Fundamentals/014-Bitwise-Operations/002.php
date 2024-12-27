<?php
$n = intval(fgets(STDIN));

$bitAtPosition1 = ($n >> 1) & 1;

echo $bitAtPosition1 . PHP_EOL;
?>