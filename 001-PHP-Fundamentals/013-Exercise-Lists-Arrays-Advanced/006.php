<?php

$arr = array_map('intval', explode(' ', trim(fgets(STDIN))));

while (($input = trim(fgets(STDIN))) !== 'end') {
    $index = intval($input[0]);
    array_splice($arr, $index, 0, $input);
}

echo implode(' ', $arr);