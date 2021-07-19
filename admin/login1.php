<?php 
session_start();
require 'config.php';
$en_no = $_POST['enrollment'];
$pass = $_POST['pass'];
echo $en_no;
echo $pass;

if($en_no != null && $pass != null)
{
	if ($en_no == "admin" && $pass == "admin") {
		$_SESSION['name']="admin";
		header("location:index.php");
	}
	else
	{
		?><script type="text/javascript">
			alert("wrong username or password");
		</script><?php
	}

}
?>
