<?php
include_once "product.php";

class Trailer extends Product {
    public $loadCapacity;
    public $numberOfAxles;

    public function __construct($Id, $brand, $model, $loadCapacity, $numberOfAxles) {
        parent::__construct($Id, $brand, $model);
        $this->loadCapacity = $loadCapacity;
        $this->numberOfAxles = $numberOfAxles;
    }

    public function getLoadCapacity() { return $this->loadCapacity; }
    public function getNumberOfAxles() { return $this->numberOfAxles; }

    public function setLoadCapacity($loadCapacity) { $this->loadCapacity = $loadCapacity; }
    public function setNumberOfAxles($numberOfAxles) { $this->numberOfAxles = $numberOfAxles; }
}
?>
