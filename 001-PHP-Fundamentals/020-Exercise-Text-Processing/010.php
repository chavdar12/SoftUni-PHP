<?php
$string = trim(fgets(STDIN));
$type = trim(fgets(STDIN));

$sum = 0;

if ($type === "UPPERCASE") {
    foreach (str_split($string) as $char) {
        if (ctype_upper($char)) {
            $sum += ord($char);
        }
    }
} elseif ($type === "LOWERCASE") {
    foreach (str_split($string) as $char) {
        if (ctype_lower($char)) {
            $sum += ord($char);
        }
    }
}

echo "The total sum is: $sum\n";
?>