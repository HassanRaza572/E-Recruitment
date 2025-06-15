<?php
session_start();

if ($_SESSION['user_type'] != 'Recruiter') {
    echo "Access denied.";
    exit;
}

include "connection.php";
$pic_upload = 0;

if(isset($_POST['submit'])) {
    $recruiter_id = $_SESSION['id'];
    $recruiter_name = $_SESSION['name'];
    $date = date('Y-m-d');
    $company_name = $_POST['company_name'];
    $requirements = $_POST['requirements'];
    $company_email = $_POST['company_email'];
    $company_location = $_POST['company_location'];
    $company_web = $_POST['company_web'];
    $salary = $_POST['salary'];
    $timing = $_POST['timing'];
    $categories = $_POST['categories'];
    $discription = $_POST['discription'];
    $experience = $_POST['experience'];
    $due_date = $_POST['due_date'];
    $vacancy = $_POST['vacancy'];
    
    $company_logo = time().$_FILES['company_logo']['name'];
    
    if(move_uploaded_file($_FILES['company_logo']['tmp_name'], $_SERVER['DOCUMENT_ROOT']. '/E-Recruitment system/upload/' . $company_logo)){
        $target_file = $_SERVER['DOCUMENT_ROOT']. '/E-Recruitment system/upload/' . $company_logo;
        $imagefiletype = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $picname = basename($_FILES['company_logo']['name']);
        $photo = time().$picname;

        if($imagefiletype != "jpg" && $imagefiletype != "jpeg" && $imagefiletype != "png"){
            $_SESSION['post_message'] = "Check extension.";
        }else if($_FILES['company_logo']['size'] > 20000000){
            $_SESSION['post_message'] = "image exceed the size.";
        }else{
            $pic_upload = 1;
        }
    }
    
    if($pic_upload = 1){

    $sql = "INSERT INTO job_post (recruiter_id, recruiter_name, company_logo, company_name, discription, company_email, categories, company_web, requirements, experience, company_location, salary, timing, due_date, vacancy, date) 
    VALUES ('$recruiter_id', '$recruiter_name', '$photo', '$company_name', '$discription', '$company_email', '$categories', '$company_web', '$requirements', '$experience', '$company_location', '$salary', '$timing', '$due_date', '$vacancy', '$date')";
    
    $result = $conn->query($sql);
    if ($result === TRUE) {
        $count_sql = "SELECT COUNT(*) AS total FROM job_post";
        $count_result = $conn->query($count_sql);
        $count_row = $count_result->fetch_assoc();
        $total_user_entries = $count_row['total'];

        header("Location: feedback.php");
        $_SESSION['post_message'] = "Job post is successfully.";
    exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    }else{
        $_SESSION['post_message'] = "Image cannot be uploaded.";
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
        <!-- <div class="slider-area ">
            <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/about.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2>To Post Job</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 3644
        </div> -->
        <!-- Hero Area End -->
        <!-- Job List Area Start -->
        <div class="job-listing-area pt-120 pb-120">
            <div class="ml-5 mr-5">
            <form action="post_job.php" method="POST" enctype="multipart/form-data" class="ml-5 mr-5">
            <h2 class="mb-4 ml-4">Post Job</h2>

            <?php
    if (isset($_SESSION['post_message'])) {
        echo "<p style='color:Green; border: 1px solid #ededed; border-radius: 7px; padding: 5px'>" . $_SESSION['post_message'] . "</p>";
        unset($_SESSION['post_message']);
    }
    ?>
                    
                <div class="mb-3 ml-4 mr-4">
                    <label  class="form-label">Company Logo</label>
                    <input type="file" accept=".jpg, .jpeg, .png" class="form-control" id="company_logo" name="company_logo" required>
                </div>

                <div class="mb-3 ml-4 mr-4">
                    <label  class="form-label">Company Name</label>
                    <input type="text" class="form-control" id="company_name" name="company_name" required>
                </div>

                <div class="mb-3 ml-4 mr-4">
                    <label  class="form-label">Job Discription</label>
                    <input type="text" class="form-control" id="discription" name="discription" required>
                </div>

                <div class="mb-3 ml-4 mr-4">
                    <label  class="form-label">Company Email</label>
                    <input type="email" class="form-control" id="company_email" name="company_email" required>
                </div>

                <div class="mb-1 ml-4 mr-4">
                <label  class="form-label">Categories</label>
                    <select class="form-select mb-4" name="categories" id="categories" >
                        <option selected>Open this select menu</option>
                        <option value="Design & Creative">Design & Creative</option>
                        <option value="Design & Development">Design & Development</option>
                        <option value="Sales & Marketing">Sales & Marketing</option>
                        <option value="Mobile Application">Mobile Application</option>
                        <option value="Construction">Construction</option>
                        <option value="Information Technology">Information Technology</option>
                        <option value="Real Estate">Real Estate</option>
                        <option value="Content Writer">Content Writer</option>
                        <option value="Other">Other</option>
                    </select>
                </div>

                <div class="mb-3 ml-4 mr-4">
                    <label  class="form-label">Company URL</label>
                    <input type="text" class="form-control" id="company_web" name="company_web" required>
                </div>

                <div class="mb-3 ml-4 mr-4">
                    <label  class="form-label">Required Knowledge, Skills, and Abilities</label>
                    <textarea type="text" class="form-control" id="requirements" name="requirements" rows="5" required></textarea>
                </div>

                <div class="mb-3 ml-4 mr-4">
                    <label  class="form-label">Education + Experience</label>
                    <textarea type="text" class="form-control" id="experience" name="experience" rows="5" required></textarea>
                </div>

                <div class="mb-3 ml-4 mr-4">
                    <label  class="form-label">Location</label>
                    <input type="text" class="form-control" id="company_location" name="company_location" required>
                </div>

                <div class="mb-3 ml-4 mr-4">
                    <label  class="form-label">Salery</label>
                    <input type="number" class="form-control" id="salary" name="salary" required>
                </div>

                <div class="mb-4 ml-4 mr-4">
                    <label  class="form-label">Timming</label>
                    <select class="form-select mb-4" name="timing" id="timing" >
                        <option selected>Open this select menu</option>
                        <option value="Full Time">Full Time</option>
                        <option value="Part Time">Part Time</option>
                        <option value="Remote">Remote</option>
                        <option value="Freelance">Freelance</option>
                    </select>
                </div>

                <div class="mb-3 ml-4 mr-4">
                    <label  class="form-label">Due Date</label>
                    <input type="date" class="form-control" id="due_date" name="due_date" required>
                </div>

                <div class="mb-3 ml-4 mr-4">
                    <label  class="form-label">Vacancy</label>
                    <input type="number" class="form-control" id="vacancy" name="vacancy" required>
                </div>
                    
                <div class="form-group mt-4 ml-4">
                    <button type="submit" name="submit" class="button button-contactForm boxed-btn">Post</button>
                </div>
            </form>
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