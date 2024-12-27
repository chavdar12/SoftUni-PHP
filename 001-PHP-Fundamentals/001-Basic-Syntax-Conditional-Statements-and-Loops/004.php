<?php
$hours = intval(readline());
$minutes = intval(readline());

$totalMinutes = $hours * 60 + $minutes + 30;
$newHours = intdiv($totalMinutes, 60) % 24;
$newMinutes = $totalMinutes % 60;

printf("%d:%02d\n", $newHours, $newMinutes);
