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
$cities = array("Tokyo", "Mexico City", "New York", "Mumbai", "Seoul", "Shanghai", "Lagos", "Buenos Aires", "Cairo", "London");

echo "Original list of cities: <br>";
foreach ($cities as $value) {
    echo "$value, ";
}

echo "<br><br>";

sort($cities, SORT_STRING);
echo "<ul>";
foreach ($cities as $value2) {
    echo "<li>$value2</li>";
}
echo "</ul>";

$cities[10] = "Los Angeles";
$cities[11] = "Calcutta";
$cities[12] = "Osaka";
$cities[13] = "Beijing";

sort($cities);
echo "<ol>";
foreach ($cities as $value3) {
    echo "<li>$value3</li>";
}
echo "</ol>";

echo "<table border='1'>";
echo "<tr><th>Key</th><th>Value</th></tr>";
foreach ($cities as $key => $value4) {
    echo "<tr><td>$key</td><td>$value4</td></tr>";
}
echo "</table>";

?>
</body>
</html>