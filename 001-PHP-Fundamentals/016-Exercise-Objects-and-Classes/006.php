<?php

$dates = [];
$comments = [];

while (true) {
    $input = fgets(STDIN);
    if (trim($input) === 'end of dates') {
        break;
    }

    $data = explode(" ", trim($input));
    $user = $data[0];
    $userDates = array_slice($data, 1);

    $dates[$user] = $userDates;
}

while (true) {
    $input = fgets(STDIN);
    if (trim($input) === 'end of comments') {
        break;
    }

    $data = explode("-", trim($input));
    $user = $data[0];
    $comment = $data[1];

    $comments[$user][] = $comment;
}

ksort($dates);

foreach ($dates as $user => $userDates) {
    echo "{$user} Comments: ";
    if (isset($comments[$user])) {
        echo "- " . implode(" - ", $comments[$user]) . " ";
    }
    echo "\nDates attended: ";
    foreach ($userDates as $date) {
        echo "-- {$date}\n";
    }
}
?>