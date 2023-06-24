<?php 
session_start();
include ('BrowsingFunction.php');
recordBrowse("http://localhost:70/Assm/Home.php");
?>

<!DOCTYPE html>
<html>
<head>
<title>Air Pollution</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:title" content="Vide" />
<meta name="keywords" content="Eduma Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/nav.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/iconeffects.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- js -->
   <script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<!-- dropdown -->
<script src="js/jquery.easydropdown.js"></script>
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
<!-- accordian -->
<link rel="stylesheet" href="css/jquery-ui.css">
	<script src="js/jquery-ui.js"></script>
	  <script>
		  $(function() {
			$( "#accordion" ).accordion();
		  });
	  </script>
<!-- //accordian -->
<!-- tabs -->
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
			type: 'default', //Types: default, vertical, accordion           
			width: 'auto', //auto or any width like 600px
			fit: true   // 100% fit in a container
			});
		});				
	</script>
<!-- //tabs -->
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->

</head>
<body>

<div data-vide-bg="video/Air Pollution.mp4">
    <div class="center-container">
		<div class="ban-shade">
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
            <div class="socials">
                <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4dd797b06396480a"></script>
            </div>
			<div class="box_1-top">
				<div class="banner-info wow fadeInLeft animated" data-wow-delay=".5s">
					<h3>Air Pollution Have Too Many Country</h3>
					<h2>Everybody Need Save The World</h2>
					
					<a class="link link--kumya" href="gallery.php" class="hvr-shutter-in-vertical button">See Our Earth</a>
					
				</div>
			</div>
		</div>
    </div>
</div>

    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')</script>
    <script src="js/jquery.vide.min.js"></script>

<!--banner bottom-->
<div class="about">
	<div class="col-md-6 about-left wow fadeInRight animated" data-wow-delay=".5s">
		<h3 class="text-center">welcome to air pollution</h3>
		<p class="text-justify">"Air pollution refers to the condition in which the existence of toxic substances in the atmosphere, generated by various human activities and natural phenomena such as volcanic eruptions, results in damaging effects on the welfare of human beings and the living environment" (Omasa 2002). As stated here, this is a very serious problem which is difficult to treat due to the nature of airborne particles.  
		Air pollution is classified into four main categories: particulate matter, ozone, nitrogen dioxide, and sulfur dioxide. Additionally, air pollution is further divided into primary and secondary pollutants. Primary pollutants are released directly into the atmosphere from a source, where secondary pollutants occur as a result of complex chemical reactions taking place from two pollutants reacting with each other (Kibble and Harrison 2005).</p>
	</div>
	<div class="col-md-6 about-right wow fadeInLeft animated" data-wow-delay=".5s">
		<div class="hi-icon-wrap hi-icon-effect-4 hi-icon-effect-4b">
			<div class="abt-icon">
				<a href="#" class="hi-icon icon1"></a>
				<h4>Air Pollution Start</h4>
			</div>
			<div class="abt-icon">
				<a href="#" class="hi-icon icon2"></a>
				<h4>Short-term effects</h4>
			</div>
			<div class="abt-icon">
				<a href="#" class="hi-icon icon3"></a>
				<h4>Long-term effects</h4>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="clearfix"></div>
</div>
<!--//banner bottom-->
<!--content-->
<div class="content">
	<div class="container">
		<h3>Special care the earth</h3>
		<div class="col-md-6 content-left wow fadeInLeft animated" data-wow-delay=".5s">
			<h4>Air Pollution Country</h4>
			<p class="text-justify"> “The less gasoline we burn, the better we’re doing to reduce air pollution and harmful effects of climate change,” Walke says. “Make good choices about transportation. When you can, walk, ride a bike, or take public transportation. For driving, choose cars that get better miles per gallon of gas or choose an electric car.” You can also investigate your power provider options—you may be able to request that your electricity be supplied by wind or solar. Buying your food locally cuts down on the fossil fuels burned in trucking or flying food in from across the country. And perhaps most important, “Support leaders who push for clean air and water and responsible steps on climate change,” Walke says</p>

			<a href="countrydisplay.php" class="hvr-shutter-in-vertical button">More Country</a>

		</div>
		<div class="col-md-6 content-right wow fadeInRight animated" data-wow-delay=".5s">
			<div class="con-left text-center">
				<span class="glyphicon glyphicon-leaf" aria-hidden="true"></span>
				<h5>Air Pollution?</h5>
				<p class="text-white">Air pollution refers to the release of pollutants into the air that are detrimental to human health and the planet as a whole</p>
			</div>
			<div class="con-left text-center">
				<span class="glyphicon glyphicon-tree-deciduous" aria-hidden="true"></span>
				<h5>Air Pollution type</h5>
				<p>Air pollution in the form of carbon dioxide and methane raises the earth’s temperature</p>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!--//content-->
<!--staff-->
<div class="rooms">
	<div class="container">
		<h3>Effect of Air Polluition</h3>
		<div class="col-md-8 room-right wow fadeInLeft animated" data-wow-delay=".5s">
			<div class="sap_tabs">
							<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
								  <ul class="resp-tabs-list">
									  <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Pollution</span></li>
									  <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Healthy</span></li>
									  <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>Effect</span></li>
									  <li class="resp-tab-item" aria-controls="tab_item-3" role="tab"><span>% Diseases</span></li>
									  <div class="clearfix"></div>
								  </ul>				  	 
								<div class="resp-tabs-container">
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
										<div class="tab_img">
											<h4>Air Pollution Effects</h4>
											<p class="text-justify">Air pollution is one of the world’s largest health and environmental problems. It develops in two contexts: indoor (household) air pollution and outdoor air pollution.We look in detail at the data and research on the health impacts of Indoor Air Pollution, attributed deaths, and its causes across the world in our full entry: Indoor Air Pollution.We look in detail at how exposure to Outdoor Air Pollution, its health impacts and attributed deaths across the world in our full entry: Outdoor Air Pollution.In this entry we look at the aggregate picture of air pollution – both indoor and outdoor.</p>
											
											<div class="fac-img">
												<img src="images/Air-Pollution6.jpg" alt=" "/>
											</div>
											<div class="fac-img">
												<img src="images/Air-Pollution7.jpg" alt=" "/>
											</div>
											<div class="fac-img">
												<img src="images/Air-Pollution8.jpg" alt=" "/>
											</div>
											<div class="fac-img">
												<img src="images/Air-Pollution9.jpg" alt=" "/>
											</div>
											<div class="clearfix"></div>
										</div>								 
									</div>
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
										<div class="tab_img">
											<div class="best-left">
												<h4>Air Pollution Effects</h4>
									<p class="text-justify"> Air pollution is one of the leading risk factors for death. But its impacts go even further, also being one of the main contributors to global disease burden.Global disease burden takes into account not only years of life lost to early death, but also the number of years lived in poor health.
									</p>
									<P class="text-justify">Short-term effects, which are temporary, include illnesses such as pneumonia or bronchitis. They also include discomfort such as irritation to the nose, throat, eyes, or skin. Air pollution can also cause headaches, dizziness, and nausea.
									</P>
											</div>
											
										</div>	 	        					 
									</div>

									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
										<div class="tab_img">

											<h4>Air Pollution Effects</h4>
									<P class="text-justify">Long-term health effects from air pollution include heart disease, lung cancer, and respiratory diseases such as emphysema. Air pollution can also cause long-term damage to people's nerves, brain, kidneys, liver, and other organs. Some scientists suspect air pollutants cause birth defects.</P>
									<p class="text-justify"> Air pollution is closely linked to climate change - the main driver of climate change is fossil fuel combustion which is also a major contributor to air pollution - and efforts to mitigate one can improve the other. This month, the UN Intergovernmental Panel on Climate Change warned that coal-fired electricity must end by 2050 if we are to limit global warming rises to 1.5C. If not, we may see a major climate crisis in just 20 years.
									</p>

											<div class="clearfix"></div>
										</div>		        					 
									</div>
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-3">
										<div class="tab_img">
											<div class="sem-right">
												<img src="images/sem2.jpg" alt=" " />
												<!-- <img src="images/sem3.jpg" alt=" " /> -->
											</div>
											<div class="best-left sem-best">
												<h4>Air Pollution Effects</h4>
												<ul>
													<li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span><a href="#">40% – ischaemic heart disease </a></li>
													<li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span><a href="#">40% – stroke </a></li>
													<li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span><a href="#">11% – chronic obstructive pulmonary disease </a></li>
													<li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span><a href="#">6% - lung cancer </a></li>
													<li><span class="glyphicon glyphicon-ok" aria-hidden="true"></span><a href="#">3% – acute lower respiratory infections in children</a></li>
												</ul>
											</div>
											<div class="clearfix"></div>
										</div>		
									</div>
								</div>	
							</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!--//staff-->
<!--footer-top-->
<div id="faculty" class="footer-top wow fadeInLeft animated" data-wow-delay=".5s">
	<div class="container">
		<h3>Faculty</h3>
		<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
			
			<div id="myTabContent" class="tab-content">
				<div role="tabpanel" class="tabs-para tab-pane fade in active" id="home" aria-labelledby="home-tab">
					<h5 class="text-justify"><span class="quote1"></span>John D. Atkinson can speak to media about air and water pollution, and about personal and corporate sustainability.

His lab develops and applies low-cost, sustainable materials for controlling air and water pollution and aqueous phase contaminants. Additionally, his research team works to measure industrial sustainability through life-cycle analysis — a technique that aims to capture the full environmental impact of products and operations, spanning their creation, use and disposal.<span class="quote2"></span></h5>
					<div class="team-right">
												<div class="bar">
													<p>WordPress (99.9%)</p>
												</div>
												<div class="skills">
														<div class="skill1" style="width:98%"> </div>							
												</div>
												<div class="bar">
													<p>Python (95%)</p>
												</div>
												<div class="skills">
														<div class="skill2" style="width:95%"> </div>							
												</div>
												<div class="bar">
													<p>Adobe illustrator (80%)</p>
												</div>
												<div class="skills">
														<div class="skill3" style="width:80%"> </div>							
												</div>
												<div class="bar">
													<p>Content Development (45%)</p>
												</div>
												<div class="skills">
														<div class="skill4" style="width:45%"> </div>							
												</div>
					</div>
					<div class="clearfix"></div>
				</div>
				<div role="tabpanel" class="tabs-para tab-pane fade" id="profile" aria-labelledby="profile-tab">
					<h5 class="text-justify"><span class="quote1"></span>Stuart M. Evans is an expert in atmospheric science.

He can speak to the media about weather, climate and atmospheric science. He can also discuss climate change, including observed and predicted changes in the Earth’s climate, and causes and effects of global warming.<span class="quote2"></span></h5>
					<div class="team-right">
												<div class="bar">
													<p>WordPress (99.9%)</p>
												</div>
												<div class="skills">
														<div class="skill1" style="width:98%"> </div>							
												</div>
												<div class="bar">
													<p>Python (95%)</p>
												</div>
												<div class="skills">
														<div class="skill2" style="width:95%"> </div>							
												</div>
												<div class="bar">
													<p>Adobe illustrator (80%)</p>
												</div>
												<div class="skills">
														<div class="skill3" style="width:80%"> </div>							
												</div>
												<div class="bar">
													<p>Content Development (45%)</p>
												</div>
												<div class="skills">
														<div class="skill4" style="width:45%"> </div>							
												</div>
					</div>
					<div class="clearfix"></div>
				</div>
				<div role="tabpanel" class="tabs-para tab-pane fade" id="return" aria-labelledby="return-tab">
					<h5 class="text-justify"><span class="quote1"></span>Katarzyna “Kasia” Kordas can talk to the media about the health effects of exposure to lead and other harmful metals and chemicals, particularly in children.

Kordas’ research has evolved from focusing on lead to studying multiple metals and minerals, including arsenic and manganese. Her work has also incorporated air pollution to examine exposures within a broader context.<span class="quote2"></span></h5>	
					<div class="team-right">
												<div class="bar">
													<p>WordPress (99.9%)</p>
												</div>
												<div class="skills">
														<div class="skill1" style="width:98%"> </div>							
												</div>
												<div class="bar">
													<p>Python (95%)</p>
												</div>
												<div class="skills">
														<div class="skill2" style="width:95%"> </div>							
												</div>
												<div class="bar">
													<p>Adobe illustrator (80%)</p>
												</div>
												<div class="skills">
														<div class="skill3" style="width:80%"> </div>							
												</div>
												<div class="bar">
													<p>Content Development (45%)</p>
												</div>
												<div class="skills">
														<div class="skill4" style="width:45%"> </div>							
												</div>
					</div>
					<div class="clearfix"></div>
				</div>
				<div role="tabpanel" class="tabs-para tab-pane fade" id="team4" aria-labelledby="team4-tab">
					<h5 class="text-justify"><span class="quote1"></span>Lina Mu is an epidemiologist who can speak to the media about air pollution, as well as lung, breast and upper-gastrointestinal cancers.

While much of her work has centered on the health effects of air pollution in China, Mu has conducted research on the topic globally, including in the U.S.

She has worked on several projects aimed at understanding the association between indoor and outdoor air pollution exposure and various diseases.<span class="quote2"></span></h5>
					<div class="team-right">
												<div class="bar">
													<p>WordPress (99.9%)</p>
												</div>
												<div class="skills">
														<div class="skill1" style="width:98%"> </div>							
												</div>
												<div class="bar">
													<p>Python (95%)</p>
												</div>
												<div class="skills">
														<div class="skill2" style="width:95%"> </div>							
												</div>
												<div class="bar">
													<p>Adobe illustrator (80%)</p>
												</div>
												<div class="skills">
														<div class="skill3" style="width:80%"> </div>							
												</div>
												<div class="bar">
													<p>Content Development (45%)</p>
												</div>
												<div class="skills">
														<div class="skill4" style="width:45%"> </div>							
												</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<ul id="myTab" class="nav nav-tabs text-center" role="tablist">
			    <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true"><img src="images/team1.jpg" alt=" " /></a></li>
				<li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile"><img src="images/team2.jpg" alt=" " /></a></li>
				<li role="presentation"><a href="#return" role="tab" id="return-tab" data-toggle="tab" aria-controls="return"><img src="images/team3.jpg" alt=" " /></a></li>
				<li role="presentation"><a href="#team4" role="tab" id="team4-tab" data-toggle="tab" aria-controls="team4"><img src="images/team4.jpg" alt=" " /></a></li>
				<div class="clearfix"></div>
			</ul>
		</div>
	</div>
</div>
<!--//footer-top-->
<!--footer-->
<div class="footer">
	<div class="container">
		<div class="col-md-3 footer-grid wow fadeInRight animated" data-wow-delay=".5s">
			<h3>About us</h3>
			<p class="text-justify">For your free time,and they are independent to us the most important is that which is well pleasing in his option of choosing when they are enabled to do nothing to stop it were no so.</p>
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
				<li>Email : <a href="mailto:aqinfo@ricardo.com.">aqinfo@ricardo.com.</a></li>
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
										