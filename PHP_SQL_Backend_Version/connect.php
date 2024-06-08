<?php
$db_server = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "actual_db";

try {
    $conn = new mysqli($db_server, $db_user, $db_password, $db_name);
    if ($conn->connect_error) {
        throw new Exception("Could Not Connect: " . $conn->connect_error);
    }
} catch (Exception $e) {
    echo "Database Connection Error: " . $e->getMessage();
    exit();
}
?>
