<?php

class Person {
    public $name;
    public $money;
    public $products = [];

    public function __construct($name, $money) {
        $this->name = $name;
        $this->money = $money;
    }

    public function buyProduct($product) {
        if ($this->money >= $product->cost) {
            $this->money -= $product->cost;
            $this->products[] = $product;
        } else {
            echo "{$this->name} can't afford {$product->name}\n";
        }
    }
}

class Product {
    public $name;
    public $cost;

    public function __construct($name, $cost) {
        $this->name = $name;
        $this->cost = $cost;
    }
}

$peopleData = explode(";", trim(fgets(STDIN)));
$productsData = explode(";", trim(fgets(STDIN)));

$people = [];
foreach ($peopleData as $data) {
    list($name, $money) = explode("=", $data);
    $people[$name] = new Person($name, floatval($money));
}

$products = [];
foreach ($productsData as $data) {
    list($name, $cost) = explode("=", $data);
    $products[$name] = new Product($name, floatval($cost));
}

while (true) {
    $input = trim(fgets(STDIN));
    if ($input === "END") break;

    list($personName, $productName) = explode(" ", $input);
    $people[$personName]->buyProduct($products[$productName]);
}

foreach ($people as $person) {
    if (empty($person->products)) {
        echo "{$person->name} – Nothing bought\n";
    } else {
        echo "{$person->name} – " . implode(", ", array_map(function($p) { return $p->name; }, $person->products)) . "\n";
    }
}

?>