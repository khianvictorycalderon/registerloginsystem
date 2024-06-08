<?php
function checked_account()
{
    global $conn, $log_name, $log_pass, $sql_check_accounts, $loggedIn, $fetched_username, $hashed_password, $activity;
    $sql_check_accounts = "
      SELECT `username`, `password`, `active` 
      FROM `user_data` 
      WHERE `username` = ?
      AND `active` = 0
    ";
    $stmt = $conn->prepare($sql_check_accounts);
    if (!$stmt) {
        die("<span class='sub'>Error: " . $conn->error . "</span>");
    }
    $stmt->bind_param("s", $log_name);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($fetched_username, $hashed_password, $activity);
        // fetched username and activity are for place holder only
        $stmt->fetch();
        if (password_verify($log_pass, $hashed_password)) {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}
?>
