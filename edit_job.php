<?php
session_start();

if ($_SESSION['user_type'] != 'Recruiter') {
    echo "Access denied.";
    exit;
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
        <div class="slider-area ">
            <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/about.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap text-center">
                                <h2>Edit Job</h2>
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
                <?php
                include "connection.php";
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

                        $recruiter_id = $_SESSION['id'];
                        $job_id = $_POST['job_id'];
                    
                        $company_name = $_POST['company_name'];
                        $requirements = $_POST['requirements'];
                        $company_location = $_POST['company_location'];
                        $salary = $_POST['salary'];
                        $timing = $_POST['timing'];
                        $Categories = $_POST['Categories'];
                        
                        $sql = "UPDATE job_post SET  company_name = '$company_name', requirements = '$requirements', company_location='$company_location', salary='$salary', timing='$timing', Categories='$Categories' WHERE job_id='$job_id' AND recruiter_id=$recruiter_id";
                        if ($conn->query($sql) === TRUE) {
                            echo "<script> alert('Update record successfully')</script>";
                            header('location:edit_job.php');
                        } else {
                            echo "Error: " . $sql . "<br>" . $conn->error;
                        }
                    }else {
                    
                    $job_id = $_GET['id'];
                    
                    $sql = "SELECT * FROM job_post WHERE job_id = '$job_id' ";
                    $result = mysqli_query($conn, $sql);

                
                    if (mysqli_num_rows($result)>0) {
                        while($row = mysqli_fetch_assoc($result)){
                        ?>


            <form action="edit_job.php" method="POST" class="ml-5 mr-5">
            <h2 class="mb-4 ml-4">Edit Job</h2>
                    
                    <input type="hidden" class="form-control" id="job_id" name="job_id" value="<?php echo $row['job_id']; ?>">
    
                <div class="mb-3 ml-4 mr-4">
                    <label  class="form-label">Company Name</label>
                    <input type="text" class="form-control" id="company_name" name="company_name" value="<?php echo  $row['company_name'] ; ?>" required>
                </div>
                <div class="mb-1 ml-4 mr-4">
                <label  class="form-label">Categories</label><br>
                <select name="Categories" required>
                    <option value="Design & Creative" <?php if ($row['Categories'] == 'Design & Creative') echo 'selected'; ?>>Design & Creative</option>
                    <option value="Design & Development" <?php if ($row['Categories'] == 'Design & Development') echo 'selected'; ?>>Design & Development</option>
                    <option value="Sales & Marketing" <?php if ($row['Categories'] == 'Sales & Marketing') echo 'selected'; ?>>Sales & Marketing</option>
                    <option value="Mobile Application" <?php if ($row['Categories'] == 'Mobile Application') echo 'selected'; ?>>Mobile Application</option>
                    <option value="Construction" <?php if ($row['Categories'] == 'Construction') echo 'selected'; ?>>Construction</option>
                    <option value="Information Technology" <?php if ($row['Categories'] == 'Information Technology') echo 'selected'; ?>>Information Technology</option>
                    <option value="Real Estate" <?php if ($row['Categories'] == 'Real Estate') echo 'selected'; ?>>Real Estate</option>
                    <option value="Content Writer" <?php if ($row['Categories'] == 'Content Writer') echo 'selected'; ?>>Content Writer</option>
                    <option value="Other" <?php if ($row['Categories'] == 'Other') echo 'selected'; ?>>Other</option>
                </select><br>
                </div><br>
                <div class="mb-3 ml-4 mr-4">
                    <label  class="form-label">Requirements</label>
                    <textarea type="text" class="form-control" id="requirements" name="requirements" rows="5" required > <?php echo $row['requirements'] ; ?></textarea>
                </div>
                <div class="mb-3 ml-4 mr-4">
                    <label  class="form-label">Location</label>
                    <input type="text" class="form-control" id="company_location" name="company_location" value="<?php echo $row['company_location'] ; ?>" required >
                </div>
                <div class="mb-3 ml-4 mr-4">
                    <label  class="form-label">Salery</label>
                    <input type="number" class="form-control" id="salary" name="salary" value="<?php echo $row['salary']; ?>" required>
                </div>
                <div class="mb-4 ml-4 mr-4">
                    <label  class="form-label">Timming</label><br>
                    <select name="timing" required>
                        <option value="Full Time" <?php if ($row['timing'] == 'Full Time') echo 'selected'; ?>>Full Time</option>
                        <option value="Part Time" <?php if ($row['timing'] == 'Part Time') echo 'selected'; ?>>Part Time</option>
                        <option value="Remote" <?php if ($row['timing'] == 'Remote') echo 'selected'; ?>>Remote</option>
                        <option value="Freelance" <?php if ($row['timing'] == 'Freelance') echo 'selected'; ?>>Freelance</option>
                    </select><br><br>
                </div>
                    
                <div class="form-group mt-4 ml-4">
                    <button type="submit" name="submit" class="button button-contactForm boxed-btn">Update Job</button>
                </div>
            </form>
            <?php
                        }
                } else {
                    echo "<script> alert('Job not found or you don\'t have permission to edit this job.')</script>";
                    exit();
                }
                $stmt->close();
            }
            $conn->close();
            ?>
            </div>
            
        </div>
        <!-- Job List Area End -->
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