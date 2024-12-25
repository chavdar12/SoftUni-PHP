<?php
include '../db/create.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $oldPublisher = $_POST['oldPublisher'];
    $newPublisher = $_POST['newPublisher'];

    if (!empty($oldPublisher) && !empty($newPublisher)) {
        $success = updatePublisher($oldPublisher, $newPublisher);
        echo $success ? "Актуализиран запис" : "Грешка при актуализиране";
    } else {
        echo "Моля, попълнете всички полета";
    }
}
?>

<form method="post">
    <label for="oldPublisher">Старо издателство:</label><br>
    <input type="text" id="oldPublisher" name="oldPublisher"><br>
    <label for="newPublisher">Ново издателство:</label><br>
    <input type="text" id="newPublisher" name="newPublisher"><br>
    <input type="submit" value="Редактиране"/>
</form>