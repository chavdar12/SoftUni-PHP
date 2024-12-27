<?php

function DoF(string $day): string
{
    $week = [
        "Monday",
        "Tuesday",
        "Wednesday",
        "Thursday",
        "Friday",
        "Saturday",
        "Sunday"
    ];
    $dayIndex = array_search($day, $week);
    return $dayIndex !== false ? $dayIndex + 1 : "Invalid day!";
}

echo DoF(readline());