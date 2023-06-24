<?php

session_start(); 
include('connect.php');
include ('BrowsingFunction.php');
recordBrowse("http://localhost:70/Assm/StaffLogout.php");

session_destroy();

echo "<script>alert('Staff Logout Sccessful!')</script>";
echo "<script> window.location = 'StaffLogin.php'</script>";

 ?>