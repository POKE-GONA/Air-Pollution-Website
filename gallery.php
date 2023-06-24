<?php 
session_start();
include ('BrowsingFunction.php');
recordBrowse("http://localhost:70/Assm/gallery.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>Air Pollution</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:title" content="Vide" />
<meta name="keywords" content="Air Pollution Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/nav.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/hover_pack.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- js -->
   <script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<!-- dropdown -->
<script src="js/hover_pack.js"></script>
<!-- //dropdown -->
<!--webfont-->
<link href='//fonts.googleapis.com/css?family=Nunito:400,300,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->

</head>
<body>
<!-- page-head -->
    <div class="page-head">
			<div class="header-nav">
				<div class="logo wow fadeInUp animated" data-wow-delay=".5s">
					<h1>
						<a class="link link--kumya" href="Home.php"><i></i><span data-letters="AIR POLLUTION">AIR POLLUTION</span></a>
					</h1>
				</div>
				<div class="top-nav wow fadeInUp animated" data-wow-delay=".5s">										 
						<label class="mobile_menu" for="mobile_menu">
						<span>Menu</span>
						</label>
						<input id="mobile_menu" type="checkbox">
					   <ul class="nav">

						 <li><a class="active" href="Home.php">HOME</a></li>

						 <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">GALLERY<span class="caret"></span></a>
								<ul class="dropdown-menu">
						 			<li><a href="gallery.php">GALLERY</a></li>
						 			<li><a href="countrydisplay.php">Country Display</a></li>
						 			<li><a href="ViewQuestion.php">View Question</a></li>
						 		</ul>
						</li>

						 <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">USER<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="UserLogin.php">User Login</a></li>
									<li><a href="UserRegister.php">User Register</a></li>
									<li><a href="Contact Us.php">Contact Us</a></li>
									<li><a href="userupdate.php">User Update</a></li>
									<li><a href="UserLogout.php">User Logout</a></li>
								</ul>
						</li>

						 <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ADMIN<span class="caret"></span></a>
								<ul class="dropdown-menu">
						 			<li><a href="StaffLogin.php">Staff Login</a></li>
						 			<li><a href="StaffRegister.php">Staff Register</a></li>
						 			<li><a href="CountryRegister.php">Country Register</a></li>
						 			<li><a href="ViewQuestion.php">View Question</a></li>
						 			<li><a href="StaffLogout.php">Staff Logout</a></li>
						 		</ul>
						</li>
						   		 <li><a href="History.php">History</a></li>

					  </ul>
				 </div>
				<div class="clearfix"></div>
			</div>
    </div>
<!-- //page-head -->
<div class="gallery">
	<div class="container">
		<h3 class="tittle">Global warming is caused by carbon dioxide</h3>
			<div class="gallery-grids">
				
				<div class="gallery-grid wow fadeInRight animated" data-wow-delay=".5s">
					<a href="#portfolioModal7" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal">
						  <img src="images/sunlight-blocked-by-air-pollution-323444.jpg" alt=" " class="img-responsive" />
						  <div class="b-wrapper">
						  </div>
					</a>
					<a href="#portfolioModal1" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal">
						  <img src="images/wildfires-lede_ap-images-640x360.jpg" alt=" " class="img-responsive" />
						  <div class="b-wrapper">
						  </div>
					</a>
					<a href="#portfolioModal2" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal">
						  <img src="images/South_Korea_Air_Pollution_16131_14219668_ver1.0_640_360.jpg" alt=" " class="img-responsive" />
						  <div class="b-wrapper">
						  </div>
					</a>
				</div>
				<div class="gallery-grid wow fadeInUp animated" data-wow-delay=".5s">
					<a href="#portfolioModal3" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal">
						  <img src="images/s107656144.jpg" alt=" " class="img-responsive" />
						  <div class="b-wrapper">
						  </div>
					</a>
					<a href="#portfolioModal4" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal">
						  <img src="images/India_Toxic_Air_09495_16739256_ver1.0_640_360.jpg" alt=" " class="img-responsive" />
						  <div class="b-wrapper">
						  </div>
					</a>
					<a href="#portfolioModal8" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal">
						  <img src="images/India_Toxic_Air_09630_16731788_ver1.0_640_360.jpg" alt=" " class="img-responsive" />
						  <div class="b-wrapper">
						  </div>
					</a>
				</div>
				<div class="gallery-grid wow fadeInLeft animated" data-wow-delay=".5s">
					
					<a href="#portfolioModal5" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal">
						  <img src="images/AP090108069437_crop-640x360.jpg" alt=" " class="img-responsive" />
						  <div class="b-wrapper">
						  </div>
					</a>
					<a href="#portfolioModal10" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal">
						  <img src="images/All-That-Is-Solid.jpg" alt=" " class="img-responsive" />
						  <div class="b-wrapper">
						  </div>
					</a>
					<a href="#portfolioModal9" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal">
						  <img src="images/777054-trafficjam-122916.jpg" alt=" " class="img-responsive" />
						  <div class="b-wrapper">
						  </div>
					</a>
				</div>
				<div class="clearfix"> </div>
			</div>
	</div>
</div>
<!--footer-->
<div class="footer">
	<div class="container">
		<div class="col-md-3 footer-grid wow fadeInRight animated" data-wow-delay=".5s">
			<h3>About us</h3>
			<p>For your free time,and they are independent to us the most important is that which is well pleasing in his option of choosing when they are enabled to do nothing to stop it were no so.</p>
		</div>
		<div class="col-md-2 footer-grid wow fadeInRight animated" data-wow-delay=".5s">
			<h3>Navigation</h3>
			<ul class="nav">

						 <li><a class="active" href="Home.php">HOME</a></li>

						 <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">GALLERY<span class="caret"></span></a>
								<ul class="dropdown-menu">
						 			<li><a href="gallery.php">GALLERY</a></li>
						 			<li><a href="countrydisplay.php">Country Display</a></li>
						 			<li><a href="ViewQuestion.php">View Question</a></li>
						 		</ul>
						</li>

						 <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">USER<span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="UserLogin.php">User Login</a></li>
									<li><a href="UserRegister.php">User Register</a></li>
									<li><a href="Contact Us.php">Contact Us</a></li>
									<li><a href="userupdate.php">User Update</a></li>
									<li><a href="UserLogout.php">User Logout</a></li>
								</ul>
						</li>

						 <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ADMIN<span class="caret"></span></a>
								<ul class="dropdown-menu">
						 			<li><a href="StaffLogin.php">Staff Login</a></li>
						 			<li><a href="StaffRegister.php">Staff Register</a></li>
						 			<li><a href="CountryRegister.php">Country Register</a></li>
						 			<li><a href="ViewQuestion.php">View Question</a></li>
						 			<li><a href="StaffLogout.php">Staff Logout</a></li>
						 		</ul>
						</li>
						   		 <li><a href="History.php">History</a></li>

		</ul>
		</div>
		<div class="col-md-3 footer-grid wow fadeInLeft animated" data-wow-delay=".5s">
			<h3>Get in Touch</h3>
			<h2>Air Pollution</h2>
			<ul>
				<li>2144 - 007 - 1566</li>
				<li>No 48, Season street,</li>
				<li>Livingstone,</li>
				<li>London</li>
				<li>Email : <a href="mailto:info@example.com">info@example.com</a></li>
			</ul>
		</div>
		<div class="col-md-4 social-grid wow fadeInLeft animated" data-wow-delay=".5s">
			<h3>Connect Pollution Websites</h3>

			<ul>
			<h3><a  href="https://www.who.int/sustainable-development/cities/health-risks/air-pollution/en/">More detail for website 1</a></h3><br>
			<h3><a  href="https://www.nationalgeographic.com/environment/2019/08/air-pollution-linked-to-bipolar-disorder-depression/">More detail for website 2</a></h3><br>
			</ul>

			<ul>
				<li><a class="fb1" href="https://facebook.com/"></a></li>
				<li><a class="fb2" href="https://www.pinterest.com/"></a></li>
				<li><a class="fb3" href="https://www.linkedin.com/"></a></li>
				<!-- <li><a class="fb4" href="#"></a></li>
 -->			</ul>

		</div>
		<div class="clearfix"></div>
		<div class="copy-right">
			<p> &copy; 2020 Air Pollution. All Rights Reserved | Design by  <a href="#"> Unique </a></p>
		</div>
	</div>
</div>
<!-- //footer-->
<!-- Modal -->

	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		  </div>
		  <div class="modal-body modal-spa">
								<div class="login-grids">
									<div class="login">
										<div class="login-left">
											<ul>
												<li><a class="fb" href="https://facebook.com/"><i></i>Sign in with Facebook</a></li>
												<li><a class="goog" href="https://www.google.com/gmail/about/"><i></i>Sign in with Google</a></li>
												<li><a class="linkin" href="https://twitter.com/"><i></i>Sign in with Linkedin</a></li>
											</ul>
										</div>
										<div class="login-right">
											<form>
												<h3>Signin with your account </h3>
												<input type="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">	
												<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">	
												<h4><a href="#">Forgot password</a> / <a href="#">Create new password</a></h4>
												<div class="single-bottom">
													<input type="checkbox"  id="brand" value="">
													<label for="brand"><span></span>Remember Me.</label>
												</div>
												<input type="submit" value="SIGNIN" >
											</form>
										</div>
										<div class="clearfix"></div>								
									</div>
									<p>By logging in you agree to our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></p>
								</div>
		  </div>

		</div>
	  </div>
	</div>

<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<!-- for bootstrap working -->
		<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- gallery Modals -->
<div class="portfolio-modal modal fade slideanim" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content port-modal">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">
			<div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <div class="modal-body">
                        <h3>Air Pollution</h3>
						<hr>
                        <img src="images/wildfires-lede_ap-images-640x360.jpg" class="img-responsive img-centered" alt="">
                        <p class="text-justify">Climate change → Air pollution is the greatest environmental risk to health of our time, and climate change is the greatest public health threat of the 21st century. Burning fossil fuels is the primary source of both climate-warming emissions and health-damaging air pollution. Reducing emissions of short-lived climate pollutants can generate immediate benefits for health and slow climate change Actions to reduce both greenhouse gas emissions and short-lived climate pollutants are also measures to protect public health now and in the future.</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade slideanim" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content port-modal">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">
			<div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <div class="modal-body">
                        <h3>Air Pollution</h3>
						<hr>
                        <img src="images/South_Korea_Air_Pollution_16131_14219668_ver1.0_640_360.jpg" class="img-responsive img-centered" alt="">
                        <p class="text-justify">Climate change → Air pollution is the greatest environmental risk to health of our time, and climate change is the greatest public health threat of the 21st century. Burning fossil fuels is the primary source of both climate-warming emissions and health-damaging air pollution. Reducing emissions of short-lived climate pollutants can generate immediate benefits for health and slow climate change Actions to reduce both greenhouse gas emissions and short-lived climate pollutants are also measures to protect public health now and in the future.</p>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade slideanim" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content port-modal">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">
			<div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <div class="modal-body">
                        <h3>Air Pollution</h3>
						<hr>
                        <img src="images/s107656144.jpg" class="img-responsive img-centered" alt="">
                        <p class="text-justify">Climate change → Air pollution is the greatest environmental risk to health of our time, and climate change is the greatest public health threat of the 21st century. Burning fossil fuels is the primary source of both climate-warming emissions and health-damaging air pollution. Reducing emissions of short-lived climate pollutants can generate immediate benefits for health and slow climate change Actions to reduce both greenhouse gas emissions and short-lived climate pollutants are also measures to protect public health now and in the future.</p>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade slideanim" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content port-modal">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">
			<div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <div class="modal-body">
                        <h3>Air Pollution</h3>
						<hr>
                        <img src="images/India_Toxic_Air_09495_16739256_ver1.0_640_360.jpg" class="img-responsive img-centered" alt="">
                        <p class="text-justify">Climate change → Air pollution is the greatest environmental risk to health of our time, and climate change is the greatest public health threat of the 21st century. Burning fossil fuels is the primary source of both climate-warming emissions and health-damaging air pollution. Reducing emissions of short-lived climate pollutants can generate immediate benefits for health and slow climate change Actions to reduce both greenhouse gas emissions and short-lived climate pollutants are also measures to protect public health now and in the future.</p>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade slideanim" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content port-modal">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">
			<div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <div class="modal-body">
                        <h3>Air Pollution</h3>
						<hr>
                        <img src="images/All-That-Is-Solid.jpg" class="img-responsive img-centered" alt="">
                        <p class="text-justify">Climate change → Air pollution is the greatest environmental risk to health of our time, and climate change is the greatest public health threat of the 21st century. Burning fossil fuels is the primary source of both climate-warming emissions and health-damaging air pollution. Reducing emissions of short-lived climate pollutants can generate immediate benefits for health and slow climate change Actions to reduce both greenhouse gas emissions and short-lived climate pollutants are also measures to protect public health now and in the future.</p>
                   
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade slideanim" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content port-modal">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">
			<div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <div class="modal-body">
                        <h3>Air Pollution</h3>
						<hr>
                        <img src="images/g3.jpg" class="img-responsive img-centered" alt="">
                        <p class="text-justify">Climate change → Air pollution is the greatest environmental risk to health of our time, and climate change is the greatest public health threat of the 21st century. Burning fossil fuels is the primary source of both climate-warming emissions and health-damaging air pollution. Reducing emissions of short-lived climate pollutants can generate immediate benefits for health and slow climate change Actions to reduce both greenhouse gas emissions and short-lived climate pollutants are also measures to protect public health now and in the future.</p>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade slideanim" id="portfolioModal7" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content port-modal">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">
			<div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <div class="modal-body">
                        <h3>Air Pollution</h3>
						<hr>
                        <img src="images/sunlight-blocked-by-air-pollution-323444.jpg" class="img-responsive img-centered" alt="">
                        <p class="text-justify">Climate change → Air pollution is the greatest environmental risk to health of our time, and climate change is the greatest public health threat of the 21st century. Burning fossil fuels is the primary source of both climate-warming emissions and health-damaging air pollution. Reducing emissions of short-lived climate pollutants can generate immediate benefits for health and slow climate change Actions to reduce both greenhouse gas emissions and short-lived climate pollutants are also measures to protect public health now and in the future.</p>
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade slideanim" id="portfolioModal8" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content port-modal">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">
			<div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <div class="modal-body">
                        <h3>Air Pollution</h3>
						<hr>
                        <img src="images/India_Toxic_Air_09630_16731788_ver1.0_640_360.jpg" class="img-responsive img-centered" alt="">
                        <p class="text-justify">Climate change → Air pollution is the greatest environmental risk to health of our time, and climate change is the greatest public health threat of the 21st century. Burning fossil fuels is the primary source of both climate-warming emissions and health-damaging air pollution. Reducing emissions of short-lived climate pollutants can generate immediate benefits for health and slow climate change Actions to reduce both greenhouse gas emissions and short-lived climate pollutants are also measures to protect public health now and in the future.</p>
                     
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade slideanim" id="portfolioModal9" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content port-modal">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">
			<div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <div class="modal-body">
                        <h3>Air Pollution</h3>
						<hr>
                        <img src="images/777054-trafficjam-122916.jpg" class="img-responsive img-centered" alt="">
                        <p class="text-justify">Climate change → Air pollution is the greatest environmental risk to health of our time, and climate change is the greatest public health threat of the 21st century. Burning fossil fuels is the primary source of both climate-warming emissions and health-damaging air pollution. Reducing emissions of short-lived climate pollutants can generate immediate benefits for health and slow climate change Actions to reduce both greenhouse gas emissions and short-lived climate pollutants are also measures to protect public health now and in the future.</p>
                   
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade slideanim" id="portfolioModal10" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content port-modal">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">
			<div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <div class="modal-body">
                        <h3>Air Pollution</h3>
						<hr>
                        <img src="images/AP090108069437_crop-640x360.jpg" class="img-responsive img-centered" alt="">
                        <p class="text-justify">Climate change → Air pollution is the greatest environmental risk to health of our time, and climate change is the greatest public health threat of the 21st century. Burning fossil fuels is the primary source of both climate-warming emissions and health-damaging air pollution. Reducing emissions of short-lived climate pollutants can generate immediate benefits for health and slow climate change Actions to reduce both greenhouse gas emissions and short-lived climate pollutants are also measures to protect public health now and in the future.</p>
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //gallery Modals -->
</body>
</html>