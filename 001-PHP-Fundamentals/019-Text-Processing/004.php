<?php
$banList = explode(', ', trim(fgets(STDIN)));
$text = trim(fgets(STDIN));

foreach ($banList as $word) {
    $text = str_replace($word, str_repeat('*', strlen($word)), $text);
}

echo $text;
?>