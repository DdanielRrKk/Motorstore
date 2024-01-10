<?php
require_once "Vehicle.php";

class Motorcycle extends Vehicle {
    public function __construct($id, $productType, $brand, $model, $engineCapacity, $colour) {
        parent::__construct($id, $productType, $brand, $model, $engineCapacity, $colour);
    }
}
?> 