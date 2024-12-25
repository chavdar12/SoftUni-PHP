<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Person</title>
</head>
<body>
<h2>Create Person</h2>
<form name="form" method="post">
    <label for="first_name">First Name</label><br>
    <input type="text" name="first_name" id="first_name" required><br>

    <label for="last_name">Last Name</label><br>
    <input type="text" name="last_name" id="last_name" required><br>

    <label for="email">Email</label><br>
    <input type="email" name="email" id="email" required><br>

    <input type="submit" name="submit" value="Create and Show"><br>
</form>

<?php
include_once './Person.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['first_name'], $_POST['last_name'], $_POST['email'])) {
    $first_name = htmlspecialchars($_POST['first_name']);
    $last_name = htmlspecialchars($_POST['last_name']);
    $email = htmlspecialchars($_POST['email']);

    $person = new Person($first_name, $last_name, $email);
    echo $person->showPerson();
}
?>
</body>
</html>