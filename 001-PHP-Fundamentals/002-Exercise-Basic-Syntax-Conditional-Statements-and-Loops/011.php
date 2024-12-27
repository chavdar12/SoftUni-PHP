<?php
$batches = intval(readline());
$totalBoxes = 0;

define('CUP_GRAMS', 140);
define('BIG_SPOON_GRAMS', 80);
define('SMALL_SPOON_GRAMS', 20);
define('SINGLE_COOKIE_GRAMS', 25);

for ($i = 0; $i < $batches; $i++) {
    $flour = intval(readline());
    $sugar = intval(readline());
    $cocoa = intval(readline());

    $flourCups = floor($flour / CUP_GRAMS);
    $sugarSpoons = floor($sugar / BIG_SPOON_GRAMS);
    $cocoaSpoons = floor($cocoa / SMALL_SPOON_GRAMS);

    if ($flourCups <= 0 || $sugarSpoons <= 0 || $cocoaSpoons <= 0) {
        echo "Ingredients are not enough for a box of cookies." . PHP_EOL;
        continue;
    }

    $cookiesPerBake = floor(($flourCups + $sugarSpoons + $cocoaSpoons) * min($flourCups, $sugarSpoons, $cocoaSpoons) / SINGLE_COOKIE_GRAMS);
    $boxes = floor($cookiesPerBake / 25);

    echo "Boxes of cookies: $boxes" . PHP_EOL;
    $totalBoxes += $boxes;
}

echo "Total boxes: $totalBoxes";
