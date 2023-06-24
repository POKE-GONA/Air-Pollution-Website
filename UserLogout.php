<?php
session_start(); 
include('connect.php');
include ('BrowsingFunction.php');
recordBrowse("http://localhost:70/Assm/UserLogout.php");

session_destroy();

echo "<script>alert('User Logout Sccessful!')</script>";
echo "<script> window.location = 'Home.php'</script>";

 ?>