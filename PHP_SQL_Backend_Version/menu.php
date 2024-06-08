<?php
  function write_menu() {
    ?>
                <div id="head-title">
                  <span class="title">JQuery PHP SQL Backend <br>Register and Login System</span><br>
                  <span class="sub">By 
                    <a href="https://khianvictorycalderon.github.io/" target="_blank">
                    Khian Calderon</a>
                  </span><br>
                  <hr>
                </div>
                <script>
                    function enable(x) {
                        $(x).css("display", "block");
                    }
                    function disable(x) {
                        $(x).css("display", "none");
                    }
                </script>
                <div id="reg-or-login">
                    <span class="title">Login or Register?</span><br><br>
                    <button onclick="disable('#reg-or-login'); enable('#register-form')"
                        class="form-btn sub">Register</button>
                    &nbsp &nbsp &nbsp
                    <button onclick="disable('#reg-or-login'); enable('#login-form')" class="form-btn sub">Login</button>
                </div>
                <div id="register-form">
                    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="left" method="post">
                        <label class="sub" for="reg_name">Register Username: </label><br>
                        <input class="sub" name="reg_name" type="text"><br>
                        <label class="sub" for="reg_pass">Password: </label><br>
                        <input class="sub" name="reg_pass" type="password"><br>
                        <label class="sub" for="reg_confirm_pass">Confirm Password: </label><br>
                        <input class="sub" name="reg_confirm_pass" type="password"><br>
                        <br>
                        <hr><br>
                        <div class="center">
                            <button onclick="disable('#register-form'); enable('#reg-or-login')"
                                class="form-btn sub">Back</button>
                            <input class="sub" name="register" type="submit" value="Register"><br><br>
                        </div>
                    </form>
                </div>
                <div id="login-form">
                    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="left" method="post">
                        <label class="sub" for="log_name">Username: </label><br>
                        <input class="sub" name="log_name" type="text"><br>
                        <label class="sub" for="log_pass">Password: </label><br>
                        <input class="sub" name="log_pass" type="password"><br>
                        <br>
                        <hr><br>
                        <div class="center">
                            <button onclick="disable('#login-form'); enable('#reg-or-login')"
                                class="form-btn sub">Back</button>
                            <input class="sub" name="login" type="submit" value="Login"><br><br>
                        </div>
                    </form>
                </div>
                <?php
  }
?>