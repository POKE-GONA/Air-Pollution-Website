<?php 
session_start();
include('connect.php');
include'Header1.php';
include ('BrowsingFunction.php');
recordBrowse("http://localhost:70/Assm/Feedback.php");
if (!isset($_SESSION['userid'])) {
		echo "<script>alert('Please Login Account.');</script>";
		echo "<script>window.location='UserLogin.php';</script>";
	}

if (isset($_POST['btnsubmit'])) 
{
	$uid=$_SESSION['userid'];
	$cmt=$_POST["txtcomment"];
	$date=$_POST["txtdate"];
	$insert="insert into feedback(UserID,Comment,FeedbackDate) values('$uid','$cmt','$date')";
	$run=mysqli_query($connect,$insert);
	if ($run) 
	{
		echo "<script>alert('Thank For Your Feedback!')</script>";
		echo "<script>location='countrydisplay.php'</script>";
	}
	else
	{
		echo mysqli_error($connect);
	}
}

 ?>

<html>
<head>
	<title>FeedBack Form</title>
</head>
<body>
<form action="feedback.php" method="post">
	<br>
<fieldset><legend><h2>Feed Back Pls!</h2></legend>
<table align="left" width="40%" >
<tr>
<td>User Name</td>
<td><input type="text" name="txtusername" value="<?php echo $_SESSION['name'] ?>" readonly></td>
</tr>
<tr>
<td>Feedback Date</td>
<td><input type="text" name="txtdate" value="<?php echo date("Y/m/d") ?>" readonly></td>
</tr>
<tr>
<td>Comment</td>
<td><textarea name="txtcomment" placeholder="Pls Fill Comment."></textarea></td>
</tr>
<tr>
<td><input type="submit" name="btnsubmit" value="submit"></td>
<td><input type="reset" name="btnclear" value="clear"></td>
</tr>
</table>
</fieldset>
</form>
</body>
</html>
<br>

 <?php 
    include'Footer1.php';
 ?>