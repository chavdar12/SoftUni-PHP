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
const SIGN = "С уважение, Деан Иванов";

$events = array(
    "i" => "открито изложение",
    "p" => "бал на випускниците",
    "s" => "ден на отворените врати"
);

$people = array(
    "ivan" => array("name" => "Иван Иванов"),
    "petar" => array("name" => "Петър Пертов"),
    "simeon" => array("name" => "Симеон Семов")
);

$place = array(
    "ivan" => "i",
    "petar" => "p",
    "simeon" => "s"
);

foreach ($people as $key => $info) {
    $keyN = $place[$key];
    if ($keyN !== "") {
        $str = "Уважаеми {$info['name']},<br>";

        $str .= "Имаме удоволствието да Ви поканим на " . $events[$keyN];

        switch ($keyN) {
            case "i":
                $str .= "<br> Бъдете 10 минути преди откриването!";
                break;
            case "p":
                $str .= "<br> Не забравяйте да донесете подарък!";
                break;
            case "s":
                $str .= "<br> Моля, потвърдете Вашето участие по телефона!";
                break;
        }

        $str .= "<br>" . SIGN . "<hr>";
        echo $str;
    }
}
?>
</body>
</html>
