<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Input</title>
</head>
<body>
<form name="form" method="post">
    <label for="num1">Въведи число 1:</label><br/>
    <input type="number" id="num1" name="num1" required/><br/>

    <label for="num2">Въведи число 2:</label><br/>
    <input type="number" id="num2" name="num2" required/><br/>

    <input type="submit" name="submit" value="Submit"/>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    $num1 = htmlspecialchars($_POST['num1']);
    $num2 = htmlspecialchars($_POST['num2']);

    echo "<p>Първото число е: $num1<br>Второто число е: $num2</p>";
}
?>
</body>
</html>