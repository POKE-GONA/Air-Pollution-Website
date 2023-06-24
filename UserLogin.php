<?php 
session_start();
include('connect.php');
include'Header1.php';
include ('BrowsingFunction.php');
recordBrowse("http://localhost:70/Assm/UserLogin.php"); 

if (isset($_SESSION['loginCount']))
	{
	if($_SESSION ['loginCount'] >=3)
	{
		echo "<script> window.alert ('Please Try Again in 10 Minutes')</script>";
		echo "<script> window.location = 'LoginTimer.php'</script>";
	}
	}
	else if (!isset($_SESSION['loginCount']))
	{
	$_SESSION['loginCount']=0;
	}
if (isset($_POST['btnlogin'])) 
{
	$name=$_POST['txtname'];
	$password=md5($_POST['pw']);

	$select="SELECT * FROM user where UserName='$name' AND Password='$password'";
	$run=mysqli_query($connect,$select);
	$count=mysqli_num_rows($run);

	if ($count==1) 
	{
		$ret=mysqli_fetch_array($run);

		$_SESSION['userid']=$ret['UserId'];
		$_SESSION['name']=$ret['FullName'];
		$_SESSION['email']=$ret['Email'];

		echo "<script>alert('User Login Successful')</script>";
		unset($_SESSION['loginCount']);
		echo "<script>window.location='Home.php'</script>";
	}
	else
	{
		$_SESSION['loginCount']++;
 		echo "<script> window.alert ('Invalid! Login Attempt:".$_SESSION['loginCount']."')</script>";
 		echo" <script>alert ('Invalid user') </script>";
	}

}

 ?>

<form action="" method="POST">
<table>
<tr><td>User Name</td>
<td><input type="text" name="txtname" required></td></tr>
<tr><td>Password</td>
<td><input type="password" name="pw" required></td></tr>
<tr>
<td><input type="submit" name="btnlogin" value="Login"></td></tr>
</table>
</form>


 <?php 
    include'Footer1.php';
 ?>