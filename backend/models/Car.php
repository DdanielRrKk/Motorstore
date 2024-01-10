<?php
require_once "Vehicle.php";

class Car extends Vehicle {
    public $numberOfDoors;
    public $carCategory;

    public function __construct($id, $productType, $brand, $model, $engineCapacity, $colour, $numberOfDoors, $carCategory) {
        parent::__construct($id, $productType, $brand, $model, $engineCapacity, $colour);
        $this->numberOfDoors = $numberOfDoors;
        $this->carCategory = $carCategory;
    }

    public function getNumberOfDoors() { return $this->numberOfDoors; }
    public function getCarCategory() { return $this->carCategory; }

    public function setNumberOfDoors($numberOfDoors) { $this->numberOfDoors = $numberOfDoors; }
    public function setCarCategory($carCategory) { $this->carCategory = $carCategory; }
}
?>