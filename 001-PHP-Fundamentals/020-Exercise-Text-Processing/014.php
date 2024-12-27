<?php
$key = array_map('intval', explode(' ', trim(fgets(STDIN))));

while (true) {
    $line = trim(fgets(STDIN));
    if ($line === "find") {
        break;
    }

    $decodedMessage = '';
    $keyIndex = 0;

    for ($i = 0; $i < strlen($line); $i++) {
        $char = $line[$i];
        $decodedMessage .= chr(ord($char) - $key[$keyIndex]);
        $keyIndex = ($keyIndex + 1) % count($key);
    }

    preg_match("/&(.+?)&/", $decodedMessage, $typeMatches);
    preg_match("/<(.+?)>/", $decodedMessage, $coordinatesMatches);

    if ($typeMatches && $coordinatesMatches) {
        echo "Found {$typeMatches[1]} at {$coordinatesMatches[1]}\n";
    }
}
?>