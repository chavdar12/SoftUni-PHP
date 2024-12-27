<?php
$n = intval(readline());
$threshold = floatval(readline());

$lastPrice = floatval(readline());

for ($i = 1; $i < $n; $i++) {
    $currentPrice = floatval(readline());
    $difference = ($currentPrice - $lastPrice) / $lastPrice;
    $isSignificant = abs($difference) >= $threshold;

    if ($difference == 0) {
        echo "NO CHANGE: $currentPrice" . PHP_EOL;
    } elseif (!$isSignificant) {
        printf("MINOR CHANGE: %.6f to %.6f (%.2f%%)\n", $lastPrice, $currentPrice, $difference * 100);
    } elseif ($difference > 0) {
        printf("PRICE UP: %.6f to %.6f (%.2f%%)\n", $lastPrice, $currentPrice, $difference * 100);
    } else {
        printf("PRICE DOWN: %.6f to %.6f (%.2f%%)\n", $lastPrice, $currentPrice, $difference * 100);
    }

    $lastPrice = $currentPrice;
}
