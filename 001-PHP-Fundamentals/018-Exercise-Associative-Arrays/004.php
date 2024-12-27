<?php

$cards = [];

while (true) {
    $input = trim(fgets(STDIN));
    if ($input === 'JOKER') {
        break;
    }

    list($name, $cardString) = explode(": ", $input);
    $cardsList = explode(", ", $cardString);

    if (!isset($cards[$name])) {
        $cards[$name] = [];
    }

    foreach ($cardsList as $card) {
        $cardParts = explode(" ", $card);
        $power = $cardParts[0];
        $type = $cardParts[1];

        // If card already exists discard it
        if (!in_array($card, $cards[$name])) {
            $cards[$name][] = $card;
        }
    }
}

$cardValues = [
    "2" => 2, "3" => 3, "4" => 4, "5" => 5, "6" => 6, "7" => 7,
    "8" => 8, "9" => 9, "10" => 10, "J" => 11, "Q" => 12, "K" => 13, "A" => 14
];

$cardTypes = [
    "S" => 4, "H" => 3, "D" => 2, "C" => 1
];

foreach ($cards as $name => $cardsList) {
    $totalValue = 0;
    foreach ($cardsList as $card) {
        list($power, $type) = explode(" ", $card);
        $totalValue += $cardValues[$power] * $cardTypes[$type];
    }
    echo "$name: $totalValue\n";
}

?>