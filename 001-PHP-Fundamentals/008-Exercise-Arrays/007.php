<?php
$array = explode(" ", readline());
$maxSequence = [];
$tempSequence = [];
for ($i = 0; $i < count($array); $i++) {
    $tempSequence[] = $array[$i];
    if ($i == count($array) - 1 || $array[$i] != $array[$i + 1]) {
        if (count($tempSequence) > count($maxSequence)) {
            $maxSequence = $tempSequence;
        }
        $tempSequence = [];
    }
}
echo implode(" ", $maxSequence);
