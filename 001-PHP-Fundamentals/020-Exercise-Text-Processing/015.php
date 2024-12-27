<?php
$string = trim(fgets(STDIN));
$pattern = trim(fgets(STDIN));

$shaked = false;

while (strlen($pattern) > 0) {
    $firstMatch = strpos($string, $pattern);
    $lastMatch = strrpos($string, $pattern);

    if ($firstMatch !== false && $lastMatch !== false && $firstMatch != $lastMatch) {
        $string = substr($string, 0, $firstMatch) . substr($string, $firstMatch + strlen($pattern), $lastMatch - ($firstMatch + strlen($pattern))) . substr($string, $lastMatch + strlen($pattern));
        $pattern = substr($pattern, 0, floor(strlen($pattern) / 2));

        $shaked = true;
        echo "Shaked it.\n";
    } else {
        echo "No shake.\n";
        echo $string . "\n";
        break;
    }
}
?>