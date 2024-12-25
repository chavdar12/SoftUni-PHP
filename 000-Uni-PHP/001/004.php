<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Enter Your Name</title>
</head>
<body>
<form name="form" method="post">
    <label for="name">Please enter your name:</label><br/>
    <input type="text" id="name" name="name" required/><br/>
    <input type="submit" name="submit" value="Go"/>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    $name = htmlspecialchars(trim($_POST['name']));
    if (!empty($name)) {
        echo "<p>Your name is <strong>$name</strong></p>";
    } else {
        echo "<p>Please enter a valid name.</p>";
    }
}
?>
</body>
</html>