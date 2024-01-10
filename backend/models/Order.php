<?php
class Order {
    public $id;
    public $orderNumber;
    public $clientName;
    public $products;

    public function __construct($id, $orderNumber, $clientName, $products) {
        $this->id = $id;
        $this->orderNumber = $orderNumber;
        $this->clientName = $clientName;
        $this->products = $products;
    }

    public function getid() { return $this->id; }
    public function getOrderNumber() { return $this->orderNumber; }
    public function getClientName() { return $this->clientName; }
    public function getProducts() { return $this->products; }

    public function setid($id) { $this->id = $id; }
    public function setOrderNumber($orderNumber) { $this->orderNumber = $orderNumber; }
    public function setClientName($clientName) { $this->clientName = $clientName; }
    public function setProducts($products) { $this->products = $products; }
}
?>