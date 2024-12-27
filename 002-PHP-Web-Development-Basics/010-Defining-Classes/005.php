<?php

class Person
{
    private string $name;
    private int $age;

    public function __construct(string $name, int $age)
    {
        $this->setName($name);
        $this->setAge($age);

        echo $this->getName() . " " . $this->getAge();
    }

    private function setName(string $name): void
    {
        $this->name = $name;
    }

    private function setAge(int $age): void
    {
        $this->age = $age;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAge(): int
    {
        return $this->age;
    }
}

$name = readline();
$age = readline();

$person = new Person($name, $age);