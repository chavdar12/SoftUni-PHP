<?php
$n = intval(readline());
$array1 = [];
$array2 = [];
for ($i = 0; $i < $n; $i++) {
    list($a, $b) = explode(" ", readline());
    $array1[] = $a;
    $array2[] = $b;
}
echo implode(" ", $array1) . " " . implode(" ", $array2);
