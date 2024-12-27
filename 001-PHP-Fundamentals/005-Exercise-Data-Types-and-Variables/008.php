<?php
$n = intval(readline());
$maxValue = 0;
for ($i = 0; $i < $n; $i++) {
    $snow = intval(readline());
    $time = intval(readline());
    $quality = intval(readline());
    $value = pow($snow / $time, $quality);
    if ($value > $maxValue) {
        $maxValue = $value;
        $bestSnow = $snow;
        $bestTime = $time;
        $bestQuality = $quality;
    }
}
echo "$bestSnow : $bestTime = $maxValue ($bestQuality)" . PHP_EOL;
