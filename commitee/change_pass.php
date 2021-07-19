



<!DOCTYPE html>
<html>
<head>
	<title>chnage pass</title>
</head>
<body>
<?php 
session_start();
require 'config.php';
$uname =  $_SESSION['uname'];
$pass = $_SESSION['pass'];
$q = mysqli_query($connect,"SELECT * FROM commitee WHERE username = '$uname' AND t_password = '$pass' ");
	

	


?>
</body>
</html>





<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login: Student</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100"><?php
				if ($q) {
		//echo "iside first if";
		$r = mysqli_num_rows($q);
		if($r == 1)
		{	
			?> 
				<form class="login100-form validate-form" action="change_pass.php" method="post">
					<div id="error" style="color:red;"></div>
					<span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-font"></i>
					</span>

					<div class="wrap-input100 validate-input" >
						<label for="en">password</label>
						<input class="input100" type="password" name="pass1" id="en">
						
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<label for="pass">confirm password</label>
						<input class="input100" type="password" name="pass2" id="pass">
						
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" name="submit">
								submit
							</button>
						</div>
					</div>
				</form><?php  }?>
			</div>
		</div>
	</div>
	


	

</body>
</html>

<?php 

if(isset($_POST['submit']))
{
	$pass1 = $_POST['pass1'];
	$pass2 = $_POST['pass2'];
	$n = null;
	if($pass1 != null && $pass2 != null)
	{
	if ($pass1 == $pass2) {
		echo "ok";
		$q1 =  mysqli_query($connect,"UPDATE commitee SET password = '$pass1' , t_password= '$n' WHERE username = '$uname' ");
		if($q1)
		{

			header("location:login.php");
		}
		else
		{
			?>
			<script type="text/javascript">
				document.getElementById('error').innerHTML="Internal Server Error";
			</script>
			<?php
		}
	}
	else
	{
		$pass1="";
		$pass2="";

			?>
			<script type="text/javascript">
				document.getElementById('error').innerHTML="password not match";
			</script>
			<?php

		
	}
}
}
} ?>