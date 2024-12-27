<?php
$n = intval(readline());
$numbers = [];
for ($i = 0; $i < $n; $i++) {
    $numbers[] = intval(readline());
}
echo implode(" ", array_reverse($numbers));
