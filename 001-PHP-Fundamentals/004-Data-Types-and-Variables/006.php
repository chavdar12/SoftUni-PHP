<?php

$n = intval(readline());

$letters = range('a', 'z');
$letters = array_slice($letters, 0, $n);

foreach ($letters as $a) {
    foreach ($letters as $b) {
        foreach ($letters as $c) {
            echo "$a$b$c " ;
        }
    }
}
echo PHP_EOL;
