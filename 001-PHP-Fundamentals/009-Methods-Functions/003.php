<?php
function add($a, $b) {
    return $a + $b;
}

function subtract($a, $b) {
    return $a - $b;
}

function multiply($a, $b) {
    return $a * $b;
}

function divide($a, $b) {
    return $a / $b;
}

$operation = trim(fgets(STDIN));
$num1 = intval(fgets(STDIN));
$num2 = intval(fgets(STDIN));

switch ($operation) {
    case 'add':
        echo add($num1, $num2) . "\n";
        break;
    case 'subtract':
        echo subtract($num1, $num2) . "\n";
        break;
    case 'multiply':
        echo multiply($num1, $num2) . "\n";
        break;
    case 'divide':
        echo divide($num1, $num2) . "\n";
        break;
}
?>