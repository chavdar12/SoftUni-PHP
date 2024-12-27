<?php
$num = intval(trim(fgets(STDIN)));

$a = 1;
$b = 1;
$c = 2;

for ($i = 1; $i <= $num; $i++) {
    echo $a . "\n";
    $temp = $a + $b + $c;
    $a = $b;
    $b = $c;
    $c = $temp;
}
?>