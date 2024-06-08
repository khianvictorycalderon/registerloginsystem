<?php
    // POST to PHP Variables
    $log_name = $_POST["log_name"];
    $log_pass = $_POST["log_pass"];

    include ("create_table.php"); // if table is not yet created

    if (isset($log_name)) {
        if (empty($log_name)) {
            include ("log_empty_username.php");
        } else if (empty($log_pass)) {
            include ("log_empty_password.php");
        } else {
            include("log_check_account.php");
            if (checked_account()) {
                include_once("active_check.php");
                goActive();
                include_once("log_in_user.php");
            } else {
                if(isset($_COOKIE["loggedIn"]) != "true") {
                    include("log_no_user.php");
                }
            }
        }
    }
?>