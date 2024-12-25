<?php
include '../db/create.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $publisher = $_POST['publisher'];
    $year = $_POST['year'];

    if (!empty($title) && !empty($author) && !empty($publisher) && !empty($year)) {
        $success = addBook($title, $author, $publisher, $year);
        echo $success ? "Добавен запис" : "Грешка при добавяне";
    } else {
        echo "Моля, попълнете всички полета";
    }
}
?>

<form method="post">
    <label for="title">Заглавие:</label><br>
    <input type="text" id="title" name="title"><br>
    <label for="author">Автор:</label><br>
    <input type="text" id="author" name="author"><br>
    <label for="publisher">Издателство:</label><br>
    <input type="text" id="publisher" name="publisher"><br>
    <label for="year">Година на издаване:</label><br>
    <input type="text" id="year" name="year"><br>
    <input type="submit" value="Въведи"/>
</form>