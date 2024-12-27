<?php
while (($input = readline()) !== "END") {
    if (filter_var($input, FILTER_VALIDATE_INT) !== false) {
        echo "$input is integer type" . PHP_EOL;
    } elseif (filter_var($input, FILTER_VALIDATE_FLOAT) !== false) {
        echo "$input is floating point type" . PHP_EOL;
    } elseif ($input === "true" || $input === "false") {
        echo "$input is boolean type" . PHP_EOL;
    } elseif (strlen($input) === 1) {
        echo "$input is character type" . PHP_EOL;
    } else {
        echo "$input is string type" . PHP_EOL;
    }
}
