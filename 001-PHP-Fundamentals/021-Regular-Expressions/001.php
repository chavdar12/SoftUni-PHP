<?php
$input = "Ivan Ivanov, Ivan ivanov, ivan Ivanov, IVan Ivanov, Test Testov, Ivan Ivanov";
$pattern = '/\b[A-Z][a-z]+ [A-Z][a-z]+\b/';
preg_match_all($pattern, $input, $matches);
echo implode(" ", $matches[0]);
?>