<?php

class Truck {
    private $brand;
    private $model;
    private $weight;

    public function __construct($brand, $model, $weight) {
        $this->brand = $brand;
        $this->model = $model;
        $this->weight = $weight;
    }

    public function getBrand() {
        return $this->brand;
    }

    public function getModel() {
        return $this->model;
    }

    public function getWeight() {
        return $this->weight;
    }
}

class Car {
    private $brand;
    private $model;
    private $horsePower;

    public function __construct($brand, $model, $horsePower) {
        $this->brand = $brand;
        $this->model = $model;
        $this->horsePower = $horsePower;
    }

    public function getBrand() {
        return $this->brand;
    }

    public function getModel() {
        return $this->model;
    }

    public function getHorsePower() {
        return $this->horsePower;
    }
}

class Catalog {
    private $cars = [];
    private $trucks = [];

    public function addCar($car) {
        $this->cars[] = $car;
    }

    public function addTruck($truck) {
        $this->trucks[] = $truck;
    }

    public function getCars() {
        return $this->cars;
    }

    public function getTrucks() {
        return $this->trucks;
    }
}

$catalog = new Catalog();

while (true) {
    $input = fgets(STDIN);
    if (trim($input) === 'end') {
        break;
    }
    $parts = explode('/', trim($input));
    $type = $parts[0];
    $brand = $parts[1];
    $model = $parts[2];
    $attribute = $parts[3];

    if ($type === 'Car') {
        $catalog->addCar(new Car($brand, $model, $attribute));
    } elseif ($type === 'Truck') {
        $catalog->addTruck(new Truck($brand, $model, $attribute));
    }
}

$cars = $catalog->getCars();
$trucks = $catalog->getTrucks();

usort($cars, function($a, $b) {
    return strcmp($a->getBrand(), $b->getBrand());
});

usort($trucks, function($a, $b) {
    return strcmp($a->getBrand(), $b->getBrand());
});

echo "Cars:\n";
foreach ($cars as $car) {
    echo $car->getBrand() . ": " . $car->getModel() . " - " . $car->getHorsePower() . "hp\n";
}

echo "Trucks:\n";
foreach ($trucks as $truck) {
    echo $truck->getBrand() . ": " . $truck->getModel() . " - " . $truck->getWeight() . "kg\n";
}
?>