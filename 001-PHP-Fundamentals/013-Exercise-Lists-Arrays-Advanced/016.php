<?php
$list1 = array_map('intval', explode(" ", trim(fgets(STDIN))));
$list2 = array_map('intval', explode(" ", trim(fgets(STDIN))));

$combined = [];
while (count($list1) > 0 && count($list2) > 0) {
    $combined[] = array_shift($list1);
    $combined[] = array_pop($list2);
}

$range = array_splice($list1, 0, 2);

$filtered = array_filter($combined, function($value) use ($range) {
    return $value >= $range[0] && $value <= $range[1];
});

sort($filtered);
echo implode(" ", $filtered) . "\n";
?>