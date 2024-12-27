<?php
$numbers = [];
for ($i = 0; $i < 3; $i++) {
    $numbers[] = floatval(readline());
}

rsort($numbers);

foreach ($numbers as $number) {
    echo $number . PHP_EOL;
}
