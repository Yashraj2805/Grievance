<?php 
session_start();
require 'config.php';
$un=$_GET['id'];
$q=mysqli_query($connect,"DELETE FROM commitee WHERE username='$un'");
header("location:view_commitee.php");	

 ?>