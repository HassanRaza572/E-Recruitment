<?php
session_start();

include "connection.php";


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

        
        <!-- Job List Area Start -->
        <div class="job-listing-area pt-120 pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-tittle text-center mb-50">
                            <h2>Your Posted Jobs</h2>
                            <p>Manage and track all your job postings in one place</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php
                    if($_SESSION['user_type'] === 'Recruiter'){
                        $recruiter_id = $_SESSION['id'];
                        $sql = "SELECT * FROM job_post where recruiter_id = '$recruiter_id'";
                    }else{
                        $sql = "SELECT * FROM job_post";
                    }
                    $result = $conn->query($sql);
                    
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                    ?>
                    <div class="col-lg-6 col-md-12 mb-4">
                        <div class="single-job-items mb-30">
                            <div class="job-items">
                                <div class="company-img">
                                    <a href="job_details.php?id=<?php echo $row['job_id']; ?>">
                                        <img style='width:120px; height:120px; object-fit:cover; border-radius:10px;' src='/E-Recruitment system/upload/<?php echo $row['company_logo'] ?>' alt="Company Logo">
                                    </a>
                                </div>
                                <div class="job-tittle job-tittle2">
                                    <a href="job_details.php?id=<?php echo $row['job_id']; ?>">
                                        <h4 class="text-primary"><?php echo $row['categories'] ?></h4>
                                    </a>
                                    <ul class="list-unstyled">
                                        <li class="mb-2"><i class="fas fa-building mr-2"></i><?php echo $row['company_name'] ?></li>
                                        <li class="mb-2"><i class="fas fa-map-marker-alt mr-2"></i><?php echo $row['company_location'] ?></li>
                                        <li class="mb-2"><i class="fas fa-money-bill-wave mr-2"></i><?php echo $row['salary'] ?></li>
                                        <li class="mb-2"><i class="fas fa-clock mr-2"></i><?php echo $row['timing'] ?></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="items-link items-link2 f-right">
                                <a href="edit_job.php?id=<?php echo $row['job_id'] ?>" class="btn btn-outline-primary mr-2">
                                    <i class="fas fa-edit mr-1"></i> Edit
                                </a>
                                <a href="job_details.php?id=<?php echo $row['job_id'] ?>" class="btn btn-primary">
                                    <i class="fas fa-eye mr-1"></i> View Details
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php
                        }
                    } else {
                        echo '<div class="col-12 text-center"><div class="alert alert-info">No jobs posted yet. <a href="post_job.php" class="alert-link">Post your first job</a></div></div>';
                    }
                    ?>
                </div>
            </div>
        </div>

        
    </main>


    <?php include "footer.php"; ?>
    

    <script>
        function toggleJobStatus(jobId) {
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "deactivate_job.php?id=" + jobId, true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            location.reload(); // Reload the page to reflect the changes
        }
    };
    xhr.send();
}



    </script>
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