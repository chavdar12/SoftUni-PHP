<?php
$coins = 0;
while (true) {
    $coin = readline();
    if ($coin === "Start") break;
    $validCoins = [0.1, 0.2, 0.5, 1, 2];
    if (in_array((float)$coin, $validCoins)) {
        $coins += (float)$coin;
    } else {
        echo "Cannot accept $coin" . PHP_EOL;
    }
}

$prices = [
    "Nuts" => 2.0,
    "Water" => 0.7,
    "Crisps" => 1.5,
    "Soda" => 0.8,
    "Coke" => 1.0
];

while (true) {
    $product = readline();
    if ($product === "End") break;
    if (!array_key_exists($product, $prices)) {
        echo "Invalid product" . PHP_EOL;
        continue;
    }

    if ($coins < $prices[$product]) {
        echo "Sorry, not enough money" . PHP_EOL;
    } else {
        $coins -= $prices[$product];
        echo "Purchased $product" . PHP_EOL;
    }
}

echo "Change: " . number_format($coins, 2);
