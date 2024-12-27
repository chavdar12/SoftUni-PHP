<?php
function printLine($start, $end) {
    for ($i = $start; $i <= $end; $i++) {
        echo $i . " ";
    }
    echo "\n";
}

$n = intval(fgets(STDIN));

for ($i = 1; $i <= $n; $i++) {
    printLine(1, $i);
}
for ($i = $n - 1; $i >= 1; $i--) {
    printLine(1, $i);
}
?>