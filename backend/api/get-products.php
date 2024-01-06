<?php
    $serverName = "DESKTOP-F6N9F54";
    $connectionOptions = array("Database" => "motorstore", "Uid" => "daniel", "PWD" => "admin");

    $conn = sqlsrv_connect($serverName, $connectionOptions);

    // $productId = $_GET['id'];

    $query = "SELECT * FROM dbo.Products WHERE";
    $stmt = sqlsrv_query($conn, $query);

    if ($stmt === false) die(print_r(sqlsrv_errors(), true));

    while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
        $array[] = $row;
    }

    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');

    echo json_encode($array);
?>