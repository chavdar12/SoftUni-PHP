<?php
$array = [];
while (true) {
    $command = trim(fgets(STDIN));
    if ($command == "Print") {
        break;
    }

    $commandParts = explode(" ", $command);
    $action = $commandParts[0];

    if ($action == "Push") {
        array_unshift($array, $commandParts[1]);
    } elseif ($action == "Add") {
        array_push($array, $commandParts[1]);
    } elseif ($action == "Pop") {
        array_shift($array);
    } elseif ($action == "Enqueue") {
        array_pop($array);
    }
}

echo implode(" ", $array) . "\n";
?>