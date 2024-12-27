<?php

$forceUsers = [];

while (true) {
    $input = trim(fgets(STDIN));
    if ($input === "Lumpawaroo") break;

    if (strpos($input, "|") !== false) {
        list($forceSide, $forceUser) = explode(" | ", $input);
    } else {
        list($forceUser, $forceSide) = explode(" -> ", $input);
    }

    if (!isset($forceUsers[$forceUser])) {
        $forceUsers[$forceUser] = $forceSide;
        echo "$forceUser joins the $forceSide side!\n";
    } else {
        $forceUsers[$forceUser] = $forceSide;
        echo "$forceUser joins the $forceSide side!\n";
    }
}

$forceSides = [];

foreach ($forceUsers as $user => $side) {
    if (!isset($forceSides[$side])) {
        $forceSides[$side] = [];
    }
    $forceSides[$side][] = $user;
}

ksort($forceSides);

foreach ($forceSides as $side => $users) {
    echo "Side: $side, Members: " . count($users) . "\n";
    sort($users);
    foreach ($users as $user) {
        echo "! $user\n";
    }
}
?>