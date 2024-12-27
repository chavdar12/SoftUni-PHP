<?php

$n = intval(trim(fgets(STDIN)));
$synonyms = [];

for ($i = 0; $i < $n * 2; $i += 2) {
    $word = trim(fgets(STDIN));
    $synonym = trim(fgets(STDIN));

    if (!isset($synonyms[$word])) {
        $synonyms[$word] = [];
    }
    $synonyms[$word][] = $synonym;
}

uksort($synonyms, function($a, $b) use ($synonyms) {
    $countA = count($synonyms[$a]);
    $countB = count($synonyms[$b]);

    if ($countA === $countB) {
        return strcmp($a, $b);
    }

    return $countB - $countA;
});

foreach ($synonyms as $word => $synonymList) {
    echo "$word - " . implode(", ", $synonymList) . "\n";
}

?>