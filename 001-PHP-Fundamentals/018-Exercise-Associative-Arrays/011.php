<?php

$juices = [];
$bottles = [];

while (true) {
    $input = trim(fgets(STDIN));

    if ($input === "End") {
        break;
    }

    list($juice, $quantity) = explode(" => ", $input);
    $quantity = intval($quantity);

    if (!isset($juices[$juice])) {
        $juices[$juice] = 0;
    }

    $juices[$juice] += $quantity;

    while ($juices[$juice] >= 1000) {
        $juices[$juice] -= 1000;
        if (!isset($bottles[$juice])) {
            $bottles[$juice] = 0;
        }
        $bottles[$juice]++;
    }
}

foreach ($bottles as $juice => $bottleCount) {
    echo "{$juice} => {$bottleCount}\n";
}
?>