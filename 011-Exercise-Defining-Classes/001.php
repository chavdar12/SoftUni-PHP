<?php

class Text
{
    private array $chars;

    public function __construct(array $chars)
    {
        $this->chars = $chars;
    }

    public function substring(int $start, int $length = -1): Text
    {
        $result = [];
        $start = max(0, $start);
        $start = min(count($this->chars) - 1, $start);

        if ($length < 0 || $length >= count($this->chars)) {
            $length = count($this->chars) - $start;
        }

        for ($i = $start; $i < $start + $length; $i++) {
            $result[] = $this->chars[$i];
        }

        return new Text($result);
    }

    public function __toString(): string
    {
        return implode('', $this->chars);
    }
}

$name = new Text(['c', 'h', 'u', 's', 'h', 'k', 'i']);
echo $name . PHP_EOL;
echo $name->substring(2, 3);