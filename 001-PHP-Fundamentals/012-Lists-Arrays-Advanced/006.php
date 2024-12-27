<?php
$arr = array_map('intval', explode(' ', trim(fgets(STDIN))));

while (($command = trim(fgets(STDIN))) !== "end") {
    $tokens = explode(' ', $command);
    $action = $tokens[0];

    switch ($action) {
        case "Contains":
            echo (in_array(intval($tokens[1]), $arr) ? "Yes" : "No such number") . "\n";
            break;
        case "Print":
            if ($tokens[1] == "even") {
                echo implode(' ', array_filter($arr, function($x) { return $x % 2 == 0; })) . "\n";
            } elseif ($tokens[1] == "odd") {
                echo implode(' ', array_filter($arr, function($x) { return $x % 2 != 0; })) . "\n";
            }
            break;
        case "Get":
            echo array_sum($arr) . "\n";
            break;
        case "Filter":
            $condition = $tokens[1];
            $number = intval($tokens[2]);
            $filtered = [];
            foreach ($arr as $num) {
                if (
                    ($condition == '<' && $num < $number) ||
                    ($condition == '>' && $num > $number) ||
                    ($condition == '>=' && $num >= $number) ||
                    ($condition == '<=' && $num <= $number)
                ) {
                    $filtered[] = $num;
                }
            }
            echo implode(' ', $filtered) . "\n";
            break;
    }
}
?>