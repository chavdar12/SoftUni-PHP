<?php
include '../db/create.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $publisher = $_POST['publisher'];

    if (!empty($publisher)) {
        $success = deleteBooksByPublisher($publisher);
        echo $success ? "Изтрит запис" : "Грешка при изтриване";
    } else {
        echo "Моля, попълнете полето за издателство";
    }
}
?>

<form method="post">
    <label for="publisher">Издателство за изтриване:</label><br>
    <input type="text" id="publisher" name="publisher"><br>
    <input type="submit" value="Изтриване"/>
</form>