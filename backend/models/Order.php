<?php
class Order {
    public $orderNumber;
    public $clientName;
    public $products;

    public function __construct($orderNumber, $clientName, $products) {
        $this->orderNumber = $orderNumber;
        $this->clientName = $clientName;
        $this->products = $products;
    }

    public function getOrderNumber() { return $this->orderNumber; }
    public function getClientName() { return $this->clientName; }
    public function getProducts() { return $this->product; }

    public function setOrderNumber($orderNumber) { $this->orderNumber = $orderNumber; }
    public function setClientName($clientName) { $this->clientName = $clientName; }
    public function setProducts($products) { $this->product = $products; }
}
?>