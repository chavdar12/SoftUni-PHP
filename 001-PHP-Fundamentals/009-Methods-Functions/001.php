<?php
function signOfInteger($num) {
    if ($num > 0) {
        echo "The number $num is positive.\n";
    } elseif ($num < 0) {
        echo "The number $num is negative.\n";
    } else {
        echo "The number $num is zero.\n";
    }
}

$number = intval(fgets(STDIN));
signOfInteger($number);
?>