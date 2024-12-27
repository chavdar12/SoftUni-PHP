<?php
function mathOperations($num1, $operator, $num2) {
    switch ($operator) {
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 - $num2;
        case '*':
            return $num1 * $num2;
        case '/':
            return $num1 / $num2;
    }
}

$num1 = floatval(fgets(STDIN));
$operator = trim(fgets(STDIN));
$num2 = floatval(fgets(STDIN));

echo number_format(mathOperations($num1, $operator, $num2), 2) . "\n";
?>