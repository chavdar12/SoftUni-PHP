<?php
$string = trim(fgets(STDIN));
echo preg_replace('/(.)\1+/', '$1', $string);
?>