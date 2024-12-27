<?php
$array = array_map('intval', explode(' ', fgets(STDIN)));
$n = count($array);
$len = array_fill(0, $n, 1);
$prev = array_fill(0, $n, -1);
for ($i = 1; $i < $n; $i++) {
    for ($j = 0; $j < $i; $j++) {
        if ($array[$i] > $array[$j] && $len[$i] < $len[$j] + 1) {
            $len[$i] = $len[$j] + 1;
            $prev[$i] = $j;
        }
    }
}
$max_len = max($len);
$index = array_search($max_len, $len);
$sequence = [];
while ($index != -1) {
    array_unshift($sequence, $array[$index]);
    $index = $prev[$index];
}
echo implode(' ', $sequence) . PHP_EOL;