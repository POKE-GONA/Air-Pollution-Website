<?php 
session_start();
include 'connect.php';
include'Header1.php';
include ('BrowsingFunction.php');
recordBrowse("http://localhost:70/Assm/ViewQuestion.php");
$Question="Select * from FAQ";
$run=mysqli_query($connect,$Question);

 ?>

 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<form action="" method="POST">
 <table width="100%" border="1"> 
 	<th>QuestionId</th>
 	<th>UserId</th>
 	<th>Question</th>
 	<th>QuestionDate</th>
 	<th>Answer</th>
 	<th>Action</th>
<?php 
$ret=mysqli_fetch_array($run);


echo "<tr>";
echo "<td>".$ret['QuestionId']."</td>";
echo "<td>".$ret['UserId']."</td>";
echo "<td>".$ret['Question']."</td>";
echo "<td>".$ret['QuestionDate']."</td>";
echo "<td>".$ret['Answer']."</td>";
echo "<td><a href='answer.php?QID=".$ret['QuestionId']."'>Answer</a></td>";
echo "</tr>";
 ?>
 
 </table>
 </form>
 </body>
 </html>
 
 <?php 
    include'Footer1.php';
 ?>