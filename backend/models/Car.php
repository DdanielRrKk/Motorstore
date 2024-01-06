<?php
include_once 'product.php';

class Car extends Product {
    public $engineCapacity;
    public $colour;
    public $numberOfDoors;
    public $carCategory;

    public function __construct($Id, $brand, $model, $engineCapacity, $colour, $numberOfDoors, $carCategory) {
        parent::__construct($Id, $brand, $model);
        $this->engineCapacity = $engineCapacity;
        $this->colour = $colour;
        $this->numberOfDoors = $numberOfDoors;
        $this->carCategory = $carCategory;
    }

    public function getEngineCapacity() { return $this->engineCapacity; }
    public function getColour() { return $this->colour; }
    public function getNumberOfDoors() { return $this->numberOfDoors; }
    public function getCarCategory() { return $this->carCategory; }

    public function setEngineCapacity($engineCapacity) { $this->engineCapacity = $engineCapacity; }
    public function setColour($colour) { $this->colour = $colour; }
    public function setNumberOfDoors($numberOfDoors) { $this->numberOfDoors = $numberOfDoors; }
    public function setCarCategory($carCategory) { $this->carCategory = $carCategory; }
}
