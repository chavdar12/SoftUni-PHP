<?php
$usernames = explode(", ", trim(fgets(STDIN)));

foreach ($usernames as $username) {
    if (strlen($username) >= 3 && strlen($username) <= 16 && preg_match('/^[a-zA-Z0-9_-]+$/', $username)) {
        echo $username . PHP_EOL;
    }
}
?>