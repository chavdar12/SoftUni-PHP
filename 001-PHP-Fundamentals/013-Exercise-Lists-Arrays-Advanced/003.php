<?php

$commands_count = intval(trim(fgets(STDIN)));
$guests = [];

for ($i = 0; $i < $commands_count; $i++) {
    $input = trim(fgets(STDIN));
    $commands = explode(' ', $input);
    $name = $commands[0];

    if ($commands[1] === 'is' && $commands[2] === 'going!') {
        if (in_array($name, $guests)) {
            echo "$name is already in the list!\n";
        } else {
            $guests[] = $name;
        }
    } elseif ($commands[1] === 'is' && $commands[2] === 'not' && $commands[3] === 'going!') {
        if (in_array($name, $guests)) {
            unset($guests[array_search($name, $guests)]);
        } else {
            echo "$name is not in the list!\n";
        }
    }
}

echo implode("\n", $guests);