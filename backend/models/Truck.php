<?php
require_once "Vehicle.php";

class Truck extends Vehicle {
    public $numberOfBeds;

    public function __construct($id, $productType, $brand, $model, $engineCapacity, $colour, $numberOfBeds) {
        parent::__construct($id, $productType, $brand, $model, $engineCapacity, $colour);
        $this->numberOfBeds = $numberOfBeds;
    }

    public function getNumberOfBeds() { return $this->numberOfBeds; }

    public function setNumberOfBeds($numberOfBeds) { $this->numberOfBeds = $numberOfBeds; }
}
?>