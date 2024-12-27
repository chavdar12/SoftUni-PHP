<?php
$games = [
    "OutFall 4" => 39.99,
    "CS: OG" => 15.99,
    "Zplinter Zell" => 19.99,
    "Honored 2" => 59.99,
    "RoverWatch" => 29.99,
    "RoverWatch Origins Edition" => 39.99,
];

$balance = floatval(readline());
$totalSpent = 0;

while (true) {
    $game = readline();

    if ($game === "Game Time") break;

    if (array_key_exists($game, $games)) {
        if ($balance >= $games[$game]) {
            $balance -= $games[$game];
            $totalSpent += $games[$game];
            echo "Bought $game" . PHP_EOL;
        } else {
            echo "Too Expensive" . PHP_EOL;
        }
    } else {
        echo "Not Found" . PHP_EOL;
    }

    if ($balance == 0) {
        echo "Out of money!" . PHP_EOL;
        break;
    }
}

echo "Total spent: $" . number_format($totalSpent, 2) . ". Remaining: $" . number_format($balance, 2) . PHP_EOL;
