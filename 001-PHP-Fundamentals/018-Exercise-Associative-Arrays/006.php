<?php

$companies = [];

while (true) {
    $input = trim(fgets(STDIN));
    if ($input === "End") break;

    $parts = explode(" -> ", $input);
    $companyName = $parts[0];
    $employeeId = $parts[1];

    if (!isset($companies[$companyName])) {
        $companies[$companyName] = [];
    }

    $companies[$companyName][$employeeId] = true;
}

ksort($companies);

foreach ($companies as $companyName => $employees) {
    echo "$companyName\n";
    foreach (array_keys($employees) as $id) {
        echo "-- $id\n";
    }
}
?>