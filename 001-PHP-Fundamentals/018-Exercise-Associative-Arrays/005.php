<?php

$n = intval(trim(fgets(STDIN)));

$parking = [];

for ($i = 0; $i < $n; $i++) {
    $input = trim(fgets(STDIN));
    $parts = explode(" ", $input);

    if ($parts[0] === "register") {
        $username = $parts[1];
        $licensePlate = $parts[2];

        if (isset($parking[$username])) {
            echo "ERROR: already registered with plate number {$parking[$username]}\n";
        } else {
            $parking[$username] = $licensePlate;
            echo "$username registered $licensePlate successfully\n";
        }
    } elseif ($parts[0] === "unregister") {
        $username = $parts[1];

        if (isset($parking[$username])) {
            unset($parking[$username]);
            echo "$username unregistered successfully\n";
        } else {
            echo "ERROR: user $username not found\n";
        }
    }
}

foreach ($parking as $username => $licensePlate) {
    echo "$username => $licensePlate\n";
}

?>