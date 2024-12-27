<?php
$arr = array_map('intval', explode(' ', trim(fgets(STDIN))));

while (($command = trim(fgets(STDIN))) !== "end") {
    $tokens = explode(' ', $command);
    $action = $tokens[0];

    switch ($action) {
        case "Add":
            $arr[] = intval($tokens[1]);
            break;
        case "Remove":
            $arr = array_filter($arr, function($x) use ($tokens) { return $x != $tokens[1]; });
            break;
        case "RemoveAt":
            unset($arr[intval($tokens[1])]);
            $arr = array_values($arr);
            break;
        case "Insert":
            array_splice($arr, intval($tokens[2]), 0, intval($tokens[1]));
            break;
    }
}

echo implode(' ', $arr);
?>