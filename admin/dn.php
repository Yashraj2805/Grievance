<?php 
session_start();
require 'config.php';
$id=$_GET['id'];
$q=mysqli_query($connect,"DELETE FROM news WHERE id='$id'") or die(mysqli_error($connect));
header("location:news.php");
 ?>