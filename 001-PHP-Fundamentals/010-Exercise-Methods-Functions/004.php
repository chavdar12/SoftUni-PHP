<?php
function isValidPassword($password) {
    $valid = true;

    if (strlen($password) < 6 || strlen($password) > 10) {
        echo "Password must be between 6 and 10 characters\n";
        $valid = false;
    }

    if (!ctype_alnum($password)) {
        echo "Password must consist only of letters and digits\n";
        $valid = false;
    }

    if (preg_match_all('/\d/', $password) < 2) {
        echo "Password must have at least 2 digits\n";
        $valid = false;
    }

    if ($valid) {
        echo "Password is valid";
    }
}

isValidPassword('logIn');
?>