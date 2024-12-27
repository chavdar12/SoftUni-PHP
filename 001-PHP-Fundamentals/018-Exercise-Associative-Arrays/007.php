<?php

$materialThreshold = [
    'Shards' => 250,
    'Fragments' => 250,
    'Motes' => 250
];

$materials = [
    'Shards' => 0,
    'Fragments' => 0,
    'Motes' => 0
];

$junk = [];

while (true) {
    $input = trim(fgets(STDIN));
    if ($input === "stop") break;

    $parts = explode(" ", $input);
    for ($i = 0; $i < count($parts); $i += 2) {
        $quantity = intval($parts[$i]);
        $material = ucfirst(strtolower($parts[$i + 1]));

        if (array_key_exists($material, $materials)) {
            $materials[$material] += $quantity;
            if ($materials[$material] >= $materialThreshold[$material]) {
                $legendaryItem = $material === 'Shards' ? 'Shadowmourne' : ($material === 'Fragments' ? 'Valanyr' : 'Dragonwrath');
                echo "$legendaryItem obtained!\n";
                $materials[$material] -= $materialThreshold[$material];
                break 2;
            }
        } else {
            if (!isset($junk[$material])) {
                $junk[$material] = 0;
            }
            $junk[$material] += $quantity;
        }
    }
}

foreach ($materials as $material => $quantity) {
    echo "$material: $quantity\n";
}

ksort($junk);
foreach ($junk as $material => $quantity) {
    echo "$material: $quantity\n";
}
?>