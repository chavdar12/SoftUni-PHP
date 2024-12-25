<?php

class DecimalNumber
{
    private string $value;

    public function __construct(string $value)
    {
        $this->value = $value;
    }

    public function printReversed(): void
    {
        echo strrev($this->value) . PHP_EOL;
    }
}

$num = new DecimalNumber(readline());
$num->printReversed();