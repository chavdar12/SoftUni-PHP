<?php
$factorial = function($n) {
    global $factorial;
    if ($n == 0) return 1;
    return $n * $factorial($n - 1);
};

$n = intval(fgets(STDIN));
echo $factorial($n) . "\n";
?>