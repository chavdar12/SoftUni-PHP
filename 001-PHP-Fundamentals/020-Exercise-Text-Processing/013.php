<?php
$char1 = ord(trim(fgets(STDIN)));
$char2 = ord(trim(fgets(STDIN)));
$string = trim(fgets(STDIN));

$sum = 0;
$start = min($char1, $char2);
$end = max($char1, $char2);

foreach (str_split($string) as $char) {
    $ascii = ord($char);
    if ($ascii > $start && $ascii < $end) {
        $sum += $ascii;
    }
}

echo $sum . "\n";
?>