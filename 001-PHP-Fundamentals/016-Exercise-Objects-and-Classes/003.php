<?php

class Book {
    private $title;
    private $author;
    private $price;

    public function __construct($title, $author, $price) {
        $this->title = $title;
        $this->author = $author;
        $this->price = $price;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function getPrice() {
        return $this->price;
    }
}

class Library {
    private $name;
    private $books = [];

    public function __construct($name) {
        $this->name = $name;
    }

    public function addBook($book) {
        $this->books[] = $book;
    }

    public function getBooks() {
        return $this->books;
    }
}

$library = new Library("My Library");
$bookCount = intval(fgets(STDIN));

for ($i = 0; $i < $bookCount; $i++) {
    $data = explode(" ", fgets(STDIN));
    $title = $data[0];
    $author = $data[1];
    $price = floatval($data[5]);

    $book = new Book($title, $author, $price);
    $library->addBook($book);
}

$authors = [];
foreach ($library->getBooks() as $book) {
    $authors[$book->getAuthor()][] = $book->getPrice();
}

foreach ($authors as $author => $prices) {
    $totalPrice = array_sum($prices);
    $authors[$author] = $totalPrice;
}

arsort($authors);

foreach ($authors as $author => $totalPrice) {
    echo "{$author} -> " . number_format($totalPrice, 2) . "\n";
}
?>