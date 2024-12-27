<?php
$a = intval(readline());
$b = intval(readline());
echo "Before: a = $a b = $b" . PHP_EOL;
list($a, $b) = array($b, $a);
echo "After: a = $a b = $b" . PHP_EOL;
