<?php
$array1 = explode(" ", readline());
$array2 = explode(" ", readline());
$common = array_intersect($array1, $array2);
echo implode(" ", $common);
