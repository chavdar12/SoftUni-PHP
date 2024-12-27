<?php

$dragons = [];

$n = intval(trim(fgets(STDIN)));

for ($i = 0; $i < $n; $i++) {
    $input = trim(fgets(STDIN));
    list($type, $name, $damage, $health, $armor) = explode(" ", $input);

    if ($damage === "null") $damage = 45;
    if ($health === "null") $health = 250;
    if ($armor === "null") $armor = 10;

    $dragons[$type][$name] = [
        'damage' => intval($damage),
        'health' => intval($health),
        'armor' => intval($armor),
    ];
}

foreach ($dragons as $type => $dragonsByType) {
    $totalDamage = $totalHealth = $totalArmor = 0;
    $dragonCount = count($dragonsByType);

    foreach ($dragonsByType as $stats) {
        $totalDamage += $stats['damage'];
        $totalHealth += $stats['health'];
        $totalArmor += $stats['armor'];
    }

    $avgDamage = number_format($totalDamage / $dragonCount, 2);
    $avgHealth = number_format($totalHealth / $dragonCount, 2);
    $avgArmor = number_format($totalArmor / $dragonCount, 2);

    echo "{$type}::({$avgDamage}/{$avgHealth}/{$avgArmor})\n";

    ksort($dragonsByType);
    foreach ($dragonsByType as $name => $stats) {
        echo "-{$name} -> damage: {$stats['damage']}, health: {$stats['health']}, armor: {$stats['armor']}\n";
    }
}
?>