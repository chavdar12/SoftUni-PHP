<?php

abstract class Vehicle
{
    protected $numberDoors;
    protected $color;
    protected $brand;
    protected $model;
    protected $year;

    public function __construct(int $numberDoors, string $color, string $brand, string $model, int $year)
    {
        $this->setNumberDoors($numberDoors);
        $this->setColor($color);
        $this->setBrand($brand);
        $this->setModel($model);
        $this->setYear($year);
        echo "Parent constructor called!\n";
    }

    public function getNumberDoors(): int
    {
        return $this->numberDoors;
    }

    protected function setNumberDoors(int $numberDoors): void
    {
        $this->numberDoors = $numberDoors;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    protected function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function getBrand(): string
    {
        return $this->brand;
    }

    protected function setBrand(string $brand): void
    {
        $this->brand = $brand;
    }

    public function getModel(): string
    {
        return $this->model;
    }

    protected function setModel(string $model): void
    {
        $this->model = $model;
    }

    public function getYear(): int
    {
        return $this->year;
    }

    protected function setYear(int $year): void
    {
        $this->year = $year;
    }

    public function __get($name)
    {
        if ($this->{$name} != null) {
            return $this->{$name};
        }
        return "property doesn't exist";
    }

    public function Paint($color)
    {
        $this->setColor($color);
    }

    public function __toString(): string
    {
        return "{$this->brand} {$this->model}, Year: {$this->year}, Color: {$this->color}, Doors: {$this->numberDoors}";
    }
}

class Car extends Vehicle
{
    public function __construct(int $numberDoors, string $color, string $brand, string $model, int $year)
    {
        parent::__construct($numberDoors, $color, $brand, $model, $year);
        echo "Car constructor called!\n";
    }

    public function Paint($color): void
    {
        $this->setColor($color);
    }

    public function __toString(): string
    {
        return "Car: " . parent::__toString();
    }
}

class Bicycle extends Vehicle
{
    private $forSkirt;
    private $riding;

    public function __construct(string $brand, string $model, int $year, string $color, bool $forSkirt = false)
    {
        parent::__construct(0, $color, $brand, $model, $year);
        $this->setForSkirt($forSkirt);
        $this->setRiding(false);
        echo "Bicycle constructor called!\n";
    }

    private function setForSkirt(bool $forSkirt): void
    {
        $this->forSkirt = $forSkirt;
    }

    private function setRiding(bool $riding): void
    {
        $this->riding = $riding;
    }

    public function isRiding(): bool
    {
        return $this->riding;
    }

    public function Ride(): void
    {
        $this->setRiding(true);
    }

    public function Stop(): void
    {
        $this->setRiding(false);
    }

    public function __toString(): string
    {
        return "Bicycle: " . parent::__toString() . ", Skirt-friendly: " . ($this->getForSkirt() ? "Yes" : "No");
    }

    public function getForSkirt(): bool
    {
        return $this->forSkirt;
    }
}

$b1 = new Bicycle("China1", "Fake1", 2001, "Yellow", true);
$b2 = new Bicycle("China2", "Fake2", 2002, "Red");

$b1->Ride();
$b2->Stop();

echo $b1 . PHP_EOL;
echo $b2 . PHP_EOL;