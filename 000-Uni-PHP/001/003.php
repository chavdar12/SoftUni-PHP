<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Variable Debugging</title>
</head>
<body>
<?php
$name = 'Harry';
$age = 28;

echo "<p><strong>Variable Information:</strong></p>";

echo "<p>\$name: ";
var_dump($name);
echo "</p>";

echo "<p>\$age: ";
var_dump($age);
echo "</p>";

echo "<p>NULL value: ";
var_dump(NULL);
echo "</p>";
?>
</body>
</html>