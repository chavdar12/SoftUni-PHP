<!doctype html>
<html lang="bg">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Форма за информация</title>
</head>
<body>
<form name="form" method="post" action="#">
    <h2>Здравейте! Моля попълнете следната информация:</h2>
    <label for="name">Вашето име:</label><br/>
    <input type="text" id="name" name="name" required/><br/><br/>

    <label for="age">Възраст:</label><br/>
    <input type="number" id="age" name="age" min="1" required/><br/><br/>

    <input type="submit" name="submit" value="Изпрати!"/>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    $name = htmlspecialchars(trim($_POST['name']));
    $age = intval($_POST['age']);

    if (!empty($name) && $age > 0) {
        echo "<p>Здравейте, <strong>$name</strong>!</p>";
        echo "<p>Вие сте на <strong>$age</strong> години.</p>";
    } else {
        echo "<p>Моля, въведете валидни данни.</p>";
    }
}
?>
</body>
</html>