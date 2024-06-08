<?php
  include_once("active_check.php");
  if(isset($_COOKIE["logged_user"])) {
    $logged_user = $_COOKIE["logged_user"];
  } else {
    setcookie("loggedIn", "true", time() + 10 * 365 * 24 * 60 * 60, "/");
    setcookie("logged_user", $_POST["log_name"], time() + 10 * 365 * 24 * 60 * 60, "/");
    $logged_user = $_POST["log_name"];
  }

 (function(){
    global $logged_user;
    ?>
     <script>
        disable('#reg-or-login, #head-title');
     </script>
     <span class='sub'>Welcome 
        <?php 
        echo $logged_user;
        ?>!</span><br>
     <hr>
     <span class='sub'>What's your message for today?</span>
     <form action="" method="post">
       <textarea rows="4" class="sub" name="message"></textarea>
     </form>
     <form action="log_out.php" method="post">
       <input class="sub" name="logout" type="submit" value="Logout">
     </form>
    <?php
 })();
 // preset: 
 // <span class='sub'></span>
?>