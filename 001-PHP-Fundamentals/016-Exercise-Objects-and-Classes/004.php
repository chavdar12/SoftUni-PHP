<?php

class Article {
    private $title;
    private $content;
    private $author;

    public function __construct($title, $content, $author) {
        $this->title = $title;
        $this->content = $content;
        $this->author = $author;
    }

    public function edit($newContent) {
        $this->content = $newContent;
    }

    public function changeAuthor($newAuthor) {
        $this->author = $newAuthor;
    }

    public function rename($newTitle) {
        $this->title = $newTitle;
    }

    public function __toString() {
        return "{$this->title} - {$this->content}: {$this->author}";
    }
}

$articleData = explode(", ", fgets(STDIN));
$article = new Article($articleData[0], $articleData[1], $articleData[2]);

$n = intval(fgets(STDIN));
for ($i = 0; $i < $n; $i++) {
    $command = fgets(STDIN);
    if (strpos($command, 'Edit') === 0) {
        $article->edit(substr($command, 6));
    } elseif (strpos($command, 'ChangeAuthor') === 0) {
        $article->changeAuthor(substr($command, 14));
    } elseif (strpos($command, 'Rename') === 0) {
        $article->rename(substr($command, 8));
    }
}

echo $article . "\n";
?>