<?php
include 'fourdoku.php';

$fourdoku = new Fourdoku();
$fourdoku->generate();
echo "<pre>";
print_r($fourdoku);
echo "</pre>";
?>