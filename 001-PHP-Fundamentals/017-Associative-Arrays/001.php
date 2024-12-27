<?php

$text = trim(fgets(STDIN));
$charCount = [];

foreach (str_split($text) as $char) {
    if (array_key_exists($char, $charCount)) {
        $charCount[$char]++;
    } else {
        $charCount[$char] = 1;
    }
}

foreach ($charCount as $char => $count) {
    echo "$char -> $count\n";
}

?>