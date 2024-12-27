<?php
$fieldSize = intval(fgets(STDIN));
$field = array_fill(0, $fieldSize, 0);
$ladybugs = array_map('intval', explode(' ', fgets(STDIN)));
foreach ($ladybugs as $index) {
    if ($index >= 0 && $index < $fieldSize) {
        $field[$index] = 1;
    }
}
while (true) {
    $command = trim(fgets(STDIN));
    if ($command === 'end') {
        break;
    }
    list($index, $direction, $length) = explode(' ', $command);
    $index = intval($index);
    $length = intval($length);
    if ($index < 0 || $index >= $fieldSize || $field[$index] === 0) {
        continue;
    }
    $field[$index] = 0;
    while (true) {
        $newIndex = $direction === 'right' ? $index + $length : $index - $length;
        if ($newIndex < 0 || $newIndex >= $fieldSize || $field[$newIndex] === 0) {
            if ($newIndex >= 0 && $newIndex < $fieldSize) {
                $field[$newIndex] = 1;
            }
            break;
        }
        $index = $newIndex;
    }
}
echo implode(' ', $field) . PHP_EOL;