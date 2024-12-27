<?php
$key = intval(fgets(STDIN));

while (true) {
    $message = trim(fgets(STDIN));
    if ($message === "end") {
        break;
    }

    $decryptedMessage = '';
    for ($i = 0; $i < strlen($message); $i++) {
        $decryptedMessage .= chr(ord($message[$i]) - $key);
    }

    if (preg_match('/@([A-Za-z]+)!([GN])/', $decryptedMessage, $matches)) {
        $name = $matches[1];
        $behavior = $matches[2];
        if ($behavior === "G") {
            echo $name . PHP_EOL;
        }
    }
}
?>