<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete Cookie</title>
</head>
<body>
<?php
setcookie("user", "", time() - 10);

if (isset($_COOKIE['user'])) {
    echo "Welcome " . $_COOKIE['user'] . "!<br>";
} else {
    echo "No existing cookies<br>";
}

echo "All cookies: <br>";
print_r($_COOKIE);
?>
<a href="last.php">Next page - delete cookie</a>
</body>
</html>