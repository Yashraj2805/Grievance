<?php require 'nav.php'; ?><!DOCTYPE html>
<html>
<head>
	<title>view student</title>
		<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}
#ta{
	padding: 20px;
}
thead{
	background-color: #e8c9c9;
}

tr:nth-child(even) {background-color: #f2f2f2;}
</style>
</head>
<body>
	
	
<?php 
require 'config.php';
 if(!isset($_POST['submit']))
{

	$q = mysqli_query($connect,"select * from student ") or die(mysqli_error($connect));

$r=mysqli_num_rows($q);
if($r!= 0)
{ 
	echo "ALL";?>
	<a href="resetall.php?id=ALL">reset all</a><br>
<input type="search" class="light-table-filter" id="input" data-table="order-table" placeholder="seach for student">
<div id="ta">
<table class="order-table table">
		<thead>
			<tr><th>enrollment</th>
				<th>first name</th>
				<th>last name</th>
			
				<th>reset password</th>
				<th>delete</th>
				
			</tr>
		</thead> <?php
while ($row =mysqli_fetch_array($q)) {
	?>
<tr>
	<td><?php echo $row['er_no']; ?></td>
	<td><?php echo $row['fname']; ?></td>
	<td><?php echo $row['lname']; ?></td>
	
	<td><a href="reset.php?id=<?php echo $row['er_no']; ?>">reset password</a></td>
	<td><a href="dele.php?id=<?php echo $row['er_no']; ?>" onclick="dele()">delete</a></td>
	
</tr>
	<?php
}
}
else
{
	echo "not available";
}	
}
else if(isset($_POST['submit']))
{

$ss=$_POST['year'];	
echo $ss."<br>";
?> <a href="resetall.php?id=<?php echo $ss;?>">reset all</a><?php
if($ss=="ALL")
{
	$q = mysqli_query($connect,"select * from student ") or die(mysqli_error($connect));
}
else
{
$q = mysqli_query($connect,"select * from student WHERE year ='$ss' ") or die(mysqli_error($connect));
}
$r=mysqli_num_rows($q);
if($r!= 0)
{
	?>
	
<table class="order-table table">

		<thead>
			<tr><th>enrollment</th>
				<th>first name</th>
				<th>last name</th>
				
				<th>action</th></tr>
		</thead> <?php

while ($row =mysqli_fetch_array($q)) {
	?>
<tr>
	<td><?php echo $row['er_no']; ?></td>
	<td><?php echo $row['fname']; ?></td>
	<td><?php echo $row['lname']; ?></td>
	
	<td><a href="reset.php?id=<?php echo $row['er_no']; ?>">reset password</a></td>
</tr>
	<?php
}
}
else
{
	echo "not available";
}	
}
?>
</div>
</body>
<script type="text/javascript">
(function(document) {
	'use strict';

	var LightTableFilter = (function(Arr) {

		var _input;

		function _onInputEvent(e) {
			_input = e.target;
			var tables = document.getElementsByClassName(_input.getAttribute('data-table'));
			Arr.forEach.call(tables, function(table) {
				Arr.forEach.call(table.tBodies, function(tbody) {
					Arr.forEach.call(tbody.rows, _filter);
				});
			});
		}

		function _filter(row) {
			var text = row.textContent.toLowerCase(), val = _input.value.toLowerCase();
			row.style.display = text.indexOf(val) === -1 ? 'none' : 'table-row';
		}

		return {
			init: function() {
				var inputs = document.getElementsByClassName('light-table-filter');
				Arr.forEach.call(inputs, function(input) {
					input.oninput = _onInputEvent;
				});
			}
		};
	})(Array.prototype);

	document.addEventListener('readystatechange', function() {
		if (document.readyState === 'complete') {
			LightTableFilter.init();
		}
	});

})(document);
</script>

</html>