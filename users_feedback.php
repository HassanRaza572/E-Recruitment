<?php
session_start();
include "connection.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $feedback_id = $_POST['feedback_id'];

    $sql = "DELETE FROM feedback WHERE feedback_id = '$feedback_id'";

    if($conn->query($sql) === True){
        header("Location: users_feedback.php"); // Replace with the actual page name
    
    }
    exit();
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
                .message-cell {
    max-width: 250px; /* Adjust the width according to your design */
    word-wrap: break-word; /* Break long words */
    white-space: pre-wrap; /* Preserve white spaces and wrap text */
    overflow-wrap: break-word; /* Break long words if necessary */
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
        <h2 class="mt-3 mb-3">Users Feedbacks</h2>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Sr</th>
      <th scope="col">Name</th>
      <th scope="col">Comment</th>
      <th scope="col">Rating</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
include "connection.php";
$sql = "SELECT * FROM feedback";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
?>
    <tr>
      <th scope="row"><?php echo $row['feedback_id']; ?></th>
      <td><?php echo $row['user_name']; ?></td>
      <td class="message-cell"><?php echo $row['comment']; ?></td>
      <td><?php echo $row['rating']; ?></td>
      <td>
      <form action="users_feedback.php" method="POST" style="display:inline;">
            <input type="hidden" name="feedback_id" value="<?php echo $row['feedback_id']; ?>">
            <button type="submit" style="border:none;background:none;">
                <i class="fa-solid fa-trash fa-xl" style="color:#FF0000; cursor: pointer;"></i>
            </button>
            <i class="fa-solid fa-file-import fa-xl ml-2 " style="color:#000080;"></i>
        </form>

    </td>
    </tr>
<?php
    }
}
?>

  </tbody>
</table>

    </main>

<?php include "footer.php"; ?>
  <!-- JS here -->

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