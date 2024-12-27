<?php
$numbers = explode(" ", readline());
foreach ($numbers as $num) {
    echo number_format(round(floatval($num), 2), 2) . " => " . round(floatval($num)) . PHP_EOL;
}
