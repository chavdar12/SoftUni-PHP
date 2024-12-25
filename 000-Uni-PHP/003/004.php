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
    function prime($a): int
    {
        if ($a == 1) return 0;
        for ($i = 2; $i <= $a / 2; $i++) {
            if ($a % $i == 0) return 0;
        }
        return 1;
    }

    $a = $_POST['a'];
    $check = prime($a);
    if ($check == 1)
        echo "Числото $a е просто";
    else
        echo "Числото $a не е просто";
}
?>
</body>
</html>