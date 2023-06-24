</div>
<!-- contact -->
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
			<h3>Connect online</h3>

			<ul>
			<h3><a  href="https://www.who.int/sustainable-development/cities/health-risks/air-pollution/en/">More detail for website 1</a></h3><br>
			<h3><a  href="https://www.nationalgeographic.com/environment/2019/08/air-pollution-linked-to-bipolar-disorder-depression/">More detail for website 2</a></h3><br>
			</ul>

			<ul>
				<li><a class="fb1" href="https://facebook.com/"></a></li>
				<li><a class="fb2" href="https://www.pinterest.com/"></a></li>
				<li><a class="fb3" href="https://www.linkedin.com/"></a></li>
				
 			</ul>
			
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
</body>
</html>