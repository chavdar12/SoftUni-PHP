<?php
$matrix = [];
$rows = intval(readline());

for ($i = 0; $i < $rows; $i++) {
    $matrix[] = explode(" ", readline());
}

$max = max(array_map('max', $matrix));
echo $max;