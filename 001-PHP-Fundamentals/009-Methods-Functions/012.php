<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Form</title>
</head>
<body>
<form method="POST">
    Name: <input type="text" name="person" />
    <input type="submit" />
</form>
<?php
if (isset($_POST['person'])) {
    echo "Hello, " . htmlspecialchars($_POST['person']) . "!";
}
?>
</body>
</html>