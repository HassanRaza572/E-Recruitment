<?php
session_start();
include "connection.php";
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
                            <h2>Incomming Messages</h2>
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
    
                <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title">Contact Messages</h2>
                    </div>
                    
                    <div class="row">
                    <?php
                        if($_SESSION['user_type'] === 'Candidate'){
                            $user_email = $_SESSION['email'];
                                $sql = "SELECT * FROM `contact_us` WHERE receiver_email = '$user_email'";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) {
                    ?>
                        <div class="col-sm-6 mb-3 ">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Subject: <?php echo $row['subject'];?></h5>
                                    <h6 class="card-title">Sender Email: <?php echo $row['sender_email'];?></h6>
                                    <p class="card-text"><?php echo $row['message'];?> </p>
                                    <a href="contact_us.php" class="btn head-btn2">Reply</a>
                                </div>
                            </div>
                        </div>
                        
                        <?php
                                    }
                                }
                            }elseif($_SESSION['user_type'] === 'Recruiter'){
                                $user_email = $_SESSION['email'];
                                $sql = "SELECT * FROM `contact_us` WHERE receiver_email = '$user_email'";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) {
                        ?>
                        <div class="col-sm-6 mb-3 ">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Subject: <?php echo $row['subject'];?></h5>
                                    <h6 class="card-title">Sender Email: <?php echo $row['sender_email'];?></h6>
                                    <p class="card-text"><?php echo $row['message'];?> </p>
                                    <a href="contact_us.php" class="btn head-btn2">Reply</a>
                                </div>
                            </div>
                        </div>
                        
                        <?php
                                    }
                                }
                            }else{
                                $sql = "SELECT * FROM `contact_us`";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) {
                        ?>
                        <div class="col-sm-6 mb-3 ">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Subject: <?php echo $row['subject'];?></h5>
                                    <h6 class="card-title">Sender Email: <?php echo $row['sender_email'];?></h6>
                                    <p class="card-text"><?php echo $row['message'];?> </p>
                                    <a href="contact_us.php" class="btn head-btn2">Reply</a>
                                </div>
                            </div>
                        </div>
                        
                        <?php
                                    }
                                }
                            }
                        ?>

                    </div>
                    
            </div>
        </section>
    <!-- ================ contact section end ================= -->




    <?php include "footer.php"; ?>

<!-- JS here -->
	
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