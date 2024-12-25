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
<p>ЛИЦЕ НА ПРАВОЪГЪЛНИК</p>
<form name="form" method="post" action="#">
    Въведете дължина и ширина на правоъгълник:<br>
    Дължина:
    <input type="number" name="l" min="0" required/>
    Ширина:
    <input type="number" name="w" min="0" required/> <br/>
    <input type="submit" name="submit" value="GO!"/>
</form>

<?php
if (isset($_POST['submit'])) {
    $l = $_POST['l'];
    $w = $_POST['w'];

    // Validate inputs to ensure they are numeric and non-negative
    if (is_numeric($l) && is_numeric($w) && $l >= 0 && $w >= 0) {
        $area = $l * $w;

        // Output the area with proper styling
        echo "<p style='color: #4CAF50;'>Правоъгълник с дължина $l и ширина $w има лице $area</p>";
    } else {
        echo "<p style='color: red;'>Моля, въведете валидни числа за дължина и ширина.</p>";
    }
}
?>
</body>
</html>