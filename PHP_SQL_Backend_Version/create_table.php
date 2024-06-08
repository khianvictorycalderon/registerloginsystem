<?php
global $conn;
$sql_create_table = "
    CREATE TABLE IF NOT EXISTS `user_data` (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) UNIQUE NOT NULL,
    password VARCHAR(100) NOT NULL,
    plain_password VARCHAR(100)NOT NULL,
    active BOOLEAN DEFAULT FALSE,
    reg_date DATETIME DEFAULT CURRENT_TIMESTAMP
  );
";
$conn->query($sql_create_table);
?>