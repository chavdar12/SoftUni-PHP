<?php
$username = readline();
$password = strrev($username);
$attempts = 0;

while (true) {
    $input = readline();
    if ($input === $password) {
        echo "User $username logged in.";
        break;
    } else {
        $attempts++;
        if ($attempts === 4) {
            echo "User $username blocked!";
            break;
        }
        echo "Incorrect password. Try again." . PHP_EOL;
    }
}
