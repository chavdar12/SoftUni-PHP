<?php
$input = trim(fgets(STDIN));
$pattern = '/[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9.-]+/';
preg_match_all($pattern, $input, $matches);
foreach ($matches[0] as $email) {
    echo $email . PHP_EOL;
}
?>