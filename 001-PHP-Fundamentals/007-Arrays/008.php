<?php
$numbers = explode(" ", readline());

while (count($numbers) > 1) {
    $temp = [];
    for ($i = 0; $i < count($numbers) - 1; $i++) {
        $temp[] = $numbers[$i] + $numbers[$i + 1];
    }
    $numbers = $temp;
}

echo $numbers[0];