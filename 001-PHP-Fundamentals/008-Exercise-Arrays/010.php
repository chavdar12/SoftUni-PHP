<?php
$n = intval(fgets(STDIN));
$strings = [];
for ($i = 0; $i < $n; $i++) {
    $strings[] = trim(fgets(STDIN));
}
$values = [];
foreach ($strings as $string) {
    $sum = 0;
    $length = strlen($string);
    for ($i = 0; $i < $length; $i++) {
        $char = $string[$i];
        $ascii = ord($char);
        if (in_array($char, ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'])) {
            $sum += $ascii * $length;
        } else {
            $sum += intdiv($ascii, $length);
        }
    }
    $values[] = $sum;
}
sort($values);
echo implode(' ', $values) . PHP_EOL;
