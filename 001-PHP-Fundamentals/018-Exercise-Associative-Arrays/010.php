<?php

$results = [];
$submissions = [];

while (true) {
    $input = trim(fgets(STDIN));
    if ($input === "exam finished") break;

    if (strpos($input, "-banned") !== false) {
        list($username) = explode("-", $input);
        unset($results[$username]);
    } else {
        list($username, $language, $points) = explode("-", $input);
        $points = intval($points);

        if (!isset($results[$username])) {
            $results[$username] = [];
        }

        if (!isset($results[$username][$language]) || $results[$username][$language] < $points) {
            $results[$username][$language] = $points;
        }

        if (!isset($submissions[$language])) {
            $submissions[$language] = 0;
        }
        $submissions[$language]++;
    }
}

echo "Results:\n";
arsort($results);
foreach ($results as $username => $languages) {
    $maxPoints = max($languages);
    echo "$username | $maxPoints\n";
}

echo "Submissions:\n";
arsort($submissions);
foreach ($submissions as $language => $count) {
    echo "$language - $count\n";
}
?>