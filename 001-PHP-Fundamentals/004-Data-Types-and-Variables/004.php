<?php

$centuries = intval(readline());
$years = $centuries * 100;
$days = floor($years * 365.2422);
$hours = $days * 24;
$minutes = $hours * 60;

echo sprintf("%d centuries = %d years = %d days = %d hours = %d minutes",
        $centuries, $years, $days, $hours, $minutes) . PHP_EOL;
