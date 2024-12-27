<?php

$numbers = array_map('floatval', explode(" ", trim(fgets(STDIN))));
$numberCount = [];

foreach ($numbers as $number) {
    if (array_key_exists($number, $numberCount)) {
        $numberCount[$number]++;
    } else {
        $numberCount[$number] = 1;
    }
}

ksort($numberCount);

foreach ($numberCount as $number => $count) {
    echo "$number -> $count\n";
}

?>