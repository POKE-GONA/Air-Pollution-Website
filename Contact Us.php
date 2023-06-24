<?php 
session_start();
include ('connect.php');
include('Header1.php');
include ('BrowsingFunction.php');
recordBrowse("http://localhost:70/Assm/Contact Us.php");

if (isset($_REQUEST['btnAsk']))
{
	$name=$_REQUEST['txtName'];
	$email=$_REQUEST['txtEmail'];
	$Ask=$_REQUEST['txtAsk'];
	$Date=$_REQUEST['txtdate'];
	$id=$_SESSION['userid'];
}
 ?>
 
<html>
<head>
	<title></title>
</head>
<body>
	<form action= "Q&A.php" method="post">
		<h2>Feel Free to Ask Questions!</h2> <br>
		<table>
			<tr> 
				<td>Customer Name</td>
			<td>
				<input type="text" name="txtName" required="" value="<?php echo $_SESSION['name'] ?>" readonly>
			</td>
			</tr>
			<tr> 
				<td>Customer Email</td>
			<td>
				<input type="email" name="txtEmail" value="<?php echo $_SESSION['email'] ?>" readonly>
			</td>
			</tr>

			<tr>
				<td>Question Date</td>
				<td><input type="text" name="txtdate" value="<?php echo date("Y/m/d") ?>" readonly></td>
			</tr>
			</tr>
			<tr> 
				<td>Ask</td>
			<td>
				<textarea name="txtAsk" required=""></textarea>
			</td>
			</tr>
		<tr>
			<td colspan="2">
				<input type="submit" name="btnAsk" value="Submit Question">
			</td>
		</tr>
		</table>
	</form>
</body>
</html>

<?php 
include('Footer1.php');
 ?>