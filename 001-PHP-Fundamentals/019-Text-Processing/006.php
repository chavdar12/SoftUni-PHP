<?php
$text = trim(fgets(STDIN));
$words = preg_split('/[\s,?.!]+/', $text);
$palindromes = [];

foreach ($words as $word) {
    if ($word === strrev($word) && !in_array($word, $palindromes)) {
        $palindromes[] = $word;
    }
}

sort($palindromes, SORT_NATURAL);
echo implode(', ', $palindromes);
?>