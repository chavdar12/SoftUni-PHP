<?php
$input = trim(fgets(STDIN));

$numbers = [];
$nonNumbers = [];

for ($i = 0; $i < strlen($input); $i++) {
    if (is_numeric($input[$i])) {
        $numbers[] = $input[$i];
    } else {
        $nonNumbers[] = $input[$i];
    }
}

$takeList = [];
$skipList = [];

foreach ($numbers as $index => $digit) {
    if ($index % 2 == 0) {
        $takeList[] = $digit;
    } else {
        $skipList[] = $digit;
    }
}

$result = "";
$skipCount = 0;
for ($i = 0; $i < count($takeList); $i++) {
    $takeCount = (int) $takeList[$i];
    $skipCount = (int) $skipList[$i];

    $result .= implode("", array_splice($nonNumbers, 0, $takeCount));
    array_splice($nonNumbers, 0, $skipCount);
}

echo $result . "\n";
?>