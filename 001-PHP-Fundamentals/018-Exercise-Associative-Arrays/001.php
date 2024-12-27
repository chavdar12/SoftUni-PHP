<?php
$resources = [];
while (true) {
    $type = trim(fgets(STDIN));
    if ($type == "stop") break;

    $karats = intval(fgets(STDIN));

    if (!isset($resources[$type])) {
        $resources[$type] = 0;
    }

    $resources[$type] += $karats;
}

foreach ($resources as $type => $karats) {
    echo "$type -> $karats K\n";
}
?>