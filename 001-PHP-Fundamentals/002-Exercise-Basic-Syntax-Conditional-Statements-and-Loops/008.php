<?php
$n = intval(readline());

for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "$j ";
    }
    echo PHP_EOL;
}
