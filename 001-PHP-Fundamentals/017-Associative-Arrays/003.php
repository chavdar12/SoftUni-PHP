<?php

$words = array_map('strtolower', explode(" ", trim(fgets(STDIN))));
$wordCount = [];

foreach ($words as $word) {
    if (array_key_exists($word, $wordCount)) {
        $wordCount[$word]++;
    } else {
        $wordCount[$word] = 1;
    }
}

$result = [];
foreach ($wordCount as $word => $count) {
    if ($count % 2 != 0) {
        $result[] = $word;
    }
}

echo implode(" ", $result) . "\n";

?>