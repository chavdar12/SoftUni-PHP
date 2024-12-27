<?php
$numbers = explode(" ", readline());
$sum = 0;
foreach ($numbers as $num) {
    if ($num % 2 == 0) {
        $sum += $num;
    }
}
echo $sum;
