<?php
function sum($a, $b) {
    return $a + $b;
}

function subtract($sum, $c) {
    return $sum - $c;
}

$result = subtract(sum(23, 6), 10);
echo $result;
?>