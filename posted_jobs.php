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
            
            <div class='ml-5 mr-5'>
                <h2 class="ml-5 mb-2">Posted Jobs</h2>
                <hr>
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
                                        
                                        echo "<div class='single-job-items mb-30 ml-5 mr-5'>";
                                        echo "<div class='job-items'>";
                                        echo "<div class='company-img'>";
                                        echo "<a href='job_details.php?id=" . $row['job_id'] . "'><img style='width:120px; height:120px;' src='/E-Recruitment system/upload/" . $row['company_logo'] . "'></a>";
                                        echo "</div>";
                                        echo "<div class='job-tittle job-tittle2'>";
                                        echo "<a href='job_details.php?id=" . $row['job_id'] . "'>";
                                        echo "<h4>" . $row['categories'] . "</h4>";
                                        echo "</a>";
                                        echo "<ul>";
                                        echo "<li>" . $row['company_name'] . "</li>";
                                        echo "<li><i class='fas fa-map-marker-alt'></i>" . $row['company_location'] .  "</li>";
                                        echo "<li>" . $row['salary'] . "</li> <br>";
                                        echo "<li>" . $row['requirements'] . "</li>";
                                        echo "</ul>";
                                        echo "</div>";
                                        echo "</div>";
                                        echo "<div class='items-link items-link2 f-right'>";
                                        
                                        echo "<a href='edit_job.php?id=" . $row['job_id'] . "'>Edit</a>";

                                        echo "<a href='deactive_job.php?id=" . $row['job_id'] . "' onclick='toggleJobStatus(" . $row['job_id'] . ")'>" . ($row['status'] === 'active' ? 'Deactivate' : 'Activate') . "</a>";


                                        echo "<a href='delete_job.php?id=" . $row['job_id'] . "'>Delete</a>";

                                        echo "<span> Post date: " . $row['date'] ."</span>";
                                        echo "</div>";
                                        echo "</div>";
                                        }
                                    } else {
                                        echo "No job posts found.";
                                    }
                                    $conn->close();
                                ?>
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