<?php
function calculatePrice($product, $quantity) {
    $prices = [
        'coffee' => 1.50,
        'water' => 1.00,
        'coke' => 1.40,
        'snacks' => 2.00
    ];
    return $prices[$product] * $quantity;
}

$product = trim(fgets(STDIN));
$quantity = intval(fgets(STDIN));

echo number_format(calculatePrice($product, $quantity), 2) . "\n";
?>