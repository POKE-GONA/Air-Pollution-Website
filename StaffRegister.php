<?php 

session_start();
$connect=mysqli_connect('localhost','root','','airpollutiondb');
include'Header1.php';
include ('BrowsingFunction.php');
recordBrowse("http://localhost:70/Assm/StaffRegister.php");

if (isset($_POST['btnsave']))
{
	$Name=$_POST['name'];
	$Email=$_POST['email'];
	$Password=md5($_POST['pw']);

//----------------------------------------

	$image1=$_FILES['img']['name'];
	$folder="staffimage/";
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
	

	$create="INSERT INTO `Admin`(`StaffName`, `Email`, `Password`, `StaffImage`) VALUES
	('$Name','$Email','$Password','$filename1')";
			
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

<form action='StaffRegister.php' method='POST' enctype="multipart/form-data">
	
Staff Name <br>
<input name="name" type="text"><br> 
Staff Email <br>
<input name="email" type="email"><br>
Staff Password <br>
 <input name="pw" type="Password"><br>
Staff Image <br>
<input name="img" type="file"><br>

<input name="btnsave" type="submit" value="Save">

</form>

 <?php 
    include'Footer1.php';
 ?>