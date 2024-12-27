<?php
$input = "1 -1 1s 123 s-s -123 _55_ _f 123.456 -123.456 1 -1 123 -123 123.456 -123.456";
$pattern = '/(?<=^|\s)(-?\d+(\.\d+)?)(?=\s|$)/';
preg_match_all($pattern, $input, $matches);
echo implode(" ", $matches[0]);
?>