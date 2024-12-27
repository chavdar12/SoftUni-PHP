<?php
$input = trim(fgets(STDIN));
$demons = explode(', ', $input);

function calculateHealth($name): int
{
    $health = 0;
    for ($i = 0; $i < strlen($name); $i++) {
        if (ctype_alpha($name[$i])) {
            $health += ord($name[$i]);
        }
    }
    return $health;
}

function calculateDamage($name): float|int
{
    $damage = 0;
    $multiplyingFactor = 1;

    preg_match_all('/[+-]?\d+\.?\d*/', $name, $matches);
    foreach ($matches[0] as $num) {
        $damage += floatval($num);
    }

    if (str_contains($name, '*')) {
        $multiplyingFactor *= 2;
    }
    if (str_contains($name, '/')) {
        $multiplyingFactor /= 2;
    }

    return $damage * $multiplyingFactor;
}

$demonsInfo = [];

foreach ($demons as $demon) {
    $health = calculateHealth($demon);
    $damage = calculateDamage($demon);
    $demonsInfo[$demon] = ['health' => $health, 'damage' => $damage];
}

ksort($demonsInfo);

foreach ($demonsInfo as $demon => $info) {
    echo "{$demon} - {$info['health']} health, " . number_format($info['damage'], 2) . " damage\n";
}
?>