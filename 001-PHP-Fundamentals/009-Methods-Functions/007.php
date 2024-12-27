<?php
function calculatePower($num, $power) {
    return pow($num, $power);
}

$num = intval(fgets(STDIN));
$power = intval(fgets(STDIN));

echo calculatePower($num, $power) . "\n";
?>