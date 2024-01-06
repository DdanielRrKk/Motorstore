<?php
class Orders {
    public $Id;
    public $orderNumber;
    public $clientName;

    public function __construct($Id, $orderNumber, $clientName) {
        $this->Id = $Id;
        $this->orderNumber = $orderNumber;
        $this->clientName = $clientName;
    }

    public function getId() { return $this->Id; }
    public function getOrderNumber() { return $this->orderNumber; }
    public function getClientName() { return $this->clientName; }

    public function setId($Id) { $this->Id = $Id; }
    public function setOrderNumber($orderNumber) { $this->orderNumber = $orderNumber; }
    public function setClientName($clientName) { $this->clientName = $clientName; }
}
?>