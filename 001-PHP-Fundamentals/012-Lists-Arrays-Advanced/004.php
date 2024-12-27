<?php
$n = intval(fgets(STDIN));
$products = [];

for ($i = 0; $i < $n; $i++) {
    $products[] = trim(fgets(STDIN));
}

sort($products);

foreach ($products as $index => $product) {
    echo ($index + 1) . '.' . $product . "\n";
}
?>