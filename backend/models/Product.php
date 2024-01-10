<?php
class Product {
    public $id;
    public $productType;
    public $brand;
    public $model;

    public function __construct($id, $productType, $brand, $model) {
        $this->id = $id;
        $this->productType = $productType;
        $this->brand = $brand;
        $this->model = $model;
    }

    public function getId() { return $this->id; }
    public function getProductType() { return $this->productType; }
    public function getBrand() { return $this->brand; }
    public function getModel() { return $this->model; }

    public function setId($id) { $this->id = $id; }
    public function setProductType($productType) { $this->productType = $productType; }
    public function setBrand($brand) { $this->brand = $brand; }
    public function setModel($model) { $this->model = $model; }
}
?>