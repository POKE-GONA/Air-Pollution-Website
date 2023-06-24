<?php 
session_start();
include('connect.php');
include ('BrowsingFunction.php');
recordBrowse("http://localhost:70/Assm/countrydisplay.php");

$country="SELECT * from country";
$run=mysqli_query($connect,$country);
$count=mysqli_num_rows($run);
 ?>

 <?php include'Header1.php' ?>
 
<html>
<head>
	<title>Air Pollution Display</title>

	 	 	<script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
 	<style type="text/css">
 		#myInput {
  background-image: url('/css/searchicon.png'); /* Add a search icon to input */
  background-position: 10px 12px; /* Position the search icon */
  background-repeat: no-repeat; /* Do not repeat the icon image */
  width: 100%; /* Full-width */
  font-size: 16px; /* Increase font-size */
  padding: 12px 20px 12px 40px; /* Add some padding */
  border: 1px solid #ddd; /* Add a grey border */
  margin-bottom: 12px; /* Add some space below the input */
}

#myTable {
  border-collapse: collapse; /* Collapse borders */
  width: 100%; /* Full-width */
  border: 1px solid #ddd; /* Add a grey border */
  font-size: 18px; /* Increase font-size */
}

#myTable th, #myTable td {
  text-align: left; /* Left-align text */
  padding: 12px; /* Add padding */
}

#myTable tr {
  /* Add a bottom border to all table rows */
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  /* Add a grey background color to the table header and on hover */
  background-color: #f1f1f1;
}

<?php 
    include'Header1.php';
 ?>

 	</style>
</head>
<body>
<form action="" method="POST">
	<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search By City Name..">
<fieldset>
<legend>Air Pollution Rating</legend>
  <table id="myTable">
    <tr class="header">

	<?php 
	for ($i=0; $i <$count ; $i++) 
	{ 
		$data=mysqli_fetch_array($run);
		echo "<tr>";
		echo "<td><img src='".$data['Image1']."' width='150px' height='150px'></td>";
		echo "<td>CountryName: ".$data['CountryName']."</td>";
		echo "<td>Pollution Rate: ".$data['PollutionRate']."%</td>";
		echo "<td><a href='countrydetail.php?CID=".$data['CountryID']."'>Detail</a></td>";
		echo "</tr>";
	}
	 ?>

	</tr>
	 </table>
</fieldset>
</form>
</body>
</html>

<?php 
    include'Footer1.php';
 ?>