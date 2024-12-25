<?php

class Book
{
    private $title;
    private $author;
    private $price;

    public function __construct($title, $author, $price)
    {
        $this->title = $title;
        $this->author = $author;
        $this->price = $price;
    }

    public function showBookDetails()
    {
        echo "Книга: {$this->title}, {$this->author}, {$this->price}";
    }
}
