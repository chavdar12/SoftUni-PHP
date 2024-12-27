<?php
function printMatrix($n) {
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n; $j++) {
            echo "$n ";
        }
        echo "\n";
    }
}

printMatrix(3);
?>