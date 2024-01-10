<?php
class SQLConncetion {
    private static $servername = "localhost";
    private static $username = "root";
    private static $password = "";
    private static $database = "motorstore";

    public static function get_connection() {
        $conn = new mysqli(self::$servername, self::$username, self::$password, self::$database);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        return $conn;
    }

    public static function execute_query($conn, $query) {
        $result = $conn->execute_query($query);
    
        if(!$result) {
            echo "Error: " . $query . "<br>" . $conn->error;
        }

        return $result;
    }
}
?>