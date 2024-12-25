<?php

class Person
{
    protected $first_name;
    protected $last_name;

    public function __construct(string $first_name, string $last_name)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
    }

    public function showPerson(): void
    {
        echo "My name is, {$this->first_name}{$this->last_name}!<br>";
    }
}