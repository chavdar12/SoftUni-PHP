<?php
function middleCharacter($string) {
    $len = strlen($string);
    if ($len % 2 == 0) {
        echo substr($string, $len / 2 - 1, 2);
    } else {
        echo $string[$len / 2];
    }
}

middleCharacter('aString');
?>