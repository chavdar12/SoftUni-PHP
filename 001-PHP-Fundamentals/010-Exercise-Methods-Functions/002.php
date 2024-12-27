<?php
function countVowels($string) {
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $count = 0;
    foreach (str_split($string) as $char) {
        if (in_array(strtolower($char), $vowels)) {
            $count++;
        }
    }
    return $count;
}

echo countVowels('SoftUni');
?>