<?php
$arr = array_map('floatval', explode(' ', trim(fgets(STDIN))));

for ($i = 0; $i < count($arr) - 1; $i++) {
    if ($arr[$i] == $arr[$i + 1]) {
        $arr[$i] += $arr[$i + 1];
        array_splice($arr, $i + 1, 1);
        $i = -1;
    }
}

echo implode(' ', $arr);
?>