<?php
  include("connect.php");
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["logout"])) {
        include_once("active_check.php");
        goInActive();
        setcookie("loggedIn", "", time() + 0, "/");
        setcookie("logged_user", "", time() + 0, "/");
        session_destroy();
        header("Location:index.php");
    }
  }
?>