<?php
session_start();
include "connection.php";

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id= $_SESSION['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $birthdate = $_POST['birthdate'];
    $country = $_POST['country'];
    $phone = $_POST['phone'];


    // Update query
    $user_id = $_SESSION['id']; // Assuming the user ID is stored in the session
    $sql = "UPDATE user SET name='$name', email='$email', password='$password', birthdate='$birthdate', country='$country', phone='$phone' WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        // Update session variables with new data
        $_SESSION['name'] = $name;
        $_SESSION['email'] = $email;
        $_SESSION['country'] = $country;
        $_SESSION['phone'] = $phone;
        $_SESSION['birthdate'] = $birthdate;

        // Redirect or display success message
        header("Location: profile.php?success=1");
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $conn->close();
}
?>



<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
     <title>E-Recruitment system </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/fav.png">
   <!-- CSS here -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/slicknav.css">
        <link rel="stylesheet" href="assets/css/price_rangs.css">
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="assets/css/themify-icons.css">
        <link rel="stylesheet" href="assets/css/themify-icons.css">
        <link rel="stylesheet" href="assets/css/slick.css">
        <link rel="stylesheet" href="assets/css/nice-select.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
        

        <style>
.profile-info{
    margin-left:10%;
    margin-right:10%;
}
.bio-graph-info h1 {
    font-size: 22px;
    font-weight: 300;
    margin: 0 0 20px;
}

.bio-row {
    width: 50%;
    float: left;
    margin-bottom: 10px;
    padding:0 15px;
}

.bio-row p span {
    width: 100px;
    display: inline-block;
}

.bio-chart, .bio-desk {
    float: left;
}

.bio-chart {
    width: 40%;
}

.bio-desk {
    width: 60%;
}

.bio-desk h4 {
    font-size: 15px;
    font-weight:400;
}

.bio-desk h4.terques {
    color: #4CC5CD;
}

.bio-desk h4.red {
    color: #e26b7f;
}

.bio-desk h4.green {
    color: #97be4b;
}

.bio-desk h4.purple {
    color: #caa3da;
}

.file-pos {
    margin: 6px 0 10px 0;
}

.profile-activity h5 {
    font-weight: 300;
    margin-top: 0;
    color: #c3c3c3;
}

.summary-head {
    background: #ee7272;
    color: #fff;
    text-align: center;
    border-bottom: 1px solid #ee7272;
}

.summary-head h4 {
    font-weight: 300;
    text-transform: uppercase;
    margin-bottom: 5px;
}

.summary-head p {
    color: rgba(255,255,255,0.6);
}

ul.summary-list {
    display: inline-block;
    padding-left:0 ;
    width: 100%;
    margin-bottom: 0;
}

ul.summary-list > li {
    display: inline-block;
    width: 19.5%;
    text-align: center;
}

ul.summary-list > li > a > i {
    display:block;
    font-size: 18px;
    padding-bottom: 5px;
}

ul.summary-list > li > a {
    padding: 10px 0;
    display: inline-block;
    color: #818181;
}

ul.summary-list > li  {
    border-right: 1px solid #eaeaea;
}

ul.summary-list > li:last-child  {
    border-right: none;
}

.activity {
    width: 100%;
    float: left;
    margin-bottom: 10px;
}

.activity.alt {
    width: 100%;
    float: right;
    margin-bottom: 10px;
}

.activity span {
    float: left;
}

.activity.alt span {
    float: right;
}
.activity span, .activity.alt span {
    width: 45px;
    height: 45px;
    line-height: 45px;
    border-radius: 50%;
    -webkit-border-radius: 50%;
    background: #eee;
    text-align: center;
    color: #fff;
    font-size: 16px;
}

.activity.terques span {
    background: #8dd7d6;
}

.activity.terques h4 {
    color: #8dd7d6;
}
.activity.purple span {
    background: #b984dc;
}

.activity.purple h4 {
    color: #b984dc;
}
.activity.blue span {
    background: #90b4e6;
}

.activity.blue h4 {
    color: #90b4e6;
}
.activity.green span {
    background: #aec785;
}

.activity.green h4 {
    color: #aec785;
}

.activity h4 {
    margin-top:0 ;
    font-size: 16px;
}

.activity p {
    margin-bottom: 0;
    font-size: 13px;
}

.activity .activity-desk i, .activity.alt .activity-desk i {
    float: left;
    font-size: 18px;
    margin-right: 10px;
    color: #bebebe;
}

.activity .activity-desk {
    margin-left: 70px;
    position: relative;
}

.activity.alt .activity-desk {
    margin-right: 70px;
    position: relative;
}

.activity.alt .activity-desk .panel {
    float: right;
    position: relative;
}

.activity-desk .panel {
    background: #F4F4F4 ;
    display: inline-block;
}


.activity .activity-desk .arrow {
    border-right: 8px solid #F4F4F4 !important;
}
.activity .activity-desk .arrow {
    border-bottom: 8px solid transparent;
    border-top: 8px solid transparent;
    display: block;
    height: 0;
    left: -7px;
    position: absolute;
    top: 13px;
    width: 0;
}

.activity-desk .arrow-alt {
    border-left: 8px solid #F4F4F4 !important;
}

.activity-desk .arrow-alt {
    border-bottom: 8px solid transparent;
    border-top: 8px solid transparent;
    display: block;
    height: 0;
    right: -7px;
    position: absolute;
    top: 13px;
    width: 0;
}

.activity-desk .album {
    display: inline-block;
    margin-top: 10px;
}

.activity-desk .album a{
    margin-right: 10px;
    
}

.activity-desk .album a:last-child{
    margin-right: 0px;
}

    .input-field {
            position: relative;
        }

        .toggle-password {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(10%);
            cursor: pointer;
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

    
    <!-- ================ contact section start ================= -->
    <section class="contact-section">
            <div class="container">
                <div class="row ml-5">
                    <div class="col-12">
                        <h2 class="contact-title">Profile</h2>
                    </div>

                                  
  <div class="profile-info col-md-9">
      
      <div class="panel">
          
          <div class="panel-body bio-graph-info">
              
              <div class="row">
                  <div class="bio-row">
                      <p><span style="font-weight:bold;">First Name </span>: <?php echo $_SESSION['name'];?></p>
                  </div>
                  <div class="bio-row">
                      <p><span style="font-weight:bold;">Country </span>: <?php echo $_SESSION['country'];?></p>
                  </div>
                  <div class="bio-row">
                      <p><span style="font-weight:bold;">Date of Birth</span>: <?php echo $_SESSION['birthdate'];?></p>
                  </div>
                  <div class="bio-row">
                      <p><span style="font-weight:bold;">Email </span>: <?php echo $_SESSION['email'];?></p>
                  </div>
                  <div class="bio-row">
                      <p><span style="font-weight:bold;">Mobile </span>: <?php echo $_SESSION['phone'];?></p>
                  </div>
                  <div class="bio-row">
                      <p><span style="font-weight:bold;">Phone </span>: <?php echo $_SESSION['phone'];?></p>
                  </div>
                  <div class="bio-row">
                      <p><span style="font-weight:bold;">Type </span>: <?php echo $_SESSION['user_type'];?></p>
                  </div>
              </div>
          </div>
      </div>
      <div class="mt-5">
          <div class="row">
              <div class="col-md-6">
                  <div class="panel">
                      <div class="panel-body">
                        <?php
                            if($_SESSION['user_type'] === 'Candidate'){
                                $candidate_id = $_SESSION['id'];
                                $count_sql = "SELECT COUNT(*) AS total FROM applications WHERE candidate_id	 ='$candidate_id'";
                                $count_result = $conn->query($count_sql);
                                $count_row = $count_result->fetch_assoc();
                                $total_entries = $count_row['total'];
                                $conn->close();
                        ?>
                          <div class="bio-chart">
                              <div style="display:inline;width:100px;height:100px;"><canvas width="100" height="100px"></canvas><input class="knob" data-width="100" data-height="100" data-displayprevious="true" data-thickness=".2" value="<?php echo $total_entries; ?>" data-fgcolor="#e06b7d" data-bgcolor="#e8e8e8" style="width: 54px; height: 33px; position: absolute; vertical-align: middle; margin-top: 33px; margin-left: -77px; border: 0px; font-weight: bold; font-style: normal; font-variant: normal; font-stretch: normal; font-size: 20px; line-height: normal; font-family: Arial; text-align: center; color: rgb(224, 107, 125); padding: 0px; -webkit-appearance: none; background: none;"></div>
                          </div>
                          <div class="bio-desk">
                              <h4 class="red">Apllied Applications</h4>
                              <p></p>
                              <p><?php echo $total_entries; ?></p>
                          </div>
                          <div class="col-md-6">
                  <div class="panel">
                      <div class="panel-body">
                          <div class="bio-chart">
                              <div style="display:inline;width:100px;height:100px;"><canvas width="100" height="100px"></canvas><input class="knob" data-width="100" data-height="100" data-displayprevious="true" data-thickness=".2" value="" data-fgcolor="#4CC5CD" data-bgcolor="#e8e8e8" style="width: 54px; height: 33px; position: absolute; vertical-align: middle; margin-top: 33px; margin-left: -77px; border: 0px; font-weight: bold; font-style: normal; font-variant: normal; font-stretch: normal; font-size: 20px; line-height: normal; font-family: Arial; text-align: center; color: rgb(76, 197, 205); padding: 0px; -webkit-appearance: none; background: none;"></div>
                          </div>
                          <div class="bio-desk">
                          <a href="status.php" class="btn head-btn2">Status</a>
                          </div>
                      </div>
                  </div>
              </div>

                          <?php
                            }elseif($_SESSION['user_type'] === 'Recruiter'){
                                $recruiter_id = $_SESSION['id'];
                                $count_sql = "SELECT COUNT(*) AS total FROM job_post WHERE recruiter_id ='$recruiter_id'";
                                $count_result = $conn->query($count_sql);
                                $count_row = $count_result->fetch_assoc();
                                $total_entries = $count_row['total'];
                                $conn->close();
                            ?>
                            <div class="bio-chart">
                              <div style="display:inline;width:100px;height:100px;"><canvas width="100" height="100px"></canvas><input class="knob" data-width="100" data-height="100" data-displayprevious="true" data-thickness=".2" value="<?php echo $total_entries; ?>" data-fgcolor="#e06b7d" data-bgcolor="#e8e8e8" style="width: 54px; height: 33px; position: absolute; vertical-align: middle; margin-top: 33px; margin-left: -77px; border: 0px; font-weight: bold; font-style: normal; font-variant: normal; font-stretch: normal; font-size: 20px; line-height: normal; font-family: Arial; text-align: center; color: rgb(224, 107, 125); padding: 0px; -webkit-appearance: none; background: none;"></div>
                          </div>
                          <div class="bio-desk">
                            
                              <h4 class="red">Posted Jobs</h4>
                              <p></p>
                              <p><?php echo $total_entries; ?></p>
                          </div>
                          <div class="panel">
                      <div class="panel-body">
                          <div class="bio-chart">
                              <div style="display:inline;width:100px;height:100px;"><canvas width="100" height="100px"></canvas><input class="knob" data-width="100" data-height="100" data-displayprevious="true" data-thickness=".2" value="" data-fgcolor="#4CC5CD" data-bgcolor="#e8e8e8" style="width: 54px; height: 33px; position: absolute; vertical-align: middle; margin-top: 33px; margin-left: -77px; border: 0px; font-weight: bold; font-style: normal; font-variant: normal; font-stretch: normal; font-size: 20px; line-height: normal; font-family: Arial; text-align: center; color: rgb(76, 197, 205); padding: 0px; -webkit-appearance: none; background: none;"></div>
                          </div>
                          <div class="bio-desk">
                          <a href="status.php" class="btn head-btn2">Status</a>
                          </div>
                      </div>
                  </div>
              </div>
                          <?php
                          }
                          ?>
                          </div>
                  </div>
              </div>
              
                <div class="mt-5">
                    <button class="btn head-btn1">Update</button>
                </div>
          </div>
      </div>
  </div>       
                </div>
                


            </div>
        </section>
    <!-- ================ contact section end ================= -->
<!-- Edit Profile Modal -->
<div id="editProfileModal" class="modal" style="display:none; position:fixed; z-index:1000; left:0; top:0; width:100%; height:100%; overflow:auto; background-color: rgba(0,0,0,0.4);">
    <div class="modal-content " style="background-color:#fefefe; margin:auto; padding:20px; border:1px solid #888; width:50%;">
        <span class="close" style="color:#aaa; float:right; font-size:28px; font-weight:bold;">&times;</span>
        <h2>Edit Profile</h2>
        <form action="profile.php" method="post">
        <input type="hidden" name="id" id="id" class="form-control" value="<?php echo $_SESSION['id']; ?>">
            <div class="form-group">
                <label for="name">First Name</label>
                <input type="text" name="name" id="name" class="form-control" value="<?php echo $_SESSION['name']; ?>">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" value="<?php echo $_SESSION['email']; ?>">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" >
            </div>
            <div class="form-group">
                <label for="birthdate">Date of Birth</label>
                <input type="date" name="birthdate" id="birthdate" class="form-control" value="<?php echo $_SESSION['birthdate']; ?>">
            </div>
            <div class="form-group">
                <label for="country">Country</label>
                <input type="text" name="country" id="country" class="form-control" value="<?php echo $_SESSION['country']; ?>">
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" name="phone" id="phone" class="form-control" value="<?php echo $_SESSION['phone']; ?>">
            </div>
            <!-- Add other fields as necessary -->
            <button type="submit" name="submit" class="btn btn-primary">Save Changes</button>
        </form>
    </div>
</div>



    <?php include "footer.php"; ?>

<!-- JS here -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
    var modal = document.getElementById("editProfileModal");
    var btn = document.querySelector(".btn.head-btn1");
    var span = document.getElementsByClassName("close")[0];

    // Open the modal when the Edit button is clicked
    btn.onclick = function() {
        modal.style.display = "block";
    }

    // Close the modal when the close button (x) is clicked
    span.onclick = function() {
        modal.style.display = "none";
    }

    // Close the modal when the user clicks anywhere outside of it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
});

</script>


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
		
		<!-- Scrollup, nice-select, sticky -->
        <script src="./assets/js/jquery.scrollUp.min.js"></script>
        <script src="./assets/js/jquery.nice-select.min.js"></script>
		<script src="./assets/js/jquery.sticky.js"></script>
        <script src="./assets/js/jquery.magnific-popup.js"></script>

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