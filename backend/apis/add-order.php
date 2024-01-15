<?php
    require_once '../SQLConnection.php';

    require_once '../models/Order.php';
    require_once '../models/Motorcycle.php';
    require_once '../models/Car.php';
    require_once '../models/Truck.php';
    require_once '../models/Trailer.php';

    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Credentials: true');
    header('Access-Control-Allow-Methods: POST');
    header('Access-Control-Allow-Headers: Content-Type');
    header('Content-Type: application/json');

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $conn = SQLConncetion::get_connection();
        
        $data = json_decode(file_get_contents("php://input"), true);

        $orderNumber = $data['OrderNumber'];
        $clientName = $data['ClientName'];
        $products = $data['OrderedProducts'];

        foreach ($products as $product) {
            echo $product['quantity'];

            $query = "CALL AddOrder(?, ?, ?, ?);";
            $stmt = $conn->prepare($query);
            $stmt->bind_param("ssii", $orderNumber, $clientName, $product['id'], $product['quantity']);
            $stmt->execute();
        }
            
            $stmt->close();
            $conn->close();
    }
    else {
        echo "Invalid request method";
    }
    ?>