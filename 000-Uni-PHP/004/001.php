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
$names = array(1 => "Иван Иванов", 2 => "Драган Драганов", 3 => "Димо Петров");
$grades = array(1 => '4', 2 => '5.45', 3 => '5.67');

echo "<ol>";
foreach ($names as $id => $name) {
    echo "<li>Студент $name има успех {$grades[$id]}</li>";
}
echo "</ol>";

echo "<ul>";
foreach ($names as $id => $name) {
    echo "<li>Студент $name има успех {$grades[$id]}</li>";
}
echo "</ul>";

echo "<table border='4'>";
echo "<tr><th>Име, Фамилия</th><th>Успех</th></tr>";
foreach ($names as $id => $name) {
    echo "<tr><td>$name</td><td>{$grades[$id]}</td></tr>";
}
echo "</table>";
?>
</body>
</html>