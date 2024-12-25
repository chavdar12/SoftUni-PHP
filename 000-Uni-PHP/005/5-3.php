<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$niz1 = "Student Ivan Ivanov has excellent grade in WEB applications discipline.";
$niz2 = "Ivan Petrov has excellent grade in WEB applications.";

// Calculate string lengths directly using strlen()
$j = strlen($niz1);
$k = strlen($niz2);

echo "Низ 1 има дължина : $j символа. &nbsp;";
echo "Низ 2 има дължина : $k символа.<br>";

// Calculate total length
echo "Двата низа имат общо : " . ($j + $k) . " символа.<br>";

// Search for substring 'Ivanov' using strpos()
if (strpos($niz1, 'Ivanov') !== false) {
    echo "Ivanov е намерен в Низ 1.<br>";
} else {
    echo "Иванов не е намерен в Низ 1.<br>";
}

// Split strings into words using explode()
$part1 = explode(" ", $niz1);
$part2 = explode(" ", $niz2);

echo "Низ 1 на части: <br>";
print_r($part1);
echo "<br>";
echo "Низ 2 на части: <br>";
print_r($part2);
echo "<br>";

// Replace 'discipline' with 'subject' using str_ireplace()
$replace = str_ireplace("discipline", "subject", $niz1);
echo "$replace<br>";

// Compare strings case-insensitively using strcasecmp()
$comparison = strcasecmp($niz1, $niz2);
if ($comparison == 0) {
    echo "Низовете са равни";
} elseif ($comparison > 0) {
    echo "Низ 1 е по-голям от Низ 2";
} else {
    echo "Низ 2 е по-голям от Низ 1";
}
?>
</body>
</html>