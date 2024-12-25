<?php

class Person
{
    private string $name;
    private int $age;
    private string $occupation;

    public function __construct(string $name, int $age, string $occupation)
    {
        $this->setName($name);
        $this->setAge($age);
        $this->setOccupation($occupation);
    }

    private function setName(string $name): void
    {
        $this->name = $name;
    }

    private function setAge(int $age): void
    {
        $this->age = $age;
    }

    private function setOccupation(string $occupation): void
    {
        $this->occupation = $occupation;
    }

    public function __toString(): string
    {
        return "{$this->getName()} - age: {$this->getAge()}, occupation: {$this->getOccupation()}\n";
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function getOccupation(): string
    {
        return $this->occupation;
    }
}

$people = [];

$input = readline();
while ($input !== "END") {
    list($name, $age, $occupation) = explode(" ", $input);
    $age = (int)$age;
    $person = new Person($name, $age, $occupation);
    $people[] = $person;

    $input = readline();
}

usort($people, fn(Person $p1, Person $p2) => $p1->getAge() <=> $p2->getAge());

foreach ($people as $person) {
    echo $person;
}