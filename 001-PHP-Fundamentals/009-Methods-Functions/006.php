<?php
function calculateArea($width, $length) {
    return $width * $length;
}

$width = intval(fgets(STDIN));
$length = intval(fgets(STDIN));

echo calculateArea($width, $length) . "\n";
?>