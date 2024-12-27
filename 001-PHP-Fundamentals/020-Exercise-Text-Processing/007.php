<?php
$string = trim(fgets(STDIN));
$strength = 0;
$explodedString = '';

for ($i = 0; $i < strlen($string); $i++) {
    if ($string[$i] === '>') {
        $strength += (int)$string[$i + 1];
    } elseif ($strength > 0) {
        $strength--;
    } else {
        $explodedString .= $string[$i];
    }
}

echo $explodedString;
?>