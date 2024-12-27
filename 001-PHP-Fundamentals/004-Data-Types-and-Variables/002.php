<?php

$radius = floatval(readline());
$area = pi() * $radius * $radius;
echo sprintf("%.12f", $area) . PHP_EOL;
