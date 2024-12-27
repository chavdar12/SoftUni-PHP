<?php
$distances = array_map('intval', explode(" ", trim(fgets(STDIN))));
$removedSum = 0;

while (count($distances) > 0) {
    $index = intval(fgets(STDIN));

    if ($index < 0) {
        $index = 0;
    } elseif ($index >= count($distances)) {
        $index = count($distances) - 1;
    }

    $removed = $distances[$index];
    $removedSum += $removed;

    array_splice($distances, $index, 1);

    foreach ($distances as &$distance) {
        if ($distance <= $removed) {
            $distance += $removed;
        } else {
            $distance -= $removed;
        }
    }
}

echo $removedSum . "\n";
?>