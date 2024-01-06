<?php
include_once "product.php";

class Truck extends Product {
    public $engineCapacity;
    public $colour;
    public $numberOfBeds;

    public function __construct($Id, $brand, $model, $engineCapacity, $colour, $numberOfBeds) {
        parent::__construct($Id, $brand, $model);
        $this->engineCapacity = $engineCapacity;
        $this->colour = $colour;
        $this->numberOfBeds = $numberOfBeds;
    }

    public function getEngineCapacity() { return $this->engineCapacity; }
    public function getColour() { return $this->colour; }
    public function getNumberOfBeds() { return $this->numberOfBeds; }

    public function setEngineCapacity($engineCapacity) { $this->engineCapacity = $engineCapacity; }
    public function setColour($colour) { $this->colour = $colour; }
    public function setNumberOfBeds($numberOfBeds) { $this->numberOfBeds = $numberOfBeds; }
}
?>