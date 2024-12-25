<?php
$input = explode(" ", readline());
$sum = array_sum(array_map(fn($el) => intval(strrev($el)), $input));

echo $sum;