<?php
$num1 = floatval(trim(fgets(STDIN)));
$num2 = floatval(trim(fgets(STDIN)));
$num3 = floatval(trim(fgets(STDIN)));

$negativeCount = 0;

if ($num1 < 0) $negativeCount++;
if ($num2 < 0) $negativeCount++;
if ($num3 < 0) $negativeCount++;

if ($num1 == 0 || $num2 == 0 || $num3 == 0) {
    echo "zero";
} elseif ($negativeCount % 2 == 0) {
    echo "positive";
} else {
    echo "negative";
}
?>