<?php
$array = explode(" ", readline());
$topIntegers = [];
for ($i = 0; $i < count($array); $i++) {
    $isTopInteger = true;
    for ($j = $i + 1; $j < count($array); $j++) {
        if ($array[$i] <= $array[$j]) {
            $isTopInteger = false;
            break;
        }
    }
    if ($isTopInteger) {
        $topIntegers[] = $array[$i];
    }
}
echo implode(" ", $topIntegers);
