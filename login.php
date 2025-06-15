<?php
session_start();
include 'connection.php';

if (isset($_POST['submit'])) {

    $password = $_POST['password'];
    $sql = "select * from user where email = '".$_POST['email']."' AND
    password = '$password'";

    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_array($result);

    if(!empty($data)){
      $_SESSION['id'] = $data['id'];
      $_SESSION['user_type'] = $data['user_type'];
      $_SESSION['name'] = $data['name'];
      $_SESSION['email'] = $data['email'];
      $_SESSION['phone'] = $data['phone'];
      $_SESSION['country'] = $data['country'];
      $_SESSION['gender'] = $data['gender'];
      $_SESSION['birthdate'] = $data['birthdate'];
      
      if($data['user_type'] === 'Candidate'){
      header('location:dashboard.php');
      }elseif($data['user_type'] === 'Recruiter'){
        header('location:dashboard.php');
      }else{
        header('location:users.php');
      }
    }else{
      $_SESSION['login_message'] = "Invalid email or password . Please try again.";
    }

}
?>




<!DOCTYPE html>

<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="assets/css2/lgin.css">
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

  <style>
    .input-field {
            position: relative;
        }

        .toggle-password {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
        }
  </style>
</head>
<body>
  <div class="wrapper">
    <form method="post" action="login.php">
      <h2>Login</h2>
      <?php
    if (isset($_SESSION['login_message'])) {
        echo "<p style='color:white; border: 2px solid white; border-radius: 7px; padding: 5px'>" . $_SESSION['login_message'] . "</p>";
        unset($_SESSION['login_message']); // Clear the message after displaying it
    }
    ?>
        <div class="input-field">
        <input type="text" name='email' id='email' required>
        <label>Enter your email</label>
      </div>
      <div class="input-field">
        <input type="password" name='password' id='password' required>
        <label>Enter your password</label>
        <span class="toggle-password" onclick="togglePasswordVisibility()">
                <i style="color:white;" class="fa-regular fa-eye-slash"></i>
            </span>      
          </div>
      <br>
      <button type="submit" id="submit" name="submit">Log In</button>
      <div class="register">
        <p>Don't have an account? <a href="signup.php" type="submit">Register</a></p>
      </div>
    </form>
  </div>

  <script>
        function togglePasswordVisibility() {
            var passwordField = document.getElementById('password');
            var icon = document.querySelector('.toggle-password i');
            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            } else {
                passwordField.type = 'password';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            }
        }
    </script>
    <script src="https://kit.fontawesome.com/3acead0521.js" crossorigin="anonymous"></script>

</body>
</html>