<?php

class Car {
    public $model;
    public $fuelAmount;
    public $fuelConsumption;
    public $distanceTraveled = 0;

    public function __construct($model, $fuelAmount, $fuelConsumption) {
        $this->model = $model;
        $this->fuelAmount = $fuelAmount;
        $this->fuelConsumption = $fuelConsumption;
    }

    public function drive($km) {
        $neededFuel = $km * $this->fuelConsumption;
        if ($neededFuel <= $this->fuelAmount) {
            $this->fuelAmount -= $neededFuel;
            $this->distanceTraveled += $km;
        } else {
            echo "Insufficient fuel for the drive\n";
        }
    }
}

$n = intval(trim(fgets(STDIN)));
$cars = [];

for ($i = 0; $i < $n; $i++) {
    $data = explode(" ", trim(fgets(STDIN)));
    $model = $data[0];
    $fuelAmount = floatval($data[1]);
    $fuelConsumption = floatval($data[2]);
    $cars[$model] = new Car($model, $fuelAmount, $fuelConsumption);
}

while (true) {
    $input = trim(fgets(STDIN));
    if ($input === "End") break;

    $data = explode(" ", $input);
    $command = $data[0];
    $model = $data[1];
    $km = intval($data[2]);

    if ($command === "Drive") {
        $cars[$model]->drive($km);
    }
}

foreach ($cars as $car) {
    echo "{$car->model} " . number_format($car->fuelAmount, 2) . " {$car->distanceTraveled}\n";
}

?>