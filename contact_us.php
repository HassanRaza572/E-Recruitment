<?php
// Updated PHP code
session_start();
include "connection.php";

if(isset($_POST['submit'])){
    $message = $_POST['message'];
    $user_name = $_POST['user_name'];
    $sender_email = $_POST['sender_email'];
    $subject = $_POST['subject'];

    // Update: Correct query to check if the receiver email exists
    $checkEmailQuery = "SELECT * FROM user";
    $checkEmailResult = mysqli_query($conn, $checkEmailQuery);

    // Check if the receiver email exists by counting the number of rows returned
    if(mysqli_num_rows($checkEmailResult) > 0) {

        // Check if the sender email matches the session email
        if($sender_email == $_SESSION['email']){

            $sql = "INSERT INTO `contact_us`(`receiver_email`, `message`, `user_name`, `sender_email`, `subject`) 
                    VALUES ('$receiver_email','$message','$user_name','$sender_email','$subject')";

            if($conn->query($sql) === True){
                $_SESSION['post_message'] = "Message sent successfully.";
            }else{
                $_SESSION['post_message'] = "Message cannot be sent.";
            }
        } else {
            $_SESSION['post_message'] = "Invalid sender email. Please try again!!";
        }
    }
    else{
        $_SESSION['post_message'] = "Invalid receiver email. Please try again!!";
    }
}
?>




<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
     <title>E-Recruitment system </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/fav.png">
   <!-- CSS here -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/slicknav.css">
        <link rel="stylesheet" href="assets/css/price_rangs.css">
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="assets/css/themify-icons.css">
        <link rel="stylesheet" href="assets/css/themify-icons.css">
        <link rel="stylesheet" href="assets/css/slick.css">
        <link rel="stylesheet" href="assets/css/nice-select.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
        <style>
                .message-cell {
    max-width: 250px; /* Adjust the width according to your design */
    word-wrap: break-word; /* Break long words */
    white-space: pre-wrap; /* Preserve white spaces and wrap text */
    overflow-wrap: break-word; /* Break long words if necessary */
}
.tooltip-container {
    position: relative;
    display: inline-block;
    cursor: pointer;
}

.tooltip-icon {
    font-size: 24px;
    padding: 5px;
    border: none;
}

.tooltip-text {
    visibility: hidden;
    width: 100px;
    background-color: #fff;
    color: #000;
    text-align: center;
    border-radius: 10px;
    border: 1px solid #ccc;
    padding: 10px;
    position: absolute;
    top: 130%; /* Adjusts tooltip to appear below the icon */
    left: 50%;
    transform: translateX(-50%);
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    z-index: 1;
    white-space: nowrap;
}

.tooltip-text svg {
    display: block;
    margin: 0 auto;
}

.tooltip-arrow {
    width: 0;
    height: 0;
    border-left: 10px solid transparent;
    border-right: 10px solid transparent;
    border-bottom: 10px solid #ccc;
    position: absolute;
    bottom: 100%; /* Places the arrow above the tooltip */
    left: 50%;
    transform: translateX(-50%);
}

.tooltip-container:hover .tooltip-text {
    visibility: visible;
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



    <!-- Hero Area Start-->
    <div class="slider-area ">
        <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/about.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>Contacts</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- Hero Area End -->
    <!-- ================ contact section start ================= -->
    <section class="contact-section">
            <div class="container">
    
                <!-- <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title">Get in Touch</h2>
                    </div>
                    
                    <div class="col-lg-8">
                        <form class="form-contact contact_form" action="contact_us.php" method="POST" >
                            <?php
                        // if (isset($_SESSION['post_message'])) {
                        //     echo "<p style='color:Green; border: 1px solid #ededed; border-radius: 7px; padding: 5px'>" . $_SESSION['post_message'] . "</p>";
                        //     unset($_SESSION['post_message']);
                        //  }
                    ?>
                            <div class="row">
                            <div class="col-12">
                                    <div class="form-group">
                                        <h5>To</h5>
                                        <input class="form-control" name="receiver_email" id="receiver_email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Receiver email '" placeholder="Enter Receiver email ">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        
                                        <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Enter Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="user_name" id="user_name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" name="sender_email" id="sender_email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" name="submit" id="submit" class="button button-contactForm boxed-btn">Send</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3>Pakistan.</h3>
                                <p>City, Lahore</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <h3>+92 311 111 111</h3>
                                <p>Mon to Fri 9am to 6pm</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3>eRecruitment system@gmail.com</h3>
                                <p>Send us your query anytime!</p>
                            </div>
                        </div>
                    </div>
                </div> -->


                <table class="table">
  <thead>
    <tr>
    <th scope="col">Sr</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Subject</th>
      <th scope="col">Message</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
include "connection.php";

$sql = "SELECT * FROM contact_us";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
?>
    <tr>
      <th scope="row"><?php echo $row['contact_id']; ?></th>
      <td><?php echo $row['user_name']; ?></td>
      <td><?php echo $row['sender_email']; ?></td>
      <td><?php echo $row['subject']; ?></td>
      <td class="message-cell"><?php echo $row['message']; ?></td>
      <td>
      <form action="users_contact.php" method="POST" style="display:inline;">
            <input type="hidden" name="contact_id" value="<?php echo $row['contact_id']; ?>">
            <div class="tooltip-container">
    <span class="tooltip-icon"><i class="fa-solid fa-reply fa-lg" style="color: #35D7FF;"></i></span>
    <div class="tooltip-text">
        <!-- Replace the SVG with your text -->
         Reply 
        <div class="tooltip-arrow"></div>
    </div>
</div>



        </form>

    </td>
    </tr>
<?php
    }
}
?>

  </tbody>
</table>

            </div>
        </section>
    <!-- ================ contact section end ================= -->




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
		
		<!-- Scrollup, nice-select, sticky -->
        <script src="./assets/js/jquery.scrollUp.min.js"></script>
        <script src="./assets/js/jquery.nice-select.min.js"></script>
		<script src="./assets/js/jquery.sticky.js"></script>
        <script src="./assets/js/jquery.magnific-popup.js"></script>

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