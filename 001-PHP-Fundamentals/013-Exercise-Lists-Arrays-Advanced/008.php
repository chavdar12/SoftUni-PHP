<?php
$data = explode(" ", trim(fgets(STDIN)));

while (true) {
    $input = trim(fgets(STDIN));

    if ($input == "3:1") {
        break;
    }

    $command = explode(" ", $input);
    $action = $command[0];

    if ($action == "merge") {
        $startIndex = max(0, (int) $command[1]);
        $endIndex = min(count($data) - 1, (int) $command[2]);

        $merged = implode("", array_slice($data, $startIndex, $endIndex - $startIndex + 1));
        array_splice($data, $startIndex, $endIndex - $startIndex + 1, $merged);
    }

    if ($action == "divide") {
        $index = (int) $command[1];
        $partitions = (int) $command[2];
        $element = $data[$index];

        $length = strlen($element);
        $size = intdiv($length, $partitions);
        $remainder = $length % $partitions;

        $newArray = [];
        for ($i = 0; $i < $partitions; $i++) {
            $substring = substr($element, $i * $size, $size + ($i < $remainder ? 1 : 0));
            $newArray[] = $substring;
        }

        array_splice($data, $index, 1, $newArray);
    }
}

echo implode(" ", $data) . "\n";
?>