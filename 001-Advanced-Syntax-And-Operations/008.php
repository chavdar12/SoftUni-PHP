<?php
$str = readline();
if (empty($str)) {
    return;
}

$occurrences = [];
for ($i = 0, $len = strlen($str); $i < $len; $i++) {
    $occurrences[$str[$i]] = ($occurrences[$str[$i]] ?? 0) + 1;
}

uksort($occurrences, function ($k1, $k2) use ($occurrences) {
    $cmp = $occurrences[$k2] <=> $occurrences[$k1];
    return $cmp !== 0 ? $cmp : $k2 <=> $k1;
});

foreach ($occurrences as $char => $count) {
    echo $char . ": " . $count . PHP_EOL;
}