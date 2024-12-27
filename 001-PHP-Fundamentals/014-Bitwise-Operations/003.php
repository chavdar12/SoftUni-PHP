<?php
$n = intval(fgets(STDIN));
$p = intval(fgets(STDIN));

$bitAtPositionP = ($n >> $p) & 1;

echo $bitAtPositionP . PHP_EOL;
?>