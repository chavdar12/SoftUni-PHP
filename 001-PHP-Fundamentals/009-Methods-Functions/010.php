<?php
function repeatString($str, $n) {
    return str_repeat($str, $n);
}

$str = trim(fgets(STDIN));
$n = intval(fgets(STDIN));

echo repeatString($str, $n) . "\n";
?>