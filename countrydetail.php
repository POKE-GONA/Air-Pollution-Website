<?php 
session_start();
	include('Connect.php');
	include'Header1.php';
	include ('BrowsingFunction.php');
recordBrowse("http://localhost:70/Assm/countrydetail.php");
if (!isset($_SESSION['userid']))
	{
	echo "<script>alert('Please Login Account');</script>";
	echo "<script>window.location='Feedback.php';</script>";
	}

	if(isset($_REQUEST['CID']))
	{
		$CountryID=$_REQUEST['CID'];
		$Country="SELECT * FROM country WHERE CountryID='$CountryID'";
		$result=mysqli_query($connect,$Country);
		$arr=mysqli_fetch_array($result);
	}
 ?>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<form action="" method="POST">
 	<table>
 		<tr>
 			<td><img src="<?php echo $arr['Image1']; ?>" width="200" height="200"></td>
 			<td><img src="<?php echo $arr['Image2']; ?>" width="200" height="200"></td>
 			<td><img src="<?php echo $arr['Image3']; ?>" width="200" height="200"></td>
 		</tr>
 				<table>
 					<tr>
 						<td width="120pt">Country Name:</td>
 						<td><?php echo $arr['CountryName']; ?></td>
 					</tr>
					<tr>
 						<td width="120pt">Pollution Rate:</td>
 						<td><?php echo $arr['PollutionRate']; ?>%</td>
					</tr>	
					<tr>
 						<td width="120pt">Description:</td>
 						<td><?php echo $arr['Description']; ?></td>
					</tr>
					<tr>
 						<td width="120pt">Year:  </td>
 						<td><?php echo $arr['Year']; ?></td>
					</tr>			
					<tr>
						<td></td>
						<td><a href="feedback.php">Feedback</a></td>
					</tr>	
 				</table>
 	</table>
 	</form>	
 </body>
 </html>

 <?php 
    include'Footer1.php';
 ?>