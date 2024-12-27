<?php

$arr = array_map('intval', explode(' ', trim(fgets(STDIN))));

while (($input = trim(fgets(STDIN))) !== 'End') {
    $commands = explode(' ', $input);
    if ($commands[0] === 'Add') {
        $arr[] = intval($commands[1]);
    } elseif ($commands[0] === 'Insert') {
        if ($commands[2] >= 0 && $commands[2] < count($arr)) {
            array_splice($arr, $commands[2], 0, $commands[1]);
        } else {
            echo "Invalid index\n";
        }
    } elseif ($commands[0] === 'Remove') {
        if ($commands[1] >= 0 && $commands[1] < count($arr)) {
            array_splice($arr, $commands[1], 1);
        } else {
            echo "Invalid index\n";
        }
    } elseif ($commands[0] === 'Shift' && $commands[1] === 'left') {
        $count = intval($commands[2]);
        for ($i = 0; $i < $count; $i++) {
            array_push($arr, array_shift($arr));
        }
    } elseif ($commands[0] === 'Shift' && $commands[1] === 'right') {
        $count = intval($commands[2]);
        for ($i = 0; $i < $count; $i++) {
            array_unshift($arr, array_pop($arr));
        }
    }
}

echo implode(' ', $arr);