<?php
$gifts = explode(" ", readline());
while (true) {
    $command = readline();
    if ($command == "No Money") break;

    $parts = explode(" ", $command);
    $action = $parts[0];

    if ($action == "OutOfStock") {
        $gift = $parts[1];
        $gifts = array_map(fn($g) => $g == $gift ? "None" : $g, $gifts);
    } elseif ($action == "Required") {
        $gift = $parts[1];
        $index = intval($parts[2]);
        if ($index >= 0 && $index < count($gifts)) {
            $gifts[$index] = $gift;
        }
    } elseif ($action == "JustInCase") {
        $gift = $parts[1];
        $gifts[count($gifts) - 1] = $gift;
    }
}
$gifts = array_filter($gifts, function ($gift) {
    return $gift != "None";
});
echo implode(" ", $gifts);
