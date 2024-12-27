<?php
$n = intval(trim(fgets(STDIN)));
$attackedPlanets = [];
$destroyedPlanets = [];

$starChars = ['s', 't', 'a', 'r'];

for ($i = 0; $i < $n; $i++) {
    $message = trim(fgets(STDIN));
    $key = 0;

    foreach (str_split(strtolower($message)) as $char) {
        if (in_array($char, $starChars)) {
            $key++;
        }
    }

    $decryptedMessage = '';
    foreach (str_split($message) as $char) {
        $decryptedMessage .= chr(ord($char) - $key);
    }

    preg_match('/@([a-zA-Z]+):(\d+)!([AD])!->(\d+)/', $decryptedMessage, $matches);

    if ($matches) {
        $planetName = $matches[1];
        $population = $matches[2];
        $attackType = $matches[3];
        $soldierCount = $matches[4];

        if ($attackType == 'A') {
            $attackedPlanets[] = $planetName;
        } else {
            $destroyedPlanets[] = $planetName;
        }
    }
}

sort($attackedPlanets);
sort($destroyedPlanets);

echo "Attacked planets: " . count($attackedPlanets) . "\n";
foreach ($attackedPlanets as $planet) {
    echo "-> " . $planet . "\n";
}

echo "Destroyed planets: " . count($destroyedPlanets) . "\n";
foreach ($destroyedPlanets as $planet) {
    echo "-> " . $planet . "\n";
}
?>