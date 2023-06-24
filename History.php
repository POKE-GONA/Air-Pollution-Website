<?php 
	session_start();
	include ('connect.php');
	include('Header1.php');
	include ('BrowsingFunction.php');
recordBrowse("http://localhost:70/Assm/Home.php/History.php"); 

	if (isset($_REQUEST['action'])) 
	{
		unset($_SESSION['Browsing']);
	}

	if (isset($_SESSION['Browsing'])) 
	{
		$count=count($_SESSION['Browsing']);

		if ($count==0) 
		{
			echo "<h2>No History</h2>";
		}
		else
		{
			
			echo "<table border='1'>";
			echo "<tr>
			<th>URL</th>
			<th>Date Time</th>
			</tr>";
			for ($i=0; $i < $count ; $i++) 
			{ 
				echo "<tr>";

				echo "<td>".$_SESSION['Browsing'][$i]['PageName']."</td>";
				echo "<td>".$_SESSION['Browsing'][$i]['DateTime']."</td>";



				echo "</td>";
			}
			echo "</table>";
		}
	}
	else
	{
		echo "<h2> No History</h2>";
	}

 ?>

 <a href="History.php?action=clear">
 	Clear All History
 </a>
 <?php 
include('Footer1.php');
  ?>