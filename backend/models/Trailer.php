<?php
require_once "Product.php";

class Trailer extends Product {
    public $loadCapacity;
    public $numberOfAxles;

    public function __construct($id, $productType, $brand, $model, $loadCapacity, $numberOfAxles) {
        parent::__construct($id, $productType, $brand, $model);
        $this->loadCapacity = $loadCapacity;
        $this->numberOfAxles = $numberOfAxles;
    }

    public function getLoadCapacity() { return $this->loadCapacity; }
    public function getNumberOfAxles() { return $this->numberOfAxles; }

    public function setLoadCapacity($loadCapacity) { $this->loadCapacity = $loadCapacity; }
    public function setNumberOfAxles($numberOfAxles) { $this->numberOfAxles = $numberOfAxles; }
}
?>
