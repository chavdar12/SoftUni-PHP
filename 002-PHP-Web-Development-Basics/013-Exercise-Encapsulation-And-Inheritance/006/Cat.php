<?php


abstract class Cat
{
    /**
     * @var string
     */
    private $breed;
    /**
     * @var string
     */
    private $name;

    /**
     * Cat constructor.
     * @param string $breed
     * @param string $name
     */
    protected function __construct(string $breed, string $name)
    {
        $this->setBreed($breed);
        $this->setName($name);
    }

    /**
     * @param string $breed
     */
    private function setBreed(string $breed): void
    {
        $this->breed = $breed;
    }

    /**
     * @param string $name
     */
    private function setName(string $name): void
    {
        $this->name = $name;
    }

    public function __toString(): string
    {
        return $this->getBreed() . " " . $this->getName();
    }

    /**
     * @return string
     */
    public function getBreed(): string
    {
        return $this->breed;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

}