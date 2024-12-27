<?php
$array = array_map('intval', explode(" ", trim(fgets(STDIN))));
$middle = floor(count($array) / 2);

$leftTime = 0;
$rightTime = 0;

for ($i = 0; $i < $middle; $i++) {
    $leftTime += $array[$i];
    if ($array[$i] == 0) {
        $leftTime *= 0.8;
    }
}

for ($i = count($array) - 1; $i > $middle; $i--) {
    $rightTime += $array[$i];
    if ($array[$i] == 0) {
        $rightTime *= 0.8;
    }
}

if ($leftTime < $rightTime) {
    echo "The winner is left with total time: " . number_format($leftTime, 1) . "\n";
} else {
    echo "The winner is right with total time: " . number_format($rightTime, 1) . "\n";
}
?>