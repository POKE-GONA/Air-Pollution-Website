<?php 

session_start();
$connect=mysqli_connect('localhost','root','','airpollutiondb');
include ('BrowsingFunction.php');
recordBrowse("http://localhost:70/Assm/UserRegister.php");

if (isset($_POST['btnsave']))
{
	$F=$_POST['Fname'];
	$E=$_POST['email'];
	$D=$_POST['dob'];
	$P=$_POST['Padd'];
	$C=$_POST['Pcod'];
	$U=$_POST['Uname'];
	$Pw=md5($_POST['pw']);
	

//----------------------------------------

	$image1=$_FILES['img']['name'];
	$folder="UserImage/";
	if ($image1) 
	{
		$filename1=$folder."_".$image1;
		$copied=copy($_FILES['img']['tmp_name'],$filename1);
		if(!$copied)
		{
			exit("Problem Occured.Cannot uplode image");
		}
	}

//----------------------------------------
	

	$create="INSERT INTO `user`(`FullName`, `Email`, `DateOfBirth`, `PostalAddress`, `Postcode`, `UserName`, `Password`, `UserImage`) VALUES
	('$F','$E','$D','$P','$C','$U','$Pw','$filename1')";
			
	$run=mysqli_query($connect,$create);

	if ($run)
    {
		echo "<script>altert('Save');</script>"; //Javascript cmd//
	}
	else
	{
		echo mysqli_error($connect);
	}

}
 ?>
<?php 
    include'Header1.php';
 ?>

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
<form action='#' method='POST' enctype="multipart/form-data">
<br>	
Full Name <br>
<input name="Fname" type="text" required><br> 
Email <br>
<input name="email" type="email" required><br>
Date Of Birth <br>
<input name="dob" type="date" required><br>
Postal Address <br>
<input name="Padd" type="text" required><br>
Post Code <br>
<input name="Pcod" type="text" required><br>
User Name <br>
<input name="Uname" type="text" required><br>
Password <br>
 <input name="pw" type="Password" required><br>
User Image <br>
<input name="img" type="file" required><br>

<input name="btnsave" type="submit" value="Save">

</form>
</div>
										<div class="clearfix"></div>								
									</div>
									<p class="text-center">By logging in you agree to our <a href="Home.php">Terms and Conditions</a> and <a href="Home.php">Privacy Policy</a></p>
								</div>
 <?php 
    include'Footer1.php';
 ?>