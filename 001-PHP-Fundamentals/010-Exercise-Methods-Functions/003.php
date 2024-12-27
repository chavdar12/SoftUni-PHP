<?php
function charactersInRange($start, $end) {
    $startAscii = ord($start);
    $endAscii = ord($end);
    for ($i = $startAscii + 1; $i < $endAscii; $i++) {
        echo chr($i) . " ";
    }
}

charactersInRange('a', 'd');
?>