<?php
$str = readline();
$occurrences = array_count_values(str_split($str));

foreach ($occurrences as $char => $count) {
    echo "$char: $count" . PHP_EOL;
}