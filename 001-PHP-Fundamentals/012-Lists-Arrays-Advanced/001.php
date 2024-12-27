<?php
$arr = array_map('intval', explode(' ', trim(fgets(STDIN))));

$arr = array_filter($arr, function($x) { return $x >= 0; });
$arr = array_reverse($arr);

if (empty($arr)) {
    echo "empty";
} else {
    echo implode(' ', $arr);
}
?>