<?php 
require 'config.php';
$t=mysqli_real_escape_string($connect,$_POST['title']);
$d=mysqli_real_escape_string($connect,$_POST['dis']);
$date1= date("d/m/Y");
$time1 = date("h:i:sa");

$q=mysqli_query($connect,"INSERT INTO news (title,dis,date1,time1) VALUES ('$t','$d','$date1','$time1')") or die(mysqli_error($connect));
header("location:news.php");
 ?>