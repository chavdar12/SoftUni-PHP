<?php
$n = intval(readline());
$arr = array_map('intval', array_map('readline', array_fill(0, $n, '')));
echo implode(' ', array_reverse($arr));