<?php require 'nav.php'; ?><?php 
$id1=$_GET['id'];
require 'config.php';
$q= mysqli_query($connect,"DELETE FROM student WHERE er_no = '$id1'");
header("location:view_student.php");
?>