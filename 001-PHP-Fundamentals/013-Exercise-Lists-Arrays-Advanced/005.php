<?php

$arr = array_map('intval', explode(' ', trim(fgets(STDIN))));
$bomb_info = explode(' ', trim(fgets(STDIN)));
$bomb = intval($bomb_info[0]);
$power = intval($bomb_info[1]);

while (($index = array_search($bomb, $arr)) !== false) {
    $start = max(0, $index - $power);
    $end = min(count($arr) - 1, $index + $power);
    array_splice($arr, $start, $end - $start + 1);
}

echo array_sum($arr);