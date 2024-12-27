<?php
$text = trim(fgets(STDIN));
$word = trim(fgets(STDIN));

$words = preg_split('/[\s,?.!]+/', $text);
$count = 0;

foreach ($words as $w) {
    if ($w === $word) {
        $count++;
    }
}

echo $count;
?>