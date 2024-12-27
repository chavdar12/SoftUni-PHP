<?php
$array = explode(" ", readline());
$rotations = intval(readline());
$rotations = $rotations % count($array);
$array = array_merge(array_slice($array, $rotations), array_slice($array, 0, $rotations));
echo implode(" ", $array);
