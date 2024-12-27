<?php

$dwarfs = [];

while (true) {
    $input = trim(fgets(STDIN));

    if ($input === "Once upon a time") {
        break;
    }

    list($name, $hatColor, $physics) = explode(" <:> ", $input);
    $physics = intval($physics);

    if (!isset($dwarfs[$name][$hatColor]) || $dwarfs[$name][$hatColor] < $physics) {
        $dwarfs[$name][$hatColor] = $physics;
    }
}

uasort($dwarfs, function ($a, $b) {
    return array_sum($b) - array_sum($a);
});

foreach ($dwarfs as $name => $colors) {
    foreach ($colors as $hatColor => $physics) {
        echo "({$hatColor}) {$name} <-> {$physics}\n";
    }
}
?>