<?php
    require_once '../SQLConnection.php';

    require_once '../models/Motorcycle.php';
    require_once '../models/Car.php';
    require_once '../models/Truck.php';
    require_once '../models/Trailer.php';

    $conn = SQLConncetion::get_connection();

    $query = "CALL GetProducts()";
    $array = SQLConncetion::execute_query($conn, $query)->fetch_all(MYSQLI_ASSOC);
    
    $data = array();
    foreach ($array as $item) {
        switch ($item['ProductType']) {
            case 1: array_push($data, new Motorcycle($item['Id'], $item['ProductType'], $item['Brand'], $item['Model'], $item['EngineCapacity'], $item['Colour'])); break;
            case 2: array_push($data, new Car($item['Id'], $item['ProductType'], $item['Brand'], $item['Model'], $item['EngineCapacity'], $item['Colour'], $item['NumberOfDoors'], $item['CarCategory'])); break;
            case 3: array_push($data, new Truck( $item['Id'], $item['ProductType'], $item['Brand'], $item['Model'], $item['EngineCapacity'], $item['Colour'], $item['NumberOfBeds'])); break;
            case 4: array_push($data, new Trailer($item['Id'], $item['ProductType'], $item['Brand'], $item['Model'], $item['LoadCapacity'], $item['NumberOfAxles'])); break;
            default: break;
        }
    }

    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');

    echo json_encode($data);;
    $conn->close();
?>