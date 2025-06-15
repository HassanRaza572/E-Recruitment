<?php

session_start();
include "connection.php";
$resume_upload = 0;

if(isset($_POST['submit'])) {
    if (isset($_GET['id'])) {
        $job_id = $_GET['id'];
    } else {
        echo "No job ID specified.";
        exit;
    }
    
    $candidate_id = $_SESSION['id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $cnic = $_POST['cnic'];
    $email_address = $_POST['email_address'];
    $contact_number = $_POST['contact_number'];
    $date_birth = $_POST['date_birth'];
    $country = $_POST['country'];
    $candidate_education = $_POST['candidate_education'];
    $candidate_skill = $_POST['candidate_skill'];
    $candidate_experience = $_POST['candidate_experience'];
    $date = date('Y-m-d');

    $resume = time().$_FILES['resume']['name'];
    
    if(move_uploaded_file($_FILES['resume']['tmp_name'], $_SERVER['DOCUMENT_ROOT']. '/E-Recruitment system/cv/' . $resume)){
        $target_file = $_SERVER['DOCUMENT_ROOT']. '/E-Recruitment system/cv/' . $resume;
        $resumefiletype = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $resumename = basename($_FILES['resume']['name']);
        $resumefile = time().$resumename;

        if($resumefiletype != "pdf" && $resumefiletype != "doc" && $resumefiletype != "docx"){
            echo "<script> alert('Check extension.')</script>";
        }else if($_FILES['resume']['size'] > 50000000){
            echo "<script> alert('image exceed the size.')</script>";
        }else{
            $resume_upload = 1;
        }
    }
    if($resume_upload == 1){
        $sql = "INSERT INTO applications (candidate_id, job_id, firstname, lastname, cnic, email_address, contact_number, date_birth, country, candidate_education, candidate_skill, candidate_experience, resume, date)
                VALUES ('$candidate_id', '$job_id', '$firstname', '$lastname', '$cnic', '$email_address', '$contact_number', '$date_birth', '$country', '$candidate_education', '$candidate_skill', '$candidate_experience', '$resumefile', '$date')";
        
        $count_sql = "SELECT COUNT(*) AS total FROM applications";
        $count_result = $conn->query($count_sql);
        $count_row = $count_result->fetch_assoc();
        $total_application_entries = $count_row['total'];
        if ($conn->query($sql) === TRUE) {
            
            header("Location: feedback.php");
            exit;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }    
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
    /* Add some basic styling to make the form look better */
    .form-container {
        max-width: 800px;
        margin: 40px auto;
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    /* Make the form responsive */
    @media (max-width: 768px) {
        .form-container {
            margin: 20px auto;
        }
        .inputfirst {
            padding-left: 0;
        }
    }

    @media (max-width: 480px) {
        .form-container {
            padding: 10px;
        }
        .form-group {
            margin-bottom: 10px;
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
                                <h2>Apply Job</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Area End -->
        <!-- Job List Area Start -->
        <div class="job-listing-area pt-120 pb-120">
        
        <div class="form-container">
    <h2>Application Form</h2>
    <form action="apply_job.php?id=<?php echo $_GET['id']; ?>" method="POST" enctype="multipart/form-data" >

        <div class="row mb-2">
            <div class="col-md-6">
                <label for="firstName">First Name</label>
                <input type="text" class="form-control" id="firstname" name="firstname" >
            </div>
            <div class="col-md-6">
                <label for="lastName">Last Name</label>
                <input type="text" class="form-control" id="lastname" name="lastname" >
            </div>
        </div>

        <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" class="form-control" id="email_address" name="email_address">
        </div>

        <div class="form-group">
            <label for="cnic">CNIC</label>
            <input type="number" class="form-control" id="cnic" name="cnic">
        </div>

        <div class="form-group">
            <label for="contactNumber">Contact Number</label>
            <input type="text" class="form-control" id="contact_number" name="contact_number">
        </div>

        <div class="form-group">
            <label for="dob">Date of Birth</label>
            <input type="date" class="form-control" id="date_birth" name="date_birth">
        </div>

        <div class="form-group">
            <label for="country">Country of Residence</label>
            <input type="text" class="form-control" id="country" name="country">
        </div>

        <div class="form-group">
            <label for="country">Education</label>
            <textarea type="text" class="form-control" rows="4" id="candidate_education" name="candidate_education"></textarea>
        </div>

        <div class="form-group">
            <label for="country">Skills</label>
            <textarea type="text" class="form-control" rows="4" id="candidate_skill" name="candidate_skill"></textarea>
        </div>

        <div class="form-group">
            <label for="country">Experience</label>
            <textarea type="text" class="form-control" rows="4" id="candidate_experience" name="candidate_experience"></textarea>
        </div>

        <!-- <div class="form-group">
            <label>Upload Resume</label>
            <div class="upload-area mt-2">
                <p>Choose file or drop here in PDF</p>
                <input type="file" accept=".pdf, .doc, .docx" id="resume" name="resume"  >
            </div>
        </div> -->
        
        <div class="mb-3">
            <label  class="form-label">Upload Resume</label><br>
            <input type="file" class="form-control" accept=".pdf, .doc, .docx" id="resume" name="resume" >
        </div>

        <button type="submit"  name='submit' class="btn head-btn2 mt-3">Submit</button>
    </form>
</div>
        </div>
        <!-- Job List Area End -->
    </main>


    <?php include "footer.php"; ?>
    
    <script>
        const uploadArea = document.querySelector('.upload-area');
        const fileInput = document.querySelector('input[type="file"]');

        uploadArea.addEventListener('click', () => {
            fileInput.click();
        });

        fileInput.addEventListener('change', (event) => {
            const file = event.target.files[0];
            if (file) {
                uploadArea.textContent = file.name;
            } else {
                uploadArea.textContent = 'Choose file or drop here';
            }
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