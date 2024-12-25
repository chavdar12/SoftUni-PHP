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
<h2>Enter the number of the month:</h2>
<form name="form" method="post" action="#">
    <label for="month">Month Number:</label>
    <input type="number" name="a" id="month" min="1" max="12" required/><br/>
    <input type="submit" name="submit" value="GO"/>
</form>

<?php
if (isset($_POST['submit'])) {
    $a = $_POST['a'];

    switch ($a) {
        case 1:
        case 2:
        case 12:
            echo "The result is: winter";
            break;
        case 3:
        case 4:
        case 5:
            echo "The result is: spring";
            break;
        case 6:
        case 7:
        case 8:
            echo "The result is: summer";
            break;
        case 9:
        case 10:
        case 11:
            echo "The result is: autumn";
            break;
        default:
            echo "Please enter a valid month number between 1 and 12.";
            break;
    }
}
?>
</body>
</html>