<?php
$participants = explode(', ', trim(fgets(STDIN)));
$distances = [];

while (true) {
    $input = trim(fgets(STDIN));
    if ($input === "end of race") {
        break;
    }

    $name = preg_replace('/[^A-Za-z]/', '', $input);
    $distance = array_sum(array_map('intval', str_split(preg_replace('/[^0-9]/', '', $input))));

    if (in_array($name, $participants)) {
        if (!isset($distances[$name])) {
            $distances[$name] = 0;
        }
        $distances[$name] += $distance;
    }
}

arsort($distances);
$rank = 1;
foreach ($distances as $name => $distance) {
    if ($rank <= 3) {
        echo "{$rank}st place: {$name}\n";
        $rank++;
    }
}
?>