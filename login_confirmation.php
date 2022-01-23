<?php include "header/session.php"; ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Counselor - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

	<div class="wrap" style="background: rgb(5, 38, 58);">
		<div class="container" style="background: rgb(5, 38, 58);">
			<div class="row" style="background: rgb(5, 38, 58);">
				<div class="col-md-6 d-flex align-items-center">
					<p class="mb-0 phone pl-md-2">
						<a href="#" class="mr-2"> Delta State University</a> 
						<a href="#"> P.M.B 1, Abraka, Delta State, Nigeria</a>
					</p>
				</div>
				<div class="col-md-6 d-flex justify-content-md-end">
					<div class="social-media">
					<p class="mb-0 d-flex">
						<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
						<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
						<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
						<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
					</p>
			</div>
				</div>
			</div>
		</div>
	</div>

  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	<div class="container"> 
	  <a class="navbar-brand" href="index.html"><img src="images/images/delsu.jpg" style="height: 90px;width: 180px;" alt=""> Counseling Centre</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="oi oi-menu"></span> Menu
	  </button>

	  <div class="collapse navbar-collapse" id="ftco-nav">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item"><a href="https://www.delsu.edu.ng/ " title="delta state university home page" target="_blank" class="nav-link"> <img src="images/images/homeicon2.jpg"  style="height: 35px; border-radius: 50%;"></a></li>
			<li class="nav-item"><a href="http://portal.delsu.edu.ng/  " title="login to student portal " target="_blank" class="nav-link"><img src="images/images/studenticon.jpg" style="height: 35px; border-radius: 50%;"></a></li>
		  <li class="nav-item"><a href="index.html" class="nav-link">Home</a></li>
		  <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
		  <li class="nav-item active"><a href="login.html" class="nav-link">Login</a></li>
		  <li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>
		  <li class="nav-item"><a href="appointment.html" class="nav-link">Appointment</a></li>
		  <li class="nav-item"><a href="faqs.html" class="nav-link">FAQs</a></li>
		  <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
		</ul>
	  </div>
	</div>
  </nav>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/images/session2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate mb-5 text-center">
          	<p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span> <span>Login <i class="fa fa-chevron-right"></i></span></p>
              <?php 
            echo ErrorMessage();
            echo SuccessMessage();
            ?>
			<div class="loginform">
                <?php echo $_SESSION['otp']; ?>
				<form action="form/login.php" method="POST" style="color: rgb(220, 222, 255);">
					<label for="email">Enter the 6 didgit code sent to your email</label>
					<input type="number" name="otp" id="userInput" placeholder="e.g 768855" required style="width: 85%; text-align: center;">
                    <br><br>
                    <input type="hidden" value="<?php echo $_SESSION['otp'];?>" name="otp_con"/>
					<button onclick="name" name="otp_confirm" style="border-radius: 10%;" name="submit">Submit</button><a href=""></a>
				</form>
			</div>

          </div>
        </div>
      </div>
    </section>






	<section class="ftco-section ftco-no-pt bg-light">
    	<div class="container">
    		<div class="row justify-content-center pb-5 mb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">100% free mental health care service </span>
            <p>Log in to connect with our online counseling service team. The Delta State University Counseling Centre is actively engaged in advocacy and other community services but access to Delsu Student Counseling Centre is restricted to currently enrolled student of the university and other members of the Delsu Community. Please provide your unique Delsu email to gain access. Meanwhile, you can access other of our services if you are a non-member of the University Community or if you have any unrectifiable challenge login in. Our online therapists will reply to your messages and start a discussion with you once you are on board.</p>
          </div>
        </div>


        <div class="row">
            <div class="col-md-4 ftco-animate d-flex">
                <div class="block-7 w-100">
                  <div class="text-center">
                      <p><img src="/images/images/selfhellpp.jpg" alt="" style="width: 100%; height: 200px; border-radius: 2%;"></p>
                      <span class="excerpt d-block">Self-Help Resources</span>
                      <ul class="pricing-text mb-5">
                          Our self-help resources are not mearnt to take the place of real therapy but will no doubt be useful especially to persons who are not familiar or comfortable with therapy. Click here to gain access
                      </ul>
  
                      <a href="#" class="btn btn-primary d-block px-2 py-3">Get Started</a>
                  </div>
                </div>
              </div>

        <div class="col-md-4 ftco-animate d-flex">
          <div class="block-7 w-100">
            <div class="text-center">
                <p><img src="/images/images/appointment.jpg" alt="" style="width: 100%; height: 200px; border-radius: 2%;"></p>
                <span class="excerpt d-block">Appointments</span>
                <ul class="pricing-text mb-5">
                    Book an appointment to meet with us and we will be with you at that point of need.
                </ul>

                <a href="appointment.html" class="btn btn-primary d-block px-2 py-3">Get Started</a>
            </div>
          </div>
        </div>
        
        <div class="col-md-4 ftco-animate d-flex">
            <div class="block-7 w-100">
              <div class="text-center">
                  <p><img src="/images/images/crisis services.jpg" alt="" style="width: 100%; height: 200px; border-radius: 2%;"></p>
                  <span class="excerpt d-block">Crisis Services</span>
                  <ul class="pricing-text mb-5">
                      Our Crisis service option connects you directly to the Director of The Student Counseling Centre on mobile for split seconds if prevailing circumstances permits establishment of connection.
                  </ul>

                  <a href="tel:+2348033112197" title="connect" class="btn btn-primary d-block px-2 py-3">Get Started</a>
              </div>
            </div>
          </div>
      </div>

    	</div>
    </section>





    <footer class="ftco-footer" style="background: rgb(2, 23, 37); line-height: 15px;">
		<div class="container" >
		  <div class="row mb-5" >
			<div class="col-sm-12 col-md">
			  <div class="ftco-footer-widget mb-4">
				<h2 class="ftco-heading-2 logo"><a href="https://www.delsu.edu.ng/" title="delta state university home page" target="_blank"><img src="images/images/homeicon2.jpg" style="height: 30px; border-radius: 50%;">Delta State University</a></h2>
				<p>P.M.B. 1, Abraka Delta State, Nigeria</p>
				<div class="core" style="background: rgb(220, 255, 255); border-radius: 3px;"><h4>Core Values</h4></div>
				<li>Excellence in scholarship</li>
				<li>Academic freedom</li>
				<li>Participatory and student focused teaching</li>
				<li>Integrity and good work ethics</li>
				<li>Quality service delivery</li>
				<li>Transparency and Accountability</li>
				<li>Self-reliance</li>
				<li>Knowledge without bounds</li>
				<ul class="ftco-footer-social list-unstyled mt-2">
				  <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
				  <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
				  <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
				</ul>
			  </div>
			</div>
			<div class="col-sm-12 col-md">
			  <div class="ftco-footer-widget mb-4 ml-md-4">
				  <div class="core" style="background: rgb(220, 255, 255); color: rgb(5, 38, 58); margin-top: 100px; border-radius: 3px;">Key Mandate And Guiding Principles</P></div>
				<ul class="list-unstyled" >
				  <li>Excellence</li>
				  <li>Integrity</li>
				  <li>Innovation</li>
				  <li>Diversity</li>
				  <li>Social responsibility</li>
				</ul>
			  </div>
			</div>
			<div class="col-sm-12 col-md" style="margin-top: 100px;">
			  <div class="ftco-footer-widget mb-4 ml-md-4">
				<h2 class="ftco-heading-2">Counseling Centre</h2>
				<ul class="list-unstyled">
				  <li><a href="index.html" title="delta state university counseling centre home page"><span class="fa fa-chevron-right mr-2"></span>Home</a></li>
				  <li><a href="about.html"><span class="fa fa-chevron-right mr-2"></span>About</a></li>
				  <li><a href="services.html"><span class="fa fa-chevron-right mr-2"></span>Services</a></li>
				  <li><a href="contact.html"><span class="fa fa-chevron-right mr-2"></span>Contact</a></li>
				  <li><a href="faqs.html"><span class="fa fa-chevron-right mr-2"></span>FAQs</a></li>
				  <li><a href="login.html"><span class="fa fa-chevron-right mr-2"></span>Log in</a></li>
				  <li><a href="http://portal.delsu.edu.ng/" title="delsu student portal" target="_blank"><span class=""> <img src="images/images/studenticon.jpg" style="height: 35px; border-radius: 50%;"> </span>Student Portal</a></li>
			  </ul>
			  </div>
			</div>
  
			<div class="col-sm-12 col-md" style="margin-top: 100px;">
			  <div class="ftco-footer-widget mb-4">
				  <h2 class="ftco-heading-2">Reach us</h2>
				  <div class="block-23 mb-3">
					<ul>
					  <li><span class="icon fa fa-map marker"></span><span class="text">University Counselling Center, Ebonyi road beside faculty of pharmacy campus 3, Delta State University, Abraka</span></li>
					  <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+234-8033-112-197</span></a></li>
					  <li><a href="#"><span class="icon fa fa-paper-plane pr-4"></span><span class="text">counselingcenter@delsu.edu.ng</span></a></li>
					</ul>
				  </div>
			  </div>
			</div>
		  </div>
		</div>
		<div class="container-fluid px-0 py-5 bg-black">
			<div class="container">
				<div class="row">
				<div class="col-md-12">
		  
				  <p class="mb-0" style="color: rgba(255,255,255,.5);"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					  Copyright &copy; -Delta State University Counseling Centre <script>document.write(new Date().getFullYear());</script> All rights reserved | content and design by obine.eric@delsu.edu.ng | template by <i class="fa fa-heart color-danger" aria-hidden="true"></i><a href="https://colorlib.com" target="_blank">Colorlib</a>
					  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
				</div>
			  </div>
			</div>
		</div>
	  </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>