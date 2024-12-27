<?php

$data = explode(", ", trim(fgets(STDIN)));
$townIncome = [];

for ($i = 0; $i < count($data); $i += 2) {
    $town = $data[$i];
    $income = intval($data[$i + 1]);

    if (array_key_exists($town, $townIncome)) {
        $townIncome[$town] += $income;
    } else {
        $townIncome[$town] = $income;
    }
}

foreach ($townIncome as $town => $income) {
    echo "$town => $income\n";
}

?>