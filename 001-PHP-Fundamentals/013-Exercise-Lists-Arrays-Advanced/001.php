<?php

$wagons = array_map('intval', explode(' ', trim(fgets(STDIN))));
$max_capacity = intval(fgets(STDIN));

while (($input = trim(fgets(STDIN))) !== 'end') {
    $commands = explode(' ', $input);
    if ($commands[0] === 'Add') {
        $wagons[] = intval($commands[1]);
    } else {
        $passengers = intval($commands[0]);
        foreach ($wagons as &$wagon) {
            if ($wagon + $passengers <= $max_capacity) {
                $wagon += $passengers;
                break;
            }
        }
    }
}

echo implode(' ', $wagons);