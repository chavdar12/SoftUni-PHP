<?php
$bigNumber = trim(fgets(STDIN));
$digit = intval(trim(fgets(STDIN)));

$result = '';

$carry = 0;
for ($i = strlen($bigNumber) - 1; $i >= 0; $i--) {
    $mult = intval($bigNumber[$i]) * $digit + $carry;
    $result = ($mult % 10) . $result;
    $carry = intdiv($mult, 10);
}

if ($carry > 0) {
    $result = $carry . $result;
}

echo $result;
?>