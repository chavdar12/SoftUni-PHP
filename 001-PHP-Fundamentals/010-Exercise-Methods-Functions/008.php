<?php
function factorial($n) {
    $result = 1;
    for ($i = 1; $i <= $n; $i++) {
        $result *= $i;
    }
    return $result;
}

function divideFactorials($a, $b) {
    return factorial($a) / factorial($b);
}

echo number_format(divideFactorials(5, 2), 2);
?>