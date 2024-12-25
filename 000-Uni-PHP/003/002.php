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
$num = 0;
while ($num < 9) {
    echo "abc ";
    $num++;
}

echo "<br>";
$num2 = 0;
do {
    echo "xyz ";
    $num2++;
} while ($num2 < 9);

echo "<br>";
for ($j = 1; $j <= 9; $j++) {
    echo "$j ";
}

echo "<br>";
$items = array(1 => "Item A", 2 => "Item B", 3 => "Item C", 4 => "Item D", 5 => "Item E", 6 => "Item F");
foreach ($items as $key => $value) {
    echo "$key. $value <br>";
}

?>
</body>
</html>