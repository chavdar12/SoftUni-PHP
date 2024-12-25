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
$currentDate = date("d/m/Y");
echo "Днес е: " . $currentDate . "<br>";
$august1 = "01/08/" . date("Y");
if ($currentDate >= $august1) {
    echo "Август е, и е наистина горещо.";
} else {
    echo "Не е август, така че поне не е горещо!";
}
?>
</body>
</html>