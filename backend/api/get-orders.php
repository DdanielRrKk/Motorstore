<?php
    require_once '../SQLConnection.php';

    require_once '../models/Order.php';
    require_once '../models/Motorcycle.php';
    require_once '../models/Car.php';
    require_once '../models/Truck.php';
    require_once '../models/Trailer.php';

    $conn = SQLConncetion::get_connection();

    $query = "CALL GetOrders()";
    $array = SQLConncetion::execute_query($conn, $query);


    $data = array();
    while($item = $array->fetch_assoc()) {
        echo json_encode($item);

        $field = "".$item->OrderID."";
        $data[$field] = new Order($item->OrderID, $item->OrderNumber, $item->ClientName, array());

        $product;
        switch ($item['ProductType']) {
            case 1:
                $product = new Motorcycle($item['ProductID'], $item['ProductType'], $item['Brand'], $item['Model'], $item['EngineCapacity'], $item['Colour']);
                break;
            
            case 2:
                $product = new Car($item['ProductID'], $item['ProductType'], $item['Brand'], $item['Model'], $item['EngineCapacity'], $item['Colour'], $item['NumberOfDoors'], $item['CarCategory']);
                break;
                
            case 3:
                $product = new Truck( $item['ProductID'], $item['ProductType'], $item['Brand'], $item['Model'], $item['EngineCapacity'], $item['Colour'], $item['NumberOfBeds']);
                break;
                
            case 4:
                $product = new Trailer($item['ProductID'], $item['ProductType'], $item['Brand'], $item['Model'], $item['LoadCapacity'], $item['NumberOfAxles']);
                break;
        
            default: break;
        }

        $data[$field]->setProducts(array_merge($data[$field]->getProducts(), [$product]));
    }

    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');

    echo json_encode($data);
    $conn->close();
?>