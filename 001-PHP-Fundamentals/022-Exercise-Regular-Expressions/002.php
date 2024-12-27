<?php
$totalMoney = 0;
$items = [];

while (true) {
    $input = trim(fgets(STDIN));
    if ($input === "Purchase") {
        break;
    }

    $pattern = '/>>([A-Za-z\s]+)<<(\d+(\.\d+)?)!(\d+)/';
    if (preg_match($pattern, $input, $matches)) {
        $name = $matches[1];
        $price = floatval($matches[2]);
        $quantity = intval($matches[4]);
        $totalMoney += $price * $quantity;
        $items[] = $name;
    }
}

echo "Bought furniture:\n";
foreach ($items as $item) {
    echo $item . PHP_EOL;
}
echo "Total money spend: " . number_format($totalMoney, 2, '.', '') . PHP_EOL;
?>