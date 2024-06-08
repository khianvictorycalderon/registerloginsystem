<?php
 function goActive() {
    global $conn, $log_name;
    $sql_go_active = "
    UPDATE `user_data` 
    SET `active` = '1' 
    WHERE `username` = ?;
    ";
    $stmt = $conn->prepare($sql_go_active);
    $stmt->bind_param("s",$log_name);
    $stmt->execute();
 }
 
 function goInActive() {
    global $conn;
    $sql_go_inactive = "
    UPDATE `user_data` 
    SET `active` = '0' 
    WHERE `username` = ?;
    ";
    $stmt2 = $conn->prepare($sql_go_inactive);
    $stmt2->bind_param("s",$_COOKIE["logged_user"]);
    $stmt2->execute();
 }
?>