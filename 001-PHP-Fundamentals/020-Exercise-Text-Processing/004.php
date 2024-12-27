<?php
$text = trim(fgets(STDIN));
$encrypted = '';

foreach (str_split($text) as $char) {
    if (ctype_alpha($char)) {
        $shift = ord($char) + 3;
        if (($char >= 'a' && $char <= 'z' && $shift > 'z') || ($char >= 'A' && $char <= 'Z' && $shift > 'Z')) {
            $shift -= 26;
        }
        $encrypted .= chr($shift);
    } else {
        $encrypted .= $char;
    }
}

echo $encrypted;
?>