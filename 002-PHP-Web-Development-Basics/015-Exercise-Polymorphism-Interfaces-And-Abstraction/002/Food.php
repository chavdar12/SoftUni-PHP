<?php


abstract class Food
{
    private $quantity;

    protected function __construct(int $quantity)
    {
        $this->setQuantity($quantity);
    }

    /**
     * @param mixed $quantity
     */
    private function setQuantity($quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }
}