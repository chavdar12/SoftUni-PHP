<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Article</title>
</head>
<body>
<h2>Create Article</h2>
<form name="form" method="post">
    <label for="title">Title</label><br>
    <input type="text" name="title" id="title" required><br>

    <label for="aut">Author</label><br>
    <input type="text" name="aut" id="aut" required><br>

    <label for="description">Description</label><br>
    <textarea name="description" id="description" rows="4" cols="50" required></textarea><br>

    <input type="submit" name="submit" value="Create and Show"><br>
</form>

<?php
include_once 'Article.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['title'], $_POST['aut'], $_POST['description'])) {
    $title = htmlspecialchars($_POST['title']);
    $author = htmlspecialchars($_POST['aut']);
    $description = htmlspecialchars($_POST['description']);

    $article = new Article($title, $author, $description);
    echo $article->showArticle();
}
?>
</body>
</html>