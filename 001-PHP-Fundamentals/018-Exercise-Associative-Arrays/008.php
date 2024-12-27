<?php

$products = [];

while (true) {
    $input = trim(fgets(STDIN));
    if ($input === "buy") break;

    $parts = explode(" ", $input);
    $productName = $parts[0];
    $price = floatval($parts[1]);
    $quantity = intval($parts[2]);

    if (!isset($products[$productName])) {
        $products[$productName] = [
            'price' => $price,
            'quantity' => 0
        ];
    }

    $products[$productName]['quantity'] += $quantity;
    $products[$productName]['price'] = $price;
}

foreach ($products as $name => $info) {
    $totalPrice = $info['price'] * $info['quantity'];
    echo "$name -> " . number_format($totalPrice, 2) . "\n";
}
?>