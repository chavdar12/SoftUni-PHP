<?php
$arr = array_map('intval', explode(' ', trim(fgets(STDIN))));
$result = [];

for ($i = 0; $i < ceil(count($arr) / 2); $i++) {
    $result[] = $arr[$i] + $arr[count($arr) - 1 - $i];
}

echo implode(' ', $result);
?>