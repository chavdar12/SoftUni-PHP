<?php
$input = trim(fgets(STDIN));
$pattern = '/([a-zA-Z]+)(\d+)/';

preg_match_all($pattern, $input, $matches);

$uniqueSymbols = [];
$rageMessage = '';

foreach ($matches[1] as $index => $str) {
    $repeatedStr = strtoupper($str) . str_repeat($str, $matches[2][$index] - 1);
    $rageMessage .= $repeatedStr;

    foreach (str_split(strtoupper($str)) as $char) {
        $uniqueSymbols[strtolower($char)] = true;
    }
}

echo "Unique symbols used: " . count($uniqueSymbols) . PHP_EOL;
echo $rageMessage;
?>