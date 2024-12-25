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
<h2>Изчисляване на лице на триъгълник</h2>
<form name="form" method="post">
    Въведете положителни стойности:<br>
    a:
    <input type="number" name="a" required min="0"/><br>
    b:
    <input type="number" name="b" required min="0"/><br>
    c:
    <input type="number" name="c" required min="0"/><br>
    <input type="submit" name="submit" value="ПРОВЕРИ"/>
</form>

<?php
// Check if the form was submitted
if (isset($_POST['submit'])) {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];

    // Validate that the sides form a valid triangle
    if ($a <= 0 || $b <= 0 || $c <= 0) {
        echo "<p style='color: red;'>Моля, въведете валидни положителни стойности за страните на триъгълника.</p>";
    } else {
        // Determine the type of triangle
        if ($a == $b && $b == $c) {
            echo "Триъгълникът е равностранен.<br>";
        } elseif ($a == $b || $a == $c || $b == $c) {
            echo "Триъгълникът е равнобедрен.<br>";
        } else {
            echo "Триъгълникът е разностранен.<br>";
        }

        // Calculate the area of the triangle using Heron's formula
        $p = ($a + $b + $c) / 2; // semi-perimeter
        $s = sqrt($p * ($p - $a) * ($p - $b) * ($p - $c));

        // Round the area to 2 decimal places
        $precision = 2;
        echo "Лицето на триъгълника е: " . round($s, $precision) . " кв. см.";
    }
}
?>

</body>
</html>