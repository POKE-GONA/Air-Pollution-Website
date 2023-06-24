<?php 
session_start();
include('connect.php');
include'Header1.php';
include ('BrowsingFunction.php');
recordBrowse("http://localhost:70/Assm/userupdate.php"); 
if (!isset($_SESSION['userid'])) 
	{
		echo "<script>alert('Please Login Account.');</script>";
		echo "<script>window.location='UserLogin.php';</script>";
	}
if (isset($_SESSION['userid'])) 
{
	$userid=$_SESSION['userid'];
	$select="SELECT * from user where UserId='$userid'";
	$run=mysqli_query($connect,$select);
	$ret=mysqli_fetch_array($run);
	$fullname=$ret['FullName'];
	$email=$ret['Email'];
	$pass=md5($ret['Password']);
	$dob=$ret['DateOfBirth'];
	$address=$ret['PostalAddress'];
	$code=$ret['Postcode'];
	
}
if (isset($_POST['btnupdate'])) 
{
	$id=$_POST['txtid'];
	$name=$_POST['txtfullname'];
	$Email=$_POST['txtemail'];
	$Password=md5($_POST['txtpassword']);
	$DOB=$_POST['txtdob'];
	$Address=$_POST['txtaddress'];
	$Code=$_POST['txtcode'];

	$Update="UPDATE user
			 Set FullName='$name',
			 Email='$Email',
			 Password='$Password',
			 DateOfBirth='$DOB',
			 PostalAddress='$Address',
			 Postcode='$Code'
			 where UserId='$id'";

	$runupdate=mysqli_query($connect,$Update);

	if ($runupdate) 
	{
		echo "<script>alert('User Update Successful')</script>";
		echo "<script>window.location='Home.php'</script>";
	}
	else
	{
		echo "<script>alert('Invalid User')</script>";
	}
}

 ?>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 <form action="" method="POST">
 	<table>

 		<input type="hidden" name="txtid" value="<?php echo $userid ?>">

 		<tr><td>Full Name</td>
 		<td><input type="text" name="txtfullname" value="<?php echo $fullname ?>" required></td></tr>

 		<tr><td>Email</td>
 		<td><input type="email" name="txtemail" value="<?php echo $email ?>" required></td></tr>

 		<tr><td>password</td>
 		<td><input type="text" name="txtpassword" value="<?php echo $pass ?>" required></td></tr>

 		<tr><td>Date Of Birth</td>
 		<td><input type="date" name="txtdob" value="<?php echo $dob ?>" required></td></tr>

  		<tr><td>Postal Address</td>
 		<td><input type="text" name="txtaddress" value="<?php echo $address ?>" required></td></tr>

 		<tr><td>Post Code</td>
 		<td><input type="text" name="txtcode" value="<?php echo $code ?>" required></td></tr>

 		<tr>
 		<td><input type="submit" name="btnupdate" value="Update"></td>

 		
 	</table>
 </form>
 </body>
 </html>

  <?php 
    include'Footer1.php';
 ?>