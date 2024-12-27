<?php

$arr = array_map('intval', explode(' ', trim(fgets(STDIN))));

while (($input = trim(fgets(STDIN))) !== 'Odd' && $input !== 'Even') {
    $commands = explode(' ', $input);
    if ($commands[0] === 'Delete') {
        $arr = array_filter($arr, fn($val) => $val != $commands[1]);
        $arr = array_values($arr);
    } elseif ($commands[0] === 'Insert') {
        array_splice($arr, $commands[2], 0, $commands[1]);
    }
}

if ($input === 'Odd') {
    echo implode(' ', array_filter($arr, fn($val) => $val % 2 !== 0));
} else {
    echo implode(' ', array_filter($arr, fn($val) => $val % 2 === 0));
}