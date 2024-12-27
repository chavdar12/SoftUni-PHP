<?php
$number = intval(readline());
$startMultiplier = intval(readline());

for ($i = $startMultiplier; $i <= 10; $i++) {
    echo "$number X $i = " . ($number * $i) . PHP_EOL;
}

if ($startMultiplier > 10) {
    echo "$number X $startMultiplier = " . ($number * $startMultiplier) . PHP_EOL;
}
