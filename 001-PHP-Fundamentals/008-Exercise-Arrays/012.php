<?php
function fibonacci($n) {
    if ($n <= 2) {
        return 1;
    }
    return fibonacci($n - 1) + fibonacci($n - 2);
}
$n = intval(fgets(STDIN));
echo fibonacci($n) . PHP_EOL;
