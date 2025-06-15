
<?php

include 'connection.php';

if(isset($_POST['submit'])) {
  
    date_default_timezone_set("Asia/Karachi");
    $email = $_POST['email'];

    // Check if the email already exists
    $checkEmailQuery = "SELECT * FROM user WHERE email = '$email'";
    $checkEmailResult = mysqli_query($conn, $checkEmailQuery);

    if(mysqli_num_rows($checkEmailResult) > 0) {
        $_SESSION['signup_message'] = "Email already exists.";
    } else {

        // Insert the new user
        $sql = "INSERT INTO user (name, email, country, password, birthdate, gender, phone, user_type, time) VALUES ('".$_POST['name']."', '$email', '".$_POST['country']."', '".$_POST['password']."', '".$_POST['birthdate']."', '".$_POST['gender']."', '".$_POST['phone']."', '".$_POST['user_type']."', '".date('Y-m-d h:i:s')."')";

        $result = mysqli_query($conn, $sql);
        $count_sql = "SELECT COUNT(*) AS total FROM user";
        $count_result = $conn->query($count_sql);
        $count_row = $count_result->fetch_assoc();
        $total_user_entries = $count_row['total'];
        if($result) {
          header('location:login.php');
        } else {
          $_SESSION['signup_message'] = "UnSuccessfully register. Please try again";
        }
    }
}
?>






<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Signup</title>
  <link rel="stylesheet" href="assets/css2/lgin.css">
  
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

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
        h2{
          color:white;
          
        }
        .linkbtn {
  background: linear-gradient(90deg, rgba(74,0,85,1) 5%, rgba(251,36,106,1) 100%);
  width: 100px;
  color: #fff;
  font-weight: 600;
  border: none;
  padding: 12px 50px;
  cursor: pointer;
  border-radius: 3px;
  font-size: 16px;
  border: 2px solid transparent;
  transition: 0.3s ease;
  text-decoration: none;
  margin-left: 8px;
  margin-right:8px;
}
.linkbtn:hover {
  color: #fff;
  border-color: #fff;
  background: rgba(255, 255, 255, 0.15);
  text-decoration:none;
}
button {
  background: linear-gradient(90deg, rgba(74,0,85,1) 5%, rgba(251,36,106,1) 100%);
  color: #fff;
  font-weight: 600;
  border: none;
  padding: 12px 50px;
  cursor: pointer;
  border-radius: 3px;
  font-size: 16px;
  border: 2px solid transparent;
  transition: 0.3s ease;
  margin-left: 8px;
  margin-right:8px;
}

  </style>
  
</head>
<body>
  
  <div class="wrapper mt-5 mb-5">
  <form method="POST" action="signup.php">
      <h2>Signup</h2>

      <?php
    if (isset($_SESSION['signup_message'])) {
        echo "<p style='color:white; border: 2px solid white; border-radius: 7px; padding: 5px'>" . $_SESSION['signup_message'] . "</p>";
        unset($_SESSION['signup_message']); // Clear the message after displaying it
    }
    ?>
	  <div class="input-field">
        <input type="text" name='name' id='name' required>
        <label>Enter your name</label>
      </div>
      <div class="input-field">
        <input type="text" name='email' id='email' required>
        <label>Enter your email</label>
      </div>
      <div class="input-field">
        <input type="text" name='country' id='country' required>
        <label>Enter your Country</label>
      </div>
      <div class="input-field">
        <input type="password" name='password' id='password' required>
        <label>Enter your password</label>
        <span class="toggle-password" onclick="togglePasswordVisibility()">
                <i style="color:white;" class="fa-regular fa-eye-slash"></i>
            </span> 
      </div>
      <div class="input-field">
      <input type="text" name="birthdate" id="birthdate"  required>
        <label>Date of Birth (mm/dd/yyyy)</label>
      </div>
    <div class="input-field">
        <input type="number" name='phone' id='phone' required>
        <label>Enter your Phone</label>
      </div>
	  <div class="input-field">
		<select name='user_type' id='user_type' required>
		  <option disabled selected>Select an option</option>
		  <option value='Candidate' >Candidate</option>
		  <option value='Recruiter' >Recruiter</option>
		</select>
	  </div>
	  <br>
    <div class="btnbox">
      <button type="submit" name="submit">Sign up</button> 
      <a  href="index.php" class="linkbtn">Back</a>
    </div>
      <div class="register">
        <p>If you have an account? <a  href="login.php"  >Log In</a></p>
      </div>
    </form>
  </div>




    <script>
  const birthdateInput = document.getElementById('birthdate');
    const formattedDateDisplay = document.getElementById('formattedDate');

    birthdateInput.addEventListener('change', function () {
        const selectedDate = new Date(this.value);
        const options = { year: 'numeric', month: 'long', day: 'numeric' };
        const formattedDate = selectedDate.toLocaleDateString(undefined, options);
        formattedDateDisplay.textContent = `Selected Date: ${formattedDate}`;
    })
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>