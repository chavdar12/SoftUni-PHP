<?php
$array = array_map('intval', explode(' ', fgets(STDIN)));
$sum = 0;
$i = 0;
while ($i >= 0 && $i < count($array)) {
    $sum += $array[$i];
    $step = $array[$i];
    $array[$i] = 0; // Mark the current position as visited
    if ($i + step < count($array)) {
        $i += $step;
    } elseif ($i - step >= 0) {
        $i -= $step;
    } else {
        break;
    }
}
echo $sum . PHP_EOL;
