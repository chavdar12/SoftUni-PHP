<?php
$array = explode(" ", trim(fgets(STDIN)));

while (true) {
    $command = trim(fgets(STDIN));
    if ($command == "end") {
        break;
    }

    $commandParts = explode(" ", $command);
    $action = $commandParts[0];

    if ($action == "swap") {
        $index1 = (int) $commandParts[1];
        $index2 = (int) $commandParts[2];
        $temp = $array[$index1];
        $array[$index1] = $array[$index2];
        $array[$index2] = $temp;
    } elseif ($action == "multiply") {
        $index1 = (int) $commandParts[1];
        $index2 = (int) $commandParts[2];
        $array[$index1] *= $array[$index2];
    } elseif ($action == "decrease") {
        $number = (int) $commandParts[1];
        foreach ($array as &$value) {
            $value -= $number;
        }
    } elseif ($action == "increase") {
        $number = (int) $commandParts[1];
        foreach ($array as &$value) {
            $value += $number;
        }
    } elseif ($action == "remove") {
        $index = (int) $commandParts[1];
        array_splice($array, $index, 1);
    }
}

echo implode(", ", $array) . "\n";
?>