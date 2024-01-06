<?php
include_once('product.php');

class Motorcycle extends Product {
    public $engineCapacity;
    public $colour;

    public function __construct($Id, $brand, $model, $engineCapacity, $colour) {
        parent::__construct($Id, $brand, $model);
        $this->engineCapacity = $engineCapacity;
        $this->colour = $colour;
    }

    public function getEngineCapacity() { return $this->engineCapacity; }
    public function getColour() { return $this->colour; }

    public function setEngineCapacity($engineCapacity) { $this->engineCapacity = $engineCapacity; }
    public function setColour($colour) { $this->colour = $colour; }
}
?> 