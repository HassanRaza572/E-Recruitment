<?php
session_start();


include "connection.php";

if(isset($_POST['submit'])) {

    $user_id = $_SESSION['id'];
    $user_name = $_SESSION['name'];
    $rating = $_POST['rating'];
    $comment = $_POST['comment'];

    $sql = "INSERT INTO `feedback` (user_id, user_name, rating , comment) VALUES('$user_id', '$user_name', '$rating', '$comment')";

    if($conn->query($sql) == TRUE){
        if ($_SESSION['user_type'] == 'Recruiter') {
            header("Location: post_job.php");
            exit;
        }else if ($_SESSION['user_type'] == 'Candidate') {
            header("Location: job_listing.php");
            exit;
        }
    }else{
        echo "<script> alert('Feedback cannot be upload')</script>";
        exit;
    }
    $conn->close();
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
            <link rel="stylesheet" href="assets/css/price_rangs.css">
            <link rel="stylesheet" href="assets/css/flaticon.css">
            <link rel="stylesheet" href="assets/css/slicknav.css">
            <link rel="stylesheet" href="assets/css/animate.min.css">
            <link rel="stylesheet" href="assets/css/magnific-popup.css">
            <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
            <link rel="stylesheet" href="assets/css/themify-icons.css">
            <link rel="stylesheet" href="assets/css/slick.css">
            <link rel="stylesheet" href="assets/css/nice-select.css">
            <link rel="stylesheet" href="assets/css/style.css">


            <style>

    .feedback-container {
        background-color: white;
        padding: 20px;
        border-radius: 10px;
        margin: 80px auto;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        width: 90%;
        max-width: 450px;
        text-align: center;
    }

    .rating-group {
        display: flex;
        justify-content: space-between;
        margin-bottom: 15px;
    }

    .rating-group label {
        display: flex;
        flex-direction: column;
        align-items: center;
        cursor: pointer;
    }

    .rating-group input {
        display: none;
    }

    .rating-group label img {
        width: 45px;
        height: 45px;
        border-radius: 50%;
        padding: 10px;
        transition: background-color 0.3s ease;
    }

    .rating-group input:checked + label img {
        background-color: #ffeb3b;
    }

    textarea {
        width: 100%;
        height: 80px;
        margin-bottom: 15px;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        resize: none;
    }

    .checkbox-group {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        margin-bottom: 15px;
        font-size: 12px;
    }

    .checkbox-group label {
        cursor: pointer;
        margin-bottom: 5px;
    }

    .checkbox-group input {
        margin-right: 10px;
    }

    
    @media (max-width: 768px) {
        .feedback-container {
            margin: 40px auto;
        }
    }

    @media (max-width: 450px) {
        .feedback-container {
            width: 95%;
        }
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


    <main>

        <!-- Hero Area Start-->
        <div class="slider-area ">
            <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/about.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2>Feedback</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Area End -->
        <!-- Job List Area Start -->
        <div class="job-listing-area pt-120 pb-120">
            <div class="ml-5 mr-5">
            <div class="feedback-container">
            <h2 class="mb-4 ml-4">Feedback</h2>
            <form action="feedback.php" method="POST">
        <p>What do you think of the experience within E-Recruitment system?</p>

        <div class="rating-group mb-4">
            <input type="radio" id="terrible" name="rating" value="terrible">
            <label for="terrible">
                <img src="assets/img/face.png" alt="Terrible">
                <span>Terrible</span>
            </label>

            <input type="radio" id="bad" name="rating" value="bad">
            <label for="bad">
                <img src="assets/img/sad-face.png" alt="Bad">
                <span>Bad</span>
            </label>

            <input type="radio" id="okay" name="rating" value="okay">
            <label for="okay">
                <img src="assets/img/images.png" alt="Okay">
                <span>Okay</span>
            </label>

            <input type="radio" id="good" name="rating" value="good">
            <label for="good">
                <img src="assets/img/happy-face.png" alt="Good">
                <span>Good</span>
            </label>

            <input type="radio" id="amazing" name="rating" value="amazing">
            <label for="amazing">
                <img src="assets/img/star.png" alt="Amazing">
                <span>Amazing</span>
            </label>
        </div>

        <textarea class="mb-5" id='comment' name='comment' placeholder="What are the main reasons for your rating?"></textarea>

        <button id="submit" name="submit" class="btn head-btn1">Submit</button>
        <button class="btn head-btn2">Cancel</button>
    </form>
    </div>
            </div>
            
        </div>
        <!-- Job List Area End -->
    </main>


    <?php include "footer.php"; ?>
    
    <script src="https://kit.fontawesome.com/3acead0521.js" crossorigin="anonymous"></script>


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

		<!-- Jquery Slick , Owl-Carousel Range -->
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