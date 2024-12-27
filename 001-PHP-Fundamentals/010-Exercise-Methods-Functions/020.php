<?php
$products = explode(" ", trim(fgets(STDIN)));
$quantities = explode(" ", trim(fgets(STDIN)));
$prices = explode(" ", trim(fgets(STDIN)));

while ($order = trim(fgets(STDIN))) {
    if ($order == "done") break;

    list($productName, $orderQuantity) = explode(" ", $order);
    $index = array_search($productName, $products);

    if ($index !== false) {
        $availableQuantity = $quantities[$index];
        $price = $prices[$index];

        if ($availableQuantity >= $orderQuantity) {
            $totalPrice = $orderQuantity * $price;
            echo "$productName x $orderQuantity costs " . number_format($totalPrice, 2) . "\n";
            $quantities[$index] -= $orderQuantity;
        } else {
            echo "We do not have enough $productName\n";
        }
    }
}
?>