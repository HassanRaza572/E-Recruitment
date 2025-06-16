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
                form.search-box .search-form button {
	width: 100%;
	height: 70px;
	background: #fb246a;
	font-size: 20px;
	line-height: 1;
	text-align: center;
	color: #fff;
	display: block;
	padding: 15px;
	border-radius: 0px;
	text-transform: capitalize;
	font-family: "Muli", sans-serif;
	letter-spacing: 0.1em;
	line-height: 1.2;
	line-height: 38px;
	font-size: 14px;
}
form.search-box .select-form .nice-select {
	width: 100%;
	height: 70px;
	background: #fff;
	border-radius: 0px;
	padding: 11px 19px 11px 10px;
	color: #616875;
	line-height: 54px;
	border: 0;
    cursor: auto;
}

@media (max-width: 767px) {
	form.search-box .select-form .nice-select {
		margin-bottom: 20px;
		padding-left: 25px
	}
}

@media only screen and (min-width: 576px) and (max-width: 767px) {
	form.search-box .select-form .nice-select {
		margin-bottom: 20px;
		padding-left: 25px
	}
}

form.search-box .select-form .nice-select::after {
	border-bottom: 1px solid #a9b6cd;
	border-right: 1px solid #a9b6cd;
	height: 12px;
	width: 12px;
	margin-top: -4px;
	right: 29px
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

        <!-- slider Area Start-->
        <div class="slider-area ">
            <!-- Mobile Menu -->
            <div class="slider-active">
                <div class="single-slider slider-height d-flex align-items-center" data-background="assets/img/hero/h1_hero.jpg">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-9 col-md-10">
                                <div class="hero__caption">
                                    <h1>Find the most exciting startup jobs</h1>
                                </div>
                            </div>
                        </div>
                        <!-- Search Box -->
                        <div class="row">
                            <div class="col-xl-8">
                                <!-- form -->
                                <form action="#" class="search-box">
                                    <div class="input-form">
                                        <input type="text" name="keyword" placeholder="Job Tittle or keyword">
                                    </div>
                                    <div class="select-form">
                                        <div class="select-itms">
                                            <input type="text" class="nice-select" name="company_location" placeholder="Enter location or keyword">
                                        </div>
                                    </div>
                                    <div class="search-form">
                                        <button type="submit" name="">Find job</button>
                                    </div>	
                                </form>	
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->
        <!-- Our Services Start -->
        <div class="our-services section-pad-t30">
            <div class="container">
                <!-- Section Tittle -->
                
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <span>FEATURED TOURS Packages</span>
                            <h2>Browse Top Categories </h2>
                        </div>
                    </div>
                </div>
                <div class="row d-flex justify-contnet-center">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-tour"></span>
                            </div>
                            <div class="services-cap">
                               <h5>Design & Creative</h5>
                               
                               <?php
                                $categories = "Design & Creative";
                                $count_sql = "SELECT COUNT(*) AS total FROM job_post WHERE categories = '$categories'";
                                $count_result = $conn->query($count_sql);
                                $count_row = $count_result->fetch_assoc();
                                $total_entries = $count_row['total'];

                                echo "<span>($total_entries)</span>";
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-cms"></span>
                            </div>
                            <div class="services-cap">
                               <h5>Design & Development</h5>
                               <?php
                                $categories = "Design & Development";
                                $count_sql = "SELECT COUNT(*) AS total FROM job_post WHERE categories = '$categories'";
                                $count_result = $conn->query($count_sql);
                                $count_row = $count_result->fetch_assoc();
                                $total_entries = $count_row['total'];

                                echo "<span>($total_entries)</span>";
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-report"></span>
                            </div>
                            <div class="services-cap">
                               <h5>Sales & Marketing</h5>
                               <?php
                                $categories = "Sales & Marketing";
                                $count_sql = "SELECT COUNT(*) AS total FROM job_post WHERE categories = '$categories'";
                                $count_result = $conn->query($count_sql);
                                $count_row = $count_result->fetch_assoc();
                                $total_entries = $count_row['total'];

                                echo "<span>($total_entries)</span>";
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-app"></span>
                            </div>
                            <div class="services-cap">
                               <h5>Mobile Application</h5>
                               <?php
                                $categories = "Mobile Application";
                                $count_sql = "SELECT COUNT(*) AS total FROM job_post WHERE categories = '$categories'";
                                $count_result = $conn->query($count_sql);
                                $count_row = $count_result->fetch_assoc();
                                $total_entries = $count_row['total'];

                                echo "<span>($total_entries)</span>";
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-helmet"></span>
                            </div>
                            <div class="services-cap">
                               <h5>Construction</h5>
                               <?php
                                $categories = "Construction";
                                $count_sql = "SELECT COUNT(*) AS total FROM job_post WHERE categories = '$categories'";
                                $count_result = $conn->query($count_sql);
                                $count_row = $count_result->fetch_assoc();
                                $total_entries = $count_row['total'];

                                echo "<span>($total_entries)</span>";
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-high-tech"></span>
                            </div>
                            <div class="services-cap">
                               <h5>Information Technology</h5>
                               <?php
                                $categories = "Information Technology";
                                $count_sql = "SELECT COUNT(*) AS total FROM job_post WHERE categories = '$categories'";
                                $count_result = $conn->query($count_sql);
                                $count_row = $count_result->fetch_assoc();
                                $total_entries = $count_row['total'];

                                echo "<span>($total_entries)</span>";
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-real-estate"></span>
                            </div>
                            <div class="services-cap">
                               <h5>Real Estate</h5>
                               <?php
                                $categories = "Real Estate";
                                $count_sql = "SELECT COUNT(*) AS total FROM job_post WHERE categories = '$categories'";
                                $count_result = $conn->query($count_sql);
                                $count_row = $count_result->fetch_assoc();
                                $total_entries = $count_row['total'];

                                echo "<span>($total_entries)</span>";
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                                <span class="flaticon-content"></span>
                            </div>
                            <div class="services-cap">
                               <h5>Content Writer</h5>
                               <?php
                                $categories = "Content Writer";
                                $count_sql = "SELECT COUNT(*) AS total FROM job_post WHERE categories = '$categories'";
                                $count_result = $conn->query($count_sql);
                                $count_row = $count_result->fetch_assoc();
                                $total_entries = $count_row['total'];

                                echo "<span>($total_entries)</span>";
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- More Btn -->
                <!-- Section Button -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="browse-btn2 text-center mt-50">
                            <a href="job_listing.php" class="border-btn2">Browse All Sectors</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Our Services End -->
        <!-- Online CV Area Start -->
         <div class="online-cv cv-bg section-overly pt-90 pb-120"  data-background="assets/img/gallery/cv_bg.jpg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <div class="cv-caption text-center">
                            <p class="pera1">FEATURED TOURS Packages</p>
                            <p class="pera2"> Make a Difference with Your Online Resume!</p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Online CV Area End-->
        <!-- Featured_job_start -->
        <section class="featured-job-area feature-padding">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle text-center">
                            <span>Recent Job</span>
                            <h2>Featured Jobs</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <!-- single-job-content -->
                        <!-- single-job-content -->
                        <?php
                        include "connection.php";
                        $sql = "SELECT * FROM job_post LIMIT 5";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                         ?>
                        <div class="single-job-items mb-30">
                            <div class="job-items">
                                <div class="company-img">
                                    <?php
                                    echo "<a href='job_details.php?id=".$row['job_id']."><img style='width:120px; height:120px;' src='/E-Recruitment system/upload/" . $row['company_logo'] . "'></a>"
                                    ?>
                                </div>
                                <div class="job-tittle">
                                    <a href="job_details.php?id=<?php echo $row['job_id'] ?>"><h4><?php echo $row['categories'] ?></h4></a>
                                    <ul>
                                        <li><?php echo $row['company_name'] ?></li>
                                        <li><i class="fas fa-map-marker-alt"></i><?php echo $row['company_location'] ?></li>
                                        <li><?php echo $row['salary'] ?></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="items-link f-right">
                                <a href="job_details.php?id=<?php echo $row['job_id'] ?>"><?php echo $row['timing'] ?></a>
                                <span><?php echo $row['date'] ?></span>
                            </div>
                        </div>
                        <?php
                            }
                        } else {
                            echo "No job posts found.";
                        }
                        ?>
                        <center>
                         <a href="job_listing.php" class="border-btn2 border-btn4">View more Jobs</a>
                        </center>
                </div>
            </div>
        </section>
        <!-- Featured_job_end -->
        <!-- How  Apply Process Start-->
        <div class="apply-process-area apply-bg pt-150 pb-150" data-background="assets/img/gallery/how-applybg.png">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle white-text text-center">
                            <span>Apply process</span>
                            <h2> How it works</h2>
                        </div>
                    </div>
                </div>
                <!-- Apply Process Caption -->
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="single-process text-center mb-30">
                            <div class="process-ion">
                                <span class="flaticon-search"></span>
                            </div>
                            <div class="process-cap">
                               <h5>1. Search a job</h5>
                               <p>Begin your job search by identifying opportunities that align with your skills and career goals. 
                                Use job boards, company websites, and professional networks like LinkedIn to find listings. 
                                Tailor your search by using relevant keywords and setting filters for location, industry, and job type. 
                                Networking with professionals in your field can also uncover hidden opportunities.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-process text-center mb-30">
                            <div class="process-ion">
                                <span class="flaticon-curriculum-vitae"></span>
                            </div>
                            <div class="process-cap">
                               <h5>2. Apply for job</h5>
                               <p>Once you've found a job that interests you, carefully read the job description and requirements. 
                                Tailor your resume and cover letter to highlight your relevant experience, skills, and accomplishments. 
                                Use specific examples to demonstrate your qualifications. Follow the application instructions meticulously, 
                                whether it's submitting your application through an online portal, email, or another method.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="single-process text-center mb-30">
                            <div class="process-ion">
                                <span class="flaticon-tour"></span>
                            </div>
                            <div class="process-cap">
                               <h5>3. Get your job</h5>
                               <p>After applying, prepare for potential interviews by researching the company and practicing 
                                common interview questions. If invited to interview, dress appropriately and arrive on time. 
                                During the interview, communicate your enthusiasm for the role and how your skills and experience 
                                make you a great fit. Follow up with a thank-you email after the interview. 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
        </div>
        
        <!-- How  Apply Process End-->
         <!-- Support Company Start-->
         <div class="support-company-area support-padding fix mb-3 mt-3">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-6">
                        <div class="right-caption">
                            <!-- Section Tittle -->
                            <div class="section-tittle section-tittle2">
                                <span>What we are doing</span>
                                <h2>24k Talented people are getting Jobs</h2>
                            </div>
                            <div class="support-caption">
                                <p class="pera-top">Mollit anim laborum duis au dolor in voluptate velit ess cillum dolore eu lore dsu quality mollit anim laborumuis au dolor in voluptate velit cillum.</p>
                                <p>Mollit anim laborum.Duis aute irufg dhjkolohr in re voluptate velit esscillumlore eu quife nrulla parihatur. Excghcepteur signjnt occa cupidatat non inulpadeserunt mollit aboru. temnthp incididbnt ut labore mollit anim laborum suis aute.</p>
                                <?php
                                if($_SESSION['user_type'] === 'Recruiter'){
                                ?>
                                <a href="post_job.php" class="btn post-btn">To post Jobs</a>
                                <?php
                                }elseif($_SESSION['user_type'] === 'Candidate'){
                                ?>
                                    <a href="job_listing.php" class="btn post-btn">To get Jobs</a>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="support-location-img">
                            <img src="assets/img/service/support-img.jpg" alt="">
                            <div class="support-img-cap text-center">
                                <p>Since</p>
                                <span>2024</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Support Company End-->
       

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