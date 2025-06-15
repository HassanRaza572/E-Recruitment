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
   </head>

   <body>
   
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
       <div class="header-area header-transparrent" style="background-color:">
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
                                            <?php
                                                if($_SESSION['user_type'] === 'Candidate'){
                                            ?>
                                            <li><a href="dashboard.php">Home</a></li>
                                            <li><a href="job_listing.php">Find a Jobs </a></li>
                                            <li><a href="about_us.php">About</a></li>
                                            <li><a href="#">Page</a>
                                            
                                                <ul class="submenu">
                                                    <li><a href="single-blog.php">Manage account</a></li>
                                                    <li><a href="post_job.php">Post Job</a></li>
                                                    <li><a href="message.php">Messages</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact_us.php">Contact us</a></li>

                                            <?php
                                                }elseif($_SESSION['user_type'] === 'Recruiter'){
                                            ?>
                                            <li><a href="dashboard.php">Home</a></li>
                                            <li><a href="job_listing.php">Find a Jobs </a></li>
                                            <li><a href="resumes.php">Recumes</a></li>
                                            <li><a href="#">Page</a>
                                            
                                                <ul class="submenu">
                                                    <li><a href="single-blog.php">Manage account</a></li>
                                                    <li><a href="post_job.php">Post Job</a></li>
                                                    <li><a href="message.php">Messages</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact_us.php">Contacts</a></li>

                                            <?php
                                                }else{
                                            ?>
                                            <li><a href="users.php">User</a></li>
                                            <li><a href="posted_jobs.php">Posted Jobs </a></li>
                                            <li><a href="about_us.php">Interview scheduler</a></li>
                                            <li><a href="users_feedback.php">Feedbacks</a></li>
                                            <li><a href="users_contact.php">Users Contacts</a></li>
                                            <?php
                                                }
                                            ?>
                                        </ul>
                                    </nav>
                                </div>          
                                <!-- Header-btn -->
                                <div class="header-btn d-none f-right d-lg-block">
                                <div class="dropdown">
                                    <button class="btn head-btn2 btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa-regular fa-user fa-xl mr-2"></i> <?php echo $_SESSION['name']?>
                                    </button>
                                    <?php
                                    if($_SESSION['user_type'] === 'Candidate'){
                                        ?>
                                    <div class="dropdown-menu" style="width: 100%" aria-labelledby="dropdownMenu2">
                                        <a href='profile.php' class="dropdown-item" type="button">Profile</a>
                                        <a href="status.php" class="dropdown-item" type="button">Status</a>
                                        <a class="dropdown-item" href="logout.php" type="button">Logout</a>
                                    </div>
                                    <?php
                                    }elseif($_SESSION['user_type'] === 'Recruiter'){
                                    ?>
                                    <div class="dropdown-menu" style="width: 100%" aria-labelledby="dropdownMenu2">
                                        <a href='profile.php' class="dropdown-item" type="button">Profile</a>
                                        <a href="posted_jobs.php" class="dropdown-item" type="button">posted jobs</a>
                                        <a class="dropdown-item" href="logout.php" type="button">Logout</a>
                                    </div>
                                    <?php
                                    }else{
                                    ?>
                                    <div class="dropdown-menu" style="width: 100%" aria-labelledby="dropdownMenu2">
                                        <a href='profile.php' class="dropdown-item" type="button">Profile</a>
                                        <a class="dropdown-item" href="logout.php" type="button">Logout</a>
                                    </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                                </div>
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

    
    
        
    </body>
</html>