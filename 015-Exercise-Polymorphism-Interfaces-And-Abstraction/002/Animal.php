<?php


abstract class Animal
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $type;

    /**
     * @var float
     */
    private $weigth;

    /**
     * @var int
     */
    private $foodEaten;

    /**
     * Animal constructor.
     * @param string $name
     * @param string $type
     * @param float $weigth
     * @param int $foodEaten
     */
    public function __construct(string $name, string $type, float $weigth)
    {
        $this->setName($name);
        $this->setType($type);
        $this->setWeigth($weigth);
        $this->foodEaten = 0;
    }

    /**
     * @param string $name
     */
    private function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @param string $type
     */
    private function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * @param float $weigth
     */
    private function setWeigth(float $weigth): void
    {
        $this->weigth = $weigth;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return float
     */
    public function getWeigth(): float
    {
        return $this->weigth;
    }

    /**
     * @return int
     */
    public function getFoodEaten(): int
    {
        return $this->foodEaten;
    }

    /**
     * @param int $quantity
     */
    protected function setFoodEaten(int $quantity): void
    {
        $this->foodEaten += $quantity;
    }

    public abstract function makeSound(): void;

    public abstract function eat(Food $food): void;

}