<?php
$type = trim(fgets(STDIN));

if ($type == 'int') {
    $number = intval(trim(fgets(STDIN)));
    echo $number * 2;
} elseif ($type == 'real') {
    $number = floatval(trim(fgets(STDIN)));
    echo number_format($number * 1.5, 2);
} elseif ($type == 'string') {
    $string = trim(fgets(STDIN));
    echo "$" . $string . "$";
}
?>