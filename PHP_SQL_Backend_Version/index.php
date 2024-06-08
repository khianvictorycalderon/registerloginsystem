<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="icons/database.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="jquery.js"></script>
    <title>
        Backend Register Login System
    </title>
</head>

<body>
    <div id="content">
        <div id="form-box">
            <?php
            include("connect.php");
            session_start();
            if (isset($_COOKIE["loggedIn"]) && $_COOKIE["loggedIn"] == "true") {
                include_once("log_in_user.php");
            } else {
                include_once("menu.php");
                write_menu();
            }
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_POST["register"])) {
                    include("register_try.php");
                }
                if (isset($_POST["login"])) {
                    include("login_try.php");
                }
            }
            ?>
        </div>
    </div>
</body>

</html>

<?php
$conn->close();
?>