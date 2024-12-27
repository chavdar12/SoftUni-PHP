<?php
$pounds = floatval(readline());
$dollars = $pounds * 1.31;
echo number_format($dollars, 3) . PHP_EOL;
