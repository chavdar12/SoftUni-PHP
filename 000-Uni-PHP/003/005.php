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
<form name="form" method="post" action="#">
    <label for="number">Въведете число:</label>
    <input id="number" type="number" name="a"/> <br/>
    <input type="submit" name="submit" value="Провери!"/>
</form>

<?php
if (isset($_POST['submit'])) {
    $number = $_POST['number'];

    $digitChar = str_split($number);
    $count = 0;

    foreach ($digitChar as $char) {
        if (is_numeric($char) && $char % 2 == 0) {
            $count++;
        }
    }

    echo "Числото $number съдържа $count четни цифри.";
}
?>
</body>
</html>