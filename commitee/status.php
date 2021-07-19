<?php 
require 'config.php';
if (isset($_POST['st'])) {
	$status=$_POST['status'];
	$cid=$_POST['cid'];
	$qqq=mysqli_query($connect,"UPDATE complaints set status='$status' WHERE c_id = '$cid'") or die(mysqli_error($connect));
	header("location:dis.php?id=$cid");
}
 ?>