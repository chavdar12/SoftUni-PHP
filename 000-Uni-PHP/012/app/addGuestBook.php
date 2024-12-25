<?php
include '../db/config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $comment = trim($_POST['comment']);

    if (!empty($name) && !empty($email) && !empty($comment)) {
        $stmt = $dbConn->prepare("INSERT INTO guestbook (name, email, comment) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $email, $comment);

        if ($stmt->execute()) {
            echo "Записът е добавен успешно.";
        } else {
            echo "Грешка при добавяне: " . $dbConn->error;
        }
        $stmt->close();
    } else {
        echo "Моля, попълнете всички полета.";
    }
}
?>
<form id="form" method="post" action="addGuestBook.php">
    <label for="name">Име:</label>
    <input type="text" id="name" name="name" required><br><br>

    <label for="email">Имейл:</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="comment">Коментар:</label>
    <textarea id="comment" name="comment" rows="4" required></textarea><br><br>

    <button type="submit" name="submit">Изпрати</button>
    <button type="reset">Нулиране</button>
</form>