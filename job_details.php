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
        <link rel="manifest" href="site.webmanifest">
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/fav.png">
		<!-- CSS here -->
            <link rel="stylesheet" href="assets/css/bootstrap.min.css">
            <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
            <link rel="stylesheet" href="assets/css/flaticon.css">
            <link rel="stylesheet" href="assets/css/slicknav.css">
            <link rel="stylesheet" href="assets/css/price_rangs.css">
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

        <!-- Hero Area Start-->
        <div class="slider-area ">
        <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/about.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>UI/UX Designer</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!-- Hero Area End -->
        <!-- job post company Start -->
        <div class="job-post-company pt-120 pb-120">

        <?php
        $job_id = $_GET['id'];
                    
                    $sql = "SELECT * FROM job_post WHERE job_id = '$job_id' ";
                    $result = mysqli_query($conn, $sql);

                    
                    if (mysqli_num_rows($result)>0) {
                        while($row = mysqli_fetch_assoc($result)){
                            $requirements = $row['requirements'];
                            $experience = $row['experience'];
                        ?>
            <div class="container">
                <div class="row justify-content-between">
                    <!-- Left Content -->
                    <div class="col-xl-7 col-lg-8">
                        <!-- job single -->
                        <div class="single-job-items mb-50">
                            <div class="job-items">
                                <div class="company-img company-img-details">
                                    <a href=""><img style='width:120px; height:120px;' src='/E-Recruitment system/upload/<?php echo $row['company_logo'] ?> '></a>
                                </div>
                                <div class="job-tittle">
                                    <a href="#">
                                        <h4><?php echo $row['categories'] ?></h4>
                                    </a>
                                    <ul>
                                        <li><?php echo $row['company_name'] ?></li>
                                        <li><i class="fas fa-map-marker-alt"></i><?php echo $row['company_location'] ?></li>
                                        <li><?php echo $row['salary'] ?></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                          <!-- job single End -->
                       
                        <div class="job-post-details">
                            <div class="post-details1 mb-50">
                                <!-- Small Section Tittle -->
                                <div class="small-section-tittle">
                                    <h4>Job Description</h4>
                                </div>
                                <p><?php echo $row['discription'] ?></p>
                            </div>
                            <div class="post-details2  mb-50">
                                 <!-- Small Section Tittle -->
                                <div class="small-section-tittle">
                                    <h4>Required Knowledge, Skills, and Abilities</h4>
                                </div>
                               <ul id="requirementsList">
                                   
                               </ul>
                            </div>
                            <div class="post-details2  mb-50">
                                 <!-- Small Section Tittle -->
                                <div class="small-section-tittle">
                                    <h4>Education + Experience</h4>
                                </div>
                               <ul id="experienceList">
                                   
                               </ul>
                            </div>
                        </div>

                    </div>
                    <!-- Right Content -->
                    <div class="col-xl-4 col-lg-4">
                        <div class="post-details3  mb-50">
                            <!-- Small Section Tittle -->
                           <div class="small-section-tittle">
                               <h4>Job Overview</h4>
                           </div>
                          <ul>
                              <li>Posted date : <span><?php echo $row['date'] ?></span></li>
                              <li>Location : <span><?php echo $row['company_location'] ?></span></li>
                              <li>Vacancy : <span><?php echo $row['vacancy'] ?></span></li>
                              <li>Job nature : <span><?php echo $row['timing'] ?></span></li>
                              <li>Salary :  <span>Rs. <?php echo $row['salary'] ?> Monthly</span></li>
                              <li>Application date : <span><?php echo $row['due_date'] ?></span></li>
                          </ul>
                         <div class="apply-btn2">
                         <?php
                                            if ($_SESSION['user_type'] == 'Recruiter') {
                                                echo "<a href='app_job.php?id=" . $job_id . "' class='btn'>Applied Application</a>";
                                            }else if ($_SESSION['user_type'] == 'Candidate') {
                                                echo "<a href='apply_job.php?id=" . $job_id . "' class='btn'>Apply Now</a>";
                                            }
                                            ?>
                            
                         </div>
                       </div>




                       <div class="post-details4  mb-50">
                            <!-- Small Section Tittle -->
                           <div class="small-section-tittle">
                               <h4>Company Information</h4>
                           </div>
                              <span><?php echo $row['company_name'] ?></span>
                              <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                            <ul>
                                <li>Name: <span><?php echo $row['recruiter_name']; ?> </span></li>
                                <li>Web : <span> <?php echo $row['company_web'] ?></span></li>
                                <li>Email: <span><?php echo $row['company_email'] ?></span></li>
                            </ul>
                       </div>
                    </div>
                    </div>
                </div>
            </div>
            <?php }}?>
        </div>
        <!-- job post company End -->

    </main>

    <?php 
    include "footer.php";
     ?>


    <script>
        
// JavaScript to display the data
document.addEventListener("DOMContentLoaded", function() {
    const requirements = `<?php echo nl2br(addslashes($requirements)); ?>`;
    const experience = `<?php echo nl2br(addslashes($experience)); ?>`;

    const requirementsList = document.getElementById('requirementsList');
    const experienceList = document.getElementById('experienceList');

    requirements.split('<br />').forEach(function(item) {
        let li = document.createElement('li');
        li.textContent = item.trim();
        requirementsList.appendChild(li);
    });

    experience.split('<br />').forEach(function(item) {
        let li = document.createElement('li');
        li.textContent = item.trim();
        experienceList.appendChild(li);
    });
});
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