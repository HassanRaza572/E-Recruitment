<?php
session_start();
include "connection.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $birthdate = $_POST['birthdate'];
    $country = $_POST['phone'];
    $password = $_POST['password'];
    // Add other fields as necessary

    $sql = "UPDATE user SET name = '$name', email = '$email', password = '$password', phone = '$phone', birthdate = '$birthdate', country = '$country' WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        echo "User updated successfully";
        header("location: users.php");
    } else {
        echo "Error updating user: " . $conn->error;
    }

     // Redirect back to the user list page
    exit();
}
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    $sql = "DELETE FROM user WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        header("Location: users.php");
        exit();
    } else {
        echo "Error deleting user: " . $conn->error;
    }
}

?>



<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
         <title>E-Recruitment system</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/fav.png">
		<!-- CSS here -->
            <link rel="stylesheet" href="assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="assets/css/flaticon.css">
            <link rel="stylesheet" href="assets/css/price_rangs.css">
            <link rel="stylesheet" href="assets/css/slicknav.css">
            <link rel="stylesheet" href="assets/css/animate.min.css">
            <link rel="stylesheet" href="assets/css/magnific-popup.css">
            <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="assets/css/themify-icons.css">
            <link rel="stylesheet" href="assets/css/slick.css">
            <link rel="stylesheet" href="assets/css/nice-select.css">
            <link rel="stylesheet" href="assets/css/style.css">

            <style>
            /* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    display: flex;
    align-items: center;
    justify-content: center;
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    padding: 20px;
    border: 1px solid #888;
    width: 50%; /* Default width for larger screens */
    max-width: 600px; /* Maximum width */
    margin: auto; /* Center horizontally */
    box-sizing: border-box;
    border-radius: 8px;
    margin-top:3%;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .modal-content {
        width: 80%; /* Adjust width for tablets */
    }
}

@media (max-width: 480px) {
    .modal-content {
        width: 90%; /* Adjust width for mobile devices */
        padding: 15px;
    }
}

/* The Close Button */
.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}

            </style>
   </head>

   <body>
   <!-- Preloader Start -->
   <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="assets/img/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <?php include "navbar.php"; ?>
    
    <main class="ml-5 mr-5 mt-5 mb-5">
        <h2 class="mt-3 mb-3">Users Information</h2>
        <hr>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Sr</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Date of Birth</th>
      <th scope="col">Counrty</th>
      <th scope="col">Role</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
include "connection.php";
$sql = "SELECT * FROM user";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $i = 1;
    while($row = $result->fetch_assoc()) {
        // Corrected condition to properly check user_type
        if ($row['user_type'] === 'Recruiter' || $row['user_type'] === 'Candidate') {
            $id = $row['id'];
?>
    <tr>
      <th scope="row"><?php echo $row['id']; ?></th>
      <td><?php echo $row['name']; ?></td>
      <td><?php echo $row['email']; ?></td>
      <td><?php echo $row['phone']; ?></td>
      <td><?php echo $row['birthdate']; ?></td>
      <td><?php echo $row['country']; ?></td>
      <td><?php echo $row['user_type']; ?></td>
      
      <td>
        <i  style="color:blue" class="fa-regular fa-pen-to-square fa-xl" ></i>
        <i id="delete-<?php echo $row['id']; ?>" class="fa-solid fa-trash ml-3 fa-xl" style="color:#FF0000; cursor: pointer;"></i>
    </td>
    </tr>
<?php
            $i++; // Increment the counter correctly
        }
    }
} else {
    echo "No user found.";
}
?>

  </tbody>
</table>

    </main>
<!-- Edit Form Modal -->
<div id="editModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Edit User Information</h2>
        <form id="editForm" method="POST" action="users.php">
            <input type="hidden" name="id" id="id" value="<?php echo $id; ?>">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="phone">Password:</label>
                <input type="text" name="password" id="password" class="form-control">
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="text" name="phone" id="phone" class="form-control">
            </div>
            <div class="form-group">
                <label for="birthdate">Date of Birth:</label>
                <input type="text" name="birthdate" id="birthdate" class="form-control">
            </div>
            <div class="form-group">
                <label for="country">Country:</label>
                <input type="text" name="country" id="country" class="form-control">
            </div>

            <!-- Add more fields as necessary -->
            <button type="submit" name="submit" class="btn btn-primary">Save Changes</button>
        </form>
    </div>
</div>


<?php include "footer.php"; ?>
  <!-- JS here -->

  <script>
    document.addEventListener('DOMContentLoaded', function() {
    var modal = document.getElementById("editModal");
    var span = document.getElementsByClassName("close")[0];

    document.querySelectorAll('.fa-pen-to-square').forEach(function(editBtn) {
        editBtn.onclick = function(event) {
            var tr = event.target.closest('tr');
            var userId = tr.querySelector('th').innerText;
            var userName = tr.querySelector('td:nth-child(2)').innerText;
            var userEmail = tr.querySelector('td:nth-child(3)').innerText;
            var userPassword = tr.querySelector('td:nth-child(4)').innerText;
            var userPhone = tr.querySelector('td:nth-child(5)').innerText;
            var userBirthdate = tr.querySelector('td:nth-child(6)').innerText;
            var userCountry = tr.querySelector('td:nth-child(7)').innerText;

            document.getElementById('id').value = userId;
            document.getElementById('name').value = userName;
            document.getElementById('email').value = userEmail;
            document.getElementById('password').value = userPassword;
            document.getElementById('phone').value = userPhone;
            document.getElementById('birthdate').value = userBirthdate;
            document.getElementById('country').value = userCountry;

            modal.style.display = "block";
        };
    });
    document.querySelectorAll('.fa-trash').forEach(function(deleteBtn) {
        deleteBtn.onclick = function(event) {
            var userId = event.target.id.split('-')[1];
            if (confirm("Are you sure you want to delete this user?")) {
                window.location.href = "users.php?id=" + userId;
            }
        };
    });

    span.onclick = function() {
        modal.style.display = "none";
    };

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    };
});

  </script>

        <script src="https://kit.fontawesome.com/3acead0521.js" crossorigin="anonymous"></script>
		<!-- All JS Custom Plugins Link Here here -->
        <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="./assets/js/popper.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="./assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="./assets/js/owl.carousel.min.js"></script>
        <script src="./assets/js/slick.min.js"></script>
        <script src="./assets/js/price_rangs.js"></script>
        
		<!-- One Page, Animated-HeadLin -->
        <script src="./assets/js/wow.min.js"></script>
		<script src="./assets/js/animated.headline.js"></script>
        <script src="./assets/js/jquery.magnific-popup.js"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="./assets/js/jquery.scrollUp.min.js"></script>
        <script src="./assets/js/jquery.nice-select.min.js"></script>
		<script src="./assets/js/jquery.sticky.js"></script>
        
        <!-- contact js -->
        <script src="./assets/js/contact.js"></script>
        <script src="./assets/js/jquery.form.js"></script>
        <script src="./assets/js/jquery.validate.min.js"></script>
        <script src="./assets/js/mail-script.js"></script>
        <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="./assets/js/plugins.js"></script>
        <script src="./assets/js/main.js"></script>
        
    </body>
</html> 