<?php
$groupSize = intval(readline());
$type = readline();
$day = readline();

$prices = [
    "Students" => ["Friday" => 8.45, "Saturday" => 9.80, "Sunday" => 10.46],
    "Business" => ["Friday" => 10.90, "Saturday" => 15.60, "Sunday" => 16.00],
    "Regular" => ["Friday" => 15.00, "Saturday" => 20.00, "Sunday" => 22.50]
];

$totalPrice = $groupSize * $prices[$type][$day];

if ($type === "Students" && $groupSize >= 30) {
    $totalPrice *= 0.85;
} elseif ($type === "Business" && $groupSize >= 100) {
    $totalPrice -= $prices[$type][$day] * 10;
} elseif ($type === "Regular" && $groupSize >= 10 && $groupSize <= 20) {
    $totalPrice *= 0.95;
}

printf("Total price: %.2f", $totalPrice);
