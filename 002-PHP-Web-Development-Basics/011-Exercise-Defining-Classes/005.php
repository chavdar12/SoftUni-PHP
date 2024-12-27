<?php

class Person
{
    private string $name;
    private int $age;

    public function __construct(string $name, int $age)
    {
        $this->name = $name;
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

class Family
{
    private array $members;
    private ?Person $oldestMember;

    public function __construct()
    {
        $this->members = [];
        $this->oldestMember = null;
    }

    public function addMember(Person $person): void
    {
        if ($this->oldestMember === null || $this->oldestMember->getAge() < $person->getAge()) {
            $this->oldestMember = $person;
        }
        $this->members[] = $person;
    }

    public function getOldestMember(): ?Person
    {
        return $this->oldestMember;
    }
}

$n = intval(readline());
$family = new Family();
while ($n--) {
    list($name, $age) = explode(" ", readline());
    $person = new Person($name, (int)$age);
    $family->addMember($person);
}

$oldestMember = $family->getOldestMember();
if ($oldestMember !== null) {
    echo $oldestMember->getName() . ' ' . $oldestMember->getAge();
} else {
    echo "There is no oldest member\n";
}