<?php
$x1 = intval(trim(fgets(STDIN)));
$y1 = intval(trim(fgets(STDIN)));
$x2 = intval(trim(fgets(STDIN)));
$y2 = intval(trim(fgets(STDIN)));

$distance1 = sqrt($x1 * $x1 + $y1 * $y1);
$distance2 = sqrt($x2 * $x2 + $y2 * $y2);

if ($distance1 <= $distance2) {
    echo "($x1, $y1)";
} else {
    echo "($x2, $y2)";
}
?>