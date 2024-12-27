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

    public function getTitle() {
        return $this->title;
    }

    public function getContent() {
        return $this->content;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function __toString() {
        return "{$this->title} - {$this->content}: {$this->author}";
    }
}

$n = intval(fgets(STDIN));
$articles = [];

for ($i = 0; $i < $n; $i++) {
    $data = explode(", ", fgets(STDIN));
    $articles[] = new Article($data[0], $data[1], $data[2]);
}

$sortCriteria = trim(fgets(STDIN));

usort($articles, function($a, $b) use ($sortCriteria) {
    if ($sortCriteria === 'title') {
        return strcmp($a->getTitle(), $b->getTitle());
    } elseif ($sortCriteria === 'content') {
        return strcmp($a->getContent(), $b->getContent());
    } elseif ($sortCriteria === 'author') {
        return strcmp($a->getAuthor(), $b->getAuthor());
    }
});

foreach ($articles as $article) {
    echo $article . "\n";
}
?>