<?php
  global $conn, $hashed_pass, $reg_name, $reg_pass;
  try {
    $sql_register = "
     INSERT INTO `user_data` (username, password, plain_password)
     VALUES (?, ?, ?)
    ";
    //Registered Successful!
    (function() {
      ?>
         <script>
         disable('#reg-or-login');
         </script>
         <div id="registered">
         <span class='sub'>You are now Registered!</span><br>
         <span class='sub'>You may login now!</span><br>
         <button onclick="disable('#registered'); enable('#reg-or-login')" class="form-btn sub">Home</button>
         </div>
      <?php
    })();
   } catch (Exception $e) {
    echo `<span class='sub'>Unable to Register: ` . $e->getMessage() . `</span>`;
   }
   $stmt = $conn->prepare($sql_register);
   $stmt->bind_param("sss", $reg_name, $hashed_pass, $reg_pass);
   $stmt->execute();
?>