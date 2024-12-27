<?php

class Engine {
    public $speed;
    public $power;

    public function __construct($speed, $power) {
        $this->speed = $speed;
        $this->power = $power;
    }
}

class Cargo {
    public $weight;
    public $type;

    public function __construct($weight, $type) {
        $this->weight = $weight;
        $this->type = $type;
    }
}

class Car {
    public $model;
    public $engine;
    public $cargo;

    public function __construct($model, $engine, $cargo) {
        $this->model = $model;
        $this->engine = $engine;
        $this->cargo = $cargo;
    }
}

$n = intval(trim(fgets(STDIN)));
$cars = [];

for ($i = 0; $i < $n; $i++) {
    $data = explode(" ", trim(fgets(STDIN)));
    $model = $data[0];
    $engine = new Engine(intval($data[1]), intval($data[2]));
    $cargo = new Cargo(intval($data[3]), $data[4]);
    $cars[] = new Car($model, $engine, $cargo);
}

$command = trim(fgets(STDIN));

if ($command === "fragile") {
    foreach ($cars as $car) {
        if ($car->cargo->type === "fragile" && $car->cargo->weight < 1000) {
            echo $car->model . "\n";
        }
    }
} elseif ($command === "flamable") {
    foreach ($cars as $car) {
        if ($car->cargo->type === "flamable" && $car->engine->power > 250) {
            echo $car->model . "\n";
        }
    }
}

?>