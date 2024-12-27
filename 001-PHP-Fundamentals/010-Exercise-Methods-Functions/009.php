<?php
function isPalindrome($n) {
    return strval($n) == strrev($n);
}

$input = [123, 323, 421, 121];
foreach ($input as $number) {
    echo isPalindrome($number) ? 'true' : 'false';
    echo "\n";
}
?>