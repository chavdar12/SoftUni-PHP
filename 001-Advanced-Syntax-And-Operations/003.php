<?php
$arr = explode(' ', readline());
$found = false;

foreach ($arr as $i => $x) {
    foreach ($arr as $j => $y) {
        if ($i != $j && in_array($x . $y, $arr)) {
            echo "$x + $y == " . ($x . $y) . PHP_EOL;
            $found = true;
            break 2;
        }
    }
}

if (!$found) {
    echo "No";
}