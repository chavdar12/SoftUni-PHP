<?php
$substring = trim(fgets(STDIN));
$string = trim(fgets(STDIN));

while (str_contains($string, $substring)) {
    $string = str_replace($substring, '', $string);
}

echo $string;
?>