<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Book Details</title>
</head>
<body>
<?php
$newBook = new Book("PHP and MySQL", "Иван Иванов", "12 лв.");
$newBook->showBookDetails();
?>
</body>
</html>