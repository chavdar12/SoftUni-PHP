<?php

$first = intval(readline());
$second = intval(readline());
$third = intval(readline());
$fourth = intval(readline());

$result = (($first + $second) / $third) * $fourth;
echo intval($result) . PHP_EOL;
