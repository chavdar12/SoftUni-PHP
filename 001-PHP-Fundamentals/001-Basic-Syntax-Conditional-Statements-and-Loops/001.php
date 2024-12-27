<?php
$name = trim(readline());
$age = intval(readline());
$grade = number_format(floatval(readline()), 2);

echo "Name: $name, Age: $age, Grade: $grade" . PHP_EOL;
