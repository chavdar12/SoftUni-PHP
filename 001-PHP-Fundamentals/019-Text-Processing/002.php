<?php
while (true) {
    $input = trim(fgets(STDIN));
    if ($input === 'end') {
        break;
    }
    echo $input . ' = ' . strrev($input) . PHP_EOL;
}
?>