<?php
require_once "Product.php";

class Vehicle extends Product {
    public $engineCapacity;
    public $colour;

    public function __construct($id, $productType, $brand, $model, $engineCapacity, $colour) {
        parent::__construct($id, $productType, $brand, $model);
        $this->engineCapacity = $engineCapacity;
        $this->colour = $colour;
    }

    public function getEngineCapacity() { return $this->engineCapacity; }
    public function getColour() { return $this->colour; }

    public function setEngineCapacity($engineCapacity) { $this->engineCapacity = $engineCapacity; }
    public function setColour($colour) { $this->colour = $colour; }
}
?>