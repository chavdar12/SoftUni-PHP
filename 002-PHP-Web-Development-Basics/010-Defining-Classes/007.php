<?php

class Person
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
        echo "{$this->name} says \"Hello\"!";
    }
}

$person = new Person(readline());