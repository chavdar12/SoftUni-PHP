<?php
$n = intval(fgets(STDIN));
$b = intval(fgets(STDIN));

$binary = decbin($n);
$count = substr_count($binary, (string)$b);

echo $count . PHP_EOL;
?>