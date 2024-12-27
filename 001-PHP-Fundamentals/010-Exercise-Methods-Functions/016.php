<?php
$x1 = intval(trim(fgets(STDIN)));
$y1 = intval(trim(fgets(STDIN)));
$x2 = intval(trim(fgets(STDIN)));
$y2 = intval(trim(fgets(STDIN)));

$x3 = intval(trim(fgets(STDIN)));
$y3 = intval(trim(fgets(STDIN)));
$x4 = intval(trim(fgets(STDIN)));
$y4 = intval(trim(fgets(STDIN)));

$distance1 = sqrt($x1 * $x1 + $y1 * $y1) + sqrt($x2 * $x2 + $y2 * $y2);
$distance2 = sqrt($x3 * $x3 + $y3 * $y3) + sqrt($x4 * $x4 + $y4 * $y4);

if ($distance1 >= $distance2) {
    echo "($x1, $y1)($x2, $y2)";
} else {
    echo "($x3, $y3)($x4, $y4)";
}
?>