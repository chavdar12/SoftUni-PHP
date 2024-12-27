<?php
$strings = explode(' ', trim(fgets(STDIN)));

foreach ($strings as $str) {
    echo str_repeat($str, strlen($str));
}
?>