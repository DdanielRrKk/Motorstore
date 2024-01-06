<?php
class Product {
    public $Id;
    public $brand;
    public $model;

    public function __construct($Id, $brand, $model) {
        $this->Id = $Id;
        $this->brand = $brand;
        $this->model = $model;
    }

    public function getId() { return $this->Id; }
    public function getBrand() { return $this->brand; }
    public function getModel() { return $this->model; }

    public function setId($Id) { $this->Id = $Id; }
    public function setBrand($brand) { $this->brand = $brand; }
    public function setModel($model) { $this->model = $model; }
}
?>