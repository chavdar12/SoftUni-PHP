<?php
class Item {
    private $name;
    private $price;

    public function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }

    public function getName() {
        return $this->name;
    }

    public function getPrice() {
        return $this->price;
    }
}

class Box {
    private $serialNumber;
    private $item;
    private $itemQuantity;

    public function __construct($serialNumber, $item, $itemQuantity) {
        $this->serialNumber = $serialNumber;
        $this->item = $item;
        $this->itemQuantity = $itemQuantity;
    }

    public function getPrice() {
        return $this->item->getPrice() * $this->itemQuantity;
    }

    public function getSerialNumber() {
        return $this->serialNumber;
    }

    public function getItemName() {
        return $this->item->getName();
    }

    public function getItemQuantity() {
        return $this->itemQuantity;
    }
}

$boxes = [];
while (true) {
    $input = fgets(STDIN);
    if (trim($input) === 'end') {
        break;
    }
    list($serialNumber, $itemName, $itemQuantity, $itemPrice) = explode(' ', trim($input));
    $item = new Item($itemName, floatval($itemPrice));
    $box = new Box($serialNumber, $item, intval($itemQuantity));
    $boxes[] = $box;
}

usort($boxes, function($a, $b) {
    return $b->getPrice() - $a->getPrice();
});

foreach ($boxes as $box) {
    echo $box->getSerialNumber() . PHP_EOL;
    echo "-- " . $box->getItemName() . " - $" . number_format($box->getItemPrice(), 2) . ": " . $box->getItemQuantity() . PHP_EOL;
    echo "-- $" . number_format($box->getPrice(), 2) . PHP_EOL;
}
?>