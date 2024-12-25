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
    <p>Сумата от цифрите на числото е равна на X (зададено от потребителя)</p>
    <label for="number">Въведете число:</label>
    <input id="number" type="number" name="a"/> <br/>
    <input type="submit" name="submit" value="GO"/>
</form>

<?php
if (isset($_POST['submit'])) {
    $a = $_POST['a'];
    $originalNumber = $a;
    $sum = 0;

    while ($a != 0) {
        $sum = $sum + $a % 10;
        $a = floor($a / 10);
    }

    echo "Сумата на цифрите на числото $originalNumber е равна на $sum <br>";
}
?>

<?php
$sum2 = 0;
$start = 1;
$end = 100;
for ($i = $start; $i <= $end; $i++) {
    $sum2 += $i;
}
echo "<br> Сумата от 1 до 100 е $sum2";
?>
</body>
</html>