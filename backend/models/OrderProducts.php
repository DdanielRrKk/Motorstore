<?php
class OrderProducts {
    public $orderID;
    public $productID;

    public function __construct($orderID, $productID) {
        $this->orderID = $orderID;
        $this->productID = $productID;
    }

    public function getOrderID() { return $this->orderID; }
    public function getProductID() { return $this->productID; }

    public function setOrderID($orderID) { $this->orderID = $orderID; }
    public function setProductID($productID) { $this->productID = $productID; }
}
?>