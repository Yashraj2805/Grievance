<?php require 'nav.php'; ?><!DOCTYPE html>
<html>
<head>
	<title>add commitee member</title>

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
		select{
			width: 100%;
			height:45px;
		
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
<form action="add_commitee1.php" method="post">
username:<input type="text" name="uname"><Br><br>
first name :<input type="text" name="fname"><br><br>
last name : <input type="text" name="lname"><br><br>
designation : <input type="text" name="designation"><br><br>
commitee type : <select name="commitee">
	<option>head</option>
	<option>member</option>
</select><br><br>
<input type="submit" name="" value="submit">
</form>
</div>
</body>
</html>