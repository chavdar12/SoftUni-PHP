<?php
$products = explode(" ", trim(fgets(STDIN)));
$quantities = explode(" ", trim(fgets(STDIN)));
$prices = explode(" ", trim(fgets(STDIN)));

while ($product = trim(fgets(STDIN))) {
    if ($product == "done") break;

    $index = array_search($product, $products);
    $quantity = $quantities[$index];
    $price = $prices[$index];

    echo "$product costs: $price; Available quantity: $quantity\n";
}
?>