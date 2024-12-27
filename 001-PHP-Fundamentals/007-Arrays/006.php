<?php
$numbers = explode(" ", readline());
$evenSum = 0;
$oddSum = 0;
foreach ($numbers as $num) {
    if ($num % 2 == 0) {
        $evenSum += $num;
    } else {
        $oddSum += $num;
    }
}
echo $evenSum - $oddSum;
