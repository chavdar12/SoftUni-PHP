<?php
function calculateResult($str) {
    $letterBefore = $str[0];
    $num = intval(substr($str, 1, -1));
    $letterAfter = $str[strlen($str) - 1];

    $result = 0;

    $letterBeforePos = ord(strtolower($letterBefore)) - 96;
    if (ctype_upper($letterBefore)) {
        $result = intdiv($num, $letterBeforePos);
    } else {
        $result = $num * $letterBeforePos;
    }

    $letterAfterPos = ord(strtolower($letterAfter)) - 96;
    if (ctype_upper($letterAfter)) {
        $result -= $letterAfterPos;
    } else {
        $result += $letterAfterPos;
    }

    return $result;
}

$input = trim(fgets(STDIN));
$strings = preg_split('/\s+/', $input);
$total = 0;

foreach ($strings as $str) {
    $total += calculateResult($str);
}

echo number_format($total, 2, '.', '');
?>