<?php
$input = "13/Jul/1928, 10-Nov-1934, , 01/Jan-1951,f 25.Dec.1937 23/09/1973, 1/Feb/2016";
$pattern = '/\b(?P<day>\d{2})(?P<separator>[.-/])(?P<month>[A-Z][a-z]{2})\k<separator>(?P<year>\d{4})\b/';
preg_match_all($pattern, $input, $matches, PREG_OFFSET_CAPTURE);
foreach ($matches['day'] as $key => $match) {
    echo "Day: " . $matches['day'][$key][0] . ", Month: " . $matches['month'][$key][0] . ", Year: " . $matches['year'][$key][0] . "\n";
}
?>