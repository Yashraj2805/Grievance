<?php require 'nav.php'; ?>

 <!DOCTYPE html>
<html>
<head>
	<title>add studnet</title>
	<style type="text/css">
		#form{
			
			background-color: rgba(1,0,0,0.5);
			width:50%;
			padding:20px;
			margin-left:25%;
			margin-top:20px;
		}
		input[type=text], input[type=number]{
			width: 	100%;
			height:45px;
			padding:10px;
		}
		span{
			margin-bottom: 20px;
		}
		input[type=submit]{
			width: 	30%;
			height:45px;
		}
	</style>
</head>
<body>
	<div id="form">
<form action="add_student1.php" method="post">
	<span>Enrollment:</span> <br>		<input type="number" name="Enrollment"><br><br>	
	<span>Firstname: </span><br>		<input type="text" name="fname"><br><br>	
	<span>Lastname: </span><br>	<input type="text" name="lname"><br><br>	
	gender: <input type="radio" name="gender" value="male"> Male | <input type="radio" name="gender" value="Female"> Female
	<br><br>	
	

	<input type="submit" name="" value="add">

</form>
</div>
</body>
</html>

