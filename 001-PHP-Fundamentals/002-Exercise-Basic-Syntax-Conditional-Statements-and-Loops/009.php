<?php
$money = floatval(readline());
$students = intval(readline());
$lightsaberPrice = floatval(readline());
$robePrice = floatval(readline());
$beltPrice = floatval(readline());

$lightsabersCount = ceil($students * 1.1);
$beltsCount = $students - floor($students / 6);
$totalCost = ($lightsabersCount * $lightsaberPrice) + ($students * $robePrice) + ($beltsCount * $beltPrice);

if ($totalCost <= $money) {
    echo "The money is enough - it would cost " . number_format($totalCost, 2) . "lv.";
} else {
    echo "Ivan Cho will need " . number_format($totalCost - $money, 2) . "lv more.";
}
