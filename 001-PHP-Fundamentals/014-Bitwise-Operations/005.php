<?php
$numbers = array_map('intval', explode(' ', fgets(STDIN)));

$result = 0;
foreach ($numbers as $num) {
    $result ^= $num;
}

echo $result . PHP_EOL;
?>