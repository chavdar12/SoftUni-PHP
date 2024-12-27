<?php
function isTopNumber($num) {
    $sum = array_sum(str_split($num));
    $hasOdd = preg_match('/[13579]/', $num);
    return $sum % 8 == 0 && $hasOdd;
}

for ($i = 1; $i <= 50; $i++) {
    if (isTopNumber($i)) {
        echo $i . " ";
    }
}
?>