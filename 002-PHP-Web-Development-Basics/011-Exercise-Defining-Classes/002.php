<?php

class Number
{
    private int $value;
    private ?string $lastDigitName;

    public function __construct(int $value)
    {
        $this->value = $value;
        $this->lastDigitName = null;
    }

    public function getLastDigitName(): string
    {
        if (null !== $this->lastDigitName) {
            return $this->lastDigitName;
        }

        $lastDigit = $this->value % 10;
        $digitNames = [
            0 => 'zero',
            1 => 'one',
            2 => 'two',
            3 => 'three',
            4 => 'four',
            5 => 'five',
            6 => 'six',
            7 => 'seven',
            8 => 'eight',
            9 => 'nine'
        ];

        $this->lastDigitName = $digitNames[$lastDigit] ?? 'none';
        return $this->lastDigitName;
    }
}

$num = new Number(intval(readline()));
echo $num->getLastDigitName();