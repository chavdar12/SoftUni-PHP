<?php
$string = trim(fgets(STDIN));
$charIndexes = [];

for ($i = 0; $i < strlen($string); $i++) {
    $char = $string[$i];
    if (!isset($charIndexes[$char])) {
        $charIndexes[$char] = [];
    }
    $charIndexes[$char][] = $i;
}

foreach ($charIndexes as $char => $indexes) {
    echo "$char:" . implode("/", $indexes) . " ";
}
echo "\n";
?>