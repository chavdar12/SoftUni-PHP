<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Set Cookie</title>
</head>
<body>
<?php
setcookie("user", "Alex Porter", time() + 10);
?>
<a href="welcome.php">Next page - welcome</a>
</body>
</html>