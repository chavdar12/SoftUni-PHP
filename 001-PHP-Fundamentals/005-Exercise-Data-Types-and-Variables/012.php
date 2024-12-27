<?php
$a = floatval(readline());
$b = floatval(readline());
$eps = 0.000001;
if (abs($a - $b) < $eps) {
    echo "True" . PHP_EOL;
} else {
    echo "False" . PHP_EOL;
}
