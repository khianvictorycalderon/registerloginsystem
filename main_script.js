$(document).ready(function() {
    
});
var data = [];
        function clearfields() {
            $('#reg_name').val("");
            $('#reg_pass').val("");
            $('#reg_confirm_pass').val("");
            $('#log_name').val("");
            $('#log_pass').val("");
            $('#what-your-message').val("");
        }
        function register(usernameField, passwordField, confirmPasswordField) {
            var username = usernameField.val();
            var password = passwordField.val();
            var confirmPassword = confirmPasswordField.val();
            clearfields();
            if (username.trim() === "" || password.trim() === "" || confirmPassword.trim() === "") {
                alert("All fields are required for registration");
                return;
            }
            for (var i = 0; i < data.length; i++) {
                if (data[i].username === username) {
                    alert("Username already exists");
                    return;
                }
            }
            if (password !== confirmPassword) {
                alert("Passwords do not match");
                return;
            }
            data.push({ "username": username, "password": password });
            alert("Registration successful! You may now login");
            disable('#register-form'); enable('#reg-or-login');
        }

        function login(usernameField, passwordField) {
            var username = usernameField.val();
            var password = passwordField.val();
            clearfields();
            if (username === "" || password === "") {
                alert("Both fields are required for login");
                return;
            }
            for (var i = 0; i < data.length; i++) {
                if (data[i].username === username && data[i].password === password) {
                    alert("Login successful");
                    $('#loggedName').text(username);
                    $('#title-only').css('display','none');
                    $('#reg-or-login').css('display','none');
                    $('#register-form').css('display','none');
                    $('#login-form').css('display','none');
                    $('#login-success').css('display','block');
                    return;
                }
            }
            alert("Invalid username or password");
        }

        function logout() {
            clearfields();
            $('#login-success').css('display','none');
            $('#title-only').css('display','block');
            $('#reg-or-login').css('display','block');
        }