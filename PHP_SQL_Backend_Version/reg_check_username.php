<?php
 function check_username() {
    global $conn, $reg_name;
    $sql_check_username = "
      SELECT `username` FROM `user_data` WHERE `username` = ?;
    ";
    $stmt = $conn->prepare($sql_check_username);
    if (!$stmt) {
        die("<span class='sub'>Error: " . $conn->error . "</span>");
    }
    $stmt->bind_param("s",$reg_name);
    $stmt->execute();
    $stmt->store_result();
    if($stmt->num_rows > 0) {
        return true;
    } else {
        return false;
    }
 }
?>