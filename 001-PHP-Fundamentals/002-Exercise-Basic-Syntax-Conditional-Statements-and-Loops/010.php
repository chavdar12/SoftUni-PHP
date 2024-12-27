<?php
$lostGames = intval(readline());
$headsetPrice = floatval(readline());
$mousePrice = floatval(readline());
$keyboardPrice = floatval(readline());
$displayPrice = floatval(readline());

$headsetsBroken = floor($lostGames / 2);
$miceBroken = floor($lostGames / 3);
$keyboardsBroken = floor($lostGames / 6);
$displaysBroken = floor($keyboardsBroken / 2);

$totalCost = ($headsetsBroken * $headsetPrice) + ($miceBroken * $mousePrice) + ($keyboardsBroken * $keyboardPrice) + ($displaysBroken * $displayPrice);
echo "Rage expenses: " . number_format($totalCost, 2) . " lv.";
