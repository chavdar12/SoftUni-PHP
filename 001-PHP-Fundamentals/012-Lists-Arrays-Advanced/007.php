<?php
$arr1 = array_map('intval', explode(' ', trim(fgets(STDIN))));
$arr2 = array_map('intval', explode(' ', trim(fgets(STDIN))));

$result = [];

$min_length = min(count($arr1), count($arr2));

for ($i = 0; $i < $min_length; $i++) {
    $result[] = $arr1[$i];
    $result[] = $arr2[$i];
}

if (count($arr1) > $min_length) {
    $result = array_merge($result, array_slice($arr1, $min_length));
} elseif (count($arr2) > $min_length) {
    $result = array_merge($result, array_slice($arr2, $min_length));
}

echo implode(' ', $result);
?>