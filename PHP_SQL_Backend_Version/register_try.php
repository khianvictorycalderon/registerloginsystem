<?php
    // POST to PHP Variables
    $reg_name = $_POST["reg_name"];
    $reg_pass = $_POST["reg_pass"];
    $reg_confirm_pass = $_POST["reg_confirm_pass"];
    $hashed_pass = password_hash($reg_pass, PASSWORD_DEFAULT);

    include ("create_table.php"); // if table is not yet created
    include ("reg_check_username.php");

    if (isset($reg_name)) {
        if (empty($reg_name)) {
            include ("reg_empty_username.php");
        } else if (check_username()) {
            include ("reg_username_taken.php");
        } else if (empty($reg_pass)) {
            include ("reg_empty_password.php");
        } else if ($reg_pass != $reg_confirm_pass) {
            include ("reg_password_not_matched.php");
        } else {
            // for double checking purpose only
            if (check_username() == false && $reg_pass == $reg_confirm_pass) {
                include ("register.php");
            } else {
                ?>
                            <script>
                                disable('#reg-or-login'); enable('#register-form');
                            </script>
                            <span class='sub'>WARNING: Unknown Error</span>
                <?php
            }
        }
    }
?>