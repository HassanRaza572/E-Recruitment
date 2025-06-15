<?php
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
.footer-area .footer-social2 a:hover {
	background: #fb246a;
	color: #7f7f7f;
	border: 1px solid transparent;
}

.footer-area .footer-pera p {
	color: #868c98;
	padding-right: 52px;
	font-size: 16px;
	margin-bottom: 50px;
	line-height: 1.8
}

@media only screen and (min-width: 768px) and (max-width: 991px) {
	.footer-area .footer-pera p {
		padding-right: 0px
	}
}

.footer-area .footer-pera.footer-pera2 p {
	padding: 0
}

.footer-area .footer-tittle h4 {
	color: #ffffff;
	font-size: 20px;
	margin-bottom: 29px;
	font-weight: 400;
	text-transform: uppercase
}

.footer-area .footer-tittle ul li {
	color: #868c98;
	margin-bottom: 9px
}

.footer-area .footer-tittle ul li a {
	color: #868c98;
	font-weight: 300
}

.footer-area .footer-tittle ul li a:hover {
	color: #fb246a;
	padding-left: 5px
}

.footer-area .footer-tittle-bottom span {
	display: inline-block;
	color: #fff;
	font-weight: 600;
	font-size: 24px;
	margin-right: 11px
}

@media (max-width: 767px) {
	.footer-area .footer-tittle-bottom span {
		font-size: 20px
	}
}

.footer-area .footer-tittle-bottom p {
	display: inline-block;
	color: #fff
}

.footer-area .footer-form {
	margin-top: 40px
}

.footer-area .footer-form form {
	position: relative
}

.footer-area .footer-form form input {
	width: 100%;
	height: 43px;
	padding: 10px 20px;
	border: 1px solid #fff;
	border-radius: 5px
}

.footer-area .footer-form form .form-icon button {
	position: absolute;
	top: 0;
	right: 0;
	background: none;
	border: 0;
	cursor: pointer;
	padding: 13px 22px;
	background: #fb246a;
	line-height: 1;
	border-radius: 0 3px 3px 0
}

.footer-area .info.error {
	color: #fb246a
}

.footer-bg {
	background: #010b1d
}

.footer-bottom-area .footer-border {
	border-top: 1px solid #2d3544;
	padding: 33px 0px 20px
}

.footer-bottom-area .footer-copy-right p {
	color: #888888;
	font-weight: 300;
	font-size: 16px;
	line-height: 2;
	margin-bottom: 12px
}

@media (max-width: 767px) {
	.footer-bottom-area .footer-copy-right p {
		margin-bottom: 20px
	}
}

@media only screen and (min-width: 768px) and (max-width: 991px) {
	.footer-bottom-area .footer-copy-right p {
		margin-bottom: 20px
	}
}

.footer-bottom-area .footer-copy-right p i {
	color: #fb246a
}

.footer-bottom-area .footer-copy-right p a {
	color: #fb246a
}

.footer-bottom-area .footer-copy-right p a:hover {
	color: #fff
}

@media (max-width: 767px) {
	.footer-bottom-area .footer-social {
		float: left
	}
}

@media only screen and (min-width: 768px) and (max-width: 991px) {
	.footer-bottom-area .footer-social {
		float: left
	}
}

.footer-bottom-area .footer-social a i {
	color: #888888;
	margin-left: 13px;
	font-size: 14px;
	-webkit-transition: .4s;
	-moz-transition: .4s;
	-o-transition: .4s;
	transition: .4s
}

.footer-bottom-area .footer-social a i:hover {
	color: #fb246a
}

.footer-wejed {
	padding-top: 120px;
	padding-bottom: 40px
}

@media only screen and (min-width: 992px) and (max-width: 1199px) {
	.footer-wejed {
		padding-top: 50px;
		padding-bottom: 40px
	}
}

@media only screen and (min-width: 768px) and (max-width: 991px) {
	.footer-wejed {
		padding-top: 50px;
		padding-bottom: 40px
	}
}

@media only screen and (min-width: 576px) and (max-width: 767px) {
	.footer-wejed {
		padding-top: 50px;
		padding-bottom: 40px
	}
}

@media (max-width: 767px) {
	.footer-wejed {
		padding-top: 20px;
		padding-bottom: 40px
	}
}


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
    border:none;
	text-transform: capitalize;
	font-family: "Muli", sans-serif;
	letter-spacing: 0.1em;
	line-height: 1.2;
	line-height: 38px;
	font-size: 14px
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
    <header>
        <!-- Header Start -->
       <div class="header-area header-transparrent">
           <div class="headder-top header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-2">
                            <!-- Logo -->
                            <div class="logo">
                                <a href="index.php"><img src="assets/img/logo/pic.png" class="logohead" alt=""></a>
                            </div>  
                        </div>
                        <div class="col-lg-9 col-md-9">
                            <div class="menu-wrapper">
                                <!-- Main-menu -->
                                <div class="main-menu">
                                    <nav class="d-none d-lg-block">
                                        <ul id="navigation">
                                            <li><a href="index.php">Home</a></li>
                                            
                                            <li><a href="#aboutus">About us</a></li>
                                            
                                            <li><a href="#contactus">Contact us</a></li>
                                        </ul>
                                    </nav>
                                </div>          
                                <!-- Header-btn -->
                                <div class="header-btn d-none f-right d-lg-block">
                                    <a href="signup.php" class="btn head-btn1">Register</a>
                                    <a href="login.php" class="btn head-btn2">Login</a>
                                </div>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
           </div>
       </div>
        <!-- Header End -->
    </header>
    
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
                        <!-- <div class="row">
                            <div class="col-xl-8">
                                
                                <form action="#" class="search-box">
                                    <div class="input-form">
                                        <input type="text" placeholder="Job Tittle or keyword">
                                    </div>
                                    <div class="select-form">
                                        <div class="select-itms">
                                        <input type="text" class="nice-select" name="company_location" placeholder="Location or keyword">
                                        </div>
                                    </div>
                                    <div class="search-form">
                                        <button >Find job</button>
                                    </div>	
                                </form>	
                            </div>
                        </div> -->
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
                            <h2>Job Categories </h2>
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
                
                
            </div>
        </div>>
        <!-- Our Services End -->
        <!-- Online CV Area Start -->
         <div class="online-cv cv-bg section-overly pt-90 pb-120" id="aboutus"  data-background="assets/img/gallery/cv_bg.jpg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <div class="cv-caption text-center">
                            <p class="pera2"> About US!</p>
                            <p class="pera1">
                                E-Recruitment System provides a means to view, submit, and process applications. The HR department of any company often spends a lot of time searching for suitable candidates. Companies spend a lot of time and resources advertising job openings and selecting candidates. 
                                Our website can provide a centralized platform for candidates to create their profiles/resumes and search for jobs on the other side for recruiter to post job details. The system should facilitate communication between recruiters and candidates, such as sending automated emails for application confirmation, interview scheduling, and status updates.
                                This simplifies the recruitment process for both candidate and recruiters, saving them time and resources.
                            </p>
                            
                            
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
                            <h2>Recent Jobs</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-10">
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
                                    echo "<a href='signup.php'><img style='width:120px; height:120px;' src='/E-Recruitment system/upload/" . $row['company_logo'] . "'></a>"
                                    ?>
                                </div>
                                <div class="job-tittle">
                                    <a href="signup.php"><h4><?php echo $row['categories'] ?></h4></a>
                                    <ul>
                                        <li><?php echo $row['company_name'] ?></li>
                                        <li><i class="fas fa-map-marker-alt"></i><?php echo $row['company_location'] ?></li>
                                        <li><?php echo $row['salary'] ?></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="items-link f-right">
                                <a href="signup.php"><?php echo $row['timing'] ?></a>
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
                         <a href="login.php" class="border-btn2 border-btn4">View more Jobs</a>
                        </center>
                    </div>
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
         <div class="support-company-area support-padding fix mb-3 mt-3" id="contactus">
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
                                <!-- <a href="login.php" class="btn post-btn">To get Jobs</a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6">
                        <div class="support-location-img">
                        <form class="form-contact contact_form mt-2 mb-2" action="contact_us.php" method="POST" >
                            <?php
                        if (isset($_SESSION['post_message'])) {
                            echo "<p style='color:Green; border: 1px solid #ededed; border-radius: 7px; padding: 5px'>" . $_SESSION['post_message'] . "</p>";
                            unset($_SESSION['post_message']);
                         }
                    ?>
                    <div>
                    <h3>Contact Us</h3>
                            <div class="row">
                            
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
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Enter Message"></textarea>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit" name="submit" id="submit" class="button button-contactForm boxed-btn">Send</button>
                            </div>
                        </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Support Company End-->
       

    </main>


    <footer>
        <!-- Footer Start-->
        <div class="footer-area footer-bg footer-padding">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                       <div class="single-footer-caption mb-50">
                         <div class="single-footer-caption mb-30">
                             <div class="footer-tittle">
                                 <h4>About Us</h4>
                                 <div class="footer-pera">
                                     <p>At <a href="index.php" target="_blank">E-Recruitment system</a>, we streamline the recruitment process by connecting employers with top talent through our innovative e-recruitment platform. </p>
                                </div>
                             </div>
                         </div>

                       </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Contact Info</h4>
                                <ul>
                                    <li>
                                    <p>Address :E-Recruitment system</p>
                                    </li>
                                    <li><a href="#">Phone : +8880 44338899</a></li>
                                    <li><a href="#">Email : eRecruitmentsystem@gmail.com</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Important Link</h4>
                                <ul>
                                    <li><a href="job_listing.php"> View Jobs</a></li>
                                    <li><a href="contact_us.php">Contact Us</a></li>
                                    <li><a href="about_us.php">About us</a></li>
                                    <li><a href="calender.php">Calender</a></li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    </div>
                </div>
               <!--  -->
               <div class="row footer-wejed justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <!-- logo -->
                        <div class="footer-logo mb-20">
                        
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                    <div class="footer-tittle-bottom">
                    <?php
                                            include 'connection.php';
                                            $count_sql = "SELECT COUNT(*) AS total FROM user";
                                            $count_result = $conn->query($count_sql);
                                            $count_row = $count_result->fetch_assoc();
                                            $total_user_entries = $count_row['total'];
                                            $conn->close();
                                            ?>
                        <span><?php echo $total_user_entries; ?> +</span>
                        <p>Talented Hunter</p>
                    </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                    <?php
                                            include 'connection.php';
                                            $count_sql = "SELECT COUNT(*) AS total FROM job_post";
                                            $count_result = $conn->query($count_sql);
                                            $count_row = $count_result->fetch_assoc();
                                            $total_entries = $count_row['total'];
                                            $conn->close();
                                            ?>
                        <div class="footer-tittle-bottom">
                            <span><?php echo $total_entries; ?> +</span>
                            <p>Jobs</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                    <?php
                                            include 'connection.php';
                                            $count_sql = "SELECT COUNT(*) AS total FROM applications";
                                            $count_result = $conn->query($count_sql);
                                            $count_row = $count_result->fetch_assoc();
                                            $total_application_entries = $count_row['total'];
                                            $conn->close();
                                            ?>
                        <!-- Footer Bottom Tittle -->
                        <div class="footer-tittle-bottom">
                            <span><?php echo $total_application_entries; ?> + Applications</span>
                            
                        </div>
                    </div>
               </div>
            </div>
        </div>
        <!-- footer-bottom area -->
        <div class="footer-bottom-area footer-bg">
            <div class="container">
                <div class="footer-border">
                     <div class="row d-flex justify-content-between align-items-center">
                         <div class="col-xl-10 col-lg-10 ">
                             <div class="footer-copy-right">
                                 <p>
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 
  <i class="fa fa-heart" aria-hidden="true"></i> by <a href="index.html" target="_blank">E-Recruitment system</a>
  </p>
                             </div>
                         </div>
                         <div class="col-xl-2 col-lg-2">
                             <div class="footer-social f-right">
                                 <a href="#"><i class="fab fa-facebook-f"></i></a>
                                 <a href="#"><i class="fab fa-twitter"></i></a>
                                 <a href="#"><i class="fas fa-globe"></i></a>
                                 <a href="#"><i class="fab fa-behance"></i></a>
                             </div>
                         </div>
                     </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>

  <!-- JS here -->
	
  <script>
    document.addEventListener('DOMContentLoaded', function () {
        // Select all anchor links with a hash href attribute
        const links = document.querySelectorAll('a[href^="#"]');
        
        // Add a click event listener to each link
        links.forEach(link => {
            link.addEventListener('click', function (event) {
                event.preventDefault(); // Prevent the default anchor behavior
                
                // Get the target element
                const targetId = this.getAttribute('href').substring(1);
                const targetElement = document.getElementById(targetId);
                
                // Scroll to the target element
                targetElement.scrollIntoView({
                    behavior: 'smooth' // Enable smooth scrolling
                });
            });
        });
    });
    
</script>


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