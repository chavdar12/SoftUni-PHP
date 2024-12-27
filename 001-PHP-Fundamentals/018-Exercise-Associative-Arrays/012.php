<?php

$n = intval(trim(fgets(STDIN)));
$products = [];

for ($i = 0; $i < $n; $i++) {
    list($name, $price) = explode(" : ", trim(fgets(STDIN)));
    $products[] = ['name' => $name, 'price' => floatval($price)];
}

usort($products, function ($a, $b) {
    return strcasecmp($a['name'], $b['name']);
});

$grouped = [];

foreach ($products as $product) {
    $initial = strtoupper($product['name'][0]);
    if (!isset($grouped[$initial])) {
        $grouped[$initial] = [];
    }
    $grouped[$initial][] = $product;
}

foreach ($grouped as $initial => $group) {
    echo "{$initial}\n";
    usort($group, function ($a, $b) {
        return strcmp($a['name'], $b['name']);
    });
    foreach ($group as $product) {
        echo "  {$product['name']}: {$product['price']}\n";
    }
}
?>