<?php
$arr1 = explode(" ", readline());
$arr2 = explode(" ", readline());
$maxLength = max(count($arr1), count($arr2));

$arr1 = array_merge($arr1, array_fill(count($arr1), $maxLength - count($arr1), $arr1[$index]));
$arr2 = array_merge($arr2, array_fill(count($arr2), $maxLength - count($arr2), $arr2[$index]));

foreach ($arr1 as $i => $value) {
    echo $value + $arr2[$i] . " ";
}